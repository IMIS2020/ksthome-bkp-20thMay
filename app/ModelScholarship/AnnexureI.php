<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\Institute;
use App\ModelScholarship\DomainValues;
use App\ModelScholarship\ApplicationDetails;

class AnnexureI extends Model
{
    protected $table = 'annexureI';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_institute()
    {
        return $this->belongsTo(Institute::class,'insId');
    }

    public function get_courseLevelValue()
    {
        return $this->belongsTo(DomainName::class,'courseLevelValueId');
    }

    public function get_courseLevelName()
    {
        return $this->belongsTo(DomainValues::class,'courseNameValueId');
    }

    public function get_application()
    {
        return $this->belongsTo(ApplicationDetails::class,'applicationId');
    }

}
