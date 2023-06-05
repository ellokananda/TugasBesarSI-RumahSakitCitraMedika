@extends('main')
@section('content')    


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Dokter</h6>
    </div>
    
    <div class="card-body">
        <form action="{{ route('updateDokter', $dtdokter->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">NIP</label>
                <input type="text" id="nip" name="nip" class="form-control"  value="{{ $dtdokter->nip }}">
            </div>
            <div class="form-group">
                <label for="">Nama Dokter</label>
                <input type="text" id="nama" name="nama_dokter" class="form-control"  value="{{ $dtdokter->nama_dokter }}">
            </div>
            <div class="form-group">
                <label for="">Alamat</label> <br>
                <textarea name="alamat" id="alamat" cols="53" rows="5">{{ $dtdokter->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select class="form-control" name="jk" >
                    <option value="0">--- Pilih Jenis Kelamin ---</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    value="{{ $dtdokter->jk }}
                </select>
            </div>
            <div class="form-group">
                <label for="">No Telepon</label>
                <input type="text" id="telp" name="telp" class="form-control"  value="{{ $dtdokter->telp }}">
            </div>
            <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"  value="{{ $dtdokter->tempat_lahir }}">
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" id="date" name="date" class="form-control"  value="{{ $dtdokter->date }}">
            </div>
            <div class="form-group">
                <label for="">Spesialis</label>
                <input type="text" id="spesialis" name="spesialis" class="form-control"  value="{{ $dtdokter->spesialis }}">
            </div>
            {{-- <div class="form-group">
                <input type="text" id="hari_praktek" name="hari_praktek" class="form-control" placeholder="Hari Praktik" value="{{ $dtdokter->hari_praktek }}">
            </div> --}}
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
                    value="{{ $dtdokter->hari_praktek }}
                </select>
            </div>
            <div class="form-group">
                <label for="">Jam Praktik</label>
                <input type="time" id="jam_praktek" name="jam_praktek" class="form-control"  value="{{ $dtdokter->jam_praktek }}"">
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" id="foto" name="foto" class="form-control" value="{{ $dtdokter->foto }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>



@endsection