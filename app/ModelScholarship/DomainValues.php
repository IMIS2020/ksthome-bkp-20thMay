<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
use App\ModelScholarship\AnnexureI;
use App\ModelScholarship\DomainName;

class DomainValues extends Model
{
    protected $table = 'domainValues';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails()
    {
        return $this->hasMany(ApplicationDetails::class);
    }

    public function get_annexureI()
    {
        return $this->hasMany(AnnexureI::class);
    }

    public function get_domainName()
    {
        return $this->belongsTo(DomainName::class,'nameId');
    }

    public function get_domainType()
    {
        return $this->belongsTo(DomainName::class,'domainTypeId');
    }
}
