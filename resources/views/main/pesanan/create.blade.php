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
        <h1>Tambahkan Data Pesanan</h1>
        <div class="">
            <form action="{{ route('Pesanans.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="no_meja" class="form-label">No_Meja</label>
                    <input type="text" name="no_meja" class="form-control" id="no_meja">
                </div>
                <div class="mb-3">
                    <label for="nama_menu" class="form-label">Nama_Menu</label>
                    <input type="text" name="nama_menu" class="form-control" id="nama_menu">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga">
                </div>
                
                <a href="{{ route('Pesanans.index') }}" type="button" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</body>

</html>