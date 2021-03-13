<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicantDetails;

class ApplicantDocuments extends Model
{
    protected $table = 'applicantDocuments';
    public $primarykey = 'id';
    public $timestamp = true;

    
    public function get_applicantDetails()
    {
      return $this->belongsTo(ApplicantDetails::class,'applicantId');    
    }
}
