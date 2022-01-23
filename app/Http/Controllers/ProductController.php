<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index($item)
    {
        
        return Inertia::render('Product', [
            'item' => $item,
        ]);
    }
}
