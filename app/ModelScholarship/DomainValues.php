<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
class DomainValues extends Model
{
    protected $table = 'domainValues';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails()
    {
        return $this->hasMany(ApplicationDetails::class);
    }
}
