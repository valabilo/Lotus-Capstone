<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.links')
</head>

<body>
    @include('home.header')
    <main>
        <!-------Carousel-->
        @include('home.carousel')
        <!-------Features-->
        @include('home.features')
        <!-------Banner 1----------->
        <div class="container-fluid my-5 px-0">
            <h2 class="text-center fs-2 fw-bold text-light ls-2 lead bg-secondary py-5 mb-2">ENGINEERED TO SURPRISE</h2>
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
    @include('home.scripts')
</body>

</html>
