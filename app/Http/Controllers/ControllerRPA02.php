<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rpa02;

class ControllerRPA02 extends Controller
{
    public function show($id){
        if (isset($_GET['conection'])) {
            return view( 'layout.RPA01.productionRPA02' , ['id' => $id]);
        }
        return back();
    }

    public function store($id , Request $request){

        $ControllerRPA01 = new ControllerRPA01;
        $ControllerRPA01->existence($id);

            if( isset($request) ){
                $NoteLast = rpa02::where('idP' , $id)->latest()->first();
                $NoteLast = ($NoteLast !== null)? $NoteLast->TotalRPA02 : 0;  
                $noteMondat    = $NoteLast;
 
            foreach( $request->NomberMandat as $key => $index){
                $noteMondat    +=  1;
                $noteMondat    += ($index - 1 == 0) ? $noteMondat : ($index - 1) * 0.25;
                $total    = ( $noteMondat > 2 ) ? 2 : $noteMondat;
                $data = [
                    'MembreConseil'=>$request->type[$key],
                    'NomberMandat' => $index,
                    'idP' => $id,
                    'TotalRP02' => $total,
                ];
               $create =  rpa02::create($data);
            }
            }

            return redirect()->route('RPA03.show' , ['id' => $id ,'conection' =>'good'] );                

    }
}
