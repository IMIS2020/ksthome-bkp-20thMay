<template>
    <section class="page-main">
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                        <h4 class="text-capitalize text-center color-mg"><strong>Application form (Nursing scholarship - {{getdata.financialYear}})</strong></h4>
                    </div>
                    <div class="col-xl-12">
                        <form>
                            <div class="div-inner-filed">
                                <div class="form-row">
                                    <div class="col-xl-12 mb-2">
                                        <div class="card mt-2 det-sec">
                                            <div class="card-header">
                                                <h6 class="mb-0 color-mg">Review Application Form</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive table-bordered font-sm rev-tbl">
                                                    <table class="table table-bordered table-sm mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Details</th>
                                                                <th class="text-center">Download</th>
                                                                <th class="text-center">View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <td><strong>My nursing application </strong>({{getdata.applicationId}})<strong>,&nbsp; for {{getdata.financialYear}}</strong></td>
                                                            <td class="text-center"><a class="act-link" href="#"><i class="fa fa-download"></i></a></td>
                                                            <td class="text-center"><router-link class="act-link" :to="'/print-view-nursing'" data-target="#vw-apo-form"><i class="fa fa-eye"></i></router-link></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-2">
                                        <div class="card mt-2 det-sec">
                                            <div class="card-header">
                                                <h6 class="mb-0 color-mg">Review Attachments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive table-bordered font-sm rev-tbl">
                                                    <table class="table table-bordered table-sm mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Details</th>
                                                                <th>Document Name</th>
                                                                <th class="text-center">Uploaded</th>
                                                                <th class="text-center">Download</th>
                                                                <th class="text-center">View</th>
                                                            </tr>
                                                        </thead>
                                                      <tbody>
                                                            <tr>
                                                                <td><strong>Proof of admission in a recognized&nbsp;institute/ admission call letter issued by the institute</strong><br></td>
                                                                <td >{{(getFiles.admissionLetter === '#')?'Documents not uploaded':getFiles.admissionLetter.substr(-19)}}</td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}</span></td>
                                                                <td class="text-center" v-if="getFiles.admissionLetter !== '#'"><router-link target="_blank" class="act-link" :to="''+getFiles.admissionLetter"><i class="fa fa-download"></i></router-link></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span></td>
                                                                <td class="text-center" v-if="getFiles.admissionLetter !== '#'"><a class="act-link" href="#" data-toggle="modal" data-target="vw-apo-form1"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                            </tr>
                                                                <!-- <tr>
                                                                <td><strong>Annexure-I letter </strong><br></td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">System generated</span></td>
                                                                <td class="text-center"><a class="act-link" href="#"><i class="fa fa-download"></i></a></td>
                                                                <td class="text-center"><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                            </tr> -->
                                                            <tr>
                                                                <td><strong>Annexure-II letter from colony leader stating the candidate is residing in the colony</strong><br></td>
                                                                <td >{{(getFiles.annexureII === '#')?'Documents not uploaded':getFiles.annexureII.substr(-15)}}</td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.annexureII === '#')?'No':'Yes'}}</span></td>
                                                                <td class="text-center" v-if="getFiles.annexureII !== '#'"><router-link target="_blank" class="act-link" :to="''+getFiles.annexureII"><i class="fa fa-download"></i></router-link></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span></td>
                                                                <td class="text-center" v-if="getFiles.annexureII !== '#'"><a class="act-link" href="#" data-toggle="modal" data-target="vw-apo-form1"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Passport size photograph</strong><br></td>
                                                                <td >{{(getFiles.photograph === '#')?'Documents not uploaded':getFiles.photograph.substr(-15)}}</td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.photograph === '#')?'No':'Yes'}}</span></td>
                                                                <td class="text-center" v-if="getFiles.photograph !== '#'"><router-link target="_blank" class="act-link" :to="''+getFiles.photograph"><i class="fa fa-download"></i></router-link></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span></td>
                                                                <td class="text-center" v-if="getFiles.photograph !== '#'"><a class="act-link" href="#" data-toggle="modal" data-target="vw-apo-form1"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Self attested Birth certificate/ proof of age</strong><br></td>
                                                                <td >{{(getFiles.proofOfAge  === '#')?'Documents not uploaded':getFiles.proofOfAge.substr(-15)}}</td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.proofOfAge === '#')?'No':'Yes'}}</span></td>
                                                                <td class="text-center" v-if="getFiles.proofOfAge !== '#'"><router-link target="_blank" class="act-link" :to="''+getFiles.proofOfAge"><i class="fa fa-download"></i></router-link></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span></td>
                                                                <td class="text-center" v-if="getFiles.proofOfAge !== '#'"><a class="act-link" href="#" data-toggle="modal" data-target="vw-apo-form1"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Self attested marksheet for 10th</strong><br></td>
                                                                <td >{{(getFiles.markSheets10 === '#')?'Documents not uploaded':getFiles.markSheets10.substr(-17)}}</td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets10 === '#')?'No':'Yes'}}</span></td>
                                                                <td class="text-center" v-if="getFiles.markSheets10 !== '#'"><router-link target="_blank" class="act-link" :to="''+getFiles.markSheets10"><i class="fa fa-download"></i></router-link></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span></td>
                                                                <td class="text-center" v-if="getFiles.markSheets10 !== '#'"><a class="act-link" href="#" data-toggle="modal" data-target="vw-apo-form1"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Self attested marksheet for 12th</strong><br></td>
                                                                <td >{{(getFiles.markSheets12 === '#')?'Documents not uploaded':getFiles.markSheets12.substr(-17)}}</td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets12 === '#')?'No':'Yes'}}</span></td>
                                                                <td class="text-center" v-if="getFiles.markSheets12 !== '#'"><router-link target="_blank" class="act-link" :to="''+getFiles.markSheets12"><i class="fa fa-download"></i></router-link></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span></td>
                                                                <td class="text-center" v-if="getFiles.markSheets12 !== '#'"><a class="act-link" href="#" data-toggle="modal" data-target="vw-apo-form1"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td><strong>Self attested marksheet for Graduation</strong><br></td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                <td class="text-center"><a class="act-link" href="#"><i class="fa fa-download"></i></a></td>
                                                                <td class="text-center"><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                            </tr> -->
                                                            <tr v-if="getdata.applicantLeprosyAffectedMother == true">
                                                                <td><strong>Self attested Leprosy Certificate of Mother</strong><br></td>
                                                                <td >{{(getFiles.leprosyCertificateMother === '#')?'Documents not uploaded':getFiles.leprosyCertificateMother.substr(-29)}}</td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateMother === '#')?'No':'Yes'}}</span></td>
                                                                <td class="text-center" v-if="getFiles.leprosyCertificateMother !== '#'"><router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateMother"><i class="fa fa-download"></i></router-link></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span></td>
                                                                <td class="text-center" v-if="getFiles.leprosyCertificateMother !== '#'"><a class="act-link" href="#" data-toggle="modal" data-target="vw-apo-form1"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                            </tr>
                                                            <tr v-if="getdata.applicantLeprosyAffectedFather == true">
                                                                <td><strong>Self attested Leprosy Certificate of Father</strong><br></td>
                                                                <td >{{(getFiles.leprosyCertificateFather === '#')?'Documents not uploaded':getFiles.leprosyCertificateFather.substr(-29)}}</td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateFather === '#')?'No':'Yes'}}</span></td>
                                                                <td class="text-center" v-if="getFiles.leprosyCertificateFather !== '#'"><router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateFather"><i class="fa fa-download"></i></router-link></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span></td>
                                                                <td class="text-center" v-if="getFiles.leprosyCertificateFather !== '#'"><a class="act-link" href="#" data-toggle="modal" data-target="vw-apo-form1"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                            </tr>
                                                            <tr  v-if="getdata.applicantLeprosyAffectedSelf== true">
                                                                <td><strong>Self attested Leprosy Certificate of Self</strong><br></td>
                                                                <td >{{(getFiles.leprosyCertificateSelf === '#')?'Documents not uploaded':getFiles.leprosyCertificateSelf.substr(-27)}}</td>
                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateSelf === '#')?'No':'Yes'}}</span></td>
                                                                <td class="text-center" v-if="getFiles.leprosyCertificateSelf !== '#'"><router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateSelf"><i class="fa fa-download"></i></router-link></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span></td>
                                                                <td class="text-center" v-if="getFiles.leprosyCertificateSelf !== '#'"><a class="act-link" href="#" data-toggle="modal" data-target="vw-apo-form1"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </form>
            <div class="col-xl-2 m-auto">
             <router-link class="btn btn-mg btn-block btn-sm" type="button" to="/manage-scholarship"><strong>Back</strong></router-link>
          </div>
        </div>
    <!-- Modal - 1 -->
    <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form1">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                              <embed :src="''+getFiles.admissionLetter" width="100%" height="600" type='application/pdf'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                    <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                </div>
            </div>
          </div>
    </div>

    <!-- Modal-2 -->
    <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form2">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                              <embed :src="''+getFiles.annexureII" width="100%" height="600" type='application/pdf'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                    <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                </div>
            </div>
          </div>
      </div>

      <!-- Modal-3 -->
      <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form3">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                 <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                              <embed :src="''+getFiles.photograph" width="100%" height="600" type='application/pdf'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                    <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                </div>
            </div>
          </div>
      </div>

      <!-- Modal-4 -->

      <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form4">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <embed :src="''+getFiles.proofOfAge" width="100%" height="600" type='application/pdf'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                    <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                </div>
            </div>
          </div>
      </div>

      <!-- Modal -5 -->

      <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form5">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                              <embed :src="''+getFiles.markSheets10" width="100%" height="600" type='application/pdf'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                    <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                </div>
            </div>
          </div>
      </div>

      <!-- Modal -6 -->

      <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form6">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                              <embed :src="''+getFiles.markSheets12" width="100%" height="600" type='application/pdf'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                    <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                </div>
            </div>
          </div>
      </div>

       <!-- Modal-7 -->
      <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form7">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                              <embed :src="''+getFiles.leprosyCertificateSelf" width="100%" height="600" type='application/pdf'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                    <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                </div>
            </div>
          </div>
      </div>

         <!-- Modal-8 -->
      <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form8">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                              <embed :src="''+getFiles.leprosyCertificateMother" width="100%" height="600" type='application/pdf'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                    <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                </div>
            </div>
          </div>
      </div>

         <!-- Modal-9 -->
      <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form9">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                              <embed :src="''+getFiles.leprosyCertificateFather" width="100%" height="600" type='application/pdf'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                    <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                </div>
            </div>
          </div>
      </div>
 </section>
   
