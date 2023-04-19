<section class="my-5">
    <div class="container h-100 mb-3">
        <h2 class="store-font text-center fw-bolder">OUR PARTNER STORES</h2>
        <hr class="shadow my-3 underline">
        <div class="row h-25 py-3">
            @foreach ($store as $stores)
                <div class="col-md-2 g-2 d-flex align-items-center">
                    <img width="100px" class="mb-2 mx-auto " src="/store/{{ $stores->store_link }}"
                        alt="{{ $stores->name }}">
                </div>
            @endforeach
            {!! $store->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</section>
