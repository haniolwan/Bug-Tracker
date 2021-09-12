<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {

        $credentials = request()->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);


        $credentials['password'] = Hash::make($credentials['password']);

        auth()->login(User::create($credentials));

        return redirect('/index')->with('success', 'Your account has been successfully created.');
    }

    public function facebook()
    {
    }
    public function facebookRedirect()
    {
    }
}
