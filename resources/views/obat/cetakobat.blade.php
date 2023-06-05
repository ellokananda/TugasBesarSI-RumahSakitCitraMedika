<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Obat</title>
</head>
<body>
    <p align="center"><b>Laporan Data Obat</b></p>
    <div>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Keterangan</th>
                </tr>
                @php ($no = 1)
                @foreach ($dtobat as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama_obat }}</td>
                    <td>{{ $item->jenis_obat }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('editObat', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                        <a href="{{ route('destroyObat', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                    </td>
                </tr>   
                @endforeach 
        </table>
    </div>
</body>
</html>