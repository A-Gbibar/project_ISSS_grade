<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

USE App\d_proffesseur;

class ControllerGet extends Controller
{
    public function showAction($idP){
    $datas = d_proffesseur::all();
    if( $idP !==null ){
        $singleP = d_proffesseur::where('idP' , $idP )->first();
        return view('textView' , ['datas' => $datas ,  'SingleP' => $singleP ]);

    }
    return view('textView' , ['datas' => $datas ]);

}
}
