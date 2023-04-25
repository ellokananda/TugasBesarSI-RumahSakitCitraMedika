@extends('main')
@section('content')    

<h3>DATA PASIEN</h3>
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
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

@endsection