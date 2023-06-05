<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Rawat Inap</title>
</head>
<body>
    <p align="center"><b>Laporan Data Rawat Inap</b></p>
    <div>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Nama Dokter</th>
                    <th>No. Kamar</th>
                    <th>Kamar</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th> 
                </tr>
                @php ($no = 1)
                @foreach ($dtrawatinap as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->pasien->nama_pasien }}</td>
                    <td>{{ $item->dokter->nama_dokter}}</td>
                    <td>{{ $item->no_kamar }}</td>
                    <td>{{ $item->kamar->nama_kamar }}</td>
                    <td>{{ $item->tgl_masuk }}</td>
                    <td>{{ $item->tgl_keluar }}</td>
                    <td>
                        <a href="{{ route('editRawatInap', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                        <a href="{{ route('destroyRawatInap', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                    </td>
                </tr>   
                @endforeach   
        </table>
    </div>
</body>
</html>