<div class="card-body">
          <div class="card-header">Administrators:</div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Categorie</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($products) >= 1 ) 
                    @foreach ($products as $product)
        
                           <tr>
                            <td>{{ $product->id}} </td>
                               <td><img src="{{URL::to('img/portfolio/thumbnails')}}/{{$product->image}}" height="40" width="100" class="profile-pic" ></td>
                            <td>{{ $product->name}} </td>
                            <td>{{ $product->categorie}} </td>
                            <td>{{ $product->amount}} </td>
                            
                            <td><button onclick="productRem('{{$product->id}}')" class="btn btn-warning btn sweet-success-cancel">Remove</button>
                            <button onclick="" class="btn btn-success ">Edit</button></td>
                         </tr>
        
                    @endforeach
                @else
                <h1> No products available.</h1>
                @endif
            </tbody>
        </table>
    </div>
</div>