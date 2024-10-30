<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Customer Data</title>
    <style>
        body {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <h1>Add Data Customer</h1>
    <a href="{{ route('index') }}">Kembali</a>
    <form action="{{ route('add_data') }}" method="post">
        @csrf
        <table>
            <tr>
                <td> <label for="nama">Nama :</label></td>
                <td> <input type="text" name="nama" value="{{ old('nama') }}"></td>
                <td>
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </td>

            </tr>
            <tr>
                <td> <label for="no_telp">No Telp :</label></td>
                <td> <input type="text" name="no_telp" value="{{ old('no_telp') }}"></td>
                <td>
                    @error('no_telp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </td>
            </tr>
            <tr>
                <td> <label for="alamat">Alamat :</label></td>
                <td>
                    <textarea name="alamat">{{old('alamat')}}</textarea>
                </td>
                <td>
                    @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </td>
            </tr>
            <tr>
                <td> <label for="usia">Usia :</label></td>
                <td> <input type="number" name="usia" value="{{ old('usia') }}"></td>
                <td>
                    @error('usia')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </td>
            </tr>
            <tr>
                <td> <label for="berat_badan">Berat Badan :</label></td>
                <td> <input type="text" name="berat_badan" value="{{ old('berat_badan') }}"></td>
                <td>
                    @error('berat_badan')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </td>
            </tr>
        </table>
        <button type="submit">Submit Data</button>





    </form>
</body>

</html>
