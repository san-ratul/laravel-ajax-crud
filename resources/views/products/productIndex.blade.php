<div class="card" style="margin-top: 50px">
  <div class="card-header">
    Product List
    <button class="btn btn-primary float-right add-product-btn">+</button>
  </div>
  <div class="card-body">
    @if($products->all())
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Name</th>
		      <th scope="col">Quantity</th>
		      <th scope="col">Price</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($products as $product)
		    <tr>
		      <th>{{$product->id}}</th>
		      <td>{{$product->name}}</td>
		      <td>{{$product->quantity}} {{$product->Unit}}</td>
		      <td>{{$product->price}} Taka/{{$product->Unit}} </td>
		      <td>
		      	<button class="btn btn-primary action" data-target="{{$product->id}}">Action</button>
		      </td>
		    </tr>
		    @endforeach
		    </tbody>
		</table>
    @else
    	<div class="alert alert-danger">No Products in Database!</div>
    @endif
  </div>
  <div class="card-footer">
  	<p class="text-center">Copyright SAN Ratul &copy; 2019</p>
  </div>
</div>