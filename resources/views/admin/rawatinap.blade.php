@extends('main')
@section('content')    

<h3>DATA PASIEN RAWAT INAP</h3>
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
    </table>
</div>

@endsection