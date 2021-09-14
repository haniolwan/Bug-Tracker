<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function createIdentify()
    {
        return view('sessions.password.password');
    }

    public function identifyUser(Request $request)
    {
        $email = $request->input('email');

        $authUser = User::where('email', $email)->first();

        if (!$authUser) {
            return redirect('/login/identify')->withInput()->with('status', 'failed_login');
        }

        return view('sessions.password.reset', ['user' => $authUser]);
    }

    public function createReset(Request $request)
    {
        return view('sessions.password.reset');
        // return $request()->all();


    }

    public function storeReset(Request $request)
    {
        // return $request->all();
    }
}
