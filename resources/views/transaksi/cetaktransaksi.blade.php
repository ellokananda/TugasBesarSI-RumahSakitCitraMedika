<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Transaksi</title>
</head>
<body>
    <p align="center"><b>Laporan Data Transaksi</b></p>
    <div>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Resep</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Total</th>
                </tr>
                @php ($no = 1)
                @foreach ($dttransaksi as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->pasien->nama_pasien }}</td>
                    <td>{{ $item->obat->nama_obat}}</td>
                    <td>{{ $item->tgl_masuk }}</td>
                    <td>{{ $item->tgl_keluar }}</td>
                    <td>{{ $item->total }}</td>
                    <td>
                        <a href="{{ route('editTransaksi', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                        <a href="{{ route('destroyTransaksi', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                    </td>
                </tr>   
                @endforeach   
        </table>
    </div>
</body>
</html>