<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\InstituteDetails;
use App\ModelScholarship\ApplicantDetails;

class HhdlScholarshipApplication extends Model
{
    protected $table = 'hhdlScholarshipApplication';
    public $primarykey = 'id';
    public $timestamp = true;

    
    public function get_instituteDetails()
    {
      return $this->belongsTo(InstituteDetails::class,'instituteId');    
    }

    
    public function get_applicantDetails()
    {
      return $this->belongsTo(ApplicantDetails::class,'applicantId');    
    }
}
