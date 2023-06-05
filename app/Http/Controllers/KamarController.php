<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kamar;
use App\Models\User;
use PDF;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtkamar = kamar::all();
        return view('kamar.kamar', ['dtkamar'=>$dtkamar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();

        return view('kamar.createKamar', ['data'=> $data])->with('success', 'Data Kamar Berhasil Ditambah!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtkamar = [
            'nama_kamar' => $request->nama_kamar,
            'fasilitas'=> $request->fasilitas,
            'harga'=> $request->harga,
            'kapasitas'=> $request->kapasitas,
        ];
        
        kamar::create($dtkamar);

        return redirect('rscm/kamar/dataKamar');
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
        $dtkamar = kamar::find($id);

        $data = User::where('role', '3')->get(); 

        return view('kamar.editKamar', ['dtkamar' => $dtkamar]);
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
        $kamar = kamar::find($id)->update ([
            'nama_kamar' => $request->nama_kamar,
            'fasilitas' => $request->fasilitas,
            'harga' => $request->harga,
            'kapasitas' => $request->kapasitas
        ]);
        
        
        return redirect('rscm/kamar/dataKamar')->with('primary', 'Data Kamar Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamar = kamar::find($id);
        $kamar->delete();
        return redirect('rscm/kamar/dataKamar')->with('danger', 'Data Kamar Berhasil Dihapus!');
    }
    public function report()
    {
        $dtkamar= kamar::all();
        $pdf = PDF::loadview('kamar.cetakkamar',[
            'dtkamar' => $dtkamar
        ]);
        return $pdf->download('report-kamar.pdf');
    }
}
