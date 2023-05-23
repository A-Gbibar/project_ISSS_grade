<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Facades\DB;
use App\d_proffesseur;
use App\production_p;

class ControllerCreate extends Controller
{


    public function index($idP)
    {
        
        $datas = d_proffesseur::where('idP', $idP)->first();
        return view('/produtionP', [
            'FullName' => $datas->nom . ' ' . $datas->prenom,
            'email' => $datas->email,
            'tel' => $datas->tel,
            'grad' => $datas->grad
        ]);
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
        $createProduction = production_p::create([ 'id_PP' => $createP->id  ]);
        return redirect()->route('production.index', $createP->id);
    }
}
