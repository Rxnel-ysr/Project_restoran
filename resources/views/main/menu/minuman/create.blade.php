<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Menu Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="p-3">
        <h1>Tambahkan Data Menu</h1>
        <div class="">
            <form action="{{ route('main.menus.minuman.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="menu" class="form-label">Minuman</label>
                    <input type="text" name="menu" class="form-control" id="menu">
                    @error('menu')
                    <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Minuman</label>
                    <input type="number" name="harga" class="form-control" id="harga">
                    @error('harga')
                    <small>{{ $message }}</small>
                    @enderror
                </div>
                <a href="{{ route('main.menus.minuman.index') }}" type="button" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</body>

</html>