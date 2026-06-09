<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/my-account', function () {
    return view('account');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/refund-policy', function () {
    return view('refund-policy');
});

Route::get('/terms-and-condition', function () {
    return view('terms-condition');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';