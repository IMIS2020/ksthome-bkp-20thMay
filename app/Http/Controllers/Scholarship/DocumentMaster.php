<?php

namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\DomainValues;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\DocMaster;
use App\ModelScholarship\ApplicationDocs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DocumentMaster extends Controller
{
    public function createDocMasterData($motherL,$fatherL,$selfL,$hasAdmission,$motherD,$fatherD,$selfD,$applictionId)
    {

        $getData = DocMaster::where('docType','Uploaded')->where('requiredFor',3)->get();

        foreach($getData as $data)
        {
            $addDocs = new ApplicationDocs;

            $getDataObjFg = DocMaster::where('docShortName',$data['docShortName'])->first();
            $checkFg = ApplicationDocs::where('docMasterId',$getDataObjFg->id)->where('applicationId',$applictionId)->first();
            if($checkFg == null)
            {
                if($motherL == true)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC012')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check == null)
                    {
                        $addDocs->docMasterId   = $data['id'];
                        $addDocs->applicationId = $applictionId;
                        $addDocs->docFileDesc   = $data['docDesc'];
                        $addDocs->reviewStatus  = $data['processStepId'];
                        $addDocs->save();
                    }
                }else if($motherL == false)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC012')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check)
                    {
                        if (!empty($check->docFileName)) {
                            unlink(storage_path('app/public/uploads/schloarshipRecord/').$check->docFileName);
                        }
                        $check->delete();
                    }
                }
               

                if($fatherL == true)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC014')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check == null)
                    {
                        $addDocs->docMasterId   = $data['id'];
                        $addDocs->applicationId = $applictionId;
                        $addDocs->docFileDesc   = $data['docDesc'];
                        $addDocs->reviewStatus  = $data['processStepId'];
                        $addDocs->save();
                    }
                }else if($fatherL == false)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC014')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check)
                    {
                        if (!empty($check->docFileName)) {
                            unlink(storage_path('app/public/uploads/schloarshipRecord/').$check->docFileName);
                        }
                        $check->delete();
                        $check->delete();
                    }
                }

                if($selfL == true)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC016')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check == null)
                    {
                        $addDocs->docMasterId   = $data['id'];
                        $addDocs->applicationId = $applictionId;
                        $addDocs->docFileDesc   = $data['docDesc'];
                        $addDocs->reviewStatus  = $data['processStepId'];
                        $addDocs->save();
                    }
                }else if($selfL == false)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC016')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check)
                    {
                        if (!empty($check->docFileName)) {
                            unlink(storage_path('app/public/uploads/schloarshipRecord/').$check->docFileName);
                        }
                        $check->delete();
                        $check->delete();
                    }
                }

                if($hasAdmission == "YES")
                {
                    $getDataObj = DocMaster::where('docShortName','DOC003')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check == null)
                    {
                        $addDocs->docMasterId   = $data['id'];
                        $addDocs->applicationId = $applictionId;
                        $addDocs->docFileDesc   = $data['docDesc'];
                        $addDocs->reviewStatus  = $data['processStepId'];
                        $addDocs->save();
                    }
                }else if($hasAdmission == "NO")
                {
                    $getDataObj = DocMaster::where('docShortName','DOC003')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check)
                    {
                        if (!empty($check->docFileName)) {
                            unlink(storage_path('app/public/uploads/schloarshipRecord/').$check->docFileName);
                        }
                        $check->delete();
                        $check->delete();
                    }
                }

                if($motherD == true)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC013')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check == null)
                    {
                        $addDocs->docMasterId   = $data['id'];
                        $addDocs->applicationId = $applictionId;
                        $addDocs->docFileDesc   = $data['docDesc'];
                        $addDocs->reviewStatus  = $data['processStepId'];
                        $addDocs->save();
                    }
                }else if($motherD == false)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC013')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check)
                    {
                        if (!empty($check->docFileName)) {
                            unlink(storage_path('app/public/uploads/schloarshipRecord/').$check->docFileName);
                        }
                        $check->delete();
                    }
                }
               

                if($fatherD == true)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC015')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check == null)
                    {
                        $addDocs->docMasterId   = $data['id'];
                        $addDocs->applicationId = $applictionId;
                        $addDocs->docFileDesc   = $data['docDesc'];
                        $addDocs->reviewStatus  = $data['processStepId'];
                        $addDocs->save();
                    }
                }else if($fatherD == false)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC015')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check)
                    {
                        if (!empty($check->docFileName)) {
                            unlink(storage_path('app/public/uploads/schloarshipRecord/').$check->docFileName);
                        }
                        $check->delete();
                        $check->delete();
                    }
                }

                if($selfD == true)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC017')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check == null)
                    {
                        $addDocs->docMasterId   = $data['id'];
                        $addDocs->applicationId = $applictionId;
                        $addDocs->docFileDesc   = $data['docDesc'];
                        $addDocs->reviewStatus  = $data['processStepId'];
                        $addDocs->save();
                    }
                }else if($selfD == false)
                {
                    $getDataObj = DocMaster::where('docShortName','DOC017')->first();
                    $check = ApplicationDocs::where('docMasterId',$getDataObj->id)->where('applicationId',$applictionId)->first();
                    if($check)
                    {
                        if (!empty($check->docFileName)) {
                            unlink(storage_path('app/public/uploads/schloarshipRecord/').$check->docFileName);
                        }
                        $check->delete();
                        $check->delete();
                    }
                }
                
            }

        }

        //$motherL,$fatherL,$selfL,$annexure,$applictionId
        // $getData = DocMaster::where('docType','Uploaded')->orderBy('id','ASC')->get()->toJson();
        // return $getData;
        // $getData = DocMaster::where('docType','Uploaded')->get();

        // if($motherL == 1)
        // {
        //     $getDataObj = DocMaster::where('docShortName','DOC012')->first();
        //     $getData1 = DocMaster::where('docShortName','DOC012')->get();
            
        //     foreach($getData1 as $data)
        //     {
        //         $check = ApplicationDocs::where('docMasterId',)
        //         $addDocs1 = new ApplicationDocs;
        //         $addDocs1->docMasterId   = $data['id'];
        //         $addDocs1->applicationId = $applictionId;
        //         $addDocs1->docFileDesc   = $data['docDesc'];
        //         $addDocs1->reviewStatus  = $data['processStepId'];
        //         $addDocs1->save();
        //     }

        // }

        // if($fatherL == 1)
        // {
        //     $getData2 = DocMaster::where('docShortName','DOC013')->get();
        //     foreach($getData2 as $data)
        //     {
        //         $addDocs2 = new ApplicationDocs;
        //         $addDocs2->docMasterId   = $data['id'];
        //         $addDocs2->applicationId = $applictionId;
        //         $addDocs2->docFileDesc   = $data['docDesc'];
        //         $addDocs2->reviewStatus  = $data['processStepId'];
        //         $addDocs2->save();
        //     }

        // }

        // if($selfL == 1)
        // {
        //     $getData3 = DocMaster::where('docShortName','DOC014')->get();
        //     foreach($getData3 as $data)
        //     {
        //         $addDocs3 = new ApplicationDocs;
        //         $addDocs3->docMasterId   = $data['id'];
        //         $addDocs3->applicationId = $applictionId;
        //         $addDocs3->docFileDesc   = $data['docDesc'];
        //         $addDocs3->reviewStatus  = $data['processStepId'];
        //         $addDocs3->save();
        //     }

        // }
        // $addDocs = new ApplicationDocs;
        // $addDocs->docMasterId   = $data['id'];
        // $addDocs->applicationId = $applictionId;
        // $addDocs->docFileDesc   = $data['docDesc'];
        // $addDocs->reviewStatus  = $data['processStepId'];
        // $addDocs->save();
       
       
       
    }

    public function getApplicantDoc($d)
    {
        
    }
}
