<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Accountdetail;
use App\Models\Honey;
use App\Models\HoneyPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HoneyController extends Controller
{
    public function index()
    {

        $ongoings = Honey::where('userid', Auth::user()->id)
                ->where('status', 'ongoing')
                ->where('saved', null)
                ->get();

                //dd($ongoings);

        $completeds = Honey::where('userid', Auth::user()->id)
                        ->where('status', 'completed')
                        ->where('saved', null)
                        ->get();


        $cancelleds = Honey::where('userid', Auth::user()->id)
                        ->where('status', 'cancelled')
                        ->where('saved', null)
                        ->get();

        $honey_prices = HoneyPrice::all();
        $accountdetails = Accountdetail::first();
        return view('user.honeyorder', compact( 'ongoings', 'completeds', 'cancelleds', 'honey_prices', 'accountdetails'));
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

    public function deletehoney(Request $request)
    {
        $honey = Honey::where('id', $request->id)->first();
        $honey->delete();

        return redirect()->route('user.honey')->with('success', 'Honey order deleted successfully');
    }

    public function paymentupload(Request $request)
    {
        $honey = Honey::where('id', $request->id)->first();
        $honey->pay = 'pending';

        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('honeypayment'), $imageName);
            $honey->image = $imageName;
        }else{
            return redirect()->route('user.homeservice')->with('error', 'Payment receipt is missing.');
        }
        $honey->save();

        return redirect()->route('user.honey')->with('success', 'Payment uploaded successfully');
    }
}
