<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelAdmin\DomainsModel;

class DomainsController extends Controller
{
    #Add-new-Domain

    public function addNewDomains(Request $request)
    {
       $domains = new DomainsModel;

       $request->validate([
         'domainsName'        => ['required'],
         'domainsDescription' => [],
     ]);

     $lastId = 0;
     $getId = DomainsModel::orderBy('id', 'DESC')->first();
     if(empty($getId)){$lastId = 0;}
     else{$lastId = intval(explode('-',$getId->domainsId)[1]);}//"DOM-000001"; 
          $presentId =  $lastId+1; 

      
          $domainsId = "DOM-".str_pad($presentId, 4, "0", STR_PAD_LEFT);
          $domains->domainsId             =  $domainsId;
          $domains->domainsName           =  $request->domainsName;
          $domains->domainsDescription    =  $request->domainsDescription;
          $domains->save();
    }

    #get-data
    public function getDomains()
    {
      $getDomains =DomainsModel::all();
      return json_decode(json_decode($getDomains));
    }
}
