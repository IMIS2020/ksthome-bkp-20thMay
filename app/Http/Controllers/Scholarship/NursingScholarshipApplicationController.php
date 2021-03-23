<?php
namespace App\Http\Controllers\Scholarship;

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

class NursingScholarshipApplicationController extends Controller
{
    private $PATH = 'uploads/nursingScholarshipDocuments/';

    # Get Nursing Scholarship Application
    public function getNursingScholarshipApplication(int $userId)
    {
        $nursingScholarshipApplication = NursingScholarshipApplication::where('userId', $userId)->first();
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
    # Get Nursing Scholarship ApplicationId
    public function getNursingScholarshipApplicationId(string $applicationId)
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

    # Get ApplicationDocuments
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

    # Add Nursing Scholarship Application
    public function addNursingScholarshipApplication(int $userId, Request $request)
    {
        $request->validate([  
            'applicantNameF'                    => [],                
            'applicantNameM'                    => [],
            'applicantNameL'                    => [],
            'applicantFatherName'               => [],
            'applicantMotherName'               => [],
            'applicantDOB'                      => ['required'],
            'applicantGender'                   => ['required'],
            'applicantLeprosyAffectedSelf'      => [],
            'applicantLeprosyAffectedFather'    => [],
            'applicantLeprosyAffectedMother'    => [],
            'applicantHasBPLCard'               => ['required'],
            'applicantDomicileState'            => ['required'],
            
            'addressAddln1'                     => ['required'],
            'addressAddln2'                     => [],
            'addressCity'                       => [],
            'addressDistprov'                   => [],
            'addressState'                      => ['required'],
            'addressPinzip'                     => ['required','digits:6'],
            'applicantContactNoSelf'            => ['required','unique:applicantDetails','digits:10'],
            'applicantContactNoGuardian'        => ['required','digits:10'],
            'applicantEmailId'                  => ['required'],
            'applicantContactNoColonyLeader'    => ['required','digits:10'],

            'examinationLevel10'                => ['required'],
            'universityBoardCouncil10'          => ['required'],
            'mainSubjects10'                    => ['required'],
            'yearOfPassing10'                   => ['required','digits:4'],
            'percentage10'                      => ['required'],
            'division10'                        => ['required'],
            
            'examinationLevel12'                => ['required'],
            'universityBoardCouncil12'          => ['required'],
            'mainSubjects12'                    => ['required'],
            'yearOfPassing12'                   => ['required','digits:4'],
            'percentage12'                      => ['required'],
            'division12'                        => ['required'],
            

            'hasAdmissionLetter'                => ['required'],
            'insCourse'                         => [],
            'insName'                           => [],
            'insAddressAddln1'                  => [],
            'insAddressAddln2'                  => [],
            'insAddressCity'                    => [],
            'insAddressDistprov'                => [],
            'insAddressState'                   => [],
            'insAddressPinzip'                  => [],
            'recognizedByINC'                   => [],
            'miscName1'                         => [],
            'miscCourse1'                       => [],
            'miscYear1'                         => [],
            'miscName2'                         => [],
            'miscCourse2'                       => [],
            'miscYear2'                         => [],
            'miscName3'                         => [],
            'miscCourse3'                       => [],
            'miscYear3'                         => [],
        ]);
        
        DB::beginTransaction();
        try {
            $applicantAddress = new Address;
            $applicantAddress->addressAddln1    = $request->addressAddln1;
            $applicantAddress->addressAddln2    = $request->addressAddln2;
            $applicantAddress->addressCity      = $request->addressCity;
            $applicantAddress->addressState     = $request->addressState;
            $applicantAddress->addressDistprov  = $request->addressDistprov;
            $applicantAddress->addressPinzip    = $request->addressPinzip;
            $applicantAddress->addressCountry   = 'India';
            $applicantAddress->save();

            $applicantDetails = new ApplicantDetails;
            $applicantDetails->applicantNameF                   = $request->applicantNameF;
            $applicantDetails->applicantNameM                   = $request->applicantNameM;
            $applicantDetails->applicantNameL                   = $request->applicantNameL;
            $applicantDetails->applicantFatherName              = $request->applicantFatherName;
            $applicantDetails->applicantMotherName              = $request->applicantMotherName;
            $applicantDetails->applicantDOB                     = $request->applicantDOB;
            $applicantDetails->applicantGender                  = $request->applicantGender;
            $applicantDetails->applicantLeprosyAffectedSelf     = $request->applicantLeprosyAffectedSelf;
            $applicantDetails->applicantLeprosyAffectedFather   = $request->applicantLeprosyAffectedFather;
            $applicantDetails->applicantLeprosyAffectedMother   = $request->applicantLeprosyAffectedMother;
            $applicantDetails->applicantHasBPLCard              = $request->applicantHasBPLCard;
            $applicantDetails->applicantDomicileState           = $request->applicantDomicileState;
            $applicantDetails->applicantContactNoSelf           = $request->applicantContactNoSelf;
            $applicantDetails->applicantContactNoGuardian       = $request->applicantContactNoGuardian;
            $applicantDetails->applicantEmailId                 = $request->applicantEmailId;
            $applicantDetails->applicantContactNoColonyLeader   = $request->applicantContactNoColonyLeader;
            $applicantDetails->applicantAddressId               = $applicantAddress->id;
            $applicantDetails->save();

            $applicantEducationDetails = new ApplicantEducationDetails;
            $applicantEducationDetails->examinationPassed       = '10';
            $applicantEducationDetails->examinationLevel        = '10';
            $applicantEducationDetails->universityBoardCouncil  = $request->universityBoardCouncil10;
            $applicantEducationDetails->mainSubjects            = $request->mainSubjects10;
            $applicantEducationDetails->yearOfPassing           = $request->yearOfPassing10;
            $applicantEducationDetails->percentage              = $request->percentage10;
            $applicantEducationDetails->division                = $request->division10;
            $applicantEducationDetails->type                    = '10';
            $applicantEducationDetails->applicantId             = $applicantDetails->id;
            $applicantEducationDetails->save();
            
            $applicantEducationDetails = new ApplicantEducationDetails;
            $applicantEducationDetails->examinationPassed       = '12';
            $applicantEducationDetails->examinationLevel        = '12';
            $applicantEducationDetails->universityBoardCouncil  = $request->universityBoardCouncil12;
            $applicantEducationDetails->mainSubjects            = $request->mainSubjects12;
            $applicantEducationDetails->yearOfPassing           = $request->yearOfPassing12;
            $applicantEducationDetails->percentage              = $request->percentage12;
            $applicantEducationDetails->division                = $request->division12;
            $applicantEducationDetails->type                    = '12';
            $applicantEducationDetails->applicantId             = $applicantDetails->id;
            $applicantEducationDetails->save();

            if ($request->hasAdmissionLetter === 'YES') {
                $instituteAddress = new Address;
                $instituteAddress->addressAddln1    = $request->insAddressAddln1;
                $instituteAddress->addressAddln2    = $request->insAddressAddln2;
                $instituteAddress->addressCity      = $request->insAddressCity;
                $instituteAddress->addressState     = $request->insAddressState;
                $instituteAddress->addressDistprov  = $request->insAddressDistprov;
                $instituteAddress->addressPinzip    = $request->insAddressPinzip;
                $instituteAddress->addressCountry   = 'India';
                $instituteAddress->save();

                $instituteDetails = new InstituteDetails;
                $instituteDetails->instituteName = $request->insName;
                $instituteDetails->instituteAddressId = $instituteAddress->id;
                $instituteDetails->save();
            }

            if (!empty($request->miscName1) && !empty($request->miscCourse1) && !empty($request->miscYear1)) {
                $applicantMiscellaneousDetails = new ApplicantMiscellaneousDetails;
                $applicantMiscellaneousDetails->name            = $request->miscName1;
                $applicantMiscellaneousDetails->course          = $request->miscCourse1;
                $applicantMiscellaneousDetails->year            = $request->miscYear1;
                $applicantMiscellaneousDetails->applicantId     = $applicantDetails->id;
                $applicantMiscellaneousDetails->save();
            }

            if (!empty($request->miscName2) && !empty($request->miscCourse2) && !empty($request->miscYear2)) {
                $applicantMiscellaneousDetails = new ApplicantMiscellaneousDetails;
                $applicantMiscellaneousDetails->name            = $request->miscName2;
                $applicantMiscellaneousDetails->course          = $request->miscCourse2;
                $applicantMiscellaneousDetails->year            = $request->miscYear2;
                $applicantMiscellaneousDetails->applicantId     = $applicantDetails->id;
                $applicantMiscellaneousDetails->save();
            }

            if (!empty($request->miscName3) && !empty($request->miscCourse3) && !empty($request->miscYear3)) {
                $applicantMiscellaneousDetails = new ApplicantMiscellaneousDetails;
                $applicantMiscellaneousDetails->name            = $request->miscName3;
                $applicantMiscellaneousDetails->course          = $request->miscCourse3;
                $applicantMiscellaneousDetails->year            = $request->miscYear3;
                $applicantMiscellaneousDetails->applicantId     = $applicantDetails->id;
                $applicantMiscellaneousDetails->save();
            }
            
            $newApplicationId = $this->newApplicationId();

            $addNursingScholarshipApplication = new NursingScholarshipApplication;
            $addNursingScholarshipApplication->applicationId        = $newApplicationId;
            $addNursingScholarshipApplication->hasAdmissionLetter   = $request->hasAdmissionLetter;
            $addNursingScholarshipApplication->applicantId          = $applicantDetails->id;
            $addNursingScholarshipApplication->financialYear        = date('Y').'-'.(intval(date('y'))+1);
            $addNursingScholarshipApplication->userId               = $userId;

            if ($request->hasAdmissionLetter === 'YES') {
                $addNursingScholarshipApplication->instituteId      = $instituteDetails->id;
                $addNursingScholarshipApplication->instituteCourse  = $request->insCourse;
                $addNursingScholarshipApplication->recognizedByINC  = $request->recognizedByINC;
            }
            $addNursingScholarshipApplication->save();

            DB::commit();
            return array('success' => true, 'msg'=>[], 'data'=>$newApplicationId);
        }
        catch(Exception $e) {
            DB::rollBack();
            return array('success' => false, 'msg'=>[$e]);
        }
    }

    # Edit Nursing Scholarship Application
    public function editNursingScholarshipApplication(string $applicationId, Request $request)
    {
        $request->validate([  
            'applicantNameF'                    => [],                
            'applicantNameM'                    => [],
            'applicantNameL'                    => [],
            'applicantFatherName'               => [],
            'applicantMotherName'               => [],
            'applicantDOB'                      => ['required'],
            'applicantGender'                   => ['required'],
            'applicantLeprosyAffectedSelf'      => [],
            'applicantLeprosyAffectedFather'    => [],
            'applicantLeprosyAffectedMother'    => [],
            'applicantHasBPLCard'               => ['required'],
            'applicantDomicileState'            => ['required'],
            
            'addressAddln1'                     => ['required'],
            'addressAddln2'                     => [],
            'addressCity'                       => [],
            'addressDistprov'                   => [],
            'addressState'                      => ['required'],
            'addressPinzip'                     => ['required','digits:6'],
            'applicantContactNoSelf'            => ['required','digits:10'],
            'applicantContactNoGuardian'        => ['required','digits:10'],
            'applicantEmailId'                  => ['required'],
            'applicantContactNoColonyLeader'    => ['required','digits:10'],

            'examinationLevel10'                => ['required'],
            'universityBoardCouncil10'          => ['required'],
            'mainSubjects10'                    => ['required'],
            'yearOfPassing10'                   => ['required','digits:4'],
            'percentage10'                      => ['required'],
            'division10'                        => ['required'],
            

            'examinationLevel12'                => ['required'],
            'universityBoardCouncil12'          => ['required'],
            'mainSubjects12'                    => ['required'],
            'yearOfPassing12'                   => ['required','digits:4'],
            'percentage12'                      => ['required'],
            'division12'                        => ['required'],
            

            'hasAdmissionLetter'                => ['required'],
            'insCourse'                         => [],
            'insName'                           => [],
            'insAddressAddln1'                  => [],
            'insAddressAddln2'                  => [],
            'insAddressCity'                    => [],
            'insAddressDistprov'                => [],
            'insAddressState'                   => [],
            'insAddressPinzip'                  => [],
            'recognizedByINC'                   => [],
            'miscName1'                         => [],
            'miscCourse1'                       => [],
            'miscYear1'                         => [],
            'miscName2'                         => [],
            'miscCourse2'                       => [],
            'miscYear2'                         => [],
            'miscName3'                         => [],
            'miscCourse3'                       => [],
            'miscYear3'                         => [],
        ]);
        
        DB::beginTransaction();
        try {
            $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();

            if ($nursingScholarshipApplication->hasAdmissionLetter === 'NO' && $request->hasAdmissionLetter === 'YES') {
                $instituteAddress = new Address;
                $instituteAddress->addressAddln1    = $request->insAddressAddln1;
                $instituteAddress->addressAddln2    = $request->insAddressAddln2;
                $instituteAddress->addressCity      = $request->insAddressCity;
                $instituteAddress->addressState     = $request->insAddressState;
                $instituteAddress->addressDistprov  = $request->insAddressDistprov;
                $instituteAddress->addressPinzip    = $request->insAddressPinzip;
                $instituteAddress->addressCountry   = 'India';
                $instituteAddress->save();

                $instituteDetails = new InstituteDetails;
                $instituteDetails->instituteName = $request->insName;
                $instituteDetails->instituteAddressId = $instituteAddress->id;
                $instituteDetails->save();

                $nursingScholarshipApplication->hasAdmissionLetter  = $request->hasAdmissionLetter;
                $nursingScholarshipApplication->instituteId         = $instituteDetails->id;
                $nursingScholarshipApplication->instituteCourse     = $request->insCourse;
                $nursingScholarshipApplication->recognizedByINC     = $request->recognizedByINC;
                $nursingScholarshipApplication->update();
            } else if ($nursingScholarshipApplication->hasAdmissionLetter === 'YES' && $request->hasAdmissionLetter === 'NO') {
                $instituteDetails = InstituteDetails::where('id',$nursingScholarshipApplication->instituteId)->first();
                $instituteAddress = Address::where('id',$instituteDetails->instituteAddressId)->first();
                $instituteAddress->delete();
                $instituteDetails->delete();
                
                $nursingScholarshipApplication->hasAdmissionLetter  = $request->hasAdmissionLetter;
                $nursingScholarshipApplication->instituteId         = NULL;
                $nursingScholarshipApplication->instituteCourse     = NULL;
                $nursingScholarshipApplication->recognizedByINC     = NULL;
                $nursingScholarshipApplication->update();
            } else if ($nursingScholarshipApplication->hasAdmissionLetter === 'YES' && $request->hasAdmissionLetter === 'YES') {
                $instituteDetails = InstituteDetails::where('id',$nursingScholarshipApplication->instituteId)->first();
                $instituteDetails->instituteName = $request->insName;
                $instituteDetails->update();

                $instituteAddress = Address::where('id',$instituteDetails->instituteAddressId)->first();
                $instituteAddress->addressAddln1    = $request->insAddressAddln1;
                $instituteAddress->addressAddln2    = $request->insAddressAddln2;
                $instituteAddress->addressCity      = $request->insAddressCity;
                $instituteAddress->addressState     = $request->insAddressState;
                $instituteAddress->addressDistprov  = $request->insAddressDistprov;
                $instituteAddress->addressPinzip    = $request->insAddressPinzip;
                $instituteAddress->update();

                $nursingScholarshipApplication->instituteCourse     = $request->insCourse;
                $nursingScholarshipApplication->recognizedByINC     = $request->recognizedByINC;
                $nursingScholarshipApplication->update();
            }

            $applicantDetails = ApplicantDetails::where('id', $nursingScholarshipApplication->applicantId)->first();
            $applicantDetails->applicantNameF                   = $request->applicantNameF;
            $applicantDetails->applicantNameM                   = $request->applicantNameM;
            $applicantDetails->applicantNameL                   = $request->applicantNameL;
            $applicantDetails->applicantFatherName              = $request->applicantFatherName;
            $applicantDetails->applicantMotherName              = $request->applicantMotherName;
            $applicantDetails->applicantDOB                     = $request->applicantDOB;
            $applicantDetails->applicantGender                  = $request->applicantGender;
            $applicantDetails->applicantLeprosyAffectedSelf     = $request->applicantLeprosyAffectedSelf;
            $applicantDetails->applicantLeprosyAffectedFather   = $request->applicantLeprosyAffectedFather;
            $applicantDetails->applicantLeprosyAffectedMother   = $request->applicantLeprosyAffectedMother;
            $applicantDetails->applicantHasBPLCard              = $request->applicantHasBPLCard;
            $applicantDetails->applicantDomicileState           = $request->applicantDomicileState;
            $applicantDetails->applicantContactNoSelf           = $request->applicantContactNoSelf;
            $applicantDetails->applicantContactNoGuardian       = $request->applicantContactNoGuardian;
            $applicantDetails->applicantEmailId                 = $request->applicantEmailId;
            $applicantDetails->applicantContactNoColonyLeader   = $request->applicantContactNoColonyLeader;
            $applicantDetails->update();

            $applicantAddress = Address::where('id', $applicantDetails->applicantAddressId)->first();
            $applicantAddress->addressAddln1    = $request->addressAddln1;
            $applicantAddress->addressAddln2    = $request->addressAddln2;
            $applicantAddress->addressCity      = $request->addressCity;
            $applicantAddress->addressState     = $request->addressState;
            $applicantAddress->addressDistprov  = $request->addressDistprov;
            $applicantAddress->addressPinzip    = $request->addressPinzip;
            $applicantAddress->update();
            
            $applicantEducationDetails = ApplicantEducationDetails::where('applicantId', $nursingScholarshipApplication->applicantId)->where('examinationPassed', '10')->first();
            $applicantEducationDetails->examinationPassed       = '10';
            $applicantEducationDetails->examinationLevel        = '10';
            $applicantEducationDetails->universityBoardCouncil  = $request->universityBoardCouncil10;
            $applicantEducationDetails->mainSubjects            = $request->mainSubjects10;
            $applicantEducationDetails->yearOfPassing           = $request->yearOfPassing10;
            $applicantEducationDetails->percentage              = $request->percentage10;
            $applicantEducationDetails->division                = $request->division10;
            $applicantEducationDetails->type                    = '10';
            $applicantEducationDetails->update();
            
            $applicantEducationDetails = ApplicantEducationDetails::where('applicantId', $nursingScholarshipApplication->applicantId)->where('examinationPassed', '12')->first();
            $applicantEducationDetails->examinationPassed       = '12';
            $applicantEducationDetails->examinationLevel        = '12';
            $applicantEducationDetails->universityBoardCouncil  = $request->universityBoardCouncil12;
            $applicantEducationDetails->mainSubjects            = $request->mainSubjects12;
            $applicantEducationDetails->yearOfPassing           = $request->yearOfPassing12;
            $applicantEducationDetails->percentage              = $request->percentage12;
            $applicantEducationDetails->division                = $request->division12;
            $applicantEducationDetails->type                    = '12';
            $applicantEducationDetails->update();

            $allApplicantMiscellaneousDetails = ApplicantMiscellaneousDetails::where('applicantId', $applicantDetails->id)->orderBy('id','ASC')->get();

            if (count($allApplicantMiscellaneousDetails)>0) {
                $applicantMiscellaneousDetails = ApplicantMiscellaneousDetails::where('id',$allApplicantMiscellaneousDetails[0]->id)->first();
                $applicantMiscellaneousDetails->delete();
            } 

            if (count($allApplicantMiscellaneousDetails)>1) {
                $applicantMiscellaneousDetails = ApplicantMiscellaneousDetails::where('id',$allApplicantMiscellaneousDetails[1]->id)->first();
                $applicantMiscellaneousDetails->delete();                
            }

            if (count($allApplicantMiscellaneousDetails)>2) {
                $applicantMiscellaneousDetails = ApplicantMiscellaneousDetails::where('id',$allApplicantMiscellaneousDetails[2]->id)->first();
                $applicantMiscellaneousDetails->delete();                
            }

            if (!empty($request->miscName1) && !empty($request->miscCourse1) && !empty($request->miscYear1)) {
                $applicantMiscellaneousDetails = new ApplicantMiscellaneousDetails;
                $applicantMiscellaneousDetails->name            = $request->miscName1;
                $applicantMiscellaneousDetails->course          = $request->miscCourse1;
                $applicantMiscellaneousDetails->year            = $request->miscYear1;
                $applicantMiscellaneousDetails->applicantId     = $nursingScholarshipApplication->applicantId;
                $applicantMiscellaneousDetails->save();
            }

            if (!empty($request->miscName2) && !empty($request->miscCourse2) && !empty($request->miscYear2)) {
                $applicantMiscellaneousDetails = new ApplicantMiscellaneousDetails;
                $applicantMiscellaneousDetails->name            = $request->miscName2;
                $applicantMiscellaneousDetails->course          = $request->miscCourse2;
                $applicantMiscellaneousDetails->year            = $request->miscYear2;
                $applicantMiscellaneousDetails->applicantId     = $nursingScholarshipApplication->applicantId;
                $applicantMiscellaneousDetails->save();
            }

            if (!empty($request->miscName3) && !empty($request->miscCourse3) && !empty($request->miscYear3)) {
                $applicantMiscellaneousDetails = new ApplicantMiscellaneousDetails;
                $applicantMiscellaneousDetails->name            = $request->miscName3;
                $applicantMiscellaneousDetails->course          = $request->miscCourse3;
                $applicantMiscellaneousDetails->year            = $request->miscYear3;
                $applicantMiscellaneousDetails->applicantId     = $nursingScholarshipApplication->applicantId;
                $applicantMiscellaneousDetails->save();
            }

            DB::commit();
            return array('success' => true, 'msg'=>[]);
        }
        catch(Exception $e) {
            DB::rollBack();
            return array('success' => false, 'msg'=>[$e]);
        }
    }

    # Add AnnexureI
    public function addAnnexureI(string $applicationId, Request $request)
    {
        $institute = $request->json()->all();
        $data = array();
        foreach ($institute as $key => $value) {
            foreach ($value as $k => $v) {
                $data[$key][$k] = $v;
            }
        }

        $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();
        
        foreach ($data as $institute) {
            $instituteAddress = new Address;
            $instituteDetails = new InstituteDetails;
            $annexureI        = new AnnexureI;
            DB::beginTransaction();
            try {
                $instituteAddress->addressAddln1    = $institute['addressAddln1'];
                $instituteAddress->addressAddln2    = $institute['addressAddln2'];
                $instituteAddress->addressCity      = $institute['addressCity'];
                $instituteAddress->addressState     = $institute['addressState'];
                $instituteAddress->addressDistprov  = $institute['addressDistprov'];
                $instituteAddress->addressPinzip    = $institute['addressPinzip'];
                $instituteAddress->addressCountry   = 'India';
                $instituteAddress->save();

                $instituteDetails->instituteName      = $institute['instituteName'];
                $instituteDetails->courseName         = $institute['courseName'];
                $instituteDetails->instituteAddressId = $instituteAddress->id;
                $instituteDetails->applicantId        = $nursingScholarshipApplication->applicantId;
                $instituteDetails->save();

                $annexureI->courseName            = $institute['courseName'];
                $annexureI->choice                = 1; 
                $annexureI->courseLevel           = $request['courseLevel'];
                $annexureI->choice1               = $request['choice']; 
                $annexureI->applicantId           = $nursingScholarshipApplication->applicantId; 
                $annexureI->save(); 

                DB::commit();
                return array('success' => true, 'msg'=>[]);

            }catch(Exception $e) {
                DB::rollBack();
                return array('success' => false, 'msg'=>[$e]);
            }
        }
    }

    # Edit AnnexureI
    public function editAnnexureI(string $applicationId, Request $request)
    {
       
    }

    # Save AnnexureII
    public function saveAnnexureII(string $applicationId, Request $request)
    {
        $request->validate([
            'applicantColonyLeaderName' => ['required']
        ]);
        
        DB::beginTransaction();
        try {
            
            $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();
            
            $applicantDetails = ApplicantDetails::where('id', $nursingScholarshipApplication->applicantId)->first();
            $applicantDetails->applicantColonyLeaderName = $request->applicantColonyLeaderName;
            $applicantDetails->update();

            DB::commit();
            return array('success' => true, 'msg'=>[]);
        }
        catch(Exception $e) {
            DB::rollBack();
            return array('success' => false, 'msg'=>[$e]);
        }
    }

    # Save Applicant Documents
    public function saveApplicantDocuments(string $applicationId, Request $request)
    {
        $request->validate([
            'admissionLetter'         => ['required','mimes:jpeg,pdf,png,jpg','size:1024'],
            'annexureII'              => ['required','mimes:jpeg,pdf,png,jpg','size:1024'],
            'photograph'              => ['required','mimes:jpeg,pdf,png,jpg','size:1024'],
            'proofOfAge'              => ['required','mimes:jpeg,pdf,png,jpg','size:1024'],
            'markSheets10'            => ['required','mimes:jpeg,pdf,png,jpg','size:1024'],
            'markSheets12'            => ['required','mimes:jpeg,pdf,png,jpg','size:1024'],
            'leprosyCertificateSelf'  => ['required','mimes:jpeg,pdf,png,jpg','size:1024'],
            'leprosyCertificateMother'=> ['required','mimes:jpeg,pdf,png,jpg','size:1024'],
            'leprosyCertificateFather'=> ['required','mimes:jpeg,pdf,png,jpg','size:1024'],
        ]);

       
            DB::beginTransaction();
            try {
                
                $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();

                if ($nursingScholarshipApplication) {
                    $admissionLetter    = $this->uploadFile($request->admissionLetter, 'admissionLetter');
                    $annexureII         = $this->uploadFile($request->annexureII, 'annexureII');
                    $photograph         = $this->uploadFile($request->photograph, 'photograph');
                    $proofOfAge         = $this->uploadFile($request->proofOfAge, 'proofOfAge');
                    $markSheets10       = $this->uploadFile($request->markSheets10, 'markSheets10');
                    $markSheets12       = $this->uploadFile($request->markSheets12, 'markSheets12');
                    $leprosyCertificateSelf   = $this->uploadFile($request->leprosyCertificateSelf, 'leprosyCertificateSelf');
                    $leprosyCertificateMother = $this->uploadFile($request->leprosyCertificateMother, 'leprosyCertificateMother');
                    $leprosyCertificateFather = $this->uploadFile($request->leprosyCertificateFather, 'leprosyCertificateFather');

                    $applicantDocuments = new ApplicantDocuments;
                    $applicantDocuments->admissionLetter = $admissionLetter;
                    $applicantDocuments->annexureII         = $annexureII;
                    $applicantDocuments->photograph         = $photograph;
                    $applicantDocuments->proofOfAge         = $proofOfAge;
                    $applicantDocuments->markSheets10       = $markSheets10;
                    $applicantDocuments->markSheets12       = $markSheets12;
                    $applicantDocuments->leprosyCertificateSelf   = $leprosyCertificateSelf;
                    $applicantDocuments->leprosyCertificateMother = $leprosyCertificateMother;
                    $applicantDocuments->leprosyCertificateFather = $leprosyCertificateFather;
                    $applicantDocuments->applicantId              = $nursingScholarshipApplication->applicantId;
                    $applicantDocuments->save();
                } else {
                    return array('success' => false, 'msg'=>['Application ID not found!']);
                }

                DB::commit();
                return array('success' => true, 'msg'=>[]);
            }
            catch(Exception $e) {
                DB::rollBack();
                return array('success' => false, 'msg'=>[$e]);
            }
        
    }

    # Update Applicant Documents
    public function updateApplicantDocuments(string $applicationId, Request $request)
    {
              
            DB::beginTransaction();
            try {
                $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();

                if ($nursingScholarshipApplication) {
                    $applicantDocuments = ApplicantDocuments::where('applicantId',$nursingScholarshipApplication->applicantId)->first();

                    if (!$applicantDocuments) {
                        $applicantDocuments = new ApplicantDocuments;
                        $new = true;
                    }

                    if ($request->admissionLetter) {
                        if (!isset($new) && $applicantDocuments->admissionLetter) {
                            $this->deleteFile($applicantDocuments->admissionLetter);
                        }
                        $admissionLetter = $this->uploadFile($request->admissionLetter, 'admissionLetter');
                        $applicantDocuments->admissionLetter    = $admissionLetter;
                    }

                    if ($request->annexureII) {
                        if (!isset($new) && $applicantDocuments->annexureII) {
                            $this->deleteFile($applicantDocuments->annexureII);
                        }
                        $annexureII = $this->uploadFile($request->annexureII, 'annexureII');
                        $applicantDocuments->annexureII         = $annexureII;
                    }
                    
                    if ($request->photograph) {
                        if (!isset($new) && $applicantDocuments->photograph) {
                            $this->deleteFile($applicantDocuments->photograph);
                        }
                        $photograph = $this->uploadFile($request->photograph, 'photograph');
                        $applicantDocuments->photograph = $photograph;
                    }

                    if ($request->proofOfAge) {
                        if (!isset($new) && $applicantDocuments->proofOfAge) {
                            $this->deleteFile($applicantDocuments->proofOfAge);
                        }
                        $proofOfAge = $this->uploadFile($request->proofOfAge, 'proofOfAge');
                        $applicantDocuments->proofOfAge = $proofOfAge;
                    }

                    if ($request->markSheets10) {
                        if (!isset($new) && $applicantDocuments->markSheets10) {
                            $this->deleteFile($applicantDocuments->markSheets10);
                        }
                        $markSheets10       = $this->uploadFile($request->markSheets10, 'markSheets10');
                        $applicantDocuments->markSheets10 = $markSheets10;
                    }
                        
                    if ($request->markSheets12) {
                        if (!isset($new) && $applicantDocuments->markSheets12) {
                            $this->deleteFile($applicantDocuments->markSheets12);
                        }
                        $markSheets12       = $this->uploadFile($request->markSheets12, 'markSheets12');
                        $applicantDocuments->markSheets12 = $markSheets12;
                    }

                    if ($request->leprosyCertificateSelf) 
                    {
                        if (!isset($new) && $applicantDocuments->leprosyCertificateSelf) {
                            $this->deleteFile($applicantDocuments->leprosyCertificateSelf);
                        }
                        $leprosyCertificateSelf = $this->uploadFile($request->leprosyCertificateSelf, 'leprosyCertificateSelf');
                        $applicantDocuments->leprosyCertificateSelf = $leprosyCertificateSelf;
                    }

                    if ($request->leprosyCertificateMother) 
                    {
                        if (!isset($new) && $applicantDocuments->leprosyCertificateMother) {
                            $this->deleteFile($applicantDocuments->leprosyCertificateMother);
                        }
                        $leprosyCertificateMother = $this->uploadFile($request->leprosyCertificateMother, 'leprosyCertificateMother');
                        $applicantDocuments->leprosyCertificateMother = $leprosyCertificateMother;
                    }

                    if ($request->leprosyCertificateFather) 
                    {
                        if (!isset($new) && $applicantDocuments->leprosyCertificateFather) {
                            $this->deleteFile($applicantDocuments->leprosyCertificateFather);
                        }
                        $leprosyCertificateFather = $this->uploadFile($request->leprosyCertificateFather, 'leprosyCertificateFather');
                        $applicantDocuments->leprosyCertificateFather = $leprosyCertificateFather;
                    }
                    
                    if (isset($new)) {
                        $applicantDocuments->applicantId = $nursingScholarshipApplication->applicantId;
                        $applicantDocuments->save();
                    } else {
                        $applicantDocuments->update();
                    }
                } else {
                    return array('success' => false, 'msg'=>['Application ID not found!']);
                }

                DB::commit();
                return array('success' => true, 'msg'=>[]);
            }
            catch(Exception $e) {
                DB::rollBack();
                return array('success' => false, 'msg'=>[$e]);
            }
        
    }

    # Delete Applicant Documents
    public function deleteApplicantDocuments(string $applicationId, Request $request)
    {        
        DB::beginTransaction();
        try {
            $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();
            $applicantDocuments = ApplicantDocuments::where('applicantId',$nursingScholarshipApplication->applicantId)->first();

            if ($nursingScholarshipApplication) {
                if ($request->documentType == 'admissionLetter') {
                    if ($applicantDocuments->admissionLetter) {
                        $this->deleteFile($applicantDocuments->admissionLetter);
                    }
                    $applicantDocuments->admissionLetter = NULL;
                } elseif ($request->documentType == 'annexureII') {
                    if ($applicantDocuments->annexureII) {
                        $this->deleteFile($applicantDocuments->annexureII);
                    }
                    $applicantDocuments->annexureII = NULL;
                } elseif ($request->documentType == 'photograph') {
                    if ($applicantDocuments->photograph) {
                        $this->deleteFile($applicantDocuments->photograph);
                    }
                    $applicantDocuments->photograph = NULL;
                } elseif ($request->documentType == 'proofOfAge') {
                    if ($applicantDocuments->proofOfAge) {
                        $this->deleteFile($applicantDocuments->proofOfAge);
                    }
                    $applicantDocuments->proofOfAge = NULL;
                } elseif ($request->documentType == 'markSheets10') {
                    if ($applicantDocuments->markSheets10) {
                        $this->deleteFile($applicantDocuments->markSheets10);
                    }
                    $applicantDocuments->markSheets10 = NULL;
                } elseif ($request->documentType == 'markSheets12') {
                    if ($applicantDocuments->markSheets12) {
                        $this->deleteFile($applicantDocuments->markSheets12);
                    }
                    $applicantDocuments->markSheets12 = NULL;
                }
                elseif ($request->documentType == 'leprosyCertificateSelf') 
                {
                    if ($applicantDocuments->leprosyCertificateSelf) {
                        $this->deleteFile($applicantDocuments->leprosyCertificateSelf);
                    }
                    $applicantDocuments->leprosyCertificateSelf = NULL;
                }


                elseif ($request->documentType == 'leprosyCertificateMother') 
                {
                    if ($applicantDocuments->leprosyCertificateMother) {
                        $this->deleteFile($applicantDocuments->leprosyCertificateMother);
                    }
                    $applicantDocuments->leprosyCertificateMother = NULL;
                }

                elseif ($request->documentType == 'leprosyCertificateFather') 
                {
                    if ($applicantDocuments->leprosyCertificateFather) {
                        $this->deleteFile($applicantDocuments->leprosyCertificateFather);
                    }
                    $applicantDocuments->leprosyCertificateFather = NULL;
                }

                $applicantDocuments->update();
            } else {
                return array('success' => false, 'msg'=>['Application ID not found!']);
            }

            DB::commit();
            return array('success' => true, 'msg'=>[]);
        }
        catch(Exception $e) {
            DB::rollBack();
            return array('success' => false, 'msg'=>[$e]);
        }
    }

    # Upload File
    private function uploadFile($base64file, string $filename='')
    {   
        if(!Storage::exists('public/'.$this->PATH)){
            Storage::makeDirectory('public/'.$this->PATH);
        }
        
        $File =  explode(',', $base64file);
        $file = base64_decode($File[1]);
        $extention = explode(';',explode('/',$File[0])[1])[0];

        if ($filename !== '') {
            $f = explode('.',$filename);
            if(count($f)===1) { $filename .= '.'.$extention; }
            $fileName = 'IMIS-NURS-'.date('Y').'-'.time().'-'.$filename;
        } else {
            $fileName = time().'.'.$extention;
        }
         
        $path = storage_path('app/public/'.$this->PATH.$fileName);
        file_put_contents($path, $file);
        return $fileName;
    }

    # Delete File
    private function deleteFile(string $filename)
    {
        if (Storage::disk('local')->exists('public/'.$this->PATH.$filename)) {
            Storage::delete('public/'.$this->PATH.$filename);
        }
    }

    # Generate New Application Id
    private function newApplicationId()
    {
        $lastId = NursingScholarshipApplication::orderBy('id', 'DESC')->first();
        if(empty($lastId)) { $lastId = 0; }
        else { $lastId = intval(explode('NURSCH',$lastId->applicationId)[1]); }
        return 'IMIS-NURSCH'.str_pad($lastId+1, 5, "0", STR_PAD_LEFT);
    }
}
