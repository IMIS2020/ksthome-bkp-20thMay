// Dashboard and manage scholarship
import ManageMyApplication   from './components/myApplication/manageMyApplication';
import Dashboard           from './components/dashboard';

// Form - Application form and upload documents
import ApplicantForm  from './components/myApplication/applicantForm';
import ApplicantDocuments  from './components/myApplication/applicantDocuments'; 
import Choose           from './components/applicant/choose';

//Nursing scholarship
import Annexure1                 from './components/myApplication/annexure1';
import Annexure2                 from './components/myApplication/annexure2';
import annexure2PrintForm        from './components/myApplication/annexure2PrintForm';
import annexure2BlankForm        from './components/myApplication/annexure2BlankForm';
import ReviewMyApplication       from './components/myApplication/reviewMyApplication';
import ViewMyApplication         from './components/myApplication/viewMyApplication';
import PrintView                 from './components/myApplication/printView';
import PrintAnnexure1            from './components/myApplication/printAnnexure1';

import AdminDashboard            from './components/admin/adminDashboard';
import ApplicationDetails        from './components/admin/manageApplication/applicationDetails';

// Review Application
import AdminApplicantForm      from './components/admin/manageApplication/reviewApplication/applicantForm';
import AdminAnnexure1          from './components/admin/manageApplication/reviewApplication/annexure1';
import AdminAnnexure2          from './components/admin/manageApplication/reviewApplication/annexure2';
import AdminApplicantDocuments from './components/admin/manageApplication/reviewApplication/applicantDocuments';
import AdminReview             from './components/admin/manageApplication/reviewApplication/review';
import AdminPrintAnnexure1          from './components/admin/manageApplication/reviewApplication/printAnnexure1';
import AdminPrintView       from './components/admin/manageApplication/reviewApplication/printView';
// End review application

// Domains
    import AddDomains    from './components/admin/domains/addDomains';
    import ManageDomains from './components/admin/domains/manageDomains';
// End Domains

// Admin Schedule
    import AddSchedule    from './components/admin/applicationSchedule/addSchedule';
    import ManageSchedule from './components/admin/applicationSchedule/manageSchedule';
    import ExtendLastDateNursing from './components/admin/applicationSchedule/extendLastDateNursing';
    import ExtendLastDateHHDLS from './components/admin/applicationSchedule/extendLastDateHHDLS';
// End Admin Schedule

// Manage Users
    import ManageUsers from './components/admin/manageUsers';
// End manage users
    
// All registered users
   import AllRegisteredUsers from './components/admin/allRegisteredUsers';
// End all registered users

// admin users profile 
   import AdminUserProfile from './components/admin/adminUserProfile';
// End admin user profile


