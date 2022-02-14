<?php

namespace App\Http\Controllers;


class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Validate the request
        $attr = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // Attempt to authenticate and log in the user

        if (!auth()->attempt($attr)) {
            return back()->withErrors(['email' => 'Your provided credentials could not be verified']);
        }

        // Auth failed

        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
