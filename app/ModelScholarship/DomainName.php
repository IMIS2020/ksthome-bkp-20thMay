<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
class DomainName extends Model
{
    protected $table = 'domainName';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails()
    {
        return $this->hasMany(ApplicationDetails::class);
    }
}
