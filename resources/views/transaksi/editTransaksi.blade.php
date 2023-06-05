@extends('main')
@section('content')    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Transaksi</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('updateTransaksi', $dttransaksi->id) }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Pasien</label>
                <select class="form-control" id="pasien_id" name="pasien_id">
                    <option disabled value>Pilih Pasien</option>
                    <option value="{{$dttransaksi->pasien_id}}">{{ $dttransaksi->pasien->nama_pasien }}</option>
                    @foreach($pas as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_pasien }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Resep</label>
                <select class="form-control" id="obat_id" name="obat_id">
                    <option disabled value>Pilih Obat</option>
                    <option value="{{$dttransaksi->obat_id}}">{{ $dttransaksi->obat->nama_obat }}</option>
                    @foreach($ob as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_obat }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Tanggal Masuk</label>
                <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" value="{{ $dttransaksi->tgl_masuk }}"  >
            </div>
            <div class="form-group">
                <label for="">Tanggal Keluar</label>
                <input type="date" id="tgl_keluar" name="tgl_keluar" class="form-control" value="{{ $dttransaksi->tgl_keluar }}" >
            </div>
            <div class="form-group">
                <label for="">Total</label>
                <input type="number" id="total" name="total" class="form-control" value="{{ $dttransaksi->total }}" > 
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Ubah</button>
            </div>
        </form>
    </div>
</div>


@endsection