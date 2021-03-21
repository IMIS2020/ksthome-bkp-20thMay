<?php
namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\User;
use App\ModelScholarship\NursingScholarshipApplication;
use App\ModelScholarship\HhdlScholarshipApplication;

class UserProfileController extends Controller
{
    private $PATH = '/uploads/profilePhoto/';
    public function getUser()
    {
        $user = Auth::user();
        return view("welcome", compact('user'));

    //    $userFullName = $user->firstname.' '.$user->middlename.' '.$user->lastname;
    //    $userEmail= $user->email;
    //    $orgDate = substr($user->lastLoginTime,0,10);
    //    $newDate = date("d-m-Y", strtotime($orgDate));
    //    $time    = substr(explode('-',$user->lastLoginTime)[2],3);
    //    $newLastLoginTime  = $newDate.' '.$time;
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        if(!Storage::exists('public/'.$this->PATH))
        {
            Storage::makeDirectory('public/'.$this->PATH);
        }

        if($user->profilePhoto != null)
        {
            if (Storage::disk('local')->exists('public/'.$this->PATH.$user->profilePhoto)) 
            {
                Storage::delete('public/'.$this->PATH.$user->profilePhoto);
            }
        }
        $file = $request->file('profilePhoto');
        $filename = $file->getClientOriginalName();
        $newFilename = "profile-photo-". $filename;
        $path = $file->storeAs('public/'.$this->PATH, $newFilename );
        $user->profilePhoto =  $newFilename;
        $user->update();
        return redirect()->back();
      }

}
