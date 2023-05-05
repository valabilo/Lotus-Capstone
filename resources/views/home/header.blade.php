<header>
    <div class="container-fluid bg-dark text-light">
        <div class="header-cont d-flex gap-3 px-4 py-3 align-content-center">
            <div class="row">
                <p class="d-flex align-items-center col-md-2 p-0 m-0 text-nowrap">CALL US:</p>
                <div class="col-md-5 d-flex gap-1">
                    <img width="20px" height="20px" src="{{ asset('public/projectassets/icons8-phone-24.pn') }}g"
                        alt="">
                    <p class="d-flex align-items-center text-nowrap p-0 m-0">(02)8-921-0000</p>
                </div>
                <div class="col-md-5 d-flex gap-1">
                    <img width="20px" height="20px" src="{{ asset('public/projectassets/icons8-phone-24.png') }}"
                        alt="">
                    <p class="d-flex align-items-center text-nowrap p-0 m-0">(02)8-921-0000</p>
                </div>
            </div>
            <div class="d-flex gap-3 align-content-center ms-auto">
                <a href="#">
                    <img width="25px"
                        src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_facebook-256.png"
                        alt="">
                </a>
                <a href="#">
                    <img width="25px"
                        src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Twitter3_colored_svg-512.png"
                        alt="">
                </a>
                <a href="#">
                    <img width="25px"
                        src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-128.png"
                        alt="">
                </a>
            </div>
        </div>
    </div>
</header>
<nav class="navbar sticky-top m-0 navbar-expand-lg navbar-dark">
    <div class="container-fluid mx-4 ">
        <a href="/Lotus-capstone" class="navbar-brand me-5 px-2">
            <img class="wish-zoom" width="140px" height="60px" src="{{ asset('public/projectassets/logo-1.jpg') }}"
                alt="...">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-custom navbar-nav">
                <a href="{{ url('all_products') }}" class=" nav-item nav-link active">PRODUCTS</a>
                <a href="{{ url('promotions') }}" class=" nav-item nav-link">PROMOTIONS</a>
                {{-- <a href="home/services.html" class="ms-auto nav-item nav-link">SERVICES</a> --}}
            </div>
            @if (Route::has('login'))
                @auth
                    {{-- <form class="d-flex ms-auto">
                <input type="text" class="form-control me-sm-2" placeholder="Search">
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form> --}}
                    <div class="navbar-nav align-items-center ms-auto">
                        <div class="navbar-custom navbar-nav">
                            <a href="{{ url('/status_order') }}" class=" nav-item nav-link text-light fw-bold">
                                <i class="bi bi-bag-check-fill" style="font-size: 1.60rem; color:rgb(96, 91, 91)"></i>
                            </a>
                        </div>
                        <div class="w-100 ms-auto nav-item nav-link">
                            <a href="{{ url('cart') }}" class="d-flex align-items-center wish-zoom ms-auto">
                                <img width="30px" height="30px"
                                    src="https://cdn3.iconfinder.com/data/icons/jolly-icons-free/64/cart_64.png"
                                    alt="">
                                <span style="position: relative; top:-10px; left:5px" class="badge bg-danger"
                                    id="cart-count">0</span>
                            </a>
                        </div>
                        <div class="nav-item nav-link w-100">
                            <x-app-layout>
                            </x-app-layout>
                        </div>
                    </div>
                @else
                    {{-- <form class="d-flex ms-auto">
                        <input type="text" class="form-control me-sm-2" placeholder="Search">
                        <button type="submit" class="btn btn-outline-light">Search</button>
                    </form> --}}
                    <div class="navbar-nav align-items-center ms-auto">
                        <div class="w-100 ms-auto nav-item nav-link">
                            <a tabindex="0" class="d-flex align-items-center wish-zoom ms-auto" role="button"
                                data-bs-toggle="popover" data-bs-trigger="focus"
                                data-bs-content="You need to log in first"><i class="bi bi-bag-check-fill"
                                    style="font-size: 1.60rem; color:rgb(96, 91, 91)"></i></a>
                        </div>
                        <div class="w-100 ms-auto nav-item nav-link">
                            <a tabindex="0" class="d-flex align-items-center wish-zoom ms-auto" role="button"
                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="You need to log in first">
                                <img width="30px" height="30px"
                                    src="https://cdn3.iconfinder.com/data/icons/jolly-icons-free/64/cart_64.png"
                                    alt="">
                                <span style="position: relative; top:-10px; left:5px" class="badge bg-danger">0</span>
                            </a>
                        </div>
                        <div class="dropdown w-100 ms-auto nav-item nav-link ">
                            <a class="btn dropdown-toggle p-0" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img width="30px" height="30px"
                                    src="https://cdn4.iconfinder.com/data/icons/glyphs/24/icons_user-64.png"
                                    alt="Log in">
                            </a>
                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuLink">
                                <li class="dropdown-item text-center"><a class=" btn btn-sm text-dark"
                                        href="{{ route('login') }}">Log In</a></li>
                                <li class="dropdown-item text-center"><a class=" btn btn-sm text-dark"
                                        href="{{ route('register') }}">Register</a></li>
                            </ul>
                        </div>
                    </div>
                @endauth
            @endif
        </div>
    </div>
    </div>
    </div>
</nav>
