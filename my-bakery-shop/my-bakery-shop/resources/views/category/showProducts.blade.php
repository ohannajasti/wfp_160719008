<div class='row'>
    @foreach($data->products as $d)
        <div class='col-md-4' style='border:1px solid #eee;text-align:center'> 
        <img src="{{ asset('images/'.$d->image) }}" height='200px' /></a> <br>
        {{ $d->nama_produk }} <br>
        Rp. {{ $d->harga_jual }}
        </div>
    @endforeach
</div>
