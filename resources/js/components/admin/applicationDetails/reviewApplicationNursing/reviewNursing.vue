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
                                        <h4 class="mb-0 p-head">Review <span>Nursing</span> Scholarship Application <span>{{getdata.financialYear}}</span> (<span>{{getdata.applicationId}}</span>)</h4>
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
                                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-upload-documents/'+getdata.applicationId"><strong>Upload Documents</strong></router-link></li>
                                                <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-nursing-review-submit/'+getdata.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active adm-tab" id="tab-5">
                                                    <form>
                                                        <div class="div-inner-filed py-1">
                                                            <div class="form-row">
                                                                <div class="col-xl-12 mb-2">
                                                                    <div class="table-responsive table-bordered font-sm rev-tbl">
                                                                        <table class="table table-bordered table-sm mb-0">
                                                                            <thead class="color-mg">
                                                                                <tr>
                                                                                    <th class="w-38x">Document Name</th>
                                                                                    <th class="w-10x">Type</th>
                                                                                    <th class="text-center w-7x">Uploaded</th>
                                                                                    <th class="text-center w-10x">View/ Download</th>
                                                                                    <th class="text-center w-15x">Status</th>
                                                                                    <th class="text-center">Comments</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Application No. {{getdata.applicationId}} for Nursing Scholarship<br /></td>
                                                                                    <td>Application Form<br></td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getdata.applicationId=== '')?'No Application':'Yes'}}</span><br></td>

                                                                                        <td class="text-center pt-2" v-if="getdata.applicationId != '' ">
                                                                                        <router-link target="_blank" class="act-link" to=""><i class="fa fa-download"></i></router-link>
                                                                                        <router-link target="_blank" class="act-link" to=""><i class="fa fa-eye"></i></router-link>
                                                                                    </td>
                                                                                    <td class="text-center pt-2" v-else>
                                                                                        <span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span>
                                                                                        <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm font-s" v-model="form.admissionLetterStatus">
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"  v-model="form.admissionLettercomments"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr v-if="getdata.hasAdmissionLetter == 'YES'">
                                                                                    <td>Annexure-I letter<br /></td>
                                                                                    <td>Attachment</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getdata.hasAdmissionLetter === 'YES')?'Yes':'No'}}</span></td>
                                                                                    <td class="text-center pt-2">
                                                                                        <a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a>
                                                                                        <a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm font-s" v-model="form.annexureIStatus">
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.annexureIcomments"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Proof of admission in a recognized institute/ admission call letter issued by the institute<br /></td>
                                                                                    <td>Attachment<br /></td>
                                                                                    <td class="text-center "><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}</span><br /></td>

                                                                                    <td class="text-center pt-2" v-if="getFiles.admissionLetter !== '#'">
                                                                                        <router-link target="_blank" class="act-link" :to="''+getFiles.admissionLetter"><i class="fa fa-download"></i></router-link>
                                                                                        <router-link class="act-link" to ="" data-toggle="modal" data-target="#vw-apo-form1"><i class="fa fa-eye"></i></router-link>
                                                                                    </td>
                                                                                    <td class="text-center pt-2" v-else>
                                                                                        <span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span>
                                                                                        <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>
                                                                                        
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm font-s" v-model="form.annexureIStatus"> 
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.annexureIcomment"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Annexure-II letter from colony leader stating the candidate is residing in the colony<br /></td>
                                                                                    <td>Attachment<br></td>
                                                                                   <td class="text-center "><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getFiles.annexureII === '#')?'No':'Yes'}}</span><br /></td>

                                                                                    <td class="text-center pt-2" v-if="getFiles.annexureII !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.annexureII"><i class="fa fa-download"></i></router-link>
                                                                                       <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form2"><i class="fa fa-eye"></i></router-link>
                                                                                    </td>

                                                                                     <td class="text-center pt-2" v-else>
                                                                                       <span class="act-link" style="color:#808080;"> <i class="fa fa-download"></i></span>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>


                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm font-s" v-model="form.annexureIIStatus">
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.annexureIIcomment"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Passport size photograph<br /></td>
                                                                                    <td>Attachment<br /></td>
                                                                                    <td class="text-center "><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getFiles.photograph === '#')?'No':'Yes'}}</span><br /></td>

                                                                                    <td class="text-center pt-2" v-if="getFiles.photograph !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.photograph"><i class="fa fa-download"></i></router-link>
                                                                                       <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form3"><i class="fa fa-eye"></i></router-link>
                                                                                    </td>

                                                                                     <td class="text-center pt-2" v-else>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-download"></i></span>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>


                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm font-s" v-model="form.photographStatus">
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.photographcomments"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Self attested Birth certificate/ proof of age<br /></td>
                                                                                    <td>Attachment<br /></td>
                                                                                    <td class="text-center "><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getFiles.proofOfAge === '#')?'No':'Yes'}}</span><br /></td>

                                                                                    <td class="text-center pt-2" v-if="getFiles.proofOfAge !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.proofOfAge"><i class="fa fa-download"></i></router-link>
                                                                                       <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form4"><i class="fa fa-eye"></i></router-link>
                                                                                    </td>

                                                                                     <td class="text-center pt-2" v-else>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-download"></i></span>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>

                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm font-s" v-model="form.proofOfAgeStatus">
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.proofOfAgecomments"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Self attested marksheet for 10th<br /></td>
                                                                                    <td>Attachment<br /></td>
                                                                                    <td class="text-center "><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getFiles.markSheets10 === '#')?'No':'Yes'}}</span><br /></td>

                                                                                    <td class="text-center pt-2" v-if="getFiles.markSheets10 !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.markSheets10"><i class="fa fa-download"></i></router-link>
                                                                                       <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form5"><i class="fa fa-eye"></i></router-link>
                                                                                    </td>

                                                                                     <td class="text-center pt-2" v-else>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-download"></i></span>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm font-s" v-model="form.markSheets10Status">
                                                                                              <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.markSheets10comments"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Self attested marksheet for 12th<br /></td>
                                                                                    <td>Attachment<br /></td>
                                                                                     <td class="text-center "><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getFiles.markSheets12 === '#')?'No':'Yes'}}</span><br /></td>

                                                                                    <td class="text-center pt-2" v-if="getFiles.markSheets12 !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.markSheets12"><i class="fa fa-download"></i></router-link>
                                                                                       <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form6"><i class="fa fa-eye"></i></router-link>
                                                                                    </td>

                                                                                     <td class="text-center pt-2" v-else>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-download"></i></span>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm font-s" v-model="form.markSheets12Status">
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.markSheets12comments"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr v-if="getdata.applicantLeprosyAffectedMother == true">
                                                                                    <td>Self attested Leprosy Certificate of Mother<br /></td>
                                                                                    <td>Attachment<br /></td>
                                                                                    <td class="text-center "><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getFiles.leprosyCertificateMother === '#')?'No':'Yes'}}</span><br /></td>

                                                                                    <td class="text-center pt-2" v-if="getFiles.leprosyCertificateMother !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateMother"><i class="fa fa-download"></i></router-link>
                                                                                       <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form7"><i class="fa fa-eye"></i></router-link>
                                                                                    </td>

                                                                                     <td class="text-center pt-2" v-else>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-download"></i></span>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm font-s" v-model="form.leprosyCertificateMotherStatus">
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.leprosyCertificateMothercomments"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr v-if="getdata.applicantLeprosyAffectedFather == true">
                                                                                    <td>Self attested Leprosy Certificate of Father<br /></td>
                                                                                    <td>Attachment<br /></td>
                                                                                    <td class="text-center "><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getFiles.leprosyCertificateFather === '#')?'No':'Yes'}}</span><br /></td>

                                                                                    <td class="text-center pt-2" v-if="getFiles.leprosyCertificateFather !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateFather"><i class="fa fa-download"></i></router-link>
                                                                                       <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form8"><i class="fa fa-eye"></i></router-link>
                                                                                    </td>

                                                                                     <td class="text-center pt-2" v-else>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-download"></i></span>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm font-s" v-model="form.leprosyCertificateFatherStatus">
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.leprosyCertificateFathercomments"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr v-if="getdata.applicantLeprosyAffectedSelf == true">
                                                                                    <td>Self attested Leprosy Certificate of Self<br /></td>
                                                                                    <td>Attachment<br /></td>
                                                                                     <td class="text-center "><span class="badge badge-pill badge-primary cs-badge mt-2">{{(getFiles.leprosyCertificateSelf === '#')?'No':'Yes'}}</span><br /></td>

                                                                                    <td class="text-center pt-2" v-if="getFiles.leprosyCertificateSelf !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateSelf"><i class="fa fa-download"></i></router-link>
                                                                                       <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form9"><i class="fa fa-eye"></i></router-link>
                                                                                    </td>

                                                                                     <td class="text-center pt-2" v-else>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-download"></i></span>
                                                                                       <span class="act-link" style="color:#808080;"><i class="fa fa-eye"></i></span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm font-s" v-model="form.leprosyCertificateSelfStatus">
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value="OK">OK</option>
                                                                                                <option value="Not OK">Not OK</option>
                                                                                                <option value="Not Required">Not Required</option>
                                                                                                <option value="Required & Missing">Required &amp; Missing</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;" v-model="form.leprosyCertificateSelfcomments"></textarea></div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2 offset-xl-0 font-sm"><button class="btn btn-block btn-sm btn-mg font-sm" type="button"><strong>Save</strong></button></div>
                                                                <div class="col-xl-2 offset-xl-0 font-sm"><router-link class="btn btn-block btn-sm btn-cancel font-sm" to="/admin/manage-application-details"><strong>Cancel</strong></router-link></div>
                                                                <div class="col-xl-2 offset-xl-4"><button class="btn btn-block btn-sm btn-mg font-sm" data-toggle="modal" data-target="#accept-application-view" type="button"><strong>Accept</strong></button></div>
                                                                <div class="col-xl-2 offset-xl-0 font-sm"><button class="btn btn-block btn-sm btn-mg font-sm" type="button" data-toggle="modal" data-target="#return-application-view"><strong>Return with comments</strong></button></div>
                                                                <div class="col-xl-12 offset-xl-0">
                                                                    <div role="dialog" tabindex="-1" class="modal fade" id="accept-application-view" style="z-index: 1051;">
                                                                        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header py-1">
                                                                                    <h6 class="modal-title color-mg font-md"><strong>Accept Application</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                </div>
                                                                                <div class="modal-body cs-modal-body">
                                                                                    <div class="form-row">
                                                                                        <div class="col-xl-1 align-self-center mb-2">
                                                                                            <p class="mb-0 color-mg font-sm font-weight-bold">TO: </p>
                                                                                        </div>
                                                                                        <div class="col-xl-11 mb-2">
                                                                                            <div class="form-group mb-0"><input type="email" class="form-control form-control-sm" placeholder="Email of Applicant" v-model="getdata.applicantEmailId"></div>
                                                                                        </div>
                                                                                        <div class="col-xl-1 align-self-center mb-2">
                                                                                            <p class="mb-0 color-mg font-sm font-weight-bold">CC:</p>
                                                                                        </div>
                                                                                        <div class="col-xl-11 mb-2">
                                                                                            <div class="form-group mb-0"><input type="email" class="form-control form-control-sm" placeholder="Email goes here." /></div>
                                                                                        </div>
                                                                                        <div class="col-xl-1 align-self-center mb-4">
                                                                                            <p class="mb-0 color-mg font-sm font-weight-bold">Subject:</p>
                                                                                        </div>
                                                                                        <div class="col-xl-11 mb-4">
                                                                                            <div class="form-group mb-0">
                                                                                                <select class="form-control form-control-sm" @change="onSelect($event)">
                                                                                                    <option value="" selected>-- select --</option>
                                                                                                    <option value="Accepting">Accepting</option>
                                                                                                    <option value="Provisionally accepting">Provisionally accepting</option>
                                                                                                </select>
                                                                                                </div>
                                                                                        </div>
                                                                                        <div class="col-xl-12 mb-2">
                                                                                            <p class="mb-1 color-mg font-sm font-weight-bold">To, <span>{{getdata.fullName}}</span></p>
                                                                                            <p class="mb-3 color-mg font-sm font-weight-bold pl-4">{{getdata.addressAddln1}}, {{getdata.addressAddln2}},<br >{{getdata.addressCity}},Dist:{{getdata.addressDistprov}},<br />{{getdata.addressState}}- {{getdata.addressPinzip}}, {{getdata.addressCountry}}</p>
                                                                                            <p class="mb-2 color-mg font-sm font-weight-bold pl-4">Dear Applicant,<br /></p>
                                                                                            <p class="mb-1 text-black font-sm pl-4">We have received your application for No. <span>{{getdata.applicationId}}</span> for <span>Nursing</span> scholarship. We are <span>{{selectOption}} </span> your application.<br /></p>
                                                                                            <p class="mb-2 text-black font-sm pl-4">Kindly check our comments on the documents submitted and re-submit as required.<br /></p>
                                                                                            <div class="table-responsive table-bordered font-ms rev-tbl pl-4">
                                                                                                <table class="table table-bordered table-sm mb-0">
                                                                                                    <thead class="color-mg">
                                                                                                        <tr>
                                                                                                            <th>Document Name</th>
                                                                                                            <th>Type</th>
                                                                                                            <th class="text-center">Uploaded</th>
                                                                                                            <th class="text-center">Status</th>
                                                                                                            <th class="text-center">Comments</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td>Application No. {{getdata.applicationId}} for Nursing Scholarship<br /></td>
                                                                                                            <td>Application Form<br /></td>
                                                                                                            <td class="text-center">{{(getdata.applicationId=== '')?'No Application':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Annexure-I letter<br /></td>
                                                                                                            <td>Attachment</td>
                                                                                                            <td class="text-center">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}</td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Proof of admission in a recognized institute/ admission call letter issued by the institute<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Annexure-II letter from colony leader stating the candidate is residing in the colony<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.annexureII === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Passport size photograph<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.photograph === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Self attested Birth certificate/ proof of age<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.proofOfAge === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Self attested marksheet for 10th<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.markSheets10 === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Self attested marksheet for 12th/ Graduation<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.markSheets12 === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr v-if="getdata.applicantLeprosyAffectedMother == true">

                                                                                                            <td>Self attested Leprosy Certificate of Mother<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.leprosyCertificateMother === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                       <tr v-if="getdata.applicantLeprosyAffectedFather == true">

                                                                                                            <td>Self attested Leprosy Certificate of Father<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.leprosyCertificateFather === '#')?'No':'Yes'}}</td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                       <tr v-if="getdata.applicantLeprosyAffectedSelf == true">

                                                                                                            <td>Self attested Leprosy Certificate of Self<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.leprosyCertificateSelf === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-3 offset-xl-0 align-self-center mb-2">
                                                                                            <p class="mb-0 color-mg font-sm font-weight-bold pl-4">Additional Comments: </p>
                                                                                        </div>
                                                                                        <div class="col-xl-9 mb-2">
                                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" style="line-height: 1;"></textarea></div>
                                                                                        </div>
                                                                                        <div class="col-xl-8 offset-xl-0 align-self-center">
                                                                                            <p class="mb-0 text-black font-sm pl-4">You are required to check your application based on the comments and resubmit by: </p>
                                                                                        </div>
                                                                                        <div class="col-xl-3 offset-xl-0 align-self-center"><input class="form-control form-control-sm font-sm" type="date" /></div>
                                                                                        <div class="col-xl-8 offset-xl-0 align-self-center mb-4">
                                                                                            <p class="mb-0 text-black font-sm pl-4">For any clarifications please write to us or call us at contact details provided below.</p>
                                                                                        </div>
                                                                                        <div class="col-xl-8 offset-xl-0 align-self-center mb-2">
                                                                                            <p class="mb-0 color-mg font-sm pl-4">Regards,<br />Administrator<br />+91 9876543210<br />administrator@gmail.com<br /><br /></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="button"><strong>Submit</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Cancel</strong></button></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div role="dialog" tabindex="-1" class="modal fade" id="return-application-view" style="z-index: 1051;">
                                                                        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header py-1">
                                                                                    <h6 class="modal-title color-mg font-md"><strong>Return Application</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                </div>
                                                                                <div class="modal-body cs-modal-body">
                                                                                    <div class="form-row">
                                                                                        <div class="col-xl-1 align-self-center mb-2">
                                                                                            <p class="mb-0 color-mg font-sm font-weight-bold">TO: </p>
                                                                                        </div>
                                                                                        <div class="col-xl-11 mb-2">
                                                                                            <div class="form-group mb-0"><input type="email" class="form-control form-control-sm" placeholder="Email of Applicant" v-model="getdata.applicantEmailId"></div>
                                                                                        </div>
                                                                                        <div class="col-xl-1 align-self-center mb-2">
                                                                                            <p class="mb-0 color-mg font-sm font-weight-bold">CC:</p>
                                                                                        </div>
                                                                                        <div class="col-xl-11 mb-2">
                                                                                            <div class="form-group mb-0"><input type="email" class="form-control form-control-sm" placeholder="Email goes here." /></div>
                                                                                        </div>
                                                                                        <div class="col-xl-1 align-self-center mb-4">
                                                                                            <p class="mb-0 color-mg font-sm font-weight-bold">Subject:</p>
                                                                                        </div>
                                                                                        <div class="col-xl-11 mb-4">
                                                                                            <div class="form-group mb-0"><select class="form-control form-control-sm">
                                                                                                    <option value="12">-- select --</option>
                                                                                                    <option value="13" selected>Application Returned with Discrepency - Kindly Resubmit</option>
                                                                                                </select></div>
                                                                                        </div>
                                                                                        <div class="col-xl-12 mb-2">
                                                                                            <p class="mb-1 color-mg font-sm font-weight-bold">To, <span>{{getdata.fullName}}</span></p>
                                                                                            <p class="mb-3 color-mg font-sm font-weight-bold pl-4">{{getdata.addressAddln1}}, {{getdata.addressAddln2}},<br >{{getdata.addressCity}},Dist:{{getdata.addressDistprov}},<br />{{getdata.addressState}}- {{getdata.addressPinzip}}, {{getdata.addressCountry}}</p>
                                                                                            <p class="mb-2 color-mg font-sm font-weight-bold pl-4">Dear Applicant,<br /></p>
                                                                                            <p class="mb-1 text-black font-sm pl-4">We have received your application for No. <span>{{getdata.applicationId}}</span> for <span>Nursing</span> scholarship. We are unable to <span>accept the application due to discrepancies</span>.</p>
                                                                                            <p class="mb-2 text-black font-sm pl-4">Kindly check our comments on the documents submitted and re-submit as required.<br /></p>
                                                                                            <div class="table-responsive table-bordered font-ms rev-tbl pl-4">
                                                                                                <table class="table table-bordered table-sm mb-0">
                                                                                                    <thead class="color-mg">
                                                                                                        <tr>
                                                                                                            <th>Document Name</th>
                                                                                                            <th>Type</th>
                                                                                                            <th class="text-center">Uploaded</th>
                                                                                                            <th class="text-center">Status</th>
                                                                                                            <th class="text-center">Comments</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td>Application No. {{getdata.applicationId}} for Nursing Scholarship<br /></td>
                                                                                                            <td>Application Form<br /></td>
                                                                                                            <td class="text-center">{{(getdata.applicationId=== '')?'No Application':'Yes'}} <br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Annexure-I letter<br /></td>
                                                                                                            <td>Attachment</td>
                                                                                                            <td class="text-center">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}</td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Proof of admission in a recognized institute/ admission call letter issued by the institute<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Annexure-II letter from colony leader stating the candidate is residing in the colony<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                           <td class="text-center">{{(getFiles.annexureII === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Passport size photograph<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                             <td class="text-center">{{(getFiles.photograph === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Self attested Birth certificate/ proof of age<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.proofOfAge === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Self attested marksheet for 10th<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                           <td class="text-center">{{(getFiles.markSheets10 === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>Self attested marksheet for 12th<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.markSheets12 === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr v-if="getdata.applicantLeprosyAffectedMother == true">

                                                                                                            <td>Self attested Leprosy Certificate of Mother<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.leprosyCertificateMother === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                         <tr v-if="getdata.applicantLeprosyAffectedFather == true">

                                                                                                            <td>Self attested Leprosy Certificate of Father<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.leprosyCertificateFather === '#')?'No':'Yes'}}</td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                        <tr v-if="getdata.applicantLeprosyAffectedSelf == true">

                                                                                                            <td>Self attested Leprosy Certificate of Self<br /></td>
                                                                                                            <td>Attachment<br /></td>
                                                                                                            <td class="text-center">{{(getFiles.leprosyCertificateSelf === '#')?'No':'Yes'}}<br /></td>
                                                                                                            <td class="text-center"></td>
                                                                                                            <td class="text-center"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-3 offset-xl-0 align-self-center mb-2">
                                                                                            <p class="mb-0 color-mg font-sm font-weight-bold pl-4">Additional Comments: </p>
                                                                                        </div>
                                                                                        <div class="col-xl-9 mb-2">
                                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" style="line-height: 1;"></textarea></div>
                                                                                        </div>
                                                                                        <div class="col-xl-8 offset-xl-0 align-self-center">
                                                                                            <p class="mb-0 text-black font-sm pl-4">You are required to check your application based on the comments and resubmit by: </p>
                                                                                        </div>
                                                                                        <div class="col-xl-3 offset-xl-0 align-self-center"><input class="form-control form-control-sm font-sm" type="date" /></div>
                                                                                        <div class="col-xl-8 offset-xl-0 align-self-center mb-4">
                                                                                            <p class="mb-0 text-black font-sm pl-4">For any clarifications please write to us or call us at contact details provided below.</p>
                                                                                        </div>
                                                                                        <div class="col-xl-8 offset-xl-0 align-self-center mb-2">
                                                                                            <p class="mb-0 color-mg font-sm pl-4">Regards,<br />Administrator<br />+91 9876543210<br />administrator@gmail.com<br /><br /></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="button"><strong>Submit</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Cancel</strong></button></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                    
                                        <!-- Modal - 1 -->
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
                                        </div>

                                        <!-- Modal-2 -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form2">
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
                                                                <embed :src="''+getFiles.annexureII" width="100%" height="600" type='application/pdf'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                                                        <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal-3 -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form3">
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
                                                                <embed :src="''+getFiles.photograph" width="100%" height="600" type='application/pdf'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                                                        <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal-4 -->

                                        <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form4">
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
                                                                <embed :src="''+getFiles.proofOfAge" width="100%" height="600" type='application/pdf'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                                                        <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -5 -->

                                        <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form5">
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
                                                                <embed :src="''+getFiles.markSheets10" width="100%" height="600" type='application/pdf'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                                                        <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -6 -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form6">
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
                                                                <embed :src="''+getFiles.markSheets12" width="100%" height="600" type='application/pdf'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                                                        <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal-7 -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form7">
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
                                                                <embed :src="''+getFiles.leprosyCertificateMother" width="100%" height="600" type='application/pdf'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                                                        <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            <!-- Modal-8 -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form8">
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
                                                                <embed :src="''+getFiles.leprosyCertificateFather" width="100%" height="600" type='application/pdf'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                                                        <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            <!-- Modal-9 -->
                                        <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form9">
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
                                                                <embed :src="''+getFiles.leprosyCertificateSelf" width="100%" height="600" type='application/pdf'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button>
                                                        <button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button>
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
    </body>              
</template>
<script>
export default{
    data(){
        return {
           selectOption:'',
           
            form:{         
                admissionLetterStatus :'',
                admissionLettercomments : '',
                annexureIStatus : '',
                annexureIcomments : '',
                annexureIIStatus : '',
                annexureIIcomments : '',
                photographStatus : '',
                photographcomments : '',
                proofOfAgeStatus  : '',
                proofOfAgecomments : '',
                markSheets10Status : '',
                markSheets10comments : '',
                markSheets12Status : '',
                markSheets12comments : '',
                leprosyCertificateSelfStatus: '',
                leprosyCertificateSelfcomments : '',
                leprosyCertificateMotherStatus : '',
                leprosyCertificateMothercomments : '',
                leprosyCertificateFatherStatus : '',
                leprosyCertificateFathercomments : '',
            },
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
                applicantLeprosyAffectedMother:'',
                applicantLeprosyAffectedFather :'',
                applicantLeprosyAffectedSelf:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
                applicantContactNoSelf: '',
                applicantContactNoGuardian:'',
                applicantEmailId:'',
                applicantContactNoColonyLeader:'',
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

        onSelect(event)
        {
            if(event.target.value == 'Accepting')
            {
                this.selectOption='Accepting'; 
            }else{
                this.selectOption='Provisionally accepting';
            }
        },

        //Save and Edit review nursing comments
        
        
    
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
            this.getdata.addressAddln2       = data.addressAddln2;
            this.getdata.addressCity         = data.addressCity;
            this.getdata.addressDistprov     = data.addressDistprov;
            this.getdata.addressState        = data.addressState;
            this.getdata.addressPinzip       = data.addressPinzip;
            this.getdata.applicantContactNoSelf = data.applicantContactNoSelf;
            this.getdata.applicantEmailId      = data.applicantEmailId;
            this.getdata.addressCountry        = data.addressCountry;
            this.getdata.hasAdmissionLetter  = data.hasAdmissionLetter;
            this.getdata.applicationId       = data.applicationId;
            this.getdata.financialYear       = data.financialYear;
            this.getdata.applicantLeprosyAffectedMother= data.applicantLeprosyAffectedMother;
            this.getdata.applicantLeprosyAffectedFather= data.applicantLeprosyAffectedFather;
            this.getdata.applicantLeprosyAffectedSelf  = data.applicantLeprosyAffectedSelf;
            this.getdata.fullName = `${this.getdata.applicantNameF}${(this.getdata.applicantNameM)?" "+this.getdata.applicantNameM:''} ${this.getdata.applicantNameL}`;
            
         }
         
      })
      },
        getFileData(){
          const  currentUrl = window.location.pathname.split('/').reverse()[0];
            axios.get('/admin/admin-api/review-nursing-review-submit/'+currentUrl)
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
