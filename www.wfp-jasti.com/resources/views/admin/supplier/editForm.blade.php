<div class="modal-dialog modal-dialog-centerd">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Edit Supplier</h4>
        </div>
        <div class="modal-body" id="msgCreateForm">
            <form role="form" method="post" action="{{route('supplier.update',$supplier->id)}}" >
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value='{{ old('name') ?? $supplier->name }}'
                        placeholder="Enter Name Supplier">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Supplier Address" rows='3'>{{ old('address') ?? $supplier->address }}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>
        </div>
        
    </div>
</div>