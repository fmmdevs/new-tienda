<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Atajo con todas las rutas necesarias autenticar usuarios
Auth::routes();


// Rutas home
Route::get('/', [HomeController::class, 'index'])
    ->name("home.index");

Route::get('/contact', [HomeController::class, 'contact'])
    ->name("home.contact");

Route::get('/about', [HomeController::class, 'about'])
    ->name("home.about");

// Rutas products por category (men o women)
Route::get('/products/{category}', [ProductController::class, 'index'])
    ->name("product.index");


Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name("product.show");

// Rutas cart
Route::get('/cart', [CartController::class, 'index'])->name("cart.index");

Route::get('/cart/delete', [CartController::class, 'delete'])->name("cart.delete");

Route::post('/cart/add/{id}', [CartController::class, 'add'])->name("cart.add");

// Middlewares
// Middleware auth: rutas  disponibles solo para usuarios autenticados, sean rol user o rol admin
Route::middleware('auth')->group(function () {

    Route::get('/cart/purchase', [CartController::class, 'purchase'])->name("cart.purchase");

    Route::get('/my-account/orders', [MyAccountController::class, 'orders'])->name("myaccount.orders");
});

// Middleware admin: routa solo disponible para usuarios cuyo rol sea admin
Route::middleware('admin')->group(function () {

    Route::get('/admin', [AdminHomeController::class, 'index'])
        ->name('admin.home.index');

    Route::get('/admin/products', [AdminProductController::class, 'index'])
        ->name('admin.product.index');

    Route::post('/admin/products/store', [AdminProductController::class, 'store'])
        ->name("admin.product.store");

    Route::delete('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])
        ->name("admin.product.delete");

    Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])
        ->name("admin.product.edit");

    Route::put('/admin/products/{id}/update', [AdminProductController::class, 'update'])
        ->name("admin.product.update");
});
