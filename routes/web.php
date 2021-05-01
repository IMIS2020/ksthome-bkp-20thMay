<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('welcome');});
Route::get('/','Scholarship\UserProfileController@getUser')->name('welcomePage');
Route::get('/unauthorised', function () { return abort(403);});


Auth::routes(); 
Route::get('/verify','VerifyController@getVerify')->name('getverify');
Route::post('/verify','VerifyController@postVerify')->name('verify');
Route::post('/resend-otp','Auth\LoginController@resendOTP')->name('resend');
Route::post('/change-password', 'ChangePasswordController@store')->name('change.password');

// Route::post('/delete-user/biswanathbanik.1999@gmail.com', 'VerifyController@deleteUser')->name('delete.user');

// Route::get('/forgot-password','ForgotPasswordController@showForgotPassword');
// Route::post('/forgot-password','ForgotPasswordController@postForgotPassword');
// Route::get('/forgot-verify','ForgotVerifyController@getForgotVerify')->name('forgot.verify');
// Route::post('/forgot-verify','ForgotVerifyController@postForgotVerify');


Route::group(['middleware' => ['auth']], function (){

   /*** START OF UI ROUTES ***/ 
    /******
     * UI Routes to call dashnoard component
     */
    Route::get('/dashboard','SystemController@dashboard');
    Route::post('/update-profile-photo','Scholarship\UserProfileController@store');

    /***
    *Contact-Us
    */ 
     Route::get('/contact-us','ContactUsController@viewContactUs');
     Route::post('/send','ContactUsController@send');
     
    /***
    *End Contact Us
    */

    /***********
    * UI Routes to call applicant components from applicant
    * folder
    */
    Route::get('/application-form/{applicationType}', 'SystemController@applicantForm');
    // Route::get('/application-form/HHDLS', 'SystemController@applicantForm');
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
    Route::get('/print-view-annexure1/{applicationId}', 'SystemController@printAnnexure1');
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
    //Examination Level
    Route::get('/domain/examinationLevel','Scholarship\DomainController@getExaminationLevel');
    Route::get('/domain/examinationLevel10','Scholarship\DomainController@getExaminationLevel10');
    Route::get('/domain/examinationLevel12','Scholarship\DomainController@getExaminationLevel12');
    Route::get('/domain/examinationLevel13','Scholarship\DomainController@getExaminationLevel13');

    //Examination Passed
    Route::get('/domain/examinationPassed10','Scholarship\DomainController@getExaminationPassed10');
    Route::get('/domain/examinationPassed12','Scholarship\DomainController@getExaminationPassed12');
    Route::get('/domain/examinationPassed13','Scholarship\DomainController@getExaminationPassed13');

    //Board and council
    Route::get('/domain/universityBoardCouncil','Scholarship\DomainController@getUniversityBoardCouncil');
    Route::get('/domain/universityBoardCouncil10','Scholarship\DomainController@getUniversityBoardCouncil10');
    Route::get('/domain/universityBoardCouncil12','Scholarship\DomainController@getUniversityBoardCouncil12');
    Route::get('/domain/universityBoardCouncil13','Scholarship\DomainController@getUniversityBoardCouncil13');

    // Route::get('/domain/examinationPassed','Scholarship\DomainController@getExaminationPassed');
    // Route::get('/domain/universityBoardCouncil','Scholarship\DomainController@getUniversityBoardCouncil');
    Route::get('/domain/scholarship','Scholarship\DomainController@getScholarship');
    Route::get('/domain/course-name/hhdls/{id}','Scholarship\DomainController@getCourseNameHHDLS');
    Route::get('/domain/course-name/nursing','Scholarship\DomainController@getCourseNameNursing');
    Route::get('/domain/course-level/hhdls','Scholarship\DomainController@getCourseLevelHHDLS');
    Route::get('/domain/course-level/nursing','Scholarship\DomainController@getCourseLevelNursing');
    #Add new Domain Values
    Route::post('/domain/add','Scholarship\DomainController@addDomainValues');
    /****
     * End API calls for domainValues
     */
    
    /****
     * API Call for Institue details 
     */
    Route::get('/institute/get-data/{type}','Scholarship\InstituteController@getInstitute');
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
    Route::get('/del-documents/{applicationDocId}/{applicationType}','Scholarship\ApplicationController@deleteDoc');
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
    /***
    *Manage application
    */
     Route::get('/manage-application-details', 'Admin\AdminSystemController@manageApplicationDetails');
     /***
    *End Manage application
    */


    /***
    *Review application
    */
    Route::get('/review-application-form/{applicationId}', 'Admin\AdminSystemController@reviewApplicantForm');
    Route::get('/review-annexure-1/{applicationId}', 'Admin\AdminSystemController@reviewAnnexure1');
    Route::get('/review-annexure-2/{applicationId}', 'Admin\AdminSystemController@reviewAnnexure2');
    Route::get('/review-applicant-documents/{applicationId}', 'Admin\AdminSystemController@reviewApplicantDocuments');
    Route::get('/review/{applicationId}', 'Admin\AdminSystemController@review');
    Route::get('/print-view-application/{applicationId}', 'Admin\AdminSystemController@printView');
    Route::get('/print-view-annexure1/{applicationId}', 'Admin\AdminSystemController@printAnnexure1');
    /***
   *Review application
   */

   /***
   *Domains 
   */
    Route::get('/add-domains',    'Admin\AdminSystemController@addDomains');
    Route::get('/manage-domains', 'Admin\AdminSystemController@manageDomains');
    /***
   *End Domains 
   */

   /***
   *schedule 
   */
   Route::get('/add-application-schedule',    'Admin\AdminSystemController@addSchedule');
   Route::get('/manage-application-schedule',    'Admin\AdminSystemController@manageSchedule');
   Route::get('/extend-last-date',    'Admin\AdminSystemController@extendLastDate');
   /***
   *End schedule 
   */
  
    /***
    *Manage Users
    */
    Route::get('/manage-internal-users', 'Admin\AdminSystemController@manageUsers');
    /***
   *End Manage Users
   */
    Route::group(['prefix' => 'admin-api'], function() { 

      /***
      *Domain API Call
      */
        Route::post('/add-domains', 'Admin\Domains\DomainsController@addNewDomains');
        Route::get('/manage-domains/get-details', 'Admin\Domains\DomainsController@getDomains');
      /***
      * Domain API Call end
      */
 
      /***
      *Manage-application API Call
      */
        Route::get('/get-application-details','Admin\ApplicationDetails\AdminApplicationDetails@getData');
      /***
      *Manage-application API Call End
      */

       /***
      *filter-application API Call
      */
      Route::get('/get-application-details/filter/data','Admin\ApplicationDetails\AdminApplicationDetails@getData');
      Route::post('/get-application-details/filter-data','Admin\ApplicationDetails\AdminApplicationDetails@filterData');
      /***
      *filter-application API Call End
      */

      /***
      * Application data view
      */
       Route::get('/get-application-form-data/{applicationId}','Scholarship\ApplicationController@getScholarshipApplication');
       Route::get('/get-annexure1/{applicationId}','Scholarship\ApplicationController@getAnnexure1');
      /***
      * End Application data view
      */

      /****
      * API Call for admin domainValues 
      */
      //Examination Level
      Route::get('/domain/examinationLevel','Scholarship\DomainController@getExaminationLevel');
      Route::get('/domain/examinationLevel10','Scholarship\DomainController@getExaminationLevel10');
      Route::get('/domain/examinationLevel12','Scholarship\DomainController@getExaminationLevel12');
      Route::get('/domain/examinationLevel13','Scholarship\DomainController@getExaminationLevel13');

      //Examination Passed
      Route::get('/domain/examinationPassed10','Scholarship\DomainController@getExaminationPassed10');
      Route::get('/domain/examinationPassed12','Scholarship\DomainController@getExaminationPassed12');
      Route::get('/domain/examinationPassed13','Scholarship\DomainController@getExaminationPassed13');

      //Board and council
      Route::get('/domain/universityBoardCouncil','Scholarship\DomainController@getUniversityBoardCouncil');
      Route::get('/domain/universityBoardCouncil10','Scholarship\DomainController@getUniversityBoardCouncil10');
      Route::get('/domain/universityBoardCouncil12','Scholarship\DomainController@getUniversityBoardCouncil12');
      Route::get('/domain/universityBoardCouncil13','Scholarship\DomainController@getUniversityBoardCouncil13');

      // Route::get('/domain/examinationPassed','Scholarship\DomainController@getExaminationPassed');
      // Route::get('/domain/universityBoardCouncil','Scholarship\DomainController@getUniversityBoardCouncil');
      Route::get('/domain/scholarship','Scholarship\DomainController@getScholarship');
      Route::get('/domain/course-name/hhdls/{id}','Scholarship\DomainController@getCourseNameHHDLS');
      Route::get('/domain/course-name/nursing','Scholarship\DomainController@getCourseNameNursing');
      Route::get('/domain/course-level/hhdls','Scholarship\DomainController@getCourseLevelHHDLS');
      Route::get('/domain/course-level/nursing','Scholarship\DomainController@getCourseLevelNursing');
      #Add new Domain Values
      Route::post('/domain/add','Scholarship\DomainController@addDomainValues');
      /****
      * End API calls for domainValues
      */
      
      /****
      * API Call for Institue details 
      */
        Route::get('/institute/get-data/{type}','Scholarship\InstituteController@getInstitute');
        Route::post('/institute/add','Scholarship\InstituteController@addInstitute');
        Route::get('/institute/get-details/{insId}','Scholarship\InstituteController@getInstituteDetails');
      /****
      * End API calls for Institue details
      */

      /***
      * Doc Master Api call
      */
      Route::get('/doc-master','Scholarship\DocumentMaster@getDocMasterData');
      Route::get('/get-documents/{applicationId}','Admin\ApplicationDetails\AdminApplicationDetails@getDocuments');
      Route::get('/get-application-file/{shcName}/{applicationId}','Admin\ApplicationDetails\AdminApplicationDetails@getApplicantDoc');
      /***
      * End Doc Master Api call
      */


      /***
      * Manage Users API call
      */
      
      Route::post('/add-users','Auth\AdminCreateUsersController@createUsers');
      Route::get('/get-all-users','Auth\AdminCreateUsersController@getUsers');
      Route::get('/get-all-users/filter/data','Auth\AdminCreateUsersController@getUsers');
      Route::get('/delete-users/{userId}','Auth\AdminCreateUsersController@deleteUsers');
      Route::post('/user-status-changed/{userId}','Auth\AdminCreateUsersController@toggleStatus');
      Route::post('/manage-internal-user/filter', 'Auth\AdminCreateUsersController@filterData');
     
    });
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  });
