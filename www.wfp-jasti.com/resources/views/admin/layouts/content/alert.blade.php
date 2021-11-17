@if (session()->has('success'))
<div class="col-md-12">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{-- <p>test pop up</p> --}}
      {{session()->get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
</div>
@endif
@if (session()->has('error'))
<div class="col-md-12">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{-- <p>test pop up</p> --}}
      {{session()->get('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
</div>
@endif