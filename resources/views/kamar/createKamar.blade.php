@extends('main')
@section('content')    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Kamar</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('saveKamar') }}" method="post" >
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="">Nama Kamar</label>
                <input type="text" id="nama" name="nama_kamar" class="form-control"  > 
            </div>
            <div class="form-group">
                <label for="">Fasilitas</label> <br>
                <textarea name="fasilitas" id="fasilitas" cols="53" rows="5" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" id="harga" name="harga" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Kapasitas</label>
                <input type="text" id="kapasitas" name="kapasitas" class="form-control" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection