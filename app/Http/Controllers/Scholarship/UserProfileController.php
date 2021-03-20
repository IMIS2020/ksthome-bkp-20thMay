<?php
namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\ModelScholarship\NursingScholarshipApplication;
use App\ModelScholarship\HhdlScholarshipApplication;

class UserProfileController extends Controller
{
    public function getUser()
    {
        $user = Auth::user();
        return view("welcome", compact('user'));
         
        if ($user) 
        {
         $nursingScholarshipApplication = NursingScholarshipApplication::where('userId', $user->id)->first();
         $HHDLScholarshipApplication    = HhdlScholarshipApplication::where('userId', $user->id)->first();
         return view("welcome", compact('nursingScholarshipApplication','HHDLScholarshipApplication'));
        }

    //    $userFullName = $user->firstname.' '.$user->middlename.' '.$user->lastname;
    //    $userEmail= $user->email;
    //    $orgDate = substr($user->lastLoginTime,0,10);
    //    $newDate = date("d-m-Y", strtotime($orgDate));
    //    $time    = substr(explode('-',$user->lastLoginTime)[2],3);
    //    $newLastLoginTime  = $newDate.' '.$time;
    }

    public function updteProfile(Request $request)
    {
        $request->validate([
            'profilePhoto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $profilePhotoName = $request;
    }
}
