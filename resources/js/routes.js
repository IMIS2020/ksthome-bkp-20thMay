// //Nursing
import ManageScholarship   from './components/application/manageScholarship';
import Dashboard           from './components/dashboard';
// //ADD-START 
    import ApplicationForm  from './components/application/nursingScholarship/addNursing/applicationForm';
    import Annexure1        from './components/application/nursingScholarship/addNursing/annexure1';
    import Annexure2        from './components/application/nursingScholarship/addNursing/annexure2';
    import annexure2PrintForm        from './components/application/nursingScholarship/addNursing/annexure2PrintForm';
    import annexure2BlankForm        from './components/application/nursingScholarship/addNursing/annexure2BlankForm';
    import UploadDocuments  from './components/application/nursingScholarship/addNursing/uploadDocuments';
    import Review           from './components/application/nursingScholarship/addNursing/review';
// //ADD-END

//View-Start
    import ViewNursing      from './components/application/nursingScholarship/viewNursing';
    import PrintViewNursing from './components/application/nursingScholarship/printViewNursing';
//View-Start

//HHDLSS

//ADD-START
    import ApplicationFormHHDL  from './components/application/HHDLSSscholarship/addHHDLSS/applicationForm';
    import Annexure1HHDL        from './components/application/HHDLSSscholarship/addHHDLSS/annexure1';
    import Annexure2HHDL        from './components/application/HHDLSSscholarship/addHHDLSS/annexure2';
    import UploadDocumentsHHDL  from './components/application/HHDLSSscholarship/addHHDLSS/uploadDocuments';
    import ReviewHHDL           from './components/application/HHDLSSscholarship/addHHDLSS/review';
//ADD-END

//View-Start
    import ViewHHDLSS      from './components/application/HHDLSSscholarship/viewHHDLSS';
    import PrintViewHHDLSS from './components/application/HHDLSSscholarship/printViewHHDLSS';
// View-End

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
// End
export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [   
    {
        path: '/manage-scholarship',
        component: ManageScholarship,
        name: "manage-scholarship"
    },

    {
        path: '/dashboard',
        component: Dashboard,
        name: "dashboard"
    },

// //ADD Start (NURSING)
    {
    path: '/application-form',
    component: ApplicationForm,
    name: "application-form"
    },
    {
     path:'/api/add-application-form/:userId',
    },
    {
     path:'/api/application-form/:userId',
    },
    {
     path:'/api/edit-application-form/:applicationId',
    },
    {
    path: '/annexure-1',
    component: Annexure1,
    name: "annexure-1"
    },
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
    path: '/annexure-2',
    component: Annexure2,
    name: "annexure-2"
    },
    {
    path: '/annexure-2-print-form',
    component: annexure2PrintForm,
    name: "annexure-2-print-form"
    },
    {
    path: '/annexure-2-blank-form',
    component: annexure2BlankForm,
    name: "annexure-2-print-form"
    },
    {
    path:'/api/save-annexureii/:applicationId',
    },
    {
    path: '/upload-documents',
    component: UploadDocuments,
    name: "upload-documents"
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
    {
    path: '/review-submit',
    component: Review,
    name: "review-submit"
    },
 //ADD End (NURSING)

//View Start (NURSING)
   
    {
        path: '/view-nursing',
        component:ViewNursing,
        name: "manage-nursing"
    },
    {
        path: '/print-view-nursing',
        component:PrintViewNursing,
        name: "manage-nursing"
    },
 //View End (NURSING)

// ---------------------------------- //
//ADD -START (HHDLSS)
  {
    path: '/application-form-HHDLSS',
    component: ApplicationFormHHDL,
    name: "application-form-HHDLSS"
    },
    {
    path:'/api/add-application-form-HHDLSS/:userId',
    },
    {
    path:'/api/application-form-HHDLSS/:userId',
    },
    {
    path:'/api/edit-application-form-HHDLSS/:applicationId',
    },
    {
    path: '/annexure-1-HHDLSS',
    component: Annexure1HHDL ,
    name: "annexure-1-HHDLSS"
    },
     
    {
    path:'/api/add-annexurei-HHDLSS/:applicationId',
    },
    {
    path:'/api/get-annexurei-HHDLSS:applicationId',
    },
    {
    path:'/api/edit-annexurei-HHDLSS/:applicationId',
    },

    {
    path: '/annexure-2-HHDLSS',
    component: Annexure2HHDL,
    name: "annexure-2-HHDLSS"
    },

    {
    path:'/api/save-annexureii-HHDLSS/:applicationId',
    },


    {
    path: '/upload-documents-HHDLSS',
    component:UploadDocumentsHHDL ,
    name: "upload-documents-HHDLSS"
    },


    {
    path:'/api/upload-documents-HHDLSS/:applicationId',
    },
    {
    path:'/api/get-upload-documents-HHDLSS/:applicationId',
    },
    {
    path:'/api/update-documents-HHDLSS/:applicationId',
    },
    {
    path:'/api/delete-documents-HHDLSS/:applicationId',
    },

    {
    path: '/review-submit-HHDLSS',
    component: ReviewHHDL,
    name: "review-submit-HHDLSS"
    },
 //ADD-END (HHDLSS)

 //View Start (HHDLSS)
    {
        path: '/view-HHDLSS',
        component:ViewHHDLSS,
        name: "manage-HHDLSS"
    },
    {
        path: '/print-view-HHDLSS',
        component:PrintViewHHDLSS,
        name: "manage-HHDLSS"
    },
//View End (HHDLSS)
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