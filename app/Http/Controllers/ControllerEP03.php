<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ep03;

class ControllerEP03 extends Controller
{
    public function show($id){
        if( isset($_GET['conection']) ){

            return view('layout.productionEP03' , ['id' => $id]);
        }
        return back();
    }

    public function store($id , Request $request){
        $getEP03 = DB::table('config_notes')->select('NEP03', 'NEP03_Max')->get();
        $Note = $getEP03[0]->NEP03;
        if( isset($request) ){

            $existence = new ControllerEP01();
            $existence->existence($id);

            $file = $request->file("pageAttestation");
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
            // get Last Note
            $NoteLast = ep03::where('idP' , $id)->latest()->first();
            $NoteLast = ($NoteLast !== null)? $NoteLast->TotalEP04 : 0;

           foreach( $request->type as $key => $index ){
             $fileName = (isset($file[$key])) ? time() . '' .$file[$key]->getClientOriginalName() : '';
             $filePath = (isset($file[$key])) ? $file[$key]->storeAs('EP03' , $fileName , 'public') : null;
             $Note += ($Note * $key+1 > $getEP03[0]->NEP03_Max ) ? $getEP03[0]->NEP03_Max : $Note * $key;

             $NoteFine = ( $key == 0 )? $NoteLast+$Note : $Note;
             $NoteFine = ($NoteFine > $getEP03[0]->NEP03_Max ) ?  $getEP03[0]->NEP03_Max : $NoteFine;

                $data = [
                    "Formation" => $request->type[$key],
                    "pagePDF" => $filePath,
                    'idP' => $id,
                    'TotalEP03' =>  $NoteFine, 
                ];
                ep03::create($data);

           }
          return redirect()->route('EP04_EP05.show' , ['id'=>$id , 'conection' =>'good']);
        }
    }
}
