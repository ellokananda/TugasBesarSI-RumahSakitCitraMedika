<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Kamar</title>
</head>
<body>
    <p align="center"><b>Laporan Data Kamar</b></p>
    <div>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Fasilitas</th>
                    <th>Harga</th>
                    <th>Kapasitas</th>
                </tr>
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
        </table>
    </div>
</body>
</html>