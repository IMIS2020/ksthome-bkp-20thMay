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
                            <div class="row mt-2">
                                <div class="col-xl-12 offset-xl-0 mb-2">
                                    <h4 class="mb-0 p-head">Maintain Application Schedule</h4>
                                </div>
                                <div class="col-xl-12 offset-xl-0">
                                    <div>
                                        <form @submit.prevent="saveForm">
                                            <div class="com-bg">
                                                <div class="form-row">
                                                    <div class="col-xl-12 offset-xl-0">
                                                        <p class="text-center my-2 color-mg"><strong>Add New HHDLSS Schedule Details</strong></p>
                                                    </div>
                                                </div>
                                                <div style="background-color: #fff;padding: 10px;border-radius: 5px;">
                                                    <div class="form-row">
                                                        <div class="col-xl-3">
                                                            <label>Session</label>
                                                            <div class="form-group">
                                                            <input class="form-control form-control-sm" type="text" disabled="" readonly="" v-model="form.financialYear" >
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <label>Start Date</label>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-sm" type="date" v-model="form.startDate" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <label>Last Date</label>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-sm" type="date" v-model="form.lastDate" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <label>Scholarship Type</label>
                                                            <div class="form-group">
                                                                <select class="form-control form-control-sm" v-model="form.scholarshipType" required>
                                                                    <option value="" disabled>-- Select one--</option>
                                                                    <option value="Nursing Scholarship">Nursing Scholarship</option>
                                                                    <option value="HHDLSS Scholarship">HHDLSS Scholarship</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label>Application No. Prefix</label>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-sm" type="text" v-model="form.applicationNoPrefixFormat" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label>Contact person's Email ID</label>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-sm" type="email" v-model="form.contactPersonEmailId">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label>Contact person's Mobile No.</label>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-sm" type="text" v-model="form.contactPersonContactNo" required maxlength="10">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="com-bg pt-2 mt-2">
                                                <div class="form-row">
                                                    <div class="col-xl-2 offset-xl-4 pr-1">
                                                        <button class="btn btn-block btn-sm btn-custom btn-smd" type="submit" ><strong><em>Save</em></strong></button>
                                                    </div>
                                                    <div class="col-xl-2 offset-xl-0 pr-1">
                                                        <router-link class="btn btn-block btn-sm btn-cancel btn-smd" role="button" to="/admin/manage-application-schedule"><strong><em>Cancel</em></strong></router-link>
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
    
</body>

</template>

<script>
export default {
    data(){
        return{
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            form:
            {
            applicationScheduleId:'',
            financialYear:new Date().getFullYear() +"-"+ (new Date().getFullYear()+1).toString().substr(-2),
            scholarshipType:'',
            startDate:'',
            lastDate:'',
            applicationNoPrefixFormat:'',
            contactPersonEmailId:'',
            contactPersonContactNo:'',
            },
            errors:[],
        }
    },
    methods:{
      logout(){
         axios.get('/admin/logout').then(function(){
            document.location.href = "/admin/login";
         })
      },

     saveForm(){
            if(this.form.applicationScheduleId)
            {
                axios.post('/admin/admin-api/edit-HHDLSS-application-schedule/'+this.form.applicationScheduleId,this.form)
                .then(() =>{this.$fire({
                  position:'top',
                  icon: 'success',
                  title: 'Application Schedule Updated',
                  showConfirmButton: false,
                  timer: 3000
               }).then(() =>{
                  this.$router.push({ 
                     name:"manage-application-schedule",
               }); 
            })
         }).catch((error) =>{
                     if(error.response.status == 422 || error.response.status == 405 || error.response.status == 500 )
                     {   this.$fire({
                           position: 'top',
                           icon: 'error',
                           title: "Something went wrong !",
                           showConfirmButton: false,
                           timer: 3000
                        })
                     }
                })
              }
            else{
                axios.post('/admin/admin-api/add-HHDLSS-application-schedule',this.form)
                .then(() =>{this.$fire({
                  position:'top',
                  icon: 'success',
                  title: 'Application Schedule Created',
                  showConfirmButton: false,
                  timer: 3000
               }).then(() =>{
                  this.$router.push({ 
                     name:"manage-application-schedule",
               }); 
            })
            }).catch((error) =>{
                     if(error.response.status == 422 || error.response.status == 405 || error.response.status == 500 )
                     {   this.$fire({
                           position: 'top',
                           icon: 'error',
                           title: "Something went wrong !",
                           showConfirmButton: false,
                           timer: 3000
                        })
                     }
                  })
            }
        },

        async readSchedule(){
           const  applicationScheduleId = window.location.pathname.split('/').reverse()[0];
            axios.get('/admin/admin-api/get-application-schedule/'+applicationScheduleId)
                .then(response => this.form = {
                    applicationScheduleId : applicationScheduleId,
                    financialYear:          response.data[0].financialYear,
                    scholarshipType:        response.data[0].scholarshipType,
                    startDate:              response.data[0].startDate,
                    lastDate:               response.data[0].lastDate,
                    applicationNoPrefixFormat:response.data[0].applicationNoPrefixFormat,
                    contactPersonEmailId:     response.data[0].contactPersonEmailId, 
                    contactPersonContactNo:   response.data[0].contactPersonContactNo,
                });
        //     axios.get('/admin-api/'+currentUrl)
        //         .then(response => console.log(response.data[0].applicationScheduleId));
        //    console.log(currentUrl);
        },
    },

    created()
    {
    this.readSchedule();
    }
}
</script>