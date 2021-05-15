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
                    <li class="nav-item shadow-lg"><router-link v-if="userId =='SU-000001'" class="nav-link" to="/admin/manage-internal-users"><i class="fas fa-wrench"></i><span>Manage Users</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link v-if="userId =='SU-000001'" class="nav-link" to="#"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                   <li class="nav-item shadow-lg"><router-link  v-if="userId =='SU-000001'" class="nav-link" to="/admin/manage-application-schedule"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-application-details"><i class="fas fa-sticky-note"></i><span>Manage Applications</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/all-registered-users"><i class="fas fa-user"></i><span>All Registered Users</span></router-link></li>
                    
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
                                    <h4 class="mb-0 p-head">Manage Profile</h4>
                                </div>
                            </div>
                            <div class="com-bg pt-2">
                                <div class="row">
                                    <!-- <div class="col-xl-4 offset-xl-0">
                                        <div class="card shadow">
                                            <div class="card-header py-2" style="background-color: #702e2e !important;">
                                                <h6 class="text-white m-0 font-md pt-2 pb-2">Profile Picture </h6>
                                            </div>
                                            <div class="card-body">
                                                <img style="margin-left: auto; margin-right:auto; display:block;" width="80px" height="90px"  src='https://avataaars.io/?avatarStyle=Transparent&topType=NoHair&accessoriesType=Blank&facialHairType=Blank&clotheType=BlazerSweater&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'>
                                            <br>
                                                <div class="form-group mb-2 mt-3">
                                                    <form>
                                                    <div class="form-row">
                                                        <input style = "margin-left:30%;" class="form-control-file font-xs mb-3 pt-3" type="file"  accept="image/*" v-if="uploadReady" ref="file" v-on:change="selectFile()" required> 
                                                         <button style = "margin-left:30%;" class="btn btn-md btn-mg font-sm" type="button" @click.prevent="uploadProfilePhoto"><strong>Upload Profile Photo</strong></button>
                                                      </div>
                                                    </form>
                                                 </div>
                                             </div>
                                         </div>
                                    </div> -->

                                    <div class="col-xl-12 offset-xl-0 pl-1">
                                        <div class="card shadow pb-1">
                                            <div class="card-header py-2" style="background-color: #702e2e !important;">
                                                <h6 class="text-white m-0 font-md pt-2 pb-2">Update Profile Details for :  &nbsp;<span>{{firstname}} {{lastname}} ({{userId}})</span><br></h6>
                                            </div>
                                            <div class="card-body pb-3">
                                                <form>
                                                    <div class="form-row">modal
                                                        <div class="col-xl-4">
                                                            <div class="form-group mb-2"><label>First Name</label><input class="form-control " v-model="form.firstname" type="text"></div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group mb-2"><label>Middle Name</label><input class="form-control " v-model="form.middlename" type="text"></div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group mb-2"><label>Last Name</label><input class="form-control " v-model="form.lastname"  type="text"></div>
                                                        </div>
                                                        <div class="col-xl-4" v-if="userId=='SU-000001'">
                                                            <div class="form-group mb-2"><label>Contact No.</label><input class="form-control " v-model="form.contactNo"  type="text"></div>
                                                        </div>

                                                        <div class="col-xl-4" v-else>
                                                            <div class="form-group mb-2"><label>Contact No.</label><input class="form-control " v-model="form.contactNo"  type="text" readonly></div>
                                                        </div>

                                                        <div class="col-xl-4" v-if="userId=='SU-000001'">
                                                            <div class="form-group mb-2"><label>Email ID</label><input class="form-control " v-model="form.email" type="email"></div>
                                                        </div>

                                                        <div class="col-xl-4" v-else>
                                                            <div class="form-group mb-2"><label>Email ID</label><input class="form-control " v-model="form.email" type="email" readonly></div>
                                                        </div>

                                                        <div class="col-xl-4">
                                                            <div class="form-group mb-2">
                                                                <label>Gender</label>
                                                                <select class="form-control" v-model="form.gender">
                                                                    <option value selected>Gender</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                         <div class="col-xl-2 pull-left pt-4">
                                                            <a href="#" class="btn btn-block btn-sm btn-mg" data-toggle="modal" data-target="#update-password"><strong>Update Password</strong></a>
                                                        </div>  
                       
                                                        <div class="col-xl-2 ml-auto pt-4">
                                                          <button class="btn btn-block btn-sm btn-mg" type="button" @click.prevent="updateProfile"><strong>Save</strong></button>
                                                        </div>

                                                        

                                                        <div class="col-xl-2 text-center align-self-center pt-4 ">
                                                            <button class="btn btn-secondary btn-block btn-sm" @click.prevent="goBack"><strong>Cancel</strong></button>
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

