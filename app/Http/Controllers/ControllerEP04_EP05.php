<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ep04;
use App\ep05;

class ControllerEP04_EP05 extends Controller
{
    public function show($id){
        if( isset($_GET['conection']) ){

            return view('layout.productionEP04_EP05' , ['id' => $id]);
        }
        return back();
    }

    public function store($id , Request $request){
        $existence = new ControllerEP01();
        $existence->existence($id);
        if(isset($request->NomberFormation)){
            $get = DB::table('config_notes')->select('NEP04', 'NEP04_Max')->get();
            $Note = $get[0]->NEP04;
            $NoteLast = ep04::where('idP' , $id)->latest()->first();
            $NoteLast = ($NoteLast !== null)? $NoteLast->TotalEP04 : 0;
            $total = ($NoteLast == 0) ? ($request->NomberFormation) * $Note : $Note + ($request->NomberFormation);
            ep04::create(
                [
                    'NomberFormation' => $request->NomberFormation,
                    'idP' => $id,
                    'TotalEP04' => ( $total  > $get[0]->NEP04_Max ) ? $get[0]->NEP04_Max : $total,
                ]
                );
        }

        if(isset($request->NomberSortie)){

            $get = DB::table('config_notes')->select('NEP05', 'NEP05_Max')->get();
            $Note = $get[0]->NEP05;
            $NoteLast = ep05::where('idP' , $id)->latest()->first();
            $NoteLast = ($NoteLast !== null)? $NoteLast->TotalEP05 : 0;
            $total = ($NoteLast == 0) ? ($request->NomberFormation) * $Note : $Note + ($request->NomberFormation);
            $create =   ep05::create(
                [
                    'NomberSortie' => $request->NomberSortie,
                    'idP' => $id,
                    'TotalEP05' => ( $total  > $get[0]->NEP05_Max ) ? $get[0]->NEP05_Max : $total,
                    ]
                );
        }

        return redirect()->route('EP06.show' , ['id'=>$id , 'conection' =>'good']);


        }

    }

