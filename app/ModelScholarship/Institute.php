<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
use App\ModelGeneral\Address;
use App\ModelScholarship\AnnexureI;

class Institute extends Model
{
    protected $table = 'institute';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails()
    {
        return $this->hasMany(ApplicationDetails::class);
    }

    public function get_address() // FK 1
    {
        return $this->belongsTo(Address::class,'instituteAddressId');    
    }

    public function get_annexure()
    {
        return $this->hasMany(AnnexureI::class);
    }

}
