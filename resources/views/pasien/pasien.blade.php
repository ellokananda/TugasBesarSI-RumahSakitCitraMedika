@extends('main')
@section('content')    

@if (session()->has('success'))
        <div class="alert alert-success" role="alert"  id="alert">
            {{ session('success') }}
        </div>
@endif
<div class="card shadow mb-4">
    @if(auth()->user()->role === 3)
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Telpon</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtpasien as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->nama_pasien }}</td>
                        <td>{{ $item->tempat_lahir }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->telp }}</td>
                        <td>{{ $item->jk }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ route('editPasien', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                            <a href="{{ route('destroyPasien', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                    </tr>   
                    @endforeach  
                </tbody>
                <div>
                    <a href="{{ route('createPasien') }}" class="btn btn-primary mb-2">Insert <i class="fas fa-plus-square"></i></a>
                    <a href="{{ route('reportPasien') }}" class="btn btn-success mb-2">Report <i class="fa fa-file"></i></a>
                </div>
            </table> 
        </div>
    </div>
    @elseif(auth()->user()->role === 1)
    <div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Telpon</th>
                            <th>Jenis Kelamin</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php ($no = 1)
                        @foreach ($dtpasien as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama_pasien }}</td>
                            <td>{{ $item->tempat_lahir }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->telp }}</td>
                            <td>{{ $item->jk }}</td>
                            <td>{{ $item->status }}</td>
                        
                        </tr>   
                        @endforeach  
                    </tbody>
                    
                </table> 
            </div>
        </div>
    </div>
    @endif
</div>



@endsection