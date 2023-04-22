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
                <div class="card p-2">
                    <h2 class="container fs-2 fw-bold text-warning ps-5 text-center py-3">All Products</h2>
                    <div class="mx-auto text-center">
                        <form action="{{ url('/val_search') }}" method="POST">
                            @csrf
                            <input class="text-dark" type="text" name="search" placeholder="Search">
                            <input type="submit" value="search" class="btn btn-warning">
                        </form>
                    </div>
                    <table class="table table-bordered table-dark table-hover w-100 mx-auto my-3">
                        <tr>
                            <th class="text-warning " scope="col">Product Name</th>
                            <th class="text-warning " scope="col">Product Code</th>
                            <th class="text-warning " scope="col">Quantity</th>
                            <th class="text-warning " scope="col">Category</th>
                            <th class="text-warning " scope="col">Price</th>
                            <th class="text-warning " scope="col">Discount Price</th>
                            <th class="text-warning " scope="col">Image</th>
                            <th colspan="2" class="text-warning " scope="col">Action</th>
                        </tr>

                        @foreach ($product as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->discount_price }}</td>
                                <td>
                                    <img width="50px" src="{{ asset('public/products') . '/' . $product->image }}"
                                        alt="prod-img">
                                </td>
                                <td>
                                    <a class="btn btn-danger"
                                        onclick="return confirm(`Are you sure you wantto delete '{{ $product->name }}' from products?`)"
                                        href="{{ url('delete_product', $product->id) }}">Delete</a>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ url('update_product', $product->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
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
