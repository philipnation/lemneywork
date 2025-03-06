<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Homeservice;
use App\Models\Honey;
use App\Models\HouseListing;
use App\Models\Logistics;
use App\Models\Partnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends Controller
{
    public function index()
    {
        $honeyhistory = Honey::where('userid', Auth::user()->id)->get();
        $logisticshistory = Logistics::where('userid', Auth::user()->id)->get();
        $homeservicehistory = Homeservice::where('userid', Auth::user()->id)->get();
        return view('user.orderhistory', compact('honeyhistory', 'logisticshistory', 'homeservicehistory'));
    }


    public function destroy(Request $request) {
        $models = [Honey::class, HouseListing::class, Homeservice::class, Logistics::class, Partnership::class];

        foreach ($models as $model) {
            $item = $model::find($request->id);
            if ($item) {
                $item->delete();
                return redirect()->back()->with('success', 'Order successfully cancelled.');
            }
        }

        return redirect()->back()->with('error', 'Item not found.');
    }
}
