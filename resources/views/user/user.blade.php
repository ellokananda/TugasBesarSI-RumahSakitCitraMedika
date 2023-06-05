@extends('main')
@section('content')    

@if (session()->has('success'))
        <div class="alert alert-success" role="alert"  id="alert">
            {{ session('success') }}
        </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Role</th>
                        <th>Username</th>
                        <th>Email</th>
                        {{-- <th>Password</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($no = 1)
                    @foreach ($dtuser as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->role}}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        {{-- <td>{{ $item->password }}</td> --}}
                        
                        <td>
                            <a href="{{ route('editUser', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                            <a href="{{ route('destroyUser', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                    </tr>   
                    @endforeach   
                </tbody>
                <div>
                    <a href="{{ route('createUser') }}" class="btn btn-primary mb-2">Insert <i class="fas fa-plus-square"></i></a>
                    <a href="{{ route('reportUser') }}" class="btn btn-success mb-2">Report <i class="fa fa-file"></i></a>
                </div> 
            </table>
        </div>
    </div>
</div>


@endsection