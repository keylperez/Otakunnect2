<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $uid = Auth::id();
        $cart = DB::select(
            "SELECT c.cart_id, c.item_count, p.name, p.price, s.name store_name
            FROM cart c
            INNER JOIN product p ON p.product_id=c.product_id
            INNER JOIN store s ON p.store_id=s.store_id
            WHERE user_id='$uid' AND purchase_id is NULL"
        );
        $total = DB::select(
            "SELECT SUM(c.item_count*p.price)
            FROM cart c
            INNER JOIN product p ON p.product_id=c.product_id
            WHERE user_id='$uid' AND purchase_id is NULL"
        );
        return Inertia::render('Cart', [
            'cart' => $cart,
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
        DB::table('cart')->insert($attributes);
        return Inertia::render('Home');
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
