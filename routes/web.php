<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

// Rute untuk tamu (pengguna yang tidak diautentikasi)
Route::get('/', function () {
    return view('auth.login');
});

// Rute produk yang dapat diakses oleh semua pengguna
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Rute untuk pengguna terautentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Manajemen profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Cart routes
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    // Checkout routes
    Route::get('/checkout', [OrderController::class, 'create'])->name('checkout');
    Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');
    
    // Order confirmation
    Route::get('/orders/{order}/confirmation', [OrderController::class, 'confirmation'])->name('orders.confirmation');

    // Rute untuk menampilkan detail pesanan
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
});

// Rute untuk admin
Route::middleware(['auth', 'admin'])->group(function () {
    // Manajemen pengguna
    Route::resource('users', UserController::class);

    // Manajemen produk (CRUD untuk admin)
    Route::resource('products', ProductController::class)->except(['index', 'show']);
    
    // Manajemen pesanan (CRUD untuk admin)
    Route::resource('orders', OrderController::class)->except(['index', 'show', 'confirmation']);

    // Manajemen pelanggan
    Route::resource('customers', CustomerController::class);
});

// Menyertakan rute autentikasi Laravel Breeze
require __DIR__.'/auth.php';