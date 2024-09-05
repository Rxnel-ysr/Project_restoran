<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="p-3">
        <h1>Edit Data Pelayan</h1>
        <div class="">
            <form action="{{ route('main.pelayans.update', $Pelayan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $Pelayan->nama}}" id="nama">
                    @error('nama')
                    <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-Laki">Laki laki</option>
                    </select>
                    <small>Kelamin Sebelumnya: {{ $Pelayan->jenis_kelamin }}</small>
                </div>
                <a href="{{ route('main.pelayans.index') }}" type="button" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary">Ganti</button>
            </form>
        </div>
    </div>
</body>

</html>