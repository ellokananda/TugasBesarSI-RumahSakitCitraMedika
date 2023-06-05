<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rekam Medis</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table border="1">
                    
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
                            <th>Tanggal Periksa</th>
                            <th>Keluhan</th>
                            <th>Tindakan</th>
                            <th>Diagnosa</th>
                        </tr>
                        <?php
                            $query    =mysqli_query( "SELECT * FROM rekam_medis WHERE id='$id'");
                            while($result    =mysqli_fetch_array($query)){
                            $no++    
                            ?>
                            <tr>
                                <td><?php echo $no?></td>
                                <td><?php echo $result['nama_pasien']?></td>
                                <td><?php echo $result['nama_dokter']?></td>
                                <td><?php echo $result['tgl_periksa']?></td>
                                <td><?php echo $result['keluhan']?></td>
                                <td><?php echo $result['tindakan']?></td>
                                <td><?php echo $result['diagnosa']?></td>   
                            </tr>
                            <?php
                            }
                        ?>
                        {{-- @php ($no = 1)
                        @foreach ($$cetakperuser as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->pasien->nama_pasien }}</td>
                            <td>{{ $item->dokter->nama_dokter}}</td>
                            <td>{{ $item->tgl_periksa }}</td>
                            <td>{{ $item->keluhan }}</td>
                            <td>{{ $item->tindakan }}</td>
                            <td>{{ $item->diagnosa }}</td>
                            <td>{{ $item->obat->nama_obat }}</td>
                            
                            
                        </tr>   
                        @endforeach  --}}
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>