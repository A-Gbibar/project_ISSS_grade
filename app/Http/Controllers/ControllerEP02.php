<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ep02;

class ControllerEP02 extends Controller
{
    public function show($id){
        if( isset($_GET['conection']) ){

            $ep02 = ep02::where('idP' , $id)->latest()->first();
            if( isset($ep02) ){
                return redirect()->route('EP03.show' , ['id' => $id ,'conection' =>'good']);
            }

            return view('layout.productionEP02' , ['id' => $id]);
        }
        return back();
    }

    
    public function store($id , Request $request){
        $getEP02 = DB::table('config_notes')->select('NEP02', 'NEP02_Max')->get();
        $Note = $getEP02[0]->NEP02;
        if( isset($request) ){

            $existence = new ControllerEP01();
            $existence->existence($id);

            $file = $request->file("page");
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
       
            $NoteLast = ep02::where('idP' , $id)->latest()->first();
            $NoteLast = ($NoteLast !== null)? $NoteLast->TotalEP04 : 0;

           foreach( $request->DateRelisation as $key => $index ){
             $fileName = (isset($file[$key])) ? time() . '' .$file[$key]->getClientOriginalName() : '';
             $filePath = (isset($file[$key])) ? $file[$key]->storeAs('EP02' , $fileName , 'public') : null;
             $Note += ($Note * $key+1 > $getEP02[0]->NEP02_Max ) ? $getEP02[0]->NEP02_Max : $Note * $key;
             $NoteFine = ( $key == 0 )? $NoteLast+$Note : $Note;
             $NoteFine += ($NoteFine > $getEP02[0]->NEP02_Max ) ?  $getEP02[0]->NEP02_Max : $NoteFine;
                $data = [
                    "pagePDF" => $filePath,
                    "DateRealisation" => $request->DateRelisation[$key],
                    'idP' => $id,
                    'TotalEP02' => $NoteFine, 
                ];
                ep02::create($data);

           }
           return redirect()->route('EP03.show' , ['id'=>$id , 'conection' =>'good']);
        }
    }
}
