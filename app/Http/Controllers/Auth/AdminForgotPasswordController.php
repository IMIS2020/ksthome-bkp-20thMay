<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Auth;
use Mail;
use Session;
use App\Admin;
use Carbon\Carbon;
use App\Mail\ResetPasswordMail;


class AdminForgotPasswordController extends Controller
{
    
    public function showForgotForm()
    {
       return view('admin.auth.resetEmailSend');
    }


    public function sendResetCodeMail(Request $request)
    {
      $email = $request->email;
      if (Admin::where('email',$email)->first()) 
      {
            $code  = mt_rand(111111,999999);
            
         DB::table('password_resets')->insert([
            'email' => $email, 
            'token' => $code, 
            'created_at' => Carbon::now()
         ]);
         Mail::to($email)->send(new ResetPasswordMail($code));
         // return redirect('/admin/change-password')->with('status','OTP sent successfully')->with('email',$email);
         session()->put('status','OTP sent successfully');
         return view('admin.auth.changePassword',["email"=>$email])->with('status','OTP sent successfully');
      }else{
         return redirect('/admin/reset-password')->with('statusError','The Email address do not match with our record !');
      }
    }


    public function showChangePasswordForm()
    {
      return view('admin.auth.changePassword');
    }


    public function updateAdminPassword(Request $request)
    {
      $request->validate([  
         'password' => 'required|string|min:8|confirmed',
         'password_confirmation' => 'required',
        
      ]);

      if($user = DB::table('password_resets')->where('email', $request->email)->where('token',$request->code)->first()){

         DB::table('admins')->where('email', $user->email)
                            ->update(['password' => Hash::make($request->password)]);
         return redirect()->route('admin.login')->with('message','Password changed successfully');
      }

      else{
         return redirect('/admin/change-password')->with('statusError','incorrect OTP !');
         }

    }
}
