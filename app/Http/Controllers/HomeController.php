<?php

namespace App\Http\Controllers;

use App\Models\HouseListing;
use App\Models\User;
use App\Http\Controllers\MailsController;
use App\Models\Adminauth;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    function home(){
        $house_listings = HouseListing::where('status', 'approved')->get();
        foreach ($house_listings as $house_listing) {
            $images = json_decode($house_listing->images, true); // Decode JSON into an array
            $firstImage = $images[0] ?? null; // Get the first image or null if empty
            $house_listing->img = $firstImage;
            //dd($firstImage);
        }
        return view('welcome', compact('house_listings'));
    }

    public function index(){
        $userid = Auth::user()->id;
        $user = User::where('id', $userid)->first();

        if($user->email_verified_at == null){
            MailsController::sendcode();
            return View('auth.verify-email');
        }
        else{
            return redirect()->route('home');
        }

        //return View('dashboard', compact('inttransfers', 'internaltransfers'));
    }

    function ver(Request $request){
        $userid = Auth::user()->id;
        $user = User::where('id', $userid);
        $codeid = session('code.id');

        if($request->otp == $codeid){
            $user->update([
                'email_verified_at' => now()
            ]);
            //return View('dashboard');
            return redirect()->route('dashboard')->with('success', 'Google Login Successful');
        }
        else{
            return view('auth.verify-email', ['status' => 'error']);
        }
    }


    public static function isAdmin()
    {
        $admin = Adminauth::where('id', session('id'))->first();
        return $admin;
    }

    function sendcode(){
        $mail = new PHPMailer(true);

        Session::put('code', [
             'id' => rand(000000, 9999999)
         ]);

         $codeid = session('code.id');


        try {
            $user = Auth::user();
            // Server settings
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = env('MAIL_PORT');


            // Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($user->email, $user->name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Verification Code';
            $mail->Body    = "

            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Recycle Placed</title>
                <style>
                    /* Reset styles */
                    body, html {
                        margin: 0;
                        padding: 0;
                        font-family: Arial, sans-serif;
                        line-height: 1.6;
                    }
                    /* Container styles */
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #f7f7f7;
                        border-radius: 10px;
                    }
                    /* Header styles */
                    .header {
                        text-align: center;
                        padding-bottom: 20px;
                    }
                    .header img {
                        max-width: 100px;
                        height: auto;
                    }
                    /* Content styles */
                    .content {
                        padding: 20px;
                        background-color: #ffffff;
                        border-radius: 5px;
                    }
                    .content p{
                      font-size: 17px;
                    }
                    /* Footer styles */
                    .footer {
                        text-align: center;
                        padding-top: 20px;
                        color: #888888;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <!-- Header with company logo -->
                    <div class='header'>
                        <!--<img src='https://energychleen.com/assets/img/energy.png' alt='EnergyChleen Logo'>-->
                    </div>

                    <!-- Main content section -->
                    <div class='content'>
                        <h2>Verify your account</h2>

                        <p>Dear $user->name,</p>
                        <p>Your verification code is</p>
                        <div>
                        $codeid <br>
                        </div>
                        <p>If you did not make this request, contact us at support@lemney.com</p>
                    </div>

                    <!-- Footer section -->
                    <div class='footer'>
                        <p>© 2025 Lemney. All rights reserved.</p>
                    </div>
                </div>
            </body>
            </html>


            ";

            $mail->send();

            return view('auth.verify-email')->with('success', 'New code has been sent to your email.');
        } catch (Exception $e) {
            return response()->json(['message' => 'Email could not be sent. Mailer Error: '. $codeid . $mail->ErrorInfo], 500);
        }
    }


    function resetpassword(Request $request){
        $mail = new PHPMailer(true);

        Session::put('code', [
             'id' => rand(000000, 9999999)
         ]);

         $codeid = session('code.id');

        try {
            $user = User::where('email', $request->email)->first();

            if($user == null){
                return redirect()->back()->with('error', 'Invalid Email');
            }
            $confuse = $user->id;
            $link = "https://lemney.com/reset/passord/$confuse/$codeid";
            // Server settings
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = env('MAIL_PORT');


            // Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), 'Lemney');
            $mail->addAddress($user->email, $user->name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'OTP sent';
            $mail->Body    = "

            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Recycle Placed</title>
                <style>
                    /* Reset styles */
                    body, html {
                        margin: 0;
                        padding: 0;
                        font-family: Arial, sans-serif;
                        line-height: 1.6;
                    }
                    /* Container styles */
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #f7f7f7;
                        border-radius: 10px;
                    }
                    /* Header styles */
                    .header {
                        text-align: center;
                        padding-bottom: 20px;
                    }
                    .header img {
                        max-width: 100px;
                        height: auto;
                    }
                    /* Content styles */
                    .content {
                        padding: 20px;
                        background-color: #ffffff;
                        border-radius: 5px;
                    }
                    .content p{
                      font-size: 17px;
                    }
                    /* Footer styles */
                    .footer {
                        text-align: center;
                        padding-top: 20px;
                        color: #888888;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <!-- Header with company logo -->
                    <div class='header'>
                        <!--<img src='https://energychleen.com/assets/img/energy.png' alt='EnergyChleen Logo'>-->
                    </div>

                    <!-- Main content section -->
                    <div class='content'>
                        <h2>Verify your account</h2>

                        <p>Dear $user->name,</p>
                        <p>Your password rest link is:</p>
                        <div>
                        $link <br>
                        </div>
                        <p>If you did not make this request, contact us at admin@Lemney.com</p>
                    </div>

                    <!-- Footer section -->
                    <div class='footer'>
                        <p>© 2024 Lemney. All rights reserved.</p>
                    </div>
                </div>
            </body>
            </html>


            ";

            $mail->send();

            return view('auth.verify-email', ['status' => 'code-sent']);
        } catch (Exception $e) {
            //return response()->json(['message' => 'Email could not be sent. Mailer Error: '. $codeid . $mail->ErrorInfo], 500);
            return redirect()->back()->with('error', "An error occurred. Please try again later.$link");
        }
    }


    function changepassword(Request $request){
        $confuse = $request->confuse;

        $user = User::where('id', $confuse)->first();

        if($user == null){
            return Redirect::route('password.request')->with('error', 'Invalid Email');
        }
        $email = $user->email;
        $session = $request->session;
        $codeid = session('code.id');

        if($session == $codeid){
            return view('auth.reset-password', compact('email'));
        }
        else{
            return redirect()->back()->with('error', 'Invalid session');
        }
    }

    public static function adminauth(){
        // Check if the admin session exists
        if (session('admin.admin')) {
            return session('admin.admin');
        }
        else{
            return null;
        }
    }



    public static function mailer_send($email, $user, $subject, $message){

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = env('MAIL_PORT');

            // Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), 'Lemney');
            $mail->addAddress($email, $user);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = "

            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Recycle Placed</title>
                <style>
                    /* Reset styles */
                    body, html {
                        margin: 0;
                        padding: 0;
                        font-family: Arial, sans-serif;
                        line-height: 1.6;
                    }
                    /* Container styles */
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #f7f7f7;
                        border-radius: 10px;
                    }
                    /* Header styles */
                    .header {
                        text-align: center;
                        padding-bottom: 20px;
                    }
                    .header img {
                        max-width: 100px;
                        height: auto;
                    }
                    /* Content styles */
                    .content {
                        padding: 20px;
                        background-color: #ffffff;
                        border-radius: 5px;
                    }
                    .content p{
                      font-size: 17px;
                    }
                    /* Footer styles */
                    .footer {
                        text-align: center;
                        padding-top: 20px;
                        color: #888888;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <!-- Header with company logo -->
                    <div class='header'>
                        <!--<img src='https://energychleen.com/assets/img/energy.png' alt='EnergyChleen Logo'>-->
                    </div>

                    <!-- Main content section -->
                    <div class='content'>
                        $message
                    </div>

                    <!-- Footer section -->
                    <div class='footer'>
                        <p>© 2025 Lemney. All rights reserved.</p>
                    </div>
                </div>
            </body>
            </html>


            ";

            $mail->send();

            #return Redirect::route('exchange.exchange_receipt')->with('status', 'done_added');
        } catch (Exception $e) {
            return response()->json(['message' => 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo], 500);
        }
    }
}
