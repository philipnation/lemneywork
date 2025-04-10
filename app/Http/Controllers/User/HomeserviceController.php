<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Accountdetail;
use App\Models\Homeservice;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeserviceController extends Controller
{
    public function index()
    {
        $ongoings = Homeservice::where('userid', Auth::user()->id)
                        ->where('status', 'ongoing')
                        ->where('saved', null)
                        ->get();

                        //dd($ongoings);

        $completeds = Homeservice::where('userid', Auth::user()->id)
                                ->where('status', 'completed')
                                ->where('saved', null)
                                ->get();


        $cancelleds = Homeservice::where('userid', Auth::user()->id)
                                ->where('status', 'cancelled')
                                ->where('saved', null)
                                ->get();

        $services = Service::all();
        $accountdetails = Accountdetail::first();

        return view('user.homeservice', compact('ongoings', 'completeds', 'cancelleds', 'services', 'accountdetails'));
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
        $homeservice->price = $request->price;
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

    public function deletehoney(Request $request)
    {
        $homeservice = Homeservice::where('id', $request->id)->first();
        $homeservice->delete();

        return redirect()->route('user.homeservice')->with('success', 'Home service deleted successfully');
    }

    public function paymentupload(Request $request)
    {
        $homeservice = Homeservice::where('id', $request->id)->first();
        $homeservice->pay = 'pending';

        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('homeservicepayment'), $imageName);
            $homeservice->image = $imageName;
        }else{
            return redirect()->route('user.homeservice')->with('error', 'Payment receipt is missing.');
        }
        $homeservice->save();

        return redirect()->route('user.homeservice')->with('success', 'Payment uploaded successfully');
    }
}
