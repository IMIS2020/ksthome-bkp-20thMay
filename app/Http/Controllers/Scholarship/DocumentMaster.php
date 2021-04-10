<?php

namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\DomainValues;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\DocMaster;

class DocumentMaster extends Controller
{
    public function getDocMasterData()
    {
        $getData = DocMaster::all();
        return $getData;
    }
}
