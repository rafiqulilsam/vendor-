<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    WarehouseController,
    CategoryController,
    UserController,
    PurchaseController,
    UnitController,
    ProductController
};

Route::resource('/users', UserController::class)->names('user');
Route::resource('/products', ProductController::class)->names('product');
Route::resource('/categories', CategoryController::class)->names('category');
Route::resource('/purchases', PurchaseController::class)->names('purchase');
Route::resource('/warehouse', WarehouseController::class)->names('warehouse');
Route::resource('/units', UnitController::class)->names('unit');
// Route::resource('/brands', BrandController::class)->names('brand');




//poss
// Route::resource('/settings', SettingController::class)->names('posssettings');
// Route::resource('/products', ProductController::class)->names('possproduct');
// Route::resource('/customers', CustomerController::class)->names('posscustomer');
// Route::resource('/orders', OrderController::class)->names('possorder');
// Route::resource('/carts', CartController::class)->names('posscart');

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
// Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
// Route::resource('products', ProductController::class);
// Route::resource('customers', CustomerController::class);
// Route::resource('orders', OrderController::class);

// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
// Route::post('/cart/change-qty', [CartController::class, 'changeQty']);
// Route::delete('/cart/delete', [CartController::class, 'delete']);
// Route::delete('/cart/empty', [CartController::class, 'empty']);
