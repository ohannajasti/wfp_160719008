@php
$titlePage = 'Product';
@endphp

@extends('admin.layouts.app', ['activePage' => 'product', 'titlePage' => $titlePage])

@section('content')
    <div class="page-content">
        {{-- Breadcrump --}}
        @include("admin.layouts.content.header", ["breadcrump_items"=>["Master
        Data","Product"],"breadcrump_href"=>['','product.index']])

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div style="text-align:right">
            <a href="{{ route('product.create') }}" type="button" class="btn btn-sm btn-success float-right mr-4">
                <span class="material-icons">Add Product</span>
            </a>
            <a href="#modalCreateProduct" type="button" class="btn btn-sm btn-success float-right mr-4" data-toggle="modal"
                data-target="#modalCreateProduct">
                <span class="material-icons">Add Product with Modal</span>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Production Price</th>
                        <th>Sell Price</th>
                        <th>Stock</th>
                        <th>Category</th>
                        <th>Supplier</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr id="tr_id_{{$product->id}}">
                            <td id="td_id_{{$product->id}}">{{ $product->id }}</td>
                            <td ><img src="https://via.placeholder.com/150" alt=""></td>
                            <td class="editable" id="td_name_{{$product->id}}">{{ $product->name }}</td>
                            <td class="editable" id="td_price_production_{{$product->id}}">{{ $product->price_production }}</td>
                            <td class="editable" id="td_price_sell_{{$product->id}}">{{ $product->price_sell }}</td>
                            <td class="editable" id="td_stock_{{$product->id}}">{{ $product->stock }}</td>
                            <td id="td_category_id_{{$product->category->id}}" >{{ $product->category->name }}</td>
                            <td d="td_supplier_id_{{$product->supplier->id}}">{{ $product->supplier->name }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('product.show', $product->id) }}"
                                    role="button">Read More</a>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modalShowMoreProduct"
                                    onclick="getDetailData({{ $product->id }})" role="button">Read More with Model</a>
                                <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}"
                                    role="button">Edit</a>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modalEditProduct"
                                    role="button" onclick="getEditDataA({{$product->id}})">Edit A</a>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modalEditProduct"
                                    role="button" onclick="getEditDataB({{$product->id}})">Edit B</a>
                                <a class="btn btn-danger" href="{{ route('product.destroy', $product->id) }}"
                                    role="button">Delete</a>
                                <a class="btn btn-danger"
                                    role="button" onclick="if(confirm('Are you sure you want to delete this data?')) {deleteDataRemoveTR({{ $product->id }})}">Delete 2</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="text-align: center">

                {{ $products->links() }}
            </div>
        </div>
    </div>
    {{-- Start of Modal Create Product --}}
    <div class="modal fade" id="modalCreateProduct" tabindex="-1" role="dialog" aria-labelledby="modalCreateProduct"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Create Product</h4>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <form role="form" method="post" action="{{ route('product.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                                    placeholder="Enter Name Product">
                            </div>
                            <div class="form-group">
                                <label for="price_production">Production Price</label>
                                <input type="number" class="form-control" id="price_production" name="price_production"
                                    aria-describedby="price_production" placeholder="Enter Production Price">
                            </div>
                            <div class="form-group">
                                <label for="price_sell">Sell Price</label>
                                <input type="number" class="form-control" id="price_sell" name="price_sell"
                                    aria-describedby="price_sell" placeholder="Enter Sell Price">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock"
                                    placeholder="Enter Stock Quantity">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                <select name="category_id" class="form-control dropdown" data-style="btn btn-link"
                                    id="exampleFormControlSelect1">
                                    <option selected disabled>- Select Category -</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="supplier_id">Supplier</label>
                                <select name="supplier_id" class="form-control dropdown" data-style="btn btn-link"
                                    id="exampleFormControlSelect1">
                                    <option selected disabled>- Select Supplier -</option>
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">
                                            {{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Modal Create Product --}}

    {{-- Start of Modal Show More Supplier --}}
    <div class="modal fade" id="modalShowMoreProduct" tabindex="-1" role="dialog" aria-labelledby="modalShowMoreProduct"
        aria-hidden="true">
        <!-- /.modal-dialog -->
    </div>
    {{-- End of Modal Show More Supplier --}}

    {{-- Start of Modal Edit Supplier --}}
    <div class="modal fade" id="modalEditProduct" tabindex="-1" role="dialog" aria-labelledby="modalEditProduct"
        aria-hidden="true">
        <!-- /.modal-dialog -->
    </div>
    {{-- End of Modal Edit Supplier --}}
@endsection

@section('initialscript')
<script>
$('.editable').editable({
    closeOnEnter:true,
    callback:function(data){
        if(data.content){
            var s_id = data.$el[0].id
            var fname = s_id.split('_')[1]
            var id =s_id
            alert(data.content)
        }
    }
});
</script>
@endsection

@section('ajax')
    <script>
        function getDetailData(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('product.showMoreProduct') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id,
                },
                success: function(data) {
                    $("#modalShowMoreProduct").html(data.msg);
                }
            });
        }

        function getEditDataA(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('product.editModalProductA') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id,
                },
                success: function(data) {
                    $("#modalEditProduct").html(data.msg);
                }
            });
        }

        function getEditDataB(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('product.editModalProductB') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id,
                },
                success: function(data) {
                    $("#modalEditProduct").html(data.msg);
                }
            });
        }

        function updateData(id) {
            var eName = $('#eName').val();
            var ePrice_sell = $('#ePrice_sell').val();
            var ePrice_production = $('#ePrice_production').val();
            var eStock = $('#eStock').val();
            var eCategory_id = $('#eCategory_id').find(":selected").val();
            var eSupplier_id = $('#eSupplier_id').find(":selected").val();
            $.ajax({
                type: 'POST',
                url: "{{ route('product.updateData') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id,
                    'name': eName,
                    'price_sell': ePrice_sell,
                    'price_production':ePrice_production,
                    'stock':eStock,
                    'category_id':eCategory_id,
                    'supplier_id':eSupplier_id
                },
                success: function(data) {
                    if (data.status == 'ok') {
                        alert(data.msg);
                        $('#td_name_' + id).html(eName);
                        $('#td_price_sell_' + id).html(ePrice_sell);
                        $('#td_price_production_' + id).html(ePrice_production);
                        $('#td_stock_' + id).html(eStock);
                        $("#td_category_id_" + id).html(eCategory_id);
                        $("td_supplier_id_").html(eSupplier_id);
                    }
                }
            });
        }

        function deleteDataRemoveTR(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('product.deleteData') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id
                },
                success: function(data) {
                    if (data.status == 'ok') {
                        alert(data.msg);
                        $('#tr_id_' + id).remove();
                    } else {
                        alert(data.msg);
                    }
                }
            });
        }

    </script>
@endsection
