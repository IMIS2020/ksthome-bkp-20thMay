<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;

class ApplicationDocs extends Model
{
    protected $table = 'applicationDocs';
    public $primarykey = 'id';
    public $timestamp = true;
}
