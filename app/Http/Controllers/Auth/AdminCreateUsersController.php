<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;
use Mail;
use App\Mail\InternalUsersCreateMail;

class AdminCreateUsersController extends Controller
{

  public function random_strings($length_of_string) 
    { 
        // String of all alphanumeric character 
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    
        // Shufle the $str_result and returns substring 
        // of specified length 
        return substr(str_shuffle($str_result), 0, $length_of_string); 
    } 
    public function createUsers(Request $request)
    {

      $request->validate([
        'firstname'                 => ['required'],
        'middlename'                => [],
        'lastname'                  => ['required'],
        'gender'                    => ['required'],
        'contactNo'                 => ['required'],
        'email'                     => ['required'],
        ]);

        $addUsers = new Admin; 
        $lastId = 0;
        $getId = DB::table('admins')->orderBy('id', 'DESC')->first();
        if(empty($getId)){$lastId = 0;}
        else
        {
          $lastId = intval(explode('-',$getId->intuId)[1]);//"SU-000001";
        }
        $presentId = $lastId+1; //new id for user

        //internal users credentials
        $email    = $request->email;
        $password = $this->random_strings(10);
        
        $addUsers->intuId = "USER-".str_pad($presentId, 6, "0", STR_PAD_LEFT);
        $addUsers->firstname          = $request->firstname;
        $addUsers->middlename         = $request->middlename;
        $addUsers->lastname           = $request->lastname;
        $addUsers->gender             = $request->gender;
        $addUsers->contactNo          = $request->contactNo;
        $addUsers->email              = $email;
        $addUsers->password           = Hash::make($password);
        $addUsers->save();
        Mail::to($email)->send(new InternalUsersCreateMail($email,$password,$request->firstname));
    }

    public function getUsers()
    {
      $getInternalUsers = Admin::orderBy('id')->get();
      return $getInternalUsers;
    }

    public function getUsersById(String $userId)
    {
        $getUsersById = Admin::where('intuId',$userId)->get()->toJson();
        return $getUsersById;
    }

    public function editUsers(String $userId , Request $request)
    {

      $request->validate([
        'firstname'                 => ['required'],
        'middlename'                => [],
        'lastname'                  => ['required'],
        'gender'                    => ['required'],
        'contactNo'                 => ['required'],
        'email'                     => ['required'],
      ]);

        $editUser = Admin::where('intuId',$userId)->first();
        $editUser->firstname  = $request->firstname;
        $editUser->middlename = $request->middlename;
        $editUser->lastname   = $request->lastname;
        $editUser->gender     = $request->gender;
        $editUser->contactNo  = $request->contactNo;
        $editUser->email      = $request->email;
        $editUser->update();
    }

    public function deleteUsers(string $userId)
    {
      $deleteUser = Admin::where('intuId',$userId)->delete();
      return $deleteUser;
    }

    public function toggleStatus(String $userId)
    {
        $editUser = Admin::where('intuId',$userId)->first();
        $editUser->status = ($editUser->status == true)? 0 : 1;
        $editUser->update();
    }

    public function filterData(Request $request)
    {
        $userId      = $request->userId;
        $contactNo   = $request->contactNo;
        $email       = $request->email;

       if(empty( $userId) && empty($contactNo) && empty($email))
       {
        $filter = Admin::all();
       }else{
        $filter = Admin::where('admins.intuId',$userId)
                  ->orWhere('admins.contactNo',$contactNo)
                  ->orWhere('admins.email',$email)
                  ->get()
                  ->toJson();
                }
              return $filter;
              }
}
