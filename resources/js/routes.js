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

import AdminDashboard            from './components/admin/adminDashboard';
import ApplicationDetails        from './components/admin/manageApplication/applicationDetails';

// Review Application
import AdminApplicantForm      from './components/admin/manageApplication/reviewApplication/applicantForm';
import AdminAnnexure1          from './components/admin/manageApplication/reviewApplication/annexure1';
import AdminAnnexure2          from './components/admin/manageApplication/reviewApplication/annexure2';
import AdminApplicantDocuments from './components/admin/manageApplication/reviewApplication/applicantDocuments';
import AdminReview             from './components/admin/manageApplication/reviewApplication/review';
// End review application

// Domains
    import AddDomains    from './components/admin/domains/addDomains';
    import ManageDomains from './components/admin/domains/manageDomains';
// End Domains

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
                    path: '/application-form/HHDLS',
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
                 {
                    path: '/api/del-documents/:applicationDocId',
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
                     * Admin Dashboard
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
                        path: '/admin/review-application-form',
                        component:AdminApplicantForm,
                        name: "review-application-form"
                    },

                    {
                        path: '/admin/review-annexure-1',
                        component:AdminAnnexure1,
                        name: "review-annexure-1"
                    },

                    {
                        path: '/admin/review-annexure-2',
                        component:AdminAnnexure2,
                        name: "review-annexure-2"
                    },

                    {
                        path: '/admin/review-applicant-documents',
                        component:AdminApplicantDocuments,
                        name: "review-applicant-documents"
                    },

                    {
                        path: '/admin/review',
                        component:AdminReview,
                        name: "review"
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
                    /***
                     * 
                     * End Admin Domain
                     */


 ]
}