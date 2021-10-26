

@extends('layout.conquer')

<!-- section menempel pada yield -->
@section('tempat_script')
  <script> 
    function showinfo() 
    {
        $('#rumah_ajax').html('Sedang memuat data ....');
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
        $.post('{{route("product.showinfo")}}',
        {
          _token: "<?php echo csrf_token() ?>"
          , city: "Duckburg"
        },
        function(data){
            if(data.status == 'oke'){
              $('#rumah_ajax').html(data.msg);
            } else {
              $('#rumah_ajax').html('Gagal mengambil');
            }
        });
    }
  </script>
@endsection

@section('tempat_konten') 
<h3 class="page-title">
Welcome
</h3>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="{{ url('/') }}">Home</a>
      <i class="fa fa-angle-right"></i>
    </li> 
    <li>
      <a href="#" onclick="showinfo();">
          Welcome 
          <span aria-hidden="true" class="icon-bulb"></span>
      </a>
    </li>
  </ul>
</div>
<div class="content">
    <div id="rumah_ajax">
      ini kontennya nanti akan tertumpuk oleh ajax
    </div>
    <hr>
    <hr>
    <div class="title m-b-md">
        Selamat Datang Di {{ env('APP_NAME') }}
        <br>
        <a class="btn btn-success" data-toggle="modal" href="#disclaimer">
          Disclaimer
        </a>
    </div>

    <div class="links">
        <a href="{{ url('menu') }}">Menu</a>
    </div>
    <div class="links">
        <a href="{{ url('categories') }}">Categories</a>
    </div>
    <div class="links">
        <a href="{{ url('products') }}">Products</a>
    </div>
    <div class="links">
        <a href="{{ route('rerataharga') }}">Report Rerataharga</a>
    </div>
    <div class="links">
        <a href="{{ route('rerataharga') }}">Report Jumlah Stok per Kategori</a>
    </div>
</div>

<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Disclaimer</h4>
      </div>
      <div class="modal-body">
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
<!-- /.modal -->
@endsection

@section('testingsidebar')
    ini konten sidebar
@endsection