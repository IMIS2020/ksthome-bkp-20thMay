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
                     <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-application-schedule"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li>
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
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-applicant-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review/'+form.applicationId"><strong>Review</strong></router-link></li>
                                       <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Review</strong></router-link></li>
                                    </ul>
                                    <div class="tab-content  bg-white">
                                       <div class="tab-pane active" role="tabpanel" id="tab-5">
                                            <form>
                                                <div class="div-inner-filed py-1">
                                                    <div class="form-row">
                                                        <div class="col-xl-12 mb-2">
                                                            <div class="table-responsive table-bordered font-sm rev-tbl">
                                                                <table class="table table-bordered table-sm mb-0">
                                                                    <thead class="color-mg">
                                                                        <tr>
                                                                            <th class="w-40x">Required Document Name</th>
                                                                            <th class="w-10x">Document Name</th>
                                                                            <th class="text-center w-7x">Uploaded</th>
                                                                            <th class="text-center w-10x">View/ Download</th>
                                                                            <th class="text-center w-15x">Status</th>
                                                                            <th class="text-center">Comments</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>My {{form.scholarshipType}} application </strong>({{form.appIdShow}})<strong>,&nbsp; for {{form.financialYear}}</strong></td>
                                                                            <td class="text-center"></td>
                                                                            <td class="text-center"></td>
                                                                            <td class="text-center" v-if="form.applicationId == '' "><span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span></td>
                                                                            <td class="text-center" v-else><router-link class="act-link" :to="'/print-view-application/'+form.applicationId" ><i class="fa fa-eye"></i></router-link></td>
                                                                            <td class="text-center">
                                                                                <div class="form-group mb-0"><select class="form-control form-control-sm font-sm" >
                                                                                        <option value="" selected="">-- select --</option>
                                                                                        <option value="NOT OK">Not OK</option>
                                                                                        <option value="OK">OK</option>
                                                                                        <option value="NOT REQUIRED">Not Required</option>
                                                                                        <option value="REQUIRED AND MISSING">Required &amp; Missing</option>
                                                                                    </select></div>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr v-for="(row,index) in docRows" :key="index">
                                                                            <td>{{row.docFileDesc}}<br></td>
                                                                            <td>{{row.docFileName == null? '' : row.docFileName.split('-').reverse().shift()}}<br></td>
                                                                            <td class="text-center">{{row.uploadStatus}}<br></td>
                                                                            <td class="text-center" v-if="row.uploadStatus == 'YES'"><router-link target="_blank" class="act-link" :to="''+row.fileURL"><i class="fa fa-eye"></i></router-link></td>
                                                                            <td class="text-center" v-else><span class="act-link" style="color:#808080;"> <i class="fa fa-eye"></i></span></td>
                                                                            <td class="text-center">
                                                                                <div class="form-group mb-0">
                                                                                    <select class="form-control form-control-sm font-sm" v-model="form.status">
                                                                                        <option value="" selected="">-- select --</option>
                                                                                        <option value="NOT OK">Not OK</option>
                                                                                        <option value="OK">OK</option>
                                                                                        <option value="NOT REQUIRED">Not Required</option>
                                                                                        <option value="REQUIRED AND MISSING">Required &amp; Missing</option>
                                                                                    </select>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <div class="form-group mb-0">
                                                                                    <textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.comments"></textarea>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 offset-xl-0 font-sm"><button class="btn btn-block btn-sm btn-mg font-sm" type="button"><strong>Save</strong></button></div>
                                                        <div class="col-xl-2 offset-xl-0 font-sm"><button class="btn btn-block btn-sm btn-cancel font-sm" type="button"  @click.prevent="goBack"><strong>Cancel</strong></button></div>
                                                        <div class="col-xl-2 offset-xl-4"><button class="btn btn-block btn-sm btn-mg font-sm" data-toggle="modal" data-target="#accept-application-view" type="button"><strong>Accept</strong></button></div>
                                                        <div class="col-xl-2 offset-xl-0 font-sm"><button class="btn btn-block btn-sm btn-mg font-sm" type="button" data-toggle="modal" data-target="#return-application-view"><strong>Return with comments</strong></button></div>
                                                        <div class="col-xl-12 offset-xl-0">
                                                            <!-- Start: Application Accept Modal -->
                                                            <div class="modal fade" role="dialog" tabindex="-1" id="accept-application-view" style="z-index: 1051;">
                                                                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header py-1">
                                                                            <h6 class="modal-title color-mg font-md"><strong>Accept Application</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        </div>
                                                                        <div class="modal-body cs-modal-body">
                                                                            <div class="form-row">
                                                                                <div class="col-xl-1 align-self-center mb-2">
                                                                                    <p class="mb-0 color-mg font-sm font-weight-bold">TO:&nbsp;</p>
                                                                                </div>
                                                                                <div class="col-xl-11 mb-2">
                                                                                    <div class="form-group mb-0"><input class="form-control form-control-sm" v-model="form.applicantEmailId"  type="email" placeholder="Email of Applicant"></div>
                                                                                </div>
                                                                                <div class="col-xl-1 align-self-center mb-2">
                                                                                    <p class="mb-0 color-mg font-sm font-weight-bold">CC:</p>
                                                                                </div>
                                                                                <div class="col-xl-11 mb-2">
                                                                                    <div class="form-group mb-0"><input class="form-control form-control-sm" v-model="form.ccEmail" type="email" placeholder="Email goes here."></div>
                                                                                </div>
                                                                                <div class="col-xl-1 align-self-center mb-4">
                                                                                    <p class="mb-0 color-mg font-sm font-weight-bold">Subject:</p>
                                                                                </div>
                                                                                <div class="col-xl-11 mb-4">
                                                                                    <div class="form-group mb-0">
                                                                                        <select class="form-control form-control-sm" >
                                                                                            <option value="12" selected="">-- select --</option>
                                                                                            <option value="Acceptance">Acceptance of Application</option>
                                                                                            <option value="Provisional Acceptance">Provisional Acceptance of Application</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12 mb-2">
                                                                                    <p class="mb-1 color-mg font-sm font-weight-bold">To,&nbsp;<span> {{form.fullName}}</span></p>
                                                                                    <p class="mb-3 color-mg font-sm font-weight-bold pl-4">{{form.addressAddln1}},{{form.addressAddln2}},<br>{{form.addressCity}},<br>{{form.addressState}}, {{form.addressPinzip}}</p>
                                                                                    <p class="mb-2 color-mg font-sm font-weight-bold pl-4">Dear Applicant,<br></p>
                                                                                    <p class="mb-1 text-black font-sm pl-4">We have received your application for No.&nbsp;<span>{{form.appIdShow}}</span> for&nbsp;<span>{{form.scholarshipType}}</span> scholarship. We are&nbsp;<span>Provisionally Accepting</span>&nbsp;your application.<br></p>
                                                                                    <p class="mb-2 text-black font-sm pl-4">Kindly check our comments on the documents submitted and re-submit as required.<br></p>
                                                                                    <div class="table-responsive table-bordered font-ms rev-tbl pl-4">
                                                                                        <table class="table table-bordered table-sm mb-0">
                                                                                            <thead class="color-mg">
                                                                                                <tr>
                                                                                                    <th>Document Name</th>
                                                                                                    <!-- <th>Type</th> -->
                                                                                                    <th class="text-center">Uploaded</th>
                                                                                                    <th class="text-center">Status</th>
                                                                                                    <th class="text-center">Comments</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr v-for="(row,index) in docRows" :key="index">
                                                                                                    <td>{{row.docFileDesc}}<br></td>
                                                                                                    <!-- <td>Application Form<br></td> -->
                                                                                                    <td class="text-center">{{row.uploadStatus}}<br></td>
                                                                                                    <td class="text-center">OK</td>
                                                                                                    <td class="text-center">Not OK</td>
                                                                                                </tr>
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-3 offset-xl-0 align-self-center mb-2">
                                                                                    <p class="mb-0 color-mg font-sm font-weight-bold pl-4">Additional Comments:&nbsp;</p>
                                                                                </div>
                                                                                <div class="col-xl-9 mb-2">
                                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" style="line-height: 1;"></textarea></div>
                                                                                </div>
                                                                                <div class="col-xl-8 offset-xl-0 align-self-center">
                                                                                    <p class="mb-0 text-black font-sm pl-4">You are required to check your application based on the comments and resubmit by:&nbsp;</p>
                                                                                </div>
                                                                                <div class="col-xl-3 offset-xl-0 align-self-center"><input class="form-control form-control-sm font-sm" type="date"></div>
                                                                                <div class="col-xl-8 offset-xl-0 align-self-center mb-4">
                                                                                    <p class="mb-0 text-black font-sm pl-4">For any clarifications please write to us or call us at contact details provided below.</p>
                                                                                </div>
                                                                                <div class="col-xl-8 offset-xl-0 align-self-center mb-2">
                                                                                    <p class="mb-0 color-mg font-sm pl-4">Regards,<br>Administrator<br>+91 9876543210<br>administrator@gmail.com<br><br></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="button"><strong>Submit</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Cancel</strong></button></div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- End: Application Accept Modal -->
                                                            <!-- Start: Application Return Modal -->
                                                            <div class="modal fade" role="dialog" tabindex="-1" id="return-application-view" style="z-index: 1051;">
                                                                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header py-1">
                                                                            <h6 class="modal-title color-mg font-md"><strong>Return Application</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        </div>
                                                                        <div class="modal-body cs-modal-body">
                                                                            <div class="form-row">
                                                                                <div class="col-xl-1 align-self-center mb-2">
                                                                                    <p class="mb-0 color-mg font-sm font-weight-bold">TO:&nbsp;</p>
                                                                                </div>
                                                                                <div class="col-xl-11 mb-2">
                                                                                    <div class="form-group mb-0"><input class="form-control form-control-sm" v-model="form.applicantEmailId" type="email" placeholder="Email of Applicant"></div>
                                                                                </div>
                                                                                <div class="col-xl-1 align-self-center mb-2">
                                                                                    <p class="mb-0 color-mg font-sm font-weight-bold">CC:</p>
                                                                                </div>
                                                                                <div class="col-xl-11 mb-2">
                                                                                    <div class="form-group mb-0"><input class="form-control form-control-sm" type="email" placeholder="Email goes here."></div>
                                                                                </div>
                                                                                <div class="col-xl-1 align-self-center mb-4">
                                                                                    <p class="mb-0 color-mg font-sm font-weight-bold">Subject:</p>
                                                                                </div>
                                                                                <div class="col-xl-11 mb-4">
                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm">
                                                                                            <option value="12">-- select --</option>
                                                                                            <option value="13" selected="">Application Returned with Discrepency - Kindly Resubmit</option>
                                                                                        </select></div>
                                                                                </div>
                                                                                <div class="col-xl-12 mb-2">
                                                                                    <p class="mb-1 color-mg font-sm font-weight-bold">&nbsp;To,&nbsp;<span>{{form.fullName}}</span></p>
                                                                                    <p class="mb-3 color-mg font-sm font-weight-bold pl-4">{{form.addressAddln1}}, {{form.addressAddln2}}<br>{{form.addressCity}},<br>{{form.addressState}} {{form.addressPinzip}}</p>
                                                                                    <p class="mb-2 color-mg font-sm font-weight-bold pl-4">Dear Applicant,<br></p>
                                                                                    <p class="mb-1 text-black font-sm pl-4">We have received your application for No.&nbsp;<span>{{form.appIdShow}}</span> for&nbsp;<span>{{form.scholarshipType}}</span> scholarship. We are unable to&nbsp;<span>accept the application due to discrepancies</span>.</p>
                                                                                    <p class="mb-2 text-black font-sm pl-4">Kindly check our comments on the documents submitted and re-submit as required.<br></p>
                                                                                    <div class="table-responsive table-bordered font-ms rev-tbl pl-4">
                                                                                        <table class="table table-bordered table-sm mb-0">
                                                                                            <thead class="color-mg">
                                                                                                <tr>
                                                                                                    <th>Document Name</th>
                                                                                                    <!-- <th>Type</th> -->
                                                                                                    <th class="text-center">Uploaded</th>
                                                                                                    <th class="text-center">Status</th>
                                                                                                    <th class="text-center">Comments</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr v-for="(row,index) in docRows" :key="index">
                                                                                                    <td>{{row.docFileDesc}}<br></td>
                                                                                                    <!-- <td>Application Form<br></td> -->
                                                                                                    <td class="text-center">{{row.uploadStatus}}<br></td>
                                                                                                    <td class="text-center">OK</td>
                                                                                                    <td class="text-center">Not OK</td>
                                                                                                </tr>
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-3 offset-xl-0 align-self-center mb-2">
                                                                                    <p class="mb-0 color-mg font-sm font-weight-bold pl-4">Additional Comments:&nbsp;</p>
                                                                                </div>
                                                                                <div class="col-xl-9 mb-2">
                                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" style="line-height: 1;"></textarea></div>
                                                                                </div>
                                                                                <div class="col-xl-8 offset-xl-0 align-self-center">
                                                                                    <p class="mb-0 text-black font-sm pl-4">You are required to check your application based on the comments and resubmit by:&nbsp;</p>
                                                                                </div>
                                                                                <div class="col-xl-3 offset-xl-0 align-self-center"><input class="form-control form-control-sm font-sm" type="date"></div>
                                                                                <div class="col-xl-8 offset-xl-0 align-self-center mb-4">
                                                                                    <p class="mb-0 text-black font-sm pl-4">For any clarifications please write to us or call us at contact details provided below.</p>
                                                                                </div>
                                                                                <div class="col-xl-8 offset-xl-0 align-self-center mb-2">
                                                                                    <p class="mb-0 color-mg font-sm pl-4">Regards,<br>Administrator<br>+91 9876543210<br>administrator@gmail.com<br><br></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="button"><strong>Submit</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Cancel</strong></button></div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- End: Application Return Modal -->
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
            userId2    : document.querySelector("meta[name='userId']").getAttribute('content'),
            firstname  : document.querySelector("meta[name='firstname']").getAttribute('content'),
            middlename : document.querySelector("meta[name='middlename']").getAttribute('content'),
            lastname   : document.querySelector("meta[name='lastname']").getAttribute('content'),
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
                addressAddln2:'',
                addressCity:'',
                addressState:'',
                addressPinzip:'',
                fullName: '',
                appStatus: '',
                appIdShow: '',
                applicantEmailId:'',
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

            goBack() 
            {
                window.history.go(-1);
            },

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
                    this.form.applicantNameM=response.data['data'][0][0].applicantNameM;
                    this.form.applicantNameL=response.data['data'][0][0].applicantNameL;
                    this.form.applicantFatherName=response.data['data'][0][0].applicantFatherName;
                    this.form.applicantMotherName=response.data['data'][0][0].applicantMotherName;
                    this.form.financialYear = response.data['data'][0][0].financialYear;  
                    this.form.hasAdmissionLetter = response.data['data'][0][0].hasAdmissionLetter;
                    this.form.addressAddln1=response.data['data'][0][0].get_address.addressAddln1;
                    this.form.addressAddln2=response.data['data'][0][0].get_address.addressAddln2;
                    this.form.addressCity=response.data['data'][0][0].get_address.addressCity;
                    this.form.addressState=response.data['data'][0][0].get_address.addressState;
                    this.form.addressPinzip=response.data['data'][0][0].get_address.addressPinzip;
                    this.form.applicantEmailId = response.data['data'][0][0].applicantEmailId;
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