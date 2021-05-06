<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
class ApplicationScheduleTable extends Model
{
    protected $table = 'applicationScheduleTable';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails()// 1
    {
        return $this->hasMany(ApplicationDetails::class);
    }

    public function get_applicationSession() // FK 8
    {
        return $this->belongsTo(ApplicationSession::class,'sessionId');
    }

}
