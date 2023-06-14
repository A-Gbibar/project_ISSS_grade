<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rpa03;
use App\pp02;

class ControllerRPA03 extends Controller
{
    public function show($id){
        if (isset($_GET['conection'])) {
            return view( 'layout.RPA01.productionRPA03' , ['id' => $id]);
        }
        return back();
    }

    public function store($id , Request $request){

        $ControllerRPA01 = new ControllerRPA01;
        $ControllerRPA01->existence($id);

        // $module = pp02::where("idProuduction" ,  $id )->get();
        // $NumberModule = 0;
        // $cours = 0;
        // $TD = 0;
        // $TP = 0;
        // $Examens = 0;
        // foreach( $module as $key => $index ){
        //     if(  $module[$key]->TypePolycopies == "Cours" ){
        //         $NumberModule += 1;
        //         $cours += 1;
        //     }else if($module[$key]->TypePolycopies == "Examens"){
        //         $NumberModule += 1;
        //         $Examens += 1;
        //     }else if($module[$key]->TypePolycopies == "TD"){
        //         $NumberModule += 1;
        //         $TD += 1;
        //     }else if($module[$key]->TypePolycopies == "TP"){
        //         $NumberModule += 1;
        //         $TP += 1;
        //     }
        // }
        // // $NumberModule = [$cours , $TD , $TP , $Examens];
        // dd( $NumberModule );

        $NoteLast = rpa03::where('idP' , $id)->latest()->first();
        $NoteLast = ($NoteLast !== null)? $NoteLast->TotalRP03 : 0;  
        $notTotal    = $NoteLast;
        $NoteMandat  = 0; 
        $NoteCommission = 0;
        $NoteFinalCommission  = 0; 
        $NoteFinalMandat = 0;
            if( isset($request) ){
                if( isset($request->type) ){
                    foreach( $request->type  as $key => $index){
                        if( $index == "scientifique" ){
                            $NoteMandat += 1.5;
                            $notTotal += ( $notTotal > 2.5 )?2.5:$NoteMandat;
                        }
                        if( $request->type[$key] == "paritaire" ){
                            $nomber = ($request->Nomber[$key]) - 1 ;
                            $nomberParitaire = 0.5;
                            $nomberParitaire += ($nomber == 0  )? $nomberParitaire : $nomber * 0.25; 
                            $nomberParitaire = ($nomberParitaire  > 1.25 )? 1.25 : $nomberParitaire;
                            $NoteMandat +=  $nomberParitaire;
                            $notTotal += ( $notTotal > 2.5 )?2.5:$nomberParitaire;
                        }
                            $NoteFinalMandat = ( $NoteMandat > 2.5 ) ? 2.5 : $NoteMandat;
    
                        if( $request->type[$key] == "pédagogique" ){
                            $NoteCommission += 0.25 * $request->Nomber[$key];
                            $NoteFinalCommission = ($NoteCommission > 0.5 ) ? 0.5 : $NoteCommission;
                            $notTotal += ($notTotal > 2.5 )?2.5:$NoteFinalCommission;
    
                        }
                        $notTotal = ( $notTotal > 2.5 ) ? 2.5 : $notTotal;
                        $data = [
                            'Commissions' => $request->type[$key],
                            'NomberMandat' => $NoteFinalMandat,
                            'NomberCommissions' => $NoteFinalCommission,
                            'idP' => $id,
                            'TotalRP03' => $notTotal
                        ];
    
                        rpa03::create($data);
    
                        
                    }
                }
            }
           
             return redirect()->route('RPA04-05-06-07.show' , 
                ['id' => $id ,'conection' =>'good'] );                

    }
}
