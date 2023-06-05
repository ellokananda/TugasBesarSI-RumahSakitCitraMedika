<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use App\Models\User;
use PDF;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtobat = obat::all();
        return view('obat.obat', ['dtobat'=>$dtobat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();

        return view('obat.createObat', ['data'=> $data])->with('success', 'Data Obat Berhasil Ditambah!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtobat = [
            'nama_obat' => $request->nama_obat,
            'jenis_obat'=> $request->jenis_obat,
            'harga'=> $request->harga,
            'stok'=> $request->stok,
            'keterangan' => $request->keterangan
        ];
        
        obat::create($dtobat);

        return redirect('rscm/obat/dataObat');
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
        $dtobat = obat::find($id);

        $data = User::where('role', '3')->get(); 

        return view('obat.editObat', ['dtobat' => $dtobat]);
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
        $obat = obat::find($id)->update ([
            'nama_obat' => $request->nama_obat,
            'jenis_obat' => $request->jenis_obat,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'keterangan' => $request->keterangan
        ]);
        
        return redirect('rscm/obat/dataObat')->with('primary', 'Data Obat Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = obat::find($id);
        $obat->delete();
        return redirect('rscm/obat/dataObat')->with('danger', 'Data Obat Berhasil Dihapus!');
    }

    public function report()
    {
        $dtobat = obat::all();
        $pdf = PDF::loadview('obat.cetakobat',[
            'dtobat' => $dtobat
        ]);
        return $pdf->download('report-obat.pdf');
    }
}
