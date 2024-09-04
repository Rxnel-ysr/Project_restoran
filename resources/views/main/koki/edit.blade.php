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
        <h1>Edit Data Koki</h1>
        <div class="">
            <form action="{{ route('main.kokis.update', $Koki->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $Koki->nama}}"
                        id="nama">
                        @error('nama')
                            <small>Isi dengan nama pengganti</small>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="nisn" class="form-label">Divisi</label>
                    <select name="divisi" id="divisi" class="form-control">
                        <option value="Soup">Soup</option>
                        <option value="Pasta">Pasta</option>
                        <option value="Desert">Desert</option>
                    </select>
                </div>
                <a href="{{ route('main.kokis.index') }}" type="button" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</body>

</html>