<?php
namespace App\Http\Controllers\Admin\ReviewHHDLSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\ModelGeneral\Address;
use App\ModelScholarship\InstituteDetails;
use App\ModelScholarship\ApplicantDetails;
use App\ModelScholarship\ApplicantEducationDetails;
use App\ModelScholarship\ApplicantMiscellaneousDetails;
use App\ModelScholarship\AnnexureI;
use App\ModelScholarship\ApplicantDocuments;
use App\ModelScholarship\HhdlScholarshipApplication;

class ReviewHHDLSSController extends Controller
{
    private $PATH = 'uploads/HHDLSSScholarshipDocuments/';
       # Get HHDLSS Scholarship Application
       public function getHHDLSSScholarshipApplication(string $applicationId)
       {
           $hhdlScholarshipApplication = HhdlScholarshipApplication::where('applicationId',$applicationId)->first();
           if ($hhdlScholarshipApplication) {
               $applicantDetails = ApplicantDetails::where('id', $hhdlScholarshipApplication->applicantId)->first();
               $applicantAddress = Address::where('id', $applicantDetails->applicantAddressId)->first();
   
               $applicantEducationDetails = ApplicantEducationDetails::where('applicantId', $applicantDetails->id)->orderBy('id','ASC')->get();
   
               $applicantEducationDetails1 = (count($applicantEducationDetails)>0)? $applicantEducationDetails[0] : null;
               $applicantEducationDetails2 = (count($applicantEducationDetails)>1)? $applicantEducationDetails[1] : null;
               $applicantEducationDetails3 = (count($applicantEducationDetails)>2)? $applicantEducationDetails[2] : null;
               
   
               if ($hhdlScholarshipApplication->hasAdmissionLetter == 'YES') {
                   $instituteDetails = InstituteDetails::where('id', $hhdlScholarshipApplication->instituteId)->first();
                   $instituteAddress = Address::where('id', $instituteDetails->instituteAddressId)->first();
               }
               
               $data = [];

               $data['created_at']                         = $hhdlScholarshipApplication->created_at;
               $data['financialYear']                      = $hhdlScholarshipApplication->financialYear;
               $data['applicationId']                      = $hhdlScholarshipApplication->applicationId;
               $data['hasAdmissionLetter']                 = $hhdlScholarshipApplication->hasAdmissionLetter;
               $data['status']                             = $hhdlScholarshipApplication->status;
               $data['insCourse']                          = $hhdlScholarshipApplication->instituteCourse;
               $data['recognizedByGI']                     = $hhdlScholarshipApplication->recognizedByGI;
   
               $data['applicantNameF']                     = $applicantDetails->applicantNameF;
               $data['applicantNameM']                     = $applicantDetails->applicantNameM;
               $data['applicantNameL']                     = $applicantDetails->applicantNameL;
               $data['applicantFatherName']                = $applicantDetails->applicantFatherName;
               $data['applicantMotherName']                = $applicantDetails->applicantMotherName;
               $data['applicantDOB']                       = $applicantDetails->applicantDOB;
               $data['applicantGender']                    = $applicantDetails->applicantGender;
               $data['applicantLeprosyAffectedSelf']       = $applicantDetails->applicantLeprosyAffectedSelf;
               $data['applicantLeprosyAffectedFather']     = $applicantDetails->applicantLeprosyAffectedFather;
               $data['applicantLeprosyAffectedMother']     = $applicantDetails->applicantLeprosyAffectedMother;
               $data['applicantHasBPLCard']                = $applicantDetails->applicantHasBPLCard;   
               $data['applicantDomicileState']             = $applicantDetails->applicantDomicileState;
               $data['applicantColonyLeaderName']          = $applicantDetails->applicantColonyLeaderName;
               $data['applicantContactNoSelf']             = $applicantDetails->applicantContactNoSelf;
               $data['applicantContactNoGuardian']         = $applicantDetails->applicantContactNoGuardian;
               $data['applicantEmailId']                   = $applicantDetails->applicantEmailId;
               $data['applicantContactNoColonyLeader']     = $applicantDetails->applicantContactNoColonyLeader;
               $data['addressAddln1']                      = $applicantAddress->addressAddln1;
               $data['addressAddln2']                      = $applicantAddress->addressAddln2;
               $data['addressCity']                        = $applicantAddress->addressCity;
               $data['addressDistprov']                    = $applicantAddress->addressDistprov;
               $data['addressState']                       = $applicantAddress->addressState;
               $data['addressPinzip']                      = $applicantAddress->addressPinzip;
               $data['addressCountry']                     = $applicantAddress->addressCountry;
               
               $data['insName']                            = (isset($instituteDetails))?$instituteDetails->instituteName:'';
               $data['insAddressAddln1']                   = (isset($instituteAddress))?$instituteAddress->addressAddln1:'';
               $data['insAddressAddln2']                   = (isset($instituteAddress))?$instituteAddress->addressAddln2:'';
               $data['insAddressCity']                     = (isset($instituteAddress))?$instituteAddress->addressCity:'';
               $data['insAddressDistprov']                 = (isset($instituteAddress))?$instituteAddress->addressDistprov:'';
               $data['insAddressState']                    = (isset($instituteAddress))?$instituteAddress->addressState:'';
               $data['insAddressPinzip']                   = (isset($instituteAddress))?$instituteAddress->addressPinzip:'';
   
               $data['education1ExaminationLevel']         =  json_decode(json_encode($applicantEducationDetails1),true)['examinationLevel'];
               $data['education1ExaminationPassed']        =  json_decode(json_encode($applicantEducationDetails1),true)['examinationPassed'];
               $data['education1University']               =  json_decode(json_encode($applicantEducationDetails1),true)['universityBoardCouncil'];
               $data['education1MainSubjects']             =  json_decode(json_encode($applicantEducationDetails1),true)['mainSubjects'];
               $data['education1YearOfPassing']            =  json_decode(json_encode($applicantEducationDetails1),true)['yearOfPassing'];
               $data['education1Percentage']               =  json_decode(json_encode($applicantEducationDetails1),true)['percentage'];
               $data['education1Division']                 =  json_decode(json_encode($applicantEducationDetails1),true)['division'] ; 
               
               $data['education2ExaminationLevel']         =  json_decode(json_encode($applicantEducationDetails2),true)['examinationLevel'];
               $data['education2ExaminationPassed']        =  json_decode(json_encode($applicantEducationDetails2),true)['examinationPassed'];
               $data['education2University']               =  json_decode(json_encode($applicantEducationDetails2),true)['universityBoardCouncil'];
               $data['education2MainSubjects']             =  json_decode(json_encode($applicantEducationDetails2),true)['mainSubjects'];
               $data['education2YearOfPassing']            =  json_decode(json_encode($applicantEducationDetails2),true)['yearOfPassing'];
               $data['education2Percentage']               =  json_decode(json_encode($applicantEducationDetails2),true)['percentage'];
               $data['education2Division']                 =  json_decode(json_encode($applicantEducationDetails2),true)['division'] ; 
   
               $data['education3ExaminationLevel']         =  json_decode(json_encode($applicantEducationDetails3),true)['examinationLevel'];
               $data['education3ExaminationPassed']        =  json_decode(json_encode($applicantEducationDetails3),true)['examinationPassed'];
               $data['education3University']               =  json_decode(json_encode($applicantEducationDetails3),true)['universityBoardCouncil'];
               $data['education3MainSubjects']             =  json_decode(json_encode($applicantEducationDetails3),true)['mainSubjects'];
               $data['education3YearOfPassing']            =  json_decode(json_encode($applicantEducationDetails3),true)['yearOfPassing'];
               $data['education3Percentage']               =  json_decode(json_encode($applicantEducationDetails3),true)['percentage'];
               $data['education3Division']                 =  json_decode(json_encode($applicantEducationDetails3),true)['division'] ; 
   
   
            
               $data = json_decode(json_encode($data));
               return array('success' => true, 'msg'=>['Data Found!'], 'data'=>$data);
           } else {
               return array('success' => false, 'msg'=>['No Data Found!']);
           }
       }

