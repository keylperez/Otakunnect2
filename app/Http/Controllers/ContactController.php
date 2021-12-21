<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('Contact');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject' => 'required',
            'message' => 'required',
            'user_id' => 'required',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
