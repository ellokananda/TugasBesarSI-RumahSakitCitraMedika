<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\User;
use PDF;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpasien = pasien::all();
        return view('pasien.pasien', ['dtpasien'=>$dtpasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();

        return view('pasien.createPasien', ['data'=> $data])->with('success', 'Data Pasien Berhasil Ditambah!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtpasien = [
            'nik' => $request->nik,
            'nama_pasien' => $request->nama_pasien,
            'tempat_lahir'=> $request->tempat_lahir,
            'date' => $request->date,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jk' => $request->jk,
            'status' => $request->status
        ];

        pasien::create($dtpasien);

        return redirect('rscm/pasien/dataPasien');
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
        $dtpasien = pasien::find($id);

        $data = User::where('role', '2')->get();
        return view('pasien.editPasien', ['dtpasien' => $dtpasien]);
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
        $pasien = pasien::find($id)->update ([
            'nik' => $request->nik,
            'nama_pasien' => $request->nama_pasien,
            'tempat_lahir'=> $request->tempat_lahir,
            'date' => $request->date,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jk' => $request->jk,
            'status' => $request->status
        ]);
        
        
        return redirect('rscm/pasien/dataPasien')->with('primary', 'Data Pasien Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = pasien::find($id);
        
        $pasien->delete();
        return redirect('rscm/pasien/dataPasien')->with('danger', 'Data Pasien Berhasil Dihapus!');
    }

    public function report()
    {
        $dtpasien = pasien::all();
        $pdf = PDF::loadview('pasien.cetakpasien',[
            'dtpasien' => $dtpasien
        ]);
        return $pdf->download('report-pasien.pdf');
    }
}
