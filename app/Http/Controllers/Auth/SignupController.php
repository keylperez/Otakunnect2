<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    public function index()
    {
        return Inertia::render('Signup');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/');
    }
}
