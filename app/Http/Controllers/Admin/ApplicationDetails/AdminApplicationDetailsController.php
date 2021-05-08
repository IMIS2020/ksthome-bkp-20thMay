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

class AdminApplicationDetailsController extends Controller
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
    
        $scholarshipType  =  $request->scholarshipType;
        $session          =  $request->session;
        $email            =  $request->email;
        $contactno        =  $request->contactno;
        $firstname        =  $request->firstname;
        $lastname         =  $request->lastname;
        $gender           =  $request->gender;
        $states           =  $request->states;
        $applicationType  =  $request->applicationType;
        $status           =  $request->status;


        if(empty($scholarshipType) && empty($session) && empty($email) &&empty($contactno) &&empty($firstname) &&empty($lastname) &&empty($gender) &&empty($states) &&empty($applicationType) &&empty($status))
        {
            $filter = ApplicationDetails::with('get_address')->orderBy('id', 'desc')->get()->toJson();
            }else{
            $filter = ApplicationDetails::with('get_address')
                    ->join('portalAddress', 'portalAddress.id', '=', 'applicationDetails.applicantAddressId')
                    ->with('get_applicationSession')->join('applicationSession', 'applicationSession.id', '=', 'applicationDetails.sessionId')
                    ->where("scholarshipType",'LIKE',$request['scholarshipType'])
                    ->where("sessionName",'LIKE',$request['session'])
                    ->where("applicantEmailId",'LIKE',"%".$request['email']."%")
                    ->where("applicantContactNoSelf",'LIKE',"%".$request['contactno']."%")
                    ->where("applicantNameF",'LIKE',"%".$request['firstname']."%")
                    ->where("applicantNameL",'LIKE',"%".$request['lastname']."%")
                    ->where('applicantGender','LIKE',$request['gender'])
                    ->where("addressState",'LIKE',$request['states'])
                    ->where("applicationType",'LIKE',$request['applicationType'])
                    ->where("appStatus",'LIKE',$request['status'])
                    ->get()
                    ->toJson();
                 } 
                return $filter;
         }


         public function getSession()
         {
             $getSessionDetails = ApplicationSession::orderBy('id')->get();
             return $getSessionDetails;
         }

         public function statusSaved(String $applicationId)
         {
          $application =   ApplicationDetails::where('schApplicationId', $applicationId)->first();

          $application->appStatus = 'Returned';
          $application->dateLastSubmitted = null;
          $application->update();

         }
}
