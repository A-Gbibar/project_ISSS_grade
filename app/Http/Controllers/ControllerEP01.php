<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pp01;
use App\pp02;
use App\pp03;
use App\production_p;
use Illuminate\Support\Facades\DB;

class ControllerEP01 extends Controller
{
    public function index($id){
        $notePP01 = pp01::where('idProuduction' ,  $id)->first();
        $notePP01 = isset($notePP01) ? $notePP01->note : 0;
        $notePP02 = pp02::where('idProuduction' ,  $id)->first();
        $notePP02  = isset($notePP02 ) ? $notePP02->NTotal : 0;
        $notePP03 = pp03::where('idProuduction' ,  $id)->first();
        $notePP03 = isset($notePP03) ? $notePP03->NTotal : 0;

        $totalPP = $notePP01 + $notePP02 + $notePP03;
        $totalPP = $totalPP > 20 ?20:$totalPP;

        $singleUser = production_p::where('id_PP' , $id)->first();
        if( !isset($singleUser) ){
            return redirect()->route('wolcome.index');
        }

        $updateTotalePP = DB::table('production_ps')->where('id_PP' , $id)->update([ 'TotalPP' => $totalPP ]);
        
        return view('/layout.NextStep' , ['name' => 'PP' ]);

    }
}
