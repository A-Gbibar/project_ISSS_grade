<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\pp01;
use App\pp02;
use App\pp03;
use App\production_p;
use App\ep01;
use App\encadement_p;
use Illuminate\Support\Facades\DB;

class ControllerEP01 extends Controller
{
    public function index($id)
    {
        if (isset($_GET['conection'])) {
            $notePP01 = pp01::where('idProuduction',  $id)->first();
            $notePP01 = isset($notePP01) ? $notePP01->note : 0;
            $notePP02 = pp02::where('idProuduction',  $id)->first();
            $notePP02  = isset($notePP02) ? $notePP02->NTotal : 0;
            $notePP03 = pp03::where('idProuduction',  $id)->first();
            $notePP03 = isset($notePP03) ? $notePP03->NTotal : 0;

            $totalPP = $notePP01 + $notePP02 + $notePP03;
            $totalPP = $totalPP > 20 ? 20 : $totalPP;

            $singleUser = production_p::where('id_PP', $id)->first();
            if (!isset($singleUser)) {
                return redirect()->route('wolcome.index');
            }

            $updateTotalePP = DB::table('production_ps')->where('id_PP', $id)->update(['TotalPP' => $totalPP]);
            return view('/layout.NextStep', ['name' => 'PP', 'id' => $id]);
        }
        return back();
    }

    //create EP01 

    public function show($id)
    {
        if (isset($_GET['conection'])) {
            return view('layout.productionEP01', ['id' => $id]);
        }
        return back();
    }
    public function store($id, Request $request)
    {
        $check = encadement_p::where('idP', $id)->first();
        if (!isset($check)) {
            $addEncadement_P = encadement_p::create(
                [
                    'idP' => $id
                ]
            );
        }

        $files = $request->file('pageRaport');
        //check size in file
        // dd($files[0]->getSize());
        foreach ($files as $key => $index) {
            if ($files[$key]->getSize() > 1000000) {
                return back()->withErrors([
                    'EroorSize'  =>  "Taille d'erreur veuillez vérifier la taille max 1 Mo",
                ])->onlyInput();
            }
        }
        $getEP01 = DB::table('config_notes')->select('NEP01', 'NEP01_Max')->get();
        $explodeNote = explode(',', $getEP01[0]->NEP01);
        $lincence   =  trim($explodeNote[0], ' ');
        $Master      =  trim($explodeNote[1], ' ');

        $countLincence = 0;
        $countMastere  = 0;
        $countNumberEncadrantsLincence = 0;
        $countNumberEncadrantsMastere = 0;
        foreach ($request->NomberEncadrants as $key => $index) {
            $fileName = time() . '' . $files[$key]->getClientOriginalName();
            $filePath = $files[$key]->storeAs('pageRaport', $fileName, 'public');
            $countMastere                  += ($request->type[$key] === "Master") ? 1 : 0;
            $countNumberEncadrantsMastere  += ($request->type[$key] === "Master") ? $request->NomberEncadrants[$key] : 0;
            $countLincence += ($request->type[$key] === "Licence") ? 1 : 0;
            $countNumberEncadrantsLincence  += ($request->type[$key] === "Licence") ? $request->NomberEncadrants[$key] : 0;

            $create = ep01::create(
                [
                    'type' => $request->type[$key],
                    'NomberEncadrants' => $request->NomberEncadrants[$key],
                    'DateRealisation' => $request->DateDiffusion[$key],
                    'pageRapport' => $filePath,
                    'NoteLicenceB' => $lincence,
                    'NoteMaster' => $Master,
                    'idP' => $id,
                ]
            );
        }
        $countLincence = ($lincence * $countLincence) / $countNumberEncadrantsLincence;
        $countMastere = ($Master * $countMastere) / $countNumberEncadrantsMastere;
        $totalep01 =  $countLincence + $countMastere;
        $totalep01 = ($totalep01 >  $getEP01[0]->NEP01_Max) ? $getEP01[0]->NEP01_Max  : $totalep01;
        $addTotal = ep01::where('idP', $id)->get();
        foreach( $addTotal as $key=>$index ){
            $addTotal[$key]->update([
                'TotalEP01' => $totalep01
            ]);
        }
   
        dd($countLincence, $countMastere, $countNumberEncadrantsMastere, $countNumberEncadrantsLincence);
    }
}
