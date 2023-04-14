<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        label {
            display: inline-block;
            width:200px;
        }
    </style>
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
          @if(session()->has('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aira-hidden="true">x</button>
                {{session()->get('message')}}
              </div>
            @endif
            <div class="pt-5 ">
                <h2 class=" w-50 mx-auto fw-bold fs-2">Add Products</h2>
                <hr class="w-50 mx-auto border-warning border border-2">
                <div class=" mx-auto pt-3 w-50">
                    <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                <div class="py-2">
                    <label for="">Product Name :</label>
                    <input class="text-dark" type="text" name="name" placeholder="product name" required value="{{$product->name}}">
                </div>
                <div class="py-2">
                    <label for="">Product Code :</label>
                    <input class="text-dark" type="text"  name="code" placeholder="product code" required value="{{$product->code}}">
                </div>
                <div class="py-2">
                    <label for="">Product Code :</label>
                    <input class="text-dark" type="text"  name="code" placeholder="product code" required value="{{$product->status}}">
                </div>
                <div class="py-2">
                    <label for="">Current Product Image :</label>
                    <img class="mx-auto" width="100px" src="/products/{{$product->image}}">
                </div>
                <div class="py-2">
                    <label for="">Change Product Image :</label>
                    <input class="text-warning" type="file" name="image" placeholder="product image" value="">
                </div>
                <div class="py-2">
                    <label for="">Product Category :</label>
                    <select name="category" id="" class="text-dark">
                        <option class="text-dark" value="{{$product->category}}" selected>{{$product->category}}</option>
                        @foreach($category as $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="py-2">
                    <label for="">Product Quantity :</label>
                    <input class="text-dark" min="0" type="number" name="quantity" placeholder="product quantity" required value="{{$product->quantity}}">
                </div>
                <div class="py-2">
                    <label for="">Product Price :</label>
                    <input class="text-dark" type="number" name="price" placeholder="product price" required value="{{$product->price}}">
                <div class="py-2">
                    <label for="">Product Discount :</label>
                    <input class="text-dark" type="number" name="dis_price" placeholder="product discount" value="{{$product->discount_price}}">
                </div>
                <div>
                <input type="submit" value="Update Product" class="btn btn-warning w-50 p-2 ms-5 my-3 fs-5">
                </div>
                </form>
                </div>
            </div>
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