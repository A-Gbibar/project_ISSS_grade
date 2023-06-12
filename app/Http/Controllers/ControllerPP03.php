<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pp03;
use Illuminate\Support\Facades\DB;

class ControllerPP03 extends Controller
{
    public function show($id){
    if(isset( $_GET['conection'])){
        $Existing = pp03::where('idProuduction' , $id)->first();
        if( isset($Existing)  ){
            return redirect()->route('nextStep.index' ,  ['id' => $id , "conection" => "good"]);
        }
    }
    
        return view('layout.productionPP03' , [ 'id' => $id ]);
    }
    public function store($id , Request $request){
        $getPP03 = DB::table('config_notes')->select('NPP03', 'NPP03_Max')->get();
        $explodeNote = explode(',', $getPP03[0]->NPP03);
        $Diaporamas   =  trim($explodeNote[0], ' ');
        $siteWeb      =  trim($explodeNote[1], ' ');
        $video        =  trim($explodeNote[2], ' ');

        $countDiaporamas = (isset($request->DateDiffusion)) ? count($request->DateDiffusion) : 0 ;
        $countLien   = ( isset($request->lien) ) ? count($request->lien) : 0;
        $total = ( $countDiaporamas*$Diaporamas) + ($countLien * $siteWeb);
        if( isset($request->DateDiffusion) ){
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
        }
  
        if( isset($request->lien) ){
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
    
        }
     
        return redirect()->route('nextStep.index' ,['id'=>$id , 'conection' =>'good'] );
    }
}
