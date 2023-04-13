<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h2 class="container fs-2 fw-bold text-warning ps-5">All Products</h2>
                <table class="table-hover table-warning table-striped text-light w-75 mx-auto my-3">
                  <tr>
                    <th class="border-1  p-3 text-light">Product Name</th>
                    <th class="border-1 p-3 text-light">Product Code</th>
                    <th class="border-1 p-3 text-light">Quantity</th>
                    <th class="border-1 p-3 text-light">Category</th>
                    <th class="border-1 p-3 text-light">Price</th>
                    <th class="border-1 p-3 text-light">Discount Price</th>
                    <th class="border-1 p-3 text-light">Product Image</th>
                  </tr>
                  
                  @foreach($product as $product)
                  <tr>
                    <td class="border-1  p-1 text-secondary">{{$product->name}}</td>
                    <td class="border-1  p-1 text-secondary">{{$product->code}}</td>
                    <td class="border-1  p-1 text-secondary">{{$product->quantity}}</td>
                    <td class="border-1  p-1 text-secondary">{{$product->category}}</td>
                    <td class="border-1  p-1 text-secondary">{{$product->price}}</td>
                    <td class="border-1  p-1 text-secondary">{{$product->discount_price}}</td>
                    <td class="border-1  p-1 text-secondary">
                      <img width="50px" src="/products/{{$product->image}}" alt="prod-img">
                      </td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>