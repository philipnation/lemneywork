<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        /*$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);*/


        try{

            if($request->password != $request->pconfirmation){
                return redirect()->back()->with('error', 'Password does not match');
            }

            $usersinfo = User::where('ipaddress', request()->ip())->count();
            if($usersinfo >= 1){
                return redirect()->back()->with('error', 'You have already registered an account on this device');
            }

            $user = User::create([
                'surname' => $request->surname,
                'firstname' => $request->firstname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
                'ipaddress' => request()->ip(),
            ]);

            event(new Registered($user));

            HomeController::mailer_send(
                $request->email,
                $request->firstname,
                'Registration Successful',
                "<p>Hi <strong>User</strong>,</p>
                    <p>We're excited to have you join us! At coinquesttrade, we committed to providing you with the best experience possible. Here's to exploring new opportunities and achieving your goals together.</p>
                    <p>To get started, click the button below to log into your account:</p>
                    <p><a href='https://coinquesttrade.com/login' class='btn'>Login to Your Account</a></p>
                    <p>If you have any questions or need assistance, feel free to reach out to our support team.</p>
                    <p>Welcome aboard!</p>
                    <p>Best regards,<br>The coinquesttrade Team</p>"
                );

            Auth::login($user);

            return redirect(route('dashboard', absolute: false));
            } catch (\Exception $e) {
                $userinfo = User::where('email', $request->email)->first();
                if($userinfo != null){
                    return redirect()->back()->with('error', 'Email already exist');
                }

                return redirect()->back()->with('error', 'An error occurred. Please try again later.');
            }
    }
}
