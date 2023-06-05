<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rekam_medis;
use App\Models\User;
use App\Models\pasien;
use App\Models\dokter;
use App\Models\obat;
use PDF;

class Rekam_MedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtrekammedis = rekam_medis::all();
        return view('rekammedis.rekammedis', ['dtrekammedis'=>$dtrekammedis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pas = pasien::all();
        $dok = dokter::all();
        $ob = obat::all();
        return view('rekammedis.createRekamMedis', compact('pas','dok','ob'))->with('success', 'Data Rekam Medis Berhasil Ditambah!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtrekammedis = [
            'pasien_id'=> $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'tgl_periksa' => $request->tgl_periksa,
            'keluhan' => $request->keluhan,
            'tindakan' => $request->tindakan,
            'diagnosa' => $request->diagnosa,
            'obat_id' => $request->obat_id,
            
        ];
        
        rekam_medis::create($dtrekammedis);

        return redirect('rscm/rekammedis/dataRekamMedis');
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
        $dtrekammedis = rekam_medis::find($id);

        $data = User::where('role', '3')->get(); 
        $pas = pasien::all();
        $dok = dokter::all();
        $ob = obat::all();
        $array = [
            'dtrekammedis' => $dtrekammedis,
            'data' => $data,
            'pas' => $pas,
            'dok' => $dok,
            'ob' => $ob
        ];

        return view('rekammedis.editRekamMedis', $array);
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
        $dtrekammedis = rekam_medis::find($id)->update([
            'pasien_id'=> $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'tgl_periksa' => $request->tgl_periksa,
            'keluhan' => $request->keluhan,
            'tindakan' => $request->tindakan,
            'diagnosa' => $request->diagnosa,
            'obat_id' => $request->obat_id,
        ]);
        
        return redirect('rscm/rekammedis/dataRekamMedis')->with('primary', 'Data Rekam Medis Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rekammedis = rekam_medis::find($id);
        $rekammedis->delete();
        return redirect('rscm/rekammedis/dataRekamMedis')->with('danger', 'Data Rekam Medis Berhasil Dihapus!');
    }

    public function report()
    {
        $dtrekammedis = rekam_medis::all();
        $pdf = PDF::loadview('rekammedis.cetakrekammedis',[
            'dtrekammedis' => $dtrekammedis
        ]);
        return $pdf->download('report-rekam-medis.pdf');
    }

    // public function reportPerUser($id){
    //     select*from rekam_medis where id = $id;
    //     }
}
