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
        // $query = DB::select("SELECT p.product_id, p.name product_name, s.name store_name, s.store_id, p.img, p.price, p.description 
        // FROM product p 
        // INNER JOIN store s ON p.store_id = s.store_id 
        // WHERE product_id='$id'");
        $query = DB::table('product')
            ->select('product.*', 'store.store_id', 'store.name as store_name', 'store.desc as store_desc')
            ->join('store', 'store.store_id', '=',  'product.store_id')
            ->where('product.product_id', '=', $id)
            ->get();
        // dd($query);
        return Inertia::render('Product', [
            'items' => $query->map(function ($item) {
                return [

                    "product_id" => $item->product_id,
                    "name" => $item->name,
                    "img" => asset('storage/' . $item->img),
                    "price" => $item->price,
                    "desc" => $item->desc,
                    "category_id" => $item->category_id,
                    "anime_id" => $item->anime_id,
                    "store_id" => $item->store_id,
                    "deleted" => $item->deleted,
                    "store_name" => $item->store_name,
                    "store_desc" => $item->store_desc,
                ];
            })
        ]);
    }
    public function add(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'img' => 'required',
            'price' => 'required',
            'store_id' => 'required' //unnecessary since it will be sent through a hidden input
        ]);
        Product::create($attributes);
        return Inertia::render('Home');
    }
    public function delete(Request $request, $id)
    {
        DB::delete(
            "DELETE FROM product
            WHERE =='$id'"
        );
    }
    public function update(Request $request, $id)
    {

        Product::where()
            ->update();
    }
}
