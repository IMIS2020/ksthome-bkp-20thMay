<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;

class AdminCreateUsersController extends Controller
{
    public function createUsers(Request $request)
    {

      $request->validate([
        'firstname'                 => ['required'],
        'middlename'                => [],
        'lastname'                  => ['required'],
        'gender'                    => ['required'],
        'contactNo'                 => ['required'],
        'email'                     => ['required'],
        'password'                  => ['required'],
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

        $addUsers->intuId = "USER-".str_pad($presentId, 6, "0", STR_PAD_LEFT);
        $addUsers->firstname          = $request->firstname;
        $addUsers->middlename         = $request->middlename;
        $addUsers->lastname           = $request->lastname;
        $addUsers->gender             = $request->gender;
        $addUsers->contactNo          = $request->contactNo;
        $addUsers->email              = $request->email;
        $addUsers->password           = Hash::make($request->password);
        $addUsers->save();
    }

    public function getUsers()
    {
      $getInternalUsers = Admin::all();
      return $getInternalUsers;
    }

    public function getUsersById(string $userId)
    {

    }

    public function editUser(string $userId)
    {

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
