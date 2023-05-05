<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.links')
</head>

<body>
    @include('home.header')
    <main>
        <!-------Breadcrumbs-------->
        <div class="container-fluid" id="products">
            <ol class="breadcrumb mx-5">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="Create-Account.html">Sign In</a></li>
                <li class="breadcrumb-item" active>Wish List</li>
            </ol>
        </div>
        <!-------Wish List Content-------->
        <section class="container-fluid py-5">
            <div class="mx-auto">
                <h1 class="feat-font w-50 px-3 mx-auto mb-0 text-nowrap">My Cart</h1>
            </div>
            <!-----list------>
            <div class="container mt-0 ">
                <div class="row">
                    <!-------Content-->
                    <div class="col-md-12 ">
                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close">X</button>

                            </div>
                        @endif
                        <div class="container-fluid my-5 me-5 py-3 shadow border-1">
                            <div class="mx-3">
                                <?php $totalprice = 0; ?>
                                @forelse ($cart as $carts)
                                    <div class="d-flex justify-content-between">
                                        <img class="d-flex align-items-center" width="100px"
                                            src="public/products/{{ $carts->image }}" alt="">
                                        <p class="mb-0 fw-bolder ms-3 d-flex align-items-center">
                                            {{ $carts->product_name }}</p>
                                        <p class="d-flex align-items-center">₱{{ $carts->price }}.00</p>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ url('cancel', $carts->id) }}"
                                                onclick="return confirm('Are you sure to cancel this product?')"
                                                class="btn btn-danger text-light">Cancel</a>
                                            {{-- <a class="btn btn-primary text-light">Check-out</a> --}}
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <?php $totalprice = $totalprice + $carts->price; ?>

                                @empty

                                    <div class="text-center">No items in the Cart</div>
                            </div>
                            @endforelse
                            <div class="text-end">Total Price : {{ $totalprice }}.00</div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex justify-content-center gap-3 mx-3 text-end pe-5">
                                <a class="util-btn fw-bolder text-light btn btn-warning my-2"
                                    href="{{ url('cash_order') }}">Cash on Delivery</a>
                                <a href="{{ url('stripe', $totalprice) }}"
                                    class="fw-bolder text-light btn btn-success my-2">Pay with
                                    CARD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('home.footer')
    <!---------Java Scripts--------->
    @include('home.scripts')
</body>

</html>
