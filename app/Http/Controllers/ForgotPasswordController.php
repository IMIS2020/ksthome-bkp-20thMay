<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\SendCode;
use App\User;

class ForgotPasswordController extends Controller
{
  
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    public function showForgotPassword()
    {
        return view('forgotPassword');
    }

    public function postForgotPassword(Request $request)
    {
         $email = $request->email;
         if($email){
           $user = User::where('email',$email)->get();
            $user->code = SendCode::sendCodeForForgotPassword($email);
            return redirect()->route('forgot.verify')->with('msg','We have sent a code to your email - ' .$email);
        }
    }
}
