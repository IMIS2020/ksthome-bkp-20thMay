<?php

namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\ModelGeneral\Address;
use App\ModelScholarship\Institute;
use App\ModelScholarship\ApplicationDetails;
use App\ModelScholarship\ApplicationEducationDetails;
use App\ModelScholarship\ApplicationMiscellaneousDetails;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\DomainValues;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\AnnexureI;
use App\ModelScholarship\ApplicationDocs;
use App\ModelScholarship\DocMaster;
use App\Http\Controllers\Scholarship\DocumentMaster;
use User;
use Auth;
class ManageMyApplications extends Controller
{
    

    public function getAllApplication()
    {   
        $id = Auth::user()->id;
        // $currentuser = User::find($id);
        $getapplications = ApplicationDetails::where('userId',$id)->orderBy('id','desc')->get()->toJson();
        return $getapplications;
    }
}
