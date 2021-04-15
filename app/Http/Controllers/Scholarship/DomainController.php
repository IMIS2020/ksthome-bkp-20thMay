<?php

namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\DomainValues;

class DomainController extends Controller
{
    public function getExaminationLevel10()
    {
        $getDomainNameId = DomainName::where('name','ExamLevel-10')->get();  
        return $getDomainNameId ;
    }

    public function getExaminationLevel12()
    {
        $getDomainNameId = DomainName::where('name','ExamLevel-12')->get();
        return $getDomainNameId;
    }

    public function getExaminationLevel13()
    {
        $getDomainNameId = DomainName::where('name','ExamLevel-Graduate')->get();
        return $getDomainNameId;
    }

    public function getExaminationPassed()
    {
        $getDomainNameId = DomainName::where('name','ExamPassed')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function getUniversityBoardCouncil()
    {
        $getDomainNameId = DomainName::where('name','UnivBoard')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function getScholarship()
    {
        $getDomainNameId = DomainName::where('name','Scholarship')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function getCourseName()
    {
        $getDomainNameId = DomainName::where('name','CourseName')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function getCourseLevel()
    {
        $getDomainNameId = DomainName::where('name','CourseLevel')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function addDomainValues(Request $request)
    {
        $request->validate([ 
            'domainName'    => ['required'],             
            'dValue'        => ['required'],
            'dDesc'         => [],
        ]);

        DB::beginTransaction();
        try {
        
                if($request->domainName == 'ExamLevel')
                {
                    $domainValues = new DomainValues;
                    $domainValues->value            = $request->dValue;
                    $domainValues->valueDescription = $request->dDesc;
                    $getDomainNameId = DomainName::where('name','ExamLevel')->first();
                    $domainValues->nameId           = $getDomainNameId->id;
                    $domainValues->save();

                }else if($request->domainName == 'ExamPassed')
                {
                    $domainValues = new DomainValues;
                    $domainValues->value            = $request->dValue;
                    $domainValues->valueDescription = $request->dDesc;
                    $getDomainNameId = DomainName::where('name','ExamPassed')->first();
                    $domainValues->nameId           = $getDomainNameId->id;
                    $domainValues->save();

                }else if($request->domainName == 'UnivBoard')
                {
                    $domainValues = new DomainValues;
                    $domainValues->value            = $request->dValue;
                    $domainValues->valueDescription = $request->dDesc;
                    $getDomainNameId = DomainName::where('name','UnivBoard')->first();
                    $domainValues->nameId           = $getDomainNameId->id;
                    $domainValues->save();
                    
                }else if($request->domainName == 'CourseName')
                {
                    $domainValues = new DomainValues;
                    $domainValues->value            = $request->dValue;
                    $domainValues->valueDescription = $request->dDesc;
                    $getDomainNameId = DomainName::where('name','CourseName')->first();
                    $domainValues->nameId           = $getDomainNameId->id;
                    $domainValues->save();
                    
                }else if($request->domainName == 'CourseLevel')
                {
                    $domainValues = new DomainValues;
                    $domainValues->value            = $request->dValue;
                    $domainValues->valueDescription = $request->dDesc;
                    $getDomainNameId = DomainName::where('name','CourseLevel')->first();
                    $domainValues->nameId           = $getDomainNameId->id;
                    $domainValues->save();
                    
                }

                DB::commit();
                return array('success' => true, 'msg'=>[]);
            }
            catch(Exception $e) {
                DB::rollBack();
                return array('success' => false, 'msg'=>[$e]);
            }
        
    }
}
