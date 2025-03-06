<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnershipController extends Controller
{
    function index(){
        return view('user.partnership');
    }

    public function store(Request $request)
    {

        $houseListing = new Partnership();
        $houseListing->userid = Auth::user()->id;
        $houseListing->surname = $request->surname;
        $houseListing->listing_type = $request->firstname;
        $houseListing->middle_name = $request->middlename;
        $houseListing->business_name = $request->business_name;
        $houseListing->business_type = $request->business_type;
        $houseListing->business_address = $request->business_address;
        $houseListing->working_days = json_encode($request->working_days);
        $houseListing->additional_description = $request->additional_information;
        $houseListing->working_location = $request->preferred_working_location;
        $houseListing->lga = $request->lga;
        $houseListing->state = $request->state;
        $houseListing->email = $request->email;
        $houseListing->years_of_experience = $request->years_of_experience;
        $houseListing->phone_number = $request->phone;
        if($request->later){
            $houseListing->saved = 'yes';
        }


        if ($request->hasFile('house_images')) {
            $images_name = []; // Initialize an empty array

            // Ensure house_images is an array of files
            $files = $request->file('house_images');

            if (!is_array($files)) {
                $files = [$files]; // Convert to array if it's a single file
            }

            foreach ($files as $image) {
                if ($image->isValid()) { // Ensure file is valid
                    // Generate a unique filename
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                    // Move the file to public/house_images directory
                    $image->move(public_path('partnership_images'), $imageName);

                    // Store filename in array
                    $images_name[] = $imageName;
                }
            }

            // Debugging Output
            //dd($images_name);
        }



        if (!empty($images_name)) { // Only save if images were uploaded
            $houseListing->image = json_encode($images_name);
            //$houseListing->save();
        } else {
            return redirect()->route('user.partnership')->with('error', 'No valid images uploaded for house images.');
        }

        $houseListing->status = 'pending';
        $houseListing->save();

        return redirect()->route('user.partnership')->with('success', 'Partnership created successfully');
    }
}
