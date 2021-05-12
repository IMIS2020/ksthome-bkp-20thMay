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

    private function instituteData(String $appId)
    {
        $getInstitute = AnnexureI::with('get_institute')->where('applicationId',$appId)->get();
        $data = [];
        foreach ($getInstitute as $Institute) 
        {
            $temp = $Institute['get_institute']->instituteName."/".$Institute['addressCity']."/".$Institute['addressDistprov']."/".$Institute['addressState']."\n";
            array_push($data,$temp);
        }
        return implode("",$data);
    }

    private function degreeCourse(String $appId)
    {
        $getDegree = AnnexureI::with('get_courseLevelValue','get_courseLevelName')->where('applicationId',$appId)->get();
        // dd($getDegree);
        $data = [];
        foreach ($getDegree as $Degree) 
        {
            $temp = $Degree['get_courseLevelValue']->description."/".$Degree['get_courseLevelName']->value."\n";
            array_push($data,$temp);
        }
        return implode("",$data);
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
            'Applicant First Name',
            'Applicant Middle Name',
            'Applicant Last Name',
            'Father Name',
            'Mother Name',
            'Date of Birth',
            'Gender',
            'Leprosy Affected Self',
            'Leprosy Affected Mother',
            'Leprosy Affected Father',
            'Disablity Self',
            'Disablity Father',
            'Disablity Mother',
            'BPL Card',
            'Domicile State',
            'Contact No(Self)',
            'Contact No (Guardian)',
            'Email ID',
            'Colony Leader Name',
            'Contact No (Colony Leader)',
            'Admission Letter',
            'Recognized By (INC)',
            'Financial Year',
            'Application Status',
            'Application Specific Last Date',
            'Address Line 1',
            'City',
            'District',
            'State',
            'Pincode',
            'Country',
            'Degree/Course Name',
            'Institute',
            'Education Details(Examination Passed/University/Subjects/Year of Passing/Percentage/Division)',
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
            $application->applicantLeprosyAffectedSelf   == 1 ? 'Yes':'No',
            $application->applicantLeprosyAffectedFather == 1 ? 'Yes':'No',
            $application->applicantLeprosyAffectedMother == 1 ? 'Yes':'No',
            $application->applicantDisablitySelf == 1 ? 'Yes':'No',
            $application->applicantDisablityFather == 1 ? 'Yes':'No',
            $application->applicantDisablityMother == 1 ? 'Yes':'No',
            $application->applicantHasBPLCard,
            $application->applicantDomicileState,
            $application->applicantContactNoSelf,
            $application->applicantContactNoGuardian,
            $application->applicantEmailId,
            $application->applicantColonyLeaderName,
            $application->applicantContactNoColonyLeader,
            $application->hasAdmissionLetter,
            $application->recognizedByINC == null ? 'No':'Yes',
            $application->financialYear,
            $application->appStatus,
            date("d/m/Y", strtotime($application->appSpecificLastDt)),
            $application->get_address->addressAddln1."\n".$application->get_address->addressAddln2,
            $application->get_address->addressCity,
            $application->get_address->addressDistprov,
            $application->get_address->addressState,
            $application->get_address->addressPinzip,
            $application->get_address->addressCountry,
            $this->degreeCourse($application->id),
            $this->instituteData($application->id),
            $this->educationDetails($application->id),
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
            'E'  =>40,
            'F'  =>30,
            'G'  =>0,
            'H'  =>20,
            'I'  =>40,
            'J'  =>40,
        ];
    }
   
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A:AO')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A:AO')->getAlignment()->setVertical(Alignment::VERTICAL_TOP);
        $sheet->getStyle('A:AO')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
    }
}
