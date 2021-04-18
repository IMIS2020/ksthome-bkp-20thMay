<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\ModelScholarship\NursingScholarshipApplication;
use App\ModelScholarship\HhdlScholarshipApplication;
class SystemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // public function manageScholarship()
    // {
    //   $userId = Auth::user()->id;
    //   $nursingScholarshipApplication = NursingScholarshipApplication::where('userId', $userId)->first();
    //   $hhdlScholarshipApplication    = HhdlScholarshipApplication::where('userId', $userId)->first();
    //   if($nursingScholarshipApplication === null && $hhdlScholarshipApplication === null)
    //   {
    //     return view('application.dashboard');
        
    //   }else{
    //     return view('application.manageScholarship');
        
    //   }
    // }
    
    //dashboard and manageScholarship
    /******
     * Call Dashboard blade
     */
    public function dashboard()
    {
      return view('dashboard');
    }
    

    /*****
     * call baldes under folder applicant
     */
    public function applicantForm()
    {
      return view('myApplication.applicantForm');
    }
    public function applicantDocuments()
    {
      return view('myApplication.applicantDocuments');
    }
    public function chooseScholarship()
    {
      return view('applicant.choose');
    }


    /*****
     * Call blades under folder myApplicant
     */
    public function annexure1()
    {
      return view('myApplication.annexure1');
    }

    public function annexure2()
    {
      return view('myApplication.annexure2');
    }

    public function annexure2PrintForm()
    {
      return view('myApplication.annexure2PrintForm');
    }

    public function annexure2BlankForm()
    {
      return view('myApplication.annexure2BlankForm');
    }

    public function reviewMyApplication()
    {
      return view('myApplication.reviewMyApplication');
    }

    public function viewMyApplication()
    {
      return view('myApplication.viewMyApplication');
    }

    public function printView()
    {
      return view('myApplication.printView');
    }

    public function manageMyApplication()
    {
      return view('myApplication.manageMyApplication');
    }

    public function printAnnexure1()
    {
      return view('myApplication.printAnnexure1');
    }
    //Application Form
    

    #scholarship 

    //nursing
    

    //HHDLSS
    // public function annexure1HHDLSS()
    // {
    //   return view('application.scholarship.hhdlss.annexure1');
    // }

    // public function annexure2HHDLSS()
    // {
    //   return view('application.scholarship.hhdlss.annexure2');
    // }

    // public function annexure2PrintFormHHDLSS()
    // {
    //   return view('application.scholarship.hhdlss.annexure2PrintFormHHDLSS');
    // }

    // public function annexure2BlankFormHHDLSS()
    // {
    //   return view('application.scholarship.hhdlss.annexure2BlankFormHHDLSS');
    // }

    // public function reviewSubmitHHDLSS()
    // {
    //   return view('application.scholarship.hhdlss.review');
    // }

    // public function viewHHDLSS()
    // {
    //   return view('application.scholarship.hhdlss.viewHHDLSS');
    // }

    // public function printViewHHDLSS()
    // {
    //   return view('application.scholarship.hhdlss.printViewHHDLSS');
    // }
    //HHDLSS-MANAGE AND VIEW-END
}