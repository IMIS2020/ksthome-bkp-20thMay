<?php

namespace App\Http\Controllers\Admin\Schedules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\ApplicationSession;

class ScheduleController extends Controller
{
   
    public function getAllSchedules()
    {
        $getSchedules = ApplicationScheduleTable::orderBy('id')->get();
        return $getSchedules;
    }

    public function getSession()
    {
        $getSessionDetails = ApplicationSession::orderBy('id')->get();
        return $getSessionDetails;
    }


    public function filterData(Request $request)
    {
       
        $session         = $request->session;
        $scholarshipType = $request->scholarshipType;

       if(empty($session) && empty($scholarshipType))
       {
        $filter = ApplicationScheduleTable::with('get_applicationSession')->orderBy('id', 'asc')->get()->toJson();
       }else{
        $filter = ApplicationScheduleTable::with('get_applicationSession')
                    ->join('applicationsession', 'applicationsession.id', '=', 'applicationscheduletable.sessionId')
                    ->where("sessionName",'LIKE',"%".$request['session']."%")
                    ->where('scholarshipTypeValueId','LIKE',"%".$request['scholarshipType']."%")
                    ->get()
                    ->toJson();
                }
              return $filter;
            }

}
