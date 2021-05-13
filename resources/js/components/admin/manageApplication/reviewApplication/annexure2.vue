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
                    <!-- <li class="nav-item">
                        <div class="nav-item dropdown shadow-lg nav-dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-money-bill-wave"></i><span>Dropdown Menu</span></a>
                            <div class="dropdown-menu dr-cs"><a class="dropdown-item" href="#"><i class="fas fa-money-bill-wave"></i>&nbsp;Dropdown Menu</a></div>
                        </div>
                    </li> -->
                    <!-- <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-domains"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-application-schedule"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li> -->
                    <li class="nav-item shadow-lg"><router-link v-if="userId2 =='SU-000001'" class="nav-link" to="/admin/manage-internal-users"><i class="fas fa-wrench"></i><span>Manage Users</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="#"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                     <li class="nav-item shadow-lg"><router-link  v-if="userId2 =='	SU-000001'" class="nav-link" to="/admin/manage-application-schedule"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-application-details"><i class="fas fa-sticky-note"></i><span>Manage Applications</span></router-link></li>
                     <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/all-registered-users"><i class="fa fa-user"></i><span>All Registered Users</span></router-link></li>
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
                                <div class="nav-item dropdown no-arrow dr-not"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="assets/img/avatar_2x.png"><span class="d-none d-lg-inline ml-2 text-white-600 small"><strong>{{firstname}} {{middlename}} {{lastname}}</strong></span></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                                    <router-link class="dropdown-item" to="/admin/all-user-profile"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</router-link>
                                    <router-link v-if="userId == 'SU-000001'" class="dropdown-item" to="/admin/manage-internal-users"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Manage Users</router-link>
                                    <!-- <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a> -->
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
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-applicant-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review/'+form.applicationId"><strong>View</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>View</strong></router-link></li>
                                    </ul>
                                    <div class="tab-content  bg-white">
                                        <div class="tab-pane active" role="tabpanel" id="tab-3">
                                            <div class="div-inner-filed">
                                                <div class="ub-reg-form">
                                                    <div class="form-row">
                                                        <div class="col-xl-12 mb-2">
                                                            <div class="card mt-2 det-sec">
                                                                <div class="card-header">
                                                                    <h6 class="mb-0 color-mg">Declaration Form (To be signed by colony leader)</h6>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h4 class="text-uppercase text-center text-black font-xl font-weight-bold">
                                                                            <span style="text-decoration: underline;">to whom it may concern</span>
                                                                        </h4>
                                                                    <div class="form-row"> 
                                                                        <p class="lead mb-0 text-left text-black font-m font-weight-bold">I<strong>&nbsp;</strong><span>
                                                                        <strong>{{this.Nform.applicantColonyLeaderName}}</strong></span><strong>
                                                                        <em>&nbsp;</em></strong>hereby certify that the applicant&nbsp;<span>
                                                                        <strong>{{form.fullName}}</strong></span>&nbsp;has been residing in the colony ,&nbsp;
                                                                        <span><strong>{{form.addressAddln1}}</strong></span>.<br><span v-if="form.applicantLeprosyAffectedFather == true"><strong> {{form.applicantFatherName}}</strong>
                                                                        <span v-if="countLeprosy == 2">and</span>
                                                                        <span v-if="countLeprosy == 3">,</span>
                                                                        <span v-if="countLeprosy == 1"></span>
                                                                        </span>
                                                                        <span v-if="form.applicantLeprosyAffectedMother == true"><strong>{{form.applicantMotherName}}</strong></span>
                                                                        <!-- <span v-if="countLeprosy == 2"></span>-->
                                                                        <span v-if="countLeprosy == 3">and</span>
                                                                        <span v-if="form.applicantLeprosyAffectedMother == true && form.applicantLeprosyAffectedSelf == true" >and</span>
                                                                        <!-- <span v-if="countLeprosy == 1">and</span> -->
                                                                        <span v-if="form.applicantLeprosyAffectedSelf == true"><strong>{{form.fullName}}</strong></span>
                                                                            from the family
                                                                            <span v-if="countLeprosy > 1">are</span>
                                                                            <span v-if="countLeprosy == 1">is</span> 
                                                                            affected by leprosy.&nbsp;</p>
                                                                            <br>
                                                                        <!-- <br><br>I certify that, to best of my knowledge, the information provided by the candidate is true.  -->
                                                                        <p class="lead mb-0 text-left text-black font-l font-weight-bold"> I recommend the applicant for&nbsp;<span><strong>{{form.scholarshipType}} Scholarship Programme</strong></span>.</p>
                                                                        <!-- <br><br><br><br>Signature of Colony Leader: __________________________________, Date: ____________________</p> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-xl-3 offset-xl-3" v-if="globalDisable == false"><button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Save</strong></button></div>
                                                        <div class="col-xl-3 offset-xl-0" v-if="globalDisable == false"><router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-my-application"><strong>Cancel</strong></router-link></div>
                                                        <div class="col-xl-3 offset-xl-5" v-else><router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-my-application"><strong>Cancel</strong></router-link></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-0 my-2" v-if="globalDisable == false">
                              <router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-my-application"><strong>Cancel</strong></router-link>
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
            userId2    : document.querySelector("meta[name='userId']").getAttribute('content'),
            firstname  : document.querySelector("meta[name='firstname']").getAttribute('content'),
            middlename : document.querySelector("meta[name='middlename']").getAttribute('content'),
            lastname   : document.querySelector("meta[name='lastname']").getAttribute('content'),
                userId:'',
                fullName:{},
                globalDisable: true,
                countLeprosy : 0,
                form:
                {
                    // courseLevel:'',
                    applicantLeprosyAffectedSelf: false,
                    applicantLeprosyAffectedFather: false,
                    applicantLeprosyAffectedMother: false,
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
                    fullName:'',
                    appIdShow:'',
                },
                Nform:{
                    applicantColonyLeaderName:'',
                },
                getdata:{
                    applicantNameF:'',
                    applicantNameM:'',
                    applicantNameL:'',
                    applicantFatherName:'',
                    applicantMotherName:'',
                    addressAddln1:'',
                    hasAdmissionLetter:'',
                    applicationId:'',
                    financialYear:'',
                },
                errors:[]
            }
         },

   methods:{

            logout(){
            axios.get('/admin/logout').then(function(){
                document.location.href = "/admin/login";
            })
        },

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
                    this.form.fullName = response.data['data'][0][0].applicantNameF+' '+ (response.data['data'][0][0].applicantNameM == null ? ' ' : response.data['data'][0][0].applicantNameM )+' '+response.data['data'][0][0].applicantNameL;
                    this.form.applicantNameM=response.data['data'][0][0].applicantNameM;
                    this.form.applicantNameL=response.data['data'][0][0].applicantNameL;
                    this.form.applicantFatherName=response.data['data'][0][0].applicantFatherName;
                    this.form.applicantMotherName=response.data['data'][0][0].applicantMotherName;
                    this.form.financialYear = response.data['data'][0][0].financialYear;  
                    this.form.hasAdmissionLetter = response.data['data'][0][0].hasAdmissionLetter;
                    this.form.addressAddln1=response.data['data'][0][0].get_address.addressAddln1;
                    this.Nform.applicantColonyLeaderName = response.data['data'][0][0].applicantColonyLeaderName;
                     this.form.applicantLeprosyAffectedSelf=response.data['data'][0][0].applicantLeprosyAffectedSelf;
                        this.form.applicantLeprosyAffectedFather=response.data['data'][0][0].applicantLeprosyAffectedFather;
                        this.form.applicantLeprosyAffectedMother=response.data['data'][0][0].applicantLeprosyAffectedMother;
                        this.form.appIdShow = response.data['data'][0][0].appIdShow;
                        this.check();

                        // if(this.form.applicantLeprosyAffectedFather == true)
                        // {
                        //     this.str = this.str+this.form.applicantFatherName;
                        //     if(this.countLeprosy == 3)
                        //     {
                        //         this.spe1 = ','
                        //         this.spe2 = 'and'
                        //     }

                        //     if(this.countLeprosy == 2)
                        //     {
                        //         this.spe1 = ','
                        //         this.spe2 = 'and'
                        //     }
                            
                        // }else{
                        //     if(this.countLeprosy == 1)
                        //     {
                        //         this.spe1=''
                        //     }
                        //     if(this.countLeprosy == 2)
                        //     {
                        //         this.spe1='and'
                        //     }
                        //     if(this.countLeprosy == 0)
                        //     {
                        //         this.spe1 = ''
                        //     }
                        // }


                        
                    // if(this.form.applicantGender=response.data['data'][0][0].applicantGender == "Male")
                    // {
                    //     this.getData.genderType = "son";
                    // }else{
                    //     this.getData.genderType = "daughter";
                    // };
                    this.form.appStatus = response.data['data'][0][0].appStatus;
                    if(this.form.appStatus == 'Submit')
                    {
                        this.globalDisable = true;
                    };
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
        },

        check(){

            if(this.form.applicantLeprosyAffectedSelf == true)
            {
                this.countLeprosy = this.countLeprosy + 1;
            }

            if(this.form.applicantLeprosyAffectedFather == true)
            {
                this.countLeprosy = this.countLeprosy + 1;
            }

            if(this.form.applicantLeprosyAffectedMother == true)
            {
                this.countLeprosy = this.countLeprosy + 1;
            }

        }
  },
    created(){
     this.readApplicationForm() ;
     this.readAnnexureII();
     
    }
 }
 </script>