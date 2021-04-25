<template>

<section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                       <h5 class="text-capitalize text-center color-mg"><strong>Application for {{form.scholarshipType}} scholarship {{form.financialYear}} {{form.appIdShow == '' ? '' : '( APP NO: '+form.appIdShow+')'}}</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-form/'+form.applicationId"><strong>Applicant Details</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.hasAdmissionLetter === 'NO' && form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-1/'+form.applicationId"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/review-submit/'+form.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-5">
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
                                                                <thead class="color-mg">
                                                                    <tr>
                                                                        <th>Details</th>
                                                                        <th class="text-center">View / Download</th>
                                                                        <!-- <th class="text-center">View</th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><strong>My {{form.scholarshipType}} application </strong>({{form.appIdShow}})<strong>,&nbsp; for {{form.financialYear}}</strong></td>
                                                                        <td class="text-center" v-if="form.applicationId == '' "><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                                        <td class="text-center" v-else><router-link class="act-link" :to="'/print-view-application/'+form.applicationId" ><i class="fa fa-eye"></i></router-link></td>
                                                                        <!-- <td class="text-center" v-if="form.applicationId == '' "><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                                        <td class="text-center" v-else><router-link class="act-link" to="/print-view-nursing"><i class="fa fa-eye"></i></router-link></td> -->
                                                                    </tr>
                                                                     <tr v-if="form.hasAdmissionLetter == 'NO'">
                                                                        <td><strong>My {{form.scholarshipType}} application Annexure1 </strong>({{form.appIdShow}})<strong>,&nbsp; for {{form.financialYear}}</strong></td>
                                                                        <td class="text-center" v-if="form.applicationId == '' "><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                                        <td class="text-center" v-else><router-link class="act-link" :to="'/print-view-annexure1/'+form.applicationId" ><i class="fa fa-eye"></i></router-link></td>
                                                                        <!-- <td class="text-center" v-if="form.applicationId == '' "><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                                        <td class="text-center" v-else><router-link class="act-link" to="/print-view-nursing"><i class="fa fa-eye"></i></router-link></td> -->
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
                                                                <thead class="color-mg">
                                                                    <tr>
                                                                        <th>Details</th>
                                                                        <th>Document Name</th>
                                                                        <th class="text-center">Uploaded</th>
                                                                        <th class="text-center">View / Download</th>
                                                                        <!-- <th class="text-center">View</th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr v-for="(row,index) in docRows" :key="index">
                                                                        <td><strong>{{row.docFileDesc}}</strong><br></td>
                                                                        <td>{{row.docFileName == null? '' : row.docFileName.split('-').reverse().shift()}}</td>
                                                                        <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{row.uploadStatus}}</span></td>
                                                                        <td class="text-center" v-if="row.uploadStatus == 'YES'"><router-link target="_blank" class="act-link" :to="''+row.fileURL"><i class="fa fa-eye"></i></router-link></td>
                                                                        <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-eye"></i></span></td>
                                                                        <!-- <td class="text-center" v-if="row.uploadStatus == 'YES'"><router-link class="act-link" to ="" data-toggle="modal" @click="showModal(row.row.fileURL)"><i class="fa fa-eye"></i></router-link></td> -->
                                                                        <!-- <td class="text-center" v-else><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
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
                                                                        </div> -->

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
                                                        <h6 class="mb-0 color-mg">Self Declaration</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="t-c-text">I {{form.fullName}} hereby declare that to the best of my knowledge the above information furnished by me is true and I understand that if at any stage, it is found that the information provided by me is false/ not true, all the benefits given to me under “{{form.scholarshipType}} Scholarship Programme” could be withdrawn.</p>
                                                        <div v-if="form.appStatus != 'Submit'">
                                                        <div class="form-group mb-3">
                                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" v-model='terms' @click="changeStatus()"><label class="form-check-label" for="formCheck-1">I accept the terms &amp; conditions</label></div>
                                                        </div>
                                                        <div class="form-group"><button class="btn btn-sm btn-mg" type="button" :disabled='isDisabled' @click="saveForm">Submit Application Form</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-2 offset-xl-4 my-2"><button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Save</strong></button></div>
                    <div class="col-xl-2 offset-xl-0 my-2"><router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link></div> -->
                </div>
            </form>
        </div>
    <!-- Modal - 1 -->
    <!-- <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form1">
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
    </div> -->

    <!-- Modal-2 -->
    <!-- <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form2">
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
      </div> -->

      <!-- Modal-3 -->
      <!-- <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form3">
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
      </div> -->

      <!-- Modal-4 -->

      <!-- <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form4">
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
      </div> -->

      <!-- Modal -5 -->

      <!-- <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form5">
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
      </div> -->

      <!-- Modal -6 -->
      <!-- <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form6">
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
      </div> -->

      <!-- Modal-7 -->
      <!-- <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form7">
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
      </div> -->

         <!-- Modal-8 -->
      <!-- <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form8">
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
      </div> -->

         <!-- Modal-9 -->
      <!-- <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form9">
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
      </div> -->

    </section>
</template>

