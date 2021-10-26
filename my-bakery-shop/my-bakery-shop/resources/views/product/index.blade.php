
@extends('layout.conquer')

@section('tempat_konten')
<h3 class="page-title">
Daftar Products
</h3>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="{{ url('/') }}">Home</a>
      <i class="fa fa-angle-right"></i>
    </li> 
    <li>
      <a href="#">Products</a>
    </li>
  </ul>
</div>
<div class="content"> 
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-cogs"></i>Simple Table
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse"></a>
              <a href="#portlet-config" data-toggle="modal" class="config"></a>
              <a href="javascript:;" class="reload"></a>
              <a href="javascript:;" class="remove"></a>
            </div>
          </div>
          <div class="portlet-body">
            <p> 
              Menampilkan {!! count($data_product) !!} dari {{ $jumlah_produk }}
              <br>
              Harga Tertinggi = {{ number_format($harga_tertinggi) }}
              <br>
              Harga Rata-rata = {{ number_format($harga_rerata) }}
            </p>   
            <h2>Data Produk</h2>            
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Stok</th>
                  <th>harga</th>
                  <th>kategori</th>
                  <th>detail</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($data_product as $d)
                <tr>
                  <td> 
                      {{ $d->id }}
                  </td> 
                  <td> 
                      {{ $d->nama_produk }}
                  </td> 
                  <td> 
                      {{ $d->stok }}
                  </td> 
                  <td align="right"> 
                      Rp{{ number_format($d->harga_jual,0) }}
                  </td> 
                  <td> 
                      <!-- setting dulu di model, agar bisa category->nama_kategori --> 
                      {{ $d->category->nama_kategori }}
                  </td>  
                  <td>
                    <a href="{{ route('products.show', $d->id) }}" target="_blank">
                      Detail
                    </a>
                    <br>
                    <a class="btn btn-info" data-toggle="modal" href="#modal_foto_product_{{ $d->id }}">
                      Detail Modal Internal
                    </a>
                    <a class="btn btn-default" href="{{ route('products.show', $d->id) }}" data-target="#modal_foto_product_eksternal_{{ $d->id }}" data-toggle="modal">
                      Detail Modal External  
                    </a>
                  </td>
                </tr> 
                <div class="modal fade" id="modal_foto_product_eksternal_{{ $d->id }}" tabindex="-1" role="basic" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      loading... 
                      sedang memuat data ...
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="modal_foto_product_{{ $d->id }}" tabindex="-1" role="basic" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">
                          Foto Produk {{ $d->nama_produk }}
                        </h4>
                      </div>
                      <div class="modal-body">
                        <img src="{{ asset('images/'.$d->image) }}" style="width: 200px;"> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                @endforeach
              </tbody>
            </table>
            
            <h2>Produk dengan harga diatas rata2</h2>               
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Stok</th>
                  <th>harga</th>
                  <th>kategori</th>
                  <th>Link</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($data_product_diatasrata as $d)
                <tr>
                  <td> 
                      {{ $d->id }}
                  </td> 
                  <td> 
                      {{ $d->nama_produk }}
                  </td> 
                  <td> 
                      {{ $d->stok }}
                  </td> 
                  <td align="right"> 
                      Rp{{ number_format($d->harga_jual,0) }}
                  </td> 
                  <td> 
                      <!-- setting dulu di model, agar bisa category->nama_kategori --> 
                      {{ $d->category->nama_kategori }}
                  </td>  
                  <td>
                    <a href="{{ url('products/'.$d->id) }}" target="_blank">
                      Detail
                    </a>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>   
          </div>
        </div> 
      </div>
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-cogs"></i>Simple Table
            </div>
            <div class="tools">
              <a href="javascript:;" class="collapse"></a>
              <a href="#portlet-config" data-toggle="modal" class="config"></a>
              <a href="javascript:;" class="reload"></a>
              <a href="javascript:;" class="remove"></a>
            </div>
          </div>
          <div class="portlet-body"> 
            <?php 
                $namafoto = "puding.jpg";
            ?>
            <div class="row" style="padding: 50px">
                @foreach($data_product as $d)
                <div class="col-md-4" style="min-height: 200px;text-align: center;border: 1px solid grey">
                    {{ $d->nama_produk }} Rp{{ number_format($d->harga_jual,0) }}
                    <br>
                    <img src="{{ asset('images/'.$d->image) }}" style="width: 200px;">
                </div>
                @endforeach 
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection