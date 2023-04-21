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
                <h1 class="fs-2 fw-bold text-warning text-center py-3">Orders</h1>
                <div class="mx-auto text-center">
                    <form action="{{ url('search') }}" method="get">
                        @csrf
                        <input class="text-dark" type="text" name="search" placeholder="Search">
                        <input type="submit" value="search" class="btn btn-warning">
                    </form>
                </div>
                <table class="table table-bordered table-dark table-hover w-100 mx-auto my-3">
                    <thead>
                        <tr>
                            <th class="text-warning " scope="col">Name</th>
                            <th class="text-warning " scope="col">Email</th>
                            <th class="text-warning " scope="col">Product Name</th>
                            <th class="text-warning " scope="col">Image</th>
                            <th class="text-warning " scope="col">Quantity</th>
                            <th class="text-warning " scope="col">Price</th>
                            <th class="text-warning " scope="col">Payment Status</th>
                            <th class="text-warning " scope="col">Delivery Status</th>
                            <th class="text-warning " scope="col">Delivered</th>
                            <th class="text-warning " scope="col">Send Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($order as $order)
                            <tr
                                class="<?php if ($order->delivery_status == 'Delivered'){ ?> table-active
                                <?php   } ?>">
                                <th scope="row">{{ $order->name }}</th>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->product_name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <img width="100px" src="{{ asset('public/products/') . '/' . $order->image }}"
                                            alt="">
                                    </div>
                                </td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->paymanet_status }}</td>
                                <td>{{ $order->delivery_status }}</td>
                                <td>
                                    <div>
                                        <a onclick="return confirm('Are you sure that {{ $order->product_name }} has been delivered?')"
                                            href="{{ url('delivered', $order->id) }}"
                                            class="btn btn-success <?php if ($order->delivery_status == 'Delivered'){ ?> disabled
                                                <?php   } ?>">Delivered</a>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="{{ url('send_email', $order->id) }}" class="btn btn-success">Send
                                            Email</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <div>
                                <td colspan="10">
                                    <div class="text-center">NO DATA FOUND</div>
                                </td>

                            </div>
                        @endforelse
                    </tbody>

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
