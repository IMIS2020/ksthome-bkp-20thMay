<?php

namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\ModelGeneral\Address;
use App\ModelScholarship\Institute;
use App\ModelScholarship\DomainValues;

class InstituteController extends Controller
{

    public function getInstitute($type)
    {
        $getDomainId = DomainValues::where('value',$type)->first();
        $getIns = Institute::where('scholarshipTypeValueId',$getDomainId->id)->with('get_address')->orderBy('instituteName','ASC')->get()->sortBy('instituteName', SORT_NATURAL|SORT_FLAG_CASE)->toJson();
        return $getIns;
    }

    public function getInstituteDetails(int $insId)
    {
        $getIns = Institute::where('id',$insId)->with('get_address')->get();
        $data = json_decode(json_encode($getIns));
        if($getIns)
        {
            return array('success' => true, 'msg'=>['Data Found!'], 'data'=>$data);
        }
        else{
            return array('success' => false, 'msg'=>['No Data Found!']);
        }
    }

    public function addInstitute(Request $request)
    {
        // $request->validate([
        //     'insName'  => ['required'],
        //     // 'insAddressAddln1'  => ['required'],
        //     // 'insAddressAddln2'  => ['required'],
        //     // 'insAddressCity'  => ['required'],
        //     // 'insAddressDistprov'  => ['required'],
        //     // 'insAddressState'  => ['required'],
        //     // 'insAddressPinzip'  => ['required'],
        // ]);

        DB::beginTransaction();
        try 
        {
            $instituteAddress = new Address;
            // $instituteAddress->addressAddln1    = $request->insAddressAddln1;
            // $instituteAddress->addressAddln2    = $request->insAddressAddln2;
            $instituteAddress->addressCity      = $request->insAddressCity;
            $instituteAddress->addressState     = $request->insAddressState;
            $instituteAddress->addressDistprov  = $request->insAddressDistprov;
            // $instituteAddress->addressPinzip    = $request->insAddressPinzip;
            $instituteAddress->addressCountry   = 'India';
            $instituteAddress->save();

            $instituteDetails = new Institute;
            $instituteDetails->instituteName = $request->insName;
            $instituteDetails->instituteAddressId = $instituteAddress->id;
            $getDomainId = DomainValues::where('value',$request->insType)->first();
            $instituteDetails->scholarshipTypeValueId = $getDomainId->id;
            $instituteDetails->save();
            DB::commit();
            return array('success' => true, 'msg'=>[]);
        }
        catch(Exception $e) {
            DB::rollBack();
            return array('success' => false, 'msg'=>[$e]);
        }

    }
}
