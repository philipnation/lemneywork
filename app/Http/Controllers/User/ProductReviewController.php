<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    function index(){
        $reviews = ProductReview::where('userid', Auth::user()->id)->get()->sortDesc();
        return view('user.productreview', compact('reviews'));
    }

    public function destroy(Request $request) {
        $item = ProductReview::find($request->id);
        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'Review successfully deleted.');
        }
        return redirect()->back()->with('error', 'Item not found.');
    }

    function store(Request $request){
        //dd($request->receipient_name);
        /*$newsppl = ProductReview::where('email', $request->email)->first();
        if($newsppl != null){
            return redirect()->back()->with('error', 'Your email alreay exist');
        }*/

        $logistics = new ProductReview();
        $logistics->email = $request->email;
        $logistics->userid = Auth::user()->id;
        $logistics->comment = $request->comment;
        $logistics->rating = $request->rating;
        $logistics->name = Auth::user()->firstname .' '. Auth::user()->surname;
        $logistics->status = 'pending';
        $logistics->save();

        HomeController::mailer_send(
            $request->email,
            'User',
            'Product review pending',
            "Thank you for review to our services! We'll notify you once it is approved.",
        );

        return redirect()->back()->with('success', 'Product review has been successfully added');
    }
}
