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
    Route::post('/submit-app/{applicationId}','Scholarship\ApplicationController@submitApplication');
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

    /***
    *  Manage my application
    */
    Route::get('/manage-my-application','Scholarship\ManageMyApplications@getAllApplication');
    /***
    * end Manage my application
    */

















































































































    
   
  });
});

#Admin - Section
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'Admin\AdminSystemController@adminDashboard')->name('admin.dashboard');

   

    
    Route::group(['prefix' => 'admin-api'], function() { 

      
    });
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  });
