<?php
namespace App\Http\Controllers\Admin\Domains;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\DomainValues;

class DomainsController extends Controller
{
    public function addDomain(Request $Request)
    {

    }

    public function getAllDomains()
    {
        $getDomains = DomainName::orderBy('id')->get();
        return $getDomains;
    }

    public function getDomainsById()
    {

    }

    public function updateDomain(Request $Request)
    {

    }

    public function deleteDomain()
    {

    }

    public function filterData()
    {

    }





}
