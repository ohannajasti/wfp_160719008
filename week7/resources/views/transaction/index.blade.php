@extends('layouts.conquer2')
@section('content')
        <h2>Transaction table</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pembeli</th>
                    <th>Kasir</th>
                    <th>Tanggal Transaksi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- alternatif 1: compact --}}
                @foreach ($transactions as $transaction)
                    {{-- alternatif 2: data --}}
                    {{-- @foreach ($data as $transaction) --}}
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->customer->nama }}</td>
                        <td>{{ $transaction->user->name }}</td>
                        <td>{{ $transaction->transaction_date }}</td>
                        <td>
                        <a class="btn btn-default" href="#modalDetailTransaction" data-toogle="modal"
                            onclick="getDetailData({{ $transaction->id }});">Show w/ AJAX</a></td>
                        {{-- <td>{{ $transaction->harga_jual }}</td>
                        <td>{{ $transaction->stok }}</td>
                        <td>{{ $transaction->created_at }}</td>
                        <td>{{ $transaction->updated_at }}</td>
                        <td>{{ $transaction->category_id }}</td>
                        <td>{{ $transaction->supplier_id }}</td> --}}
                    </tr>
                @endforeach

            </tbody>
        </table>

        
       

    <script>
        function getDetailData(id){
            $.ajax({
                type:'POST',
                url:'{{route('transaction.showAjax')}}',
                data:"_token = <?php echo csrf_token() ?> &id="+id,
                success:function(data){
                    $('#msg').html(data.msg)
                } 
            })
        }
    </script>
    @endsection
    @section('modal')
    <div class="modal fade in" id="modalDetailTransaction" tabindex="-1" role="basic" aria-hidden="false" style="display: block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Transaction</h4>
                </div>
                <div class="modal-body" id='msg'>
                    {{-- hasil ajax akan muncul di sini --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">OK</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endsection