<?php

namespace App\ModelScholarship;

use Illuminate\Database\Eloquent\Model;

class ApplicationAddlnQual extends Model
{
    protected $table = 'applicationAddlnQual';
    public $primarykey = 'id';
    public $timestamp = true;

    public function get_examLevelDomainValues() // FK 1
    {
        return $this->belongsTo(DomainValues::class,'examLevelValueId');    
    }

    public function get_examBoardDomainValues() // FK 2
    {
        return $this->belongsTo(DomainValues::class,'examBoardValueId');    
    }

    public function get_examPassedDomainValues() // FK 3
    {
        return $this->belongsTo(DomainValues::class,'examPassedValueId');    
    }

    public function get_applicationDetails() // FK 4
    {
        return $this->belongsTo(ApplicationDetails::class,'applicationId');
    }
}
