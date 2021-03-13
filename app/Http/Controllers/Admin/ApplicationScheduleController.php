<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelAdmin\ApplicationScheduleModel;

    class ApplicationScheduleController extends Controller
    {
     #Add-Nursing-Schedule
        public function addNewNursingApplicationSchedule(Request $request)
        {
             $request->validate([  
                'financialYear'                      => ['required'],                
                'scholarshipType'                    => ['required'],
                'startDate'                          => ['required'],
                'lastDate'                           => ['required'],
                'applicationNoPrefixFormat'          => ['required'],
                'contactPersonEmail'                 => [],
                'contactPersonContactNo'             => ['required'],
             ]);
                DB::beginTransaction();
                try
                {
                    $lastId = 0;
                    $getId = DB::table('applicationScheduleTable')->orderBy('id', 'DESC')->first();
                    if(empty($getId)){$lastId = 0;}
                    else{$lastId = intval(explode('-',$getId->applicationScheduleId)[1]);}//NURSCH-000001
                    $presentId = $lastId+1;
                    
                    $applicationSchedule = new ApplicationScheduleModel;
                    $applicationSchedule->applicationScheduleId     = "NURSCH-".str_pad($presentId, 5, "0", STR_PAD_LEFT);
                    $applicationSchedule->financialYear             = $request->financialYear;                       
                    $applicationSchedule->scholarshipType           = $request->scholarshipType;                      
                    $applicationSchedule->startDate                 = $request->startDate;                      
                    $applicationSchedule->lastDate                  = $request->lastDate;                      
                    $applicationSchedule->applicationNoPrefixFormat = $request->applicationNoPrefixFormat;                        
                    $applicationSchedule->contactPersonEmailId      = $request->contactPersonEmailId;                       
                    $applicationSchedule->contactPersonContactNo    = $request->contactPersonContactNo;    
                    $applicationSchedule->save();   
                    DB::commit();
                    return array('success' => true, 'msg'=>['Schedule created successfully']);
                }
                catch(Exception $e) 
                {
                    DB::rollBack();
                    return array('success' => false, 'msg'=>[$e]);
                }             
             }


     #Add-Nursing-Schedule
        public function editNursingApplicationSchedule(Request $request, $applicationScheduleId)
        {
             $request->validate([  
                'financialYear'                      => ['required'],                
                'scholarshipType'                    => ['required'],
                'startDate'                          => ['required'],
                'lastDate'                           => ['required'],
                'applicationNoPrefixFormat'          => ['required'],
                'contactPersonEmail'                 => [],
                'contactPersonContactNo'             => ['required'],
             ]);
                DB::beginTransaction();
                try
                {
                    $editApplicationSchedule =  ApplicationScheduleModel::where('applicationScheduleId',$applicationScheduleId)->first();
                    
                    $editApplicationSchedule->financialYear             = $request->financialYear;                       
                    $editApplicationSchedule->scholarshipType           = $request->scholarshipType;                      
                    $editApplicationSchedule->startDate                 = $request->startDate;                      
                    $editApplicationSchedule->lastDate                  = $request->lastDate;                      
                    $editApplicationSchedule->applicationNoPrefixFormat = $request->applicationNoPrefixFormat;                        
                    $editApplicationSchedule->contactPersonEmailId      = $request->contactPersonEmailId;                       
                    $editApplicationSchedule->contactPersonContactNo    = $request->contactPersonContactNo;    
                    $editApplicationSchedule->update();   
                    DB::commit();
                    return array('success' => true, 'msg'=>['Schedule updated successfully']);
                }
                catch(Exception $e) 
                {
                    DB::rollBack();
                    return array('success' => false, 'msg'=>[$e]);
                }             
             }
          
     
       #add-new HHDLSS Schedule
          public function addNewHHDLSSApplicationSchedule(Request $request)
          {
                  $request->validate([  
                    'financialYear'                      => ['required'],                
                    'scholarshipType'                    => ['required'],
                    'startDate'                          => ['required'],
                    'lastDate'                           => ['required'],
                    'applicationNoPrefixFormat'          => ['required'],
                    'contactPersonEmail'                 => [],
                    'contactPersonContactNo'             => ['required'],
                  ]);
                    DB::beginTransaction();
                  try
                  {
                    $lastId = 0;
                    $getId = DB::table('applicationScheduleTable')->orderBy('id', 'DESC')->first();
                    if(empty($getId)){$lastId = 0;}
                    else{ $lastId = intval(explode('-',$getId->applicationScheduleId)[1]);}//HHDLSS-000001
                    $presentId = $lastId+1;

                      $applicationSchedule = new ApplicationScheduleModel;
                      $applicationSchedule->applicationScheduleId     = "HHDLSS-".str_pad($presentId, 5, "0", STR_PAD_LEFT);
                      $applicationSchedule->financialYear             = $request->financialYear;                       
                      $applicationSchedule->scholarshipType           = $request->scholarshipType;                      
                      $applicationSchedule->startDate                 = $request->startDate;                      
                      $applicationSchedule->lastDate                  = $request->lastDate;                      
                      $applicationSchedule->applicationNoPrefixFormat = $request->applicationNoPrefixFormat;                        
                      $applicationSchedule->contactPersonEmailId      = $request->contactPersonEmailId;                       
                      $applicationSchedule->contactPersonContactNo    = $request->contactPersonContactNo;    
                      $applicationSchedule->save();   
                      DB::commit();
                      return array('success' => true, 'msg'=>['Schedule created successfully']);
                  }
                  catch(Exception $e) 
                  {
                      DB::rollBack();
                      return array('success' => false, 'msg'=>[$e]);
                  }             
            }

          #get-data
           public function getScholarshipApplication()
           {
            $data = ApplicationScheduleModel::all();
            return json_decode(json_encode($data));
           }

        #get-data By Id
          public function editScheduleDetailsById(String $applicationScheduleId)
          {
              $getData = ApplicationScheduleModel::where('applicationScheduleId',$applicationScheduleId)->get()->toJson();
              return json_decode(json_encode( $getData));
          }

            public function editHHDLSSApplicationSchedule(Request $request, $applicationScheduleId)
            {
              $request->validate([  
                'financialYear'                      => ['required'],                
                'scholarshipType'                    => ['required'],
                'startDate'                          => ['required'],
                'lastDate'                           => ['required'],
                'applicationNoPrefixFormat'          => ['required'],
                'contactPersonEmail'                 => [],
                'contactPersonContactNo'             => ['required'],
             ]);
                DB::beginTransaction();
                try
                {
                    $editApplicationSchedule =  ApplicationScheduleModel::where('applicationScheduleId',$applicationScheduleId)->first();
                    
                    $editApplicationSchedule->financialYear             = $request->financialYear;                       
                    $editApplicationSchedule->scholarshipType           = $request->scholarshipType;                      
                    $editApplicationSchedule->startDate                 = $request->startDate;                      
                    $editApplicationSchedule->lastDate                  = $request->lastDate;                      
                    $editApplicationSchedule->applicationNoPrefixFormat = $request->applicationNoPrefixFormat;                        
                    $editApplicationSchedule->contactPersonEmailId      = $request->contactPersonEmailId;                       
                    $editApplicationSchedule->contactPersonContactNo    = $request->contactPersonContactNo;    
                    $editApplicationSchedule->update();   
                    DB::commit();
                    return array('success' => true, 'msg'=>['Schedule updated successfully']);
                }
                catch(Exception $e) 
                {
                    DB::rollBack();
                    return array('success' => false, 'msg'=>[$e]);
                }             
            }




    }
