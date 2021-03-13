<?php

namespace App\ModelGeneral;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\InstituteDetails;
use App\ModelScholarship\ApplicantDetails;

class Address extends Model
{
    protected $table = 'address';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_instituteDetails()
    {
        return $this->hasMany(InstituteDetails::class);
    }

    public function get_applicanDetails()
    {
        return $this->hasMany(ApplicantDetails::class);
    }
}
