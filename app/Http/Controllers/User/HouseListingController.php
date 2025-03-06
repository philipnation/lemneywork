<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\HouseListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HouseListingController extends Controller
{
    public function index()
    {
        return view('user.houselisting');
    }

    public function store(Request $request)
    {

        $houseListing = new HouseListing();
        $houseListing->userid = Auth::user()->id;
        $houseListing->description = $request->description;
        $houseListing->listing_type = $request->listing_type;
        $houseListing->property_name = $request->property_name;
        $houseListing->property_type = $request->property_type;
        $houseListing->property_condition = $request->property_condition;
        $houseListing->house_age = $request->house_age;
        $houseListing->size = $request->size;
        $houseListing->price = $request->price;
        $houseListing->no_of_bedrooms = $request->no_of_bedrooms;
        $houseListing->no_of_bathrooms = $request->no_of_bathrooms;
        $houseListing->parking_space = $request->parking_space;
        $houseListing->furnishing = $request->furnishing;
        $houseListing->negotiable = $request->negotiable;
        $houseListing->additional_description = $request->additional_description;
        $houseListing->location = $request->location;
        $houseListing->lga = $request->lga;
        $houseListing->state = $request->state;
        $houseListing->contact_name = $request->contact_name;
        $houseListing->contact_role = $request->contact_role;
        $houseListing->contact_phone = $request->contact_phone;
        if($request->later){
            $houseListing->saved = 'yes';
        }
        //$houseListing->profile_picture = $request->profile_image;


        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profile_image'), $imageName);
            $houseListing->profile_picture = $imageName;
        }else{
            return redirect()->route('user.houselisting')->with('error', 'Profile image is missing.');
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
                        $image->move(public_path('house_images'), $imageName);

                        // Store filename in array
                        $images_name[] = $imageName;
                    }
                }

                // Debugging Output
                //dd($images_name);
            }



            if (!empty($images_name)) { // Only save if images were uploaded
                $houseListing->images = json_encode($images_name);
                //$houseListing->save();
            } else {
                return redirect()->route('user.houselisting')->with('error', 'No valid images uploaded for house images.');
            }
        //$houseListing->status = $request->status;
        $houseListing->slug = "H_L".rand(10000, 99999);
        $houseListing->status = 'pending';
        $houseListing->save();

        return redirect()->route('user.houselisting')->with('success', 'House listing created successfully');
    }
}