        # Get AnnexureI
        public function getAnnexureI(string $applicationId)
        {
            $HHDLSSScholarshipApplication = HhdlScholarshipApplication::where('applicationId', $applicationId)->first();
            if ($HHDLSSScholarshipApplication) {
                $annexureI = AnnexureI::where('applicantId',$HHDLSSScholarshipApplication->applicantId)->first();

                if ($annexureI) {
                    $instituteDetails1 = InstituteDetails::where('id', $annexureI->choice1)->first();
                    $instituteAddress1 = Address::where('id', $instituteDetails1->instituteAddressId)->first();
                    $instituteDetails2 = InstituteDetails::where('id', $annexureI->choice2)->first();
                    $instituteAddress2 = Address::where('id', $instituteDetails2->instituteAddressId)->first();
                    $instituteDetails3 = InstituteDetails::where('id', $annexureI->choice3)->first();
                    $instituteAddress3 = Address::where('id', $instituteDetails3->instituteAddressId)->first();

                    $data = [];

                    $data['choice1instituteName']       = $instituteDetails1->instituteName;
                    $data['choice1addressAddln1']       = $instituteAddress1->addressAddln1;
                    $data['choice1addressAddln2']       = $instituteAddress1->addressAddln2;
                    $data['choice1addressCity']         = $instituteAddress1->addressCity;
                    $data['choice1addressState']        = $instituteAddress1->addressState;
                    $data['choice1addressDistprov']     = $instituteAddress1->addressDistprov;
                    $data['choice1addressPinzip']       = $instituteAddress1->addressPinzip;
                    $data['choice2instituteName']       = $instituteDetails2->instituteName;
                    $data['choice2addressAddln1']       = $instituteAddress2->addressAddln1;
                    $data['choice2addressAddln2']       = $instituteAddress2->addressAddln2;
                    $data['choice2addressCity']         = $instituteAddress2->addressCity;
                    $data['choice2addressState']        = $instituteAddress2->addressState;
                    $data['choice2addressDistprov' ]    = $instituteAddress2->addressDistprov;
                    $data['choice2addressPinzip']       = $instituteAddress2->addressPinzip;
                    $data['choice3instituteName']       = $instituteDetails3->instituteName;
                    $data['choice3addressAddln1']       = $instituteAddress3->addressAddln1;
                    $data['choice3addressAddln2']       = $instituteAddress3->addressAddln2;
                    $data['choice3addressCity']         = $instituteAddress3->addressCity;
                    $data['choice3addressState']        = $instituteAddress3->addressState;
                    $data['choice3addressDistprov']     = $instituteAddress3->addressDistprov;
                    $data['choice3addressPinzip']       = $instituteAddress3->addressPinzip;

                    $data = json_decode(json_encode($data));
                    return array('success' => true, 'msg'=>['Data Found!'], 'data'=>$data);
                } else {
                    return array('success' => false, 'msg'=>['No Data Found!']);
                }
            } else {
                return array('success' => false, 'msg'=>['No Data Found!']);
            }
        }

