<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use DB;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $query = DB::select('SELECT * FROM store');
        return Inertia::render('Stores', ['items' => $query]);
    }
}
