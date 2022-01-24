<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request, $id)
    {
        $query = DB::select("SELECT p.product_id, p.name product_name, s.name store_name, s.store_id, p.img, p.price 
        FROM product p 
        INNER JOIN store s ON p.store_id = s.store_id 
        WHERE product_id='$id'");
        return Inertia::render('Product', [
            'item' => $query,
        ]);
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
