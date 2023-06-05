<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rawat_inap;
use App\Models\User;
use App\Models\pasien;
use App\Models\dokter;
use App\Models\kamar;
use PDF;

class Rawat_InapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtrawatinap = rawat_inap::all();
        return view('rawatinap.rawatinap', ['dtrawatinap'=>$dtrawatinap]);

        // return view('rawatinap.rawatinap',[
        //     'rawat_inaps' => rawat_inap::with('pasien','dokter','kamar')->get()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data = User::all();
        $pas = pasien::all();
        $dok = dokter::all();
        $kam = kamar::all();
        return view('rawatinap.createRawatInap', compact('pas','dok','kam'))->with('success', 'Data Rawat Inap Berhasil Ditambah!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtrawatinap = [
            'pasien_id'=> $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'no_kamar' => $request->no_kamar,
            'kamar_id' => $request->kamar_id,
            'tgl_masuk'=> $request->tgl_masuk,
            'tgl_keluar'=> $request->tgl_keluar
        ];
        
        rawat_inap::create($dtrawatinap);

        return redirect('rscm/rawatinap/dataRawatInap');
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
        $dtrawatinap = rawat_inap::find($id);

        $data = User::where('role', '3')->get(); 
        $pas = pasien::all();
        $dok = dokter::all();
        $kam = kamar::all();
        $array = [
            'dtrawatinap' => $dtrawatinap,
            'data' => $data,
            'pas' => $pas,
            'dok' => $dok,
            'kam' => $kam
        ];

        return view('rawatinap.editRawatInap', $array);
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
        $dtrawatinap = rawat_inap::find($id)->update([
            'pasien_id'=> $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'no_kamar' => $request->no_kamar,
            'kamar_id' => $request->kamar_id,
            'tgl_masuk'=> $request->tgl_masuk,
            'tgl_keluar'=> $request->tgl_keluar
        ]);
        
        return redirect('rscm/rawatinap/dataRawatInap')->with('primary', 'Data Rawat Inap Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rawatinap = rawat_inap::find($id);
        $rawatinap->delete();
        return redirect('rscm/rawatinap/dataRawatInap')->with('danger', 'Data Rawat Inap Berhasil Dihapus!');
    }

    public function report()
    {
        $dtrawatinap = rawat_inap::all();
        $pdf = PDF::loadview('rawatinap.cetakrawatinap',[
            'dtrawatinap' => $dtrawatinap
        ]);
        return $pdf->download('report-rawat-inap.pdf');
    }
}
