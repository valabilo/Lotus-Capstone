<section>
    <div class="container-md px-5">
        <h2 class="fw-bolder feat-font text-start px-3 pt-5 pb-3"> FEATURED PRODUCTS</h2>
    </div>
    <div class="container-md mx-auto mt-2 mb-5">
        <swiper-container class="mySwiper mx-5 p-3" init="false">
            @foreach ($product as $products)
                <swiper-slide>
                    <div class="img-zoom card h-100 px-2" style="width: 450px;">
                        <a href="{{ url('product_details', $products->id) }}">
                            <img width="250px" src="/products/{{ $products->image }}" class=" card-img-top"
                                alt="Sample Image">
                        </a>
                        <div class="h-100 card-body text-left p-2">
                            <div class="card-title fs-4 text-uppercase fw-bold">{{ $products->name }}</div>
                            <small class="card-subtitle text-uppercase fw-bold">{{ $products->code }}</small>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="mt-3 mb-0 text-danger">BEST SELLER!</h6>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        @if ($products->discount_price != 0)
                                            <small class="px-2 mb-0 fw-bold text-decoration-line-through">
                                                ₱{{ $products->price }}</small>
                                            <div class="fs-4 mb-0 fw-bold text-success">
                                                ₱{{ $products->discount_price }}
                                            </div>
                                        @else
                                            <p class="d-flex flex-end mt-2 mb-0 fw-bold">₱{{ $products->price }}</p>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <small class="d-flex align-items-end ms-5 mt-2 mb-0 fw-bolder">Stocks:
                                            {{ $products->quantity }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-center ">
                                <form action="{{ url('add_cart', $products->id) }}" method="POST"
                                    class="w-50 <?php if ($products->quantity == '0'){ ?> disabled
                                    <?php   } ?>"
                                    action="{{ url('add_cart') }}">
                                    @csrf
                                    <input class="btn btn-hover btn-link w-100" type="submit" value="Add to Cart">
                                </form>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            @endforeach
    </div>
</section>
