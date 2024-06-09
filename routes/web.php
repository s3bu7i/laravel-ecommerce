<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController; // Import the CheckoutController class
use App\Http\Controllers\ProductController;


use App\Http\Controllers\CartController; // Import the CartController class

// Authentication Routes
Auth::routes();

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
Route::resource('products', ProductController::class);
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');

// Checkout Route
// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index'); // Update the controller reference
// Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process'); // Update the controller reference