<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Rawat_InapController;
use App\Http\Controllers\Rekam_MedisController;
use App\Http\Controllers\TransaksiController;
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
    return view('login');
});




route::post('/login/proses', [LoginController::class , 'login'])->name('login.check');
route::get('/logout', [LoginController::class , 'logout'])->name('logout');
//datadokter

Route::get('/rscm', function(){
    return view('index');
})->name('dashboard');


Route::get('rscm/dashboard',[HomeController::class, 'index']) ->name('das');
    Route::get('rscm/user',[UserController::class, 'index']) ->name('user');
    Route::get('rscm/user/tambahUser',[UserController::class, 'create']) ->name('createUser');
    Route::post('rscm/user/simpanUser',[UserController::class, 'store']) ->name('saveUser');
    Route::get('rscm/user/editUser/{id}',[UserController::class, 'edit']) ->name('editUser');
    Route::post('rscm/user/updateUser/{id}',[UserController::class, 'update']) ->name('updateUser');
    Route::get('rscm/user/hapusUser/{id}',[UserController::class, 'destroy']) ->name('destroyUser');
    Route::get('rscm/user/report',[UserController::class, 'report']) ->name('reportUser');

Route::get('rscm/dokter','DokterController@index', function(){
    return view('dokter.dokter');
    })->name('dokter');
    
    Route::get('rscm/dokter/dataDokter',[DokterController::class, 'index']) ->name('dokter');
    Route::get('rscm/dokter/tambahDokter',[DokterController::class, 'create']) ->name('createDokter');
    Route::post('rscm/dokter/simpanDokter',[DokterController::class, 'store']) ->name('saveDokter');
    Route::get('rscm/dokter/editDokter/{id}',[DokterController::class, 'edit']) ->name('editDokter');
    Route::post('rscm/dokter/updateDokter/{id}',[DokterController::class, 'update']) ->name('updateDokter');
    Route::get('rscm/dokter/hapusDokter/{id}',[DokterController::class, 'destroy']) ->name('destroyDokter');
    Route::get('rscm/dokter/report',[DokterController::class, 'report']) ->name('reportDokter');

// Route::get('rscm/pasien', function(){
//     return view('pasien.pasien');
//     })->name('pasien');
    Route::get('rscm/pasien/dataPasien',[PasienController::class, 'index']) ->name('pasien');
    Route::get('rscm/pasien/tambahPasien',[PasienController::class, 'create']) ->name('createPasien');
    Route::post('rscm/pasien/simpanPasien',[PasienController::class, 'store']) ->name('savePasien');
    Route::get('rscm/pasien/editPasien/{id}',[PasienController::class, 'edit']) ->name('editPasien');
    Route::post('rscm/pasien/updatePasien/{id}',[PasienController::class, 'update']) ->name('updatePasien');
    Route::get('rscm/pasien/hapusPasien/{id}',[PasienController::class, 'destroy']) ->name('destroyPasien');
    Route::get('rscm/pasien/report',[PasienController::class, 'report']) ->name('reportPasien');
    

// Route::get('rscm/pegawai', function(){
//     return view('pegawai.pegawai');
//     })->name('pegawai');
    Route::get('rscm/pegawai/dataPegawai',[PegawaiController::class, 'index']) ->name('pegawai');
    Route::get('rscm/pegawai/tambahPegawai',[PegawaiController::class, 'create']) ->name('createPegawai');
    Route::post('rscm/pegawai/simpanPegawai',[PegawaiController::class, 'store']) ->name('savePegawai');
    Route::get('rscm/pegawai/editPegawai/{id}',[PegawaiController::class, 'edit']) ->name('editPegawai');
    Route::post('rscm/pegawai/updatePegawai/{id}',[PegawaiController::class, 'update']) ->name('updatePegawai');
    Route::get('rscm/pegawai/hapusPegawai/{id}',[PegawaiController::class, 'destroy']) ->name('destroyPegawai');
    Route::get('rscm/pegawai/report',[PegawaiController::class, 'report']) ->name('reportPegawai');

// Route::get('rscm/obat', function(){
//     return view('obat.obat');
//     })->name('obat');
    Route::get('rscm/obat/dataObat',[ObatController::class, 'index']) ->name('obat');
    Route::get('rscm/obat/tambahObat',[ObatController::class, 'create']) ->name('createObat');
    Route::post('rscm/obat/simpanObat',[ObatController::class, 'store']) ->name('saveObat');
    Route::get('rscm/obat/editObat/{id}',[ObatController::class, 'edit']) ->name('editObat');
    Route::post('rscm/obat/updateObat/{id}',[ObatController::class, 'update']) ->name('updateObat');
    Route::get('rscm/obat/hapusObat/{id}',[ObatController::class, 'destroy']) ->name('destroyObat');
    Route::get('rscm/obat/report',[ObatController::class, 'report']) ->name('reportObat');
    
