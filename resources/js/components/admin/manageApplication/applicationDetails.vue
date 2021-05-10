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
                        <!-- <div class="nav-item dropdown shadow-lg nav-dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-money-bill-wave"></i><span>Dropdown Menu</span></a>
                            <div class="dropdown-menu dr-cs"><a class="dropdown-item" href="#"><i class="fas fa-money-bill-wave"></i>&nbsp;Dropdown Menu</a></div>
                        </div> -->
                    </li>
                    <!-- <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-domains"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-application-schedule"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li> -->
                    <li class="nav-item shadow-lg"><router-link v-if="userId =='SU-000001'" class="nav-link" to="/admin/manage-internal-users"><i class="fas fa-wrench"></i><span>Manage Users</span></router-link></li>
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
                                <div class="nav-item dropdown no-arrow dr-not">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="https://ui-avatars.com/api/?name=Admin"><span class="d-none d-lg-inline ml-2 text-white-600 small"><strong>{{firstname}}{{middlename}}{{lastname}}</strong></span></a>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-xl-12 offset-xl-0 px-0">
                            <div class="row my-2">
                                <div class="col-xl-12 offset-xl-0">
                                    <h4 class="mb-0 p-head">Manage Scholarship Applications</h4>
                                </div>
                            </div>
                            <div class="com-bg">
                                <div>
                                    <div class="form-group pull-right col-xl-12 mb-2 mt-2">
                                        <div class="row">
                                            <div class="col-xl-12" style="padding: 0px 5px;">
                                                <form>
                                                    <div class="form-group mb-0">
                                                        <div class="form-row">
                                                        <div class="col-xl-2">
                                                              <div class="form-group">
                                                                    <input class="form-control" type="text" v-model="form.firstname" placeholder="-- First Name --">
                                                                </div>
                                                                <select class="form-control mb-2" v-model="form.session">
                                                                    <option value="">-- Session --</option>
                                                                        <option v-for="filterData in getFilterData" :key="filterData.id" 
                                                                            :value="filterData.sessionName" class="color-mg">
                                                                            {{filterData.sessionName}}
                                                                        </option>
                                                                </select>
                                                            </div>

                                                        <div class="col-xl-2">
                                                            <div class="form-group">
                                                                <input class="form-control" v-model="form.lastname" type="text" placeholder="-- Last Name --">
                                                              </div>
                                                                <select class="form-control mb-2 " v-model="form.scholarshipType">
                                                                    <option value="">-- Scholarship Type --</option>
                                                                    <option value="Nursing">Nursing Scholarship</option>
                                                                    <option value="HHDLS">HHDLS Scholarship</option>
                                                                </select>
                                                            </div>

                                                         <div class="col-xl-2">
                                                            <div class="form-group">
                                                                <input class="form-control" v-model="form.email" type="email" placeholder="-- Email Address --">
                                                              </div>

                                                             <div class="form-group">
                                                                <select class="form-control mb-2 " v-model="form.status">
                                                                    <option value="">-- Status --</option>
                                                                    <option value="Saved">Saved</option>
                                                                    <option value="Submit">Submitted</option>
                                                                    <option value="Returned">Returned</option>
                                                                </select>
                                                              </div>
                                                            </div>

                                                            <div class="col-xl-2">
                                                             <div class="form-group">
                                                                <input class="form-control" type="text" v-model="form.contactno" placeholder="-- Contact No --">
                                                              </div>

                                                               <div class="form-group">
                                                                    <select class="form-control mb-2 " v-model="form.applicationType">
                                                                        <option value="">-- Application Type --</option>
                                                                        <option value="Online">Online</option>
                                                                        <option value="Offline">Offline</option>
                                                                </select>
                                                                </div>
                                                            </div>

                                                             <div class="col-xl-2">
                                                                 <div class="form-group">
                                                                        <select class="form-control mb-2 " v-model="form.gender">
                                                                            <option value="">-- Gender --</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                    </select>
                                                                </div>
                                                               
                                                                 <select class="form-control mb-2" v-model="form.states">
                                                                    <option value="">-- States --</option>
                                                                    <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                                                    <option value="ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option>
                                                                    <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                                                                    <option value="ASSAM">ASSAM</option>
                                                                    <option value="BIHAR">BIHAR</option>
                                                                    <option value="CHANDIGARH">CHANDIGARH</option>
                                                                    <option value="CHHATTISGARH">CHHATTISGARH</option>
                                                                    <option value="DADAR AND NAGAR HAVELI">DADAR AND NAGAR HAVELI</option>
                                                                    <option value="DAMAN AND DIU">DAMAN AND DIU</option>
                                                                    <option value="DELHI">DELHI</option>
                                                                    <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                                                                    <option value="PUDUCHERRY">PUDUCHERRY</option>
                                                                    <option value="GOA">GOA</option>
                                                                    <option value="GUJARAT">GUJARAT</option>
                                                                    <option value="HARYANA">HARYANA</option>
                                                                    <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                                                                    <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                                                                    <option value="JHARKHAND">JHARKHAND</option>
                                                                    <option value="KARNATAKA">KARNATAKA</option>
                                                                    <option value="KERALA">KERALA</option>
                                                                    <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                                                    <option value="MAHARASHTRA">MAHARASHTRA</option>
                                                                    <option value="MANIPUR">MANIPUR</option>
                                                                    <option value="MEGHALAYA">MEGHALAYA</option>
                                                                    <option value="MIZORAM">MIZORAM</option>
                                                                    <option value="NAGALAND">NAGALAND</option>
                                                                    <option value="ODISHA">ODISHA</option>
                                                                    <option value="PUNJAB">PUNJAB</option>
                                                                    <option value="RAJASTHAN">RAJASTHAN</option>
                                                                    <option value="SIKKIM">SIKKIM</option>
                                                                    <option value="TAMIL NADU">TAMIL NADU</option>
                                                                    <option value="TELANGANA">TELANGANA</option>
                                                                    <option value="TRIPURA">TRIPURA</option>
                                                                    <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                                                    <option value="UTTARAKHAND">UTTARAKHAND</option>
                                                                    <option value="WEST BENGAL">WEST BENGAL</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-xl-1 align-self-center">
                                                                <button class="btn btn-sm btn-mg " role="button" @click.prevent="saveForm"><i class="fa fa-search"></i></button>
                                                                <button class="btn btn-mg font-sm" role="button" @click.prevent="resetForm"><i class="fa fa-refresh"></i></button>
                                                                </div>
                                                            <!-- <div class="col-xl-3 offset-xl-0 align-self-center pr-0"><input class="form-control form-control-sm" type="text" placeholder="Search by typing here..."></div> -->
                                                            <!-- <div class="col-xl-4 offset-xl-8 align-self-center and-col mt-2">
                                                                <div class="form-row">
                                                                    <div class="col-sm-4 col-xl-3 offset-xl-0 align-self-center">
                                                                        <p class="text-right mb-0 mt-0 font-sm color-mg"><strong>Add Offline</strong></p>
                                                                    </div>
                                                                    <div class="col-sm-4 col-xl-6 offset-xl-0 align-self-center"><select class="form-control form-control-sm font-sm color-mg">
                                                                            <option value="12" selected="">-- Select --</option>
                                                                            <option value="13">Nursing Scholarship</option>
                                                                            <option value="14">HHDL Scholarship</option>
                                                                        </select></div>
                                                                    <div class="col-sm-4 col-xl-3 offset-xl-0 text-right align-self-center">
                                                                        <p class="text-left mb-0 font-sm"><strong>&nbsp;</strong><a href="#"><strong>Click here</strong></a></p>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-break table results mb-0 donor-list tmd">
                                        <table class="table table-sm">
                                            <thead class="cs-tbl-hd">
                                                <tr>
                                                    <th class="w-20x">Application Details</th>
                                                    <th>Applicant's Details</th>
                                                    <th class="w-25x">Contact Details</th>
                                                    <th>Applicant's Address</th>
                                                    <th class="w-15x">Submission</th>
                                                    <th class="text-center w-10x">Status</th>
                                                    <th class="text-center w-5x">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody style="color:#000;" class="h-35x font-sm">
                                                <tr  v-for="(eachData,i) in getAllData" :key="i">
                                                    <td class="w-20x">App No: {{eachData.appIdShow}}<br>Session: {{eachData.financialYear}}<br>Type: {{eachData.scholarshipType}}</td>
                                                    <td>Name : {{eachData.applicantNameF}} {{(eachData.applicantNameM)?" "+eachData.applicantNameM:''}} {{eachData.applicantNameL}} ,<br>Gender: {{eachData.applicantGender}},<br> Date of Birth : {{eachData.applicantDOB.split('-').reverse().join('/')}} <br>Age: <span v-if="calAge(eachData.applicantDOB) !== null">({{calAge(eachData.applicantDOB).years}} Years {{calAge(eachData.applicantDOB).months}} Months &amp; {{calAge(eachData.applicantDOB).days}} Days)</span></td>
                                                    <td class="w-25x">Applicant phone No :{{eachData.applicantContactNoSelf}}, <br> Alternate no : {{eachData.applicantContactNoGuardian}}<br>Email : {{eachData.applicantEmailId}}</td>
                                                    <td>{{eachData.get_address.addressAddln1}},{{(eachData.get_address.addressAddln2)?" "+eachData.get_address.addressAddln2:''}} ,City: {{(eachData.get_address.addressCity)?" "+eachData.get_address.addressCity:''}} <br>Dist : {{(eachData.get_address.addressDistprov)?" "+eachData.get_address.addressDistprov:''}}<br>{{eachData.get_address.addressState}} - {{eachData.get_address.addressPinzip}}</td>
                                                    <td class="w-15x">Date: {{(eachData.dateLastSubmitted)?" "+eachData.dateLastSubmitted.split('T')[0].split('-').reverse().join('/'):''}}<br>Type: {{eachData.applicationType}}</td>
                                                    <td class="text-center w-10x">
                                                        <span class="badge badge-pill badge-warning text-black font-sm mt-2" v-if ="eachData.appStatus == 'Saved' ">Saved</span> 
                                                        <span class="badge badge-pill badge-success text-black font-sm mt-2" v-if ="eachData.appStatus == 'Submit' ">Submitted</span>
                                                        <span style="background-color:#d48eae;" class="badge badge-pill  text-black font-sm mt-2" v-if ="eachData.appStatus == 'Returned' ">Returned</span>
                                                        </td>
                                                    <td class="text-center w-5x">
                                                        <div class="dropdown no-arrow dr-all">
                                                            <a class="btn btn-sm" aria-expanded="false" data-toggle="dropdown" role="button" href="#"><i class="fas fa-bars color-mg"></i></a>
                                                            <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                                                <!-- <a class="dropdown-item" href="#"><strong>Review Application</strong></a> -->
                                                                    <router-link class="dropdown-item" :to="'/admin/review-application-form/'+eachData.schApplicationId"><strong>View Application</strong></router-link>
                                                                     <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#view-application-comments"><strong>View Comments</strong></a> -->
                                                                      <a href="#" v-if="eachData.appStatus == 'Submit'" class="dropdown-item" @click="toggleStatus(eachData.schApplicationId)"><strong>Make status ' Returned '</strong></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                   </div>
                                  <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</template>

