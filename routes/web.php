<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PreferredItemController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use Inertia\Inertia;
// use App\Models\Items;



Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/signup', function () {
    return Inertia::render('Signup');
});
Route::post('/signup', [SignupController::class, 'store']);


Route::get('/users', function () {
    return Inertia::render('Users',  [
        'users' => User::all(),
        'dauser' => Auth::user(),
    ]);
});
Route::middleware('auth')->group(function () {


    Route::get('/', [ItemsController::class, 'index']);



    // Route::post('/signup', function () {
    //     $attributes = Request::validate([
    //         'name' => 'required',
    //         'username' => 'required',
    //         'email' => ['required', 'email'],
    //         'password' => 'required',
    //     ]);

    //     User::create($attributes);

    //     return redirect('/users');
    // });


    // Route::get('/', function () {
    //     return Inertia::render('Home', ['items' => Items::all()]);
    // });

    // Route::get('/', [PreferredItemController::class, 'index']);


    Route::get('/store', [StoreController::class, 'index']);

    Route::get('/category', function () {
        return Inertia::render('Category');
    });

    Route::get('/contact', function () {
        return Inertia::render('Contact');
    });

    Route::post('/logout', function () {
        return Inertia::render('logout');
    });
});
