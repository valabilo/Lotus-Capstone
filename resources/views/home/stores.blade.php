<section class="mt-5 pt-5" data-aos="fade-up" data-aos-duration="3000">
    <div class="container h-100 mb-3">
        <h2 class="store-font text-center fw-bolder">OUR PARTNER STORES</h2>
        <hr class="shadow my-3 underline">
        <div class="row h-25 py-3">
            @foreach ($store as $store)
                <div class="col-md-2 g-2 d-flex align-items-center">
                    <img width="100px" height="150px" class="mb-2 mx-auto " src="/store/{{ $store->store_link }}"
                        alt="{{ $store->name }}">
                </div>
            @endforeach
        </div>
    </div>
</section>
