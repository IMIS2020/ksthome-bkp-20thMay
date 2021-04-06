<?php

namespace App\ModelGeneral;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;

class Address extends Model
{
    protected $table = 'address';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails()
    {
        return $this->hasMany(ApplicationDetails::class);
    }
}
