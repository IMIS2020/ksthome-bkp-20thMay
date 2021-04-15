<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
use App\ModelScholarship\DomainValues;
class DomainName extends Model
{
    protected $table = 'domainName';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails()
    {
        return $this->hasMany(ApplicationDetails::class);
    }

    public function get_domainValues()
    {
        return $this->hasMany(DomainValues::class);
    }
}
