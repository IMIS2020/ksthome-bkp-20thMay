<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Auth;
use Validator;
use DB;

class AdminUserProfileController extends Controller
{
    public function getUserProfileDetails(String $userId)
    {
        $getProfileDetails = Admin::where('intuId',$userId)->get();
        return $getProfileDetails;
    }

    public function updatePassword(Request $request ,String $userId)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8',
            'newConfirmPassword' => 'required|min:8',
        ]);

        DB::beginTransaction();
        try{
                $user = Admin::where('intuId',$userId)->first();

                if (!Hash::check($request->currentPassword,$user->password)) 
                {
                    DB::rollBack();
                    return array('success' => false, 'msg'=>['Current password does not match!']);
                }else{

                if (strcmp($request->newPassword,$request->newConfirmPassword) != 0) 
                {
                    DB::rollBack();
                    return array('success' => false, 'msg'=>['The password and confirm password do not match !']);
                }

                $user->password = Hash::make($request->newPassword);
                $user->update();
                DB::commit();
                return array('success' => true, 'msg'=>['Password Updated']);

                }

        }
            
        catch(\Exception $e)
        {
            DB::rollBack();
            return array('success' => false, 'msg'=>[$e]);
        }

    }

    public function updateProfile(Request $request ,String $userId)
    {
        $request->validate([
            'firstname'  => ['required'],
            'middlename' => [],
            'lastname'   => ['required'],
            'contactNo'  => ['required'],  
            'email'      => ['required'], 
            'gender'     => ['required'], 
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

    // public function updateProfilePicture(Request $request)
    // {
    //     if (isset($request->profilePhoto))
    //      {
    //         $fileName = $this->uploadFile(storage_path('app/public/uploads/admin/profilePicture/'), $request->profilePhoto, $request->fileName);
    //      }
    //      else
    //      {
    //         $fileName = '';
    //      }
    // }

    # File Uploader
    // public function uploadFile(String $path, $base64file, String $filename='')
    // {   
    //     $File =  explode(',', $base64file);
    //     $file = base64_decode($File[1]);
    //     $extention = explode(';',explode('/',$File[0])[1])[0];

    //     if ($filename != '') {
    //         $fileName = 'admin-profile-picture'.'-'.$filename;
    //     } else {
    //         $fileName = 'admin-profile-picture'.'-'.$extention;
    //     }
    //     $path = $path.$fileName;
    //     file_put_contents($path, $file);
    //     return $fileName;
    // }

    #create DIR
    // public function createFolder()
    // {
    //      if(!Storage::exists('public/uploads/admin/profilePicture')){
    //          Storage::makeDirectory('public/uploads/admin/profilePicture');
    // }
  
}
