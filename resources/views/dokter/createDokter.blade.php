@extends('main')
@section('content')    

{{-- <h3>TAMBAH DOKTER</h3> --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Dokter</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('saveDokter') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">NIP</label>
                <input type="text" id="nip" name="nip" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" id="nama" name="nama_dokter" class="form-control" > 
            </div>
            <div class="form-group">
                <label for="">Alamat</label> <br>
                <textarea name="alamat" id="alamat" cols="53" rows="5" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                    <select class="form-control" name="jk" >
                        <option value="0">--- Pilih Jenis Kelamin ---</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="">No Telepon</label>
                <input type="text" id="telp" name="telp" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" id="date" name="date" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Spesialis</label>
                <input type="text" id="spesialis" name="spesialis" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Hari Praktik</label>
                    <select class="form-control" name="hari_praktek" >
                        <option value="0">--- Pilih Hari ---</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="">Jam Praktik</label>
                <input type="time" id="jam_praktek" name="jam_praktek" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" id="foto" name="foto" class="form-control" ">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>

    


@endsection