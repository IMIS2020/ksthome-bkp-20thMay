<?php

namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\ModelGeneral\Address;
use App\ModelScholarship\Institute;
use App\ModelScholarship\ApplicationDetails;
use App\ModelScholarship\ApplicationEducationDetails;
use App\ModelScholarship\ApplicationMiscellaneousDetails;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\DomainValues;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\AnnexureI;
use App\ModelScholarship\ApplicationDocs;
use App\ModelScholarship\DocMaster;
use App\ModelScholarship\ApplicationSession;
use App\Http\Controllers\Scholarship\DocumentMaster;
use User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
// use App\ModelScholarship\AnnexureI;
// use App\ModelScholarship\ApplicantDocuments;
// use App\ModelScholarship\NursingScholarshipApplication;


class ApplicationController extends Controller
{
    # Generate New Application Id
     private function newApplicationId($type)
     {
        if($type == 'Nursing')
        {
            $lastId = ApplicationDetails::where('scholarshipType' , $type)->orderBy('id', 'DESC')->first();
            if(empty($lastId)) { $lastId = 0; }
            else { $lastId = intval(explode('NUR',$lastId->schApplicationId)[1]); }
            return 'NUR'.str_pad($lastId+1, 5, "0", STR_PAD_LEFT);
        }
        if($type == 'HHDLS')
        {
            $lastId = ApplicationDetails::where('scholarshipType' , $type)->orderBy('id', 'DESC')->first();
            // $lastId = ApplicationDetails::orderBy('id', 'DESC')->first();
            if(empty($lastId)) { $lastId = 0; }
            else { $lastId = intval(explode('HHD',$lastId->schApplicationId)[1]); }
            return 'HHD'.str_pad($lastId+1, 5, "0", STR_PAD_LEFT);
        }
     }

