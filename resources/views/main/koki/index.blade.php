<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Resto<i>RUN</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('main.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('main.kokis.index') }}">koki-Koki</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="p-3">
        <h1>Data Koki Restoran</h1>
        <div class="">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Kokis as $Koki)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $Koki->nama }}</td>
                        <td>{{ $Koki->divisi }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('main.kokis.edit', $Koki->id) }}" class="btn btn-warning me-3">Edit</a>
                                <form action="{{ route('main.kokis.destroy', $Koki->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <p>Data Kosong</p>
                    @endforelse
                </tbody>
            </table>
            <a href="{{ route('main.kokis.create') }}" type="button" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
</body>

</html>