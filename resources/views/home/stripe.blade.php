<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.links')
</head>

<body>
    @include('home.header')
    <main>
        <section>
            <div class="container my-5 py-5">

                <div class="row">
                    <div class="col-md-4">
                        <h1 class="text-center">Pay Using your CARD</h1>
                        <br />
                        <h3 class="text-center">{{ $totalprice }}.00</h3>
                    </div>
                    <div class="col-md-6 col-md-offset-3 mx-auto shadow p-4 bg-light rounded">
                        <div class="panel panel-default credit-card-box ">
                            <div class="panel-heading display-table">
                                <h3 class="panel-title fs-5 pb-3 text-primary fst-italic fw-bold">Payment Details</h3>
                            </div>
                            <div class="panel-body">
                                @if (Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <p>{{ Session::get('success') }}</p>
                                        <a type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="close">X</a>
                                    </div>
                                @endif
                                <form role="form" action="{{ route('stripe.post', $totalprice) }}" method="post"
                                    class="require-validation" data-cc-on-file="false"
                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                    @csrf
                                    <div class='form-row row py-3'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> <input
                                                class='form-control' size='4' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-row row pb-3'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Card Number</label> <input autocomplete='off'
                                                class='form-control card-number' size='20' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-row row pb-3'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label> <input
                                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                                type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label> <input
                                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                type='text'>
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-md-12 error form-group d-none'>
                                            <div class='alert-danger alert'>Please correct the errors and try
                                                again.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 text-center pt-3 pb-2">
                                            <button class="btn-primary btn btn-block" type="submit">Pay Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    @include('home.footer')
    <!---------Java Scripts--------->
    @include('home.scripts')
</body>

</html>
