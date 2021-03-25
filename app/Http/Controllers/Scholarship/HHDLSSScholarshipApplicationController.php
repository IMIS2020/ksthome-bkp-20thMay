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
use App\ModelScholarship\HhdlScholarshipApplication;

class HHDLSSScholarshipApplicationController extends Controller
{
    private $PATH = 'uploads/HHDLSSScholarshipDocuments/';

    # Add HHDLSS Scholarship Application
     public function addHHDLSSScholarshipApplication(int $userId, Request $request)
     {
        $request->validate([  
            'applicantNameF'                    => ['required'],                
            'applicantNameM'                    => [],
            'applicantNameL'                    => ['required'],
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
            'hasAdmissionLetter'                => ['required'],
            'insCourse'                         => [],
            'insName'                           => [],
            'insAddressAddln1'                  => [],
            'insAddressAddln2'                  => [],
            'insAddressCity'                    => [],
            'insAddressDistprov'                => [],
            'insAddressState'                   => [],
            'insAddressPinzip'                  => [],
            'recognizedByGI'                    => [],

           'education1ExaminationLevel'         => ['required'],
           'education1ExaminationPassed'        => ['required'],
           'education1University'               => ['required'],
           'education1MainSubjects'             => ['required'],
           'education1YearOfPassing'            => ['required','digits:4'],
           'education1Percentage'               => ['required'],
           'education1Division'                 => ['required'],

           'education2ExaminationLevel'         => ['required'],
           'education2ExaminationPassed'        => ['required'],
           'education2University'               => ['required'],
           'education2MainSubjects'             => ['required'],
           'education2YearOfPassing'            => ['required','digits:4'],
           'education2Percentage'               => ['required'],
           'education2Division'                 => ['required'],

           'education3ExaminationLevel'         => ['required'],
           'education3ExaminationPassed'        => ['required'],
           'education3University'               => ['required'],
           'education3MainSubjects'             => ['required'],
           'education3YearOfPassing'            => ['required','digits:4'],
           'education3Percentage'               => ['required'],       
           'education3Division'                 => ['required'],
        ]);
         
         DB::beginTransaction();
         try
          {
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
             $applicantEducationDetails->examinationLevel        = $request->education1ExaminationLevel;
             $applicantEducationDetails->examinationPassed       = $request->education1ExaminationPassed;
             $applicantEducationDetails->universityBoardCouncil  = $request->education1University;
             $applicantEducationDetails->mainSubjects            = $request->education1MainSubjects;
             $applicantEducationDetails->yearOfPassing           = $request->education1YearOfPassing;
             $applicantEducationDetails->percentage              = $request->education1Percentage;
             $applicantEducationDetails->division                = $request->education1Division;
             $applicantEducationDetails->applicantId             = $applicantDetails->id;
             $applicantEducationDetails->save();
             
             $applicantEducationDetails = new ApplicantEducationDetails;
             $applicantEducationDetails->examinationLevel        = $request->education2ExaminationLevel;
             $applicantEducationDetails->examinationPassed       = $request->education2ExaminationPassed;
             $applicantEducationDetails->universityBoardCouncil  = $request->education2University;
             $applicantEducationDetails->mainSubjects            = $request->education2MainSubjects;
             $applicantEducationDetails->yearOfPassing           = $request->education2YearOfPassing;
             $applicantEducationDetails->percentage              = $request->education2Percentage;
             $applicantEducationDetails->division                = $request->education2Division;
             $applicantEducationDetails->applicantId             = $applicantDetails->id;
             $applicantEducationDetails->save();

             $applicantEducationDetails = new ApplicantEducationDetails;
             $applicantEducationDetails->examinationLevel        = $request->education3ExaminationLevel;
             $applicantEducationDetails->examinationPassed       = $request->education3ExaminationPassed;
             $applicantEducationDetails->universityBoardCouncil  = $request->education3University;
             $applicantEducationDetails->mainSubjects            = $request->education3MainSubjects;
             $applicantEducationDetails->yearOfPassing           = $request->education3YearOfPassing;
             $applicantEducationDetails->percentage              = $request->education3Percentage;
             $applicantEducationDetails->division                = $request->education3Division;
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
 
             $newApplicationId = $this->newApplicationId();
 
             $addHHDLSSScholarshipApplication = new HhdlScholarshipApplication;
             $addHHDLSSScholarshipApplication->applicationId        = $newApplicationId;
             $addHHDLSSScholarshipApplication->hasAdmissionLetter   = $request->hasAdmissionLetter;
             $addHHDLSSScholarshipApplication->applicantId          = $applicantDetails->id;
             $addHHDLSSScholarshipApplication->financialYear        = date('Y').'-'.(intval(date('y'))+1);
             $addHHDLSSScholarshipApplication->userId               = $userId;
 
             if ($request->hasAdmissionLetter === 'YES') {
                 $addHHDLSSScholarshipApplication->instituteId      = $instituteDetails->id;
                 $addHHDLSSScholarshipApplication->instituteCourse  = $request->insCourse;
                 $addHHDLSSScholarshipApplication->recognizedByGI   = $request->recognizedByGI;
             }
             $addHHDLSSScholarshipApplication->save();
 
             DB::commit();
             return array('success' => true, 'msg'=>[], 'data'=>$newApplicationId);
          }
         catch(Exception $e) {
             DB::rollBack();
             return array('success' => false, 'msg'=>[$e]);
         }
     }

