<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Homeservice;
use App\Models\Honey;
use App\Models\Logistics;
use App\Models\User;
use App\Models\WebsiteVisits;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (!HomeController::isAdmin()) {
            return redirect('admin/login')->with('error', 'Session Closed');
        }

        $honey_total = Honey::where('status', 'completed')->count();
        $logistics_total = Logistics::where('status', 'completed')->count();
        $homeservice_total = Homeservice::where('status', 'completed')->count();
        $users_total = User::all()->count();
        $visits = WebsiteVisits::where('visit_time', date('Y-m-d'))->count();

        $homeservices = Homeservice::where('status', 'ongoing')->get()->sortByDesc('created_at');


        $total = $logistics_total + $homeservice_total + $honey_total;

$logisticsPercent = round(($logistics_total / $total) * 100, 2);
$homePercent = round(($homeservice_total / $total) * 100, 2);
$honeyPercent = round(($honey_total / $total) * 100, 2);

// Optional: Adjust for rounding error so they sum exactly to 100
$sum = $logisticsPercent + $homePercent + $honeyPercent;
$diff = 100 - $sum;

if ($diff !== 0) {
    // Adjust the largest one to absorb rounding difference
    $max = max($logisticsPercent, $homePercent, $honeyPercent);
    if ($max === $logisticsPercent) {
        $logisticsPercent += $diff;
    } elseif ($max === $homePercent) {
        $homePercent += $diff;
    } else {
        $honeyPercent += $diff;
    }
}

        return view('admin.index', compact('homeservices', 'honey_total', 'logistics_total', 'homeservice_total', 'users_total', 'visits', 'logisticsPercent', 'homePercent', 'honeyPercent'));
    }
}
