<?php

namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
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
}
