@extends('layouts.adminLayout')
    @section('ReturnedMail')
    <div class="container">
    <div class="form-row">
         <div class="col-xl-12 mb-2">  
            <h3 class="mb-2 color-mg font-sm font-weight-bold pl-4">Dear {{$data['firstname']}},<br></h3>
            <p class="mb-1 text-black font-sm pl-4">We have received your application for No.&nbsp;<span><b>{{$data['applicationNo']}}</b></span> for&nbsp;<span><b>{{$data['scholarshipType']}}</b></span> scholarship. We are unable to&nbsp;<span>accept the application due to discrepancies</span>.</p>
            <p class="mb-2 text-black font-sm pl-4">We are returning the application so that you can make necessary correction and re-submit the same.The reason for returning the application is as follows: <br>
             <br><h4><u>Reason(s) </u></h4></p>

             <p class="mb-1 text-black font-sm pl-4">   1). {{$data['reason1']}}</p>
             @if($data['reason2'] != null)
               <p class="mb-1 text-black font-sm pl-4"> 2). {{$data['reason2']}}</p>
             @endif
             @if($data['reason3'] != null)
               <p class="mb-1 text-black font-sm pl-4"> 3). {{$data['reason3']}}</p>
            @endif
        </div>
       
        <div class="col-xl-8 offset-xl-0 align-self-center mb-4">
          <p class="mb-0 text-black font-sm pl-4">For any clarifications please write to us or call us at contact details provided below.</p>
        </div>
        <div class="col-xl-8 offset-xl-0 align-self-center mb-2">
            <h3 class="mb-2 color-mg font-sm font-weight-bold pl-4">Regards,<br>Administrator<br>{{$data['contactPersonContactNo']}}<br>{{$data['contactPersonEmailId']}}<br><br></h3>
          </div>
        </div>
    </div>
 @endsection