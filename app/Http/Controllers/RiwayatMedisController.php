<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class RiwayatMedisController extends Controller
{
    public function index() {
        $RiwayatMedis = DB::table("riwayat_medis")->get();

        return view("index", ["RiwayatMedis"=> $RiwayatMedis]);
    }
    
}
