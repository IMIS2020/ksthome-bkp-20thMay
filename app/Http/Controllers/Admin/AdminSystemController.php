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
}
