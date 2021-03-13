<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelGeneral\Address;
use App\ModelScholarship\AnnexureI;
use App\ModelScholarship\NursingScholarshipApplication;
use App\ModelScholarship\HhdlScholarshipApplication;

class InstituteDetails extends Model
{
    protected $table = 'instituteDetails';
    public $primarykey = 'id';
    public $timestamp = true;

    
    public function get_address()
    {
        return $this->belongsTo(Address::class,'instituteAddressId');    
    }

    public function get_annexureI()
    {
      return $this->hasMany(AnnexureI::class);
    }

    public function get_nursingScholarshipApplication()
    {
      return $this->hasMany(NursingScholarshipApplication::class);
    }

    public function get_hhdlScholarshipApplication()
    {
      return $this->hasMany(HhdlScholarshipApplication::class);
    }
}
