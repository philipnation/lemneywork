<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Logistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogisticsController extends Controller
{
    public function index()
    {
        return view('user.logistics.logistics');
    }

    public function store(Request $request)
    {
        //dd($request->receipient_name);
        $logistics = new Logistics();
        $logistics->userid = Auth::user()->id;
        $logistics->sender_name = $request->sender_name;
        $logistics->sender_pickup_address = $request->sender_pickup_address;
        $logistics->sender_phone = $request->sender_phone;
        $logistics->pickup_date = $request->pickup_date;
        $logistics->receipient_name = $request->receipient_name;
        $logistics->receipient_state = $request->receipient_state;
        $logistics->receipient_pickup_address = $request->receipient_pickup_address;
        $logistics->receipient_lga = $request->receipient_lga;
        $logistics->receipient_phone = $request->receipient_phone;
        $logistics->goods_type = $request->goods_type;
        $logistics->delivery_type = $request->delivery_type;
        $logistics->description = $request->description;
        $logistics->date = date('Y-m-d');
        $logistics->status = 'pending';
        $logistics->save();

        return redirect()->route('user.logistics')->with('success', 'Your Logistics order has been placed successfully');
    }
}
