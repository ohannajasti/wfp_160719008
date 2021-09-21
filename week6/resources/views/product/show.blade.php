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
        <h2>Product Detail</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                {{-- alternatif 1: compact --}}
                {{-- @foreach ($queryBuilder as $data) --}}
                    {{-- alternatif 2: data --}}
                    {{-- @foreach ($dataata as $data) --}}
                    <tr>
                        <td>ID</td>
                        <td>{{ $data->id }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>{{ $data->nama_produk }}</td>
                    </tr>
                    <tr>
                        <td>Harga Produk</td>
                        <td>{{ $data->harga_produk }}</td>
                    </tr>
                    <tr>
                        <td>Harga Jual</td>
                        <td>{{ $data->harga_jual }}</td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>{{ $data->stok }}</td>
                    </tr>
                    <tr>
                        <td>Created At</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Updated At</td>
                        <td>{{ $data->updated_at }}</td>
                    </tr>
                    <tr>
                        <td>Category ID</td>
                        <td>{{ $data->category_id }}</td>
                    </tr>
                    <tr>
                        <td>Supplier ID</td>
                        <td>{{ $data->supplier_id }}</td>
                    </tr>
                {{-- @endforeach --}}

            </tbody>
        </table>

    </div>
    
    </div>

    </div>
    </div>

</body>

</html>