        # Get ApplicationDocuments
       public function getApplicantDocuments(string $applicationId)
       {
           $HHDLSSScholarshipApplication = HhdlScholarshipApplication::where('applicationId', $applicationId)->first();
           if ($HHDLSSScholarshipApplication) {
               $applicantDocuments = ApplicantDocuments::where('applicantId',$HHDLSSScholarshipApplication->applicantId)->first();
   
               $data['admissionLetter']    = ($applicantDocuments->admissionLetter)?Storage::url($this->PATH.$applicantDocuments->admissionLetter):'#';
               $data['annexureII']         = ($applicantDocuments->annexureII)?Storage::url($this->PATH.$applicantDocuments->annexureII):'#';
               $data['photograph']         = ($applicantDocuments->photograph)?Storage::url($this->PATH.$applicantDocuments->photograph):'#';
               $data['proofOfAge']         = ($applicantDocuments->proofOfAge)?Storage::url($this->PATH.$applicantDocuments->proofOfAge):'#';
               $data['markSheets10']       = ($applicantDocuments->markSheets10)?Storage::url($this->PATH.$applicantDocuments->markSheets10):'#';
               $data['markSheets12']       = ($applicantDocuments->markSheets12)?Storage::url($this->PATH.$applicantDocuments->markSheets12):'#';
              
            $data['leprosyCertificateSelf']    = ($applicantDocuments->leprosyCertificateSelf)?Storage::url($this->PATH.$applicantDocuments->leprosyCertificateSelf):'#';
            $data['leprosyCertificateMother']  = ($applicantDocuments->leprosyCertificateMother)?Storage::url($this->PATH.$applicantDocuments->leprosyCertificateMother):'#';
            $data['leprosyCertificateFather']  = ($applicantDocuments->leprosyCertificateFather)?Storage::url($this->PATH.$applicantDocuments->leprosyCertificateFather):'#';
   
               $data = json_decode(json_encode($data));
               return array('success' => true, 'msg'=>['Data Found!'], 'data'=>$data);
           } else {
               return array('success' => false, 'msg'=>['No Data Found!']);
           }
       }
        

}
