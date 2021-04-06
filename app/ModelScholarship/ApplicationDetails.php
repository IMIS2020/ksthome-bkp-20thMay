<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelGeneral\Address;
use ApplicationScheduleTable;
use Institute;
use DomainValues;
use DomainName;
use ApplicationEducationDetails;
use ApplicationMiscellaneousDetails;
use App\User;
use App\UserSession;
class ApplicationDetails extends Model
{
    protected $table = 'applicantionDetails';
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

    public function get_courseDomainValues() // FK 4
    {
        return $this->belongsTo(DomainValues::class,'courseLevelValueId');
    }
 
    public function get_courseDomainName() // FK 5
    {
        return $this->belongsTo(DomainName::class,'courseNameValueId');
    }

    public function get_schTypeDomainValues() // FK 6
    {
        return $this->belongsTo(DomainValues::class,'scholarshipTypeValueId');
    }

    public function get_user() // FK 7
    {
        return $this->belongsTo(User::class,'userId');
    }

    public function get_userSession() // FK 8
    {
        return $this->belongsTo(UserSession::class,'sessionId');
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



}
