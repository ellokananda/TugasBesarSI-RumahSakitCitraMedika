@extends('main')
@section('content')    

<h3>DATA REKAM MEDIS</h3>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Nama Dokter</th>
                <th>Keluhan</th>
                <th>Tindakan</th>
                <th>Diagnosa</th>
                <th>Resep</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

@endsection