<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOTUS Philippines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/home/css/style.css" type="text/css" media="screen">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    @include('home.header')
    <main>
        <div class="container-fluid mx-auto">
            <div class="mx-auto">
                <h1 class="feat-font w-50 mx-auto mb-0">ALL PRODUCTS</h1>
            </div>
            <div class="container mt-0">
                <div class="row">
                    <div class="col-md-3 pt-2 ps-5">
                        <h3 class="foot-font">PRODUCT CATEGORIES</h3>
                        <hr class="me-3" />
                        <ul class="list-group list-group-flush pe-5">
                            <li class="list-group-item ps-0"><button class="" variant="link" onClick={()=>
                                    handleReset()}>All Products</button></li>
                            <li class="list-group-item ps-0"><button class="" variant="link"
                                    onClick={()=>handleFilter("power tools")} >Power Tools</button></li>
                            <li class="list-group-item ps-0"><button class="" variant="link"
                                    onClick={()=>handleFilter("hand tools")} >Hand Tools</button></li>
                            <li class="list-group-item ps-0"><button class="" variant="link"
                                    onClick={()=>handleFilter("garden tools")} >Garden tools</button></li>
                            <li class="list-group-item ps-0"><button class="" variant="link"
                                    onClick={()=>handleFilter("accessories")}>Accessories</button></li>
                            <li class="list-group-item ps-0"><button class="" variant="link"
                                    onClick={()=>handleFilter("safety gears")} >Safety Gears</button></li>
                            <li class="list-group-item ps-0"><button class="" variant="link"
                                    onClick={()=>handleFilter("spare parts")} >Spare Parts</button></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                </div>
                                <div class="col-md-4">
                                    <form onSubmit={handleSearch}>
                                        <input type="text" class="form-control w-100 border-0"
                                            placeholder="Search Product " aria-label="Search Product" value={value}
                                            onChange={(e)=> setValue(e.target.value)}
                                        >
                                        <button type='submit' variant="outline-warning">Search</button>
                                        <form aria-label="Search Product" />
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div>
                            {data.length === 0 ? (
                            <p>No Data Found</p>): (
                            data.map((item, index) => (
                            <div class="col-xs-12 cold-md-6 col-ld-4" key={index}>
                                <div class="container-fluid my-2">
                                    <div class=" border-0 ">
                                        <div class="card-image-top" variant="top" class="img-zoom" src={item.prod_img}
                                            alt={item.prod_} />
                                        <div class="card-body" class="h-100 m-0 p-0 mt-2">
                                            <div class="card-title fw-bolder text-uppercase lh-1">
                                                {item.prod_}
                                            </div>
                                            <div class="card-subtitle fw-bolder">
                                                {item.prod_code}
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="card-text" class="mt-3 mb-0 fw-bolder text-danger">
                                                    {item.prod_description}!
                                                </div>
                                                <div>
                                                    <div class="card-text" class="mt-2 mb-0 fw-bold text-">
                                                        {`₱${item.prod_price}`}
                                                    </div>
                                                    <small class="mt-3 mb-0 fw-bolder text-muted">
                                                        {`Stocks: ${item.stocks}`}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between">
                                            <a disabled={item.stocks===0? true: false}
                                                class="mt-2 mb-0 text-decoration-underline">
                                                Add to Cart
                                            </a>
                                            <button href="./checkout" variant="warning text-secondary"
                                                disabled={item.stocks===0? true: false}>
                                                BUY NOW
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ))
                            )}
                        </div>
                    </div>
                </div>
            </div>
            </section>

        @endsection>
</main>
@include('home.footer')
<!---------Java Scripts--------->
<script src="home/JS/aosScript.js"></script>
<script src="home/JS/chatboxscript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script src="home/JS/jQueryscript.js"></script>

</body>

</html>
