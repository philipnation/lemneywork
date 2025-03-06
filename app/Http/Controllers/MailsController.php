<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PHPMailer\PHPMailer\PHPMailer;

class MailsController extends Controller
{
    static function sendcode(){
        $mail = new PHPMailer(true);

        Session::put('code', [
             'id' => rand(000000, 999999)
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
                        <p>© 2024 wallsttradespro. All rights reserved.</p>
                    </div>
                </div>
            </body>
            </html>


            ";

            $mail->send();

            #return view('auth.verify-email')->with('success', 'New code has been sent to your email.');
            return Redirect::route('verification.notice')->with('success', 'OPT has been sent to your email.');
        } catch (Exception $e) {
            #return response()->json(['message' => 'Email could not be sent. Mailer Error: '. $codeid . $mail->ErrorInfo], 500);
            #return view('auth.verify-email')->with('success', 'New code has been sent to your email.');
            return Redirect::route('verification.notice')->with('error', 'Email could not be sent. Mailer Error: '. $codeid . $mail->ErrorInfo);
        }
    }
}
