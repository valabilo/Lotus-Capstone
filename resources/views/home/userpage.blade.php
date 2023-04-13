<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOTUS Philippines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./home/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    @include('home.header')
    <main>
        <!-------Carousel-->
    @include('home.carousel')
        <!-------Features-->
    @include('home.features')
        <!-------Banner 1----------->
    <div class="ban container-fluid my-5" id="shop-now" data-aos="fade-up">
        <h2 class="text-center py-5 mb-2">ENGINEERED TO SURPRISE</h2>
    </div>
        <!-------Categories------------>
    @include('home.categories')
        <!-------Hero Section--------------->
    @include('home.hero')
        <!-------Utilities--------------->
    @include('home.utilities')
        <!-------Stores--------------->
    @include('home.stores')
        <!-------Sign In----------------->
    @include('home.signin')
        <!-------Footer --------------->
    </main>
    @include('home.footer')
    <!---------Java Scripts--------->
    <script src="home/JS/aosScript.js"></script>
    <script src="home/JS/chatboxscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="home/JS/jQueryscript.js"></script>
    
</body>
</html>