<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.links')
</head>

<body>
    @include('home.header')
    <main>
        <section class="container-inner ">
            <div class="container-sm py-5 px-4">
                <div class="row justify-content-md-center my-3">
                    <div class="col-md-6 justify-content-center mx-auto">
                        <img width="80%" class="ms-5" src="{{ asset('public/products/') . '/' . $product->image }}"
                            alt="{{ $product->name }}">
                    </div>
                    <div class="col-md-6 mx-auto px-3">
                        <div class="m-2 w-75">
                            <h5 class="text-uppercase fw-bold fs-3">{{ $product->code }}</h5>
                        </div>
                        <div class="p-1 m-2 w-75">
                            <h2 class="text-uppercase fw-bold fs-4 text-muted">{{ $product->name }}</h2>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex justify-content-between align-items-center">
                                @if ($product->discount_price != 0)
                                    <h3 class="fs-3 fw-bold d-flex align-items-center text-success">
                                        ₱{{ $product->discount_price }}</h3>
                                    <small class="pb-3 ps-2 text-danger mb-0 fw-bold text-decoration-line-through">
                                        ₱{{ $product->price }}</small>
                                @else
                                    <div class="ps-3 py-3">
                                        <h3 class="d-flex align-items-center fs-3">₱{{ $product->price }}</h3>
                                    </div>
                                @endif
                            </div>

                            <div class="d-flex align-items-center text-decoration-underline">
                                <form action="{{ url('add_cart', $product->id) }}" method="POST" class="w-100"
                                    action="{{ url('add_cart') }}">
                                    @csrf

                                </form>
                            </div>
                        </div>
                        <small class="d-flex flex-end text-muted ps-2 fw-bold">Stocks: {{ $product->quantity }}</small>
                        <div class="d-grid p-1 m-auto">
                            @if (Route::has('login'))
                                @auth
                                    <form action="{{ url('add_cart', $product->id) }}" method="POST"
                                        class="w-100 <?php if ($product->quantity == '0'){ ?> disabled
                                    <?php   } ?>"
                                        action="{{ url('add_cart') }}">
                                        @csrf
                                        @if ($cart->where('Product_id', $product->id)->count())
                                            <a class="btn text-light btn-success w-100 wish-zoom">Already in Cart</a>
                                        @else
                                            <input
                                                class="<?php if ($product->quantity == '0'){ ?> disabled <?php   } ?> btn btn-warning w-100 wish-zoom"
                                                type="submit" value="Add to Cart">
                                        @endif
                                    </form>
                                @else
                                    <form action="" class="w-100">
                                        <a tabindex="0" class="btn w-100 btn-warning wish-zoom" data-bs-toggle="popover"
                                            data-bs-trigger="hover" data-bs-content="You need to log in first">
                                            Add to Cart
                                        </a>
                                    </form>
                                @endauth
                            @endif
                        </div>
                        <ul>
                            <li class="py-2">ENGINEERED FOR HIGH TORQUE AND VERSATILITY: Brushless motor delivers up
                                to 70
                                ft-lbs of torque for use with a wide variety of fastener sizes and applications</li>
                            <li class="py-2">HELPS COMBAT DAMAGE CAUSED BY SOME OILS AND SOLVENTS with glass-filled
                                nylon
                                housing**</li>
                            <li class="py-2">ENGINEERED FOR HIGH TORQUE AND VERSATILITY: Brushless motor delivers up
                                to 70
                                ft-lbs of torque for use with a wide variety of fastener sizes and applications</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="container-sm px-3">

                <div class="py-2 px-3">
                    <h2 class="feat-font py-3">PRODUCT OVERVIEW</h2>
                    <p>This versatile ATOMIC™ 20V MAX* Brushless Cordless 1/2 in. Ratchet is designed to help you
                        complete a
                        broad range of demanding jobs. Delivering 70 ft-lbs of max torque, the ratchet is well-suited
                        for a
                        variety fastening projects with a variable speed trigger that helps you alter its output based
                        on the
                        application. Its glass-filled nylon housing** is designed to help prevent damage from abrasive
                        chemicals
                        and solvents. Keep productivity high by illuminating work areas with its integrated LED
                        worklight.</p>
                </div>
                <hr class="mx-4">
                <div class="py-2 px-3">
                    <h2 class="feat-font py-3">ADDITIONAL FEATURES</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>ACCESS HARD-TO-REACH SPOTS: Compact design and low-profile head designed to allow
                                    for
                                    mobility in tight locations</li>
                                <li>SPEED CONTROL: Variable speed trigger helps user optimize speed based on application
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>CORDLESS COMPATIBILITY: Works with all LOTUS® 20V MAX* batteries and chargers</li>
                                <li>TRIGGER LOCK: Helps prevent accidental activation when applied</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="mx-4">
                <div class="py-2 px-3">
                    <h2 class="feat-font py-3">INCLUDES</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>ACCESS HARD-TO-REACH SPOTS: Compact design and low-profile head designed to allow
                                    for
                                    mobility in tight locations</li>
                                <li>SPEED CONTROL: Variable speed trigger helps user optimize speed based on application
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>CORDLESS COMPATIBILITY: Works with all LOTUS® 20V MAX* batteries and chargers</li>
                                <li>TRIGGER LOCK: Helps prevent accidental activation when applied</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="mx-4">
                <div class="py-2 px-3">
                    <h2 class="feat-font py-3">SPECIFICATIONS</h2>
                    <div class="row gx-0">
                        <div class="col-md-6">
                            <div class="bg-secondary p-3">
                                <h6>Product Length</h6>
                            </div>
                            <div class="bg-light p-3">
                                <h6>Product Weight</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-secondary p-3">
                                <h6>14.2 in</h6>
                            </div>
                            <div class="bg-light p-3">
                                <h6>2.4 lbs</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    @extends('home.footer')
    <!---------Java Scripts--------->
    @include('home.scripts')
</body>

</html>
