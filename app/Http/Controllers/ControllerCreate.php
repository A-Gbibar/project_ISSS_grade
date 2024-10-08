<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Facades\DB;
use App\d_proffesseur;
use App\pp01;
use App\production_p;
use Illuminate\Routing\Route;

class ControllerCreate extends Controller
{

    public function wolcome()
    {
        return view('welcome');
    }

    public function index($idP)
    {
    
       if(isset( $_GET['conection'])){
        $Existing = pp01::where('idProuduction' , $idP)->first();
     if( isset($Existing)){
            return redirect()->route('createPP02.show' ,  ['id' => $idP , "conection" => "good"]);
        }
  
        $datas = d_proffesseur::where('idP', $idP)->first();
        if (isset($datas)) {
            return view('/produtionP', [
                'FullName' => $datas->nom . ' ' . $datas->prenom,
                'email' => $datas->email,
                'tel' => $datas->tel,
                'grad' => $datas->grad,
                'idP' => $datas->idP
            ]);
        }
        return redirect()->route('wolcome.index');
    }
    return back();
    }

    public function store(Request $reqProf)
    {

        $createP =  d_proffesseur::create([
            'nom' => $reqProf->lastName,
            'prenom' => $reqProf->firstName,
            'tel' =>  $reqProf->tel,
            'email' => $reqProf->emial,
            'departATT' => $reqProf->departAtt,
            'dateRecrut' => $reqProf->dateRecut,
            'PPR'     => $reqProf->PPR,
            'grad' => $reqProf->gradeActuel,
            'dateEffet' => $reqProf->dateEffet,
            'TypeAvancement' => $reqProf->type,
        ]);
        $createProduction = production_p::create(['id_PP' => $createP->id]);
        return redirect()->route('production.index', ['idP' => $createP->id ,  "conection" => "good"] );
    }
    public function storePP01($id, Request $request)
    {
       foreach($request->titre as $key=>$data){
        $createPP01 = pp01::create(
                [
                    // 'type' => $request->type[$key],
                    'isbn' => $request->isbn[$key],
                    'maisonEdition' => $request->maisonEdition[$key],
                    'avoir' => $request->avoir[$key],
                    'titre' => $request->titre[$key],
                    'auteur'=> $request->auteur[$key],
                    'niveu' => $request->niveu[$key],
                    'dateEdition' => $request->dateEdition[$key],
                    'idProuduction' => $id
                    ]
                );  
       }

       return redirect()->route('calcPP01', $id  );
    }

} 
