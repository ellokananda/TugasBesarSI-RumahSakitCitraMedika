@extends('main')
@section('content')    

{{-- <h3>DATA DOKTER</h3> --}}
@if (session()->has('success'))
        <div class="alert alert-success" role="alert"  id="alert">
            {{ session('success') }}
        </div>
@endif
<div class="card shadow mb-4">
    @if(auth()->user()->role === 2)
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Dokter</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Telpon</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Spesialis</th>
                        <th>Hari Praktik</th>
                        <th>Jam Praktik</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtdokter as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->nama_dokter }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jk }}</td>
                        <td>{{ $item->telp }}</td>
                        <td>{{ $item->tempat_lahir }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->spesialis }}</td>
                        <td>{{ $item->hari_praktek }}</td>
                        <td>{{ $item->jam_praktek }}</td>
                        <td><img class="w-100" src="/img/{{ $item->foto }}" alt="{{ $item->foto }}"></td>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @elseif(auth()->user()->role === 3)
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Dokter</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Telpon</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Spesialis</th>
                        <th>Hari Praktik</th>
                        <th>Jam Praktik</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtdokter as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->nama_dokter }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jk }}</td>
                        <td>{{ $item->telp }}</td>
                        <td>{{ $item->tempat_lahir }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->spesialis }}</td>
                        <td>{{ $item->hari_praktek }}</td>
                        <td>{{ $item->jam_praktek }}</td>
                        <td><img class="w-100" src="/img/{{ $item->foto }}" alt="{{ $item->foto }}"></td>
                        <td>
                            <a href="{{ route('editDokter', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                            <a href="{{ route('destroyDokter', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                    </tr>   
                    @endforeach
                </tbody>
                <div>
                    <a href="{{ route('createDokter') }}" class="btn btn-primary mb-2">Insert <i class="fas fa-plus-square"></i></a>
                    <a href="{{ route('reportDokter') }}" class="btn btn-success mb-2">Report <i class="fa fa-file"></i></a>
                </div>
            </table>
        </div>
    </div>
    @endif
</div>



@endsection