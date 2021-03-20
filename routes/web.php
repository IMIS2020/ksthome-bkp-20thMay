<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('welcome');});
Route::get('/','Scholarship\UserProfileController@getUser');
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
    Route::post('/update-profile-photo','Scholarship\UserProfileController@updteProfile');
Route::get('/manage-scholarship', 'SystemController@manageScholarship');
Route::get('/dashboard','SystemController@dashboard');

// Nursing-START
//Add-Start
    Route::get('/application-form', 'SystemController@applicationForm');
//  Route::get('/application-form/{applicationId}', 'SystemController@applicationForm');
    Route::get('/show-application-form-nursing/{applicationId}','SystemController@applicationForm');
    Route::get('/annexure-1','SystemController@annexure1');
    Route::get('/annexure-2','SystemController@annexure2');
    Route::get('/annexure-2-print-form','SystemController@annexure2PrintForm');
    Route::get('/annexure-2-blank-form','SystemController@annexure2BlankForm');
    Route::get('/upload-documents','SystemController@uploadDocuments');
    Route::get('/review-submit',   'SystemController@reviewSubmit');
//Add-End
//View-Start
    Route::get('/view-nursing',       'SystemController@viewNursing');
    Route::get('/print-view-nursing', 'SystemController@printViewNursing');
    
//View-End
//NURSING-END

//HHDLSS-START
//Add-Start
    Route::get('/application-form-HHDLSS', 'SystemController@applicationFormHHDLSS');
    Route::get('/annexure-1-HHDLSS',       'SystemController@annexure1HHDLSS');
    Route::get('/annexure-2-HHDLSS',       'SystemController@annexure2HHDLSS');
    Route::get('/upload-documents-HHDLSS', 'SystemController@uploadDocumentsHHDLSS');
    Route::get('/review-submit-HHDLSS',    'SystemController@reviewSubmitHHDLSS');
//Add-End
//View-Start
    Route::get('/view-HHDLSS',       'SystemController@viewHHDLSS');
    Route::get('/print-view-HHDLSS', 'SystemController@printViewHHDLSS');
    Route::get('/get', 'Admin\ApplicationController@getApplicantDetails');
//View-End
//HHDLSS-END

Route::group(['prefix' => 'api'], function() { 
//NURSING 
//Add-application-form
    Route::post('/add-application-form/{userId}','Scholarship\NursingScholarshipApplicationController@addNursingScholarshipApplication');
//Get Application-form Data
    Route::get('/application-form/{userId}','Scholarship\NursingScholarshipApplicationController@getNursingScholarshipApplication');
    Route::get('/show-application-form-nursing/{applicationId}','Scholarship\NursingScholarshipApplicationController@getNursingScholarshipApplicationId');
//Edit-application-form
    Route::post('/edit-application-form/{applicationId}','Scholarship\NursingScholarshipApplicationController@editNursingScholarshipApplication');
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
