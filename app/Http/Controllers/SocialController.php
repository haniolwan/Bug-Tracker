<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
        // $user = Socialite::driver('facebook')->user();
    }

    public function handleFacebookProviderCallback()
    {

        try {
            $user = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('status', 'fail');
        }

        $authUser = $this->findOrCreateFacebookUser($user);

        Auth::login($authUser, true);

        return redirect('/index')->with('status', 'Welcome back!');
    }
    //Find or Create Facebook User



    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('status', 'fail');
        }

        $authUser = $this->findOrCreateGoogleUser($user);

        Auth::login($authUser, true);

        return redirect('/index')->with('status', 'Welcome back!');
    }

    private function findOrCreateFacebookUser($facebookUser)
    {
        $authUser = User::where('fb_id', $facebookUser->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'fb_id' => $facebookUser->id,
        ]);
    }

    private function findOrCreateGoogleUser($googleUser)
    {
        $authUser = User::where('google_id', $googleUser->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'google_id' => $googleUser->id,
        ]);
    }
}
