<?php

namespace App\Http\Controllers\Admin\ReviewNursing;

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
use App\ModelScholarship\NursingScholarshipApplication;

class ReviewNursingController extends Controller
{
    private $PATH = 'uploads/nursingScholarshipDocuments/';
    # Get Nursing Scholarship Application
    public function getNursingScholarshipApplication(string $applicationId)
    {
        $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();
        if ($nursingScholarshipApplication) {
            $applicantDetails = ApplicantDetails::where('id', $nursingScholarshipApplication->applicantId)->first();
            $applicantAddress = Address::where('id', $applicantDetails->applicantAddressId)->first();
            $applicantEducationDetails10 = ApplicantEducationDetails::where('applicantId', $applicantDetails->id)->where('examinationPassed', '10')->first();
            $applicantEducationDetails12 = ApplicantEducationDetails::where('applicantId', $applicantDetails->id)->where('examinationPassed', '12')->first();
            if ($nursingScholarshipApplication->hasAdmissionLetter == 'YES') {
                $instituteDetails = InstituteDetails::where('id', $nursingScholarshipApplication->instituteId)->first();
                $instituteAddress = Address::where('id', $instituteDetails->instituteAddressId)->first();
            }
            $applicantMiscellaneousDetails = ApplicantMiscellaneousDetails::where('applicantId', $applicantDetails->id)->orderBy('id','ASC')->get();

            $data = [];
            $data['created_at']                         = $nursingScholarshipApplication->created_at;
            $data['financialYear']                      = $nursingScholarshipApplication->financialYear;
            $data['applicationId']                      = $nursingScholarshipApplication->applicationId;
            $data['hasAdmissionLetter']                 = $nursingScholarshipApplication->hasAdmissionLetter;
            $data['status']                             = $nursingScholarshipApplication->status;
            $data['insCourse']                          = $nursingScholarshipApplication->instituteCourse;
            $data['recognizedByINC']                    = $nursingScholarshipApplication->recognizedByINC;
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

            $data['examinationLevel10']                 = $applicantEducationDetails10->examinationLevel;
            $data['examinationPassed10']                = $applicantEducationDetails10->examinationPassed;

            $data['universityBoardCouncil10']           = $applicantEducationDetails10->universityBoardCouncil;
            $data['mainSubjects10']                     = $applicantEducationDetails10->mainSubjects;
            $data['yearOfPassing10']                    = $applicantEducationDetails10->yearOfPassing;
            $data['percentage10']                       = $applicantEducationDetails10->percentage;
            $data['division10']                         = $applicantEducationDetails10->division;
            
            $data['examinationLevel12']                 = $applicantEducationDetails12->examinationLevel;  
            $data['examinationPassed12']                = $applicantEducationDetails12->examinationPassed;     
            $data['universityBoardCouncil12']           = $applicantEducationDetails12->universityBoardCouncil;
            $data['mainSubjects12']                     = $applicantEducationDetails12->mainSubjects;
            $data['yearOfPassing12']                    = $applicantEducationDetails12->yearOfPassing;
            $data['percentage12']                       = $applicantEducationDetails12->percentage;
            $data['division12']                         = $applicantEducationDetails12->division;
           
            $data['insName']                            = (isset($instituteDetails))?$instituteDetails->instituteName:'';
            $data['insAddressAddln1']                   = (isset($instituteAddress))?$instituteAddress->addressAddln1:'';
            $data['insAddressAddln2']                   = (isset($instituteAddress))?$instituteAddress->addressAddln2:'';
            $data['insAddressCity']                     = (isset($instituteAddress))?$instituteAddress->addressCity:'';
            $data['insAddressDistprov']                 = (isset($instituteAddress))?$instituteAddress->addressDistprov:'';
            $data['insAddressState']                    = (isset($instituteAddress))?$instituteAddress->addressState:'';
            $data['insAddressPinzip']                   = (isset($instituteAddress))?$instituteAddress->addressPinzip:'';
            $data['miscName1']                          = (count($applicantMiscellaneousDetails)>0)?$applicantMiscellaneousDetails[0]->name:null;
            $data['miscCourse1']                        = (count($applicantMiscellaneousDetails)>0)?$applicantMiscellaneousDetails[0]->course:null;
            $data['miscYear1']                          = (count($applicantMiscellaneousDetails)>0)?$applicantMiscellaneousDetails[0]->year:null;
            $data['miscName2']                          = (count($applicantMiscellaneousDetails)>1)?$applicantMiscellaneousDetails[1]->name:null;
            $data['miscCourse2']                        = (count($applicantMiscellaneousDetails)>1)?$applicantMiscellaneousDetails[1]->course:null;
            $data['miscYear2']                          = (count($applicantMiscellaneousDetails)>1)?$applicantMiscellaneousDetails[1]->year:null;
            $data['miscName3']                          = (count($applicantMiscellaneousDetails)>2)?$applicantMiscellaneousDetails[2]->name:null;
            $data['miscCourse3']                        = (count($applicantMiscellaneousDetails)>2)?$applicantMiscellaneousDetails[2]->course:null;
            $data['miscYear3']                          = (count($applicantMiscellaneousDetails)>2)?$applicantMiscellaneousDetails[2]->year:null;
            $data = json_decode(json_encode($data));
            return array('success' => true, 'msg'=>['Data Found!'], 'data'=>$data);
        } else {
            return array('success' => false, 'msg'=>['No Data Found!']);
        }
    }

