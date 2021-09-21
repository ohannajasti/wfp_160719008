@extends('layouts.conquer2')
@section('content')
    <h2>Supplier table</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Supplier</th>
            </tr>
        </thead>
        <tbody>
            {{-- alternatif 1: compact --}}
            @foreach ($queryBuilder as $d)
                {{-- alternatif 2: data --}}
                {{-- @foreach ($data as $d) --}}
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->address }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

    </div>

    </div>
    </div>
@endsection
