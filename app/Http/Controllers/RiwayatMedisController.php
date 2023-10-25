<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class RiwayatMedisController extends Controller
{
    public function riwayatMedis() {
        $RiwayatMedis = DB::table("riwayat_medis")->get();
        $Users = DB::table("users")->get(); 
        return view("RiwayatMedis", 
        ["RiwayatMedis"=> $RiwayatMedis
        // ,"users"=> $Users
     ]);
    }
    
}
