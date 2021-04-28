<?php

namespace App\Http\Controllers\Admin\ApplicationDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\ApplicationDetails;
use App\ModelGeneral\Address;

class AdminApplicationDetails extends Controller
{

    public function getData()
    {
        // $getAllDataApplication = ApplicationDetails::all();

        $getAllDataApplication = ApplicationDetails::with('get_address')->orderBy('id', 'desc')->get()->toJson();
        return $getAllDataApplication;
    }

    // Review application 
        
    // End-Review application
}