    # Get AnnexureI
    public function getAnnexureI(string $applicationId)
    {
        $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();
        if ($nursingScholarshipApplication) {
            $annexureI = AnnexureI::where('applicantId',$nursingScholarshipApplication->applicantId)->first();

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

    # Get Documents
    public function getApplicantDocuments(string $applicationId)
    {
        $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();
        if ($nursingScholarshipApplication) {
            $applicantDocuments = ApplicantDocuments::where('applicantId',$nursingScholarshipApplication->applicantId)->first();

            $data['admissionLetter']    = ($applicantDocuments->admissionLetter)?Storage::url($this->PATH.$applicantDocuments->admissionLetter):'#';
            $data['annexureII']         = ($applicantDocuments->annexureII)?Storage::url($this->PATH.$applicantDocuments->annexureII):'#';
            $data['photograph']         = ($applicantDocuments->photograph)?Storage::url($this->PATH.$applicantDocuments->photograph):'#';
            $data['proofOfAge']         = ($applicantDocuments->proofOfAge)?Storage::url($this->PATH.$applicantDocuments->proofOfAge):'#';
            $data['markSheets10']       = ($applicantDocuments->markSheets10)?Storage::url($this->PATH.$applicantDocuments->markSheets10):'#';
            $data['markSheets12']       = ($applicantDocuments->markSheets12)?Storage::url($this->PATH.$applicantDocuments->markSheets12):'#';
            $data['leprosyCertificateSelf'] = ($applicantDocuments->leprosyCertificateSelf)?Storage::url($this->PATH.$applicantDocuments->leprosyCertificateSelf):'#';
            $data['leprosyCertificateMother'] = ($applicantDocuments->leprosyCertificateMother)?Storage::url($this->PATH.$applicantDocuments->leprosyCertificateMother):'#';
            $data['leprosyCertificateFather'] = ($applicantDocuments->leprosyCertificateFather)?Storage::url($this->PATH.$applicantDocuments->leprosyCertificateFather):'#';
            $data = json_decode(json_encode($data));
            return array('success' => true, 'msg'=>['Data Found!'], 'data'=>$data);
        } else {
            return array('success' => false, 'msg'=>['No Data Found!']);
        }
    }

    #comment and send mail
    public function addAndUpdateComments(string $applicationId, Request $request)
    {
        $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();
        if($nursingScholarshipApplication){
            $checkReview = ReviewTable::where('applicantId', $nursingScholarshipApplication->applicantId)->first();
            if($checkReview)
            {
                #update

                #admission Letter
                $checkReview->documentName = $request->admissionLetter;
                $checkReview->status       = $request->admissionLetterStatus;
                $checkReview->comments     = $request->admissionLettercomments;

                #annexureII
            

                #photograph

                #proofOfAge

                #markSheets10

                #markSheets12

                #leprosyCertificateSelf

                #leprosyCertificateMother

                #leprosyCertificateFather

            }else{
                #create
            }

        }else{
            return array('success' => false, 'msg'=>['No Data Found!']);
        }
    }

    
} 
