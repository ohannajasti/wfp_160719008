@php
$titlePage = 'Edit Product';
@endphp

@extends('admin.layouts.app', ['activePage' => 'product', 'titlePage' => $titlePage])

@section('content')
    <div class="page-content">
        {{-- Breadcrump --}}
        @include("admin.layouts.content.header", ["breadcrump_items"=>["Master Data","Product","Edit Product"],"breadcrump_href"=>['','product.index','']])
        {{-- Status --}}
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
            
        @endif
        {{-- Form Data --}}
        <form role="form" method="post" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                    placeholder="Enter Name Product" value='{{ old('name') ?? $product->name }}'>
            </div>
            <div class="form-group">
                <label for="price_production">Production Price</label>
                <input type="number" class="form-control" id="price_production" name="price_production"
                    aria-describedby="price_production" placeholder="Enter Production Price"
                    value='{{ old('price_production') ?? $product->price_production }}'>
            </div>
            <div class="form-group">
                <label for="price_sell">Sell Price</label>
                <input type="number" class="form-control" id="price_sell" name="price_sell"
                    aria-describedby="price_sell" placeholder="Enter Sell Price"
                    value='{{ old('price_sell') ?? $product->price_sell }}'>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock"
                    placeholder="Enter Stock Quantity" value='{{ old('stock') ?? $product->stock }}'>
            </div>
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select name="category_id" class="form-control dropdown" data-style="btn btn-link"
                    id="exampleFormControlSelect1">
                    <option selected disabled>- Select Category -</option>
                    @foreach ($categories as $category)
                        @if ($category == $product->category)
                            <option value="{{ $category->id }}" selected>
                                {{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">
                                {{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="supplier_id">Product</label>
                <select name="supplier_id" class="form-control dropdown" data-style="btn btn-link"
                    id="exampleFormControlSelect1">
                    <option selected disabled>- Select Product -</option>
                    @foreach ($suppliers as $supplier)
                        @if ($supplier == $product->supplier)
                            <option value="{{ $supplier->id }}" selected>
                                {{ $supplier->name }}</option>
                        @else
                            <option value="{{ $supplier->id }}">
                                {{ $supplier->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    @endsection
