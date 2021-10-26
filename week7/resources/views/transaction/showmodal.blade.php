<div class="portlet">
    <div class="portlet-title">
        <p>Tampilan Transaksi dari:{{$transaction->id}} - {{$transaction->transaction_date}}</p>
    </div>
    <div class="portlet-body">
        <div class="row">
            @foreach ($products as $product){
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="" alt="">
                        <div class="caption">
                            <p style="text-align: center"><b>{{$product->nama_produk}}</b></p>
                            <hr>
                            <p>Kategori: {{$product->category->nama_kategori}}</p>
                            <p>Harga: {{$product->harga_jual}}</p>
                            <p>Jumlah Beli: {{$product->pivot->quantity}}</p>
                        </div>
                    </div>
                </div>
            
                
            @endforeach
        </div>
    </div>
</div>