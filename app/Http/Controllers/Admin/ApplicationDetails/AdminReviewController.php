<?php

namespace App\Http\Controllers\Admin\ApplicationDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\ApplicationDetails;
use App\ModelGeneral\Address;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\ApplicationSession;
use App\ModelScholarship\ApplicationDocs;
use App\ModelScholarship\DocMaster;
use Illuminate\Support\Facades\Storage;

class AdminReviewController extends Controller
{
    public function getReview(Request $request,int $docId)
    {
        
    }
}
