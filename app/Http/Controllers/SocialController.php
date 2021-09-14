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

    //Login Facebook 
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $authUser = $this->findOrCreateFacebookUser($user);


        if (!$authUser) {
            return redirect('/login')->with('status', 'failed_social_login');
        }
        Auth::login($authUser, true);

        return redirect('/index')->with('status', 'Welcome back!');
    }


    //Login Google
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        $authUser = $this->findOrCreateGoogleUser($user);
        if (!$authUser) {
            return redirect('/login')->with('status', 'failed_social_login');
        }

        Auth::login($authUser, true);

        return redirect('/index')->with('status', 'Welcome back!');
    }

    private function findOrCreateFacebookUser($facebookUser)
    {

        $authUser = User::where('fb_id', $facebookUser->id)->first();
        if ($authUser) {
            return $authUser;
        }
        try {
            $CreatedUser = User::create([
                'name' => $facebookUser->name,
                'email' => $facebookUser->email,
                'fb_id' => $facebookUser->id,
            ]);
        } catch (\Exception $e) {
            return redirect('/register')->with('status', 'fail');
        }

        return $CreatedUser;
    }


    private function findOrCreateGoogleUser($googleUser)
    {
        $authUser = User::where('google_id', $googleUser->id)->first();
        if ($authUser) {
            return $authUser;
        }
        try {
            $CreatedUser = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
            ]);
        } catch (\Exception $e) {
            return redirect('/register')->with('status', 'fail');
        }

        return $CreatedUser;
    }
}
