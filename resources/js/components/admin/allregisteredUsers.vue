<template>
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
                    <li class="nav-item shadow-lg"><router-link v-if="userId =='SU-000001'" class="nav-link" to="/admin/manage-internal-users"><i class="fas fa-wrench"></i><span>Manage Users</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="#"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link v-if="userId =='SU-000001'"  class="nav-link" to="/admin/manage-application-schedule"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li>
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
                                <div class="nav-item dropdown no-arrow dr-not"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="https://ui-avatars.com/api/?name=Admin"><span class="d-none d-lg-inline ml-2 text-white-600 small"><strong>{{firstname}} {{middlename}} {{lastname}}</strong></span></a>
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
                                    <h4 class="mb-0 p-head"> All Registered Users</h4>
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
                                                            <div class="col-xl-2 align-self-center">
                                                              <div class="form-group">
                                                                <input class="form-control" type="email"  v-model="filterForm.email" placeholder="-- email address --">
                                                              </div>
                                                          </div>

                                                                <div class="col-xl-2 align-self-center">
                                                                <div class="form-group">
                                                                 <input class="form-control" type="email"  v-model="filterForm.contactno" placeholder="--contact no --">
                                                                    </div>
                                                                </div>

                                                            <div class="col-xl-2 align-self-center">
                                                                <div class="form-group">
                                                               <select class="form-control " v-model="filterForm.gender">
                                                                   <option value="" >-- Gender --</option>
                                                                   <option value="Male">Male</option>
                                                                   <option value="Female">Female</option>
                                                                </select>
                                                               </div>
                                                               </div>


                                                            <div class="col-xl-1 align-self-center">
                                                                <div class="form-group">
                                                                <a class="btn btn-sm btn-mg" role="button" @click.prevent="filterData"><i class="fa fa-search"></i></a>
                                                                <button class="btn btn-mg font-sm" role="button" @click.prevent="resetForm"><i class="fa fa-refresh"></i></button>
                                                                </div>
                                                              </div>
                                                              </div>
                                                        <div class="form-row">
                                                            <!-- <div class="col-sm-4 col-xl-2 offset-xl-10 text-right align-self-center mt-1"><input class="form-control form-control-sm search form-control" type="text" placeholder="Search by typing here.." style="font-size: 12px;"></div> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive text-break table results mb-0 tmd">
                                        <table class="table table-sm">
                                            <thead class="cs-tbl-hd">
                                                <tr>
                                                <th>Name</th>
                                                <th>Email Address</th>
                                                <th>Contact Number</th>
                                                <th>Gender</th>
                                                <th class="text-center w-15x">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="h-38x">
                                            <tr v-for="(eachUsers,i) in getAllUsers" :key="i" class="font-sm text-black">
                                                
                                                
                                                <td class="font-sm mt-2">{{eachUsers.firstname}} {{(eachUsers.middlename)?" "+eachUsers.middlename:''}} {{eachUsers.lastname}}</td>
                                                <td class="font-sm mt-2">{{eachUsers.email}}</td>
                                                <td class="font-sm mt-2">{{eachUsers.contactno}}</td>
                                                <td class="font-sm mt-2">{{eachUsers.gender}}</td>
                                                <td class="text-center w-15x">
                                                    <span v-if="eachUsers.active == true" class="badge badge-pill badge-success font-sm mt-2">Verified</span>
                                                    <span v-else class="badge badge-pill badge-danger font-sm mt-2">Not Verified</span>
                                                 </td>

                                                <!-- <td class="text-center w-5x" v-if="eachUsers.intuId == 'SU-000001'" >
                                                    <div  class="dropdown no-arrow dr-all">
                                                        <button class="btn btn-sm dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button"><i class="fas fa-bars"></i></button>
                                                         <div  class="dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add-sys-user"><strong>Edit User</strong></a>
                                                           
                                                        </div>
                                                    </div>
                                                </td> -->

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
       
</template>
<script>
export default {
    data(){
        return{
            getAllUsers:{},
            getFilterUsers:{},
            userId     : document.querySelector("meta[name='userId']").getAttribute('content'),
            firstname  : document.querySelector("meta[name='firstname']").getAttribute('content'),
            middlename : document.querySelector("meta[name='middlename']").getAttribute('content'),
            lastname   : document.querySelector("meta[name='lastname']").getAttribute('content'),


            filterForm:
            {
                contactno:'',
                email:'',
                gender:'',
            },
          }
    },
    methods:{
 
                getData(){
                    axios.get('/admin/admin-api/get-all-registered-users')
                    .then(response => {
                        this.getAllUsers = response.data
                    });
                    axios.get('/admin/admin-api/get-all-registered-users/filter/data')
                        .then(response =>{ 
                              this.getFilterUsers = response.data
                    });
                },

                        logout(){
                            axios.get('/admin/logout').then(function(){
                                document.location.href = "/admin/login";
                            })
                        },

                        resetForm()
                        {
                            this.filterForm.contactno = '';
                            this.filterForm.email     = '';
                            this.filterForm.gender    = '';
                            this.getData();
                        },

                    filterData(){
                        axios.post('/admin/admin-api/all-registered-users/filter', this.filterForm)
                            .then(response => console.log(this.getAllUsers = response.data)).catch((error) =>{
                            this.errors = error.response.data.errors;
                        })
                        },
                    },

            created()
            {
            this.getData();
            
            }
        }
</script>