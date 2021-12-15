<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use DB;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = DB::select('SELECT p.product_id, p.name product_name, s.name store_name, p.img, p.price FROM product p INNER JOIN store s ON p.store_id = s.store_id');
        return Inertia::render('Home', [
            'items' => $items
        ]);
    }
}
