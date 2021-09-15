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

    public function createRecoverPassword(Request $request)
    {
        $id = $request->id;
        $user = User::where('id', $id)->first();
        return view('sessions.password.code-recover', ['user' => $user]);
    }

    public function storeRecoverPassword(Request $request)
    {
        // return $request->all();
    }
}
