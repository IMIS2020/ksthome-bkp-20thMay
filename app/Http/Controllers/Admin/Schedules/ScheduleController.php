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
                    ->join('applicationSession', 'applicationSession.id', '=', 'applicationScheduleTable.sessionId')
                    ->where("sessionName",'LIKE',$request['session'])
                    ->where('scholarshipTypeValueId','LIKE',$request['scholarshipType'])
                    ->get()
                    ->toJson();
                }
              return $filter;
            }

    public function getExtendLastDate(int $Id)
    {
        $getData = ApplicationScheduleTable::with('get_applicationSession')->orderBy('id', 'asc')->get()->toJson();
         return $getData;
    }

    public function updateExtendLastDate(Request $request,int $Id)
    {
        $request->validate([
            'newLastDate'  => ['required'],
        ]);
        $getData = ApplicationScheduleTable::where('id',$Id)
        ->whereDate('lastDate', '<=', $request->newLastDate)
        ->first();

        if(!$getData)
        {
            return array('success' => false, 'msg'=>['New Last Date must be later than Current Last Date !']); 
        }else
        {
            $getData->lastDate = $request->newLastDate;
            $getData->update();
            return array('success' => true, 'msg'=>['Last Date Updated']); 
        }
    }

    
    public function toggleStatus(int $Id)
    {
        $getSchedules = ApplicationScheduleTable::where('id',$Id)->first();
        $getSchedules->status = ($getSchedules->status == 1)? 0 : 1;
        $getSchedules->update();
    }

}
