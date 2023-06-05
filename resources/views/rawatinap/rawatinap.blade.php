@extends('main')
@section('content')    

@if (session()->has('success'))
        <div class="alert alert-success" role="alert"  id="alert">
            {{ session('success') }}
        </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pasien Rawat Inap</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>No. Kamar</th>
                        <th>Kamar</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtrawatinap as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->pasien->nama_pasien }}</td>
                        <td>{{ $item->dokter->nama_dokter}}</td>
                        <td>{{ $item->no_kamar }}</td>
                        <td>{{ $item->kamar->nama_kamar }}</td>
                        <td>{{ $item->tgl_masuk }}</td>
                        <td>{{ $item->tgl_keluar }}</td>
                        <td>
                            <a href="{{ route('editRawatInap', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                            <a href="{{ route('destroyRawatInap', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                    </tr>   
                    @endforeach   
                </tbody>
                <div>
                    <a href="{{ route('createRawatInap') }}" class="btn btn-primary mb-2">Insert <i class="fas fa-plus-square"></i></a>
                    <a href="{{ route('reportRawatInap') }}" class="btn btn-success mb-2">Report <i class="fa fa-file"></i></a>
                </div>
            </table>
        </div>
    </div>
</div>


@endsection