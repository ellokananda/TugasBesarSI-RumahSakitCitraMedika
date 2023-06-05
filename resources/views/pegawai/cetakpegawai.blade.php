<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Pegawai</title>
</head>
<body>
    <p align="center"><b>Laporan Data Pegawai</b></p>
    <div>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Telpon</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jabatan</th>
                </tr>
                @php ($no = 1)
                @foreach ($dtpegawai as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->kode_pegawai }}</td>
                    <td>{{ $item->nama_pegawai }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->jk }}</td>
                    <td>{{ $item->telp }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>
                        <a href="{{ route('editPegawai', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                        <a href="{{ route('destroyPegawai', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                    </td>
                </tr>   
                @endforeach
        </table>
    </div>
</body>
</html>