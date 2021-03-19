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
                                        <h4 class="mb-0 p-head">Review <span>Nursing</span> Scholarship Application <span>2021-22</span> (<span>IMIS-NURSCH00001</span>)</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div>
                                            <ul class="nav nav-tabs font-sm" role="tablist">
                                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-application-form/'+getdata.applicationId"><strong>Application Form</strong></router-link></li>
                                                <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-1/'+getdata.applicationId"><strong>Annexure-I</strong></router-link></li>
                                                <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-2/'+getdata.applicationId"><strong>Annexure-II</strong></router-link></li>
                                                <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-nursing-upload-documents/'+getdata.applicationId"><strong>Upload Documents</strong></router-link></li>
                                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-review-submit/'+getdata.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active adm-tab" id="tab-4">
                                                    <form class="ub-reg-form">
                                                        <div class="div-inner-filed py-1 px-2">
                                                            <div class="form-row">
                                                                <div class="col-xl-12">
                                                                    <div class="card mt-1 det-sec">
                                                                        <div class="card-header p-1">
                                                                            <h6 class="mb-0 color-mg font-sm">Uploaded Documents &amp; Certificates</h6>
                                                                        </div>
                                                                        <div class="card-body p-2">
                                                                            <div class="form-row">
                                                                                <div class="col-xl-12">
                                                                                    <div class="table-responsive font-md upd-doc">
                                                                                        <table class="table table-sm mb-0">
                                                                                            <thead class="color-mg">
                                                                                                <tr class="color-mg">
                                                                                                    <th class="w-57x">Required Document</th>
                                                                                                    <th class="d-none">Choose file</th>
                                                                                                    <th class="text-center">Uploaded</th>
                                                                                                    <th class="text-center">Action</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>Proof of admission in a recognized institute/ admission call letter issued by the institute<br /></td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}</span></td>
                                                                                                    <td class="text-center" v-if="getFiles.admissionLetter !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.admissionLetter"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Annexure-I Signed letter from colony leader stating the candidate is residing in the colony</td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file d-none font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">System Generated</span></td>
                                                                                                    <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Annexure-II Signed letter from colony leader stating the candidate is residing in the colony</td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file d-none font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center" ><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.annexureII === '#')?'No':'Yes'}}</span></td>
                                                                                                    <td class="text-center"  v-if="getFiles.annexureII !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.annexureII"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    <td class="text-center"  v-else><router-link class="act-link mr-0" to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Passport size photograph</td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.photograph === '#')?'No':'Yes'}}</span></td>
                                                                                                    <td class="text-center"  v-if="getFiles.photograph !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.photograph"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    <td class="text-center"  v-else><router-link class="act-link mr-0" to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Self attested Birth certificate/ proof of age</td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file d-none font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.proofOfAge === '#')?'No':'Yes'}}</span></td>
                                                                                                    <td class="text-center"  v-if="getFiles.proofOfAge !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.proofOfAge"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    <td class="text-center"  v-else><router-link class="act-link mr-0" to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Self attested Mark Sheet for 10th</td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets10 === '#')?'No':'Yes'}}</span></td>
                                                                                                    <td class="text-center" v-if="getFiles.markSheets10 !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.markSheets10"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Self attested Mark Sheet for 12th</td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets12 === '#')?'No':'Yes'}}</span></td>
                                                                                                    <td class="text-center" v-if="getFiles.markSheets12 !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.markSheets12"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                                </tr>
                                                                                                <!-- <tr>
                                                                                                    <td>Self attested Mark Sheet for Graduation</td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                                    <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                                                </tr> -->
                                                                                                <tr>
                                                                                                    <td>Self attested Leprosy Certificate of Mother<br /></td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateMother === '#')?'No':'Yes'}}</span></td>
                                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateMother !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.leprosyCertificateMother"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Self attested Leprosy Certificate of Father<br /></td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateFather === '#')?'No':'Yes'}}</span></td>
                                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateFather !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.leprosyCertificateFather"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Self attested Leprosy Certificate of Self<br /></td>
                                                                                                    <td class="d-none">
                                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                                    </td>
                                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateSelf === '#')?'No':'Yes'}}</span></td>
                                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateSelf !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.leprosyCertificateSelf"><i class="fa fa-eye"></i></router-link></td>
                                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
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
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xl-12"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button><button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
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
export default{
    data(){
        return {
            getFiles: {
                admissionLetter: '#',
                annexureII: '#',
                photograph: '#',
                proofOfAge: '#',
                markSheets10: '#',
                markSheets12: '#',
                leprosyCertificateSelf: '#',
                leprosyCertificateMother: '#',
                leprosyCertificateFather: '#'

            },
            getdata:{
                hasAdmissionLetter:'',
                applicationId:'',
                financialYear:'',
                leprosyCertificateMother :'',
                leprosyCertificateFather :'',
                leprosyCertificateSelf :'',
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
    
        getdataNursing()
        {
            const  currentUrl = window.location.pathname.split('/').reverse()[0];
                    axios.get('/admin/admin-api/review-nursing-application-form/'+currentUrl)
                .then(response => {
                if (response.data['success']) {
                    const data = response.data['data']
                    console.log(data)
                    this.getdata.applicantNameF      = data.applicantNameF;
                    this.getdata.applicantNameM      = data.applicantNameM;
                    this.getdata.applicantNameL      = data.applicantNameL;
                    this.getdata.applicantFatherName = data.applicantFatherName;
                    this.getdata.applicantMotherName = data.applicantMotherName;
                    this.getdata.addressAddln1       = data.addressAddln1;
                    this.getdata.hasAdmissionLetter  = data.hasAdmissionLetter;
                    this.getdata.applicationId       = data.applicationId;
                    this.getdata.financialYear       = data.financialYear;

                    this.getdata.leprosyCertificateMother = data.leprosyCertificateMother;
                    this.getdata.leprosyCertificateFather = data.leprosyCertificateFather;
                    this.getdata.leprosyCertificateSelf = data.leprosyCertificateSelf;

                    this.getdata.fullName = `${this.getdata.applicantNameF}${(this.getdata.applicantNameM)?" "+this.getdata.applicantNameM:''} ${this.getdata.applicantNameL}`;
                }
            
            })
        },
        getFileData(){
            const  currentUrl = window.location.pathname.split('/').reverse()[0];
            axios.get('/admin/admin-api/review-nursing-upload-documents/'+currentUrl)
            .then(response => {
                if (response.data['success']) {
                    this.getFiles = response.data['data']
                }
            })
        }
    },
    created(){
     this.getdataNursing();
     this.getFileData();
    }
 }
</script>
