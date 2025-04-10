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
    static function sendcode() {
        $mail = new PHPMailer(true);

        Session::put('code', [
            'id' => rand(100000, 999999)
        ]);

        $codeid = session('code.id');

        try {
            $user = Auth::user();

            // Mail server config
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = env('MAIL_PORT');

            // Email metadata
            $mail->setFrom('no-reply@lemney.com', 'Lemney Verification');
            $mail->addAddress($user->email, $user->name);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Your Lemney Verification Code';

            $mail->AltBody = "Hello $user->name,\n\nYour verification code is: $codeid\n\nIf you didn’t request this, please contact our support team.";

            $mail->Body = "
            <html>
            <head>
                <style>
                    body {
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                        background-color: #f9f9f9;
                        color: #333;
                        margin: 0;
                        padding: 20px;
                    }
                    .email-container {
                        max-width: 600px;
                        margin: auto;
                        background: #ffffff;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                    }
                    .header {
                        background-color: #000000;
                        color: white;
                        padding: 20px;
                        text-align: center;
                    }
                    .content {
                        padding: 30px;
                    }
                    .code-box {
                        font-size: 28px;
                        font-weight: bold;
                        background-color: #f0f0f0;
                        padding: 10px 20px;
                        text-align: center;
                        border-radius: 6px;
                        margin: 20px 0;
                        letter-spacing: 4px;
                        color: #222;
                    }
                    .footer {
                        text-align: center;
                        font-size: 13px;
                        color: #888;
                        padding: 20px;
                    }
                </style>
            </head>
            <body>
                <div class='email-container'>
                    <div class='header'>
                        <h2>Verify Your Lemney Account</h2>
                    </div>
                    <div class='content'>
                        <p>Hello <strong>{$user->name}</strong>,</p>
                        <p>Thank you for using Lemney. Please use the verification code below to verify your email address:</p>

                        <div class='code-box'>$codeid</div>

                        <p>This code will expire shortly. Do not share it with anyone.</p>

                        <p>If you did not request this, kindly contact us immediately at <a href='mailto:support@lemney.com'>support@lemney.com</a>.</p>
                    </div>
                    <div class='footer'>
                        &copy; " . date('Y') . " Lemney. All rights reserved.
                    </div>
                </div>
            </body>
            </html>";

            $mail->send();

            return view('auth.verify-email')->with('success', 'A new verification code has been sent to your email.');
        } catch (Exception $e) {
            return response()->json(['message' => 'Email could not be sent. Mailer Error: '. $mail->ErrorInfo], 500);
        }
    }
}
