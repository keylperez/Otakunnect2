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
    // public function store(Request $request, $count, $id)
    {
        
        $attributes = $request->validate([
            'user_id' => 'required',
            'item_count' => 'required',
            'product_id' => 'required'
        ]);
        $check = $request->validate([
            'product_id' => 'required'
        ]);
        $query = DB::table('cart')->where('product_id', '=', $check)->get();
        if($query==NULL){
            DB::table('cart')->insert($attributes);
        } else{
            return Inertia::render('Product', ['error' => 'Already In Cart']);
        }
        return Inertia::render('Product');
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
