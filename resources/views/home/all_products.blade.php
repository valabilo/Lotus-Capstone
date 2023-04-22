<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.links')
</head>

<body>
    @include('home.header')
    <main>
        <section>
            <div class="container-fluid mx-auto py-5">
                <div class="row container">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <h1 class="feat-font mb-0">ALL PRODUCTS</h1>
                    </div>
                </div>
                <div class="container mt-0">
                    <div class="row">
                        <div class="col-md-3 pt-2 ps-5">
                            <h3 class="foot-font fs-3 pb-2">PRODUCT CATEGORIES</h3>
                            <hr class="me-3" />
                            <ul class="list-group list-group-flush pe-5">
                                <li class="list-group-item ps-0">
                                    <a href="{{ url('/all_products') }}" class="text-decoration-none btn btn-link">All
                                        Products</a>
                                </li>
                                <li class="list-group-item ps-0">
                                    <a href="{{ url('/all_products') }}/Power Tools"
                                        class="text-decoration-none btn btn-link">Power
                                        Tools</a>
                                </li>
                                <li class="list-group-item ps-0">
                                    <a href="{{ url('/all_products') }}/Hand tools"
                                        class="text-decoration-none btn btn-link">Hand Tools</a>
                                </li>
                                <li class="list-group-item ps-0">
                                    <a href="{{ url('/all_products') }}/Accessories"
                                        class="text-decoration-none btn btn-link">Accessories</a>
                                </li>
                                <li class="list-group-item ps-0">
                                    <a href="{{ url('/all_products') }}/Garden Tools"
                                        class="text-decoration-none btn btn-link">Garden
                                        Tools</a>
                                </li>
                                <li class="list-group-item ps-0">
                                    <a href="{{ url('/all_products') }}/Safety Gears"
                                        class="text-decoration-none btn btn-link">Safety
                                        Gears</a>
                                </li>
                                <li class="list-group-item ps-0">
                                    <a href="{{ url('/all_products') }}/Spare Parts"
                                        class="text-decoration-none btn btn-link">Spare
                                        Parts</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        {{-- <form onSubmit={handleSearch}>
                                            <button type='submit'
                                                class="bg-outline-warning btn btn-warning">Search</button>
                                            <input type="text" size="20" class="form-control"
                                                placeholder="Search Product " aria-label="Search Product"
                                                onChange='(e)=> setValue(e.target.value)'>

                                        </form aria-label="Search Product"> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3">
                                @foreach ($products as $product)
                                    <div class="col-md-4 py-3">
                                        <div class="container-fluid ">
                                            <div class="card px-2 img-zoom pb-2">
                                                <a class="img-wrapper"
                                                    href="{{ url('product_details', $product->id) }}">
                                                    <img width="250px" class="card-img-top inner-img card-img-top"
                                                        src="{{ asset('public/products/') . '/' . $product->image }}"
                                                        alt='{{ $product->name }}'>
                                                </a>
                                                <div class="card-body" class="h-100 m-0 p-0 mt-2">
                                                    <div class="card-title fw-bolder text-uppercase lh-1">
                                                    </div>
                                                    <div class="card-subtitle fw-bolder">
                                                        {{ $product->name }}
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="card-text" class="mt-3 mb-0 fw-bolder text-danger">
                                                        </div>
                                                        <div>
                                                            @if ($product->discount_price != 0)
                                                                <small
                                                                    class="px-2 mb-0 fw-bold text-decoration-line-through">
                                                                    ₱{{ $product->price }}</small>
                                                                <div class="fs-5 mb-0 fw-bold text-success">
                                                                    ₱{{ $product->discount_price }}
                                                                </div>
                                                            @else
                                                                <p class="d-flex flex-end mt-2 mb-0 fw-bold">
                                                                    ₱{{ $product->price }}</p>
                                                            @endif
                                                            <small class="mt-3 mb-0 fw-bolder text-muted">
                                                                Stocks: {{ $product->quantity }}
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer d-flex justify-content-center pb-2">
                                                    @if (Route::has('login'))
                                                        @auth
                                                            <form action="{{ url('add_cart', $product->id) }}"
                                                                method="POST"
                                                                class="w-75 <?php if ($product->quantity == '0'){ ?> disabled <?php   } ?>"
                                                                action="{{ url('add_cart') }}">
                                                                @csrf
                                                                @if ($cart->where('Product_id', $product->id)->count())
                                                                    <a class="btn mx-auto text-center"
                                                                        value="Already in Cart">Already in
                                                                        Cart
                                                                    </a>
                                                                @else
                                                                    <input class="btn btn-hover btn-link w-100"
                                                                        type="submit" value="Add to Cart">
                                                                @endif
                                                            </form>
                                                        @else
                                                            <form action="">
                                                                <a tabindex="0" class="text-center wish-zoom"
                                                                    role="button" data-bs-toggle="popover"
                                                                    data-bs-trigger="hover"
                                                                    data-bs-content="You need to log in first">
                                                                    Add to Cart
                                                                </a>
                                                            </form>
                                                        @endauth
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="d-flex flex-end">{!! $products->withQueryString()->links('pagination::bootstrap-5') !!}</div> --}}

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
