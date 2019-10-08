<div class="modal fade" id="edit-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit {{$product->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="products" method="POST" id="edit-product-form" data-target="{{$product->id}}">
        @csrf
        @method('PATCH')
      <div class="modal-body">
          <div class="form-group">
            <label for="product-name">Product Name:</label>
            <input type="text" class="form-control" id="product-name" value="{{$product->name}}" name="name">
          </div>
          <div class="row" style="margin-bottom: 10px">
            <div class="col">
              <input type="text" class="form-control" value="{{$product->quantity}}" name="quantity">
            </div>
            <div class="col">
              <input type="text" class="form-control" value="{{$product->Unit}}" name="unit">
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="price" value="{{$product->price}}" name="price">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Update</button>
        </form>
        <form action="" method="POST" id="delete-product-form">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" id="delete-product-btn" data-target='{{$product->id}}'>Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>