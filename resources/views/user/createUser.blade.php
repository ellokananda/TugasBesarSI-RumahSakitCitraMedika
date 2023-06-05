@extends('main')
@section('content')    

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('saveUser') }}" method="post" >
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="">Role</label>
                <select class="form-control" name="role" >
                    <option value="0">--- Pilih Role ---</option>
                    <option value="1">Dokter</option>
                    <option value="2">Pasien</option>
                    <option value="3">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" id="username" name="username" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" id="email" name="email" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" id="password" name="password" class="form-control"  >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection