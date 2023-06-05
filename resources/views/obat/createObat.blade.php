@extends('main')
@section('content')    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Obat</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('saveObat') }}" method="post" >
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="">Nama Obat</label>
                <input type="text" id="nama" name="nama_obat" class="form-control" > 
            </div>
            <div class="form-group">
                <label for="">Jenis Obat</label>
                <input type="text" id="nama" name="jenis_obat" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" id="harga" name="harga" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="">Stok</label>
                <input type="number" id="stok" name="stok" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="">Keterangan</label> <br>
                <textarea name="keterangan" id="keterangan" cols="53" rows="5" ></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection