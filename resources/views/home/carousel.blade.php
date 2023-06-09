<section class="carousel-inner">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            @foreach ($carousel as $carousel)
                <div class="carousel-item active">
                    <img height="600dvh" src="{{ asset('public/data/') . '/' . $carousel->image }}"
                        class="img-fluid image-responsive d-block w-100" alt="Slide 1">
                </div>
            @endforeach
            <div class="container">
                <div class="carousel-caption text-center">
                    <p><a class="util-btn btn-lg btn btn-warning" href="#">SHOP NOW</a></p>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
