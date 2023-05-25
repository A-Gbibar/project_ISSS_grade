<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pp01;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
 


class ControllerCalc extends Controller
{

    public function calcPP01($id){
        $count = DB::table('pp01s')->where("idProuduction" ,  $id)->count();    
        if( !isset($count) || $count == 0 ){
            return redirect()->route('production.index' , $id );
        }
        $getNotPP01 = DB::table('config_notes')->select('NPP01' , 'NPP01_Max')->get();
        $calcPP01 = $getNotPP01[0]->NPP01 * $count;
        if( $calcPP01 > $getNotPP01[0]->NPP01_Max ){
           $calcPP01 = $getNotPP01[0]->NPP01_Max;
        }
        $setNotPP01 = pp01::where('idProuduction' , $id);
        $setNotPP01->update(
            [
                'note' => $calcPP01
            ]
        );
        return redirect()->route('createPP02.show' , $id);  
        
    }
    
}