export default{ 
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [ 
                /*** START OF UI ROUTES ***/ 
                /******
                 * UI Routes to call dashnoard component
                 */
                {
                    path: '/dashboard',
                    component: Dashboard,
                    name: 'dashboard'
                },

               /***********
                * UI Routes to call applicant components from applicant
                * folder
                */
                // {
                //     path: '/application-form',
                //     component: ApplicantForm,
                //     name: "application-form"
                // },
                // {
                //     path: '/application-documents',
                //     component: ApplicantDocuments,
                //     name: "applicant-documents"
                // },
               
                {
                    path:'/choose-scholarship',
                    component: Choose,
                    name: 'choose-scholarship'
                },


                /******
                 * UI Routes to call application components from application
                 * folder
                 */
                {
                    path: '/manage-my-application',
                    component: ManageMyApplication,
                    name: "manage-my-application"
                },
                {
                    path: '/application-form/:applicationType',
                    component: ApplicantForm,
                    name: "application-form-nursing"
                },
                // {
                //     path: '/application-form/HHDLS',
                //     component: ApplicantForm,
                //     name: "application-form-hddlss"
                // },
                {
                    path: '/application-form/:applicationId',
                    component: ApplicantForm,
                    name: "application-form"
                },
                {
                    path: '/application-documents/:applicationId',
                    component: ApplicantDocuments,
                    name: "applicant-documents"
                },
                {
                    path: '/annexure-1/:applicationId',
                    component: Annexure1,
                    name: "annexure-1"
                },
                {
                    path: '/annexure-2/:applicationId',
                    component: Annexure2,
                    name: "annexure-2"
                },
                {
                    path: '/annexure-2-print-form/:applicationId',
                    component: annexure2PrintForm,
                    name: "annexure-2-print-form"
                },
                {
                    path: '/annexure-2-blank-form/:applicationId',
                    component: annexure2BlankForm,
                    name: "annexure-2-blank-form"
                },
                {
                    path: '/review-submit/:applicationId',
                    component: ReviewMyApplication,
                    name: "review-submit"
                },
                {
                    path: '/view-application/:applicationId',
                    component:ViewMyApplication,
                    name: "view-application"
                },
                {
                    path: '/print-view-application/:applicationId',
                    component:PrintView,
                    name: "print-view-application"
                },
                {
                    path: '/print-view-annexure1/:applicationId',
                    component:PrintAnnexure1,
                    name: "print-view-annexure1"
                },
                /*****
                 * UI call ends for application
                 */

                /****
                 * API calls for application-from
                 */
                {
                    path:'/api/add-application-form/:userId',
                },
                {
                    path:'/api/edit-application-form/:applicationId',
                },
                {
                    path:'/api/get-application-form-data/:applicationId',
                },
                {
                    path:'/api/save-annexure2/:applicationId',
                },
                {
                    path:'/api/submit-app/:applicationId',
                },
                /****
                 * End API calls for application from
                 */

                /****
                 * API calls for annexure1
                 */
                {
                    path:'/api/add-annexure1/:applicationId',
                },
                {
                    path:'/api/edit-annexure1/:applicationId',
                },
                {
                    path:'/api/get-annexure1/:applicationId',
                },
                /****
                 * End API calls for application from
                 */

                /****
                 * API Call for domainValues 
                 */
                {
                    path:'/api/domain/examinationLevel',
                },
                {
                    path:'/api/domain/examinationLevel10',
                },
                {
                    path:'/api/domain/examinationLevel12',
                },
                {
                    path:'/api/domain/examinationLevel13',
                },
                {
                    path:'/api/domain/examinationPassed10',
                },
                {
                    path:'/api/domain/examinationPassed12',
                },
                {
                    path:'/api/domain/examinationPassed13',
                },
                {
                    path:'/api/domain/universityBoardCouncil',
                },
                {
                    path:'/api/domain/universityBoardCouncil10',
                },
                {
                    path:'/api/domain/universityBoardCouncil12',
                },
                {
                    path:'/api/domain/universityBoardCouncil13',
                },
                {
                    path:'/api/domain/scholarship',
                },
                {
                    path:'/api/domain/course-level/hhdls',
                },
                {
                    path:'/api/domain/course-level/nursing',
                },
                {
                    path:'/api/domain/course-name/hhdls/:id',
                },
                {
                    path:'/api/domain/course-name/nursing',
                },
                {
                    path:'/api/domain/add',
                },
                /****
                 * End API calls for domainValues
                 */

                 /****
                 * API Call for Institute details 
                 */
                {
                    path:'/api/institute/get-data/:type',
                },
                {
                    path:'/api/institute/add',
                },
                {
                    path:'/api/institute/get-details/:insId',
                },
                 /****
                 * End API calls for Institue details
                 */

                /***
                 * Doc Master Api call
                 */
                {
                    path:'/api/doc-master',
                },
                /***
                 * End Doc Master Api call
                 */

                /***
                 * Document upadte 
                 */
                 {
                     path:'/api/add-documents/:applicatioId',
                 },
                 {
                     path: '/api/get-documents/:applicatioId',
                 },
                 {
                    path: '/api/del-documents/:applicationDocId/:applicationType',
                 },
                 {
                    path: '/api/get-application-file/:shcName/:applicationId',
                 },
                /***
                 * end document
                 */

                /***
                 * Manage my application
                 */

                 {
                    path: '/api/manage-my-application',
                 },
                /***
                 * end Manage my application
                 */
                

    
// //-------------------------------------//

                // Admin Section start
                /***
                 * Admin Dashboard UI
                 */
                {
                    path: '/admin',
                    component:AdminDashboard,
                    name: "admin-dashboard"
                },
                /***
                 * End Admin Dashboard
                 */

                /***
                 * Manage my application
                 */
                {
                    path: '/admin/manage-application-details',
                    component:ApplicationDetails,
                    name: "manage-application"
                },
                /***
                 * Manage my application
                 */

                /***
                 * 
                 * Review Application
                 */

                {
                    path: '/admin/review-application-form/:applicationId',
                    component:AdminApplicantForm,
                    name: "review-application-form"
                },

                {
                    path: '/admin/review-annexure-1/:applicationId',
                    component:AdminAnnexure1,
                    name: "review-annexure-1"
                },

                {
                    path: '/admin/review-annexure-2/:applicationId',
                    component:AdminAnnexure2,
                    name: "review-annexure-2"
                },

                {
                    path: '/admin/review-applicant-documents/:applicationId',
                    component:AdminApplicantDocuments,
                    name: "review-applicant-documents"
                },

                {
                    path: '/admin/review/:applicationId',
                    component:AdminReview,
                    name: "review"
                },

                {
                    path: '/admin/print-view-application/:applicationId',
                    component:AdminPrintView,
                    name: "print-view-application"
                },
                {
                    path: '/admin/print-view-annexure1/:applicationId',
                    component: AdminPrintAnnexure1,
                    name: "print-view-annexure1"
                },


                    /***
                 * 
                 * End Review Application
                 */

                /***
                 * 
                 * Admin Domain
                 */
                {
                    path: '/admin/add-domains',
                    component:AddDomains,
                    name: "add-domains"
                },
                {
                    path: '/admin/manage-domains',
                    component:ManageDomains,
                    name: "manage-domains"
                },

                 {
                    path: '/admin/admin-api/get-domains',
                 },
                /***
                 * 
                 * End Admin Domain
                 */

                /***
                 * 
                 * Admin Schedule
                 */
                {
                    path: '/admin/add-application-schedule',
                    component:AddSchedule,
                    name: "add-schedule"
                },
                {
                    path: '/admin/manage-application-schedule',
                    component:ManageSchedule,
                    name: "manage-schedule"
                },
                {
                    path: '/admin/extend-last-date-nursing',
                    component:ExtendLastDateNursing,
                    name: "extend-last-date-nursing"
                },
                {
                    path: '/admin/extend-last-date-HHDLS',
                    component:ExtendLastDateHHDLS,
                    name: "extend-last-date-HHDLS"
                },

                {
                    path: '/admin/admin-api/get-extend-last-date-nursing/:scholarshipTypeValueId',
                },

                {
                    path: '/admin/admin-api/get-extend-last-date-HHDLS/:scholarshipTypeValueId',
                },

                {
                    path: '/admin/admin-api/edit-last-date-nursing/:scholarshipTypeValueId',
                },

                {
                    path: '/admin/admin-api/edit-last-date-HHDLS/:scholarshipTypeValueId',
                },

                {
                    path: '/admin/admin-api/deactive-schedule/:scholarshipTypeValueId',
                },

                {
                    path: '/admin/admin-api/get-schedules',
               },




                {
                     path: '/admin/admin-api/get-schedules',
                },
                {
                     path: '/admin/admin-api/get-session',
                },

                {
                    path: '/admin/admin-api/get-schedules/filter-data',
                },

                
                 /***
                 * 
                 * End Admin Schedule
                 */

                /***
                 * 
                 * Admin API call for get application details
                 */
                {
                    path: '/admin/admin-api/get-application-details',
                },
              /***
                 * 
                 *End Admin API call for get application details
                 */


                 /***
                 * 
                 * Admin API call for get filter application details
                 */

                    {
                      path:  '/admin/admin-api/get-application-details/filter/data',
                    },
                    {
                        path: '/admin/admin-api/get-application-details/filter-data',
                    },

                    {
                        path: '/admin/admin-api/make-status-saved/:applicationId',
                    },
              /***
                 * 
                 *End Admin API call for get filter application details
                 */








                /***
                 * 
                 * Admin Side vue application
                 */

                {
                    path:'/admin/admin-api/get-application-form-data/:applicationId',
                },

                {
                    path:'/admin/admin-api/get-annexure1/:applicationId',
                },

                {
                    path: '/admin/admin-api/get-documents/:applicatioId',
                },

                {
                    path: '/admin/admin-api/get-application-file/:shcName/:applicationId',
                },
                /***
                 * 
                 *End of Admin Side vue application
                 */

                  /****
                 * API Call for admin domainValues 
                 */
                {
                    path:'/admin/admin-api/domain/examinationLevel',
                },
                {
                    path:'/admin/admin-api/domain/examinationLevel10',
                },
                {
                    path:'/admin/admin-api/domain/examinationLevel12',
                },
                {
                    path:'/admin/admin-api/domain/examinationLevel13',
                },
                {
                    path:'/admin/admin-api/domain/examinationPassed10',
                },
                {
                    path:'/admin/admin-api/domain/examinationPassed12',
                },
                {
                    path:'/admin/admin-api/domain/examinationPassed13',
                },
                {
                    path:'/admin/admin-api/domain/universityBoardCouncil',
                },
                {
                    path:'/admin/admin-api/domain/universityBoardCouncil10',
                },
                {
                    path:'/admin/admin-api/domain/universityBoardCouncil12',
                },
                {
                    path:'/admin/admin-api/domain/universityBoardCouncil13',
                },
                {
                    path:'/admin/admin-api/domain/scholarship',
                },
                {
                    path:'/admin/admin-api/domain/course-level/hhdls',
                },
                {
                    path:'/admin/admin-api/domain/course-level/nursing',
                },
                {
                    path:'/admin/admin-api/domain/course-name/hhdls/:id',
                },
                {
                    path:'/admin/admin-api/domain/course-name/nursing',
                },
                {
                    path:'/admin/admin-api/domain/add',
                },
                /****
                 * End API calls for admin domainValues
                 */

                 /****
                 * API Call for admin Institute details 
                 */
                  {
                    path:'/admin/admin-api/institute/get-data/:type',
                  },
                  {
                    path:'/admin/admin-api/institute/add',
                  },
                  {
                    path:'/admin/admin-api/institute/get-details/:insId',
                  },
                 /****
                 * End API calls for admin Institute details
                 */

                 /***
                 * Doc Master admin Api call
                 */
                    {
                        path:'/admin/admin-api/doc-master',
                    },
                /***
                 * End Doc Master admin Api call
                 */


                 /***
                 * Manage-users
                 */
                    {
                        path: '/admin/manage-internal-users',
                        component:ManageUsers,
                        name: "manage-users"
                    },


                    

                    {
                        path: '/admin/admin-api/add-users',
                    },

                    {
                        path: '/admin/admin-api/get-all-users',
                    },

                    {
                        path: '/admin/admin-api/get-users/:userId',
                    },

                    {
                        path: '/admin/admin-api/edit-users/:userId',
                    },

                    {
                        path: '/admin/admin-api/get-all-users/filter/data',
                    },

                    {
                        path: '/admin/admin-api/delete-users/:userId',
                    },

                    {
                        path: '/admin/admin-api/user-status-changed/:userId',
                    },
                    {
                        path: '/admin/admin-api/manage-internal-user/filter',
                        component:ManageUsers,
                        name: "manage-users"
                    },
                    {
                        path: '/admin/admin-api/manage-internal-user/filter',
                    },

                 /***
                 * End manage-users
                 */

                /***
                 * show all registered users
                 */

                 {
                    path: '/admin/all-registered-users',
                    component:AllRegisteredUsers,
                    name: "all-registered-users"
                },


                {
                    path: '/admin/admin-api/get-all-registered-users',
                },

                {
                    path: '/admin/admin-api/get-all-registered-users/filter/data',
                },

                {
                    path: '/admin/admin-api/all-registered-users/filter',
                    component:AllRegisteredUsers,
                    name: "all-registered-users"
                },

                {
                    path: '/admin/admin-api/all-registered-users/filter',
                },

                /***
                 * End show all registered users
                 */


                 /***
                 * admin user profile
                 */
                  {
                    path: '/admin/all-user-profile',
                    component:AdminUserProfile,
                    name: "all-user-profile"
                  },

                  {
                    path: '/admin/admin-api/get-profile/:userId',
                  },

                  {
                    path: '/admin/admin-api/update-password/:userId',
                  },

                  {
                    path: '/admin/admin-api/edit-profile/:userId',
                  },

                //   {
                //   path: '/admin/admin-api/upload-profile-picture',
                //   },

                  /***
                 * End admin user profile
                 */
               
 ]
}