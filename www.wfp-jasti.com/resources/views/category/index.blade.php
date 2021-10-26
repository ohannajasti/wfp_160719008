@php
$titlePage = 'Category';
@endphp

@extends('layouts.app', ['activePage' => 'category', 'titlePage' => $titlePage])

@section('content')
    <div class="page-content">
        {{-- Breadcrump --}}
        @include("layouts.content.header", ["breadcrump_items"=>["Master
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
                    <tr>
                        @foreach ($categories as $category)
                        <td>{{$category->id}}</td>     
                        <td>{{$category->name}}</td> 
                        @endforeach
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
