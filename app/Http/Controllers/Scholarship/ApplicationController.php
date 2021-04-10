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
use User;
// use App\ModelScholarship\AnnexureI;
// use App\ModelScholarship\ApplicantDocuments;
// use App\ModelScholarship\NursingScholarshipApplication;


class ApplicationController extends Controller
{
    # Generate New Application Id
     private function newApplicationId()
     {
        $lastId = ApplicationDetails::orderBy('id', 'DESC')->first();
        if(empty($lastId)) { $lastId = 0; }
        else { $lastId = intval(explode('HHDLSS',$lastId->schApplicationId)[1]); }
        return 'IMIS-HHDLSS'.str_pad($lastId+1, 5, "0", STR_PAD_LEFT);
     }
     # Add Scholarship Application
     public function addScholarshipApplication(int $userId, Request $request)
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
             $applicationDetails->applicantHasBPLCard              = $request->applicantHasBPLCard;
             $applicationDetails->applicantDomicileState           = $request->applicantDomicileState;
             $applicationDetails->applicantContactNoSelf           = $request->applicantContactNoSelf;
             $applicationDetails->applicantContactNoGuardian       = $request->applicantContactNoGuardian;
             $applicationDetails->applicantEmailId                 = $request->applicantEmailId;
             $applicationDetails->applicantContactNoColonyLeader   = $request->applicantContactNoColonyLeader;
             $applicationDetails->applicantAddressId               = $applicationAddress->id;
             $applicationDetails->applicationType                  = "Online";
             $applicationDetails->scholarshipType                  = $request->scholarshipType;
             $getDomainValuesApp = DomainValues::where('value',$request->scholarshipType)->first();
             $applicationDetails->scholarshipTypeValueId           = $getDomainValuesApp->id;

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

             $applicationDetails->schApplicationId     = $newApplicationId;
             $applicationDetails->hasAdmissionLetter   = $request->hasAdmissionLetter;
             $applicationDetails->financialYear        = date('Y').'-'.(intval(date('y'))+1);
             $applicationDetails->userId               = $userId;
             if($request->hasAdmissionLetter === 'YES') {
                $applicationDetails->instituteId      = $instituteDetails->id;
                $applicationDetails->instituteCourse  = $request->insCourse;
                $applicationDetails->recognizedByINC  = $request->recognizedByINC;
             }
             $applicationDetails->save();
            
             #Education Details
             $applicationEducationDetails10 = new ApplicationEducationDetails; // class 10
             $getDomainValuesExam10 = DomainValues::where('value',$request->education1ExaminationLevel)->first();
             $applicationEducationDetails10->examLevelValueId       = $getDomainValuesExam10->id;
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
             $getDomainValuesExam12 = DomainValues::where('value',$request->education2ExaminationLevel)->first();
             $applicationEducationDetails12->examLevelValueId       = $getDomainValuesExam12->id;
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

             if($request->scholarshipType == 'Hddlss'){
                $applicationEducationDetails13 = new ApplicationEducationDetails; // Graduate only for hddlls
                $getDomainValuesExam13 = DomainValues::where('value',$request->education3ExaminationLevel)->first();
                $applicationEducationDetails13->examLevelValueId       = $getDomainValuesExam13->id;
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
             }

             if (!empty($request->miscName1) && !empty($request->miscCourse1) && !empty($request->miscYear1)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName1;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse1;
                 $applicantMiscellaneousDetails->year            = $request->miscYear1;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }
 
             if (!empty($request->miscName2) && !empty($request->miscCourse2) && !empty($request->miscYear2)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName2;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse2;
                 $applicantMiscellaneousDetails->year            = $request->miscYear2;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }
 
