<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use ApplicationDetails;

class ApplicationMiscellaneousDetails extends Model
{
    protected $table = 'applicationMiscellaneousDetails';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails() // FK 1
    {
        return $this->belongsTo(ApplicationDetails::class,'applicationId');
    }
}
