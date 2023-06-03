<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pp03;
use Illuminate\Support\Facades\DB;

class ControllerPP03 extends Controller
{
    public function show($id){
        return view('layout.productionPP03' , [ 'id' => $id ]);
    }
    public function store($id , Request $request){
        $getPP03 = DB::table('config_notes')->select('NPP03', 'NPP03_Max')->get();
        $explodeNote = explode(',', $getPP03[0]->NPP03);
        $Diaporamas   =  trim($explodeNote[0], ' ');
        $siteWeb      =  trim($explodeNote[1], ' ');
        $video        =  trim($explodeNote[2], ' ');

        $countDiaporamas = count($request->DateDiffusion);
        $countLien   = count($request->lien);
        $total = ( $countDiaporamas*$Diaporamas) + ($countLien * $siteWeb);

        foreach($request->DateDiffusion  as $key=>$index ){
            $create = pp03::create(
                [
                    'dateDiffusion' => $request->DateDiffusion[$key],
                    'NDiaporames'  => $countDiaporamas*$Diaporamas,
                    'NTotal'  => $total,
                    'idProuduction' => $id
                 ]
                );
        }
        foreach($request->lien  as $key=>$index ){
            $create = pp03::create(
                [
                    'lineSiteVideo' => $request->lien[$key],
                    'NvideoSiteWeb' => $countLien * $siteWeb,
                    'NTotal'  => $total,
                    'idProuduction' => $id
                 ]
                );
        }

        return redirect()->route('nextStep.index' , $id );
    }
}
