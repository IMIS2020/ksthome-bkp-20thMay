<?php

namespace App\ModelAdmin;

use Illuminate\Database\Eloquent\Model;

class ApplicationScheduleModel extends Model
{
    protected $table = 'applicationScheduleTable';
    public $primarykey = 'id';
    public $timestamp = true;
}
