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
                    <li class="nav-item shadow-lg"><router-link v-if="userId2 =='	SU-000001'" class="nav-link" to="/admin/manage-internal-users"><i class="fas fa-wrench"></i><span>Manage Users</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="#"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="#"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li>
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
                                    <a v-if="userId2 == 'SU-000001'" class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Manage Users</a>
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
                                       <li class="nav-item" role="presentation" v-if="form.hasAdmissionLetter === 'NO' && form.applicationId != ''"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-annexure-1/'+form.applicationId"><strong>Annexure-I</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-applicant-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review/'+form.applicationId"><strong>View</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>View</strong></router-link></li>
                                    </ul>
                                    <div class="tab-content  bg-white">
                                       <div class="tab-pane active" role="tabpanel" id="tab-2">
                                             <div class="div-inner-filed">
                                                <div lang="" class="ub-reg-form">
                                                   <div class="form-row">
                                                         <div class="col-xl-12 align-self-center mb-2">
                                                            <p class="float-left color-mg font-md mb-1">I {{form.applicantNameF}} {{form.applicantNameM}} {{form.applicantNameL}} {{getData.genderType}} of {{form.applicantFatherName}}  residing in {{form.addressAddln1}}, want to pursue higher studies in academic Year {{form.financialYear}}. I will be taking the following Entrance Examination for admission into:&nbsp;<br></p>
                                                         </div>
                                                         <div class="col-xl-12">
                                                            <div class="com-bg-1">
                                                               <div class="form-row mb-1">
                                                                     <div class="col-xl-2">
                                                                        <div class="form-group mb-0 align-self-center">
                                                                           <div class="form-group mb-0">
                                                                                 <label  style="color:#702E2E" class="mb-0"><strong>Degree/Cerificate<span class="text-danger"><strong>*</strong></span></strong></label>
                                                                                 <select class="form-control form-control-sm" v-model="courseLevelValueId2" :disabled="globalDisable" @click="getHHDLSData($event)" >
                                                                                    <option value="" disabled>-- select --</option>
                                                                                    <option v-for="(ucl,index) in universityCourseLevel" :key="index" :value="ucl.id" selected>{{ucl.description}}</option>
                                                                                 </select>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="col-xl-2">
                                                                        <label  style="color:#702E2E" class="mb-0"><strong>Course Name<span class="text-danger"><strong>*</strong></span></strong></label>
                                                                        <a data-toggle="modal" href="#" class="font-sm"  data-target="#others-course-name" v-if="form.scholarshipType=='HHDLS'" @click="addName('CourseName')"><strong> </strong></a>
                                                                        <div class="form-group mb-0" v-if="form.scholarshipType=='HHDLS'">
                                                                           <select class="form-control form-control-sm" v-model="courseNameValueId2" :disabled="globalDisable" @click="clearRow">
                                                                                 <option value="" disabled>-- select --</option>
                                                                                 <option v-for="(ucn,index) in universityCourseName" :key="index" :value="ucn.id">{{ucn.value}}</option>
                                                                           </select>
                                                                        </div>
                                                                        <div class="form-group mb-0" v-if="form.scholarshipType=='Nursing'">
                                                                           <select class="form-control form-control-sm" v-model="courseNameValueId2" :disabled="globalDisable" @click="clearRow">
                                                                                 <option value="" disabled>-- select --</option>
                                                                                 <option v-for="(ucn,index) in universityCourseName" :key="index" :value="ucn.id">{{ucn.value}}</option>
                                                                           </select>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="table-responsive table results mb-0 donor-list tmd anex-i-table">
                                                                     <table class="table table-sm mb-2">
                                                                        <thead class="font-md">
                                                                           <tr class="color-mg font-sm">
                                                                                 <!-- <th>Course </th> -->
                                                                                 <th>Institute<span class="text-danger"><strong>*</strong></span> <a data-toggle="modal" href="#" data-target="#others-add-institute"></a></th>
                                                                                 <!-- <th>Address Line-1</th>
                                                                                 <th>Address Line-2</th> -->
                                                                                 <th class="w-20x">City/Town</th>
                                                                                 <th class="w-20x">District</th>
                                                                                 <th class="w-20x">State</th>
                                                                                 <!-- <th>Pin/ZIP Code</th> -->
                                                                                 <th class="text-center w-5x"><strong>Action</strong></th>
                                                                           </tr>
                                                                        </thead>
                                                                        <tbody class="h-25x">
                                                                           <tr v-for="(row, index) in rows" :key="index">
                                                                                 <!-- <td>
                                                                                    
                                                                                 </td> -->
                                                                                 <td>
                                                                                    <input type="hidden" v-model="row.id" :disabled="globalDisable"/>
                                                                                    <input type="hidden" v-model="row.courseLevelValueId" :disabled="globalDisable" />
                                                                                    <input type="hidden" v-model="row.courseNameValueId" :disabled="globalDisable" />
                                                                                    <div class="form-group mb-0">
                                                                                       <select class="form-control form-control-sm" @change="onChange($event,index)" v-model="row.insId" :disabled="globalDisable">
                                                                                             <option v-for="(i,index) in insData" :key="index" :value="i.id">{{i.instituteName}} - {{i.get_address.addressCity}}, {{i.get_address.addressState}}</option>
                                                                                       </select>
                                                                                    </div>
                                                                                 </td>
                                                                                 
                                                                                 <!-- <td>
                                                                                    <div class="form-group mb-0">
                                                                                       <input class="form-control form-control-sm" rows="1"  v-model="row.addressAddln1" disabled  />
                                                                                    </div>
                                                                                 </td>
                                                                                 <td>
                                                                                    <div class="form-group mb-0">
                                                                                       <input class="form-control form-control-sm" rows="1"  v-model="row.addressAddln2" disabled  />
                                                                                    </div>
                                                                                 </td> -->
                                                                                 <td class="w-20x">
                                                                                    <div class="form-group mb-0">
                                                                                       <input class="form-control form-control-sm" rows="1"  v-model="row.addressCity" disabled  />
                                                                                    </div>
                                                                                 </td>
                                                                                 <td class="w-20x">
                                                                                    <div class="form-group mb-0">
                                                                                       <input class="form-control form-control-sm" rows="1"  v-model="row.addressDistprov" disabled  />
                                                                                    </div>
                                                                                 </td>
                                                                                 <td class="w-20x">
                                                                                    <div class="form-group mb-0">
                                                                                       <input class="form-control form-control-sm" rows="1"  v-model="row.addressState" disabled  />
                                                                                    </div>
                                                                                 </td>
                                                                                 <!-- <td>
                                                                                    <div class="form-group mb-0">
                                                                                       <input class="form-control form-control-sm" type="number"  v-model="row.addressPinzip" disabled  />
                                                                                    </div>
                                                                                 </td> -->
                                                                                 <td class="text-center w-5x pt-2">
                                                                                    <a v-if="globalDisable == false" href="#" @click="deleteRow(index)"><i class="fa fa-trash color-mg font-l"></i></a>
                                                                                    <a class="act-link" style="color:#808080;" v-else>
                                                                                       <i class="fa fa-trash"></i>
                                                                                    </a>
                                                                                 </td>
                                                                              </tr>
                                                                        </tbody>
                                                                     </table>
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
            userId: '',
            userId2    : document.querySelector("meta[name='userId']").getAttribute('content'),
            firstname  : document.querySelector("meta[name='firstname']").getAttribute('content'),
            middlename : document.querySelector("meta[name='middlename']").getAttribute('content'),
            lastname   : document.querySelector("meta[name='lastname']").getAttribute('content'),
            // update: false,
            globalDisable: true,
            universityCourseLevel:{},
            universityCourseName: {},
            insData:{},
            insDataDetails:{
                address1: '',
            },
           
            courseLevelValueId2: '',
            courseNameValueId2: '',

            domainForm: {
                domainName : 'CourseName',
                dValue : '',
                dDesc : '',
            },
            insId: '',
            insForm: {
                
                insType:'',
                insName:'',
                insAddressAddln1:'',
                insAddressAddln2:'',
                insAddressCity:'',
                insAddressDistprov:'',
                insAddressState:'',
                insAddressPinzip:'',
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
                applicantGender:'',
                appIdShow:'',
            },

            getData :{
                genderType : '',
            },
            
            errors:[],
            rows: 
            [
              {  
                insId : '',
                courseLevelValueId: '',
                courseNameValueId: '',
                addressAddln1 : '',
                addressAddln2 :'',
                addressCity : '',
                addressDistprov : '',
                addressState : '',
                addressPinzip : '',
              },
            ],
          }
    },
    methods: {

         logout(){
         axios.get('/admin/logout').then(function(){
            document.location.href = "/admin/login";
         })
      },
        
        getannexurei() {
            let applicationId = window.location.pathname.split('/').reverse()[0];
            axios.get(`/admin/admin-api/get-annexure1/${applicationId}`)
            .then(response => {
                if (response.data['success']) {
                    this.rows = response.data['data'];
                    this.courseLevelValueId2 = response.data['data'][0].courseLevelValueId;
                    this.courseNameValueId2  = response.data['data'][0].courseNameValueId;
                    this.getHHDLSData2(this.courseLevelValueId2);
                    this.update = true;
                } else {
                    console.log(response.data['msg'])
                    this.update = false;
                }
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
                    this.form.applicantNameM=response.data['data'][0][0].applicantNameM;
                    this.form.applicantNameL=response.data['data'][0][0].applicantNameL;
                    this.form.applicantFatherName=response.data['data'][0][0].applicantFatherName;
                    this.form.applicantMotherName=response.data['data'][0][0].applicantMotherName;
                    this.form.financialYear = response.data['data'][0][0].financialYear;  
                    this.form.hasAdmissionLetter = response.data['data'][0][0].hasAdmissionLetter;
                    this.form.addressAddln1=response.data['data'][0][0].get_address.addressAddln1;
                    this.insForm.insType = response.data['data'][0][0].scholarshipType;
                    this.form.appIdShow = response.data['data'][0][0].appIdShow;
                    this.readDomainValues(this.form.scholarshipType);
                    this.readInsValue(this.form.scholarshipType);
                    if(this.form.applicantGender=response.data['data'][0][0].applicantGender == "Male")
                    {
                        this.getData.genderType = "son";
                    }else{
                        this.getData.genderType = "daughter";
                    };
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
       

        readDomainValues(type)
        {
            if(type == 'HHDLS')
            {
               axios.get('/admin/admin-api/domain/course-level/hhdls')
                  .then(response => {
                     this.universityCourseLevel= response.data;
                  });
            }else if(type == 'Nursing')
            {
               axios.get('/admin/admin-api/domain/course-name/nursing')
                  .then(response => {
                     this.universityCourseName = response.data;
                  }); 
                  axios.get('/admin/admin-api/domain/course-level/nursing')
                  .then(response => {
                     this.universityCourseLevel= response.data;
                  });
            }
        },

        readInsValue(type)
        {
            axios.get('/admin/admin-api/institute/get-data/'+type)
                .then(response => {
                    this.insData = response.data;
                });
        },

        addName(data)
        {
            this.domainForm.domainName = data;
          //  this.rows.courseLevelValueId = data;
        },

        getData(insId,index)
        {
            console.log(insId);
            axios.get('/admin/admin-api/api/institute/get-details/'+insId)
            .then(response => {
                if (response.data['success']) {
                    this.rows[index].addressAddln1 = response.data['data'][0].get_address.addressAddln1;
                    this.rows[index].addressAddln2 = response.data['data'][0].get_address.addressAddln2;
                    this.rows[index].addressCity = response.data['data'][0].get_address.addressCity;
                    this.rows[index].addressDistprov = response.data['data'][0].get_address.addressDistprov;
                    this.rows[index].addressState = response.data['data'][0].get_address.addressState;
                    this.rows[index].addressPinzip = response.data['data'][0].get_address.addressPinzip;
                } else {
                    console.log(response.data['msg'])
                }
            }).catch(error => this.errorMsg(error.response.status))
        },

        onChange(event,index)
        {
            this.insId = event.target.value;
            console.log(this.insId);
            axios.get('/admin/admin-api/institute/get-details/'+this.insId)
            .then(response => {
                if (response.data['success']) {
                    this.rows[index].addressAddln1 = response.data['data'][0].get_address.addressAddln1;
                    this.rows[index].addressAddln2 = response.data['data'][0].get_address.addressAddln2;
                    this.rows[index].addressCity = response.data['data'][0].get_address.addressCity;
                    this.rows[index].addressDistprov = response.data['data'][0].get_address.addressDistprov;
                    this.rows[index].addressState = response.data['data'][0].get_address.addressState;
                    this.rows[index].addressPinzip = response.data['data'][0].get_address.addressPinzip;
                } else {
                    console.log(response.data['msg'])
                }
            }).catch(error => this.errorMsg(error.response.status))
        },
        getHHDLSData(event)
        {
            this.clearRow();
            let id = event.target.value;
            axios.get('/admin/admin-api/domain/course-name/hhdls/'+id)
                .then(response => {
                    this.universityCourseName = response.data;
                });  
        },
        getHHDLSData2(id)
        {
            
            axios.get('/admin/admin-api/domain/course-name/hhdls/'+id)
                .then(response => {
                    this.universityCourseName = response.data;
                });  
        },
        clearRow()
        {
            let l =this.rows.length;
            for(let i=0;i<l;i++)
            {
                this.rows[i].courseLevelValueId = this.courseLevelValueId2;
                this.rows[i].courseNameValueId = this.courseNameValueId2;
            }
        }
    },
    created(){
        // this.readInsValue();
        this.readDomainValues();
        this.readApplicationForm();
        this.getannexurei();
    }
 }
 </script>