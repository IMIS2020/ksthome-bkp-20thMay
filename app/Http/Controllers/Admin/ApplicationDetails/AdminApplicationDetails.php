<?php

namespace App\Http\Controllers\Admin\ApplicationDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\ApplicationDetails;
use App\ModelGeneral\Address;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\ApplicationSession;
use App\ModelScholarship\ApplicationDocs;
use App\ModelScholarship\DocMaster;
use Illuminate\Support\Facades\Storage;

class AdminApplicationDetails extends Controller
{

    public function getData()
    {
        // $getAllDataApplication = ApplicationDetails::all();

        $getAllDataApplication = ApplicationDetails::with('get_address')->orderBy('id', 'desc')->get()->toJson();
        return $getAllDataApplication;
    }


    public function getDocuments(string $applicationId)
    {
        $userId= ApplicationDetails::where('schApplicationId', $applicationId)->first()->userId;
        $getSession = ApplicationSession::where('id',1)->first()->sessionName;
        $getAppType = ApplicationDetails::where('schApplicationId', $applicationId)->first()->scholarshipType;
        $userFolderName= 'USR'.str_pad($userId, 6, "0", STR_PAD_LEFT);

        $getApplicationId = ApplicationDetails::where('schApplicationId', $applicationId)->first()->id;
        $getData = ApplicationDocs::where('applicationId', $getApplicationId)->with('get_docMaster')->orderBy('docMasterId','ASC')->get();

       

        foreach ($getData as $key => $value) {
            $fileName = $value['docFileName'];
            $url = Storage::url('uploads/scholarshipRecord/'.$userFolderName.'/'.$getSession.'/'.$getAppType.'/'.$fileName);
            $getData[$key]['fileURL'] = $url;
        }

        return $getData;
    }

    public function getApplicantDoc($shcName,$applicationId)
    {
        $userId= ApplicationDetails::where('schApplicationId', $applicationId)->first()->userId;
        $getSession = ApplicationSession::where('id',1)->first()->sessionName;
        $getAppType = ApplicationDetails::where('schApplicationId', $applicationId)->first()->scholarshipType;
        $userFolderName= 'USR'.str_pad($userId, 6, "0", STR_PAD_LEFT);

        $docDataObj = DocMaster::where('docShortName',$shcName)->first();
        $getApplicationId = ApplicationDetails::where('schApplicationId', $applicationId)->first()->id;
        $checkFg = ApplicationDocs::where('docMasterId',$docDataObj->id)->where('applicationId',$getApplicationId)->first();
        
        if($checkFg->docFileName){
            $url = Storage::url('uploads/scholarshipRecord/'.$userFolderName.'/'.$getSession.'/'.$getAppType.'/'.$checkFg->docFileName);
        }else{
            $url = "";
        }

        

        return $url;

    }

    // Review application 
        
    // End-Review application


    // Filter data

    public function filterData(Request $request)
    {
            $session         =  $request->session;
            $contactNo       =  $request->contactNo;
            $scholarshipType =  $request->scholarshipType;
            $emailId         =  $request->emailId;
            $firstName       =  $request->firstName;
            $state           =  $request->state;
            $lastName        =  $request->lastName;
            $district        =  $request->district;

        if(empty($session) && empty($contactNo) && empty($scholarshipType) &&empty($emailId) &&empty($firstName) &&empty($state) &&empty($lastName) &&empty($district))
        {
            $filter = ApplicationDetails::with('get_address')->orderBy('id', 'desc')->get()->toJson();
            }else{
            $filter = ApplicationDetails::with('get_address')
                    ->join('address', 'address.id', '=', 'applicantionDetails.applicantAddressId')
                    ->where('applicantionDetails.sessionId',$session)
                    ->orWhere('applicantionDetails.applicantContactNoSelf',$contactNo)
                    ->orWhere('applicantionDetails.scholarshipTypeValueId',$scholarshipType)
                    ->where('applicantionDetails.applicantEmailId',$emailId)
                    ->orWhere('applicantionDetails.applicantNameF',$firstName)
                    ->orWhere('applicantionDetails.get_address.addressState',$state)
                    ->where('applicantionDetails.applicantNameL',$lastName)
                    ->orWhere('applicantionDetails.get_address.addressDistprov',$district)
                    ->get()
                    ->toJson();
                 } 
                return $filter;
         }
}
