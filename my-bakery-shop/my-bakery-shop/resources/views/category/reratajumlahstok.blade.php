
@extends('layout.conquer')

@section('tempat_konten') 
<h3 class="page-title">
Rekap Rata-rata Stok Per Supplier
</h3>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="{{ url('/') }}">Home</a>
      <i class="fa fa-angle-right"></i>
    </li> 
    <li>
      <a href="#">Rata-rata Stok Per Supplier</a>
    </li>
  </ul>
</div>
<div class="content"> 
  <p> 
  </p>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th> 
        <th>Rata-rata Stok</th>
      </tr>
    </thead>
    <tbody> 
      @foreach($data_rerata as $d)
      <tr>
        <td> 
            {{ $d->id }}
        </td> 
        <td> 
            {{ $d->name }}
        </td>  
        <td>
            @if(!empty($d->rerata))
                {{ $d->rerata }}
            @else 
                0
            @endif
        </td>
      </tr> 
      @endforeach
    </tbody>
  </table>
</div> 
@endsection