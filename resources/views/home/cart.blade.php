<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOTUS Philippines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/home/css/style.css" type="text/css" media="screen">
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
                <h1 class="feat-font w-50 px-3 mx-auto mb-0 text-nowrap">Wish List</h1>
            </div>
            <!-----list------>

            <div class="container mt-0 ">
                <div class="row">
                    <div class="col-md-3 pt-5 ps-5">

                        <p class="mt-3">
                            <a href="myAccount.html">My Account</a>
                        </p>
                        <hr class="me-3">
                        <p class="mt-3">
                            <a href="toolRegistration.html">My Tools</a>
                        </p>
                        <hr class="me-3">
                        <p class="mt-3" active>
                            <a> Wish List</a>
                        </p>
                        <hr class="me-3">
                    </div>
                    <!-------Content-->
                    <div class="col-md-9 ">
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
                                @foreach ($cart as $carts)
                                    <div class="d-md-flex gap-2">
                                        <img width="100px" src="products/{{ $carts->image }}" alt="">
                                        <p class="mb-0 fw-bolder ms-3">{{ $carts->product_name }}</p>
                                        <p>{{ $carts->price }}</p>
                                        <div class="d-flex ms-auto align-items-center">
                                            <a href="{{ url('cancel', $carts->id) }}"
                                                onclick="return confirm('Are you sure to cancel this product?')"
                                                class="btn btn-danger text-light">Cancel</a>
                                            <a class="btn btn-primary text-light">Check-out</a>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <?php $totalprice = $totalprice + $carts->price; ?>
                                @endforeach
                            </div>
                            <div class="text-end">Total Price : {{ $totalprice }}.00</div>
                        </div>

                        <!-- Modal footer -->
                        <div class="d-flex justify-content-center">
                            <div class="d-flex justify-content-center gap-3 mx-3 text-end pe-5">
                                <a class="util-btn fw-bolder text-light btn btn-warning my-2"
                                    href="{{ url('cash_order') }}">Cash on Delivery</a>
                                <a href="{{ url('stripe') }}" class="fw-bolder text-light btn btn-success my-2">Pay with
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
    <script src="/home/JS/chatboxscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="/home/JS/jQueryscript.js"></script>

</body>

</html>
