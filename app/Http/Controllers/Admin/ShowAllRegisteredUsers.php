<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ShowAllRegisteredUsers extends Controller
{
    public function getRegisteredUsers()
    {
        $getRegisteredUsers = User::orderBy('id')->get();
        return $getRegisteredUsers;
    }

    public function filterData(Request $request)
    {
       
        $contactno   = $request->contactno;
        $email       = $request->email;
        $gender      = $request->gender;

       if(empty($email) && empty($contactno) && empty($gender))
       {
        $filter = User::orderBy('id')->get();
       }else{
        $filter = User::where("email",'LIKE',"%".$request['email']."%")
                      ->where("contactno",'LIKE',"%".$request['contactno']."%")
                      ->where('gender','LIKE',$request['gender'])
                      ->get()
                      ->toJson();
                }
              return $filter;
            }
}
