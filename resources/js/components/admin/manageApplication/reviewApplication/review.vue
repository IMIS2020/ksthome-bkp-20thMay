<template>
   <body id="page-top" class="grey-bg">
    <div id="wrapper" style="height: 100vh;">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-custom p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand" href="#">
                    <div class="sidebar-brand-icon rotate-n-15 text-white"><i class="fas fa-building"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>S-ILF</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin"><i class="fas fa-home"></i><span>Home</span></router-link></li>
                    <li class="nav-item">
                        <div class="nav-item dropdown shadow-lg nav-dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-money-bill-wave"></i><span>Dropdown Menu</span></a>
                            <div class="dropdown-menu dr-cs"><a class="dropdown-item" href="#"><i class="fas fa-money-bill-wave"></i>&nbsp;Dropdown Menu</a></div>
                        </div>
                    </li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-domains"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-application-schedule"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-application-details"><i class="fas fa-sticky-note"></i><span>Manage Applications</span></router-link></li>
                    
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" class="grey-bg">
                <nav class="navbar navbar-light navbar-expand shadow topbar static-top top-nav">
                    <div class="container-fluid"><a class="navbar-brand text-uppercase text-white" href="#"><strong>S-ILF scholarships</strong></a><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <!-- <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow dr-not"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">notifications center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="icon-circle gold-bg"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small">December 12, 2019</span>
                                                <p><strong><em>A new monthly report is ready to download!</em></strong></p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="icon-circle gold-bg"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small">December 12, 2019</span>
                                                <p><strong><em>A new monthly report is ready to download!</em></strong></p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="icon-circle gold-bg"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small">December 12, 2019</span>
                                                <p><strong><em>A new monthly report is ready to download!</em></strong></p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow dr-not"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">messages center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatar_2x.png">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatar_2x.png">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatar_2x.png">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatar_2x.png">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li> -->
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow dr-not"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="assets/img/avatar_2x.png"><span class="d-none d-lg-inline ml-2 text-white-600 small"><strong>Administrator</strong></span></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><button class="dropdown-item" role="button" @click.prevent="logout"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
               </nav>
                <!-- Application tabs -->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12 col-xl-12 offset-xl-0 px-0">
                        <div class="row my-2">
                           <div class="col-xl-12 offset-xl-0">
                              <h5 class="mb-0 p-head"><strong>Application for {{form.scholarshipType}} scholarship {{form.financialYear}} {{form.appIdShow == '' ? '' : '( APP NO: '+form.appIdShow+')'}}</strong></h5>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-xl-12">
                                <div class="mb-3">
                                    <ul class="nav nav-tabs font-sm" role="tablist">
                                       <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-application-form/'+form.applicationId"><strong>Applicant Details</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.hasAdmissionLetter === 'NO' && form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-annexure-1/'+form.applicationId"><strong>Annexure-I</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-applicant-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review/'+form.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
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
                                                                                <td class="text-center" v-else><router-link class="act-link" :to="'/admin/print-view-application/'+form.applicationId" ><i class="fa fa-eye"></i></router-link></td>
                                                                                <!-- <td class="text-center" v-if="form.applicationId == '' "><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                                                <td class="text-center" v-else><router-link class="act-link" to="/print-view-nursing"><i class="fa fa-eye"></i></router-link></td> -->
                                                                            </tr>
                                                                            <tr v-if="form.hasAdmissionLetter == 'NO'">
                                                                                <td><strong>My {{form.scholarshipType}} application Annexure1 </strong>({{form.appIdShow}})<strong>,&nbsp; for {{form.financialYear}}</strong></td>
                                                                                <td class="text-center" v-if="form.applicationId == '' "><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                                                <td class="text-center" v-else><router-link class="act-link" :to="'/admin/print-view-annexure1/'+form.applicationId" ><i class="fa fa-eye"></i></router-link></td>
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
                        
                     </div>
                  </div>
                </div>
               <!-- End of tabs -->
            </div>
        </div>
    </div>
    <!-- END SIDE AND NAVBAR -->
 </body>
</template>
<script>
export default{
    data(){
       return{
         userId:'',
        //  csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
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
            axios.get(`/admin/admin-api/get-application-form-data/${applicationId}`)
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
            axios.get('/admin/admin-api/get-documents/'+applicationId)
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