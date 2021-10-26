@extends('layouts.conquer2')
@section('content')
    <h2>Supplier table</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Supplier</th>
            </tr>
        </thead>
        <tbody>
            {{-- alternatif 1: compact --}}
            @foreach ($queryBuilder as $d)
                {{-- alternatif 2: data --}}
                {{-- @foreach ($data as $d) --}}
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->nama }}</td>
                    {{-- <td>{{ $d->address }}</td> --}}
                    <td>
                        <a class="btn btn-default" href="{{ route('supplier.show', $d->id) }}" data-target="#mymodal"
                            data-toogle="modal">Show</a>
                        <a class="btn btn-default" href="#basic" data-target="#mymodal" data-toogle="modal"
                            onclick="getDetailData({{ $d->id }});">Show w/ AJAX</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Informasi Rinci untuk anda</h3>
            <a class='btn btn-default' href="#" onclick="showInfo()">Lihat Rincian Pesan</a>
        </div>

        <div id="showInfo" class="panel-body">Panel Content</div>
    </div>
    {{-- </div> --}}

@section('modal')
    <div class="modal fade in" id="basic" tabindex="-1" role="basic" aria-hidden="false" style="display: block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Modal Title</h4>
                </div>
                <div class="modal-body" id=>
                    {{-- hasil ajax akan muncul di sini --}}
                    Modal body goes here
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection

@section('footerjs')
    <script>
        function showInfo() {
            alert('masuk');
            $.ajax({
                type: 'POST',
                URL: '{{ route('supplier.showInfo') }}',
                data: '_token = <?php echo csrf_token(); ?>', //wajib ada
                success: function(data) {
                    alert(data.status);
                    $('#showInfo').html(data.msg);
                }
            });
        }

        function getDetailData(id) {
            alert('masuk');
            $.ajax({
                type: 'POST',
                URL: '{{ route('supplier.showAjax') }}',
                data: '_token = <?php echo csrf_token(); ?>', //wajib ada
                success: function(data) {
                    alert(data.status);
                    $('#showInfo').html(data.msg);
                }
            });
        }
    </script>
@endsection
