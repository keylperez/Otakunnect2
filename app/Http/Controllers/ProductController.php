<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request)
    {

    }
    public function add(Request $request){
        $attributes = $request->validate([
            'name' => 'required',
            'img' => 'required',
            'price' => 'required',
            'store_id' => 'required' //unnecessary since it will be sent through a hidden input
        ]);
        Product::create($attributes);
    }
    public function delete(Request $request, $id){
        DB::delete(
            "DELETE FROM product
            WHERE =='$id'");
    }
    public function update(Request $request, $id){
        
        Product::where()
        ->update();
    }

}
