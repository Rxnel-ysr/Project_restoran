<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Menu Minuman Id = {{$Minumans->id}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="p-3">
        <h1>Edit Minuman</h1>
        <div class="">
            <form action="{{ route('main.menus.makanan.update', $Minumans->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Menu</label>
                    <input type="text" name="menu" class="form-control" value="{{ $Minumans->menu}}" id="nama">
                    @error('nama')
                    <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Makanan</label>
                    <input type="number" name="harga" class="form-control" id="harga" value="{{ $Minumans->harga }}">
                    @error('harga')
                    <small>{{ $message }}</small>
                    @enderror
                </div>
                <a href="{{ route('main.menus.makanan.index') }}" type="button" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary">Ganti</button>
            </form>
        </div>
    </div>
</body>

</html>