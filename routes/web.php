<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;

// use App\Models\Items;

Route::get('/', [ItemsController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/store/{id}', [ItemsController::class, 'storeItem'])->name('store');
Route::get('/stores', [ItemsController::class, 'allStore']);

Route::get('/category', [PreferenceController::class, 'index']);
Route::post('/category', [PreferenceController::class, 'add'])->name('pref.add');
Route::post('/category', [PreferenceController::class, 'delete'])->name('pref.del');

Route::get('/cart', [CartController::class, 'index'])->name('');
Route::get('/cart/{item}', [CartController::class, 'index'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.del');


// Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{item}', [ProductController::class, 'index'])->name('product');
Route::post('/product/add', [ProductController::class, 'add'])->name('product.add');
Route::post('/product/delete', [ProductController::class, 'delete'])->name('product.del');
Route::post('/product/update', [ProductController::class, 'update'])->name('product.update');

Route::get('/user', [UserController::class, 'index']);


Route::middleware('auth')->group(function () {
    Route::get('/contact', [ContactController::class, 'index']);
    Route::post('/contact', [ContactController::class, 'store']);

    Route::get('/users', function () {
        return Inertia::render('Users',  [
            'users' => User::all(),
            // 'access' => Auth::user()->auth_level,
            // 'users' => User::all(),
        ]);
    })->middleware('can:create,App\Models\User');

    Route::get('/user', [UserController::class, 'index']);
    Route::post('/user', [UserController::class, 'update']);
    Route::post('/user/upload', [UserController::class, 'upload']);

    Route::post('/logout', [LogoutController::class, 'store']);
});
