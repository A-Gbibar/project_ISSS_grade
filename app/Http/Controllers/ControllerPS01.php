<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\rpa01;
use App\rpa02;
use App\rpa03;
use App\rpa04;
use App\rpa05;
use App\rpa06;
use App\rpa07;
use App\rpa08;
use App\responsabilite_pa;
use App\encadement_p;
use App\production_p;
use App\activite_pedagogique;


class ControllerPS01 extends Controller
{
    public function index($id)
    {
        if (isset($_GET['conection'])) {
            $noteRPA01 = rpa01::where('idP',  $id)->latest()->first();
            $noteRPA01 = isset($noteRPA01) ? $noteRPA01->TotalRPA01 : 0;
            $noteRPA02 = rpa02::where('idP',  $id)->latest()->first();
            $noteRPA02 = isset($noteRPA02) ? $noteRPA02->TotalRPA02 : 0;
            $noteRPA03 = rpa03::where('idP',  $id)->latest()->first();
            $noteRPA03 = isset($noteRPA03) ? $noteRPA03->TotalRPA03 : 0;
            $noteRPA04 = rpa04::where('idP',  $id)->latest()->first();
            $noteRPA04 = isset($noteRPA04) ? $noteRPA04->TotalRPA04 : 0;
            $noteRPA05 = rpa05::where('idP',  $id)->latest()->first();
            $noteRPA05 = isset($noteRPA05) ? $noteRPA05->TotalRPA05 : 0;
            $noteRPA06 = rpa06::where('idP',  $id)->latest()->first();
            $noteRPA06 = isset($noteRPA06) ? $noteRPA06->TotalRPA06 : 0;
            $noteRPA07 = rpa07::where('idP',  $id)->latest()->first();
            $noteRPA07 = isset($noteRPA07) ? $noteRPA07->TotalRPA07 : 0;
            $noteRPA08 = rpa08::where('idP',  $id)->latest()->first();
            $noteRPA08 = isset($noteRPA08) ? $noteRPA08->TotalRPA08 : 0;
 


            $totalRPA = $noteRPA01 + $noteRPA02   + $noteRPA03 + $noteRPA04 + $noteRPA05 + $noteRPA06 + $noteRPA07 + $noteRPA08 ;
            $totalRPA = $totalRPA > 17.5 ? 17.5 : $totalRPA;
            $singleUser = responsabilite_pa::where('idP', $id)->first();
            if (!isset($singleUser)) {
                return redirect()->route('wolcome.index');
            }

            $updateTotalePP = DB::table('responsabilite_pas')->where('idP', $id)->update(['TotalRPA' =>  $totalRPA]);

            $encadement_p = encadement_p::where('idP' , $id)->latest()->first();
            $encadement_p = isset($encadement_p ) ? $encadement_p->TotalEP : 0;

            $production_p = production_p::where('id_PP' , $id)->latest()->first();
            $production_p = isset($production_p ) ? $production_p->TotalPP : 0;
          
            $totalAP = $encadement_p  +  $production_p + $totalRPA;
            $totalAP = ($totalAP > 50) ? 50 : $totalAP;

            $activite_pedagogique = activite_pedagogique::where('idP' , $id)->latest()->first();

            if( isset($activite_pedagogique) ){
              $update =  $activite_pedagogique->update([ 'TotalAP' => $totalAP ]);
            }else{
                $create = activite_pedagogique::create(
                    [
                        'idP' => $id,
                        'TotalAP' => $totalAP
                    ]
                );
            }
            


            return view('/layout.NextStep', [
                'EP' => 'EP', 'PP' => 'PP', 'RPA' => 'RPA',
                'id' => $id,
                'go' => 'RPA01.show',
                'globalName' => 'Responsabilités Pédagogiques et Administratives'
            ]);
        }
        return back();
    }
}
