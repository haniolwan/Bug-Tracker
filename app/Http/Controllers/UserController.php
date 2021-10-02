<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use App\Models\User;

class UserController extends Controller
{

    public function profile(Request $request)
    {
        $user = User::findOrFail($request->id);
        return view('sessions.profile.profile', ['user' => $user]);
    }

    public function uploadAvatar(Request $request)
    {
        dd($request->id);
        if ($request->hasFile('avatar')) {
            $fileName = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('uploads', $fileName, 'public');
            $user = User::find($request->id)->update(['avatar' => $fileName]);
        }

        return redirect('profile', ['user' => $user]);
    }

    // public function getAvatarAttribute($value)
    // {
    //     return $value
    //         ? asset("uploads/avatar/{$value}")
    //         : asset('uploads/avatar/machine/default.png');
    // }
}
