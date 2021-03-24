<template>
    <body id="page-top" class="grey-bg">
        <div id="wrapper" style="height: 100vh;">
            <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-custom p-0">
                <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand" href="#">
                        <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-building"></i></div>
                        <div class="sidebar-brand-text mx-3"><span>i-mis</span></div>
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
                        <div class="container-fluid"><a class="navbar-brand text-uppercase text-white" href="#"><strong>I-MIS APPlication</strong></a><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
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
                                <li class="nav-item dropdown no-arrow mx-1">
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
                                </li>
                                <li class="nav-item dropdown no-arrow mx-1">
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
                                </li>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-xl-12 offset-xl-0 px-0">
                            <div class="row my-2">
                                <div class="col-xl-12 offset-xl-0">
                                    <h4 class="mb-0 p-head">Review <span>HHDLSS</span> Scholarship Application <span>{{getdata.financialYear}}</span> (<span>{{getdata.applicationId}}</span>)</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div>
                                       <ul role="tablist" class="nav nav-tabs font-sm">
                                          <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-application-form/'+getdata.applicationId"><strong>Application Form</strong></router-link></li>
                                          <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-annexure-1/'+getdata.applicationId"><strong>Annexure-I</strong></router-link></li>
                                          <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                          <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-annexure-2/'+getdata.applicationId"><strong>Annexure-II</strong></router-link></li>
                                          <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-upload-documents/'+getdata.applicationId"><strong>Upload Documents</strong></router-link></li>
                                          <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-review-submit/'+getdata.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                       </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active adm-tab" role="tabpanel" id="tab-2">
                                                <div class="div-inner-filed py-1 px-2">
                                                    <form class="ub-reg-form">
                                                        <div class="form-row">
                                                            <div class="col-xl-12 align-self-center mb-2">
                                                                <p class="float-left color-mg font-md mb-1">I Rahul Kr. Pandit son/daughter of Manoj Kr. Pandit residing in Khatir Bajar colony, want to pursue higher studies in academic Year 2020-2021. I will be taking the following Entrance Examination for admission into:&nbsp;<br></p>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="com-bg-1">
                                                                    <div class="form-row mb-1">
                                                                        <div class="col-xl-2 offset-xl-8 text-right align-self-center">
                                                                            <p class="mb-0 color-mg font-md">Course Level:</p>
                                                                        </div>
                                                                        <div class="col-xl-2 offset-xl-0">
                                                                            <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                    <option value="">Course Level</option>
                                                                                    <option value="12" selected="">Bachelors</option>
                                                                                    <option value="13">Masters</option>
                                                                                </select></div>
                                                                        </div>
                                                                        <div class="col-md-2 col-xl-1 offset-md-3 offset-xl-0 d-none align-self-center"><button class="btn btn-block btn-sm font-xs btn-mg add-anex-i-row" type="button"><i class="fa fa-plus"></i><strong>&nbsp;Add row</strong></button></div>
                                                                    </div>
                                                                    <div class="table-responsive table results mb-0 donor-list tmd anex-i-table">
                                                                        <table class="table table-sm mb-2">
                                                                            <thead class="font-md">
                                                                                <tr class="color-mg font-sm">
                                                                                    <th>Institute Name</th>
                                                                                    <th>Course Name</th>
                                                                                    <th>Address Line-1</th>
                                                                                    <th>Address Line-2</th>
                                                                                    <th>District</th>
                                                                                    <th>City</th>
                                                                                    <th>Pin/ZIP Code</th>
                                                                                    <th>State</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="h-25x">
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                <option value="" selected="">State</option>
                                                                                                <option value="12">West Bengal</option>
                                                                                                <option value="13">Uttar Pradesh</option>
                                                                                                <option value="14">Bihar</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                <option value="" selected="">State</option>
                                                                                                <option value="12">West Bengal</option>
                                                                                                <option value="13">Uttar Pradesh</option>
                                                                                                <option value="14">Bihar</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                <option value="" selected="">State</option>
                                                                                                <option value="12">West Bengal</option>
                                                                                                <option value="13">Uttar Pradesh</option>
                                                                                                <option value="14">Bihar</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                <option value="" selected="">State</option>
                                                                                                <option value="12">West Bengal</option>
                                                                                                <option value="13">Uttar Pradesh</option>
                                                                                                <option value="14">Bihar</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" disabled="" readonly=""></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                <option value="" selected="">State</option>
                                                                                                <option value="12">West Bengal</option>
                                                                                                <option value="13">Uttar Pradesh</option>
                                                                                                <option value="14">Bihar</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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
      <div>
    </div>
</body>
</template>


<script>
export default{
    data(){
        return{
           form:
            {
             courseLevel:'',
            },
            getdata:{
                applicantNameF:'',
                applicantNameM:'',
                applicantNameL:'',
                applicantFatherName:'',
                applicantMotherName:'',
                applicantColonyName:'',
                hasAdmissionLetter:'',
                applicationId:'',
                financialYear:'',
                insCourse:'',
            },
            errors:[],
             rows: 
            [
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              },
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              },
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              },
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              },
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              }
            ],
        }
    },
    methods: {
        logout(){
         axios.get('/admin/logout').then(function(){
            document.location.href = "/admin/login";
         })
       },
        addNewData()
         {
         this.rows.push({
            instituteName:'',
            courseName:'',
            addressAddln1:'',
            addressAddln2:'',
            addressCity:'',
            addressDistprov:'',
            addressState:'',
            addressPinzip:'',
      })
     },
     deleteRow(index){
       this.rows.splice(index, 1);
   },
        
        errorMsg (status) {
            switch (status) {
                case 422:{
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Something went wrong !",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    break;
                }
                case 405:{
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    break;
                }
                case 500:{
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    break;
                }
                default: {
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    break;
                }
            }
        },
        
        getdataHHDLSS() 
        {
            const currentUrl = window.location.pathname.split('/').reverse()[0];
            axios.get('/admin/admin-api/review-HHDLSS-application-form/'+currentUrl)
                .then(response => {
                if (response.data['success']) {
                    const data = response.data['data']
                    this.getdata.applicantNameF      = data.applicantNameF;
                    this.getdata.applicantNameM      = data.applicantNameM;
                    this.getdata.applicantNameL      = data.applicantNameL;
                    this.getdata.applicantFatherName = data.applicantFatherName;
                    this.getdata.applicantMotherName = data.applicantMotherName;
                    this.getdata.addressAddln1       = data.addressAddln1;
                    this.getdata.hasAdmissionLetter  = data.hasAdmissionLetter;
                    this.getdata.applicationId       = data.applicationId;
                    this.getdata.financialYear       = data.financialYear;
                }
            })
        }
    },
    
    created ()
      {
        this.getdataHHDLSS() ;
      }
 }
</script>