<div class='row'>
    @foreach($detail_transaksi->product as $d)
            <div class='col-md-4' style='border:1px solid #eee;text-align:center; height: 200px'> 
                <img src="{{ asset('images/'.$d->image) }}" style="width: 100%;"><br>
                {{ $d->nama_produk }} <br>
                Kategori = <b>{{ $d->category->nama_kategori }}</b><br>
                Jumlah = <b>{{ $d->pivot->quantity }}</b><br>
                Harga = <b>{{ $d->pivot->harga_produk}}</b><br>
                Harga sekarang = {{ $d->harga_jual }}
            </div>
    @endforeach
</div>
