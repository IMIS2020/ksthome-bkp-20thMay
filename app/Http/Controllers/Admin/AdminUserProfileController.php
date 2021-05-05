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

}
