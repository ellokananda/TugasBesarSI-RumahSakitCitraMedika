@extends('main')
@section('content')    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Rawat Inap</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('saveRawatInap') }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Pasien</label>
                <select class="form-control" id="pasien_id" name="pasien_id">
                    <option disabled value>Pilih Pasien</option>
                    @foreach($pas as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_pasien }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Dokter</label>
                <select class="form-control" id="dokter_id" name="dokter_id">
                    <option disabled value>Pilih Dokter</option>
                    @foreach($dok as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_dokter }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">No Kamar</label>
                <input type="number" id="no_kamar" name="no_kamar" class="form-control" > 
            </div>
            <div class="form-group">
                <label for="">Nama Kamar</label>
                <select class="form-control" id="kamar_id" name="kamar_id">
                    <option disabled value>Pilih Kamar</option>
                    @foreach($kam as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kamar }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Tanggal Masuk</label>
                <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="">Tanggal Keluar</label>
                <input type="date" id="tgl_keluar" name="tgl_keluar" class="form-control"  >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection