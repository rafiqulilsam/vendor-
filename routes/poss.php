<?php

// use Illuminate\Support\Facades\Auth;
// use Symfony\Component\Routing\Route;
// use App\Http\Controllers\font\HomeController;
// use App\Http\Controllers\poss\CartController;
// use App\Http\Controllers\poss\OrderController;
// use App\Http\Controllers\poss\ProductController;
// use App\Http\Controllers\poss\SettingController;
// use App\Http\Controllers\poss\CustomerController;


// Route::get('/', [HomeController::class, 'index'])->name('home');


//poss
//     Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');

// Route::resource('/settings', SettingController::class)->names('posssettings');
// Route::resource('/products', ProductController::class)->names('possproduct');
// Route::resource('/customers', CustomerController::class)->names('posscustomer');
// Route::resource('/orders', OrderController::class)->names('possorder');
// Route::resource('/carts', CartController::class)->names('posscart');


// Route::get('/', function () {
//     return redirect('/admin');
// });

// Auth::routes();

// Route::prefix('admin')->middleware('auth')->group(function () {
//     Route::get('/', [HomeController::class, 'index'])->name('home');
//     Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
//     Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
//     Route::resource('products', ProductController::class);
//     Route::resource('customers', CustomerController::class);
//     Route::resource('orders', OrderController::class);

//     Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
//     Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
//     Route::post('/cart/change-qty', [CartController::class, 'changeQty']);
//     Route::delete('/cart/delete', [CartController::class, 'delete']);
//     Route::delete('/cart/empty', [CartController::class, 'empty']);
// });
