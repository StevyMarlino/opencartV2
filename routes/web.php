<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Admin\ShopController as Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/home');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','verified'])->group(function () {

    //Route for make a order
    Route::prefix('cart')->group(function() {

        Route::get('/receipt', [CartController::class, 'index'])->name('cart.index');
        Route::get('/add-to-cart/{product}', [CartController::class, 'add'])->name('cart.add');
        Route::get('/destroy/{item_id}', [CartController::class, 'destroy'])->name('cart.destroy');
        Route::get('/update/{item_id}', [CartController::class, 'update'])->name('cart.update');
        Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

    });

    //Route for shop
    Route::resource('/shops', ShopController::class)->except('show');
    Route::resource('orders', OrderController::class)->only('store');

    //
    Route::get('/orders', [\App\Http\Controllers\OrderController::class,'index'])->name('orders');

    Route::prefix('dashboard')->group(function() {

        Route::get('/',[ Admin::class,'index'])->name('admin.index');
        Route::get('/products',[\App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin.products');
        Route::get('/customers',[\App\Http\Controllers\CustomerController::class,'index'])->name('customers');

    });

    Route::resource('product',\App\Http\Controllers\ProductController::class);



//    Route::get('/categories',[\App\Http\Controllers\CategoryController::class,'index'])->name('categories');
//    Route::get('/marketing',[\App\Http\Controllers\MarketingController::class,'index'])->name('marketing');
//    Route::get('/analytics',[\App\Http\Controllers\AnalyticsController::class,'index'])->name('analytics');


});

//Route Shop guest
Route::get('/shops/{slug}', [ShopController::class, 'show'])->name('shops.show');
Route::get('/shops/{slug}/{product_id}', [ShopController::class, 'details'])->name('product.details');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::prefix('admin')->group(function () {

    Voyager::routes();

});
