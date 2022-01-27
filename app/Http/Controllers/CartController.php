<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $uid = Auth::id();
        $cart = DB::table('cart')
            ->select('cart.*', 'product.*', 'store.store_id', 'store.name as store_name', 'store.desc as store_desc')
            ->join('product', 'product.product_id', '=',  'cart.product_id')
            ->join('store', 'store.store_id', '=',  'product.store_id')
            ->where('user_id', '=', $uid)
            ->where('purchase_id', '=', NULL)
            ->get();
        // $cart = DB::select(
        //     "SELECT c.cart_id, c.item_count, p.name, p.price, s.name store_name
        //     FROM cart c
        //     INNER JOIN product p ON p.product_id=c.product_id
        //     INNER JOIN store s ON p.store_id=s.store_id
        //     WHERE user_id='$uid' AND purchase_id is NULL"
        // );
        $total = DB::select(
            "SELECT SUM(c.item_count*p.price)
            FROM cart c
            INNER JOIN product p ON p.product_id=c.product_id
            WHERE user_id='$uid' AND purchase_id is NULL"
        );
        // dd($cart);
        return Inertia::render('Cart', [
            'cart' => $cart->map(function ($item) {
                return [
                    "cart_id" => $item->cart_id,
                    "user_id" => $item->user_id,
                    "item_count" => $item->item_count,
                    "product_id" => $item->product_id,
                    "purchase_id" => $item->purchase_id,
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
            }),
            'total' => $total,
        ]);
    }

    public function add(Request $request)
    // public function store(Request $request, $count, $id)
    {

        $attributes = $request->validate([
            'user_id' => 'required',
            'item_count' => 'required',
            'product_id' => 'required'
        ]);
        // $check = $request->validate([
        //     'product_id' => 'required'
        // ]);
        // dd($attributes['product_id']);
        $query = DB::table('cart')->select('*')->where('product_id', '=', $attributes['product_id'])->get();
        // dd($query);
        // if ($query == NULL) {
        // dd(DB::table('cart'));
        DB::table('cart')->insert($attributes);
        // } else {
        return redirect('/cart');
        // return Inertia::render('Product', ['error' => 'Already In Cart']);
        // }
        // return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        DB::delete(
            "DELETE FROM cart
            WHERE cart_id=='$id'"
        );
    }
    public function delete(Request $request, $id)
    {
        DB::delete(
            "DELETE FROM cart
            WHERE cart_id=='$id'"
        );
    }
}
