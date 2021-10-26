<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
  <h4 class="modal-title">
  Detail Produk {{ $product->nama_produk }}
  </h4>
</div>
<div class="modal-body">
  <img src="{{ asset('images/'.$product->image) }}" style="max-width: 400px;">
  <hr>
  Nama = {{ $product->nama_produk }}
  <br>
  Harga = {{ $product->harga_jual }}
  <table border="1" style="width: 70%;">
    <tr>
      <th>Data</th>
      <th>Hasil</th>
    </tr>
    <tr>
      <td>ID</td>
      <td>{{ $product->id }}</td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>{{ $product->nama_produk }}</td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>{{ number_format($product->harga_jual,0) }}</td>
    </tr>
    <tr>
      <td>Category</td>
      <td>{{ $product->category->nama_kategori }}</td>
    </tr>
  </table>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>