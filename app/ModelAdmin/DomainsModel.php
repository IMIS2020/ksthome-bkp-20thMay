<?php

namespace App\ModelAdmin;

use Illuminate\Database\Eloquent\Model;

class DomainsModel extends Model
{
    protected $table = 'domainsTable';
    public $primarykey = 'id';
    public $timestamp = true;
}
