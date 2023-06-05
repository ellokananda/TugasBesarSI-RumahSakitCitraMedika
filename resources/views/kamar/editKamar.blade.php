@extends('main')
@section('content')    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Kamar</h6>
    </div>
    
    <div class="card-body">
        <form action="{{ route('updateKamar', $dtkamar->id) }}" method="post" >
            @csrf
            
            <div class="form-group">
                <label for="">Nama Kamar</label>
                <input type="text" id="nama" name="nama_kamar" class="form-control"  value="{{ $dtkamar->nama_kamar }}">
            </div>
            <div class="form-group">
                <label for="">Fasilitas</label> <br>
                <textarea name="fasilitas" id="fasilitas" cols="53" rows="5" >{{ $dtkamar->fasilitas }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" id="harga" name="harga" class="form-control"  value="{{ $dtkamar->harga }}">RP. 
            </div>
            <div class="form-group">
                <label for="">Kapasitas</label>
                <input type="text" id="kapasitas" name="kapasitas" class="form-control"  value="{{ $dtkamar->kapasitas }}">
            </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>


@endsection