<?php

namespace App\ModelGeneral;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
use App\ModelScholarship\Institute;

class Address extends Model
{
    protected $table = 'portalAddress';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails()
    {
        return $this->hasMany(ApplicationDetails::class);
    }

    public function get_institute()
    {
        return $this->hasMany(Institute::class);
    }
}
