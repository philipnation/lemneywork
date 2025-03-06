<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function index(){
        return view('user.profile.index');
    }

    function edit(){
        return view('user.profile.profileedit');
    }

    function update(Request $request){

        $user = Auth::user();
        $user->firstname = $request->firstname;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return back()->with('success', 'Profile updated successfully');
    }

    function passwordedit(){
        return view('user.profile.passwordedit');
    }

    function passwordupdate(Request $request){
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = Auth::user();
        if (password_verify($request->oldpassword, $user->password)) {
            $user->password = bcrypt($request->password);
            $user->save();
            return back()->with('success', 'Password updated successfully');
        }else{
            return back()->with('error', 'Old password is incorrect');
        }
    }
}
