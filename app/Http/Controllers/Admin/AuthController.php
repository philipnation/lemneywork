<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adminauth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function index(){
        return view('admin.login');
    }

    function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $admin = Adminauth::where('email', $email)
        ->where('password', $password)
        ->first();

        if(!$admin){
            return redirect()->route('admin.login')->with('error', 'Invalid logins');
        }
        elseif($admin->status == 'blocked'){
            return redirect()->route('admin.login')->with('error', 'Your account has been banned');
        }
        else{
            session(['id' => $admin->id]);
            return redirect()->route('admin.index')->with('success', 'Login successful');
        }
    }
}
