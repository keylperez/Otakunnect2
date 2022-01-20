<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;

// use App\Models\Items;


Route::get('/', [ItemsController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/store', [ItemsController::class, 'storeItem']);
Route::get('/stores', [ItemsController::class, 'allStore']);

Route::get('/category', function () {
    return Inertia::render('Category');
});

Route::get('/product', function () {
    return Inertia::render('Product');
});

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

    Route::post('/logout', [LogoutController::class, 'store']);
});
