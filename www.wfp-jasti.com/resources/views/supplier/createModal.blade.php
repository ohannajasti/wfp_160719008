<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Create Supplier</h4>
        </div>
        <div class="modal-body" id="msgCreateForm">
            <form action="{{ route('supplier.create') }}" method="post">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info">Save changes</button>
        </div>
    </div>
</div>