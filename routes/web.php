<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PreferredItemController;
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

// Route::get('/', function () {
//     return Inertia::render('App');
// });
Route::get('/', [ItemController::class, 'index']);

// Route::get('/', [PreferredItemController::class, 'index']);

Route::get('/login', function () {
    return Inertia::render('Login');
});
Route::get('/signup', function () {
    return Inertia::render('Signup');
});
Route::get('/store', function () {
    return Inertia::render('Stores');
});
Route::get('/category', function () {
    return Inertia::render('Category');
});
Route::get('/contact', function () {
    return Inertia::render('Contact');
});
Route::post('/logout', function () {
    return Inertia::render('logout');
});
