<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('welcome');});
Route::get('/','Scholarship\UserProfileController@getUser')->name('welcomePage');
Route::get('/unauthorised', function () { return abort(403);});


Auth::routes(); 
Route::get('/verify','VerifyController@getVerify')->name('getverify');
Route::post('/verify','VerifyController@postVerify')->name('verify');
Route::post('/resend-otp','Auth\LoginController@resendOTP')->name('resend');

Route::get('/forgot-password','ForgotPasswordController@showForgotPassword');
Route::post('/forgot-password','ForgotPasswordController@postForgotPassword');

Route::get('/forgot-verify','ForgotVerifyController@getForgotVerify')->name('forgot.verify');
Route::post('/forgot-verify','ForgotVerifyController@postForgotVerify');


Route::group(['middleware' => ['auth']], function (){

   /*** START OF UI ROUTES ***/ 
    /******
     * UI Routes to call dashnoard component
     */
    Route::get('/dashboard','SystemController@dashboard');
    Route::post('/update-profile-photo','Scholarship\UserProfileController@store');

    /***********
    * UI Routes to call applicant components from applicant
    * folder
    */
    Route::get('/application-form/Nursing', 'SystemController@applicantForm');
    Route::get('/application-form/HHDLS', 'SystemController@applicantForm');
    Route::get('/application-form/{applicationId}', 'SystemController@applicantForm');
    Route::get('/application-documents/{applicationId}','SystemController@applicantDocuments');
    Route::get('/review-submit/{applicationId}','SystemController@reviewMyApplication');
    Route::get('/print-view-application/{applicationId}','SystemController@viewMyApplication');
    Route::get('/choose-scholarship','SystemController@chooseScholarship');

    /******
     * UI Routes to call application components from application
     * folder
     */
    // Route::get('/manage-my-application','SystemController@manageMyApplication');
    Route::get('/annexure-1/{applicationId}','SystemController@annexure1');
    Route::get('/annexure-2/{applicationId}','SystemController@annexure2');
    Route::get('/annexure-2-print-form/{applicationId}','SystemController@annexure2PrintForm');
    Route::get('/annexure-2-blank-form/{applicationId}','SystemController@annexure2BlankForm');
    Route::get('/review-submit/{applicationId}',   'SystemController@reviewMyApplication');
    Route::get('/view-application/{applicationId}',       'SystemController@viewMyApplication');
    Route::get('/print-view-application/{applicationId}', 'SystemController@printView');

    Route::get('/manage-my-application','SystemController@manageMyApplication');

  /*** END OF UI ROUTES ***/ 
    
    

Route::group(['prefix' => 'api'], function() { 

    /****
     * API calls for application-from
     */
    Route::post('/add-application-form/{userId}','Scholarship\ApplicationController@addScholarshipApplication');
    Route::post('/edit-application-form/{applicationId}','Scholarship\ApplicationController@editScholarshipApplication');
    Route::get('/get-application-form-data/{applicationId}','Scholarship\ApplicationController@getScholarshipApplication');
    Route::post('/save-annexure2/{applicationId}','Scholarship\ApplicationController@saveAnnexure2');
    /****
     * End API calls for application from
     */

    /****
     * API calls for AnnexureI 
     */
    Route::post('/add-annexure1/{applicationId}','Scholarship\ApplicationController@saveAnnexure1');
    Route::get('/get-annexure1/{applicationId}','Scholarship\ApplicationController@getAnnexure1');
    /****
     * End API calls for AnnexureI 
     */

    /****
     * API Call for domainValues 
     */
    Route::get('/domain/examinationLevel','Scholarship\DomainController@getExaminationLevel');
    Route::get('/domain/examinationPassed','Scholarship\DomainController@getExaminationPassed');
    Route::get('/domain/universityBoardCouncil','Scholarship\DomainController@getUniversityBoardCouncil');
    Route::get('/domain/scholarship','Scholarship\DomainController@getScholarship');
    Route::get('/domain/course-name','Scholarship\DomainController@getCourseName');
    Route::get('/domain/course-level','Scholarship\DomainController@getCourseLevel');
    #Add new Domain Values
    Route::post('/domain/add','Scholarship\DomainController@addDomainValues');
    /****
     * End API calls for domainValues
     */
    
    /****
     * API Call for Institue details 
     */
    Route::get('/institute/get-data','Scholarship\InstituteController@getInstitute');
    Route::post('/institute/add','Scholarship\InstituteController@addInstitute');
    Route::get('/institute/get-details/{insId}','Scholarship\InstituteController@getInstituteDetails');
    /****
     * End API calls for Institue details
     */

    /***
     * Doc Master Api call
     */
    Route::get('/doc-master','Scholarship\DocumentMaster@getDocMasterData');
    /***
     * End Doc Master Api call
     */

    /***
     * Document upadte 
     */
    Route::post('/add-documents/{applicatioId}','Scholarship\ApplicationController@saveDocuments');
    Route::get('/get-documents/{applicationIs}','Scholarship\ApplicationController@getDocuments');
    Route::get('/del-documents/{applicationDocId}','Scholarship\ApplicationController@deleteDoc');
    Route::get('/get-application-file/{shcName}/{applicationId}','Scholarship\DocumentMaster@getApplicantDoc');
    /***
     * end Document upadte 
     */


  








   //NURSING 
//Add-application-form
  
//Get Application-form Data
// Get-data in manage-scholarship nursing
    Route::get('/get-manage-scholarship/{userId}','Scholarship\NursingScholarshipApplicationController@showNursingApplication');
   
    Route::get('/show-application-form-nursing/{applicationId}','Scholarship\NursingScholarshipApplicationController@getNursingScholarshipApplicationId');
//Edit-application-form
   
//Add Anexure-I
    Route::post('/add-annexurei/{applicationId}','Scholarship\NursingScholarshipApplicationController@addAnnexureI');
//Edit Annexure-I
    Route::post('/edit-annexurei/{applicationId}','Scholarship\NursingScholarshipApplicationController@editAnnexureI');
//Get-Annexure-I Data
    Route::get('/get-annexurei/{applicationId}','Scholarship\NursingScholarshipApplicationController@getAnnexureI');
//Add Anexure-II
    Route::post('/save-annexureii/{applicationId}','Scholarship\NursingScholarshipApplicationController@saveAnnexureII');
//Upload-Applicant-Documents
    Route::post('/upload-documents/{applicationId}','Scholarship\NursingScholarshipApplicationController@saveApplicantDocuments');
//get Documents
  Route::get('/get-upload-documents/{applicationId}','Scholarship\NursingScholarshipApplicationController@getApplicantDocuments');
//Edit-Documents
  Route::post('/update-documents/{applicationId}','Scholarship\NursingScholarshipApplicationController@updateApplicantDocuments');
  //Delete-Documents
  Route::post('/delete-documents/{applicationId}','Scholarship\NursingScholarshipApplicationController@deleteApplicantDocuments');
//NURSING-END
//user details

//HHDLSS-START

#Application-form
    #ADD-HHDLSS-DATA
    Route::post('/add-application-form-HHDLSS/{userId}','Scholarship\HHDLSSScholarshipApplicationController@addHHDLSSScholarshipApplication');
    #GET-HHDLSS-DATA
    Route::get('/application-form-HHDLSS/{userId}','Scholarship\HHDLSSScholarshipApplicationController@getHHDLSSScholarshipApplication');
    #edit HHDLSS-DATA
    Route::post('/edit-application-form-HHDLSS/{applicationId}','Scholarship\HHDLSSScholarshipApplicationController@editHHDLSSScholarshipApplication');

#Annexure-I
  #Add Anexure-I
    Route::post('/add-annexurei-HHDLSS/{applicationId}','Scholarship\HHDLSSScholarshipApplicationController@addAnnexureI');
    #Get-Annexure-I Data
    Route::get('/get-annexurei-HHDLSS/{applicationId}','Scholarship\HHDLSSScholarshipApplicationController@getAnnexureI');
    #Edit Annexure-I
    Route::post('/edit-annexurei-HHDLSS/{applicationId}','Scholarship\HHDLSSScholarshipApplicationController@editAnnexureI');
  
#Annexure-II
 //Add Anexure-II
   Route::post('/save-annexureii-HHDLSS/{applicationId}','Scholarship\HHDLSSScholarshipApplicationController@saveAnnexureII');

#Upload-Documents
    #add documents
    Route::post('/upload-documents-HHDLSS/{applicationId}','Scholarship\HHDLSSScholarshipApplicationController@saveApplicantDocuments');
    #get Documents
    Route::get('/get-upload-documents-HHDLSS/{applicationId}','Scholarship\HHDLSSScholarshipApplicationController@getApplicantDocuments');
    #Edit-Documents
    Route::post('/update-documents-HHDLSS/{applicationId}','Scholarship\HHDLSSScholarshipApplicationController@updateApplicantDocuments');
    #Delete-Documents
    Route::post('/delete-documents-HHDLSS/{applicationId}','Scholarship\HHDLSSScholarshipApplicationController@deleteApplicantDocuments');

//HHDLSS-END
  });
});

