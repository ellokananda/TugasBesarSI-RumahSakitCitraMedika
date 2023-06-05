@extends('main')
@section('content')    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Pegawai</h6>
    </div>
    
    <div class="card-body">
        <form action="{{ route('updatePegawai', $dtpegawai->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Kode Pegawai</label>
                <input type="text" id="kode_pegawai" name="kode_pegawai" class="form-control"  value="{{ $dtpegawai->kode_pegawai }}">
            </div>
            <div class="form-group">
                <label for="">Nama Pegawai</label>
                <input type="text" id="nama" name="nama_pegawai" class="form-control"  value="{{ $dtpegawai->nama_pegawai }}">
            </div>
            <div class="form-group">
                <label for="">Alamat</label> <br>
                <textarea name="alamat" id="alamat" cols="53" rows="5" >{{ $dtpegawai->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select class="form-control" name="jk" >
                    <option value="0">--- Pilih Jenis Kelamin ---</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    value="{{ $dtpegawai->jk }}
                </select>
            </div>
            <div class="form-group">
                <label for="">No. Telepon</label>
                <input type="text" id="telp" name="telp" class="form-control"  value="{{ $dtpegawai->telp }}">
            </div>
            <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"  value="{{ $dtpegawai->tempat_lahir }}">
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" id="date" name="date" class="form-control"  value="{{ $dtpegawai->date }}">
            </div>
            <div class="form-group">
                <label for="">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control"  value="{{ $dtpegawai->jabatan }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>


@endsection