<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class AdminSystemController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth:admin');
     }
 
     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
 
      public function adminDashboard()
      {
       return view('admin.adminDashboard');
      }

      public function addDomains()
      {
       return view('admin.domains.addDomains');
      }

      public function manageDomains()
      {
        return view('admin.domains.manageDomains');
      }
      public function addNursingApplicationSchedule()
      {
       return view('admin.applicationSchedule.addNursingApplicationSchedule');
      }

      public function addHHDLSSApplicationSchedule()
      {
       return view('admin.applicationSchedule.addHHDLSSApplicationSchedule');
      }

      public function manageApplicationSchedule()
      {
        return view('admin.ApplicationSchedule.manageApplicationSchedule');
      }

      public function extendLastDate()
      {
        return view('admin.ApplicationSchedule.extendLastDate');
      }

      public function manageApplicationDetails()
      {
        return view('admin.ApplicationDetails.manageApplicationDetails');
      }


  //Review nursing
      public function reviewNursingApplicationForm()
      {
        return view('admin.applicationDetails.reviewNursing.applicationFormNursing');
      }

      

      public function reviewNursingAnnexure1()
      {
        return view('admin.applicationDetails.reviewNursing.annexure1Nursing');
      }

      public function reviewNursingAnnexure2()
      {
        return view('admin.applicationDetails.reviewNursing.annexure2Nursing');
      }

      public function reviewNursingUploadDocuments()
      {
        return view('admin.applicationDetails.reviewNursing.uploadDocumentsNursing');
      }

      public function reviewNursingReview()
      {
        return view('admin.applicationDetails.reviewNursing.reviewNursing');
      }


    // REVIEW-HHDLSS
      public function reviewHHDLSSApplicationForm()
      {
        return view('admin.applicationDetails.reviewHHDLSS.applicationFormHHDLSS');
      }

      public function reviewHHDLSSAnnexure1()
      {
        return view('admin.applicationDetails.reviewHHDLSS.annexure1HHDLSS');
      }

      public function reviewHHDLSSAnnexure2()
      {
        return view('admin.applicationDetails.reviewHHDLSS.annexure2HHDLSS');
      }

      public function reviewHHDLSSUploadDocuments()
      {
        return view('admin.applicationDetails.reviewHHDLSS.uploadDocumentsHHDLSS');
      }

      public function reviewHHDLSSReview()
      {
        return view('admin.applicationDetails.reviewHHDLSS.reviewHHDLSS');
      }


}
