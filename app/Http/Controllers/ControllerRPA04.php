<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rpa04;
use App\rpa05;
use App\rpa06;
use App\rpa07;

class ControllerRPA04 extends Controller
{
    public function show($id){
        if (isset($_GET['conection'])) {
            return view( 'layout.RPA01.productionRPA04_RPA05_RPA06_RPA07' , ['id' => $id]);
        }
        return back();
    }

    public function store($id , Request $request){
        $ControllerRPA01 = new ControllerRPA01;
        $ControllerRPA01->existence($id);
        
        if( isset($request->NomberModule)  ){
            $NoteLast = rpa04::where('idP' , $id)->latest()->first();
            $NoteLast = ($NoteLast !== null)? $NoteLast->TotalRPA04 : 0;
            $Total = $NoteLast;
            $Total += $request->NomberModule;
            $Total = ($Total > 2) ? 2 : $Total;
            $data = [
                'NomberModule' => $request->NomberModule,
                'idP' => $id,
                'TotalRPA04' => $Total
            ] ;

            rpa04::create($data);
              
        }
        if( isset($request->NomberCommission)  ){
            $NoteLast = rpa05::where('idP' , $id)->latest()->first();
            $NoteLast = ($NoteLast !== null)? $NoteLast->TotalRPA05 : 0;
            $Total = $NoteLast;
            $Total += $request->NomberCommission * 0.5 ;
            $Total = ($Total > 1) ? 1 : $Total;
            $data = [
                'NomberCommission' => $request->NomberCommission,
                'idP' => $id,
                'TotalRPA05' => $Total
            ] ;
            rpa05::create($data);

        }

        if( isset($request->NomberCommission2)  ){
            $NoteLast = rpa06::where('idP' , $id)->latest()->first();
            $NoteLast = ($NoteLast !== null)? $NoteLast->TotalRPA06 : 0;
            $Total = $NoteLast;
            $Total += $request->NomberCommission2 ;
            $Total = ($Total > 4) ? 4 : $Total;
            $data = [
                'NomberCommission' => $request->NomberCommission2,
                'idP' => $id,
                'TotalRPA06' => $Total
            ] ;
            rpa06::create($data);
        }

        if( isset($request->NomberCommission3)  ){
            $NoteLast = rpa07::where('idP' , $id)->latest()->first();
            $NoteLast = ($NoteLast !== null)? $NoteLast->TotalRPA07 : 0;
            $Total = $NoteLast;
            $Total += $request->NomberCommission3 * 0.5 ;
            $Total = ($Total > 1) ? 1 : $Total;
            $data = [
                'NomberCommission' => $request->NomberCommission2,
                'idP' => $id,
                'TotalRPA07' => $Total
            ] ;
            rpa07::create($data);
        }

        return redirect()->route('RPA08.show' , 
        ['id' => $id ,'conection' =>'good'] );      


    }
}
