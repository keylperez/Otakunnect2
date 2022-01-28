<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $items = DB::table('purchase')
            ->select('purchase.*', 'users.user_id', 'users.name', 'users.email', 'users.phone', 'users.username')
            ->join('users',  'users.user_id', '=', 'purchase.user_id')
            ->where('purchase.user_id', '=',  Auth::id())
            ->get();
        // $items = DB::table('cart')
        //     ->select('cart.*', 'purchase.*')
        //     ->join('purchase', 'purchase.purchase_id', '=', 'cart.purcahse_id')
        //     ->where('cart.user_id', '=',  Auth::id())
        //     ->where('cart.purchase_id', '=',  'purchase.purchase_id')
        //     ->get();
        // $faves = DB::table('preference')
        //     ->select('*')
        //     ->where('user_id', '=',  Auth::id())
        //     ->get();

        // dd($items);

        return Inertia::render('User', ['items' => $items]);
        // }
        // return Inertia::render('User');
    }
    public function upload(Request $request)
    {
        // $val = $request->validate([
        //     'avatar' => 'required|image',
        // ]);

        // if ($val->fails()) {
        //     return redirect()->back()->with(['message' => 'No file received']);
        // } else {
        $image = $request->file('avatar')->store('products', 'public');
        Auth::user()->image = $image;
        return redirect()->back();
        // }
    }
}
