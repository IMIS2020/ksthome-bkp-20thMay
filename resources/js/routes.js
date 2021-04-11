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

//Hhdlss
// import Annexure1HHDL           from './components/application/scholarship/hhdlss/annexure1';
// import Annexure2HHDL           from './components/application/scholarship/hhdlss/annexure2';
// import annexure2PrintFormHHDL  from './components/application/scholarship/hhdlss/annexure2PrintForm';
// import annexure2BlankFormHHDL  from './components/application/scholarship/hhdlss/annexure2BlankForm';
// import ReviewHHDL              from './components/application/scholarship/hhdlss/review';
// import ViewHHDLSS              from './components/application/scholarship/hhdlss/viewHHDLSS';
// import PrintViewHHDLSS         from './components/application/scholarship/hhdlss/printViewHHDLSS';


// Admin Section

import AdminDashboard from './components/admin/adminDashboard';
import AddDomains from './components/admin/domains/addDomains';
import ManageDomains from './components/admin/domains/manageDomains';
import AddNursingApplicationSchedule from './components/admin/applicationSchedule/addNursingApplicationSchedule';
import AddHHDLSSApplicationSchedule from './components/admin/applicationSchedule/addHHDLSSApplicationSchedule';
import ManageApplicationSchedule from './components/admin/applicationSchedule/manageApplicationSchedule';
import ExtendLastDate from './components/admin/applicationSchedule/extendLastDate';
import ManageApplicationDetails from './components/admin/applicationDetails/manageApplicationDetails';

// Review Section
// Nursing
import ReviewNursingApplicationForm from './components/admin/applicationDetails/reviewApplicationNursing/applicationFormNursing';
import ReviewNursingAnnexure1 from './components/admin/applicationDetails/reviewApplicationNursing/annexure1Nursing';
import ReviewNursingAnnexure2 from './components/admin/applicationDetails/reviewApplicationNursing/annexure2Nursing';
import ReviewNursingUploadDocuments from './components/admin/applicationDetails/reviewApplicationNursing/uploadDocumentsNursing';
import ReviewNursingReview from './components/admin/applicationDetails/reviewApplicationNursing/reviewNursing';
// End

