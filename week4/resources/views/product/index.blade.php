<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>

    <div class="container">
        <h2>Products table</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Category ID</th>
                    <th>Supplier ID</th>
                </tr>
            </thead>
            <tbody>
                {{-- alternatif 1: compact --}}
                @foreach ($queryBuilder as $d)
                    {{-- alternatif 2: data --}}
                    {{-- @foreach ($data as $d) --}}
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nama_produk }}</td>
                        <td>{{ $d->harga_produk }}</td>
                        <td>{{ $d->harga_jual }}</td>
                        <td>{{ $d->stok }}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>{{ $d->updated_at }}</td>
                        <td>{{ $d->category_id }}</td>
                        <td>{{ $d->supplier_id }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
    <div class="card-deck">
        @foreach ($queryBuilder as $d)
            <div class="card my-2 mt-20" style="min-width: 18rem;">
                <img src="{{ asset('img/' . $d->id . '.jpg') }}" class="card-img-top" alt="...">

                <div class="card-body d-flex flex-column">
                    <div class="card-text">
                        <h2>{{ $d->nama_produk }}</h2>
                        <h5>Rp {{ $d->harga_jual }}</h5>
                        <p>Panna cotta (Italian for "cooked cream") is an Italian dessert of sweetened cream thickened
                            with gelatin and molded. </p>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg mt-auto">Buy</button>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    </div>
    </div>

</body>

</html>