    # Generate New Application Id
    private function newApplicationId()
    {
        $lastId = HhdlScholarshipApplication::orderBy('id', 'DESC')->first();
        if(empty($lastId)) { $lastId = 0; }
        else { $lastId = intval(explode('HHDLSS',$lastId->applicationId)[1]); }
        return 'IMIS-HHDLSS'.str_pad($lastId+1, 5, "0", STR_PAD_LEFT);
    }

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

       # Edit HHDLSS Scholarship Application
       public function editHHDLSSScholarshipApplication(string $applicationId, Request $request)
       {

        $request->validate([  
            'applicantNameF'                    => ['required'],                
            'applicantNameM'                    => [],
            'applicantNameL'                    => ['required'],
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
            'hasAdmissionLetter'                => ['required'],
            'insCourse'                         => [],
            'insName'                           => [],
            'insAddressAddln1'                  => [],
            'insAddressAddln2'                  => [],
            'insAddressCity'                    => [],
            'insAddressDistprov'                => [],
            'insAddressState'                   => [],
            'insAddressPinzip'                  => [],
            'recognizedByGI'                    => [],

            'education1ExaminationLevel'         => ['required'],
            'education1ExaminationPassed'        => ['required'],
            'education1University'               => ['required'],
            'education1MainSubjects'             => ['required'],
            'education1YearOfPassing'            => ['required','digits:4'],
            'education1Percentage'               => ['required'],
            'education1Division'                 => ['required'],
 
            'education2ExaminationLevel'         => ['required'],
            'education2ExaminationPassed'        => ['required'],
            'education2University'               => ['required'],
            'education2MainSubjects'             => ['required'],
            'education2YearOfPassing'            => ['required','digits:4'],
            'education2Percentage'               => ['required'],
            'education2Division'                 => ['required'],
 
            'education3ExaminationLevel'         => ['required'],
            'education3ExaminationPassed'        => ['required'],
            'education3University'               => ['required'],
            'education3MainSubjects'             => ['required'],
            'education3YearOfPassing'            => ['required','digits:4'],
            'education3Percentage'               => ['required'],       
            'education3Division'                 => ['required'],
      ]);
         
           DB::beginTransaction();
           try {
               $HHDLSSScholarshipApplication = HhdlScholarshipApplication::where('applicationId', $applicationId)->first();
   
               if ($HHDLSSScholarshipApplication->hasAdmissionLetter === 'NO' && $request->hasAdmissionLetter === 'YES') {
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
   
                   $HHDLSSScholarshipApplication->hasAdmissionLetter  = $request->hasAdmissionLetter;
                   $HHDLSSScholarshipApplication->instituteId         = $instituteDetails->id;
                   $HHDLSSScholarshipApplication->instituteCourse     = $request->insCourse;
                   $HHDLSSScholarshipApplication->recognizedByGI      = $request->recognizedByGI;
                   $HHDLSSScholarshipApplication->update();
               } else if ($HHDLSSScholarshipApplication->hasAdmissionLetter === 'YES' && $request->hasAdmissionLetter === 'NO') {
                   $instituteDetails = InstituteDetails::where('id',$HHDLSSScholarshipApplication->instituteId)->first();
                   $instituteAddress = Address::where('id',$instituteDetails->instituteAddressId)->first();
                   $instituteAddress->delete();
                   $instituteDetails->delete();
                   
                   $HHDLSSScholarshipApplication->hasAdmissionLetter  = $request->hasAdmissionLetter;
                   $HHDLSSScholarshipApplication->instituteId         = NULL;
                   $HHDLSSScholarshipApplication->instituteCourse     = NULL;
                   $HHDLSSScholarshipApplication->recognizedByGI      = NULL;
                   $HHDLSSScholarshipApplication->update();
               } else if ($HHDLSSScholarshipApplication->hasAdmissionLetter === 'YES' && $request->hasAdmissionLetter === 'YES') {
                   $instituteDetails = InstituteDetails::where('id',$HHDLSSScholarshipApplication->instituteId)->first();
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
   
                   $HHDLSSScholarshipApplication->instituteCourse   = $request->insCourse;
                   $HHDLSSScholarshipApplication->recognizedByGI    = $request->recognizedByGI;
                   $HHDLSSScholarshipApplication->update();
               }
   
               $applicantDetails = ApplicantDetails::where('id', $HHDLSSScholarshipApplication->applicantId)->first();
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
               
             $applicantEducationDetails = ApplicantEducationDetails::where('applicantId', $HHDLSSScholarshipApplication->applicantId)->first();
             $applicantEducationDetails->examinationLevel        = $request->education1ExaminationLevel;
             $applicantEducationDetails->examinationPassed       = $request->education1ExaminationPassed;
             $applicantEducationDetails->universityBoardCouncil  = $request->education1University;
             $applicantEducationDetails->mainSubjects            = $request->education1MainSubjects;
             $applicantEducationDetails->yearOfPassing           = $request->education1YearOfPassing;
             $applicantEducationDetails->percentage              = $request->education1Percentage;
             $applicantEducationDetails->division                = $request->education1Division;
             
             $applicantEducationDetails->update();
             
             $applicantEducationDetails = ApplicantEducationDetails::where('applicantId', $HHDLSSScholarshipApplication->applicantId)->first();
             $applicantEducationDetails->examinationLevel        = $request->education2ExaminationLevel;
             $applicantEducationDetails->examinationPassed       = $request->education2ExaminationPassed;
             $applicantEducationDetails->universityBoardCouncil  = $request->education2University;
             $applicantEducationDetails->mainSubjects            = $request->education2MainSubjects;
             $applicantEducationDetails->yearOfPassing           = $request->education2YearOfPassing;
             $applicantEducationDetails->percentage              = $request->education2Percentage;
             $applicantEducationDetails->division                = $request->education2Division;
           
             $applicantEducationDetails->update();

             $applicantEducationDetails = ApplicantEducationDetails::where('applicantId', $HHDLSSScholarshipApplication->applicantId)->first();
             $applicantEducationDetails->examinationLevel        = $request->education3ExaminationLevel;
             $applicantEducationDetails->examinationPassed       = $request->education3ExaminationPassed;
             $applicantEducationDetails->universityBoardCouncil  = $request->education3University;
             $applicantEducationDetails->mainSubjects            = $request->education3MainSubjects;
             $applicantEducationDetails->yearOfPassing           = $request->education3YearOfPassing;
             $applicantEducationDetails->percentage              = $request->education3Percentage;
             $applicantEducationDetails->division                = $request->education3Division;
            
             $applicantEducationDetails->update();
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
     $request->validate([
        
         'choice1instituteName'     => ['required'],
         'choice1addressAddln1'     => ['required'],
         'choice1addressAddln2'     => [],
         'choice1addressCity'       => [],
         'choice1addressDistprov'   => [],
         'choice1addressState'      => ['required'],
         'choice1addressPinzip'     => ['required','digits:6'],
         'choice2instituteName'     => ['required'],
         'choice2addressAddln1'     => ['required'],
         'choice2addressAddln2'     => [],
         'choice2addressCity'       => [],
         'choice2addressDistprov'   => [],
         'choice2addressState'      => ['required'],
         'choice2addressPinzip'     => ['required','digits:6'],
         'choice3instituteName'     => ['required'],
         'choice3addressAddln1'     => ['required'],
         'choice3addressAddln2'     => [],
         'choice3addressCity'       => [],
         'choice3addressDistprov'   => [],
         'choice3addressState'      => ['required'],
         'choice3addressPinzip'     => ['required','digits:6'],
     ]);
     
     DB::beginTransaction();
     try {
         
         $HHDLSSScholarshipApplication = HhdlScholarshipApplication::where('applicationId', $applicationId)->first();
         $instituteAddress1 = new Address;
         $instituteAddress1->addressAddln1    = $request->choice1addressAddln1;
         $instituteAddress1->addressAddln2    = $request->choice1addressAddln2;
         $instituteAddress1->addressCity      = $request->choice1addressCity;
         $instituteAddress1->addressState     = $request->choice1addressState;
         $instituteAddress1->addressDistprov  = $request->choice1addressDistprov;
         $instituteAddress1->addressPinzip    = $request->choice1addressPinzip;
         $instituteAddress1->addressCountry   = 'India';
         $instituteAddress1->save();

         $instituteDetails1 = new InstituteDetails;
         $instituteDetails1->instituteName = $request->choice1instituteName;
         $instituteDetails1->instituteAddressId = $instituteAddress1->id;
         $instituteDetails1->save();

         $instituteAddress2 = new Address;
         $instituteAddress2->addressAddln1    = $request->choice2addressAddln1;
         $instituteAddress2->addressAddln2    = $request->choice2addressAddln2;
         $instituteAddress2->addressCity      = $request->choice2addressCity;
         $instituteAddress2->addressState     = $request->choice2addressState;
         $instituteAddress2->addressDistprov  = $request->choice2addressDistprov;
         $instituteAddress2->addressPinzip    = $request->choice2addressPinzip;
         $instituteAddress2->addressCountry   = 'India';
         $instituteAddress2->save();

         $instituteDetails2 = new InstituteDetails;
         $instituteDetails2->instituteName = $request->choice2instituteName;
         $instituteDetails2->instituteAddressId = $instituteAddress2->id;
         $instituteDetails2->save();

         $instituteAddress3 = new Address;
         $instituteAddress3->addressAddln1    = $request->choice3addressAddln1;
         $instituteAddress3->addressAddln2    = $request->choice3addressAddln2;
         $instituteAddress3->addressCity      = $request->choice3addressCity;
         $instituteAddress3->addressState     = $request->choice3addressState;
         $instituteAddress3->addressDistprov  = $request->choice3addressDistprov;
         $instituteAddress3->addressPinzip    = $request->choice3addressPinzip;
         $instituteAddress3->addressCountry   = 'India';
         $instituteAddress3->save();

         $instituteDetails3 = new InstituteDetails;
         $instituteDetails3->instituteName = $request->choice3instituteName;
         $instituteDetails3->instituteAddressId = $instituteAddress3->id;
         $instituteDetails3->save();

         $annexureI = new AnnexureI;
         $annexureI->choice1         = $instituteDetails1->id;
         $annexureI->choice2         = $instituteDetails2->id;
         $annexureI->choice3         = $instituteDetails3->id;
         $annexureI->applicantId     = $HHDLSSScholarshipApplication->applicantId;
         $annexureI->save();

         DB::commit();
         return array('success' => true, 'msg'=>[]);
     }
     catch(Exception $e) {
         DB::rollBack();
         return array('success' => false, 'msg'=>[$e]);
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

   # Edit AnnexureI
   public function editAnnexureI(string $applicationId, Request $request)
   {
       $request->validate([
           'choice1instituteName'     => ['required'],
           'choice1addressAddln1'     => ['required'],
           'choice1addressAddln2'     => [],
           'choice1addressCity'       => [],
           'choice1addressDistprov'   => [],
           'choice1addressState'      => ['required'],
           'choice1addressPinzip'     => ['required','digits:6'],
           'choice2instituteName'     => ['required'],
           'choice2addressAddln1'     => ['required'],
           'choice2addressAddln2'     => [],
           'choice2addressCity'       => [],
           'choice2addressDistprov'   => [],
           'choice2addressState'      => ['required'],
           'choice2addressPinzip'     => ['required','digits:6'],
           'choice3instituteName'     => ['required'],
           'choice3addressAddln1'     => ['required'],
           'choice3addressAddln2'     => [],
           'choice3addressCity'       => [],
           'choice3addressDistprov'   => [],
           'choice3addressState'      => ['required'],
           'choice3addressPinzip'     => ['required','digits:6'],
       ]);
       
       DB::beginTransaction();
       try {
           
           $HHDLSSScholarshipApplication = HhdlScholarshipApplication::where('applicationId', $applicationId)->first();
           $annexureI = AnnexureI::where('applicantId',$HHDLSSScholarshipApplication->applicantId)->first();
       
           $instituteDetails1 = InstituteDetails::where('id', $annexureI->choice1)->first();
           $instituteDetails1->instituteName = $request->choice1instituteName;
           $instituteDetails1->update();

           $instituteAddress1 = Address::where('id',$instituteDetails1->instituteAddressId)->first();
           $instituteAddress1->addressAddln1    = $request->choice1addressAddln1;
           $instituteAddress1->addressAddln2    = $request->choice1addressAddln2;
           $instituteAddress1->addressCity      = $request->choice1addressCity;
           $instituteAddress1->addressState     = $request->choice1addressState;
           $instituteAddress1->addressDistprov  = $request->choice1addressDistprov;
           $instituteAddress1->addressPinzip    = $request->choice1addressPinzip;
           $instituteAddress1->update();
           
           $instituteDetails2 = InstituteDetails::where('id', $annexureI->choice2)->first();
           $instituteDetails2->instituteName = $request->choice2instituteName;
           $instituteDetails2->update();

           $instituteAddress2 = Address::where('id', $instituteDetails2->instituteAddressId)->first();
           $instituteAddress2->addressAddln1    = $request->choice2addressAddln1;
           $instituteAddress2->addressAddln2    = $request->choice2addressAddln2;
           $instituteAddress2->addressCity      = $request->choice2addressCity;
           $instituteAddress2->addressState     = $request->choice2addressState;
           $instituteAddress2->addressDistprov  = $request->choice2addressDistprov;
           $instituteAddress2->addressPinzip    = $request->choice2addressPinzip;
           $instituteAddress2->update();
           
           $instituteDetails3 = InstituteDetails::where('id', $annexureI->choice3)->first();
           $instituteDetails3->instituteName = $request->choice3instituteName;
           $instituteDetails3->update();

           $instituteAddress3 = Address::where('id', $instituteDetails3->instituteAddressId)->first();
           $instituteAddress3->addressAddln1    = $request->choice3addressAddln1;
           $instituteAddress3->addressAddln2    = $request->choice3addressAddln2;
           $instituteAddress3->addressCity      = $request->choice3addressCity;
           $instituteAddress3->addressState     = $request->choice3addressState;
           $instituteAddress3->addressDistprov  = $request->choice3addressDistprov;
           $instituteAddress3->addressPinzip    = $request->choice3addressPinzip;
           $instituteAddress3->update();

           DB::commit();
           return array('success' => true, 'msg'=>[]);
       }
       catch(Exception $e) {
           DB::rollBack();
           return array('success' => false, 'msg'=>[$e]);
       }
   }
    

    # Save AnnexureII
       public function saveAnnexureII(string $applicationId, Request $request)
       {
           $request->validate([
               'applicantColonyLeaderName' => ['required']
           ]);
           
           DB::beginTransaction();
           try {
               
               $HHDLSSScholarshipApplication = HhdlScholarshipApplication::where('applicationId', $applicationId)->first();
               
               $applicantDetails = ApplicantDetails::where('id', $HHDLSSScholarshipApplication->applicantId)->first();
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
            'admissionLetter'       => ['required'],
            'annexureII'            => ['required'],
            'photograph'            => ['required'],
            'proofOfAge'            => ['required'],
            'markSheets10'          => ['required'],
            'markSheets12'          => ['required'],
            'leprosyCertificateSelf'  => ['required'],
            'leprosyCertificateMother'=> ['required'],
            'leprosyCertificateFather'=> ['required'],
        ]);
        
        DB::beginTransaction();
        try {
            
            $HHDLSSScholarshipApplication = HhdlScholarshipApplication::where('applicationId', $applicationId)->first();

            if ($HHDLSSScholarshipApplication) {
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
                $applicantDocuments->applicantId        = $HHDLSSScholarshipApplication->applicantId;
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
              
               $data['leprosyCertificateSelf'] = ($applicantDocuments->leprosyCertificateSelf)?Storage::url($this->PATH.$applicantDocuments->leprosyCertificateSelf):'#';
            $data['leprosyCertificateMother'] = ($applicantDocuments->leprosyCertificateMother)?Storage::url($this->PATH.$applicantDocuments->leprosyCertificateMother):'#';
            $data['leprosyCertificateFather'] = ($applicantDocuments->leprosyCertificateFather)?Storage::url($this->PATH.$applicantDocuments->leprosyCertificateFather):'#';
   
               $data = json_decode(json_encode($data));
               return array('success' => true, 'msg'=>['Data Found!'], 'data'=>$data);
           } else {
               return array('success' => false, 'msg'=>['No Data Found!']);
           }
       }

    # Update Applicant Documents
    public function updateApplicantDocuments(string $applicationId, Request $request)
    {        
        DB::beginTransaction();
        try {
            $HHDLSSScholarshipApplication = HhdlScholarshipApplication::where('applicationId', $applicationId)->first();

            if ($HHDLSSScholarshipApplication) {
                $applicantDocuments = ApplicantDocuments::where('applicantId',$HHDLSSScholarshipApplication->applicantId)->first();

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
                    $applicantDocuments->photograph         = $photograph;
                }

                if ($request->proofOfAge) {
                    if (!isset($new) && $applicantDocuments->proofOfAge) {
                        $this->deleteFile($applicantDocuments->proofOfAge);
                    }
                    $proofOfAge = $this->uploadFile($request->proofOfAge, 'proofOfAge');
                    $applicantDocuments->proofOfAge         = $proofOfAge;
                }

                if ($request->markSheets10) {
                    if (!isset($new) && $applicantDocuments->markSheets10) {
                        $this->deleteFile($applicantDocuments->markSheets10);
                    }
                    $markSheets10       = $this->uploadFile($request->markSheets10, 'markSheets10');
                    $applicantDocuments->markSheets10       = $markSheets10;
                }
                    
                if ($request->markSheets12) {
                    if (!isset($new) && $applicantDocuments->markSheets12) {
                        $this->deleteFile($applicantDocuments->markSheets12);
                    }
                    $markSheets12       = $this->uploadFile($request->markSheets12, 'markSheets12');
                    $applicantDocuments->markSheets12       = $markSheets12;
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
                    $applicantDocuments->applicantId = $HHDLSSScholarshipApplication->applicantId;
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
             $HHDLSSScholarshipApplication = HhdlScholarshipApplication::where('applicationId', $applicationId)->first();
             $applicantDocuments = ApplicantDocuments::where('applicantId',$HHDLSSScholarshipApplication->applicantId)->first();
 
             if ($HHDLSSScholarshipApplication) {
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

}                                                    