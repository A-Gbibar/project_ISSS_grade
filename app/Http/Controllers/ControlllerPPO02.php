<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pp01;
use App\pp02;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\getConfigNote;


class ControlllerPPO02 extends Controller
{


    public function show($id)
    {
    if(isset( $_GET['conection'])){
        $Existing = pp02::where('idProuduction' , $id)->first();
        if( isset($Existing)  ){
            return redirect()->route('createPP03.show' ,  ['id' => $id , "conection" => "good"]);
        }
        $note = pp01::where('idProuduction', $id)->first();
        if ($note == null) {
            return redirect()->route('production.index', $id);
        }
        return view('layout.productionPP02', ['id' => $id]);
    }
    return back();
    }

    public function store($id, Request $request)
    {
        //calc 
        $getPP02 = DB::table('config_notes')->select('NPP02', 'NPP02_Max')->get();
        $explodeNote = explode(',', $getPP02[0]->NPP02);
        $cours   =  trim($explodeNote[0], ' ');
        $TD      =  trim($explodeNote[1], ' ');
        $examens =  trim($explodeNote[2], ' ');
        $TP      =  trim($explodeNote[3], ' ');

        $CountCours   =  0;
        $CountTD      =  0;
        $CountExamens =  0;
        $CountTP      =  0;
        $CountAuter   =  0;

        // save in database
        foreach ($request->DateDiffusion as $key => $data) {
            if($request->collectif[$key] == "collectif"){
                $NomberCollectif = $request->NomberCollectif[$key];
            }else{
                $NomberCollectif = 0;
            }
            $CountCours   = ($request->type[$key] == 'Cours' && $CountCours < 6) ? $CountCours += 1:  $CountCours;
            $CountTP      = ($request->type[$key] == 'TP' && $CountTP< 4) ? $CountTP += 1 :$CountTP ;
            $CountExamens = ($request->type[$key] == 'examens' && $CountExamens < 4) ? $CountExamens += 1 :  $CountExamens;
            $CountTD      = ($request->type[$key] == 'TD' && $CountTD < 4) ? $CountTD += 1 :$CountTD ;
            $CountAuter   = ($request->type[$key] == 'Autre' &&  $CountAuter < 1) ?  $CountAuter += 1 : $CountAuter ;
            $totalPP02    = ($cours * $CountCours) + ($TD  * $CountTP) + ($examens  * $CountExamens) + ($TP  * $CountTD) + ( $CountAuter * 1);
            $create       =   pp02::create(
                [
                    'TypePolycopies' => $request->type[$key],
                    'dateDiffusion' => $request->DateDiffusion[$key],
                    'AnneeElaboration' => $request->annee[$key],
                    'NiveauEtude' => $request->Niveau[$key],
                    'typeTravail' => $request->collectif[$key],
                    'NomberCollectif' => $request->NomberCollectif[$key],
                    'NCour' => $cours * $CountCours,
                    'NTD' => $TD  * $CountTD,
                    'NExam' =>   $examens  * $CountExamens,
                    'NTP' =>   $TP  * $CountTP,
                    'NAuter' => $CountAuter * 1,
                    'NTotal' => ( $totalPP02 <= $getPP02[0]->NPP02_Max )?$totalPP02:$getPP02[0]->NPP02_Max,
                    'idProuduction' => $id
                ]
            );
        }
        return redirect()->route('createPP03.show' , $id);
    }
}
