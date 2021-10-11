@extends('layout.conquer2');
@section('content')
<div class="table-responsive">
    <table class="table table-hover">
    <thead>
            <th>ID</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Stock</th>
    </thead>
    <tbody>
    @foreach ($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name_book}}</td>
            <td>{{$d->author}}</td>
            <td>{{$d->publisher}}</td>
            <td>{{$d->stock}}</td>
        </tr>
    @endforeach
  
    </tbody>
    </table>
</div>
@endsection