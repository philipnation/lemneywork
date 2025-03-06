<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Homeservice;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    function index(){
        if (!HomeController::isAdmin()) {
            return redirect('admin/login')->with('error', 'Session Closed');
        }

        $homeservices = Homeservice::all();

        return view('admin.homeservice', compact('homeservices'));
    }

    function homeupdate(Request $request){
        $homeserivce = Homeservice::where('id', $request->id)->first();

        $homeserivce->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.homeservice')->with('success', 'Status Updated successfully');
    }
}
