<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report User</title>
</head>
<body>
    <p align="center"><b>Laporan Data User</b></p>
    <div>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Role</th>
                    <th>Username</th>
                    <th>Email</th>
                    {{-- <th>Password</th> --}}    
                </tr>
                @php ($no = 1)
                @foreach ($dtuser as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->role}}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->email }}</td>
                </tr>   
                @endforeach   
        </table>
    </div>
</body>
</html>