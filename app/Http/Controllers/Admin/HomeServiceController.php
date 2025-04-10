<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Homeservice;
use App\Models\Notificaton;
use App\Models\User;
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

    function updatestatus(Request $request){
        $logistics = Homeservice::where('id', $request->id)->first();

        $user = User::where('id', $logistics->userid)->first();

        $logistics->update([
            'status' => $request->status,
        ]);

        $homeservice = new Notificaton();
        $homeservice->userid = $logistics->userid;
        $homeservice->service = 'homeservice';
        $homeservice->serviceid = $logistics->id;
        $homeservice->title = "Homeservice order $request->status";
        $homeservice->message = "Dear $user->firstname, your Home Service order is $request->status";
        $homeservice->time = date('h:i a');
        $homeservice->date = date('Y-m-d');
        $homeservice->save();

        return redirect()->route('admin.homeservice')->with('success', 'Status Updated successfully');
    }

    public function updatepayment(Request $request)
    {
        $honey = Homeservice::where('id', $request->id)->first();
        $honey->pay = $request->status;
        $honey->save();

        return redirect()->route('admin.homeservice')->with('success', 'Payment status updated successfully');
    }
}
