@extends('layouts.conquer2')
@section('content')
<h3>Master Catgeory</h3>
<div class="table-responsive">
    <table class="table table-hover">
    <thead>
   <tr>
       <th>ID </th>
       <th>Name</th>

   </tr>
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