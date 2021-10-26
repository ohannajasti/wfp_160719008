
@extends('layout.conquer')

@section('tempat_konten') 
<h3 class="page-title">
Showcake
</h3>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="{{ url('/') }}">Home</a>
      <i class="fa fa-angle-right"></i>
    </li> 
    <li>
      <a href="#">Showcake</a>
    </li>
  </ul>
</div>
<div class="content">
  <h2>Produk dengan kategori {{ $nama_kategori }}</h2>
  <p>
      Data ditemukan {{ sizeof($report_kategori->products) }} dari {{ $jml_produk_all }} data
  </p>            
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th> 
        <th>Harga</th>
      </tr>
    </thead>
    <tbody> 
      @foreach($report_kategori->products as $d)
      <tr>
        <td> 
            {{ $d->id }}
        </td> 
        <td> 
            {{ $d->nama_produk }}
        </td>  
        <td> 
          <!-- hasMany -->
          {{ $d->harga_jual }}
        </td>
      </tr> 
      @endforeach
    </tbody>
  </table>
</div> 
@endsection