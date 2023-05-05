<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

route::get('/view_category', [AdminController::class, 'view_category']);

route::post('/add_category', [AdminController::class, 'add_category']);

route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

route::get('/view_products', [AdminController::class, 'view_products']);

route::post('/add_product', [AdminController::class, 'add_product']);

route::get('/show_products', [AdminController::class, 'show_products']);

route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

route::get('/update_product/{id}', [AdminController::class, 'update_product']);

route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

route::post('/add_carousel', [AdminController::class, 'add_carousel']);

route::get('/view_carousel', [AdminController::class, 'view_carousel']);

route::get('/delete_carousel/{id}', [AdminController::class, 'delete_carousel']);

route::post('/add_store', [AdminController::class, 'add_store']);

route::get('/view_stores', [AdminController::class, 'view_stores']);

route::get('/delete_store/{id}', [AdminController::class, 'delete_store']);

route::get('/contacts', [AdminController::class, 'contacts']);

route::post('/add_contact', [AdminController::class, 'add_contact']);

route::get('/delete_contact/{id}', [AdminController::class, 'delete_contact']);

route::get('/order', [AdminController::class, 'order']);

route::get('/delivered/{id}', [AdminController::class, 'delivered']);

route::get('/send_email/{id}', [AdminController::class, 'send_email']);

route::post('/send_user_email/{id}', [AdminController::class, 'send_user_email']);

route::post('/key_search', [AdminController::class, 'search_order']);



//HOME

route::get('/product_details/{id}', [HomeController::class, 'product_details']);

route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);

route::get('/cart', [HomeController::class, 'cart']);

route::get('/cancel/{id}', [HomeController::class, 'cancel']);

route::get('/cash_order', [HomeController::class, 'cash_order']);

route::get('/all_products', [HomeController::class, 'products']);

route::get('/stripe/{totalprice}', [HomeController::class, 'stripe']);

Route::post('stripe/{totalprice}', [HomeController::class, 'stripePost'])->name('stripe.post');

route::get('/load-cart-data', [HomeController::class, 'cartcount']);

route::get('/all_products/{acc}', [HomeController::class, 'filter_category']);

route::get('/status_order', [HomeController::class, 'order_status']);

route::get('/promotions', [HomeController::class, 'promotions']);

route::get('/search', [HomeController::class, 'search_product']);