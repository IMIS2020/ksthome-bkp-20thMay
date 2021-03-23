<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\ApplicantDetails;
use App\ModelGeneral\Address;
use App\User;
use App\ModelScholarship\NursingScholarshipApplication;
use App\ModelScholarship\HhdlScholarshipApplication;



class ApplicationController extends Controller
{
    public function getApplicantDetails()
    {
        $scholaship1 = NursingScholarshipApplication::all();
        $scholaship2 = HhdlScholarshipApplication::all();
        
        $data = [];
       
        foreach ($scholaship1 as $s) 
        {
            $aId = $s['applicantId'];
            $applicantDetails = ApplicantDetails::with('get_address')->where('id',$aId)->first();
            array_push($data,array($s,$applicantDetails));
        }

       
        foreach ($scholaship2 as $s) 
        {
            $aId = $s['applicantId'];
            $applicantDetails = ApplicantDetails::with('get_address')->where('id',$aId)->first();
            array_push($data,array($s,$applicantDetails));
        }
        return json_decode(json_encode($data));
    }

}
