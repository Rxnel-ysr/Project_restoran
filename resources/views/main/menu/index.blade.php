<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Menu RestoRUN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            margin: 0 10px;
            background-color: #555;
            border-radius: 4px;
        }

        nav a:hover {
            background-color: #666;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content {
            text-align: center;
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        abbr {
            text-decoration: none
        }
    </style>
</head>

<body>

    <header>
        <h1>Resto<i>RUN</i></h1>
    </header>

    <nav>
        <a href="{{route('main.index')}}">Beranda</a>
        <a href="{{ route('main.menus.makanan.index') }}">Makanan</a>
        <a href="{{ route('main.menus.minuman.index') }}">Minuman</a>
        <a href="{{ route('main.menus.snack.index') }}">Snacks</a>
    </nav>

    <div class="container">
        <div class="content">
            <h2>Menu</h2>
            <p>Pilihan Menu Yang Tersedia.</p>
        </div>
        <div class="p-3" id="Makanans">
            <h3>Makanan</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Makanans as $Makanan)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $Makanan->menu }}</td>
                        <td>{{ $Makanan->harga }}</td>
                    </tr>
                    @empty
                    <p>Menu Kosong</p>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-3" id="Minumans">
            <h3>Minuman</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Minumans as $Minuman)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $Minuman->menu }}</td>
                        <td>{{ $Minuman->harga }}</td>
                    </tr>
                    @empty
                    <p>Menu Kosong</p>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-3" id="Snacks">
            <h3>Snack</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Snacks as $Snack)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $Snack->menu }}</td>
                        <td>{{ $Snack->harga }}</td>
                    </tr>
                    @empty
                    <p>Menu Kosong</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Resto<i>RUN</i>. Semua hak dilindungi.</p>
    </footer>

</body>

</html>