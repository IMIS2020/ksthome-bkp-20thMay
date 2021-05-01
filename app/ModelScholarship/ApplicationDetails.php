<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelGeneral\Address;
use App\ModelScholarship\ApplicationScheduleTable;
use App\ModelScholarship\Institute;
use App\ModelScholarship\DomainValues;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\ApplicationEducationDetails;
use App\ModelScholarship\ApplicationMiscellaneousDetails;
use App\ModelScholarship\AnnexureI;
use App\ModelScholarship\ApplicationDocs;
use App\User;

//use App\UserSession;
use App\ModelScholarship\ApplicationSession;

class ApplicationDetails extends Model
{
    protected $table = 'applicationDetails';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_address() // FK 1
    {
        return $this->belongsTo(Address::class,'applicantAddressId');    
    }

    public function get_applicationScheduleTable() // FK 2
    {
        return $this->belongsTo(ApplicationScheduleTable::class,'appSchduleId');
    }

    public function get_institute() //FK 3
    {
        return $this->belongsTo(Institute::class,'instituteId');
    }

    public function get_courseDomainName() // FK 4
    {
        return $this->belongsTo(DomainName::class,'courseLevelValueId');
    }
 
    public function get_courseDomainValues() // FK 5
    {
        return $this->belongsTo(DomainValues::class,'courseNameValueId');
    }

    public function get_schTypeDomainValues() // FK 6
    {
        return $this->belongsTo(DomainValues::class,'scholarshipTypeValueId');
    }

    public function get_user() // FK 7
    {
        return $this->belongsTo(User::class,'userId');
    }

    // public function get_userSession() // FK 8
    // {
    //     return $this->belongsTo(UserSession::class,'sessionId');
    // }

    public function get_applicationSession() // FK 8
    {
        return $this->belongsTo(ApplicationSession::class,'sessionId');
    }

    //hasMany
    public function get_applicationMiscellaneousDetails() // 1
    {
        return $this->hasMany(ApplicationMiscellaneousDetails::class);
    }

    public function get_applicationEducationDetails() // 2
    {
        return $this->hasMany(ApplicationEducationDetails::class);
    }

    public function get_annexureI() // 3
    {
        return $this->hasMany(AnnexureI::class);
    }

    public function get_applicationDocs()
    {
        return $this->hasMany(ApplicationDocs::class);
    }

}
