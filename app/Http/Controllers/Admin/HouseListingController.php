<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HouseListing;
use App\Models\Notificaton;
use App\Models\User;
use Illuminate\Http\Request;

class HouseListingController extends Controller
{
    function index(){
        $house_listings = HouseListing::where('status', 'pending')->get();

        foreach ($house_listings as $house_listing) {
            $images = json_decode($house_listing->images, true); // Decode JSON into an array
            $firstImage = $images[0] ?? null; // Get the first image or null if empty
            $house_listing->img = $firstImage;
            //dd($firstImage);
        }

        return view('admin.houselisting', compact('house_listings'));
    }

    function updatestatus(Request $request){
        $logistics = HouseListing::where('id', $request->id)->first();

        $user = User::where('id', $logistics->userid)->first();

        $logistics->update([
            'status' => 'approved',
        ]);

        $homeservice = new Notificaton();
        $homeservice->userid = $logistics->userid;
        $homeservice->service = 'house_listings';
        $homeservice->serviceid = $logistics->id;
        $homeservice->title = "House listing has been approved";
        $homeservice->message = "Dear $user->firstname, your house listing has been approved";
        $homeservice->time = date('h:i a');
        $homeservice->date = date('Y-m-d');
        $homeservice->save();

        return redirect()->route('admin.houselisting')->with('success', 'House has been successfully approved');
    }
}
