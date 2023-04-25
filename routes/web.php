<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

route::post('/login/proses', [LoginController::class , 'login'])->name('login.check');
// datadokter

Route::get('/admin', function(){
    return view('index');
})->name('dashboard');

Route::get('admin/dokter', function(){
    return view('dokter.dokter');
    })->name('dokter');

Route::get('admin/pasien', function(){
    return view('pasien.pasien');
    })->name('pasien');

Route::get('admin/pegawai', function(){
    return view('admin.pegawai');
    })->name('pegawai');

Route::get('admin/obat', function(){
    return view('admin.obat');
    })->name('obat');

Route::get('admin/kamar', function(){
    return view('admin.kamar');
    })->name('kamar');

Route::get('admin/rekammedis', function(){
    return view('admin.rekammedis');
    })->name('rekammedis');

Route::get('admin/rawatinap', function(){
    return view('admin.rawatinap');
    })->name('rawatinap');

Route::get('admin/transaksi', function(){
    return view('admin.transaksi');
    })->name('transaksi');