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
            "SELECT SUM(c.item_count*p.price) AS total
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
    {
        $attributes = $request->validate([
            'user_id' => 'required',
            'item_count' => 'required',
            'product_id' => 'required'
        ]);

        $uid = $attributes['user_id'];
        $id = $attributes['product_id'];
        $query = DB::select("SELECT * FROM cart WHERE user_id='$uid' and product_id='$id' AND purchase_id is NULL");
        // $query = DB::table('cart')->select('*')
        // ->where('product_id', '=', $id)
        // ->where('user_id', '=', $uid)
        // ->whereNull('purchase_id')
        // ->get();
        // dd($query);
        if (!$query) {
            DB::table('cart')->insert($attributes);
        }
        return redirect()->back();
    }
    public function update(Request $request, $id, $count)
    {
        // dd($count);
        // if($count>0){
        DB::update(
            "UPDATE cart
                SET item_count='$count'
                WHERE cart_id='$id'"
        );
        // }
        return redirect()->back();
    }
    public function delete(Request $request, $id)
    {
        DB::delete(
            "DELETE FROM cart
            WHERE cart_id='$id'"
        );
        return redirect()->back();
    }
    public function purchase(Request $request, $price)
    {
        $uid = Auth::id();
        //create a purchase entry
        //update all in the cart to have a purchase_id
        DB::insert("INSERT INTO purchase(price, user_id) VALUES($price, $uid)");
        $id = DB::select("SELECT purchase_id FROM purchase WHERE price='$price' AND user_id='$uid' ORDER BY purchase_date desc Limit 1");
        // dd($id[0]->purchase_id);
        $id = $id[0]->purchase_id;
        DB::select(
            "UPDATE cart
            SET purchase_id='$id'
            WHERE user_id='$uid' AND purchase_id is NULL"
        );
        return redirect()->back();
    }
}
