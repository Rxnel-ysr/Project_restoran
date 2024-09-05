<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="p-3">
        <h1>Tambahkan Data Menu</h1>
        <div class="">
            <form action="{{ route('Menus.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="makanan" class="form-label">Makanan</label>
                    <input type="text" name="Makanan" class="form-control" id="makanan">
                </div>
                <div class="mb-3">
                    <label for="Harga_Makanan" class="form-label">Harga Makanan</label>
                    <input type="number" name="Harga_Makanan" class="form-control" id="Harga_Makanan">
                </div>
                <div class="mb-3">
                    <label for="minuman" class="form-label">Minuman</label>
                    <input type="text" name="Minuman" class="form-control" id="minuman">
                </div>
                <div class="mb-3">
                    <label for="Harga_Minuman" class="form-label">Harga Minuman</label>
                    <input type="number" name="Harga_Minuman" class="form-control" id="Harga_Minuman">
                </div>
                <div class="mb-3">
                    <label for="snack" class="form-label">Snack</label>
                    <input type="text" name="Snack" class="form-control" id="snack">
                </div>
                <div class="mb-3">
                    <label for="Harga_Snack" class="form-label">Harga Snack</label>
                    <input type="number" name="Harga_Snack" class="form-control" id="Harga_Snack">
                </div>
                <a href="{{ route('Menus.index') }}" type="button" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</body>

</html>