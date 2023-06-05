<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use App\Models\User;
use PDF;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpegawai = pegawai::all();
        return view('pegawai.pegawai', ['dtpegawai'=>$dtpegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();

        return view('pegawai.createPegawai', ['data'=> $data])->with('success', 'Data Pegawai Berhasil Ditambah!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtpegawai = [
            'kode_pegawai' => $request->kode_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'alamat'=> $request->alamat,
            'jk'=> $request->jk,
            'telp'=> $request->telp,
            'tempat_lahir'=> $request->tempat_lahir,
            'date'=> $request->date,
            'jabatan'=> $request->jabatan,
        ];
        
        pegawai::create($dtpegawai);

        return redirect('rscm/pegawai/dataPegawai');
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
        $dtpegawai = pegawai::find($id);

        $data = User::where('role', '3')->get(); 

        return view('pegawai.editPegawai', ['dtpegawai' => $dtpegawai]);
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
        $pegawai = pegawai::find($id)->update([
            'kode_pegawai' => $request->kode_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'tempat_lahir'=> $request->tempat_lahir,
            'date' => $request->date,
            'jabatan' => $request->jabatan
        ]);
        
        return redirect('rscm/pegawai/dataPegawai')->with('primary', 'Data Pegawai Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = pegawai::find($id);
        $pegawai->delete();
        return redirect('rscm/pegawai/dataPegawai')->with('danger', 'Data Pegawai Berhasil Dihapus!');
    }

    public function report()
    {
        $dtpegawai = pegawai::all();
        $pdf = PDF::loadview('pegawai.cetakpegawai',[
            'dtpegawai' => $dtpegawai
        ]);
        return $pdf->download('report-pegawai.pdf');
    }
}
