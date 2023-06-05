<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Dokter</title>
</head>
<body>
    <p align="center"><b>Laporan Data Dokter</b></p>
    <div>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Telpon</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Spesialis</th>
                    <th>Hari Praktik</th>
                    <th>Jam Praktik</th>
                    {{-- <th>Foto</th> --}}
                </tr>
                @php ($no = 1)
                @foreach ($dtdokter as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->nama_dokter }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->jk }}</td>
                    <td>{{ $item->telp }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->spesialis }}</td>
                    <td>{{ $item->hari_praktek }}</td>
                    <td>{{ $item->jam_praktek }}</td>
                    {{-- <td><img class="w-100" src="/img/{{ $item->foto }}" alt="{{ $item->foto }}"></td> --}}
                </tr>   
                @endforeach
        </table>
    </div>
</body>
</html>