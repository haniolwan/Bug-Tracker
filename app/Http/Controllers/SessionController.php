<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }


    public function store()
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = request()->input('remember_me');
        if (!auth()->attempt($credentials, $remember)) {
            return redirect('/login')->with('status', 'failed_login');
        }

        session()->regenerate();

        return redirect('/index')->with('status', 'Welcome back!');
    }


    // Destroy Session
    public function destroy()
    {
        auth()->logout();

        return redirect('/login')->with('status', 'goodbye');
    }
}
