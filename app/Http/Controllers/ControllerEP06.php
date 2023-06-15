<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ep06;

class ControllerEP06 extends Controller
{
    public function show($id){
        if( isset($_GET['conection']) ){
            $ep06 = ep06::where('idP' , $id)->latest()->first();
            if( isset($ep06)  ){
                return redirect()->route('nextStepRPA.index' , ['id' => $id ,'conection' =>'good']);
            }
            return view('layout.productionEP06' , ['id' => $id]);
        }
        return back();
    }

    public function store($id , Request $request){
        $getEP06 = DB::table('config_notes')->select('NEP06', 'NEP06_Max')->get();
        $Note = $getEP06[0]->NEP06;
        if( isset($request) ){

            $existence = new ControllerEP01();
            $existence->existence($id);

            $file = $request->file("document");
            //check file is get
            if( isset($file) ){
                foreach( $file as $key=>$index ){
                    if(  $file[$key]->getsize() > 1000000){
                        return back()->withErrors(
                            [
                                'EroorSize'  =>  "Taille d'erreur veuillez vérifier la taille max 1 Mo",
                            ]
                            )->onlyInput();
                    }
                }
            }
            $NoteLast = ep06::where('idP' , $id)->latest()->first();
            $NoteLast = ($NoteLast !== null)? $NoteLast->TotalEP06 : 0;

           foreach( $request->DateSortie as $key => $index ){
             $fileName = (isset($file[$key])) ? time() . '' .$file[$key]->getClientOriginalName() : '';
             $filePath = (isset($file[$key])) ? $file[$key]->storeAs('EP06' , $fileName , 'public') : null;
             $Note += ($Note * $key+1 > $getEP06[0]->NEP06_Max ) ? $getEP06[0]->NEP06_Max : $Note * $key;
             $NoteFine = ( $key == 0 )? $NoteLast+$Note : $Note;
             $NoteFine = ($NoteFine > $getEP06[0]->NEP06_Max ) ?  $getEP06[0]->NEP06_Max : $NoteFine;
                $data = [
                    "pagePDF" => $filePath,
                    "DateVisite" => $request->DateVisite[$key],
                    "DateSortie" => $request->DateSortie[$key],
                    'idP' => $id,
                    'TotalEP06' => $NoteFine, 
                ];
                ep06::create($data);

           }
          return redirect()->route('nextStepRPA.index' , ['id'=>$id , 'conection' =>'good']);
      
        }
    }

}
