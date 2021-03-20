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

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'profilePhoto' => ['required'],
        ]);

        if ($user) 
        {
            if(!Storage::exists('public/'.$this->PATH))
            {
                Storage::makeDirectory('public/'.$this->PATH);
            }

            if ($request->file('profilePhoto') == null) {
                $file = "";
            }else{
               $file = $request->file('profilePhoto')->store('profilePhoto', 'public');  
            }
            
                    
            // $request->file->store('profilePhoto', 'public');
            $user->profilePhoto = $request->file->hashName();
            $user->update();
            return redirect()->back();
           
           
        }else {
            return array('success' => false, 'msg'=>['user not found!']);
        }
    }

    // private function uploadFile($base64file, string $filename='')
    // {   
    //     if(!Storage::exists('public/'.$this->PATH)){
    //         Storage::makeDirectory('public/'.$this->PATH);
    //     }
        
    //     $File =  explode(',', $base64file);
    //     $file = base64_decode($File[1]);
    //     $extention = explode(';',explode('/',$File[0])[1])[0];

    //     if ($filename !== '') {
    //         $f = explode('.',$filename);
    //         if(count($f)===1) { $filename .= '.'.$extention; }
    //         $fileName = "profile-photo".'-'.$filename;
    //     } else {
    //         $fileName = time().'.'.$extention;
    //     }
    //         $path = storage_path('app/public/'.$this->PATH.$fileName);
    //         file_put_contents($path, $file);
    //         return $fileName;
    // }
}
