<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Honey;
use App\Models\HouseListing;
use App\Models\Logistics;
use App\Models\Notificaton;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /*function index(){
        $notifications = Notificaton::where('userid', Auth::user()->id)->get()->sortDesc();
        return view('user.notification', compact('notifications'));
    }*/

    public function index(){
        $notifications = Notificaton::where('userid', Auth::user()->id)
                                    ->orderBy('created_at', 'desc')
                                    ->get();

        foreach ($notifications as $notification) {
            $notification->serviceDetails = $this->fetchServiceDetails($notification->service, $notification->serviceid);
        }

        return view('user.notification', compact('notifications'));
    }

    private function fetchServiceDetails($listingType, $serviceId)
    {
        switch ($listingType) {
            case 'house_listings':
                return HouseListing::find($serviceId);
            case 'honeyorders':
                return Honey::find($serviceId);
            case 'logistics':
                return Logistics::find($serviceId);
            default:
                return null;
        }
    }
}
