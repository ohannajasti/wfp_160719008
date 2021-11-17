@php
$titlePage = 'Add Data Supplier';
@endphp

@extends('admin.layouts.app', ['activePage' => 'supplier', 'titlePage' => $titlePage])

@section('content')
    <div class="page-content">
        {{-- Breadcrump --}}
        @include("admin.layouts.content.header", ["breadcrump_items"=>["Master Data","Supplier","Add Data Supplier"],"breadcrump_href"=>['','supplier.index','supplier.create']])
        {{-- Status --}}
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
            
        @endif
        {{-- Form Data --}}
        <form role="form" method="post" action="{{route('supplier.store')}}" >
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                    placeholder="Enter Name Supplier">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Supplier Address" rows='3'></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    @endsection
