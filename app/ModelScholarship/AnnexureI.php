<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\InstituteDetails;
use App\ModelScholarship\ApplicantDetails;

class AnnexureI extends Model
{
    protected $table = 'annexureI';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_choice1()
    {
      return $this->belongsTo(InstituteDetails::class,'choice1');    
    }

    public function get_choice2()
    {
      return $this->belongsTo(InstituteDetails::class,'choice2');    
    }

    public function get_choice3()
    {
      return $this->belongsTo(InstituteDetails::class,'choice3');    
    }
    
    public function get_applicantDetails()
    {
      return $this->belongsTo(ApplicantDetails::class,'applicantId');    
    }
}
