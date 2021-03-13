<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicantDetails;

class ApplicantEducationDetails extends Model
{
    protected $table = 'applicantEducationDetails';
    public $primarykey = 'id';
    public $timestamp = true;

    
    public function get_applicantDetails()
    {
      return $this->belongsTo(ApplicantDetails::class,'applicantId');    
    }
}
