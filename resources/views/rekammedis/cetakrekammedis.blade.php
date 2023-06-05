<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Rekam Medis</title>
</head>
<body>
    <p align="center"><b>Laporan Data Rekam Medis</b></p>
    <div>
        <table border="1">
            
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal Periksa</th>
                    <th>Keluhan</th>
                    <th>Tindakan</th>
                    <th>Diagnosa</th>
                    <th>Resep</th>
                    
                </tr>
            
                @php ($no = 1)
                @foreach ($dtrekammedis as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->pasien->nama_pasien }}</td>
                    <td>{{ $item->dokter->nama_dokter}}</td>
                    <td>{{ $item->tgl_periksa }}</td>
                    <td>{{ $item->keluhan }}</td>
                    <td>{{ $item->tindakan }}</td>
                    <td>{{ $item->diagnosa }}</td>
                    <td>{{ $item->obat->nama_obat }}</td>
                    
                    <td>
                        <a href="{{ route('editRekamMedis', ['id'=>$item->id]) }}"><i class="fas fa-edit" style="color: rgb(243, 229, 30)"></i></a> | 
                        <a href="{{ route('destroyRekamMedis', ['id'=>$item->id]) }}"><i class="fas fa-trash" style="color: red"></i></a>
                    </td>
                </tr>   
                @endforeach   
            
        </table>
    </div>
</body>
</html>