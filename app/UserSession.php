<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ModelScholarship\ApplicationDetails;
class UserSession extends Model
{
    protected $table = 'userSessio';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_applicationDetails()
    {
        return $this->hasMany(ApplicationDetails::class);
    }
}
