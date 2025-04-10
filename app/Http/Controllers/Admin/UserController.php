<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if (!HomeController::isAdmin()) {
            return redirect('admin/login')->with('error', 'Session Closed');
        }

        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function edit(Request $request){
        $user = User::find($request->id);
        if ($user) {
            $user->update($request->all());
        }
        return redirect()->back()->with('success', 'User updated successfully.');
    }
}