// HHDLSS
import ReviewHHDLSSApplicationForm from './components/admin/applicationDetails/reviewApplicationHHDLSS/applicationFormHHDLSS';
import ReviewHHDLSSAnnexure1 from './components/admin/applicationDetails/reviewApplicationHHDLSS/annexure1HHDLSS';
import ReviewHHDLSSAnnexure2 from './components/admin/applicationDetails/reviewApplicationHHDLSS/annexure2HHDLSS';
import ReviewHHDLSSUploadDocuments from './components/admin/applicationDetails/reviewApplicationHHDLSS/uploadDocumentsHHDLSS';
import ReviewHHDLSSReview from './components/admin/applicationDetails/reviewApplicationHHDLSS/reviewHHDLSS';
// import { component } from 'vue/types/umd';
// End
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
                    path: '/application-form/Nursing',
                    component: ApplicantForm,
                    name: "application-form-nursing"
                },
                {
                    path: '/application-form/Hddlss',
                    component: ApplicantForm,
                    name: "application-form-hddlss"
                },
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
                    path:'/api/domain/examinationPassed',
                },
                {
                    path:'/api/domain/universityBoardCouncil',
                },
                {
                    path:'/api/domain/scholarship',
                },
                {
                    path:'/api/domain/course-level',
                },
                {
                    path:'/api/domain/course-name',
                },
                {
                    path:'/api/domain/add',
                },
                /****
                 * End API calls for domainValues
                 */

                 /****
                 * API Call for Institue details 
                 */
                {
                    path:'/api/institute/get-data',
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
                 /***
                  * end document
                  */
                





    {
        path:'/api/get-manage-my-application/:userId',
    },
    

    //Form and upload documents and choose scholarship
    
    
    {
        path:'/api/application-form/:userId',
    },
    
    {
       path:'/show-application-form-nursing/:applicationId',
       component: ApplicantForm,
       name: "application-form"
    },
    {
        path:'/api/show-application-form-nursing/:applicationId',
    },
    
    {
        path:'/api/upload-documents/:applicationId',
    },
    {
        path:'/api/get-upload-documents/:applicationId',
    },
    {
        path:'/api/update-documents/:applicationId',
    },
    {
        path:'/api/delete-documents/:applicationId',
    },
    
    
    //Nursing
    
    {
        path:'/api/add-annexurei/:applicationId',
    },
    {
        path:'/api/get-annexurei/:applicationId',
    },
    {
        path:'/api/edit-annexurei/:applicationId',
    },
   
   
    {
        path:'/api/save-annexureii/:applicationId',
    },
    
// //-------------------------------------//

// Admin Section start
{
    path: '/admin',
    component:AdminDashboard,
    name: "admin-dashboard"
},
{
    path: '/admin/logout',
},
{
    path: '/admin/add-domains',
    component:AddDomains,
    name: "add-domains"
},
{
    path:'/admin/admin-api/add-domains',
},
{
    path: '/admin/manage-domains',
    component:ManageDomains,
    name: "manage-domains"
},
{
    path: '/admin/admin-api/manage-domains/get-details',
},

{
    path: '/admin/add-nursing-application-schedule',
    component:AddNursingApplicationSchedule,
    name: "add-nursing-application-schedule"
},
{
   path: '/admin/admin-api/add-nursing-application-schedule',
},

{
    path: '/admin/get-application-schedule-nursing/:applicationScheduleId',
    component:AddNursingApplicationSchedule,
    name: "add-nursing-application-schedule"
},
{
    path: '/admin/admin-api/edit-nursing-application-schedule/:applicationScheduleId',
},

{
    path: '/admin/add-HHDLSS-application-schedule',
    component:AddHHDLSSApplicationSchedule,
    name: "add-HHDLSS-application-schedule"
},
{
    path: '/admin/admin-api/add-HHDLSS-application-schedule',
},
{
    path: '/admin/get-application-schedule-HHDLSS/:applicationScheduleId',
    component:AddHHDLSSApplicationSchedule,
    name: "AddHHDLSSApplicationSchedule"
},

{
    path: '/admin/admin-api/get-application-schedule/:applicationScheduleId',
},
{
   path: '/admin/admin-api/edit-HHDLSS-application-schedule/:applicationScheduleId',
},
{
    path: '/admin/manage-application-schedule',
    component:ManageApplicationSchedule,
    name: "manage-application-schedule"
},
{
path: '/admin/admin-api/manage-application-schedule/get-details',
},
{
    path: '/admin/extend-last-date',
    component:ExtendLastDate,
    name: "extend-last-date"
},
{
    path: '/admin/manage-application-details',
    component:ManageApplicationDetails,
    name: "manage-application-details"
},
{
    path: '/admin/admin-api/manage-application-details/get-data',
},

//Review Nursing
{
    path: '/admin/review-nursing-application-form/:applicationId',
    component:ReviewNursingApplicationForm,
    name: "review-nursing-application-form"
},

{
    path: '/admin/admin-api/review-nursing-application-form/:applicationId',
    
},

{
    path: '/admin/review-nursing-annexure-1/:applicationId',
    component:ReviewNursingAnnexure1,
    name: "review-nursing-annexure-1"
},

{
    path: '/admin/admin-api/review-nursing-annexure-1/:applicationId',
    
},


{
    path: '/admin/review-nursing-annexure-2/:applicationId',
    component:ReviewNursingAnnexure2,
    name: "review-nursing-annexure-2"
},
{
    path: '/admin/admin-api/review-nursing-annexure-2/:applicationId',
    
},

{
    path: '/admin/review-nursing-upload-documents/:applicationId',
    component:ReviewNursingUploadDocuments,
    name: "review-nursing-upload-documents"
},

{
    path: '/admin/admin-api/review-nursing-upload-documents/:applicationId',
   
},

{
    path: '/admin/review-nursing-review-submit/:applicationId',
    component:ReviewNursingReview,
    name: "review-nursing-review-submit"
},

{
    path: '/admin/admin-api/review-nursing-review-submit/:applicationId',
   
},
// end nursing



//Start HHDLSS 
{
    path: '/admin/review-HHDLSS-application-form/:applicationId',
    component:ReviewHHDLSSApplicationForm,
    name: "review-HHDLSS-application-form"
},
{
  path: '/admin/admin-api/review-HHDLSS-application-form/:applicationId',
},
{
    path: '/admin/review-HHDLSS-annexure-1/:applicationId',
    component:ReviewHHDLSSAnnexure1,
    name: "review-HHDLSS-annexure-1"
},
{
    path: '/admin/admin-api/review-HHDLSS-annexure-1/:applicationId',
    
},
{
    path: '/admin/review-HHDLSS-annexure-2/:applicationId',
    component:ReviewHHDLSSAnnexure2,
    name: "review-HHDLSS-annexure-2"
},
{
    path: '/admin/admin-api/review-HHDLSS-annexure-2/:applicationId',
},

{
    path: '/admin/review-HHDLSS-upload-documents/:applicationId',
    component:ReviewHHDLSSUploadDocuments,
    name: "review-HHDLSS-upload-documents"
},

{
    path: '/admin/admin-api/review-HHDLSS-upload-documents/:applicationId',
},
{
    path: '/admin/review-HHDLSS-review-submit/:applicationId',
    component:ReviewHHDLSSReview,
    name: "review-HHDLSS-review-submit"
},
{
    path: '/admin/admin-api/review-HHDLSS-review-submit/:applicationId',
},
// End HHDLSS
 ]
}