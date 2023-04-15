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
                @if (session()->has('message'))
                    <div class="w-25 alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aira-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <h2 class="container fs-2 fw-bold text-warning ps-5">All Products</h2>
                <table class="table-hover text-light w-75 mx-auto my-3">
                    <tr>
                        <th class="border-2  p-3 text-warning">Product Name</th>
                        <th class="border-2 p-3 text-warning">Product Code</th>
                        <th class="border-2 p-3 text-warning">Quantity</th>
                        <th class="border-2 p-3 text-warning">Category</th>
                        <th class="border-2 p-3 text-warning">Price</th>
                        <th class="border-2 p-3 text-warning">Discount Price</th>
                        <th class="border-2 p-3 text-warning">Image</th>
                        <th colspan="2" class="border-2 p-3 text-warning">Action</th>
                    </tr>

                    @foreach ($product as $product)
                        <tr>
                            <td class="border-1  p-1 text-secondary">{{ $product->name }}</td>
                            <td class="border-1  p-1 text-secondary">{{ $product->code }}</td>
                            <td class="border-1  p-1 text-secondary">{{ $product->quantity }}</td>
                            <td class="border-1  p-1 text-secondary">{{ $product->category }}</td>
                            <td class="border-1  p-1 text-secondary">{{ $product->price }}</td>
                            <td class="border-1  p-1 text-secondary">{{ $product->discount_price }}</td>
                            <td class="border-1  p-1 text-secondary">
                                <img width="50px" src="/products/{{ $product->image }}" alt="prod-img">
                            </td>
                            <td class="border-1  p-1 text-secondary">
                                <a class="btn btn-danger"
                                    onclick="return confirm(`Are you sure you wantto delete '{{ $product->name }}' from products?`)"
                                    href="{{ url('delete_product', $product->id) }}">Delete</a>
                            </td>
                            <td class="border-1  p-1 text-secondary">
                                <a class="btn btn-info" href="{{ url('update_product', $product->id) }}">Edit</a>
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
