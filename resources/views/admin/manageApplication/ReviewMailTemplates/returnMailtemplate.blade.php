@extends('layouts.adminLayout')
    @section('ReviewMailReturn')
    <div class="container">
    <div class="form-row">
         <div class="col-xl-12 mb-2">
            <!-- <p class="mb-1 color-mg font-sm font-weight-bold">&nbsp;To,&nbsp;<span>{{form.fullName}}</span></p>
            <p class="mb-3 color-mg font-sm font-weight-bold pl-4">{{form.addressAddln1}}, {{form.addressAddln2}}<br>{{form.addressCity}},<br>{{form.addressState}} {{form.addressPinzip}}</p> -->
            <p class="mb-2 color-mg font-sm font-weight-bold pl-4">Dear {{form.fullName}},<br></p>
            <p class="mb-1 text-black font-sm pl-4">We have received your application for No.&nbsp;<span>{{form.appIdShow}}</span> for&nbsp;<span>{{form.scholarshipType}}</span> scholarship. We are unable to&nbsp;<span>accept the application due to discrepancies</span>.</p>
            <p class="mb-2 text-black font-sm pl-4">Kindly check our comments on the documents submitted and re-submit as required.<br></p>
         <div class="table-responsive table-bordered font-ms rev-tbl pl-4">
            <table class="table table-bordered table-sm mb-0">
                <thead class="color-mg">
                    <tr>
                        <th>Document Name</th>
                        <!-- <th>Type</th> -->
                        <th class="text-center">Uploaded</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Comments</th>
                    </tr>
                  </thead>
                <tbody>
                    <tr v-for="(row,index) in docRows" :key="index">
                        <td>{{row.docFileDesc}}<br></td>
                        <!-- <td>Application Form<br></td> -->
                        <td class="text-center">{{row.uploadStatus}}<br></td>
                        <td class="text-center">OK</td>
                        <td class="text-center">Not OK</td>
                    </tr>
                </tbody>
            </table>
           </div>
        </div>
        <div class="col-xl-3 offset-xl-0 align-self-center mb-2">
          <p class="mb-0 color-mg font-sm font-weight-bold pl-4">Additional Comments:&nbsp;</p>
        </div>
        <div class="col-xl-9 mb-2">
          <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" style="line-height: 1;"></textarea></div>
        </div>
        <div class="col-xl-8 offset-xl-0 align-self-center">
          <p class="mb-0 text-black font-sm pl-4">You are required to check your application based on the comments and resubmit by:&nbsp;</p>
        </div>
        <div class="col-xl-3 offset-xl-0 align-self-center"><input class="form-control form-control-sm font-sm" type="date"></div>
        <div class="col-xl-8 offset-xl-0 align-self-center mb-4">
          <p class="mb-0 text-black font-sm pl-4">For any clarifications please write to us or call us at contact details provided below.</p>
        </div>
        <div class="col-xl-8 offset-xl-0 align-self-center mb-2">
            <p class="mb-0 color-mg font-sm pl-4">Regards,<br>Administrator<br>+91 9876543210<br>administrator@gmail.com<br><br></p>
          </div>
        </div>
    </div>
 @endsection