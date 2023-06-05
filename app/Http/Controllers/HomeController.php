<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\dokter;
use App\Models\rawat_inap;
use App\Models\transaksi;

class HomeController extends Controller
{
    public function index(){
        $jmlpas = pasien::all()->count();
       // return view('index')->with('jmlpas',$jmlpas);
        return view('index', ['jmlpas'=>$jmlpas]);
    }
}
