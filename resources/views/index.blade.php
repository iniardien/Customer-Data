<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Data</title>
</head>
<body>
    <h1>Data Customer</h1>
    <a href="{{ route('add')}}">Add Data</a>
    <table style="width: 100%; margin-top:10px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Usia</th>
                <th>Berat Badan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($record as $data)
            <tr style="text-align: center">
                <td>{{$data->id}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->no_telp}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->usia}}</td>
                <td>{{$data->berat_badan}}</td>
                <td>
                    <a href="{{route('edit',$data->id)}}">Edit Data</a>
                    <a href="{{route('delete',$data->id)}}">Delete Data</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      
    </table>
</body>
</html>