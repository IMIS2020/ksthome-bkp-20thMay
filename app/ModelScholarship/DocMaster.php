<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDocs;
class DocMaster extends Model
{
    protected $table = 'docMaster';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDocs()
    {
        return $this->hasMany(ApplicationDocs::class);
    }
}
