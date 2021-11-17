@php
$titlePage = 'Product';
@endphp

@extends('frontend.layouts.app', ['activePage' => 'product', 'titlePage' => $titlePage])

@section('content')
    <h1>List Product</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container products">

        <div class="row">

            {{-- Breadcrump --}}
            {{-- @include("admin.layouts.content.header", ["breadcrump_items"=>["Master
        Data","Product"],"breadcrump_href"=>['','product.index']]) --}}


            @foreach ($products as $product)
                <div class="col-xs-18 col-md-3">
                    <div class="thumbnail">
                        <img src="https://via.placeholder.com/150" alt="" class="img-responsive">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ Str::limit(strtolower($product->description ? $product->description : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolores fuga rem, nesciunt dolorum numquam veritatis quia repellat magnam quam, cupiditate debitis consectetur. Quaerat expedita explicabo amet libero delectus? Quae reprehenderit minus mollitia deleniti voluptatem labore dolore soluta quisquam suscipit?'), 50, '...') }}</p>

                            <p><Strong>Price: </Strong>Rp. {{ $product->price_sell }}</p>
                            <p class="btn-holder">
                                <a href="{{ url("add-to-cart/" . $product->id) }}" class="btn btn-warning btn-block text-ccenter" role="button">Add to Cart</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

@endsection

@section('ajax')

@endsection
