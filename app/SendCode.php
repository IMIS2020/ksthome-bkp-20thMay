<?php
namespace App;
use Mail;
use App\Mail\registerMail;
use App\Mail\ResetPasswordMail;

class SendCode
{
    // public static function sendCodeToPhone($phone){
    //     $code=rand(111111,999999);
    //     $nexmo=app('Nexmo\Client');
    //     $nexmo->message()->send([
    //         'to'=>'+91'.(int) $phone,
    //         'from'=> '',
    //         'text'=>'Verify code: '.$code,
    //     ]);
    //     return $code;
    // }

    public static function sendCodeToMail($email)
    {
        $code=rand(111111,999999);
        Mail::to($email)->send(new registerMail($code));
        return $code;
    }

    // public static function sendCodeForForgotPassword($email)
    // {
    //     $code=rand(111111,999999);
    //     Mail::to($email)->send(new ResetPasswordMail($code));
    //     return $code;
    // }

    // public static function sendCodeToBoth($phone, $email){
    //     $code=rand(111111,999999);
    //     $nexmo=app('Nexmo\Client');
    //     $nexmo->message()->send([
    //         'to'=>'+91'.(int) $phone,
    //         'from'=> '',
    //         'text'=>'Verify code: '.$code,
    //     ]);
    //     Mail::to($email)->send(new registerMail($code));
    //     return $code;
    // }

}