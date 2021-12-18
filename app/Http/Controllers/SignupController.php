<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function  store(Request $request)
    {
        $attributes = Request::validate([
            'name' => 'required',
            'username' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        User::create($attributes);

        return redirect()->back();
    }
}
