<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <iv class="card">
            <div class="card-header">
                <h3 class="text-center">Tambah Siswa</h3>
            </div>

            <div class="card-body">
                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>

                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <ul class="list-group">
                        Nama <input type="text" name="nama" id="#" required>
                        Nis <input type="text" name="nis" id="#" required>
                        Tanggal Lahir <input type="date" name="tgl_lahir" id="#" required>
                    </ul>
                    <input type="submit" value="Simpan Data" class="btn-success">
                </form>
            </div>
        </iv>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
