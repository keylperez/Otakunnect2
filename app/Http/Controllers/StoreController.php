<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function index()
    {
        $query = DB::select('SELECT * FROM store');
        return Inertia::render('Stores', ['items' => $query]);
    }
}
