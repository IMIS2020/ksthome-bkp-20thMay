<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\SendCode;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     protected $redirectTo = '/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
       {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return $this->registered($request,$user) ?: redirect('/verify?email='.$request->email);
     }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'middlename' => ['max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'contactno'=> ['required','max:10','unique:users'],
            'email' => ['required',  'email', 'max:255', 'unique:users'],
            'gender' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'contactno' => $data['contactno'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'active'=> 0,
            'password' => Hash::make($data['password']),
        ]);
        if($user){
            // $user->code=SendCode::sendCodeToPhone($user->phone);
            $user->code=SendCode::sendCodeToMail($user->email);
            $user->save();
            return redirect()->route('getverify')->with('msg','We have sent a verification code to your email - ' .$user->email);
        }
    }
}
