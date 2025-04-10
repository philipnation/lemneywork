<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Honey;
use App\Models\Notificaton;
use App\Models\User;
use Illuminate\Http\Request;

class HoneyController extends Controller
{
    function index(){
        if (!HomeController::isAdmin()) {
            return redirect('admin/login')->with('error', 'Session Closed');
        }

        $honeys = Honey::where('saved', null)
                    ->where('status', '!=', 'completed')->orderByDesc('id')->get();

        $honey_history = Honey::where('status', 'completed')->get()->sortDesc();

        return view('admin.honey', compact('honeys', 'honey_history'));
    }

    function updatestatus(Request $request){
        $logistics = Honey::where('id', $request->id)->first();

        $user = User::where('id', $logistics->userid)->first();

        $logistics->update([
            'status' => $request->status,
        ]);

        $homeservice = new Notificaton();
        $homeservice->userid = $logistics->userid;
        $homeservice->service = 'honeyorders';
        $homeservice->serviceid = $logistics->id;
        $homeservice->title = "Honey order $request->status";
        $homeservice->message = "Dear $user->firstname, your honey order is $request->status";
        $homeservice->time = date('h:i a');
        $homeservice->date = date('Y-m-d');
        $homeservice->save();

        return redirect()->route('admin.honey')->with('success', 'Status Updated successfully');
    }

    public function updatepayment(Request $request)
    {
        $honey = Honey::where('id', $request->id)->first();
        $honey->pay = $request->status;
        $honey->save();

        return redirect()->route('admin.honey')->with('success', 'Payment status updated successfully');
    }
}