// Route::get('rscm/kamar', function(){
//     return view('kamar.kamar');
//     })->name('kamar');
    Route::get('rscm/kamar/dataKamar',[KamarController::class, 'index']) ->name('kamar');
    Route::get('rscm/kamar/tambahKamar',[KamarController::class, 'create']) ->name('createKamar');
    Route::post('rscm/kamar/simpanKamar',[KamarController::class, 'store']) ->name('saveKamar');
    Route::get('rscm/kamar/editKamar/{id}',[KamarController::class, 'edit']) ->name('editKamar');
    Route::post('rscm/kamar/updateKamar/{id}',[KamarController::class, 'update']) ->name('updateKamar');
    Route::get('rscm/kamar/hapusKamar/{id}',[KamarController::class, 'destroy']) ->name('destroyKamar');
    Route::get('rscm/kamar/report',[KamarController::class, 'report']) ->name('reportKamar');

// Route::get('rscm/rekammedis', function(){
//     return view('rekammedis.rekammedis');
//     })->name('rekammedis');
    Route::get('rscm/rawatinap/dataRawatInap',[Rawat_InapController::class, 'index']) ->name('rawatinap');
    Route::get('rscm/rawatinap/tambahRawatInap',[Rawat_InapController::class, 'create']) ->name('createRawatInap');
    Route::post('rscm/rawatinap/simpanRawatInap',[Rawat_InapController::class, 'store']) ->name('saveRawatInap');
    Route::get('rscm/rawatinap/editRawatInap/{id}',[Rawat_InapController::class, 'edit']) ->name('editRawatInap');
    Route::post('rscm/rawatinap/updateRawatInap/{id}',[Rawat_InapController::class, 'update']) ->name('updateRawatInap');
    Route::get('rscm/rawatinap/hapusRawatInap/{id}',[Rawat_InapController::class, 'destroy']) ->name('destroyRawatInap');
    Route::get('rscm/rawatinap/report',[Rawat_InapController::class, 'report']) ->name('reportRawatInap');

// Route::get('rscm/rawatinap', function(){
//     return view('rawatinap.rawatinap');
//     })->name('rawatinap');
    Route::get('rscm/rekammedis/dataRekamMedis',[Rekam_MedisController::class, 'index']) ->name('rekammedis');
    Route::get('rscm/rekammedis/tambahRekamMedis',[Rekam_MedisController::class, 'create']) ->name('createRekamMedis');
    Route::post('rscm/rekammedis/simpanRekamMedis',[Rekam_MedisController::class, 'store']) ->name('saveRekamMedis');
    Route::get('rscm/rekammedis/editRekamMedis/{id}',[Rekam_MedisController::class, 'edit']) ->name('editRekamMedis');
    Route::post('rscm/rekammedis/updateRekamMedis/{id}',[Rekam_MedisController::class, 'update']) ->name('updateRekamMedis');
    Route::get('rscm/rekammedis/hapusRekamMedis/{id}',[Rekam_MedisController::class, 'destroy']) ->name('destroyRekamMedis');
    Route::get('rscm/rekammedis/report',[Rekam_MedisController::class, 'report']) ->name('reportRekamMedis');
    Route::get('rscm/rekammedis/reportPerUser/{id}',[Rekam_MedisController::class, 'reportPerUser']) ->name('reportPerUser');

// Route::get('rscm/transaksi', function(){
//     return view('transaksi.transaksi');
//     })->name('transaksi');
    Route::get('rscm/transaksi/dataTransaksi',[TransaksiController::class, 'index']) ->name('transaksi');
    Route::get('rscm/transaksi/tambahTransaksi',[TransaksiController::class, 'create']) ->name('createTransaksi');
    Route::post('rscm/transaksi/simpanTransaksi',[TransaksiController::class, 'store']) ->name('saveTransaksi');
    Route::get('rscm/transaksi/editTransaksi/{id}',[TransaksiController::class, 'edit']) ->name('editTransaksi');
    Route::post('rscm/transaksi/updateTransaksi/{id}',[TransaksiController::class, 'update']) ->name('updateTransaksi');
    Route::get('rscm/transaksi/hapusTransaksi/{id}',[TransaksiController::class, 'destroy']) ->name('destroyTransaksi');
    Route::get('rscm/transaksi/report',[TransaksiController::class, 'report']) ->name('reportTransaksi');