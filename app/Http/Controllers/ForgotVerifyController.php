<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\User;

class ForgotVerifyController extends Controller
{
    public function getForgotVerify(Request $request)
    {
        return view('forgotVerify');
    }

    public function postForgotVerify(Request $request)
    {
        $request->validate([  
            'password' =>['required'],
         ]);
        if($user=User::where('email', $request->email)->where('code',$request->code)->first()){
    
            $user->code=null;
            $user->password = Hash::make($request->password);
            $user->update();
            return redirect()->route('login')->with('message','Password updated successfully, please login to continue');
        }
        else{
            return back()->with('messageError','OTP is incorrect, please try again.');
        }
    }
    
}
