@php
$titlePage = 'Category';
@endphp

@extends('admin.layouts.app', ['activePage' => 'category', 'titlePage' => $titlePage])

@section('content')
    <div class="page-content">
        {{-- Breadcrump --}}
        @include("admin.layouts.content.header", ["breadcrump_items"=>["Master
        Data","Category"],"breadcrump_href"=>['','category.index']])
       
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                        @foreach ($categories as $category)
                        <tr>
                        <td>{{$category->id}}</td>     
                        <td>{{$category->name}}</td> 
                        <td>
                            <a class="btn btn-primary" href="{{route('category.edit',$category->id)}}" role="button">Edit</a>
                            <a class="btn btn-danger" href="{{route('category.destroy',$category->id)}}" role="button">Destroy</a>
                        </td>
                    </tr>
                        @endforeach

             
                </tbody>
            </table>
        </div>
    </div>
@endsection
