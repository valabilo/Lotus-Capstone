<section data-aos="fade-up" data-aos-duration="3000">
    <div class="container-md px-5">
        <h2 class="fw-bolder feat-font text-start px-3 pt-5 pb-3"> FEATURED PRODUCTS</h2>
    </div>
    <div class="container-md mx-auto mt-2 mb-5">
        <swiper-container class="mySwiper mx-5 p-3" init="false">
            @foreach ($product as $product)
                @if ($product->status == 1)
                    <swiper-slide>
                        <div class="card" style="width: 350px;">
                            <a href="Item-Info.html">
                                <img width="250px" src="/products/{{ $product->image }}" class="img-zoom card-img-top"
                                    alt="Sample Image">
                            </a>
                            <div class="card-body text-left p-2">
                                <div class="card-title fs-4 text-uppercase fw-bold">{{ $product->name }}</div>
                                <small class="card-title text-uppercase fw-bold">{{ $product->code }}</small>
                                <div class="d-flex justify-content-between">
                                    <h6 class="mt-3 mb-0 text-danger">BEST SELLER!</h6>
                                    <p class="mt-3 mb-0 fw-bolder text-secondary">Stocks: {{ $product->quantity }}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <a href="/"
                                        class="btn btn-link mt-2 p-0 mb-0 <?php if ($product->quantity == '0'){ ?> disabled
                                        <?php   } ?>">Add
                                        to Cart</a>
                                    <a href="checkout.html"
                                        class="<?php if ($product->quantity == '0'){ ?> disabled
                                        <?php   } ?> feat-btn btn btn-warning">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                @endif
            @endforeach
    </div>
</section>
