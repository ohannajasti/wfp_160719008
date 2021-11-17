@php
$titlePage = 'supplier';
@endphp

@extends('admin.layouts.app', ['activePage' => 'supplier', 'titlePage' => $titlePage])

@section('content')
    <div class="page-content">
        {{-- Breadcrump --}}
        @include("admin.layouts.content.header", ["breadcrump_items"=>["Master
        Data","supplier"],"breadcrump_href"=>['','supplier.index']])
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>

        @endif
        <div style="text-align:right">
            <a href="#modalCreateSupplier" type="button" class="btn btn-sm btn-primary float-right mr-4" data-toggle="modal">
                <span class="material-icons">+ New Supplier with Ajax & Modals</span>
                <a href="{{ route('supplier.create') }}" type="button" class="btn btn-sm btn-success float-right mr-4">
                    <span class="material-icons">+ New Supplier</span>
                </a>
        </div>

        {{-- table --}}
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
                    @foreach ($suppliers as $supplier)
                        <tr id="tr_id_{{ $supplier->id }}">
                            <td id="td_id_{{ $supplier->id }}">{{ $supplier->id }}</td>
                            <td id="td_name_{{ $supplier->id }}">{{ $supplier->name }}</td>
                            <td id="td_action_{{ $supplier->id }}">
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modalSupplier"
                                    onclick="getDetailData({{ $supplier->id }})" role="button">Show
                                    Ajax</a>
                                <a class="btn btn-primary" href="{{ route('supplier.edit', $supplier->id) }}"
                                    role="button">Edit</a>
                                <a class="btn btn-primary" href="#modalEditSupplier"
                                    onclick="getEditData({{ $supplier->id }})" role="button" data-toggle="modal">Edit
                                    A</a>
                                <a class="btn btn-primary" href="#modalEditSupplier"
                                    onclick="getEditData2({{ $supplier->id }})" role="button" data-toggle="modal">Edit
                                    B</a>
                                <form role="form" method="post" action="{{ route('supplier.destroy', $supplier->id) }}"
                                    style='display:inline'>
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value='Delete'
                                        onclick="if(!confirm('Are you sure you want to delete this data?')) {return false;}">
                                </form>
                                <a class="btn btn-danger" type="button"
                                    onclick="if(confirm('Are you sure you want to delete this data?')) {deleteDataRemoveTR({{ $supplier->id }})}">Delete
                                    2</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

    {{-- Start of Modal Create Supplier --}}
    <div class="modal fade" id="modalCreateSupplier" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centerd">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Create Supplier</h4>
                </div>
                <div class="modal-body" id="msgCreateForm">
                    <form action="{{ route('supplier.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                                placeholder="Enter Name Supplier">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" id="address" name="address"
                                placeholder="Enter Supplier Address" rows='3'></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Modal Create Supplier --}}

    {{-- Start of Modal Edit Supplier --}}
    <div class="modal fade" id="modalEditSupplier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <!-- /.modal-dialog -->
    </div>
    {{-- End of Modal Edit Supplier --}}

    {{-- Start of Modal Show More Supplier --}}
    <div class="modal fade" id="modalSupplier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <!-- /.modal-dialog -->
    </div>
    {{-- End of Modal Show More Supplier --}}
@endsection

@section('ajax')
    <script>
        function getDetailData(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('supplier.showAjax') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id,
                },
                success: function(data) {
                    $("#modalSupplier").html(data.msg);
                }
            });
        }

        function getEditData(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('supplier.editForm') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id,
                },
                success: function(data) {
                    $("#modalEditSupplier").html(data.msg);
                }
            });
        }

        function getEditData2(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('supplier.editForm2') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id,
                },
                success: function(data) {
                    $("#modalEditSupplier").html(data.msg);
                }
            });
        }

        function saveDataUpdate(id) {
            var eName = $('#eName').val();
            var eAddress = $('#eAddress').val();
            $.ajax({
                type: 'POST',
                url: "{{ route('supplier.saveData') }}",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id,
                    'name': eName,
                    'address': eAddress
                },
                success: function(data) {
                    if (data.status == 'ok') {
                        alert(data.msg);
                        $('#td_name_' + id).html(eName);
                        $('#td_address_' + id).html(eAddress);
                    }
                }
            });
        }

        function deleteDataRemoveTR(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('supplier.deleteData') }}",
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
