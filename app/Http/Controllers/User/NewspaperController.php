<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class NewspaperController extends Controller
{
    function store(Request $request){
        //dd($request->receipient_name);
        $newsppl = Newspaper::where('email', $request->email)->first();
        if($newsppl != null){
            return redirect()->back()->with('error', 'Your email alreay exist');
        }

        $logistics = new Newspaper();
        $logistics->email = $request->email;
        $logistics->status = 'active';
        $logistics->save();

        HomeController::mailer_send(
            $request->email,
            'User',
            'Newsletter subscription',
            "Thank you for subscribing to our newsletter! You' ll now receive the latest updates, exclusive offers, and important announcements straight to your inbox. Stay tuned!",
        );

        return redirect()->back()->with('success', 'Your email has been successfully added');
    }
}
