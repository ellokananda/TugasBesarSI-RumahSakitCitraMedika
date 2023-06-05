<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Pasien</title>
</head>
<body>
    <p align="center"><b>Laporan Data Pasien</b></p>
    <div>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Telpon</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                </tr>
                @php ($no = 1)
                @foreach ($dtpasien as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama_pasien }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->telp }}</td>
                    <td>{{ $item->jk }}</td>
                    <td>{{ $item->status }}</td>
                    
                </tr>   
                @endforeach  
        </table>
    </div>
</body>
</html>