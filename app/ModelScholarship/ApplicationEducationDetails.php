<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
use App\ModelScholarship\DomainValues;

class ApplicationEducationDetails extends Model
{
    protected $table = 'applicationEducationDetails';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_examLevelDomainValues() // FK 1
    {
        return $this->belongsTo(DomainName::class,'examLevelValueId');    
    }

    public function get_examBoardDomainValues() // FK 2
    {
        return $this->belongsTo(DomainValues::class,'examBoardValueId');    
    }

    public function get_examPassedDomainValues() // FK 3
    {
        return $this->belongsTo(DomainValues::class,'examPassedValueId');    
    }

    public function get_applicationDetails() // FK 4
    {
        return $this->belongsTo(ApplicationDetails::class,'applicationId');
    }
}
