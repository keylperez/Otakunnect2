<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
// use App\Http\Controllers\PreferredItemController;
// use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\StoreController;
use App\Models\User;
// use App\Models\Items;
use App\Http\Controllers\ItemsController;


Route::get('/', [ItemsController::class, 'index']);

Route::get('/login', function () {
    return Inertia::render('Login');
});


Route::get('/signup', function () {
    return Inertia::render('Signup', [
        'users' => User::all(),
    ]);
});
Route::middleware('auth')->group(function () {


    Route::get('/users', function () {
        return Inertia::render('Users',  [
            'users' => User::all()
        ]);
    });
    // Route::get('/', function () {
    //     return Inertia::render('Home', ['items' => Items::all()]);
    // });

    // Route::get('/', [PreferredItemController::class, 'index']);

    Route::post('/signup', function () {
        $attributes = Request::validate([
            'name' => 'required',
            'username' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        User::create($attributes);

        return redirect('/users');
    });
    // Route::post('/signup', [SignupController::class, 'store']);

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
