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

     public function manageScholarship()
     {
      return view('application.manageScholarship');
     }

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

    public function dashboard()
    {
      return view('application.dashboard');
    }
//Nursing-ADD-START
     public function applicationForm()
     {
      return view('application.nursingScholarship.addNursing.applicationForm');
     }

    public function annexure1()
    {
      return view('application.nursingScholarship.addNursing.annexure1');
    }

    public function annexure2()
    {
      return view('application.nursingScholarship.addNursing.annexure2');
    }

    public function annexure2PrintForm()
    {
      return view('application.nursingScholarship.addNursing.annexure2PrintForm');
    }

    public function annexure2BlankForm()
    {
      return view('application.nursingScholarship.addNursing.annexure2BlankForm');
    }

    public function uploadDocuments()
    {
      return view('application.nursingScholarship.addNursing.uploadDocuments');
    }

    public function reviewSubmit()
    {
      return view('application.nursingScholarship.addNursing.review');
    }
//Nursing-ADD-END
//Nursing-MANAGE AND VIEW-START

    public function viewNursing()
    {
      return view('application.nursingScholarship.viewNursing');
    }

    public function printViewNursing()
    {
      return view('application.nursingScholarship.printViewNursing');
    }
//Nursing-MANAGE AND VIEW-END

//HHDLSS-ADD-START
    public function applicationFormHHDLSS()
    {
      return view('application.HHDLSSscholarship.addHHLDSS.applicationForm');
    }

    public function annexure1HHDLSS()
    {
      return view('application.HHDLSSscholarship.addHHLDSS.annexure1');
    }

    public function annexure2HHDLSS()
    {
      return view('application.HHDLSSscholarship.addHHLDSS.annexure2');
    }

    public function uploadDocumentsHHDLSS()
    {
      return view('application.HHDLSSscholarship.addHHLDSS.uploadDocuments');
    }

    public function reviewSubmitHHDLSS()
    {
      return view('application.HHDLSSscholarship.addHHLDSS.review');
    }
//HHDLSS-ADD-END
//HHDLSS-MANAGE AND VIEW-START

    public function viewHHDLSS()
    {
      return view('application.HHDLSSscholarship.viewHHDLSS');
    }

    public function printViewHHDLSS()
    {
      return view('application.HHDLSSscholarship.printViewHHDLSS');
    }
//HHDLSS-MANAGE AND VIEW-END
}