</template>

<script>
export default{
    data(){
       return{
         userId: document.querySelector("meta[name='userId']").getAttribute('content'),
         csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
         terms: false,
        getdata:{
            hasAdmissionLetter:'',
            applicationId:'',
            financialYear:'',
            applicantLeprosyAffectedFather:'',
            applicantLeprosyAffectedMother:'',
            applicantLeprosyAffectedSelf:'',
        },
        getFiles:{
            admissionLetter: '#',
            annexureI: '#',
            annexureII: '#',
            photograph: '#',
            proofOfAge: '#',
            markSheets10: '#',
            markSheets12: '#',
            leprosyCertificateSelf: '#',
            leprosyCertificateMother: '#',
            leprosyCertificateFather: '#'
         },
        errors:[]
        }
    },

 
   methods:{
      getdataNursing(){
       axios.get(`/api/application-form/${this.userId}`)
        .then(response => {
          if (response.data['success']) {
            const data = response.data['data']
            console.log(data)
            this.getdata.hasAdmissionLetter  = data.hasAdmissionLetter;
            this.getdata.financialYear       = data.financialYear ;
            this.getdata.applicationId       = data.applicationId;
            this.getdata.applicantNameF      = data.applicantNameF;
            this.getdata.applicantNameM      = data.applicantNameM;
            this.getdata.applicantNameL      = data.applicantNameL;
            this.getdata.applicantLeprosyAffectedFather = data.applicantLeprosyAffectedFather;
            this.getdata.applicantLeprosyAffectedMother = data.applicantLeprosyAffectedMother;
            this.getdata.applicantLeprosyAffectedSelf   = data.applicantLeprosyAffectedSelf;
           
            this.getdata.fullName = `${this.getdata.applicantNameF}${(this.getdata.applicantNameM)?" "+this.getdata.applicantNameM:''} ${this.getdata.applicantNameL}`;
            this.getFileData();
         }
      })
    },

         getFileData(){
            axios.get('/api/get-upload-documents/'+this.getdata.applicationId)
            .then(response => {
                if (response.data['success']) {
                    this.getFiles = response.data['data']
                }
            })
        }
  },

  computed: {
  	  isDisabled: function(){
    	return !this.terms;
        }
      },
    created(){
     this.getdataNursing();
    }
 }
</script>