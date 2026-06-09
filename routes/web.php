<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('home'));
Route::get('/about-us', fn () => view('about-us'));
Route::get('/shop', fn () => view('shop'));
Route::get('/blogs', fn () => view('blogs'));
Route::get('/cart', fn () => view('cart'));
Route::get('/contact-us', fn () => view('contact'));
Route::get('/privacy-policy', fn () => view('privacy-policy'));
Route::get('/refund-policy', fn () => view('refund-policy'));
Route::get('/terms-and-condition', fn () => view('terms-condition'));
Route::get('/checkout', fn () => view('checkout'));
Route::get('/product', fn () => view('product'));
Route::get('/my-account', fn () => view('account'));

/*
|--------------------------------------------------------------------------
| AUTH ROUTES (USER AREA)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'user.only'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (STRICT)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

    });

require __DIR__.'/auth.php';