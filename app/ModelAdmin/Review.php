<?php

namespace App\ModelAdmin;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicantDetails;

class Review extends Model
{
    protected $table = 'reviewTable';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicantDetails()
    {
      return $this->belongsTo(ApplicantDetails::class,'applicantId');    
    }
}