     private function newSession()
     {
        $getSession = ApplicationSession::where('sessionName','2021-22')->first()->id;
        return $getSession;
     }
     # Add Scholarship Application
     public function addScholarshipApplication(int $userId, Request $request)
     {
         $grad = true;
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
             'applicantContactNoSelf'            => ['required'],
             'applicantContactNoGuardian'        => ['required'],
             'applicantEmailId'                  => ['required'],
             'applicantContactNoColonyLeader'    => ['required'],
             'applicantColonyleaderName'         => [],
 
            //  'examinationLevel10'                => ['required'],
            //  'universityBoardCouncil10'          => ['required'],
            //  'mainSubjects10'                    => ['required'],
            //  'yearOfPassing10'                   => ['required','digits:4'],
            //  'percentage10'                      => ['required'],
            //  'division10'                        => ['required'],
             
            //  'examinationLevel12'                => ['required'],
            //  'universityBoardCouncil12'          => ['required'],
            //  'mainSubjects12'                    => ['required'],
            //  'yearOfPassing12'                   => ['required','digits:4'],
            //  'percentage12'                      => ['required'],
            //  'division12'                        => ['required'],
             
 
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
             'miscRelationship1'                 => [],
             'miscRelationship2'                 => [],
             'miscRelationship3'                 => [],
         ]);
         
         DB::beginTransaction();
         try {
             $applicationAddress = new Address;
             $applicationAddress->addressAddln1    = $request->addressAddln1;
             $applicationAddress->addressAddln2    = $request->addressAddln2;
             $applicationAddress->addressCity      = $request->addressCity;
             $applicationAddress->addressState     = $request->addressState;
             $applicationAddress->addressDistprov  = $request->addressDistprov;
             $applicationAddress->addressPinzip    = $request->addressPinzip;
             $applicationAddress->addressCountry   = 'India';
             $applicationAddress->save();
 
             $applicationDetails = new ApplicationDetails;
             $applicationDetails->applicantNameF                   = $request->applicantNameF;
             $applicationDetails->applicantNameM                   = $request->applicantNameM;
             $applicationDetails->applicantNameL                   = $request->applicantNameL;
             $applicationDetails->applicantFatherName              = $request->applicantFatherName;
             $applicationDetails->applicantMotherName              = $request->applicantMotherName;
             $applicationDetails->applicantDOB                     = $request->applicantDOB;
             $applicationDetails->applicantGender                  = $request->applicantGender;
             $applicationDetails->applicantLeprosyAffectedSelf     = $request->applicantLeprosyAffectedSelf;
             $applicationDetails->applicantLeprosyAffectedFather   = $request->applicantLeprosyAffectedFather;
             $applicationDetails->applicantLeprosyAffectedMother   = $request->applicantLeprosyAffectedMother;
             $applicationDetails->applicantDisablityMother         = $request->applicantDisablityMother; 
             $applicationDetails->applicantDisablityFather         = $request->applicantDisablityFather; 
             $applicationDetails->applicantDisablitySelf           = $request->applicantDisablitySelf;
             $applicationDetails->applicantHasBPLCard              = $request->applicantHasBPLCard;
             $applicationDetails->applicantDomicileState           = $request->applicantDomicileState;
             $applicationDetails->applicantContactNoSelf           = $request->applicantContactNoSelf;
             $applicationDetails->applicantContactNoGuardian       = $request->applicantContactNoGuardian;
             $applicationDetails->applicantEmailId                 = $request->applicantEmailId;
             $applicationDetails->applicantColonyLeaderName        = $request->applicantColonyleaderName;

             $applicationDetails->applicantContactNoColonyLeader   = $request->applicantContactNoColonyLeader;
             $applicationDetails->applicantAddressId               = $applicationAddress->id;
             $applicationDetails->applicationType                  = "Online";
             $applicationDetails->scholarshipType                  = $request->scholarshipType;
             $getDomainValuesApp = DomainValues::where('value',$request->scholarshipType)->first();
             $applicationDetails->scholarshipTypeValueId           = $getDomainValuesApp->id;
             $applicationDetails->sessionId 	                   = $this->newSession();

             if($request->scholarshipType == 'Nursing')
               $grad = false;

            //  if ($request->hasAdmissionLetter === 'YES') {
            //     $instituteAddress = new Address;
            //     $instituteAddress->addressAddln1    = $request->insAddressAddln1;
            //     $instituteAddress->addressAddln2    = $request->insAddressAddln2;
            //     $instituteAddress->addressCity      = $request->insAddressCity;
            //     $instituteAddress->addressState     = $request->insAddressState;
            //     $instituteAddress->addressDistprov  = $request->insAddressDistprov;
            //     $instituteAddress->addressPinzip    = $request->insAddressPinzip;
            //     $instituteAddress->addressCountry   = 'India';
            //     $instituteAddress->save();

            //     $instituteDetails = new InstituteDetails;
            //     $instituteDetails->instituteName = $request->insName;
            //     $instituteDetails->instituteAddressId = $instituteAddress->id;
            //     $instituteDetails->save();
            // }

             $newApplicationId = $this->newApplicationId($request->scholarshipType);
             if($request->scholarshipType == 'HHDLS')
             {
                $lastId = intval(explode('HHD',$newApplicationId)[1]);
                $getSch = DomainValues::where('value',$request->scholarshipType)->first()->id;
                $appSch = ApplicationScheduleTable::where('sessionId',1)->where('scholarshipTypeValueId',$getSch)->first();
                $newApplicationIdx = $appSch->applicationNoPrefixFormat.str_pad($lastId, 5, "0", STR_PAD_LEFT);;
             }else if($request->scholarshipType == 'Nursing')
             {
                $lastId= intval(explode('NUR',$newApplicationId)[1]);
                $getSch = DomainValues::where('value',$request->scholarshipType)->first()->id;
                $appSch = ApplicationScheduleTable::where('sessionId',1)->where('scholarshipTypeValueId',$getSch)->first();
                $newApplicationIdx = $appSch->applicationNoPrefixFormat.str_pad($lastId, 5, "0", STR_PAD_LEFT);;
             }
             

             $applicationDetails->schApplicationId     = $newApplicationId;
             $applicationDetails->appIdShow            = $newApplicationIdx;
             $applicationDetails->hasAdmissionLetter   = $request->hasAdmissionLetter;
             $applicationDetails->financialYear        = date('Y').'-'.(intval(date('y'))+1);
             $applicationDetails->userId               = $userId;

             if($request->hasAdmissionLetter === 'YES') {
                $applicationDetails->instituteId      = $request->instituteId;
                if($request->courseLevelValueId == 'N')
                {
                    $getDomainValues = DomainValues::where('value','Graduate')->first();
                    $applicationDetails->courseLevelValueId  = $getDomainValues->id;
                }else{
                    $applicationDetails->courseLevelValueId = $request->courseLevelValueId;
                }
                $applicationDetails->courseNameValueId   = $request->courseNameValueId;
                $applicationDetails->recognizedByINC  = $request->recognizedByINC;
             }
             $applicationDetails->save();
            
             #Education Details
             $applicationEducationDetails10 = new ApplicationEducationDetails; // class 10
            //  $getDomainValuesExam10 = DomainValues::where('value',$request->education1ExaminationLevel)->first();
             $applicationEducationDetails10->examLevelValueId       = 1;
             $applicationEducationDetails10->examBoardValueId       = $request->education1University;
             $applicationEducationDetails10->examPassedValueId      = $request->education1ExaminationPassed;
            //  $applicationEducationDetails->examLevelValue            = $request->mainSubjects10;
            //  $applicationEducationDetails->examBoardValue           = $request->yearOfPassing10;
            //  $applicationEducationDetails->examPassedValue              = $request->percentage10;
             $applicationEducationDetails10->mainSubjects           = $request->education1MainSubjects;
             $applicationEducationDetails10->yearOfPassing          = $request->education1YearOfPassing;
             $applicationEducationDetails10->percentage             = $request->education1Percentage;
             $applicationEducationDetails10->percentageKeySub       = $request->education1Percentage;
             $applicationEducationDetails10->division               = $request->education1Division;
             $applicationEducationDetails10->applicationId          = $applicationDetails->id;
             $applicationEducationDetails10->save();

             $applicationEducationDetails12 = new ApplicationEducationDetails; // class 12
            //  $getDomainValuesExam12 = DomainValues::where('value',$request->education2ExaminationLevel)->first();
             $applicationEducationDetails12->examLevelValueId       = 2;
             $applicationEducationDetails12->examBoardValueId       = $request->education2University;
             $applicationEducationDetails12->examPassedValueId      = $request->education2ExaminationPassed;
            //  $applicationEducationDetails->examLevelValue            = $request->mainSubjects10;
            //  $applicationEducationDetails->examBoardValue           = $request->yearOfPassing10;
            //  $applicationEducationDetails->examPassedValue              = $request->percentage10;
             $applicationEducationDetails12->mainSubjects           = $request->education2MainSubjects;
             $applicationEducationDetails12->yearOfPassing          = $request->education2YearOfPassing;
             $applicationEducationDetails12->percentage             = $request->education2Percentage;
             $applicationEducationDetails12->percentageKeySub       = $request->education2Percentage;
             $applicationEducationDetails12->division               = $request->education2Division;
             $applicationEducationDetails12->applicationId          = $applicationDetails->id;
             $applicationEducationDetails12->save();

             if($request->scholarshipType == 'HHDLS'){
                if($request->education3University != null)
                {
                    $applicationEducationDetails13 = new ApplicationEducationDetails; // Graduate only for hddlls
                    // $getDomainValuesExam13 = DomainValues::where('value',$request->education3ExaminationLevel)->first();
                    $applicationEducationDetails13->examLevelValueId       = 3;
                    $applicationEducationDetails13->examBoardValueId       = $request->education3University;
                    $applicationEducationDetails13->examPassedValueId      = $request->education3ExaminationPassed;
                //  $applicationEducationDetails->examLevelValue            = $request->mainSubjects10;
                //  $applicationEducationDetails->examBoardValue           = $request->yearOfPassing10;
                //  $applicationEducationDetails->examPassedValue              = $request->percentage10;
                    $applicationEducationDetails13->mainSubjects           = $request->education3MainSubjects;
                    $applicationEducationDetails13->yearOfPassing          = $request->education3YearOfPassing;
                    $applicationEducationDetails13->percentage             = $request->education3Percentage;
                    $applicationEducationDetails13->percentageKeySub       = $request->education3Percentage;
                    $applicationEducationDetails13->division               = $request->education3Division;
                    $applicationEducationDetails13->applicationId          = $applicationDetails->id;
                    $applicationEducationDetails13->save();
                }else{
                     $grad = false;
                }
             }

             if (!empty($request->miscName1) && !empty($request->miscCourse1) && !empty($request->miscYear1)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName1;
                 $applicantMiscellaneousDetails->relationship    = $request->miscRelationship1;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse1;
                 $applicantMiscellaneousDetails->year            = $request->miscYear1;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }
 
             if (!empty($request->miscName2) && !empty($request->miscCourse2) && !empty($request->miscYear2)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName2;
                 $applicantMiscellaneousDetails->relationship    = $request->miscRelationship2;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse2;
                 $applicantMiscellaneousDetails->year            = $request->miscYear2;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }
 
             if (!empty($request->miscName3) && !empty($request->miscCourse3) && !empty($request->miscYear3)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName3;
                 $applicantMiscellaneousDetails->relationship    = $request->miscRelationship3;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse3;
                 $applicantMiscellaneousDetails->year            = $request->miscYear3;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }

             $createDoc = new DocumentMaster;
             $createDoc->createDocMasterData($request->applicantLeprosyAffectedMother,
                                            $request->applicantLeprosyAffectedFather,
                                            $request->applicantLeprosyAffectedSelf,
                                            $request->hasAdmissionLetter,
                                            $request->applicantDisablityMother,
                                            $request->applicantDisablityFather,
                                            $request->applicantDisablitySelf,
                                            $grad,
                                            $applicationDetails->id);

             DB::commit();
             return array('success' => true, 'msg'=>[], 'data'=>$newApplicationId);
         }
         catch(Exception $e) {
             DB::rollBack();
             return array('success' => false, 'msg'=>[$e]);
         }
     }
 
     # Edit Scholarship Application
     public function editScholarshipApplication(string $applicationId, Request $request)
     {
        $grad = true;
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
            'applicantContactNoSelf'            => ['required'],
            'applicantContactNoGuardian'        => ['required'],
            'applicantEmailId'                  => ['required'],
            'applicantContactNoColonyLeader'    => ['required'],
            'applicantColonyleaderName'         => [],

           //  'examinationLevel10'                => ['required'],
           //  'universityBoardCouncil10'          => ['required'],
           //  'mainSubjects10'                    => ['required'],
           //  'yearOfPassing10'                   => ['required','digits:4'],
           //  'percentage10'                      => ['required'],
           //  'division10'                        => ['required'],
            
           //  'examinationLevel12'                => ['required'],
           //  'universityBoardCouncil12'          => ['required'],
           //  'mainSubjects12'                    => ['required'],
           //  'yearOfPassing12'                   => ['required','digits:4'],
           //  'percentage12'                      => ['required'],
           //  'division12'                        => ['required'],
            

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
            'miscRelationship1'                 => [],
            'miscRelationship2'                 => [],
            'miscRelationship3'                 => [],
        ]);
        
         DB::beginTransaction();
         try {
            //  $nursingScholarshipApplication = NursingScholarshipApplication::where('applicationId', $applicationId)->first();
 
            //  if ($nursingScholarshipApplication->hasAdmissionLetter === 'NO' && $request->hasAdmissionLetter === 'YES') {
            //      $instituteAddress = new Address;
            //      $instituteAddress->addressAddln1    = $request->insAddressAddln1;
            //      $instituteAddress->addressAddln2    = $request->insAddressAddln2;
            //      $instituteAddress->addressCity      = $request->insAddressCity;
            //      $instituteAddress->addressState     = $request->insAddressState;
            //      $instituteAddress->addressDistprov  = $request->insAddressDistprov;
            //      $instituteAddress->addressPinzip    = $request->insAddressPinzip;
            //      $instituteAddress->addressCountry   = 'India';
            //      $instituteAddress->save();
 
            //      $instituteDetails = new InstituteDetails;
            //      $instituteDetails->instituteName = $request->insName;
            //      $instituteDetails->instituteAddressId = $instituteAddress->id;
            //      $instituteDetails->save();
 
            //      $nursingScholarshipApplication->hasAdmissionLetter  = $request->hasAdmissionLetter;
            //      $nursingScholarshipApplication->instituteId         = $instituteDetails->id;
            //      $nursingScholarshipApplication->instituteCourse     = $request->insCourse;
            //      $nursingScholarshipApplication->recognizedByINC     = $request->recognizedByINC;
            //      $nursingScholarshipApplication->update();
            //  } else if ($nursingScholarshipApplication->hasAdmissionLetter === 'YES' && $request->hasAdmissionLetter === 'NO') {
            //      $instituteDetails = InstituteDetails::where('id',$nursingScholarshipApplication->instituteId)->first();
            //      $instituteAddress = Address::where('id',$instituteDetails->instituteAddressId)->first();
            //      $instituteAddress->delete();
            //      $instituteDetails->delete();
                 
            //      $nursingScholarshipApplication->hasAdmissionLetter  = $request->hasAdmissionLetter;
            //      $nursingScholarshipApplication->instituteId         = NULL;
            //      $nursingScholarshipApplication->instituteCourse     = NULL;
            //      $nursingScholarshipApplication->recognizedByINC     = NULL;
            //      $nursingScholarshipApplication->update();
            //  } else if ($nursingScholarshipApplication->hasAdmissionLetter === 'YES' && $request->hasAdmissionLetter === 'YES') {
            //      $instituteDetails = InstituteDetails::where('id',$nursingScholarshipApplication->instituteId)->first();
            //      $instituteDetails->instituteName = $request->insName;
            //      $instituteDetails->update();
 
            //      $instituteAddress = Address::where('id',$instituteDetails->instituteAddressId)->first();
            //      $instituteAddress->addressAddln1    = $request->insAddressAddln1;
            //      $instituteAddress->addressAddln2    = $request->insAddressAddln2;
            //      $instituteAddress->addressCity      = $request->insAddressCity;
            //      $instituteAddress->addressState     = $request->insAddressState;
            //      $instituteAddress->addressDistprov  = $request->insAddressDistprov;
            //      $instituteAddress->addressPinzip    = $request->insAddressPinzip;
            //      $instituteAddress->update();
 
            //      $nursingScholarshipApplication->instituteCourse     = $request->insCourse;
            //      $nursingScholarshipApplication->recognizedByINC     = $request->recognizedByINC;
            //      $nursingScholarshipApplication->update();
            //  }
 
             $applicationDetails = ApplicationDetails::where('schApplicationId', $applicationId)->first();

             $applicationDetails->hasAdmissionLetter   = $request->hasAdmissionLetter;

             $applicationDetails->applicantNameF                   = $request->applicantNameF;
             $applicationDetails->applicantNameM                   = $request->applicantNameM;
             $applicationDetails->applicantNameL                   = $request->applicantNameL;
             $applicationDetails->applicantFatherName              = $request->applicantFatherName;
             $applicationDetails->applicantMotherName              = $request->applicantMotherName;
             $applicationDetails->applicantDOB                     = $request->applicantDOB;
             $applicationDetails->applicantGender                  = $request->applicantGender;
             $applicationDetails->applicantLeprosyAffectedSelf     = $request->applicantLeprosyAffectedSelf;
             $applicationDetails->applicantLeprosyAffectedFather   = $request->applicantLeprosyAffectedFather;
             $applicationDetails->applicantLeprosyAffectedMother   = $request->applicantLeprosyAffectedMother;
             $applicationDetails->applicantDisablityMother         = $request->applicantDisablityMother; 
             $applicationDetails->applicantDisablityFather         = $request->applicantDisablityFather; 
             $applicationDetails->applicantDisablitySelf           = $request->applicantDisablitySelf;
             $applicationDetails->applicantHasBPLCard              = $request->applicantHasBPLCard;
             $applicationDetails->applicantDomicileState           = $request->applicantDomicileState;
             $applicationDetails->applicantContactNoSelf           = $request->applicantContactNoSelf;
             $applicationDetails->applicantContactNoGuardian       = $request->applicantContactNoGuardian;
             $applicationDetails->applicantEmailId                 = $request->applicantEmailId;
             $applicationDetails->applicantContactNoColonyLeader   = $request->applicantContactNoColonyLeader;
             $applicationDetails->applicantColonyLeaderName        = $request->applicantColonyleaderName;
            //  $applicationDetails->applicantAddressId               = $applicationAddress->id;
             $applicationDetails->applicationType                  = "Online";
             $applicationDetails->scholarshipType                  = $request->scholarshipType;
             $getDomainValuesApp = DomainValues::where('value',$request->scholarshipType)->first();
             $applicationDetails->scholarshipTypeValueId           = $getDomainValuesApp->id;
             if($request->hasAdmissionLetter === 'YES') {
                $applicationDetails->instituteId      = $request->instituteId;
                if($request->courseLevelValueId == 'N')
                {
                    $getDomainValues = DomainValues::where('value','Graduate')->first();
                    $applicationDetails->courseLevelValueId  = $getDomainValues->id;
                }else{
                    $applicationDetails->courseLevelValueId = $request->courseLevelValueId;
                }
                $applicationDetails->courseNameValueId   = $request->courseNameValueId;
                $applicationDetails->recognizedByINC  = $request->recognizedByINC;
             }else{
                $applicationDetails->courseLevelValueId = null;
                $applicationDetails->courseNameValueId   = null;
                $applicationDetails->recognizedByINC  = null;
             }

             if($request->scholarshipType == 'Nursing')
               $grad = false;
            
             $applicationDetails->update();
 
             $applicationAddress = Address::where('id', $applicationDetails->applicantAddressId)->first();
             $applicationAddress->addressAddln1    = $request->addressAddln1;
             $applicationAddress->addressAddln2    = $request->addressAddln2;
             $applicationAddress->addressCity      = $request->addressCity;
             $applicationAddress->addressState     = $request->addressState;
             $applicationAddress->addressDistprov  = $request->addressDistprov;
             $applicationAddress->addressPinzip    = $request->addressPinzip;
             $applicationAddress->addressCountry   = 'India';
             $applicationAddress->update();
             
             // for 10
            // $getDomainValuesExam10 = DomainValues::where('value',$request->education1ExaminationLevel)->first();
             $applicationEducationDetails10 = ApplicationEducationDetails::where('applicationId',  $applicationDetails->id)->where('examLevelValueId',1)->first();
             $applicationEducationDetails10->examBoardValueId       = $request->education1University;
             $applicationEducationDetails10->examPassedValueId      = $request->education1ExaminationPassed;
            //  $applicationEducationDetails->examLevelValue            = $request->mainSubjects10;
            //  $applicationEducationDetails->examBoardValue           = $request->yearOfPassing10;
            //  $applicationEducationDetails->examPassedValue              = $request->percentage10;
             $applicationEducationDetails10->mainSubjects           = $request->education1MainSubjects;
             $applicationEducationDetails10->yearOfPassing          = $request->education1YearOfPassing;
             $applicationEducationDetails10->percentage             = $request->education1Percentage;
             $applicationEducationDetails10->percentageKeySub       = $request->education1Percentage;
             $applicationEducationDetails10->division               = $request->education1Division;
             $applicationEducationDetails10->update();
             
             // for 12
             //$getDomainValuesExam12 = DomainValues::where('value',$request->education2ExaminationLevel)->first();
             $applicationEducationDetails12 = ApplicationEducationDetails::where('applicationId',  $applicationDetails->id)->where('examLevelValueId', 2)->first();
             $applicationEducationDetails12->examBoardValueId       = $request->education2University;
             $applicationEducationDetails12->examPassedValueId      = $request->education2ExaminationPassed;
            //  $applicationEducationDetails->examLevelValue            = $request->mainSubjects10;
            //  $applicationEducationDetails->examBoardValue           = $request->yearOfPassing10;
            //  $applicationEducationDetails->examPassedValue              = $request->percentage10;
             $applicationEducationDetails12->mainSubjects           = $request->education2MainSubjects;
             $applicationEducationDetails12->yearOfPassing          = $request->education2YearOfPassing;
             $applicationEducationDetails12->percentage             = $request->education2Percentage;
             $applicationEducationDetails12->percentageKeySub       = $request->education2Percentage;
             $applicationEducationDetails12->division               = $request->education2Division;
             $applicationEducationDetails12->update();

             //for 13
             if($request->scholarshipType == 'HHDLS'){
                if( $request->education3University != null &&
                    $request->education3ExaminationPassed != null &&
                    $request->education3MainSubjects != null &&
                    $request->education3YearOfPassing != null &&
                    $request->education3Percentage != null &&
                    $request->education3Percentage != null &&
                    $request->education3Division!= null )
                {
                // $getDomainValuesExam13 = DomainValues::where('value',$request->education3ExaminationLevel)->first();
                    $applicationEducationDetails13 = ApplicationEducationDetails::where('applicationId',  $applicationDetails->id)->where('examLevelValueId', 3)->first();
                    if($applicationEducationDetails13)
                    {
                        $applicationEducationDetails13->examBoardValueId       = $request->education3University;
                        $applicationEducationDetails13->examPassedValueId      = $request->education3ExaminationPassed;
                    //  $applicationEducationDetails->examLevelValue            = $request->mainSubjects10;
                    //  $applicationEducationDetails->examBoardValue           = $request->yearOfPassing10;
                    //  $applicationEducationDetails->examPassedValue              = $request->percentage10;
                        $applicationEducationDetails13->mainSubjects           = $request->education3MainSubjects;
                        $applicationEducationDetails13->yearOfPassing          = $request->education3YearOfPassing;
                        $applicationEducationDetails13->percentage             = $request->education3Percentage;
                        $applicationEducationDetails13->percentageKeySub       = $request->education3Percentage;
                        $applicationEducationDetails13->division               = $request->education3Division;
                        $applicationEducationDetails13->update();
                    }else{
                        $applicationEducationDetails131 = new ApplicationEducationDetails; // Graduate only for hddlls
                        // $getDomainValuesExam13 = DomainValues::where('value',$request->education3ExaminationLevel)->first();
                        $applicationEducationDetails131->examLevelValueId       = 3;
                        $applicationEducationDetails131->examBoardValueId       = $request->education3University;
                        $applicationEducationDetails131->examPassedValueId      = $request->education3ExaminationPassed;
                    //  $applicationEducationDetails->examLevelValue            = $request->mainSubjects10;
                    //  $applicationEducationDetails->examBoardValue           = $request->yearOfPassing10;
                    //  $applicationEducationDetails->examPassedValue              = $request->percentage10;
                        $applicationEducationDetails131->mainSubjects           = $request->education3MainSubjects;
                        $applicationEducationDetails131->yearOfPassing          = $request->education3YearOfPassing;
                        $applicationEducationDetails131->percentage             = $request->education3Percentage;
                        $applicationEducationDetails131->percentageKeySub       = $request->education3Percentage;
                        $applicationEducationDetails131->division               = $request->education3Division;
                        $applicationEducationDetails131->applicationId          = $applicationDetails->id;
                        $applicationEducationDetails131->save();

                    }
                }else{
                    $applicationEducationDetails13 = ApplicationEducationDetails::where('applicationId',  $applicationDetails->id)->where('examLevelValueId', 3)->first();
                    if($applicationEducationDetails13)
                    {
                        $applicationEducationDetails13->delete();
                    }
                    $grad = false;
                }
             }
             //end of education
 
             $allApplicantMiscellaneousDetails = ApplicationMiscellaneousDetails::where('applicationId', $applicationDetails->id)->orderBy('id','ASC')->get();
 
             if (count($allApplicantMiscellaneousDetails)>0) {
                 $applicantMiscellaneousDetails = ApplicationMiscellaneousDetails::where('id',$allApplicantMiscellaneousDetails[0]->id)->first();
                 $applicantMiscellaneousDetails->delete();
             } 
 
             if (count($allApplicantMiscellaneousDetails)>1) {
                 $applicantMiscellaneousDetails = ApplicationMiscellaneousDetails::where('id',$allApplicantMiscellaneousDetails[1]->id)->first();
                 $applicantMiscellaneousDetails->delete();                
             }
 
             if (count($allApplicantMiscellaneousDetails)>2) {
                 $applicantMiscellaneousDetails = ApplicationMiscellaneousDetails::where('id',$allApplicantMiscellaneousDetails[2]->id)->first();
                 $applicantMiscellaneousDetails->delete();                
             }
 
             if (!empty($request->miscName1) && !empty($request->miscCourse1) && !empty($request->miscYear1)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName1;
                 $applicantMiscellaneousDetails->relationship    = $request->miscRelationship1;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse1;
                 $applicantMiscellaneousDetails->year            = $request->miscYear1;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }
 
             if (!empty($request->miscName2) && !empty($request->miscCourse2) && !empty($request->miscYear2)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName2;
                 $applicantMiscellaneousDetails->relationship    = $request->miscRelationship2;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse2;
                 $applicantMiscellaneousDetails->year            = $request->miscYear2;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }
 
             if (!empty($request->miscName3) && !empty($request->miscCourse3) && !empty($request->miscYear3)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName3;
                 $applicantMiscellaneousDetails->relationship    = $request->miscRelationship3;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse3;
                 $applicantMiscellaneousDetails->year            = $request->miscYear3;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }

             $createDoc = new DocumentMaster;
             $createDoc->createDocMasterData($request->applicantLeprosyAffectedMother,
                                            $request->applicantLeprosyAffectedFather,
                                            $request->applicantLeprosyAffectedSelf,
                                            $request->hasAdmissionLetter,
                                            $request->applicantDisablityMother,
                                            $request->applicantDisablityFather,
                                            $request->applicantDisablitySelf,
                                            $grad,
                                            $applicationDetails->id);
             DB::commit();
             return array('success' => true, 'msg'=>[]);
         }
         catch(Exception $e) {
             DB::rollBack();
             return array('success' => false, 'msg'=>[$e]);
         }
     }

     # Get Scholarship Application
     public function getScholarshipApplication(string $applicationId)
     {
         switch($applicationId)
         {
            case 'HHDLS' :
                $count1 = ApplicationDetails::where('userId' , Auth::user()->id)->where('scholarshipType','HHDLS')->where('sessionId',1)->count();
                if($count1 == 1)
                {
                    return array('return' => true, 'msg'=>[$count1]);
                }else{
                    return array('return' => false, 'msg'=>[$count1]);
                }
            break;
            case 'Nursing' :
                $count2 = ApplicationDetails::where('userId' , Auth::user()->id)->where('scholarshipType','Nursing')->where('sessionId',1)->count();
                if($count2 == 1)
                {
                    return array('return' => true, 'msg'=>[$count2]);
                }else{
                    return array('return' => false, 'msg'=>[$count2]);
                }
            break;
           
         }

        $getApplicationId   = ApplicationDetails::where('schApplicationId', $applicationId)->first();
        $applicationDetails = ApplicationDetails::where('schApplicationId', $applicationId)->with('get_address',
                                                                                                    'get_applicationScheduleTable',
                                                                                                    'get_institute',
                                                                                                    'get_courseDomainValues',
                                                                                                    'get_courseDomainName',
                                                                                                    'get_schTypeDomainValues',
                                                                                                    'get_user',)
                                                                                            ->get();
        if($getApplicationId)
        {
            $getEducationDetails = ApplicationEducationDetails::where('applicationId', $getApplicationId->id)->with('get_examLevelDomainValues',
                                                                                                                    'get_examBoardDomainValues',
                                                                                                                    'get_examPassedDomainValues')->get();
            $getMiscellaneousDetails = ApplicationMiscellaneousDetails::where('applicationId',$getApplicationId->id)->get();
            $data = json_decode(json_encode(array($applicationDetails,$getEducationDetails,$getMiscellaneousDetails)));
            if($data)
            {
                return array('success' => true, 'msg'=>['Data Found!'], 'data'=>$data);
            }
            else{
                return array('success' => false, 'msg'=>['No Data Found!']);
            }
        }else{
            return array('success' => false, 'msg'=>['No Data Found!']);
        }
     }

     # Save Scholarship Annexure1
     public function saveAnnexure1(string $applicationId, Request $request)
     {
        $getApplicationId = ApplicationDetails::where('schApplicationId', $applicationId)->first()->id;
        $prevJ = AnnexureI::where('applicationId', $getApplicationId)->get();
        $prev = [];
        $old = [];
        foreach ($prevJ as $key => $d) {
            $prev[$key] = $d;
        }

        DB::beginTransaction();
         try {
     
                foreach ($request->json()->all() as $ins) {
                    if (!isset($ins['id'])) {
                        $addAnnex1 = new AnnexureI;
                        $addAnnex1->insId              = $ins['insId'];
                        $addAnnex1->courseLevelValueId  = $ins['courseLevelValueId'];
                        $addAnnex1->courseNameValueId  = $ins['courseNameValueId'];
                        $addAnnex1->applicationId      = $getApplicationId;
                        $addAnnex1->addressAddln1    = $ins['addressAddln1'];
                        $addAnnex1->addressAddln2    = $ins['addressAddln2'];
                        $addAnnex1->addressCity      = $ins['addressCity'];
                        $addAnnex1->addressState     = $ins['addressState'];
                        $addAnnex1->addressDistprov  = $ins['addressDistprov'];
                        $addAnnex1->addressPinzip    = $ins['addressPinzip'];
                        $addAnnex1->save();
                    } else {
                        array_push($old,$ins);
                        $editAnnex1 = AnnexureI::where('id',$ins['id'])->first();
                        $editAnnex1->insId              = $ins['insId'];
                        $editAnnex1->courseLevelValueId  = $ins['courseLevelValueId'];
                        $editAnnex1->courseNameValueId  = $ins['courseNameValueId'];
                        $editAnnex1->applicationId      = $getApplicationId;
                        $editAnnex1->addressAddln1    = $ins['addressAddln1'];
                        $editAnnex1->addressAddln2    = $ins['addressAddln2'];
                        $editAnnex1->addressCity      = $ins['addressCity'];
                        $editAnnex1->addressState     = $ins['addressState'];
                        $editAnnex1->addressDistprov  = $ins['addressDistprov'];
                        $editAnnex1->addressPinzip    = $ins['addressPinzip'];
                        $editAnnex1->save();
                    }
                }

                // Delete
                $deletable = array_filter($prev, function ($p) use ($old) {
                    foreach($old as $o) {
                        if ($o['id'] == $p['id']) { return 0; }
                    }

                    DB::commit();
                    return array('success' => true, 'msg'=>[]);

                });
                foreach ($deletable as $del) {
                    $delete = AnnexureI::where('id',$del['id'])->first();
                    $delete->delete();
                }

                DB::commit();
                return array('success' => true, 'msg'=>[]);
            }
            catch(Exception $e) 
            {
                DB::rollBack();
                return array('success' => false, 'msg'=>[$e]);
            }

     }

     #Get annexure1 Data
     public function getAnnexure1(string $applicationId)
     {
        $getApplicationId = ApplicationDetails::where('schApplicationId', $applicationId)->first();
        $getData = AnnexureI::with('get_institute','get_courseLevelName')->where('applicationId',$getApplicationId->id)->get();
        $data = json_decode(json_encode($getData));
        if($data)
        {
            return array('success' => true, 'msg'=>['Data Found!'], 'data'=>$data);
        }
        else{
            return array('success' => false, 'msg'=>['No Data Found!']);
        }
     }

     # Save Scholarship Documents
     public function saveDocuments(string $applicationId,Request $request)
     {
        $request->validate([  
            'docFileNameFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $this->createFolder();       
        $getApplicationId = ApplicationDetails::where('schApplicationId', $applicationId)->first()->id;
        $prevJ = ApplicationDocs::where('applicationId', $getApplicationId)->get();
        $prev = [];
        $old = [];
        foreach ($prevJ as $key => $d) {
            $prev[$key] = $d;
        }

        DB::beginTransaction();
        try {

            foreach ($request->json()->all() as $saveDoc) {
                if (!isset($saveDoc['id'])) {
                    $addDoc = new ApplicationDocs;
                    
                    if (isset($saveDoc['docFileNameFile'])) {
                        $fileName = $this->uploadFile(storage_path('app/public/uploads/schloarshipRecord/'), $saveDoc['docFileNameFile'],$saveDoc['fileName']);
                    } else {
                        $fileName = '';
                    }
                    $addDoc->docFileName               = $fileName;
                    $addDoc->docFilePath               = 'app/public/uploads/schloarshipRecord/';
                    $addDoc->docMasterId               = $saveDoc['idDoc'];
                    $addDoc->applicationId             = $getApplicationId;
                    $addDoc->uploadStatus              = 'YES';
                    $addDoc->save();
                } else {
                    array_push($old,$saveDoc);
                    $editDoc = ApplicationDocs::where('id',$saveDoc['id'])->first();

                    if (isset($saveDoc['docFileNameFile'])) {
                        if (!empty($editDoc->docFileName)) {
                            unlink(storage_path('app/public/uploads/schloarshipRecord/').$editDoc->docFileName);
                        }

                        $fileName = $this->uploadFile(storage_path('app/public/uploads/schloarshipRecord/'), $saveDoc['docFileNameFile'],$saveDoc['fileName']);
                        $editDoc->docFilePath               = 'app/public/uploads/schloarshipRecord/';
                        $editDoc->docFileName  = $fileName;
                        $editDoc->uploadStatus  = 'YES';
                    }
                    $editDoc->update();
                }
            }

            // Delete
            $deletable = array_filter($prev, function ($p) use ($old) {
                foreach($old as $o) {
                    if ($o['id'] == $p['id']) { return 0; }
                }
                
                DB::commit();
                return array('success' => true, 'msg'=>[]);
            });
            foreach ($deletable as $del) {
                $delete = ApplicationDocs::where('id',$del['id'])->first();
                if (!empty($delete->docFileName)) {
                    unlink(storage_path('app/public/uploads/schloarshipRecord/').$delete->docFileName);
                }
                $delete->delete();
            }

            DB::commit();
            return array('success' => true, 'msg'=>[]);
        }
        catch(Exception $e) 
        {
            DB::rollBack();
            return array('success' => false, 'msg'=>[$e]);
        }
     }

    # get Scholarship Documents
    public function getDocuments(string $applicationId)
    {
        $getApplicationId = ApplicationDetails::where('schApplicationId', $applicationId)->first()->id;
        $getData = ApplicationDocs::where('applicationId', $getApplicationId)->with('get_docMaster')->orderBy('docMasterId','ASC')->get();

       

        foreach ($getData as $key => $value) {
            $fileName = $value['docFileName'];
            $url = Storage::url('uploads/schloarshipRecord/'.$fileName);
            $getData[$key]['fileURL'] = $url;
        }

        return $getData;
    }

     # File Uploader
    public function uploadFile(string $path, $base64file, string $filename='')
    {   
        $File =  explode(',', $base64file);
        $file = base64_decode($File[1]);
        $extention = explode(';',explode('/',$File[0])[1])[0];

        if ($filename !== '') {
            $fileName = time().'-'.$filename;
        } else {
            $fileName = time().'.'.$extention;
        }
        
        $path = $path.$fileName;
        file_put_contents($path, $file);

        return $fileName;
    }

    #create DIR
    public function createFolder()
    {
        if(!Storage::exists('public/uploads/schloarshipRecord/')){
            Storage::makeDirectory('public/uploads/schloarshipRecord/');
        }
    }

    public function deleteDoc(string $applicationDocId)
    {
        $delDocFile =ApplicationDocs::where('id', $applicationDocId)->first();
        if (!empty($delDocFile->docFileName)) {
            unlink(storage_path('app/public/uploads/schloarshipRecord/').$delDocFile->docFileName);
        }
        $delDocFile->docFilePath   = null;
        $delDocFile->docFileName   = null;
        $delDocFile->uploadStatus  = 'NO';

        if($delDocFile->update())
        {
            return 1;
        }else{
            return 0;
        }
       
    }

    public function saveAnnexure2(Request $request, $applicationId)
    {
        $editApplication = ApplicationDetails::where('schApplicationId', $applicationId)->first();
        DB::beginTransaction();
        try {
                $editApplication->applicantColonyLeaderName = $request->applicantColonyLeaderName;
                $editApplication->update();

                DB::commit();
                return array('success' => true, 'msg'=>[]);
            }
            catch(Exception $e) 
            {
                DB::rollBack();
                return array('success' => false, 'msg'=>[$e]);
            }
    }

    public function submitApplication(Request $request, $applicationId)
    {
        $editApplication = ApplicationDetails::where('schApplicationId', $applicationId)->first();
        DB::beginTransaction();
        try {
                if($request->appStatus == 1){
                    $editApplication->appStatus = 'Submit';
                    $editApplication->dateLastSubmitted = Carbon::now();
                    $editApplication->update();
                }

                DB::commit();
                return array('success' => true, 'msg'=>[]);
            }
            catch(Exception $e) 
            {
                DB::rollBack();
                return array('success' => false, 'msg'=>[$e]);
            }
    }


}
