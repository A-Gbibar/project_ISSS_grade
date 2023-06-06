<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\d_proffesseur;

class controllerLogin extends Controller
{
    public function login(Request $request)
    {
        if (isset($request)) {
            $UserName = $request->UserName;
            $PPR = $request->PPR;
            $proffesseur = d_proffesseur::where('nom', '=' ,$UserName , 'and' , 'PPR', '=' ,$PPR)->first();
            if (isset($proffesseur)) {
                $idP = $proffesseur->idP;
                return redirect()->route('production.index' , ['idP' => $idP , "conection" => "good"]);
            }
        }
        return back()->withErrors([
            'UserName' => "Le nom d'utilisateur est incorrect",
            'PPR' => 'PPR est incorrect',
        ])->onlyInput('UserName' , 'PPR');
        
    }
}
