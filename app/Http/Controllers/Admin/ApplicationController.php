<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\ApplicantDetails;
use App\ModelGeneral\Address;
use App\ModelScholarship\NursingScholarshipApplication;


class ApplicationController extends Controller
{
    public function getApplicantDetails()
    {
    $scholaship = NursingScholarshipApplication::all();
    $data = [];
    foreach ($scholaship as $s) 
    {
    $aId = $s['applicantId'];
    $applicantDetails = ApplicantDetails::with('get_address')->where('id',$aId)->first();
    array_push($data,array($s,$applicantDetails));
    }
    return json_decode(json_encode($data));
    }
}
