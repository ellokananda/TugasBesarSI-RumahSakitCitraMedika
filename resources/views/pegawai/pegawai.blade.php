@extends('main')
@section('content')    


@if (session()->has('success'))
        <div class="alert alert-success" role="alert"  id="alert">
            {{ session('success') }}
        </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Telpon</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtpegawai as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->kode_pegawai }}</td>
                        <td>{{ $item->nama_pegawai }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jk }}</td>
                        <td>{{ $item->telp }}</td>
                        <td>{{ $item->tempat_lahir }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>
                            <a href="{{ route('editPegawai', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                            <a href="{{ route('destroyPegawai', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                    </tr>   
                    @endforeach
                </tbody>
                <div>
                    <a href="{{ route('createPegawai') }}" class="btn btn-primary mb-2">Insert <i class="fas fa-plus-square"></i></a>
                    <a href="{{ route('reportPegawai') }}" class="btn btn-success mb-2">Report <i class="fa fa-file"></i></a>
                </div>
            </table>
        </div>
    </div>
</div>


@endsection