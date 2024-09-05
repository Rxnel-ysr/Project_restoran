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
        <h1>Edit Data Menu</h1>
        <div class="">
            <form action="{{ route('Menus.update', $Menu->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="makanan" class="form-label">Makanan</label>
                    <input type="text" name="makanan" class="form-control" value="{{ $Menu->makanan}}"
                        id="makanan">
                </div>
                <div class="mb-3">
                    <label for="harga_makanan" class="form-label">Harga Makanan</label>
                    <input type="number" name="harga_makanan" class="form-control" value="{{ $Menu->harga_makanan }}"
                        id="harga_makanan">
                </div>
                <div class="mb-3">
                    <label for="minuman" class="form-label">Minuman</label>
                    <input type="text" name="minuman" class="form-control" value="{{ $Menu->minuman }}"
                        id="minuman">
                </div>
                <div class="mb-3">
                    <label for="harga_minuman" class="form-label">Harga Minuman</label>
                    <input type="number" name="harga_minuman" class="form-control" value="{{ $Menu->harga_minuman}}"
                        id="harga_minuman">
                </div>
                <div class="mb-3">
                    <label for="snack" class="form-label">Snack</label>
                    <input type="text" name="snack" class="form-control" value="{{ $Menu->snack }}"
                        id="snack">
                </div>
                <div class="mb-3">
                    <label for="harga_snack" class="form-label">Harga Snack</label>
                    <input type="number" name="harga_snack" class="form-control" value="{{ $Menu->harga_snack }}"
                        id="harga_snack">
                </div>
                <a href="{{ route('Menus.index') }}" type="button" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</body>

</html>