@extends('layouts.conquer2')
@section('content')

        <h2>Products dengan kategori: {{$category_name}}</h2>
        <p>Data ditemukan berjumlah {{count($result)}} dari {{$getTotalData}}</p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Category ID</th>
                    <th>Supplier ID</th>
                </tr>
            </thead>
            <tbody>
                {{-- alternatif 1: compact --}}
                @foreach ($result as $d)
                    {{-- alternatif 2: data --}}
                    {{-- @foreach ($data as $d) --}}
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nama_produk }}</td>
                        <td>{{ $d->harga_produk }}</td>
                        <td>{{ $d->harga_jual }}</td>
                        <td>{{ $d->stok }}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>{{ $d->updated_at }}</td>
                        <td>{{ $d->category_id }}</td>
                        <td>{{ $d->category->nama_kategori }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="row ui-sortable" id="sortable_portlets">
            <div class="col-md-4 column sortable">
                <!-- BEGIN Portlet PORTLET-->
                <div class=" portlet portlet-sortable" style="display: block;">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-reorder"></i>Portlet
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div>
                             Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                        </div>
                    </div>
                </div>
                <!-- END Portlet PORTLET-->
                <!-- BEGIN Portlet PORTLET-->
                <div class=" portlet portlet-sortable">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-reorder"></i>Portlet
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                         Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                    </div>
                </div>
                <!-- END Portlet PORTLET-->
                <!-- BEGIN Portlet PORTLET-->
                <div class=" portlet portlet-sortable">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-reorder"></i>Portlet
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                         Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                    </div>
                </div>
                <!-- END Portlet PORTLET-->
                <div class="portlet portlet-sortable-empty">
                </div>
            </div>
        </div>
    @endsection
