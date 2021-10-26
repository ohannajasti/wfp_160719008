
@extends('layout.conquer')

@section('tempat_konten') 
<h3 class="page-title">
Daftar Kategori
</h3>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="{{ url('/') }}">Home</a>
      <i class="fa fa-angle-right"></i>
    </li> 
    <li>
      <a href="#">Category</a>
    </li>
  </ul>
</div>
<div class="content"> 
  <div class="portlet">
    <div class="portlet-title">
      <div class="caption">
        <i class="fa fa-cogs"></i>Data Kategori
      </div>
      <div class="tools">
        <a href="javascript:;" class="collapse"></a>
        <a href="#portlet-config" data-toggle="modal" class="config"></a>
        <a href="javascript:;" class="reload"></a>
        <a href="javascript:;" class="remove"></a>
      </div>
    </div>
    <div class="portlet-body"> 
      <table class="table table-bordered table-hover datatable-hamdi" id="table_kategori">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th> 
            <th>List Produk</th>
            <th>Report</th> 
          </tr>
        </thead>
        <tbody> 
          @foreach($data_category as $d)
          <tr>
            <td> 
                {{ $d->id }}
            </td> 
            <td> 
                {{ $d->nama_kategori }}
            </td>  
            <td> 
              <!-- hasMany -->
              @foreach($d->products as $r)
                {{ $r->nama_produk }} - Rp{{ $r->harga_jual }} <br>
              @endforeach
            </td>
            <td>
              <a href="{{ route('reportShowCake', $d->nama_kategori) }}">
                Report
              </a>              
              <a class="btn btn-info" data-toggle="modal" href="#modal_list_produk" onclick="showProducts({{ $d->id }})">
                List Produk
              </a>
            </td>
          </tr> 
          @endforeach
        </tbody>
      </table>
      <table class="table table-bordered table-hover datatable-hamdi" id="table_supplier">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th> 
            <th>List Produk</th>
            <th>Report</th> 
          </tr>
        </thead>
        <tbody> 
        </tbody>
      </table>
    </div>
  </div>  
</div> 


<div class="modal fade" id="modal_list_produk" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">
          List Produk 
        </h4>
      </div>
      <div class="modal-body" id="modal_body_list_produk">
        Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection

@section('tempat_script')
  <script> 
    $(document).ready(function () {
      $('.datatable-hamdi').DataTable();
    });
    function showProducts(id_kategori) 
    {
        $('#modal_body_list_produk').html('Sedang memuat data ....');
        $.post('{{route("category.showProducts")}}',
        {
          _token: "<?php echo csrf_token() ?>"
          , id_kategori: id_kategori
          , nama: 'bejo'
        },
        function(data){
            if(data.status == 'oke'){
              $('#modal_body_list_produk').html(data.msg);
            } else {
              $('#modal_body_list_produk').html('Gagal mengambil');
            }
        });
        /*
          $.ajax({
            type:'POST',
            url:'{{route("product.showinfo")}}',
            data:'_token=<?php echo csrf_token() ?>',
            success: function(data){
              if(data.status == 'oke'){
                $('#rumah_ajax').html(data.msg);
              } else {
                $('#rumah_ajax').html('Gagal mengambil');
              }
            }
          }); 
        */
    }
  </script>
@endsection