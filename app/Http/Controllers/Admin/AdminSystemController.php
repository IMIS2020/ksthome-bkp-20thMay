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

      public function manageApplicationDetails()
      {
          return view('admin.manageApplication.applicationDetails');
      }

    //Review application 

    public function reviewApplicantForm()
    {
       return view('admin.manageApplication.reviewApplication.applicantForm');
    }

    public function reviewAnnexure1()
    {
       return view('admin.manageApplication.reviewApplication.annexure1');
    }

    public function reviewAnnexure2()
    {
       return view('admin.manageApplication.reviewApplication.annexure2');
    }

    public function reviewApplicantDocuments()
    {
       return view('admin.manageApplication.reviewApplication.applicantDocuments');
    }

    public function review()
    {
       return view('admin.manageApplication.reviewApplication.review');
    }

    public function printView()
    {
      return view('admin.manageApplication.reviewApplication.printView');
    }
    
    public function printAnnexure1()
    {
      return view('admin.manageApplication.reviewApplication.printAnnexure1');
    }

    //Review application end

   //  Domains
   public function addDomains()
   {
      return view('admin.domains.addDomains');
   }

   public function manageDomains()
   {
      return view('admin.domains.manageDomains');
   }
   // Domains end

   // Admin schedule

   public function addSchedule()
   {
      return view('admin.applicationSchedule.addSchedule');
   }

   public function manageSchedule()
   {
      return view('admin.applicationSchedule.manageSchedule');
   }

   public function extendLastDate()
   {
      return view('admin.applicationSchedule.extendLastDate');
   }

   // Admin schedule end

   // Manage users
   public function manageUsers()
   {
      return view('admin.manageUsers');
   }
   // Manage users end

   // Show all registered users 
      public function allRegisteredUsers()
      {
         return view('admin.allRegisteredUsers');
      }
   // End show all registered users


   // Admin users profile 
   public function adminUserProfile()
   {
      return view('admin.adminUserProfile');
   }
// End admin users profile

}
