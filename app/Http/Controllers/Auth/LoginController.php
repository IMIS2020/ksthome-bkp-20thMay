<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\SendCode;
use App\User;
use Carbon\Carbon;
class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function resendOTP(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user->active === false)
        {
            $user->code=SendCode::sendCodeToMail($request->email);
            $user->update();
            return redirect('/verify?email='.$user->email)->with('messageSuccess','OTP sent to your registered mail !');
         }
          return redirect('/');
     }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if($this->hasTooManyLoginAttempts($request)){
            $this->fireLockoutResponse($request);
        }
         //-------------------

               if($this->guard()->validate($this->credentials($request))){
                $user=$this->guard()->getLastAttempted();
                if($user->active && $this->attemptLogin($request)){
                    $user->lastLoginTime = Carbon::now()->toDateTimeString();
                    $user->save();
                    return $this->sendLoginResponse($request);
                    
                }
              
               else{

                    if (!$user->code) {
                        $user->code=SendCode::sendCodeToMail($user->email);
                    }

                    $this->incrementLoginAttempts($request);
                    if($user->save()){
                    return redirect('/verify?email='.$user->email)->with('messageError','Please active your account before login!');
                    }
               }
            }
        //-----------
       $this->incrementLoginAttempts($request);
       return $this->sendFailedLoginResponse($request);
    }

    
}
