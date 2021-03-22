<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class VerifyController extends Controller
{
    public function getVerify(Request $request){
        if ($request->email) {
            return view('verify');
        }
        return back();
        
    }
    public function postVerify(Request $request)
    {
        if($user=User::where('email', $request->email)->where('code',$request->code)->first()){
            $user->active=true;
            $user->code=null;
            $user->save();
            return redirect()->route('welcomePage')->withMessage('Account verification successful, please login to continue');
        }
        else{
            return back()->with('messageError','OTP is incorrect, please try again.');
        }
    }
    
}