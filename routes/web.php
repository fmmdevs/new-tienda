<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Atajo con todas las rutas necesarias autenticar usuarios
// Auth::routes();
// Para habilitar las rutar de verificacion de email, ademas de las de autenticar usuario
Auth::routes(['verify' => true]);

// Rutas home
Route::get('/', [HomeController::class, 'index'])
    ->name("home.index");

Route::get('/contact', [HomeController::class, 'contact'])
    ->name("home.contact");

Route::get('/about', [HomeController::class, 'about'])
    ->name("home.about");

// Rutas products por category (men o women)
Route::get('/product/{category}', [ProductController::class, 'index'])
    ->name("product.index");


Route::get('/product/show/{id}', [ProductController::class, 'show'])
    ->name("product.show");

// Rutas cart
Route::get('/cart', [CartController::class, 'index'])->name("cart.index");

Route::get('/cart/delete', [CartController::class, 'delete'])->name("cart.delete");

Route::post('/cart/add/{id}', [CartController::class, 'add'])->name("cart.add");

// Rutas contacto
Route::post('/contact/store', [ContactFormController::class, 'store'])->name('contact.store');

// Middlewares
// Middleware auth: rutas  disponibles solo para usuarios autenticados, sean rol user o rol admin
Route::middleware('auth')->group(function () {

    Route::get('/cart/purchase', [CartController::class, 'purchase'])->name("cart.purchase");

    Route::get('/my-account/orders', [MyAccountController::class, 'orders'])->name("myaccount.orders");

    Route::get('/my-account/orders/{id}/pdf', [MyAccountController::class, 'downloadPdf'])->name("myaccount.pdf");
});

// Middleware admin: ruta solo disponible para usuarios cuyo rol sea admin
Route::middleware('admin')->group(function () {

    Route::view('/admin', 'admin.home.index')->name('admin.home.index');

    // Rutas para administracion de productos

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

    // Rutas para administracion de categorias

    Route::get('/admin/categories', [AdminCategoryController::class, 'index'])
        ->name('admin.category.index');

    Route::post('/admin/categories/store', [AdminCategoryController::class, 'store'])
        ->name('admin.category.store');

    Route::delete('/admin/categories/{id}/delete', [AdminCategoryController::class, 'delete'])
        ->name('admin.category.delete');

    Route::get('/admin/categories/{id}/edit', [AdminCategoryController::class, 'edit'])
        ->name('admin.category.edit');

    Route::put('/admin/categories/{id}/update', [AdminCategoryController::class, 'update'])
        ->name('admin.category.update');

    // Ruta inbox
    Route::get('admin/inbox', [ContactFormController::class, 'index'])->name('admin.inbox');
});

// Rutas disponibles solo para usuarios que hayan verificado su email
// Route::get('/home', 'HomeController@index')->middleware('verified');


// // Ruta para email testing
// Route::get('/test-mail', function () {
//     Notification::route('mail', 'yourMailtrapEmailAddress')->notify(new NewMessage());
//     return 'Sent';
// });
