<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ep01;
use App\ep02;
use App\ep03;
use App\ep04;
use App\ep05;
use App\ep06;
use App\encadement_p;
use Illuminate\Support\Facades\DB;
use App\responsabilite_pa;
use App\rpa01;


class ControllerRPA01 extends Controller
{
    // next EP06
    public function index($id)
    {
        if (isset($_GET['conection'])) {
            $noteEP01 = ep01::where('idP',  $id)->latest()->first();
            $noteEP01 = isset($noteEP01) ? $noteEP01->TotalEP01 : 0;
            $noteEP02 = ep02::where('idP',  $id)->latest()->first();
            $noteEP02  = isset($noteEP02) ? $noteEP02->TotalEP02 : 0;
            $noteEP03 = ep03::where('idP',  $id)->latest()->first();
            $noteEP03 = isset($noteEP03) ? $noteEP03->TotalEP03 : 0;
            $noteEP04 = ep04::where('idP',  $id)->latest()->first();
            $noteEP04 = isset($noteEP04) ? $noteEP04->TotalEP04 : 0;
            $noteEP05 = ep05::where('idP',  $id)->latest()->first();
            $noteEP05 = isset($noteEP05) ? $noteEP05->TotalEP05 : 0;
            $noteEP06 = ep06::where('idP',  $id)->latest()->first();
            $noteEP06 = isset($noteEP06) ? $noteEP06->TotalEP06 : 0;


            $totalPP = $noteEP01 + $noteEP02 + $noteEP03 + $noteEP04 + $noteEP05 + $noteEP06;
            $totalPP = $totalPP > 11 ? 11 : $totalPP;
            $singleUser = encadement_p::where('idP', $id)->first();
            if (!isset($singleUser)) {
                return redirect()->route('wolcome.index');
            }

            $updateTotalePP = DB::table('encadement_ps')->where('idP', $id)->update(['TotalEP' => $totalPP]);
            return view('/layout.NextStep', [
                'EP' => 'EP', 'PP' => 'PP',
                'id' => $id,
                'go' => 'RPA01.show',
                'globalName' => 'Encadrement Pédagogique'
            ]);
        }
        return back();
    }

    public function show($id)
    {
        if (isset($_GET['conection'])) {

            return view('layout.RPA01.productionRPA01', ['id' => $id]);
        }
        return back();
    }

    static function existence($id){
        $check = responsabilite_pa::where('idP', $id)->first();
        if (!isset($check)) {
            $addEncadement_P = responsabilite_pa::create(
                [
                    'idP' => $id
                ]
            );
        }
    }
    public function store($id , Request $request){
       if( isset($request) ){

        $ControllerRPA01 = new ControllerRPA01;
        $ControllerRPA01->existence($id);

        $type = $request->type;
        $NDirecteur = 0;
        $NChef = 0;
        $NCoordonnateur = 0;
        $totalRP01 = 0;
        foreach( $type as $key => $index ){

            if( $index == "Chef de département" ){
                $nomberMandat = $request->NomberMandat[$key];
                $NChef   = 3;
                $NChef  += ( ($nomberMandat  - 1) !== 0 ) ? $nomberMandat-1: $NChef;
                $NChef   = ($NChef  > 4 ) ? 4 : $NChef ;
            }
            if(  $index == "Directeur" ){
                $nomberMandat = $request->NomberMandat[$key];
                $NDirecteur +=  $nomberMandat * 3  ;
                $NDirecteur =  ($NDirecteur > 4 ) ? 4 : $NDirecteur;

            }
            if(  $index == "Coordonnateur de filiére" ){
                $anneeResponsabilite = $request->anneeResponsabilite[$key];
                $NCoordonnateur   +=   ($anneeResponsabilite * 1.5) / 3 ;
                $NCoordonnateur  =  ($NCoordonnateur  > 3 ) ? 3 : $NCoordonnateur ;
            }

            $totalRP01 += $NChef + $NCoordonnateur + $NDirecteur;
            $resoult = ($totalRP01 > 4 )?4: $totalRP01;
            $create = rpa01::create(
                [
                    'NatureResponsabilite' => $index ,
                    'NomberMandat' => $request->NomberMandat[$key],
                    'anneeResponsabilite' => $request->anneeResponsabilite[$key],
                    'NDirecteur' =>  $NDirecteur,
                    'NChef' =>  $NChef,
                    'NCoordonnateur' =>  $NCoordonnateur,
                    'idP' => $id,
                    'TotalRPA01' => $resoult
                ]
                );
            
        }
        dd( $create);
                
       }
    }
}
