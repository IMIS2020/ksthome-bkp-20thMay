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

    public function getExtendLastDateNursing(int $scholarshipTypeValueId)
    {
        $getDataNursing = ApplicationScheduleTable::where('scholarshipTypeValueId',$scholarshipTypeValueId)->with('get_applicationSession')
                    ->join('applicationSession', 'applicationSession.id', '=', 'applicationScheduleTable.sessionId')
                    ->get()
                    ->toJson();
         return $getDataNursing;
    }

    public function getExtendLastDateHHDLS(int $scholarshipTypeValueId)
    {
        $getDataHHDLS = ApplicationScheduleTable::where('scholarshipTypeValueId',$scholarshipTypeValueId)->with('get_applicationSession')
                    ->join('applicationSession', 'applicationSession.id', '=', 'applicationScheduleTable.sessionId')
                    ->get()
                    ->toJson();
         return $getDataHHDLS;
    }

    public function updateExtendLastDateNursing(Request $request,int $scholarshipTypeValueId)
    {
        $request->validate([
            'newLastDate'  => ['required'],
        ]);
        $getNursing = ApplicationScheduleTable::where('scholarshipTypeValueId',$scholarshipTypeValueId)->first();
        $getNursing->lastDate = $request->newLastDate;
        $getNursing->update();
    }

    public function updateExtendLastDateHHDLS(Request $request,int $scholarshipTypeValueId)
    {
        $request->validate([
            'newLastDate'  => ['required'],
        ]);
            $getHHDLS = ApplicationScheduleTable::where('scholarshipTypeValueId',$scholarshipTypeValueId)->first();
            $getHHDLS->lastDate = $request->newLastDate;
            $getHHDLS->update();
    }

    public function toggleStatus(int $scholarshipTypeValueId)
    {
        $getSchedules = ApplicationScheduleTable::where('scholarshipTypeValueId',$scholarshipTypeValueId)->first();
        $getSchedules->status = ($getSchedules->status == 1)? 0 : 1;
        $getSchedules->update();
    }

}