<script>
export default {
    data(){
        return{
            userId     : document.querySelector("meta[name='userId']").getAttribute('content'),
            firstname  : document.querySelector("meta[name='firstname']").getAttribute('content'),
            middlename : document.querySelector("meta[name='middlename']").getAttribute('content'),
            lastname   : document.querySelector("meta[name='lastname']").getAttribute('content'),
            getAllData:{}, 
            getFilterData:{},
            
            form:{
                scholarshipType:'',
                session:'',
                email:'',
                contactno:'',
                firstname:'',
                lastname:'',
                gender:'',
                states:'',
                applicationType:'',
                status:'',
            },
          }
    },

    methods:{
        calAge:  function (dob) {
            if (dob === null || dob === '') { return null; }
            dob = new Date(dob);
            const dobYear = dob.getYear();
            const dobMonth = dob.getMonth();
            const dobDate = dob.getDate();
            const now = new Date();
            const currentYear = now.getYear();  
            const currentMonth = now.getMonth();  
            const currentDate = now.getDate();
            let yearAge = currentYear - dobYear; 
            let monthAge = (currentMonth >= dobMonth)?(currentMonth - dobMonth):((yearAge--),(12 + currentMonth - dobMonth));
            let dateAge = (currentDate >= dobDate)?(currentDate - dobDate):((monthAge--),(31 + currentDate - dobDate),(monthAge < 0)?((monthAge = 11),(yearAge--)):(''));
            
            return { years: yearAge, months: monthAge, days: dateAge };
        },//end of calc age

        getData(){
             axios.get('/admin/admin-api/get-application-details')
             .then(response => {
                   this.getAllData = response.data
             });
             axios.get('/admin/admin-api/get-application-details/filter/data')
                  .then(response => this.getFilterData = response.data)
            },

               saveForm()
                {
                    axios.post('/admin/admin-api/get-application-details/filter-data',this.form)
                        .then(response => console.log(this.getAllData = response.data)).catch((error) =>{
                        this.errors = error.response.data.errors;
                    })
                },

                    resetForm()
                    {
                        this.form.scholarshipType     =  '',
                        this.form.session             =  '',
                        this.form.email               =  '',
                        this.form.contactno           =  '',
                        this.form.firstname           =  '',
                        this.form.lastname            =  '',
                        this.form.gender              =  '',
                        this.form.states              =  '',
                        this.form.applicationType     =  '',
                        this.form.status              =  '',
                        this.getData();
                    },

                    toggleStatus(applicationId){
                        axios.post('/admin/admin-api/make-status-saved/'+applicationId)
                            .then( this.$fire({
                                position: 'top',
                                icon: 'success',
                                title: 'Application status changed',
                                showConfirmButton: false,
                            timer: 3000
                        }))
                          this.getData();
                    },

            logout()
            {
                axios.get('/admin/logout').then(function(){
                    document.location.href = "/admin/login";
                })
            },
         },
    created()
         {
           this.getData();
         }
}
</script>