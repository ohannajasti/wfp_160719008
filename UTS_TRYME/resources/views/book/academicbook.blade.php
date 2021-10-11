@extends('layouts.conquer2')
@section('content')
<h3>List of Academic Book</h3>
<div class="table-responsive">
    <table class="table table-hover">
    <thead>
        <tr>
            <th>ID </th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Publisher</th>
        </tr>
         </thead>
         <tbody>
         @foreach ($data as $d)
         <tr>
             <td>{{$d->id}}</td>
             <td>{{$d->name_book}}</td>
             <td>{{$d->author}}</td>
             <td>{{$d->publisher}}</td>
             </tr>
         @endforeach
    </tbody>
    </table>
</div>
@endsection