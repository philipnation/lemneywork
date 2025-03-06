<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Logistics;
use Illuminate\Http\Request;

class LogisticsController extends Controller
{

    function index(){
        if (!HomeController::isAdmin()) {
            return redirect('admin/login')->with('error', 'Session Closed');
        }

        $logistics = Logistics::where('status', '!=', 'completed')->orderByDesc('id')->get();

        $logistics_history = Logistics::where('status', 'completed')->get()->sortDesc();

        return view('admin.logistics', compact('logistics', 'logistics_history'));
    }

    function updatestatus(Request $request){
        $logistics = Logistics::where('id', $request->id)->first();

        $logistics->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.logistics')->with('success', 'Status Updated successfully');
    }
}
