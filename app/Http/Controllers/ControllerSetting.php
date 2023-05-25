<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\config_note;

class ControllerSetting extends Controller
{
    public function showconfig(){
        $configNote = config_note::all();
        return view('layout.configNote' , ['configNote' => $configNote]);
    }
    public function storeConfig($id , Request $request){
        $single = config_note::findOrfail($id);
        $single->update(
            [
                'NPP01' => $request->NPP01 ,
                'NPP01_Max'=> $request->NPP01_Max ,
                'NPP02'=> $request->NPP02,
                'NPP02_Max'=> $request->NPP02_Max,
                'NPP03'=> $request->NPP03,
                'NPP03_Max'=> $request->NPP03_Max,
                'NEP01'=> $request->NEP01,
                'NEP01_Max' => $request->NEP01_Max,
                'NEP02'=> $request->NEP02,
                'NEP02_Max'=> $request->NEP02_Max,
                'NEP03'=> $request->NEP03,
                'NEP03_Max'=> $request->NEP03_Max,
                'NEP04'=> $request->NEP04,
                'NEP04_Max'=> $request->NEP04_Max,
                'NEP05'=> $request->NEP05,
                'NEP05_Max'=> $request->NEP05_Max,
                'NEP06'=> $request->NEP06,
                'NEP06_Max'=> $request->NEP06_Max,
                'NRPA01'=> $request->NRPA01,
                'NRPA01_Max'=> $request->NRPA01_Max,
                'NRPA02'=> $request->NRPA02,
                'NRPA02_Max'=> $request->NRPA02_Max,
                'NRPA03'=> $request->NRPA03,
                'NRPA03_Max'=> $request->NRPA03_Max,
                'NRPA04'=> $request->NRPA04,
                'NRPA04_Max'=> $request->NRPA04_Max,
                'NRPA05'=> $request->NRPA05,
                'NRPA05_Max'=> $request->NRPA05_Max,
                'NRPA06'=> $request->NRPA06,
                'NRPA06_Max'=> $request->NRPA06_Max,
                'NRPA07'=> $request->NRPA07,
                'NRPA07_Max'=> $request->NRPA07_Max,
                'NRPA08'=> $request->NRPA08,
                'NRPA08_Max'=> $request->NRPA08_Max
            ]
            );
        return redirect()->route('Setting.ShowconfigNote');
    }
}

