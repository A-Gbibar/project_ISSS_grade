<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rpa08;
class ControllerRPA08 extends Controller
{
    public function show($id){
        if (isset($_GET['conection'])) {

            $rpa08 = rpa08::where('idP' , $id)->latest()->first();
            if( isset($rpa08) ){
                return redirect()->route("nextStepPS01.index" , ['id' => $id ,'conection' =>'good']);
            }

            return view( 'layout.RPA01.productionRPA08' , ['id' => $id]);
        }
        return back();
    }

    public function store($id , Request $request){
        $ControllerRPA01 = new ControllerRPA01;
        $ControllerRPA01->existence($id);
        if( isset($request) ){
            if( isset($request->type) ){
                $NomberMembre = 0;
                $NomberResponsable = 0;
                foreach($request->type as $key => $index){
                        if( $index == 'Membre' ){
                            $NomberMembre += 0.5;
                        }else if($index == "Responsable"){
                            $NomberResponsable += 1;
                        }
                }   
                $NoteLast = rpa08::where('idP' , $id)->latest()->first();
                $NoteLast = ($NoteLast !== null)? $NoteLast->TotalRPA08 : 0;
                $Total = $NoteLast;
                $Total += $NomberMembre + $NomberResponsable;

                $Total = ( $Total > 1 ) ? 1 : $Total;

                $data = [
                    'NomberResponsable' => $NomberResponsable,
                    'NomberMembre' => $NomberMembre,
                    'idP' => $id,
                    'TotalRPA08' => $Total
                ];
                rpa08::create( $data );
            }
        }
        return redirect()->route('nextStepPS01.index' , ['id' => $id ,'conection' =>'good' ] );

    }
}
 