<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Product: {{ $product->name }}</h4>
        </div>
        <div class="modal-body">
            <h5>List of product</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Production Price</th>
                            <th>Sell Price</th>
                            <th>Stock</th>
                            <th>Category</th>
                            <th>Supplier</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="https://via.placeholder.com/150" alt=""></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price_production }}</td>
                            <td>{{ $product->price_sell }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->supplier->name }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
