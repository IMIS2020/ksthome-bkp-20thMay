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
    public function getExaminationLevel()
    {
        $getDomainNameId12 = DomainName::where('name','ExamLevel-12')->get();  
        $getDomainNameId13 = DomainName::where('name','ExamLevel-Graduate')->get();

        return json_decode(json_encode(array($getDomainNameId12,$getDomainNameId13)));
    }

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

    /********
     * 
     * Get Examination Passed
     */

    public function getExaminationPassed10()
    {
        $getDomainNameId1 =DomainName::where('name','ExamLevel-10')->first();
        $getDomainNameId2 =DomainName::where('name','ExamPassed')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId1->id)->where('domainTypeId',$getDomainNameId2->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function getExaminationPassed12()
    {
        $getDomainNameId1 = DomainName::where('name','ExamLevel-12')->first();
        $getDomainNameId2 =DomainName::where('name','ExamPassed')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId1->id)->where('domainTypeId',$getDomainNameId2->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function getExaminationPassed13()
    {
        $getDomainNameId1 = DomainName::where('name','ExamLevel-Graduate')->first();
        $getDomainNameId2 =DomainName::where('name','ExamPassed')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId1->id)->where('domainTypeId',$getDomainNameId2->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    /********
     * 
     * End Examination Passed
     */

    /********
     * 
     * Get University Board Council
     */
    public function getUniversityBoardCouncil()
    {
        $getDomainNameId10 = DomainName::where('name','ExamLevel-10')->get(); 
        $getDomainNameId12 = DomainName::where('name','ExamLevel-12')->get();  
        $getDomainNameId13 = DomainName::where('name','ExamLevel-Graduate')->get();

        return json_decode(json_encode(array($getDomainNameId10,$getDomainNameId12,$getDomainNameId13)));
    }

    public function getUniversityBoardCouncil10()
    {
        $getDomainNameId1 =DomainName::where('name','ExamLevel-10')->first();
        $getDomainNameId2 = DomainName::where('name','UnivBoard')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId1->id)->where('domainTypeId',$getDomainNameId2->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function getUniversityBoardCouncil12()
    {
        $getDomainNameId1 =DomainName::where('name','ExamLevel-12')->first();
        $getDomainNameId2 = DomainName::where('name','UnivBoard')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId1->id)->where('domainTypeId',$getDomainNameId2->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function getUniversityBoardCouncil13()
    {
        $getDomainNameId1 =DomainName::where('name','ExamLevel-Graduate')->first();
        $getDomainNameId2 = DomainName::where('name','UnivBoard')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId1->id)->where('domainTypeId',$getDomainNameId2->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    /********
     * 
     * End University Board Council
     */


    public function getScholarship()
    {
        $getDomainNameId = DomainName::where('name','Scholarship')->first();
        $getDomainValues = DomainValues::where('nameId',$getDomainNameId->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainValues;
    }

    public function getCourseLevelHHDLS()
    {
        $getDomainName = DomainName::where('name','AdmissionLevel-Bachelors-HHDLS')
                                     ->orWhere('name','AdmissionLevel-Bachelors-HHDLS')
                                     ->orWhere('name','AdmissionLevel-Diploma-HHDLS')
                                     ->orWhere('name','AdmissionLevel-Certificate-HHDLS')->get();
        // $getDomainValues = DomainValues::where('nameId',$getDomainNameId->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainName;
    }

    public function getCourseLevelNursing()
    {
        $getDomainName = DomainName::where('name','AdmissionLevel-Bachelors-Nursing')->get();
        // $getDomainValues = DomainValues::where('nameId',$getDomainNameId->id)->select('value','id')->orderBy('id','DESC')->get()->toJson();
        return $getDomainName;
    }

    public function getCourseNameHHDLS()
    {
        $data = array();
        
        $getDomainNameId1 = DomainName::where('name','AdmissionCourse-Bachelors-HHDLS')->first();
        $getDomainNameId2 = DomainName::where('name','AdmissionCourse-Diploma-HHDLS')->first();
        $getDomainNameId3 = DomainName::where('name','AdmissionCourse-Certificate-HHDLS')->first();

        $getDomainValues1 = DomainValues::where('nameId',$getDomainNameId1->id)->select('value','id')->orderBy('id','DESC')->get();
        $getDomainValues2 = DomainValues::where('nameId',$getDomainNameId2->id)->select('value','id')->orderBy('id','DESC')->get();
        $getDomainValues3 = DomainValues::where('nameId',$getDomainNameId3->id)->select('value','id')->orderBy('id','DESC')->get();
        

        array_push($data,$getDomainValues1,$getDomainValues2,$getDomainValues3);
    
        
        return $data;
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
                if($request->domainName == 'ExamPassed')
                {
                    $domainValues = new DomainValues;
                    $domainValues->value            = $request->dValue;
                    $domainValues->valueDescription = $request->dDesc;
                    $domainValues->nameId           = $request->domianLevel;
                    $getDomainNameId = DomainName::where('name','ExamPassed')->first();
                    $domainValues->domainTypeId           = $getDomainNameId->id;
                    $domainValues->save();

                }else if($request->domainName == 'UnivBoard')
                {
                    $domainValues = new DomainValues;
                    $domainValues->value            = $request->dValue;
                    $domainValues->valueDescription = $request->dDesc;
                    $domainValues->nameId           = $request->domianLevel;
                    $getDomainNameId = DomainName::where('name','UnivBoard')->first();
                    $domainValues->domainTypeId           = $getDomainNameId->id;
                    $domainValues->save();

                }else if($request->domainName == 'CourseName')
                {
                    $domainValues = new DomainValues;
                    $domainValues->value            = $request->dValue;
                    $domainValues->valueDescription = $request->dDesc;
                    $domainValues->nameId           = $request->domianLevel;
                    $getDomainNameId = DomainName::where('name','CourseName')->first();
                    $domainValues->domainTypeId           = $getDomainNameId->id;
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
