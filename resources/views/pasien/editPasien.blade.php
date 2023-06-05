@extends('main')
@section('content')    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Pasien</h6>
    </div>
    
    <div class="card-body">
        <form action="{{ route('updatePasien', $dtpasien->id) }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="">NIK</label>
                <input type="text" id="nik" name="nik" class="form-control"  value="{{ $dtpasien->nik }}">
            </div>
            <div class="form-group">
            <label for="">Nama Pasien</label>
                <input type="text" id="nama" name="nama_pasien" class="form-control"  value="{{ $dtpasien->nama_pasien }}">
            </div>
            <div class="form-group">
            <label for="">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"  value="{{ $dtpasien->tempat_lahir }}">
            </div>
            <div class="form-group">
            <label for="">Tanggal Lahir</label>
                <input type="date" id="date" name="date" class="form-control"  value="{{ $dtpasien->date }}">
            </div>
            <div class="form-group">
            <label for="">Alamat</label> <br>
                <textarea name="alamat" id="alamat" cols="53" rows="5" >{{ $dtpasien->alamat }}</textarea>
            </div>
            <div class="form-group">
            <label for="">No. Telepon</label>
                <input type="text" id="telp" name="telp" class="form-control"  value="{{ $dtpasien->telp }}">
            </div>
            <div class="form-group">
            <label for="">Jenis Kelamin</label>
                <select class="form-control" name="jk" >
                    <option value="0">--- Pilih Jenis Kelamin ---</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    value="{{ $dtpasien->jk }}
                </select>
            </div>
            <div class="form-group">
            <label for="">Status Pasien</label>
                <select class="form-control" name="status" >
                    <option value="0">--- Pilih Status ---</option>
                    <option value="Rawat Jalan">Rawat Jalan</option>
                    <option value="Rawat Inap">Rawat Inap</option>
                    value="{{ $dtpasien->status }}
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>


@endsection