<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

Route::prefix('{locale?}')->middleware(['defaultLocale', 'checkLocale'])->group(function(){
    Route::get('/', [IndexController::class, 'index'])->name('view-index');
    
    Route::middleware(['guest'])->group(function(){
        Route::get('/login', [LoginController::class, 'index'])->name('view-login');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
        Route::get('/register', [RegisterController::class, 'index'])->name('view-register');
        Route::post('/register', [RegisterController::class, 'register'])->name('register');
    });

    Route::middleware(['auth'])->group(function(){
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

        Route::get('/home', [HomeController::class, 'index'])->name('view-home');
        Route::get('/profile', [ProfileController::class, 'index'])->name('view-profile');
        Route::post('/profile', [ProfileController::class, 'update'])->name('update-profile');

        Route::get('/home/{item}', [ItemController::class, 'index'])->name('view-item');
        Route::post('/home/{item}', [ItemController::class, 'buy'])->name('buy-item');

        Route::get('/cart', [CartController::class, 'index'])->name('view-cart');
        Route::post('/cart/{order}', [CartController::class, 'delete'])->name('delete-order');
        Route::post('/cart', [CartController::class, 'checkout'])->name('checkout');

        // Admin only
        Route::middleware(['adminOnly'])->group(function(){
            Route::get('/accounts', [UserController::class, 'index'])->name('view-accounts');
            Route::get('/accounts/{user}', [UserController::class, 'editRole'])->name('view-edit-role');
            Route::post('/accounts/{user}', [UserController::class, 'updateRole'])->name('update-role');
            Route::post('/accounts/delete/{user}', [UserController::class, 'delete'])->name('delete-account');
        });
    });
});