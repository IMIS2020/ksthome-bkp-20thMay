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
        $getEdu = ApplicationEducationDetails::where('applicationId',$appId)->with('get_examBoardDomainValues','get_examPassedDomainValues')->get();
        $data = [];
        foreach ($getEdu as $edu) 
        {
            $temp = $edu['get_examPassedDomainValues']->value."/".$edu['get_examBoardDomainValues']->value."/".$edu['mainSubjects']."/".$edu['yearOfPassing']."/".$edu['percentage']."/".$edu['division']."\n";
            array_push($data,$temp);
        }
        return implode("",$data);
    }


    private function highestMarks($appId)
    {
        $getEdu = ApplicationEducationDetails::where('applicationId',$appId)->with('get_examBoardDomainValues','get_examPassedDomainValues')->get();
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
        $getEdu = ApplicationEducationDetails::where('applicationId',$appId)->with('get_examBoardDomainValues','get_examPassedDomainValues')->get();
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
        $getMisc = ApplicationMiscellaneousDetails::where('applicationId',$appId)->get();
        $data = [];
        foreach ($getMisc as $misc) 
        {
            $temp = $misc['name']."/".$misc['relationship']."/".$misc['course']."/".$misc['year']."\n";
            array_push($data,$temp);
        }
        return implode("",$data);
    }

    private function instituteData($appId)
    {
        $hasApplication = ApplicationDetails::where('id',$appId)->first()->hasAdmissionLetter;

        if($hasApplication == 'NO')
        {
            $getInstitute = AnnexureI::with('get_institute')->where('applicationId',$appId)->get();
            $data = [];
            foreach ($getInstitute as $Institute) 
            {
                $temp = $Institute['get_institute']->instituteName."/".$Institute['addressCity']."/".$Institute['addressDistprov']."/".$Institute['addressState']."\n";
                array_push($data,$temp);
            }
            return implode("",$data);

        }else{
            $getInstitute = ApplicationDetails::with('get_institute')->where('id',$appId)->get();
            $data = [];
            foreach ($getInstitute as $Institute) 
            {
                $temp = $Institute['get_institute']->instituteName."/".$Institute['get_address']->addressCity."/".$Institute['get_address']->addressDistprov."/".$Institute['get_address']->addressState."\n";
                array_push($data,$temp);
            }
            return implode("",$data);
           } 
      }

    private function degreeCourse(String $appId)
    {
        $hasApplication = ApplicationDetails::where('id',$appId)->first()->hasAdmissionLetter;
        if($hasApplication == 'NO')
        {
            $getDegree = AnnexureI::with('get_courseLevelValue','get_courseLevelName')->where('applicationId',$appId)->get();
            $data = [];
            foreach ($getDegree as $Degree) 
            {
                $temp = $Degree['get_courseLevelValue']->description."/".$Degree['get_courseLevelName']->value."\n";
                array_push($data,$temp);
            }
            return implode("",$data);
        }else{
            $getDegree = ApplicationDetails::with('get_courseDomainName','get_courseDomainValues')->where('id',$appId)->get();
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
            'ID',
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
            'Leprosy Affected Self',
            'Leprosy Affected Mother',
            'Leprosy Affected Father',
            'Disablity Self',
            'Disablity Father',
            'Disablity Mother',
            'Contact No(Self / Alternate)',
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
            'Institute',
            'Degree/Course Name',
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
            $application->id,
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
            'Self: '. $application->applicantContactNoSelf."\n".'Alternate: '.$application->applicantContactNoGuardian,
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
            $this->instituteData($application->id),
            $this->degreeCourse($application->id),
            $application->recognizedByINC == null ? 'No':'Yes',
            $this->educationDetails($application->id),
            $this->highestQualification($application->id),
            $this->highestMarks($application->id),
            $this->miscDetails($application->id),
        ];
    }

    public function columnWidths(): array
    {
        return 
        [
            'A' => 5,
            'B' => 20,    
            'C'  =>10,
            'D'  =>10,
            'E'  =>25,
            'F'  =>25,
            'G'  =>25,
            'H'  =>25,
            'I'  =>25,
            'J'  =>25,
            'K'  =>15,
            'L'  =>12,
            'M'  =>12,
            'N'  =>12,
            'O'  =>17,
            'P'  =>17,
            'Q'  =>17,
            'R'  =>12,
            'S'  =>12,
            'T'  =>12,
            'U'  =>23,
            'V'  =>25,
            'W'  =>18,
            'X'  =>23,
            'Y'  =>10,
            'Z'  =>12,
            'AA' =>22,
            'AH' =>14,
            'AJ' =>29,
            'AK' =>14,
            'AM' =>20,
            'AN' =>12,
            'AL' =>93,
            'AO' =>40
        ];
    }
   
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A:AO')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A:AO')->getAlignment()->setVertical(Alignment::VERTICAL_TOP);
        $sheet->getStyle('A:AO')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
    }
}
