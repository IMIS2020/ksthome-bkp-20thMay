<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;
use Auth;
class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'new_password_confirm' => 'required|min:8',
        ]);

        $user = Auth::user();
        if (!(Hash::check($request->current_password, $user->password))) 
        {
            return redirect('/')->with('msgError','Your current password does not match!');
        }

        // if (strcmp($request->current_password,$request->new_password) === 0) 
        // {
        //     return redirect('/')->with('msgError','Current Password and New Password cannot be same !');
        // }

        if (strcmp($request->new_password,$request->new_password_confirm) !=0) 
        {
            return redirect('/')->with('msgError','The password and confirm password do not match !');
        }

       
        if  (User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]))
        {
            return redirect('/')->with('msg','Password changed successfully :)');
        }


       
        
    }

}