@extends('main')
@section('content')    

@if (session()->has('success'))
        <div class="alert alert-success" role="alert"  id="alert">
            {{ session('success') }}
        </div>
@endif
<div class="card shadow mb-4">
    @if(auth()->user()->role === 1)
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Rekam Medis</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Tanggal Periksa</th>
                        <th>Keluhan</th>
                        <th>Tindakan</th>
                        <th>Diagnosa</th>
                        <th>Resep</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtrekammedis as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->pasien->nama_pasien }}</td>
                        <td>{{ $item->dokter->nama_dokter}}</td>
                        <td>{{ $item->tgl_periksa }}</td>
                        <td>{{ $item->keluhan }}</td>
                        <td>{{ $item->tindakan }}</td>
                        <td>{{ $item->diagnosa }}</td>
                        <td>{{ $item->obat->nama_obat }}</td>
                        
                        <td>
                            <a href="{{ route('editRekamMedis', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                            <a href="{{ route('destroyRekamMedis', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                    </tr>   
                    @endforeach   
                </tbody>
                <div>
                    <a href="{{ route('createRekamMedis') }}" class="btn btn-primary mb-2">Insert <i class="fas fa-plus-square"></i></a>
                    <a href="{{ route('reportRekamMedis') }}" class="btn btn-success mb-2">Report <i class="fa fa-file"></i></a>
                </div>
            </table>
        </div>
    </div>
    @elseif(auth()->user()->role === 2)
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Rekam Medis</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Tanggal Periksa</th>
                        <th>Keluhan</th>
                        <th>Tindakan</th>
                        <th>Diagnosa</th>
                        <th>Resep</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtrekammedis as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->pasien->nama_pasien }}</td>
                        <td>{{ $item->dokter->nama_dokter}}</td>
                        <td>{{ $item->tgl_periksa }}</td>
                        <td>{{ $item->keluhan }}</td>
                        <td>{{ $item->tindakan }}</td>
                        <td>{{ $item->diagnosa }}</td>
                        <td>{{ $item->obat->nama_obat }}</td>
                    </tr>   
                    @endforeach   
                </tbody>
                <div>
                    <a href="{{ route('reportRekamMedis') }}" class="btn btn-success mb-2">Report <i class="fa fa-file"></i></a>
                </div>
            </table>
        </div>
    </div>
    
    @elseif(auth()->user()->role === 3)
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Rekam Medis</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Tanggal Periksa</th>
                        <th>Keluhan</th>
                        <th>Tindakan</th>
                        <th>Diagnosa</th>
                        <th>Resep</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtrekammedis as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->pasien->nama_pasien }}</td>
                        <td>{{ $item->dokter->nama_dokter}}</td>
                        <td>{{ $item->tgl_periksa }}</td>
                        <td>{{ $item->keluhan }}</td>
                        <td>{{ $item->tindakan }}</td>
                        <td>{{ $item->diagnosa }}</td>
                        <td>{{ $item->obat->nama_obat }}</td>
                    </tr>   
                    @endforeach   
                </tbody>
                <div>
                    <a href="{{ route('reportRekamMedis') }}" class="btn btn-success mb-2">Report <i class="fa fa-file"></i></a>
                </div>
            </table>
        </div>
    </div>
    @endif
</div>


@endsection