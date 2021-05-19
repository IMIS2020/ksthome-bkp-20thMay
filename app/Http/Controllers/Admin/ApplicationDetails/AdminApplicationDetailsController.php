<?php

namespace App\Http\Controllers\Admin\ApplicationDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\ApplicationDetails;
use App\ModelGeneral\Address;
use App\User;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\ApplicationSession;
use App\ModelScholarship\ApplicationDocs;
use App\ModelScholarship\DocMaster;
use Illuminate\Support\Facades\Storage;
use App\Exports\ApplicationExport;
use Maatwebsite\Excel\Facades\Excel;
use Mail;
use App\Mail\ReturnedMail;

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

        $sortBy = $request->json()->all();
                $data = array();
                foreach ($sortBy as $key => $value) 
                {
                    foreach ($value as $k => $v) 
                    {
                        $data[$key][$k] = $v;
                    }
                }

                // $col1 = $data[0] != '' ?  $data[0]:1;
                // $col2 = $data[1] != '' ?  $data[1]:'asc';
                // $col2 = $data[0][2] != '' ?  $data[0][2]:1;
                // $ord2 = $data[0][3] != '' ?  $data[0][3]:'asc';
                // $col3 = $data[4] != '' ?  $data[4]:1;
                // $ord3 = $data[5] != '' ?  $data[5]:'asc';
                // $col3 = $data[6] != '' ?  $data[6]:1;
                // $ord3 = $data[7] != '' ?  $data[7]:'asc';

        // $var = 'scholarshipType';
        // $order = 'desc';

        // $col1   = $var;
        // $Order1 = $order;
        // $col2   = 1;
        // $Order2 = 'asc';
        // $col3   = 1;
        // $Order3 = 'asc';
        // $orderbyType2 = 1;
        // $orderbyOrder1 = 'desc';
        // $orderbyOrder2 = 'asc';
        
        // $orderByClause = [$orderbyType1,$orderbyOrder1];


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
                    // ->orderBy($col1,$ord1,$col2,$ord2,$col3,$ord3,$col4,$ord4)
                    // ->orderBy($col1,$ord1,$col2,$ord2,1,'asc',1,'asc')
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

         public function statusSaved(String $applicationId,Request $request)
         {
            
            $application = ApplicationDetails::where('schApplicationId', $applicationId)->first();  
            $sessionId   = $application->sessionId;   
            $appschData  =  ApplicationScheduleTable::where('sessionId',$sessionId)->first(); 
            $userEmailId = User::where('id',$application->userId)->first();  
            $data = array
            (
                'applicationNo'         => $application->appIdShow,
                'firstname'             => $application->applicantNameF,
                'scholarshipType'       => $application->scholarshipType,
                'reason1'               => $request->reason1,
                'reason2'               => $request->reason2,
                'reason3'               => $request->reason3,
                'contactPersonEmailId'  => $appschData->contactPersonEmailId,
                'contactPersonContactNo'=> $appschData->contactPersonContactNo

            );

            // $email = $application->applicantEmailId;
            $email = $userEmailId->email;
            $application->appStatus = 'Returned';
            $application->dateLastSubmitted = null;
            $application->update();
            Mail::to($email)->send(new ReturnedMail($data));
         }

         public function exportExcel()
         {
             return Excel::download(new ApplicationExport,'allApplications-' . date("d-m-Y") . '.xlsx');
         }


        //  public function sortBy(Request $request)
        //  {
        //         $sortBy = $request->json()->all();
        //         $data = array();
        //         foreach ($sortBy as $key => $value) 
        //         {
        //             foreach ($value as $k => $v) 
        //             {
        //                 $data[$key][$k] = $v;
        //             }
        //         }

                
        //        $col1 = $data[0] != ''   ?  $data[0]:1;
        //        $ord1 = $data[1] != ''   ?  $data[1]:'asc';

        //        $col2 = $data[2] != ''   ?  $data[2]:1;
        //        $ord2 = $data[3] != ''   ?  $data[3]:'asc';

        //        $col3 = $data[4] != ''   ?  $data[4]:1;
        //        $ord3 = $data[5] != ''   ?  $data[5]:'asc';

        //        $col3 = $data[6] != ''   ?  $data[6]:1;
        //        $ord3 = $data[7] != ''   ?  $data[7]:'asc';

               
        //  }
}
