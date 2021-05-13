<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Events\AfterSheet;

use App\ModelGeneral\Address;
use App\ModelScholarship\Institute;
use App\ModelScholarship\ApplicationDetails;
use App\ModelScholarship\ApplicationEducationDetails;
use App\ModelScholarship\ApplicationMiscellaneousDetails;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\DomainValues;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\AnnexureI;
use App\ModelScholarship\ApplicationDocs;
use App\ModelScholarship\DocMaster;
use App\ModelScholarship\ApplicationSession;
use App\Http\Controllers\Scholarship\DocumentMaster;

class ApplicationExport implements 
    FromCollection,
    ShouldAutoSize,
    WithMapping,
    WithHeadings,
    WithStyles,
    WithColumnWidths
   
    {
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ApplicationDetails::with('get_address')
                ->join('portalAddress', 
                'portalAddress.id', 
                '=', 'applicationDetails.applicantAddressId')
                ->get();
    }

    private function educationDetails($appId)
    {
        $getId = ApplicationDetails::where('schApplicationId',$appId)->first();
        $getEdu = ApplicationEducationDetails::where('applicationId',$getId->id)->with('get_examBoardDomainValues','get_examPassedDomainValues')->get();
        $data = [];
        $i = 1;
        foreach ($getEdu as $edu) 
        {
            $temp =$i.") ".$edu['get_examPassedDomainValues']->value."/".$edu['get_examBoardDomainValues']->value."/".$edu['mainSubjects']."/".$edu['yearOfPassing']."/".$edu['percentage']."/".$edu['division']."\n";
            $i++;
            array_push($data,$temp);
        }
        return implode("",$data);
    }


    private function highestMarks($appId)
    {
        $temp ="";
        $getId = ApplicationDetails::where('schApplicationId',$appId)->first();
        $getEdu = ApplicationEducationDetails::where('applicationId',$getId->id)->with('get_examBoardDomainValues','get_examPassedDomainValues')->get();
        $data = [];
        foreach ($getEdu as $edu) 
        {
            $getName = DomainName::where('id',$edu['get_examPassedDomainValues']->nameId)->first()->name;
            if($getName == "ExamLevel-Graduate")
            {
                $temp = $edu['percentage'];
                array_push($data,$temp);
                // return implode("",$data);
            }else if($getName == "ExamLevel-12") {
                    $temp = $edu['percentage'];
                    array_push($data,$temp);
                    // return implode("",$data);
            } 
        }
        return $temp;
    }

    private function highestQualification($appId)
    {
        $temp ="";
        $getId = ApplicationDetails::where('schApplicationId',$appId)->first();
        $getEdu = ApplicationEducationDetails::where('applicationId',$getId->id)->with('get_examBoardDomainValues','get_examPassedDomainValues')->get();
        $data = [];
        foreach ($getEdu as $edu) 
        {
            $getName = DomainName::where('id',$edu['get_examPassedDomainValues']->nameId)->first()->name;
            if($getName == "ExamLevel-Graduate")
            {
                $temp = $edu['get_examPassedDomainValues']->value;
                array_push($data,$temp);
                
            }else {
                if($getName == "ExamLevel-12") {
                    $temp= $edu['get_examPassedDomainValues']->value;
                    array_push($data,$temp);
                    // return implode("",$data);
                } 
             }
        }
        return $temp;
    }

    private function miscDetails($appId)
    {
        $getId   = ApplicationDetails::where('schApplicationId',$appId)->first();
        $getMisc = ApplicationMiscellaneousDetails::where('applicationId',$getId->id)->get();
        $data = [];
        $i=1;
        foreach ($getMisc as $misc) 
        {
            $temp = $i.") ".$misc['name']."/".$misc['relationship']."/".$misc['course']."/".$misc['year']."\n";
            $i++;
            array_push($data,$temp);
        }
        return implode("",$data);
    }

    private function instituteData($appId)
    {
        // dd($appId);
        $hasApplication = ApplicationDetails::where('schApplicationId',$appId)->first();
      //  dd($hasApplication);
        if($hasApplication->hasAdmissionLetter == 'NO')
        {
            $getInstitute = AnnexureI::with('get_institute')->where('applicationId',$hasApplication->id)->get();
            $data = [];
            $i = 1;
            foreach ($getInstitute as $Institute) 
            {
                $temp =$i.") ".$Institute['get_institute']->instituteName."/".$Institute['addressCity']."/".$Institute['addressDistprov']."/".$Institute['addressState']."\n";
                $i++;
                array_push($data,$temp);
            }
            return implode("",$data);

        }else{
            $getInstitute = ApplicationDetails::with('get_institute')->where('id',$hasApplication->id)->get();
            $data = [];
            foreach ($getInstitute as $Institute) 
            {
                $temp = $Institute['get_institute']->instituteName."/".$Institute['get_address']->addressCity."/".$Institute['get_address']->addressDistprov."/".$Institute['get_address']->addressState."\n";
                array_push($data,$temp);
            }
            return implode("",$data);
           } 
      }

    private function degreeCourse($appId)
    {
        $hasApplication = ApplicationDetails::where('schApplicationId',$appId)->first();
        if($hasApplication->hasAdmissionLetter == 'NO')
        {
            $getDegree = AnnexureI::with('get_courseLevelValue','get_courseLevelName')->where('applicationId',$hasApplication->id)->get();
            $data = [];
            foreach ($getDegree as $Degree) 
            {
                $temp = $Degree['get_courseLevelValue']->description."/".$Degree['get_courseLevelName']->value."\n";
                array_push($data,$temp);
            }
            return implode("",$data);
        }else{
            $getDegree = ApplicationDetails::with('get_courseDomainName','get_courseDomainValues')->where('id',$hasApplication->id)->get();
            $data = [];
           foreach ($getDegree as $Degree) 
           {
               $temp = $Degree['get_courseDomainName']->description."/".$Degree['get_courseDomainValues']->value."\n";
               array_push($data,$temp);
           }
           return implode("",$data);
        }
    }


    public function headings(): array
    {
        return 
        [
           
            'Application Number',
            'Application Type',
            'Scholarship Type',
            'Applicant Name',
            'First Name',
            'Middle Name',
            'Last Name',
            'Father Name',
            'Mother Name',
            'Date of Birth',
            'Gender',
            'BPL Card',
            'Domicile State',

            'Affected Self',
            'Affected Mother',
            'Affected Father',

            'Disablity Self',
            'Disablity Father',
            'Disablity Mother',

            'Contact No(Self / Alternate :)',
            'Email ID',
            'Colony Leader Name',
            'Contact No (Colony Leader)',
            'Financial Year',
            'Application Status',
            'Application Specific Last Date',
            'Address Line 1',
            'City',
            'District',
            'State',
            'Pincode',
            'Country',
            'Admission Letter',
            'Degree/Course Name',
            'Institute',
            'Recognized By (INC)',
            'Education Details(Examination Passed/University/Subjects/Year of Passing/Percentage/Division)',
            'Highest Qualification',
            'Highest Marks',
            'Misc Details(Name/Relationship/Course/Year)',
        ];
    }

    public function map($application): array
    {
        return 
        [
            
            $application->appIdShow,
            $application->applicationType,
            $application->scholarshipType,
            $application->applicantNameF." ".$application->applicantNameM." ".$application->applicantNameL,
            $application->applicantNameF,
            $application->applicantNameM,
            $application->applicantNameL,
            $application->applicantFatherName,
            $application->applicantMotherName ,
            date("d/m/Y", strtotime($application->applicantDOB)),
            $application->applicantGender,
            $application->applicantHasBPLCard,
            $application->applicantDomicileState,
            $application->applicantLeprosyAffectedSelf   == 1 ? 'Yes':'No',
            $application->applicantLeprosyAffectedFather == 1 ? 'Yes':'No',
            $application->applicantLeprosyAffectedMother == 1 ? 'Yes':'No',
            $application->applicantDisablitySelf == 1 ? 'Yes':'No',
            $application->applicantDisablityFather == 1 ? 'Yes':'No',
            $application->applicantDisablityMother == 1 ? 'Yes':'No',
            'Self: '. $application->applicantContactNoSelf."\n".'Alt:  '.$application->applicantContactNoGuardian,
            $application->applicantEmailId,
            $application->applicantColonyLeaderName,
            $application->applicantContactNoColonyLeader,
            $application->financialYear,
            $application->appStatus,
            date("d/m/Y", strtotime($application->appSpecificLastDt)),
            $application->get_address->addressAddln1."\n".$application->get_address->addressAddln2,
            $application->get_address->addressCity,
            $application->get_address->addressDistprov,
            $application->get_address->addressState,
            $application->get_address->addressPinzip,
            $application->get_address->addressCountry,
            $application->hasAdmissionLetter,
            $this->degreeCourse($application->schApplicationId),
            $this->instituteData($application->schApplicationId),
            $application->recognizedByINC,
            $this->educationDetails($application->schApplicationId),
            $this->highestQualification($application->schApplicationId),
            $this->highestMarks($application->schApplicationId),
            $this->miscDetails($application->schApplicationId),
        ];
    }

    public function columnWidths(): array
    {
        return 
        [
        
            'A' => 16,    
            'B'  =>10,
            'C'  =>10,
            'D'  =>20,
            'E'  =>11,
            'F'  =>7,
            'G'  =>11,
            'H'  =>12,
            'I'  =>12,
            'J'  =>11,
            'K'  =>7,
            'L'  =>7,
            'M'  =>12,
            'N'  =>10,
            'O'  =>10,
            'P'  =>10,
            'Q'  =>10,
            'R'  =>10,
            'S'  =>10,
            'T'  =>15,
            'U'  =>25,
            'V'  =>15,
            'W'  =>16,
            'X'  =>10,
            'Y'  =>12,
            'Z' =>16,
            'AA' =>25,
            'AB' =>10,
            'AC' =>10,
            'AD' =>12,
            'AE' =>8,
            'AF' =>10,
            'AG' =>8,
            'AI' =>50,
            'AJ' =>11,
            'AK' =>50,
            'AL' =>15,
            'AM' =>8,
            'AN' =>35
            
        ];
    }
   
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A:AN')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A:AN')->getAlignment()->setVertical(Alignment::VERTICAL_TOP);
        $sheet->getStyle('A:AN')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
        $sheet->getStyle('A:AN')->getFont()->setSize(9);
        $sheet->getStyle('A1:AN1')->getFont()->setBold(true);
    }

}
