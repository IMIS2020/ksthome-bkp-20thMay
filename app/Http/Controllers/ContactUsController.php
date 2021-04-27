<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactUsMail;
use App\Jobs\SendContactUsMsgJob;
use App\ContactUsModel;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\DomainValues;
use Carbon\Carbon;
use Auth;

class ContactUsController extends Controller
{
    public function viewContactUs()
    { 
       return view ('contactUs.contactUs');
    }


   public function send(Request $request)
   {
      $this->validate($request, [
         'name'               =>  [],
         'email'              =>  [],
         'contactNumber'      =>  [],
         'msgCategory'        =>  ['required'],
         'msgSubject'         =>  ['required'],
         'msgBody'            =>  ['required'],
         'scholarshipType'    =>  ['required'],
      ]);

      
      $msgTicketId = 'SS'.'-'.mt_rand(11111111,99999999);
   
      $msgStore = new ContactUsModel;
      $msgStore->msgTicketId =  $msgTicketId;
      $msgStore->msgCategory =  $request->msgCategory;
      $msgStore->msgSubject  =  $request->msgSubject;
      $msgStore->msgBody     =  $request->msgBody;
      $msgStore->userId      =  Auth::user()->id;
      $msgStore->msgSendDateTime =  Carbon::now();

      $msgStore->save();

      $data = array(
         'firstname'         =>   $request->firstname,
         'lastname'          =>   $request->lastname,
         'name'              =>   $request->name,
         'email'             =>   $request->email,
         'contactNumber'     =>   $request->contactNumber,
         'msgCategory'       =>   $request->msgCategory,
         'msgSubject'        =>   $request->msgSubject,
         'msgBody'           =>   $request->msgBody,
         'msgTicketId'       =>   $msgTicketId,
       );
   
         $email = $request->email;
         // Mail::to('birth.user1@gmail.com')->cc($email)->send(new contactUsMail($data));
         SendContactUsMsgJob::dispatch($email,$data); 
         return redirect('/contact-us')->with('message', 'Thank you for contacting with us !');
        
   } 
}

