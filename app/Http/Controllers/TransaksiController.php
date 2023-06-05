<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\transaksi;
use App\Models\pasien;
use App\Models\obat;
use PDF;
use App\Http\Controllers\TransaksiControllers;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dttransaksi = transaksi::all();
        return view('transaksi.transaksi', ['dttransaksi'=>$dttransaksi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $rkm = rekam_medis::all();
        // return view('transaksi.createTransaksi', compact('rkm'))->with('success', 'Data Transaksi Berhasil Ditambah!');

        $pas = pasien::all();
        $ob = obat::all();
        return view('transaksi.createTransaksi', compact('pas','ob'))->with('success', 'Data Transaksi Berhasil Ditambah!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dttransaksi = [
            'pasien_id'=> $request->pasien_id,
            'obat_id' => $request->obat_id,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar' => $request->tgl_keluar,
            'total' => $request->total
        ];
        
        transaksi::create($dttransaksi);

        return redirect('rscm/transaksi/dataTransaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dttransaksi = transaksi::find($id);

        $data = User::where('role', '3')->get(); 
        $pas = pasien::all();
        $ob = obat::all();
        
        $array = [
            'dttransaksi' => $dttransaksi,
            'pas' => $pas,
            'ob' => $ob
        ];

        return view('transaksi.editTransaksi', $array);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dttransaksi = transaksi::find($id)->update([
            'pasien_id'=> $request->pasien_id,
            'obat_id' => $request->obat_id,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar' => $request->tgl_keluar,
            'total' => $request->total
        ]);
        
        return redirect('rscm/transaksi/dataTransaksi')->with('primary', 'Data Transaksi Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::find($id);
        $transaksi->delete();
        return redirect('rscm/transaksi/dataTransaksi')->with('danger', 'Data Transaksi Berhasil Dihapus!');
    }

    public function report()
    {
        $dttransaksi = transaksi::all();
        $pdf = PDF::loadview('transaksi.cetaktransaksi',[
            'dttransaksi' => $dttransaksi
        ]);
        return $pdf->download('report-transaksi.pdf');;
    }
}