<div class="modal fade update-password" tabindex="-1" id="update-password" role="dialog" aria-labelledby="update-password" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div  class="modal-header pb-3 pt-3 text-white" style="background-color: #702e2e !important;">
        <h6 class="modal-title font-md"><strong>Update Password ({{userId}})</strong></h6><button style="color:#fff;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
        <form @submit.prevent="updatePassword">
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-xl-4">
                        <div class="form-group mb-2">
                            <label>Old password</label>
                            <div class="input-group">
                            <input class="form-control" v-bind:type="[showPassword1 ? 'text' : 'password']"  v-model="updateForm.currentPassword" required>
                            <div class="input-group-append">
                                <span style="background-color:#702e2e;" class="input-group-text text-white form-control" @click="showPassword1 = !showPassword1">
                                        <i class="fa" :class="[showPassword1 ? 'fa-eye' : 'fa-eye-slash']" aria-hidden="true"></i>
                                </span>
                            </div>
                         </div>
                        </div>

                    </div>
                    
                    <div class="col-xl-4">
                        <div class="form-group mb-2">
                            <label>New password</label>
                                  <div class="input-group">
                            <input class="form-control" v-bind:type="[showPassword2 ? 'text' : 'password']" minlength="8"  v-model="updateForm.newPassword" required>
                            <div class="input-group-append">
                                <span style="background-color:#702e2e;" class="input-group-text text-white form-control" @click="showPassword2 = !showPassword2">
                                        <i class="fa" :class="[showPassword2 ? 'fa-eye' : 'fa-eye-slash']" aria-hidden="true"></i>
                                </span>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="form-group mb-2">
                        <label>Confirm password</label>
                          <div class="input-group">
                            <input class="form-control" minlength="8" v-bind:type="[showPassword3 ? 'text' : 'password']" v-model="updateForm.newConfirmPassword"  required>
                             <div class="input-group-append">
                                <span style="background-color:#702e2e;" class="input-group-text text-white form-control" @click="showPassword3 = !showPassword3">
                                        <i class="fa" :class="[showPassword3 ? 'fa-eye' : 'fa-eye-slash']" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        </div>
                  </div>     
                </div>          
              </div>
            <div class="modal-footer py-1">
                <button class="btn btn-md btn-mg" type="submit" ><strong>Update</strong></button><button class="btn btn-md btn-cancel" @click="clearData" type="button" data-dismiss="modal"><strong>Close</strong></button>
            </div>
        </form>
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
            showPassword1: false,
            showPassword2: false,
            showPassword3: false,
            // uploadReady: true,
            userId     : document.querySelector("meta[name='userId']").getAttribute('content'),
            firstname  : document.querySelector("meta[name='firstname']").getAttribute('content'),
            middlename : document.querySelector("meta[name='middlename']").getAttribute('content'),
            lastname   : document.querySelector("meta[name='lastname']").getAttribute('content'),

            profileForm:
            {
              profilePhoto:'',
            },
            form:
            {
                firstname:'',
                middlename:'',
                lastname:'',
                contactNo:'',
                email:'',
                gender:'',
            },
            updateForm:
            {
                currentPassword:'',
                newPassword:'',
                newConfirmPassword:'',
            },
          }
    },
    methods:{

            // uploadProfilePhoto()
            // {
            //     axios.post('/admin/admin-api/upload-profile-picture',this.profileForm).
            //      then(()=>{
            //         this.$fire({
            //         position:'top',
            //         icon: 'success',
            //         title: 'Profile Picture Uploaded',
            //         showConfirmButton: false,
            //         timer: 4000
            //         })//swal-fire end
            //          }).then(() => {
            //         this.reset(); 
            //         }).catch(() => {
            //             this.$fire({
            //                 position:'top',
            //                 icon: 'error',
            //                 title: 'Something went wrong!',
            //                 showConfirmButton: false,
            //                 timer: 4000
            //             })
            //             this.reset();
            //         })
            //       },

            
            goBack() {
            window.history.go(-1);
            },
           

            updateProfile()
            {
                axios.post('/admin/admin-api/edit-profile/'+this.userId,this.form)
                .then(() =>{this.$fire({
                  position:'top',
                  icon: 'success',
                  title: 'Profile Updated',
                  showConfirmButton: false,
                  timer: 4000
               });
               this.getData();
            }).catch((error) =>{
                     if( error.response.status == 500 )
                     {   this.$fire({
                           position: 'top',
                           icon: 'error',
                           title: "Email address or contact no already exists !",
                           showConfirmButton: false,
                           timer: 4000
                        })
                     }
                  })
              },

        updatePassword()
        {
             axios.post('/admin/admin-api/update-password/'+this.userId,this.updateForm)
                .then(response  =>{
                    if(response.data['success'])
                    {
                       this.$fire({
                            position:'top',
                            icon: 'success',
                            title: ' '+response.data['msg'][0],
                            showConfirmButton: false,
                            timer: 4000
                        })
                        this.getData();
                        this.clearData();
                        
                    }else{
                       this.$fire({
                            position:'top',
                            icon: 'error',
                            title: ' '+response.data['msg'][0],
                            showConfirmButton: false,
                            timer: 4000
                        }) 
                        this.getData();
                        this.clearData();
                      }
                 })
            },
            clearData(){
               this.updateForm.currentPassword = '';
               this.updateForm.newPassword= '';
               this.updateForm.newConfirmPassword = '';
            },

                reset() 
                {
                    this.uploadReady = false
                    this.$nextTick(() => {
                    this.uploadReady = true
                })
                },
                getData(){
                    axios.get('/admin/admin-api/get-profile/'+this.userId)
                    .then(response => {
                        this.form = response.data[0];
                    });
                },
                    
            logout(){
                axios.get('/admin/logout').then(function(){
                    document.location.href = "/admin/login";
                })
            },

            // selectFile(){
            //     let file = this.$refs.file.files[0];
            //     let fileName = file.name;
            //     let fileReader = new FileReader()
            //     fileReader.readAsDataURL(file)
            //     fileReader.onload = (e) => {
            //     this.profileForm.profilePhoto = e.target.result;
            //     }
            //     this.form.fileName = fileName;
            //  },//selectFile end

        },

        created()
        {
            this.getData();
        }
}   
</script>