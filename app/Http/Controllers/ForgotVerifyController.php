<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class ForgotVerifyController extends Controller
{
    public function getForgotVerify(Request $request)
    {
        return view('forgotVerify');
    }

    public function postForgotVerify(Request $request)
    {
        if($user=User::where('email', $request->email)->where('code',$request->code)->first()){
            
    
            $request->validate([  
                'password' =>['required|confirmed|min:8'],
             ]);

            $user->code=null;
            $user->password = Hash::make($request->password);
            $user->update();
            return redirect()->route('login')->withMessage('Password updated successfully, please login to continue');
        }
        else{
            return back()->with('messageError','OTP is incorrect, please try again.');
        }
    }
    
}
