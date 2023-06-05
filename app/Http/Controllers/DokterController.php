<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\dokter;
use App\Models\User;
use PDF;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdokter = dokter::all();
        return view('dokter.dokter', compact('dtdokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();

        return view('dokter.createDokter', ['data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // dokter::create([
            

        // ]);

        $image_file = $request->file('foto');
        $image_extension = $image_file->extension();
        $image_name = date('ymdhis') . "." . $image_extension;
        $image_file->move(public_path('img'), $image_name);

        $dtdokter = [
            'nip' => $request->nip,
            'nama_dokter' => $request->nama_dokter,
            'alamat'=> $request->alamat,
            'jk'=> $request->jk,
            'telp'=> $request->telp,
            'tempat_lahir'=> $request->tempat_lahir,
            'date'=> $request->date,
            'spesialis'=> $request->spesialis,
            'hari_praktek'=> $request->hari_praktek,
            'jam_praktek'=> $request->jam_praktek,
            'foto'=> $image_name
        ];
        
        dokter::create($dtdokter);

        return redirect('rscm/dokter/dataDokter')->with('success', 'Data Dokter Berhasil Ditambah!');
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
        $dtdokter = dokter::find($id);

        $data = User::where('role', '1')->get(); 

        
        // $array = [
        //     'dtdokter' => $dtdokter,
        //     'data' => $data,
        // ];

        return view('dokter.editDokter', ['dtdokter' => $dtdokter]);
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
        $dokter = dokter::find($id);
        if($request->file('foto')){
            file::delete('img/'. $dokter->foto);
            $image = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('img', $image);
            $dokter->update([
                'nip' => $request->nip,
                'nama_dokter' => $request->nama_dokter,
                'alamat'=> $request->alamat,
                'jk'=> $request->jk,
                'telp'=> $request->telp,
                'tempat_lahir'=> $request->tempat_lahir,
                'date'=> $request->date,
                'spesialis'=> $request->spesialis,
                'hari_praktek'=> $request->hari_praktek,
                'jam_praktek'=> $request->jam_praktek,
                'foto'=> $image,            
            ]);
        }else{
            $dokter->update([
                'nip' => $request->nip,
                'nama_dokter' => $request->nama_dokter,
                'alamat'=> $request->alamat,
                'jk'=> $request->jk,
                'telp'=> $request->telp,
                'tempat_lahir'=> $request->tempat_lahir,
                'date'=> $request->date,
                'spesialis'=> $request->spesialis,
                'hari_praktek'=> $request->hari_praktek,
                'jam_praktek'=> $request->jam_praktek,         
            ]);
        }
        
        return redirect('rscm/dokter/dataDokter')->with('primary', 'Data Dokter Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = dokter::find($id);
        file::delete('img/'. $dokter->foto);
        // Storage::disk('public')->delete('img/'. $dokter->foto );
        $dokter->delete();
        return redirect('rscm/dokter/dataDokter')->with('danger', 'Data Dokter Berhasil Dihapus!');
    }

    public function report()
    {
        $dtdokter = dokter::all();
        $pdf = PDF::loadview('dokter.cetakdokter',[
            // 'dtdokter' => dokter
            'dtdokter' => $dtdokter
        ]);
        return $pdf->download('report-dokter.pdf');
    }
}
