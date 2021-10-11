@extends('layout.conquer2');
@section('content')
<div class="table-responsive">
    <table class="table table-hover">
    <thead>
            <th>ID</th>
            <th>Name</th>
    </thead>
    <tbody>
    @foreach ($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
        </tr>
    @endforeach
  
    </tbody>
    </table>
</div>
@endsection