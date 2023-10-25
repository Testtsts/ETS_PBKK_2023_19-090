<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use Auth;

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

    public function riwayatMedisByPasienId(){
        $id = Auth::id();
        //select riwayat medis where pasien_id == user.id
        $RiwayatMedisByPasienId = DB::table("")->where('pasien_id',$id);
    }
    
    public function riwayatMedisByDokterId(){
        $id = Auth::id();
        //select riwayat medis where dokter_id == user.id
        $RiwayatMedisByPasienId = DB::table("")->where('dokter_id',$id);
    }
    
}
