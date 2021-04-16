<?php

namespace App\Http\Controllers\Admin\ApplicationDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\ApplicationDetails;

class AdminApplicationDetails extends Controller
{

    public function getData()
    {
        $getAllDataApplication = ApplicationDetails::all();
        return $getAllDataApplication;
    }
}
