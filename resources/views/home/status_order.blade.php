<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.links')
</head>

<body>
    @include('home.header')
    <main>
        <section>
            <div class="container">
                <div class="my-5">
                    <h2 class="fs-2 fw-bold text-warning text-center">ORDER STATUS</h2>
                    <hr class="w-25 mx-auto">
                </div>
                <table class="table table-bordered table-light table-hover w-100 mx-auto my-3 shadow mb-5">
                    <thead>
                        <tr>
                            <th class="fs-4 text-muted">Product Name</th>
                            <th class="fs-4 text-muted">Price</th>
                            <th class="fs-4 text-muted">Image</th>
                            <th class="fs-4 text-muted">Payment Status</th>
                            <th class="fs-4 text-muted">Delivery Status</th>
                            <th class="fs-4 text-muted">Purchase Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $o)
                            <tr
                                class="<?php if ($o->delivery_status == 'Delivered'){ ?> table-success
                                <?php   } ?>">

                                <td>
                                    <div class="d-flex align-items-center">{{ $o->product_name }}
                                    </div>
                                </td>
                                <td>₱{{ $o->price }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <img width="50px" src="{{ asset('public/products/') . '/' . $o->image }}"
                                            alt="{{ $o->product_name }}">
                                    </div>
                                </td>
                                <td>{{ $o->paymanet_status }}</td>
                                <td>{{ $o->delivery_status }}</td>
                                <td>{{ $o->created_at }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    @include('home.footer')
    <!---------Java Scripts--------->
    @include('home.scripts')
</body>

</html>
