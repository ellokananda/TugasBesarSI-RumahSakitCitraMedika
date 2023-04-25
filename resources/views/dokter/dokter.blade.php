@extends('main')
@section('content')    

<h3>DATA DOKTER</h3>
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
    </table>
</div>

@endsection