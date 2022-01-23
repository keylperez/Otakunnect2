<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $uid = Auth::id();
        $cart = DB::select(
            "SELECT c.cart_id, c.item_count, p.name, p.price
            FROM cart c
            INNER JOIN product p ON p.product_id=c.product_id
            WHERE user_id='$uid' AND purchase_id!='NULL'");
        $total = DB::select(
            "SELECT SUM(c.item_count*p.price)
            FROM cart c
            INNER JOIN product p ON p.product_id=c.product_id
            WHERE user_id='$uid' AND purchase_id!='NULL'");
        return Inertia::render('Cart', [
            'cart' => $cart,
            'total' => $total,
        ]);
    }

    public function add(Request $request, $count, $id){
        $uid = Auth::id();
        DB::insert(
            "INSERT INTO cart(user_id,item_count,product_id)
            VALUES('$uid','$count','$id')");
    }
    public function delete(Request $request, $id){
        DB::delete(
            "DELETE FROM cart
            WHERE cart_id=='$id'");
    }
}
