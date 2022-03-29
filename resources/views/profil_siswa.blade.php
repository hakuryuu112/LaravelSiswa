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
        <div class="container d-flex justify-content-center">
            <div class="card w-50">
                <div class="card-header">
                    <h3 class="text-center">Profile Siswa</h3>
                </div>

                <div class="card-body">
                    <a href="{{ route('siswa.index') }}">Kembali</a>

                        <div class="row ml-2">
                            <h6 class="col-4">Nama </h6>
                            <h6>: {{ $siswa->nama }}</h6>
                        </div>
                        <div class="row ml-2">
                            <h6 class="col-4">Nis </h6>
                            <h6>: {{ $siswa->nis }}</h6>
                        </div>
                        <div class="row ml-2">
                            <h6 class="col-4">Tanggal Lahir </h6>
                            <h6>: {{ $siswa->tgl_lahir }}</h6>
                        </div>
                </div>
            </div>
        </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
