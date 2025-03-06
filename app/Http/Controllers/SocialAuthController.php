<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google Callback
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->email)->first();
            //dd($googleUser);
            $value = $googleUser->user;
            //dd($value['family_name']);

            if (!$user) {
                $user = User::create([
                    'surname' => $value['family_name'],
                    'firstname' => $value['given_name'],
                    'email' => $value['email'],
                    'password' => 'google',
                    'email_verified_at' => now(),
                ]);

                Auth::login($user);
                return redirect()->route('dashboard')->with('success', 'Google Login Successful');
            }
            else{
                Auth::login($user);
                return redirect()->route('dashboard')->with('success', 'Google Login Successful');
            }
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Google login failed');
        }
    }
}
