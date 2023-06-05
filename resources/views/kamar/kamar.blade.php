@extends('main')
@section('content')    

@if (session()->has('success'))
        <div class="alert alert-success" role="alert"  id="alert">
            {{ session('success') }}
        </div>
@endif

<div class="card shadow mb-4">
    @if(auth()->user()->role === 2)
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Fasilitas</th>
                        <th>Harga</th>
                        <th>Kapasitas</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtkamar as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama_kamar }}</td>
                        <td>{{ $item->fasilitas }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->kapasitas }}</td>
                       
                    </tr>   
                    @endforeach  
                </tbody>
                
            </table>
        </div>
    </div>

    @elseif(auth()->user()->role === 3)
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Fasilitas</th>
                        <th>Harga</th>
                        <th>Kapasitas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtkamar as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama_kamar }}</td>
                        <td>{{ $item->fasilitas }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->kapasitas }}</td>
                        <td>
                            <a href="{{ route('editKamar', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                            <a href="{{ route('destroyKamar', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                    </tr>   
                    @endforeach  
                </tbody>
                <div>
                    <a href="{{ route('createKamar') }}" class="btn btn-primary mb-2">Insert <i class="fas fa-plus-square"></i></a>
                    <a href="{{ route('reportKamar') }}" class="btn btn-success mb-2">Report <i class="fa fa-file"></i></a>
                </div>
            </table>
        </div>
    </div>
    @endif
</div>


@endsection