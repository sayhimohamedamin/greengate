<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('public.contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send email (configure later)
        // Mail::to('admin@greengate.com')->send(new \App\Mail\ContactForm($validated));

        return redirect()->route('contact.index')->with('success', 'Your message has been sent!');
    }
}