#Admin - Section
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'Admin\AdminSystemController@adminDashboard')->name('admin.dashboard');

    Route::get('/add-domains', 'Admin\AdminSystemController@addDomains');
    Route::get('/manage-domains', 'Admin\AdminSystemController@manageDomains');

    Route::get('/add-nursing-application-schedule', 'Admin\AdminSystemController@addNursingApplicationSchedule');
    Route::get('/add-HHDLSS-application-schedule', 'Admin\AdminSystemController@addHHDLSSApplicationSchedule');
    Route::get('/get-application-schedule-nursing/{applicationScheduleId}','Admin\AdminSystemController@addNursingApplicationSchedule');
    Route::get('/get-application-schedule-HHDLSS/{applicationScheduleId}','Admin\AdminSystemController@addHHDLSSApplicationSchedule');
    Route::get('/manage-application-schedule', 'Admin\AdminSystemController@manageApplicationSchedule');
    Route::get('/edit-HHDLSS-application-schedule/{applicationScheduleId}','Admin\AdminSystemController@addHHDLSSApplicationSchedule');
    Route::get('/extend-last-date', 'Admin\AdminSystemController@extendLastDate');

    Route::get('/manage-application-details', 'Admin\AdminSystemController@manageApplicationDetails');
    // Review-Nursing
    Route::get('/review-nursing-application-form/{applicationId}', 'Admin\AdminSystemController@reviewNursingApplicationForm');
    Route::get('/review-nursing-annexure-1/{applicationId}', 'Admin\AdminSystemController@reviewNursingAnnexure1');
    Route::get('/review-nursing-annexure-2/{applicationId}', 'Admin\AdminSystemController@reviewNursingAnnexure2');
    Route::get('/review-nursing-upload-documents/{applicationId}', 'Admin\AdminSystemController@reviewNursingUploadDocuments');
    Route::get('/review-nursing-review-submit/{applicationId}', 'Admin\AdminSystemController@reviewNursingReview');
    // Review-HHDLSS
    Route::get('/review-HHDLSS-application-form/{applicationId}', 'Admin\AdminSystemController@reviewHHDLSSApplicationForm');
    Route::get('/review-HHDLSS-annexure-1/{applicationId}', 'Admin\AdminSystemController@reviewHHDLSSAnnexure1');
    Route::get('/review-HHDLSS-annexure-2/{applicationId}', 'Admin\AdminSystemController@reviewHHDLSSAnnexure2');
    Route::get('/review-HHDLSS-upload-documents/{applicationId}', 'Admin\AdminSystemController@reviewHHDLSSUploadDocuments');
    Route::get('/review-HHDLSS-review-submit/{applicationId}', 'Admin\AdminSystemController@reviewHHDLSSReview');

    
    Route::group(['prefix' => 'admin-api'], function() { 

        Route::post('/add-domains', 'Admin\DomainsController@addNewDomains');
        Route::get('/manage-domains/get-details', 'Admin\DomainsController@getDomains');

        Route::post('/add-nursing-application-schedule', 'Admin\ApplicationScheduleController@addNewNursingApplicationSchedule');
        Route::post('/edit-nursing-application-schedule/{applicationScheduleId}', 'Admin\ApplicationScheduleController@editNursingApplicationSchedule');
        Route::post('/add-HHDLSS-application-schedule', 'Admin\ApplicationScheduleController@addNewHHDLSSApplicationSchedule');
        Route::post('/edit-HHDLSS-application-schedule/{applicationScheduleId}', 'Admin\ApplicationScheduleController@editHHDLSSApplicationSchedule');
        Route::get('/get-application-schedule/{applicationScheduleId}','Admin\ApplicationScheduleController@editScheduleDetailsById');
        Route::get('/manage-application-schedule/get-details', 'Admin\ApplicationScheduleController@getScholarshipApplication');

        Route::get('/manage-application-details/get-data', 'Admin\ApplicationController@getApplicantDetails');
        #Review-Nursing
        Route::get('/review-nursing-application-form/{applicationId}', 'Admin\ReviewNursing\ReviewNursingController@getNursingScholarshipApplication');
        Route::get('/review-nursing-annexure-1/{applicationId}', 'Admin\ReviewNursing\ReviewNursingController@getAnnexureI');
        Route::get('/review-nursing-annexure-2/{applicationId}', 'Admin\ReviewNursing\ReviewNursingController@getNursingScholarshipApplication');
        Route::get('/review-nursing-upload-documents/{applicationId}', 'Admin\ReviewNursing\ReviewNursingController@getApplicantDocuments');
        Route::get('/review-nursing-review-submit/{applicationId}', 'Admin\ReviewNursing\ReviewNursingController@getApplicantDocuments');
        #END NURSING
        // HHDLSS
        Route::get('/review-HHDLSS-application-form/{applicationId}', 'Admin\ReviewHHDLSS\ReviewHHDLSSController@getHHDLSSScholarshipApplication');
        Route::get('/review-HHDLSS-annexure-1/{applicationId}', 'Admin\ReviewHHDLSS\ReviewHHDLSSController@getAnnexureI');
        Route::get('/review-HHDLSS-annexure-2/{applicationId}', 'Admin\ReviewHHDLSS\ReviewHHDLSSController@getHHDLSSScholarshipApplication');
        Route::get('/review-HHDLSS-upload-documents/{applicationId}', 'Admin\ReviewHHDLSS\ReviewHHDLSSController@getApplicantDocuments');
        Route::get('/review-HHDLSS-review-submit/{applicationId}', 'Admin\ReviewHHDLSS\ReviewHHDLSSController@getApplicantDocuments');
        // End
    });
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  });