             if (!empty($request->miscName3) && !empty($request->miscCourse3) && !empty($request->miscYear3)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName3;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse3;
                 $applicantMiscellaneousDetails->year            = $request->miscYear3;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }
             
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
             $applicationDetails->applicantHasBPLCard              = $request->applicantHasBPLCard;
             $applicationDetails->applicantDomicileState           = $request->applicantDomicileState;
             $applicationDetails->applicantContactNoSelf           = $request->applicantContactNoSelf;
             $applicationDetails->applicantContactNoGuardian       = $request->applicantContactNoGuardian;
             $applicationDetails->applicantEmailId                 = $request->applicantEmailId;
             $applicationDetails->applicantContactNoColonyLeader   = $request->applicantContactNoColonyLeader;
            //  $applicationDetails->applicantAddressId               = $applicationAddress->id;
             $applicationDetails->applicationType                  = "Online";
             $applicationDetails->scholarshipType                  = $request->scholarshipType;
             $getDomainValuesApp = DomainValues::where('value',$request->scholarshipType)->first();
             $applicationDetails->scholarshipTypeValueId           = $getDomainValuesApp->id;
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
             $getDomainValuesExam10 = DomainValues::where('value',$request->education1ExaminationLevel)->first();
             $applicationEducationDetails10 = ApplicationEducationDetails::where('applicationId',  $applicationDetails->id)->where('examLevelValueId', $getDomainValuesExam10->id)->first();
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
             $getDomainValuesExam12 = DomainValues::where('value',$request->education2ExaminationLevel)->first();
             $applicationEducationDetails12 = ApplicationEducationDetails::where('applicationId',  $applicationDetails->id)->where('examLevelValueId', $getDomainValuesExam12->id)->first();
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
             if($request->scholarshipType == 'Hddlss'){
                $getDomainValuesExam13 = DomainValues::where('value',$request->education3ExaminationLevel)->first();
                $applicationEducationDetails13 = ApplicationEducationDetails::where('applicationId',  $applicationDetails->id)->where('examLevelValueId', $getDomainValuesExam13->id)->first();
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
                 $applicantMiscellaneousDetails->course          = $request->miscCourse1;
                 $applicantMiscellaneousDetails->year            = $request->miscYear1;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }
 
             if (!empty($request->miscName2) && !empty($request->miscCourse2) && !empty($request->miscYear2)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName2;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse2;
                 $applicantMiscellaneousDetails->year            = $request->miscYear2;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
                 $applicantMiscellaneousDetails->save();
             }
 
             if (!empty($request->miscName3) && !empty($request->miscCourse3) && !empty($request->miscYear3)) {
                 $applicantMiscellaneousDetails = new ApplicationMiscellaneousDetails;
                 $applicantMiscellaneousDetails->name            = $request->miscName3;
                 $applicantMiscellaneousDetails->course          = $request->miscCourse3;
                 $applicantMiscellaneousDetails->year            = $request->miscYear3;
                 $applicantMiscellaneousDetails->applicationId   = $applicationDetails->id;
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

     # Get Scholarship Application
     public function getScholarshipApplication(string $applicationId)
     {
        $getApplicationId   = ApplicationDetails::where('schApplicationId', $applicationId)->first();
        $applicationDetails = ApplicationDetails::where('schApplicationId', $applicationId)->with('get_address',
                                                                                                    'get_applicationScheduleTable',
                                                                                                    'get_institute',
                                                                                                    'get_courseDomainValues',
                                                                                                    'get_courseDomainName',
                                                                                                    'get_schTypeDomainValues',
                                                                                                    'get_user',)
                                                                                            ->get();
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
     }

     # Add Scholarship Annexure1
     public function addAnnexure1(string $applicationId, Request $request)
     {
       
        $institute = $request->json()->all();
        $data = array();
        foreach ($institute as $key => $value) {
            foreach ($value as $k => $v) {
                $data[$key][$k] = $v;
            }
        }

        $getApplicationId = ApplicationDetails::where('schApplicationId', $applicationId)->first();
        DB::beginTransaction();
        try 
        {
            foreach ($data as $ins) {
                $addAnnex1 = new AnnexureI;
                $addAnnex1->insId         = $ins['insId'];
                // $addAnnex1->courseLevelValueId = $ins['courseLevelValueId'];
                $addAnnex1->courseNameValueId  = $ins['courseNameValueId'];
                $addAnnex1->applicationId      = $getApplicationId->id;
                $addAnnex1->addressAddln1    = $ins['addressAddln1'];
                $addAnnex1->addressAddln2    = $ins['addressAddln2'];
                $addAnnex1->addressCity      = $ins['addressCity'];
                $addAnnex1->addressState     = $ins['addressState'];
                $addAnnex1->addressDistprov  = $ins['addressDistprov'];
                $addAnnex1->addressPinzip    = $ins['addressPinzip'];
                $addAnnex1->save();
            }

            DB::commit();
            return array('success' => true, 'msg'=>[$data]);
        }
        catch(Exception $e) {
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
}
