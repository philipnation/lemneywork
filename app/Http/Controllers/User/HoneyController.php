<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Honey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HoneyController extends Controller
{
    public function index()
    {
        $price = 100;
        return view('user.honeyorder', compact('price'));
    }

    public function store(Request $request)
    {

        $homeservice = new Honey();
        $homeservice->orderno = "HONEY_ORDER".rand(100000, 999999);
        $homeservice->receipient_name = $request->fullname;
        $homeservice->receipient_state = $request->state;
        $homeservice->receipient_pickup_address = $request->address;
        $homeservice->receipient_lga = $request->lga;
        $homeservice->phone = $request->phone;
        $homeservice->date = $request->date;
        $homeservice->quantity_type = $request->qtype;
        $homeservice->quantity = $request->quantity;
        $homeservice->price = $request->price*$request->quantity;
        $homeservice->payment = 'Transfer';
        $homeservice->userid = Auth::user()->id;
        $homeservice->date = date('Y-m-d');
        $homeservice->status = 'pending';
        if($request->later){
            $homeservice->saved = 'yes';
        }
        $homeservice->save();

        return redirect()->route('user.honey')->with('success', 'Your order has been placed successfully');
    }

    public function storehome(Request $request)
    {
        $user = Auth::user();

        $homeservice = new Honey();
        $homeservice->orderno = "HONEY_ORDER".rand(100000, 999999);
        $homeservice->receipient_name = "$user->firstname $user->surname";
        $homeservice->receipient_state = $user->address;
        $homeservice->receipient_pickup_address = $user->address;
        $homeservice->receipient_lga = $user->address;
        $homeservice->phone = $user->phone;
        $homeservice->date = date('Y-m-d');
        $homeservice->quantity_type = $request->option;
        $homeservice->quantity = $request->amount;
        $homeservice->price = $request->price*$request->amount;
        $homeservice->payment = 'Transfer';
        $homeservice->userid = Auth::user()->id;
        $homeservice->date = date('Y-m-d');
        $homeservice->status = 'pending';
        if($request->later){
            $homeservice->saved = 'yes';
        }
        $homeservice->save();

        return redirect()->route('user.honey')->with('success', 'Your order has been placed successfully');
    }
}
