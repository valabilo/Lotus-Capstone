<header>
    <div class="container-fluid bg-dark text-light">
            <div class="header-cont d-flex gap-3 px-4 py-3 align-content-center">
                <div class="row">
                    <p class="col-md-2 p-0 m-0 text-nowrap">CALL US:</p>
                        <div class="col-md-5 d-flex gap-1">
                            <img width="20px" height="20px" src="./projectassets/icons8-phone-24.png" alt="">
                            <p class="text-nowrap p-0 m-0">(02)8-921-0000</p>
                        </div>
                    <div class="col-md-5 d-flex gap-1">
                        <img width="20px" height="20px" src="./projectassets/icons8-phone-24.png"" alt="">
                        <p class="text-nowrap p-0 m-0">(02)8-921-0000</p>
                    </div>
                </div>
                <div class="d-flex gap-3 align-content-center ms-auto">
                    <a href="#">
                        <img width="25px" src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_facebook-256.png" alt="">
                    </a>
                    <a href="#">
                        <img width="25px" src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Twitter3_colored_svg-512.png" alt="">
                    </a>
                    <a href="#">
                        <img width="25px" src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-128.png" alt="">
                    </a>
                </div>
            </div>
        </div>
</header>
    <nav class="navbar sticky-top m-0 navbar-expand-lg navbar-dark">
        <div class="container-fluid mx-4 ">
            <a href="index.html" class="navbar-brand me-5 px-2">
                <img class="wish-zoom" width="140px" height="60px" src="./projectassets/logo-1.jpg" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-custom navbar-nav">
                    <a href="home/Products.html" class="ms-auto nav-item nav-link active">PRODUCTS</a>
                    <a href="home/Promotions.html" class="ms-auto nav-item nav-link">PROMOTIONS</a>
                    <a href="home/services.html" class="ms-auto nav-item nav-link">SERVICES</a>
                </div>
                    <form class="d-flex ms-auto">
                        <input type="text" class="form-control me-sm-2" placeholder="Search">
                        <button type="submit" class="btn btn-outline-light">Search</button>
                    </form>
                    <div class="navbar-nav m-2">
                    <!-- <a href="#modalScrollableCenter" data-bs-toggle="modal" class="wish-zoom ms-auto nav-item nav-link"><img width="30px" height="30px" src="https://cdn3.iconfinder.com/data/icons/jolly-icons-free/64/cart_64.png" alt=""><span class="badge bg-danger">4</span></a> -->
                            @if (Route::has('login'))
                            @auth
                            <li class="">
                                <x-app-layout>
                                </x-app-layout>
                            </li>
                            @else 
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img width="30px" height="30px" src="https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user-64.png" alt="Log in">
                                </a>
                                <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuLink">
                                <li class="dropdown-item text-center"><a class=" btn btn-sm text-dark" href="{{ route('login') }}">Log In</a></li>
                                <li class="dropdown-item text-center"><a class=" btn btn-sm text-dark" href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </div>
                            @endauth
                            @endif
                        </div>
                </div>
                </div>
            </div>
        </div>
        <!-----------CART Modal-------->
        <div class="modal" id="modalScrollableCenter">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-4 shadow-lg">
                <!-- Modal Header -->
                <div class="modal-header mx-3">
                <h3 class="modal-title">Your Cart</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body mx-3">
                    <div class="d-md-flex gap-2"><img width="50px" height="50px" src="./projectassets/acc1.jpg" alt=""><p class="mb-0 fw-bolder ms-3">LOTUS BRUSHLESS 18V X-Line Cordless Impact Drill w/2pcs Battery Charger & Hard Case LTHD18VLI-2BLX</p>
                        <button type="button" class="py-0 text-nowrap btn-sm btn btn-danger text-light">Cancel</button>
                        <button type="button" data-bs-target="" class="py-0 text-nowrap btn-sm btn btn-primary text-light" data-href="checkout.html">Check-out</button></div>
                    <hr>
                    <div class="d-md-flex gap-2"><img width="50px" height="50px" src="./projectassets/acc2.jpg" alt=""><p class="mb-0 fw-bolder  ms-3">LOTUS BRUSHLESS 18V X-Line Cordless Impact Drill w/2pcs Battery Charger & Hard Case LTHD18VLI-2BLX</p>
                        <button type="button" class="py-0 text-nowrap btn-sm btn btn-danger text-light">Cancel</button>
                        <button type="button" class="py-0 text-nowrap btn-sm btn btn-primary text-light">Check-out</button></div>
                    <hr>
                    <div class="d-md-flex gap-2"><img width="50px" height="50px" src="./projectassets/acc3.jpg" alt=""><p class="mb-0 fw-bolder  ms-3">LOTUS BRUSHLESS 18V X-Line Cordless Impact Drill w/2pcs Battery Charger & Hard Case LTHD18VLI-2BLX</p>
                        <button type="button" class="py-0 text-nowrap btn-sm btn btn-danger text-light">Cancel</button>
                        <button type="button" class="py-0 text-nowrap btn-sm btn btn-primary text-light">Check-out</button></div>
                    <hr>
                    <div class="d-md-flex gap-2"><img width="50px" height="50px" src="./projectassets/acc1.jpg" alt=""><p class="mb-0 fw-bolder  ms-3">LOTUS BRUSHLESS 18V X-Line Cordless Impact Drill w/2pcs Battery Charger & Hard Case LTHD18VLI-2BLX</p>
                        <button type="button" class="py-0 text-nowrap btn-sm btn btn-danger text-light">Cancel</button>
                        <button type="button" class="py-0 text-nowrap btn-sm btn btn-primary text-light">Check-out</button></div>
                    <hr>
                    <div class="modal-co d-md-flex gap-2"><img width="50px" height="50px" src="./projectassets/acc2.jpg" alt=""><p class="mb-0 fw-bolder  ms-3">LOTUS BRUSHLESS 18V X-Line Cordless Impact Drill w/2pcs Battery Charger & Hard Case LTHD18VLI-2BLX</p>
                        <button type="button gap-2" class="py-0 text-nowrap btn-sm btn btn-success" disabled>Checked-out</button>
                    </div>
                    <hr>
                    <div class="modal-co d-md-flex gap-2"><img width="50px" height="50px" src="./projectassets/acc3.jpg" alt=""><p class="mb-0 fw-bolder ms-3">LOTUS BRUSHLESS 18V X-Line Cordless Impact Drill w/2pcs Battery Charger & Hard Case LTHD18VLI-2BLX</p>
                        <button type="button" class="py-0 text-nowrap btn-sm btn btn-danger" disabled>Cancelled</button>
                    </div>
                    <hr>
                    <div class="modal-co d-md-flex gap-2"><img width="50px" height="50px" src="./projectassets/acc3.jpg" alt=""><p class="mb-0 fw-bolder ms-3">LOTUS BRUSHLESS 18V X-Line Cordless Impact Drill w/2pcs Battery Charger & Hard Case LTHD18VLI-2BLX</p>
                        <button type="button" class="py-0 text-nowrap btn-sm btn btn-danger" disabled>Cancelled</button>
                    </div>
                </div>
            <!-- Modal footer -->
            <div class="modal-footer mx-3">
                <a class="util-btn fw-bolder text-light btn btn-warning" href="Products.html#products">ADD MORE TO CART</a>
                <a class="util-btn fw-bolder text-light btn btn-success" href="checkout.html">CHECK-OUT</a>

        </div>
      </div>
    </div>
  </div>
        <!----------Log-in Modal -->
    </nav>