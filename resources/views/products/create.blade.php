<div class="modal fade" id="create-add-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="products" method="POST" id="create-product-form">
        @csrf
        <ul class="errors alert alert-danger" style="display: none; margin: 10px"></ul>
      <div class="modal-body">
          <div class="form-group">
            <label for="product-name">Product Name:</label>
            <input type="text" class="form-control" id="product-name" placeholder="Enter Product Name" name="name">
          </div>
          <div class="row" style="margin-bottom: 10px">
            <div class="col">
              <input type="text" class="form-control" placeholder="Enter Quantity" name="quantity">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Enter Unit" name="unit">
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>