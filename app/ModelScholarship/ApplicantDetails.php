<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelGeneral\Address;
use App\ModelScholarship\ApplicantEducationDetails;
use App\ModelScholarship\ApplicantMiscellaneousDetails;
use App\ModelScholarship\AnnexureI;
use App\ModelScholarship\ApplicantDocuments;
use App\ModelScholarship\NursingScholarshipApplication;
use App\ModelScholarship\HhdlScholarshipApplication;
use App\ModelAdmin\Review;

class ApplicantDetails extends Model
{
    protected $table = 'applicantDetails';
    public $primarykey = 'id';
    public $timestamp = true;

    
  public function get_address()
  {
    return $this->belongsTo(Address::class,'applicantAddressId');    
  }

  public function get_applicanEducationDetails()
  {
    return $this->hasMany(ApplicantEducationDetails::class);
  }

  public function get_applicanMiscellaneousDetails()
  {
    return $this->hasMany(ApplicantMiscellaneousDetails::class);
  }

  public function get_annexureI()
  {
    return $this->hasMany(AnnexureI::class);
  }

  public function get_applicantDocuments()
  {
    return $this->hasMany(ApplicantDocuments::class);
  }

  public function get_nursingScholarshipApplication()
  {
    return $this->hasMany(NursingScholarshipApplication::class);
  }

  public function get_hhdlScholarshipApplication()
  {
    return $this->hasMany(HhdlScholarshipApplication::class);
  }

  public function get_admin_review()
  {
    return $this->hasMany(Review::class);
  }


}
