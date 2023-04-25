@extends('main')
@section('content')    

<h3>DATA TRANSAKSI</h3>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Resep</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

@endsection