<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Homeservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeserviceController extends Controller
{
    public function index()
    {
        $ongoings = Homeservice::where('userid', Auth::user()->id)
                        ->where('status', 'ongoing')
                        ->where('saved', '!=', 'yes')
                        ->get();

        $completeds = Homeservice::where('userid', Auth::user()->id)
                                ->where('status', 'completed')
                                ->where('saved', '!=', 'yes')
                                ->get();

        $cancelleds = Homeservice::where('userid', Auth::user()->id)
                                ->where('status', 'cancelled')
                                ->where('saved', '!=', 'yes')
                                ->get();

        return view('user.homeservice', compact('ongoings', 'completeds', 'cancelleds'));
    }

    public function store(Request $request)
    {
        /*$request->validate([
            'service' => 'required',
            'address' => 'required',
            'date' => 'required',
            'time' => 'required',
            'phone' => 'required',
            'description' => 'required',
        ]);*/

        //dd($request->later);

        $homeservice = new Homeservice();
        $homeservice->orderno = "H_S".rand(100000, 999999);
        $homeservice->receipient_name = $request->fullname;
        $homeservice->receipient_state = $request->state;
        $homeservice->receipient_lga = $request->lga;
        $homeservice->service_location = $request->location;
        $homeservice->service = $request->service;
        $homeservice->phone = $request->phone;
        $homeservice->date = $request->date;
        $homeservice->time = $request->time;
        if($request->later){
            $homeservice->saved = 'yes';
        }
        $homeservice->userid = Auth::user()->id;
        $homeservice->status = 'ongoing';
        $homeservice->save();

        return redirect()->route('user.homeservice')->with('success', 'Your request has been submitted successfully.');
    }
}