<script>
export default{
    data(){
       return{
         userId: document.querySelector("meta[name='userId']").getAttribute('content'),
         csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
         terms: false,

          docRows:[
                {
                    id: '',
                    docFileName: '',
                }
            ],
        Sform:{
            appStatus: false,
        },

         form:
            {
                // courseLevel:'',
                hasAdmissionLetter:'',
                applicationId:'',
                scholarshipType: '',
                financialYear:'',
                applicantNameF:'',
                applicantNameM:'',
                applicantNameL:'',
                applicantFatherName:'',
                applicantMotherName:'',
                addressAddln1:'',
                fullName: '',
                appStatus: '',
                appIdShow: '',
            },

        // getdata:{
        //     hasAdmissionLetter:'',
        //     applicationId:'',
        //     financialYear:'',
        //     applicantLeprosyAffectedFather:'',
        //     applicantLeprosyAffectedMother:'',
        //     applicantLeprosyAffectedSelf:'',
        // },
        // getFiles:{
        //     admissionLetter: '#',
        //     annexureI: '#',
        //     annexureII: '#',
        //     photograph: '#',
        //     proofOfAge: '#',
        //     markSheets10: '#',
        //     markSheets12: '#',
        //     leprosyCertificateSelf: '#',
        //     leprosyCertificateMother: '#',
        //     leprosyCertificateFather: '#'
        //  },
        errors:[]
        }
    },

 
   methods:{
    //   getdataNursing(){
    //    axios.get(`/api/application-form/${this.userId}`)
    //     .then(response => {
    //       if (response.data['success']) {
    //         const data = response.data['data']
    //         console.log(data)
    //         this.getdata.hasAdmissionLetter  = data.hasAdmissionLetter;
    //         this.getdata.financialYear       = data.financialYear ;
    //         this.getdata.applicationId       = data.applicationId;
    //         this.getdata.applicantNameF      = data.applicantNameF;
    //         this.getdata.applicantNameM      = data.applicantNameM;
    //         this.getdata.applicantNameL      = data.applicantNameL;
    //         this.getdata.applicantLeprosyAffectedFather = data.applicantLeprosyAffectedFather;
    //         this.getdata.applicantLeprosyAffectedMother = data.applicantLeprosyAffectedMother;
    //         this.getdata.applicantLeprosyAffectedSelf   = data.applicantLeprosyAffectedSelf;
           
    //         this.getdata.fullName = `${this.getdata.applicantNameF}${(this.getdata.applicantNameM)?" "+this.getdata.applicantNameM:''} ${this.getdata.applicantNameL}`;
    //         this.getFileData();
    //      }
    //   })
    // },

        async readApplicationForm() 
        {
            let applicationId = window.location.pathname.split('/').reverse()[0];
            axios.get(`/api/get-application-form-data/${applicationId}`)
            .then(response => {
                if (response.data['success']) 
                {
                    this.form.applicationId=response.data['data'][0][0].schApplicationId;
                    this.form.scholarshipType=response.data['data'][0][0].scholarshipType;
                    this.form.applicantNameF=response.data['data'][0][0].applicantNameF;
                    this.form.applicantNameM=response.data['data'][0][0].applicantNameM;
                    this.form.applicantNameL=response.data['data'][0][0].applicantNameL;
                    this.form.applicantFatherName=response.data['data'][0][0].applicantFatherName;
                    this.form.applicantMotherName=response.data['data'][0][0].applicantMotherName;
                    this.form.financialYear = response.data['data'][0][0].financialYear;  
                    this.form.hasAdmissionLetter = response.data['data'][0][0].hasAdmissionLetter;
                    this.form.addressAddln1=response.data['data'][0][0].get_address.addressAddln1;
                    this.form.fullName = response.data['data'][0][0].applicantNameF+' '+ (response.data['data'][0][0].applicantNameM == null ? ' ' : response.data['data'][0][0].applicantNameM )+' '+response.data['data'][0][0].applicantNameL
                    this.form.appStatus = response.data['data'][0][0].appStatus;
                    this.form.appIdShow = response.data['data'][0][0].appIdShow;
                    // if(this.form.applicantGender=response.data['data'][0][0].applicantGender == "Male")
                    // {
                    //     this.getData.genderType = "son";
                    // }else{
                    //     this.getData.genderType = "daughter";
                    // }
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
        },

         getMasterDoc(){
           
            let applicationId = window.location.pathname.split('/').reverse()[0];
            axios.get('/api/get-documents/'+applicationId)
                .then(response => {
                    this.docRows = response.data;
                    this.readApplicationForm();
                    // if(response.data.length != 0)
                    // this.docRows = response.data
                    // this.docRows=this.docRows.map((row)=>{
                    //     let fname = row.docFileName.split('-');
                    //     fname.shift()
                    //     row._docFileName= fname.join('-');
                    //     return row
                    // })
                })
        },

        changeStatus()
        {
            //console.log(event.target.value)
            this.Sform.appStatus = true;
            //console.log(this.Sform.appStatus);
        },

        saveForm(){
            axios.post('/api/submit-app/'+this.form.applicationId,this.Sform)
            .then(response => {
                    if (response.data['success']){
                        this.readApplicationForm();
                        this.$fire({
                            position: 'top',
                            icon: 'success',
                            title: "Application Submitted",
                            showConfirmButton: false,
                            timer: 3000
                        })
                    } else {
                        if(response.data['document'])
                        {
                            this.readApplicationForm();
                            this.$fire({
                                position: 'top',
                                icon: 'error',
                                title: " "+response.data['msg'],
                                showConfirmButton: false,
                                timer: 3000
                            })

                        }
                    }
                })
        },
  },

  computed: {
  	  isDisabled: function(){
    	return !this.terms;
        }
      },
    created(){
     this.readApplicationForm();
     this. getMasterDoc();
    }
 }
</script>
