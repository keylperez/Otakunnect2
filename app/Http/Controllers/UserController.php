<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('User');
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
