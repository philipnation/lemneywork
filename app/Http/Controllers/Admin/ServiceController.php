<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accountdetail;
use App\Models\HoneyPrice;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $honeyprices = HoneyPrice::all();
        $accountdetails = Accountdetail::first();
        return view('admin.services', compact('services', 'honeyprices', 'accountdetails'));
    }

    public function store(Request $request)
    {

        Service::create($request->all());

        return redirect()->back()->with('success', 'Service created successfully.');
    }

    public function honeystore(Request $request)
    {

        HoneyPrice::create($request->all());

        return redirect()->back()->with('success', 'Service created successfully.');
    }

    public function accountupdate(Request $request)
    {
        $account = Accountdetail::first();
        if ($account) {
            $account->update($request->all());
        } /*else {
            Accountdetail::create($request->all());
        }*/

        return redirect()->back()->with('success', 'Account details updated successfully.');
    }

    public function serviceupdate(Request $request)
    {
        $service = Service::find($request->id);
        if ($service) {
            $service->update($request->all());
        }

        return redirect()->back()->with('success', 'Service updated successfully.');
    }

    public function honeyupdate(Request $request)
    {
        $honeyprice = HoneyPrice::find($request->id);
        if ($honeyprice) {
            $honeyprice->update($request->all());
        }

        return redirect()->back()->with('success', 'Honey price updated successfully.');
    }
    public function servicedestroy(Request $request)
    {
        $service = Service::find($request->id);
        if ($service) {
            $service->delete();
        }

        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
    public function honeydestroy(Request $request)
    {
        $honeyprice = HoneyPrice::find($request->id);
        if ($honeyprice) {
            $honeyprice->delete();
        }

        return redirect()->back()->with('success', 'Honey price deleted successfully.');
    }
}
