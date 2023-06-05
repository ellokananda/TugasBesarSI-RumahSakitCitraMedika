@extends('main')
@section('content')    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Rekam Medis</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('updateRekamMedis', $dtrekammedis->id) }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Pasien</label>
                <select class="form-control" id="pasien_id" name="pasien_id">
                    <option disabled value>Pilih Pasien</option>
                    <option value="{{$dtrekammedis->pasien_id}}">{{ $dtrekammedis->pasien->nama_pasien }}</option>
                    @foreach($pas as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_pasien }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Dokter</label>
                <select class="form-control" id="dokter_id" name="dokter_id">
                    <option disabled value>Pilih Dokter</option>
                    <option value="{{$dtrekammedis->dokter_id}}">{{ $dtrekammedis->dokter->nama_dokter }}</option>
                    @foreach($dok as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_dokter }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Tanggal Periksa</label>
                <input type="date" id="tgl_periksa" name="tgl_periksa" class="form-control" value="{{ $dtrekammedis->tgl_periksa }}" > 
            </div>
            <div class="form-group">
                <label for="">Keluhan</label>
                <input type="text" id="keluhan" name="keluhan" class="form-control" value="{{ $dtrekammedis->keluhan }}"> 
            </div>
            <div class="form-group">
                <label for="">Tindakan</label>
                <input type="text" id="tindakan" name="tindakan" class="form-control" value="{{ $dtrekammedis->tindakan }}" > 
            </div>
            <div class="form-group">
                <label for="">Diagnosa</label>
                <input type="text" id="diagnosa" name="diagnosa" class="form-control" value="{{ $dtrekammedis->diagnosa }}" > 
            </div>
            <div class="form-group">
                <label for="">Resep</label>
                <select class="form-control" id="obat_id" name="obat_id">
                    <option disabled value>Pilih Obat</option>
                    <option value="{{$dtrekammedis->obat_id}}">{{ $dtrekammedis->obat->nama_obat }}</option>
                    @foreach($ob as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_obat }}</option>
                    @endforeach
                </select>
            </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection