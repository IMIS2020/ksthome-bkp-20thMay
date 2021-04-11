<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
use App\ModelScholarship\DocMaster;

class ApplicationDocs extends Model
{
    protected $table = 'applicationDocs';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails() // FK 4
    {
        return $this->belongsTo(ApplicationDetails::class,'applicationId');
    }

    public function get_docMaster() // FK 4
    {
        return $this->belongsTo(DocMaster::class,'docMasterId');
    }
}
