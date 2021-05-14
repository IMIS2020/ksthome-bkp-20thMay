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
                    <li class="nav-item shadow-lg"><router-link  v-if="userId2 == 'SU-000001'" class="nav-link" to="/admin/manage-internal-users"><i class="fas fa-wrench"></i><span>Manage Users</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link  v-if="userId2 == 'SU-000001'" class="nav-link" to="#"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link  v-if="userId2 == 'SU-000001'" class="nav-link" to="/admin/manage-application-schedule"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li>
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
                                            <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-annexure-1/'+form.scholarshipType"><strong>Applicant Details</strong></router-link></li>
                                            <li class="nav-item" role="presentation" v-if="form.hasAdmissionLetter === 'NO' && form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-annexure-1/'+form.applicationId"><strong>Annexure-I</strong></router-link></li>
                                            <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                            <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                            <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                            <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-applicant-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                            <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                            <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review/'+form.applicationId"><strong>View</strong></router-link></li>
                                            <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>View</strong></router-link></li>
                                        </ul>
                                        <div class="tab-content  bg-white">
                                            <div class="tab-pane active" role="tabpanel" id="tab-1">
                                                <div class="div-inner-filed">
                                                    <div>
                                                        <div class="form-row">
                                                            <div class="col-xl-12">
                                                                <div class="card mt-2 det-sec">
                                                                    <div class="card-header">
                                                                        <h6 class="mb-0 color-mg">Personal Details</h6>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-2">
                                                                                <label>Applicant's First name:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.applicantNameF" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2">
                                                                                <label>Applicant's Middle name:</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.applicantNameM" :disabled="globalDisable">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2">
                                                                                <label>Applicant's Last name:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.applicantNameL" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                                <label>Father's full name:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.applicantFatherName" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                                <label>Mother's full name:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.applicantMotherName" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2">
                                                                                <label>Date of Birth:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="date" v-model="form.applicantDOB" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2">
                                                                                <label>Gender&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <select class="form-control form-control-sm" v-model="form.applicantGender" :disabled="globalDisable" required>
                                                                                        <option value="" disabled>--Select--</option>
                                                                                        <option value="Male">Male</option>
                                                                                        <option value="Female">Female</option>
                                                                                    </select>
                                                                                    </div>
                                                                                </div>
                                                                                    <div class="col-xl-2">
                                                                                <label>Family has a BPL card ?:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <select class="form-control form-control-sm" v-model="form.applicantHasBPLCard" :disabled="globalDisable" required>
                                                                                        <option value="" disabled>--Select--</option>
                                                                                        <option value="Yes">YES</option>
                                                                                        <option value="No">NO</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-5">
                                                                                <label>Domicile state&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <select class="form-control form-control-sm" v-model="form.applicantDomicileState" :disabled="globalDisable" required>
                                                                                        <option value="" disabled>--Select--</option>
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
                                                                            </div>

                                                                            <div class="col-xl-3 align-self-center">
                                                                                <label>Who is affected by Leprosy in the family&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedMother"  @click="check3($event)" id="formCheck-4" :disabled="globalDisable"><label class="form-check-label font-md" for="formCheck-1">Mother</label></div>
                                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedFather" @click="check2($event)" id="formCheck-2" :disabled="globalDisable"><label class="form-check-label font-md" for="formCheck-2">Father</label></div>
                                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedSelf" @click="check1($event)"  id="formCheck-3"  :disabled="globalDisable"><label class="form-check-label font-md" for="formCheck-3">Self</label></div>
                                                                                </div>
                                                                            </div>

                                                                                <div class="col-xl-5 align-self-center">
                                                                                <label>Who has disability due to Leprosy in the family (Certificate required)&nbsp;</label>
                                                                                <div class="form-group">
                                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantDisablityMother" id="formCheck-4" :disabled="applicantDisablityMotherShow"><label class="form-check-label font-md" for="formCheck-1">Mother</label></div>
                                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantDisablityFather" id="formCheck-2" :disabled="applicantDisablityFatherShow"><label class="form-check-label font-md" for="formCheck-2">Father</label></div>
                                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantDisablitySelf"   id="formCheck-3" :disabled="applicantDisablitySelfShow"><label class="form-check-label font-md" for="formCheck-3">Self</label></div>
                                                                                    <!-- <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantDisablityNone"   id="formCheck-1" :disabled="globalDisable"><label class="form-check-label font-md" for="formCheck-1">None</label></div> -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="card mt-2 det-sec">
                                                                    <div class="card-header">
                                                                        <h6 class="mb-0 color-mg">Contact Details</h6>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-5">
                                                                                <label>House No and Colony Name&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.addressAddln1" :disabled="globalDisable"  required>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-5">
                                                                                <label>Address Line 2</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.addressAddln2" :disabled="globalDisable">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2">
                                                                                <label>City/Town&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.addressCity" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                                <label>District</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.addressDistprov" :disabled="globalDisable">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-3">
                                                                                <label>State&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group"> 
                                                                                    <select class="form-control form-control-sm" v-model="form.addressState" :disabled="globalDisable" required>
                                                                                        <option value="" disabled>--Select--</option>
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
                                                                            </div>
                                                                                <div class="col-xl-3">
                                                                                    <label>PIN/ZIP Code&nbsp;(6 digits)<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="number"  v-model="form.addressPinzip" :disabled="globalDisable" maxlength="6" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                                <label>Contact no. (Self)&nbsp;<span class="text-danger">*</span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="number"  v-model="form.applicantContactNoSelf" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                                <label>Alternate Contact No&nbsp;<span class="text-danger">*</span></label>
                                                                                <div class="form-group">
                                                                                <input class="form-control form-control-sm" type="number"  v-model="form.applicantContactNoGuardian" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                                <label>Email ID&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="email" disabled v-model="form.applicantEmailId"  required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                                <label>Colony leader Full Name&nbsp;<span class="text-danger">*</span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.applicantColonyleaderName" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-xl-3">
                                                                                <label>Contact no. (colony leader)&nbsp;<span class="text-danger">*</span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="number"  v-model="form.applicantContactNoColonyLeader" :disabled="globalDisable" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12">
                                                                <div class="card mt-2 det-sec">
                                                                    <div class="card-header">
                                                                        <h6 class="mb-0 color-mg">Education Details</h6>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-12 mb-2"><span style="color:#000;" class="font-sm">Details of educational qualification: Matriculation/Higher Secondary/ Graduation: <br></span>
                                                                                <div class="table-responsive font-md">
                                                                                    <table class="table table-sm mb-0">
                                                                                        <thead class="font-sm color-mg">
                                                                                            <tr>
                                                                                                <th>Examination Level&nbsp;<span class="text-danger">*</span></th>
                                                                                                <th>Examination Passed&nbsp;<span class="text-danger">*</span><br><span><a data-toggle="modal" href="#" data-target="#others-exam-passed1" @click="addName('ExamPassed')"> </a></span></th>
                                                                                                <th>University/ Board&nbsp;<span class="text-danger">*</span><br><span><a data-toggle="modal" href="#" data-target="#others-exam-board1" @click="addName('UnivBoard')"> </a></span></th>
                                                                                                <th>Main Subjects&nbsp;<span class="text-danger">*</span></th>
                                                                                                <th>Year of Passing&nbsp;<span class="text-danger">*</span></th>
                                                                                                <th>Percentage(%)&nbsp;<span class="text-danger">*</span></th>
                                                                                                <th>Division&nbsp;<span class="text-danger">*</span></th>
                                                                                                <th>Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div class="form-group text-center mb-0" style="color:#702E2E" >
                                                                                                        <input type="hidden" v-model="form.education1ExaminationLevel" />
                                                                                                        <strong>{{getExaminationLevel10}}</strong>
                                                                                                        <!-- <select class="form-control form-control-sm" v-model="form.education1ExaminationLevel" disabled>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option value="10" selected>10th</option>
                                                                                                        </select> -->
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education1ExaminationPassed" :disabled="globalDisable" required>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option v-for="(epv,index) in examinationPassedValues10" :key="index" :value="epv.id">{{epv.value}}</option>
                                                                                                            <!-- <option value="3">Madhyamik</option>
                                                                                                            <option value="2">Higher Secondary</option>
                                                                                                            <option value="1">B.Com</option> -->
                                                                                                            <!-- <option  data-toggle="modal" data-target="#others-exam-passed1" @click="addName('ExamPassed')">Others</option> -->
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education1University" :disabled="globalDisable" required>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option v-for="(ubv,index) in universityBoardCouncilValues10" :key="index" :value="ubv.id" >{{ubv.value}}</option>
                                                                                                            <!-- <option value="3">WBBSE</option>
                                                                                                            <option value="2">WBCHSE</option>
                                                                                                            <option value="1">WBSCTVE&amp;D</option> -->
                                                                                                            <!-- <option  data-toggle="modal" data-target="#others-exam-board1" @click="addName('UnivBoard')">Others</option> -->
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <textarea class="form-control form-control-sm" placeholder="Type separated by comma" v-model="form.education1MainSubjects" :disabled="globalDisable"  maxlength="70" required></textarea>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education1YearOfPassing" :disabled="globalDisable" required>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option value="2021">2021</option>
                                                                                                            <option value="2020">2020</option>
                                                                                                            <option value="2019">2019</option>
                                                                                                            <option value="2018">2018</option>
                                                                                                            <option value="2017">2017</option>
                                                                                                            <option value="2016">2016</option>
                                                                                                            <option value="2015">2015</option>
                                                                                                            <option value="2014">2014</option>
                                                                                                            <option value="2013">2013</option>
                                                                                                            <option value="2012">2012</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education1Percentage" :disabled="globalDisable" required>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education1Division" :disabled="globalDisable" required> 
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option value="1st">1st</option>
                                                                                                            <option value="2nd">2nd</option>
                                                                                                            <option value="3rd">3rd</option>
                                                                                                            <option value="N/A">N/A</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="text-center">
                                                                                                    <span class="act-link" style="color:#808080;">
                                                                                                        <i class="fa fa-trash"></i>
                                                                                                    </span>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div class="form-group text-center mb-0" style="color:#702E2E">
                                                                                                        <input type="hidden" v-model="form.education2ExaminationLevel" />
                                                                                                        <strong>{{getExaminationLevel12}}</strong>
                                                                                                        <!-- <select class="form-control form-control-sm" v-model="form.education2ExaminationLevel" disabled>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option value="12" selected>12th</option>
                                                                                                        </select> -->
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education2ExaminationPassed" :disabled="globalDisable" required>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option v-for="(epv,index) in examinationPassedValues12" :key="index" :value="epv.id">{{epv.value}}</option>
                                                                                                            <!-- <option value="3">Madhyamik</option>
                                                                                                            <option value="2">Higher Secondary</option>
                                                                                                            <option value="1">B.Com</option> -->
                                                                                                            <!-- <option  data-toggle="modal" data-target="#others-exam-passed2" @click="addName('ExamPassed')">Others</option> -->
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <!-- <div role="dialog" tabindex="-1" class="modal fade" id="others-exam-passed2">
                                                                                                        <div class="modal-dialog modal-sm" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header py-1">
                                                                                                                    <h6 class="modal-title color-mg font-md"><strong>Add Other Examination Passes</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                                                </div>
                                                                                                                <div class="modal-body cs-modal-body">
                                                                                                                    <div class="form-row">
                                                                                                                        <div class="col-xl-12 mb-2">
                                                                                                                            <input type="hidden" class="form-control form-control-sm" v-model="domainForm.domainName" :disabled="globalDisable"/>
                                                                                                                            <div class="form-group mb-0"><label class="mb-0">Examination Passed</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" v-model="domainForm.dValue" :disabled="globalDisable"/>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-xl-12 mb-2">
                                                                                                                            <div class="form-group mb-0"><label class="mb-0">Examination Passed Desc</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" v-model="domainForm.dDesc" :disabled="globalDisable"/>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="button" @click="saveDomainValues"><strong>Add</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> -->
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education2University" :disabled="globalDisable" required>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option v-for="(ubv,index) in universityBoardCouncilValues12" :key="index" :value="ubv.id">{{ubv.value}}</option>
                                                                                                            <!-- <option value="3">WBBSE</option>
                                                                                                            <option value="2">WBCHSE</option>
                                                                                                            <option value="1">WBSCTVE&amp;D</option> -->
                                                                                                            <!-- <option  data-toggle="modal" data-target="#others-exam-board2"  @click="addName('UnivBoard')">Others</option> -->
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <!-- <div role="dialog" tabindex="-1" class="modal fade" id="others-exam-board2">
                                                                                                        <div class="modal-dialog modal-sm" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header py-1">
                                                                                                                    <h6 class="modal-title color-mg font-md"><strong>Add Other Examination Board</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                                                </div>
                                                                                                                <div class="modal-body cs-modal-body">
                                                                                                                    <div class="form-row">
                                                                                                                        <div class="col-xl-12 mb-2">
                                                                                                                            <input type="hidden" class="form-control form-control-sm" v-model="domainForm.domainName" :disabled="globalDisable"/>
                                                                                                                            <div class="form-group mb-0"><label class="mb-0">Examination Board</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" v-model="domainForm.dValue" :disabled="globalDisable"/>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-xl-12 mb-2">
                                                                                                                            <div class="form-group mb-0"><label class="mb-0">Examination Board Desc</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" v-model="domainForm.dDesc" :disabled="globalDisable"/>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="button" @click="saveDomainValues"><strong>Add</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> -->
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <textarea class="form-control form-control-sm" placeholder="Type separated by comma" v-model="form.education2MainSubjects" :disabled="globalDisable"  maxlength="70" required></textarea>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education2YearOfPassing" :disabled="globalDisable" required>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option value="2021">2021</option>
                                                                                                            <option value="2020">2020</option>
                                                                                                            <option value="2019">2019</option>
                                                                                                            <option value="2018">2018</option>
                                                                                                            <option value="2017">2017</option>
                                                                                                            <option value="2016">2016</option>
                                                                                                            <option value="2015">2015</option>
                                                                                                            <option value="2014">2014</option>
                                                                                                            <option value="2013">2013</option>
                                                                                                            <option value="2012">2012</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education2Percentage" :disabled="globalDisable" required>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education2Division" :disabled="globalDisable" required>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option value="1st">1st</option>
                                                                                                            <option value="2nd">2nd</option>
                                                                                                            <option value="3rd">3rd</option>
                                                                                                            <option value="N/A">N/A</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="text-center">
                                                                                                    <span class="act-link" style="color:#808080;">
                                                                                                        <i class="fa fa-trash"></i>
                                                                                                    </span>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr v-if="form.scholarshipType == 'HHDLS'">
                                                                                                <td>
                                                                                                    <div class="form-group text-center mb-0" style="color:#702E2E">
                                                                                                        <input type="hidden" v-model="form.education3ExaminationLevel" />
                                                                                                        <strong>{{getExaminationLevel13}}</strong>
                                                                                                        <!-- <select class="form-control form-control-sm" v-model="form.education3ExaminationLevel" disabled>
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option value="13" selected>Graduation</option>
                                                                                                        </select> -->
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education3ExaminationPassed" :disabled="globalDisable" >
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option v-for="(epv,index) in examinationPassedValues13" :key="index" :value="epv.id">{{epv.value}}</option>
                                                                                                            <!-- <option value="Madhyamik">Madhyamik</option>
                                                                                                            <option value="Higher Secondary">Higher Secondary</option>
                                                                                                            <option value="B.Com">B.Com</option> -->
                                                                                                            <!-- <option  data-toggle="modal" data-target="#others-exam-passed3" @click="addName('ExamPassed')">Others</option> -->
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <!-- <div role="dialog" tabindex="-1" class="modal fade" id="others-exam-passed3">
                                                                                                        <div class="modal-dialog modal-sm" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header py-1">
                                                                                                                    <h6 class="modal-title color-mg font-md"><strong>Add Other Examination Passed</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                                                </div>
                                                                                                                <div class="modal-body cs-modal-body">
                                                                                                                    <div class="form-row">
                                                                                                                        <div class="col-xl-12 mb-2">
                                                                                                                                <input type="hidden" class="form-control form-control-sm" v-model="domainForm.domainName" :disabled="globalDisable"/>
                                                                                                                            <div class="form-group mb-0"><label class="mb-0">Examination Passed</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" v-model="domainForm.dValue" :disabled="globalDisable"/>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-xl-12 mb-2">
                                                                                                                            <div class="form-group mb-0"><label class="mb-0">Examination Passed Desc</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" v-model="domainForm.dDesc" :disabled="globalDisable"/>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="button" @click="saveDomainValues"><strong>Add</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> -->
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education3University" :disabled="globalDisable" >
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option v-for="(ubv,index) in universityBoardCouncilValues13" :key="index" :value="ubv.id">{{ubv.value}}</option>
                                                                                                            <!-- <option value="WBBSE">WBBSE</option>
                                                                                                            <option value="WBCHSE">WBCHSE</option>
                                                                                                            <option value="WBSCTVE&D">WBSCTVE&amp;D</option> -->
                                                                                                            <!-- <option  data-toggle="modal" data-target="#others-exam-board3" @click="addName('UnivBoard')">Others</option> -->
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <!-- <div role="dialog" tabindex="-1" class="modal fade" id="others-exam-board3">
                                                                                                        <div class="modal-dialog modal-sm" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header py-1">
                                                                                                                    <h6 class="modal-title color-mg font-md"><strong>Add Other Examination Board</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                                                </div>
                                                                                                                <div class="modal-body cs-modal-body">
                                                                                                                    <div class="form-row">
                                                                                                                        <div class="col-xl-12 mb-2">
                                                                                                                            <input type="hidden" class="form-control form-control-sm" v-model="domainForm.domainName" :disabled="globalDisable"/>
                                                                                                                            <div class="form-group mb-0"><label class="mb-0">Examination Board</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" v-model="domainForm.dValue" :disabled="globalDisable"/>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-xl-12 mb-2">
                                                                                                                            <div class="form-group mb-0"><label class="mb-0">Examination Board Desc</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" v-model="domainForm.dDesc" :disabled="globalDisable"/>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="button" @click="saveDomainValues"><strong>Add</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> -->
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <textarea class="form-control form-control-sm" placeholder="Type separated by comma" v-model="form.education3MainSubjects" :disabled="globalDisable"  maxlength="70" ></textarea>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education3YearOfPassing" :disabled="globalDisable" >
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option value="2021">2021</option>
                                                                                                            <option value="2020">2020</option>
                                                                                                            <option value="2019">2019</option>
                                                                                                            <option value="2018">2018</option>
                                                                                                            <option value="2017">2017</option>
                                                                                                            <option value="2016">2016</option>
                                                                                                            <option value="2015">2015</option>
                                                                                                            <option value="2014">2014</option>
                                                                                                            <option value="2013">2013</option>
                                                                                                            <option value="2012">2012</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education3Percentage" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.education3Division" :disabled="globalDisable" >
                                                                                                            <option value="" disabled>-- select --</option>
                                                                                                            <option value="1st">1st</option>
                                                                                                            <option value="2nd">2nd</option>
                                                                                                            <option value="3rd">3rd</option>
                                                                                                            <option value="N/A">N/A</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="text-center">
                                                                                                    <a v-if="globalDisable == false" class="act-link" @click="deleteFile()">
                                                                                                            <i class="fa fa-trash"></i>
                                                                                                    </a>
                                                                                                        <a v-else class="act-link" style="color:#808080;">
                                                                                                        <i class="fa fa-trash"></i>
                                                                                                    </a>

                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- <span class="m-auto text-danger font-sm">Note: Click on 'Add new values' above to add values to the list if required. </span> -->
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="card mt-2 det-sec">
                                                                    <div class="card-header">
                                                                        <h6 class="mb-0 color-mg">Admission Details</h6>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-4 align-self-center mb-2">
                                                                                <p class="color-mg font-md mb-0">
                                                                                    <strong>Have you been selected for a course?&nbsp;<span class="text-danger"><strong>*</strong></span></strong><br>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xl-2 align-self-center mb-2">
                                                                                <div class="form-group mb-0">
                                                                                    <select class="form-control form-control-sm" v-model="form.hasAdmissionLetter" required @change="onSelect($event)" :disabled="globalDisable">
                                                                                        <option value="" disabled>--Select--</option>
                                                                                        <option value="YES">YES</option>
                                                                                        <option value="NO">NO</option>
                                                                                    </select>
                                                                                </div> 
                                                                            </div>
                                                                            <!-- <span class="font-sm color-mg mt-2"><strong> &nbsp; (If 'YES' Annexure-I will be disabled.If 'NO' fill up Annexure-I)</strong></span> -->
                                                                            <span class="text-danger font-sm mt-2">&nbsp; (If 'YES' Annexure-I will be disabled.&nbsp;If 'NO' fill up Annexure-I)</span>
                                                                            <div class="col-xl-12 mb-2">
                                                                                <span style="color:#000;" class="font-sm">Details of the course you have been selected for :&nbsp;<br></span>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                                <label>Degree/Cerificate&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                    <div class="form-group mb-0">
                                                                                    <select class="form-control form-control-sm" v-model="form.courseLevelValueId" :disabled="globalDisable" @click="getHHDLSData($event)" required>
                                                                                        <option value="" disabled>-- select --</option>
                                                                                        <option v-for="(ucl,index) in universityCourseLevel" :key="index" :value="ucl.id" selected>{{ucl.description}}</option>
                                                                                    </select>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                                <label v-if="form.scholarshipType=='HHDLS'">Course Name&nbsp;<span class="text-danger"><strong>*</strong></span><a data-toggle="modal" href="#" v-if="inputDisabled == false" data-target="#others-course-name" @click="addName('CourseName')"> </a></label>
                                                                                <label v-if="form.scholarshipType=='Nursing'">Course Name&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group mb-0" v-if="form.scholarshipType=='HHDLS'">
                                                                                    <select class="form-control form-control-sm" v-model="form.courseNameValueId" :disabled="globalDisable" required>
                                                                                        <option value="" disabled>-- select --</option>
                                                                                        <option v-for="(ucn,index) in universityCourseName" :key="index" :value="ucn.id" selected>{{ucn.value}}</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group mb-0" v-if="form.scholarshipType=='Nursing'">
                                                                                    <select class="form-control form-control-sm" v-model="form.courseNameValueId" :disabled="globalDisable" required>
                                                                                        <option value="" disabled>-- select --</option>
                                                                                        <option v-for="(ucn,index) in universityCourseName" :key="index" :value="ucn.id" selected>{{ucn.value}}</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6">
                                                                                <label>Name of the institute&nbsp;<span class="text-danger"><strong>*</strong></span> <a data-toggle="modal" href="#" v-if="inputDisabled == false" data-target="#others-add-institute" > </a> </label>
                                                                                <div class="form-group mb-0">
                                                                                    <select class="form-control form-control-sm" required @change="onChangeIns($event)" v-model="form.instituteId" :disabled="globalDisable">
                                                                                        <option v-for="(i,index) in insData" :key="index" :value="i.id" selected>{{i.instituteName}} - {{i.get_address.addressCity}}, {{i.get_address.addressState}}</option>
                                                                                        <!-- <option  data-toggle="modal" data-target="#others-add-institute" >Others</option> -->
                                                                                        <option value="" disabled>-- select --</option>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <!-- <div class="col-xl-4">
                                                                                <label>Address Line 1&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insAddressAddln1"  disabled >
                                                                                </div>
                                                                            </div> -->
                                                                            <!-- <div class="col-xl-4">
                                                                                <label>Address Line 2</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insAddressAddln2" disabled>
                                                                                </div>
                                                                            </div> -->
                                                                            <div class="col-xl-2">
                                                                                <label>City/Town</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insAddressCity" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2">
                                                                                <label>District</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insAddressDistprov" disabled>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-3">
                                                                                <label>State&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insAddressState" disabled>
                                                                                    <!-- <select class="form-control form-control-sm" v-model="form.insAddressState" disabled>
                                                                                        <option value="" disabled>--Select--</option>
                                                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                                        <option value="Assam">Assam</option>
                                                                                        <option value="Bihar">Bihar</option>
                                                                                        <option value="Chandigarh">Chandigarh</option>
                                                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                                                        <option value="Daman and Diu">Daman and Diu</option>
                                                                                        <option value="Delhi">Delhi</option>
                                                                                        <option value="Lakshadweep">Lakshadweep</option>
                                                                                        <option value="Puducherry">Puducherry</option>
                                                                                        <option value="Goa">Goa</option>
                                                                                        <option value="Gujarat">Gujarat</option>
                                                                                        <option value="Haryana">Haryana</option>
                                                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                                        <option value="Jharkhand">Jharkhand</option>
                                                                                        <option value="Karnataka">Karnataka</option>
                                                                                        <option value="Kerala">Kerala</option>
                                                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                                        <option value="Maharashtra">Maharashtra</option>
                                                                                        <option value="Manipur">Manipur</option>
                                                                                        <option value="Meghalaya">Meghalaya</option>
                                                                                        <option value="Mizoram">Mizoram</option>
                                                                                        <option value="Nagaland">Nagaland</option>
                                                                                        <option value="Odisha">Odisha</option>
                                                                                        <option value="Punjab">Punjab</option>
                                                                                        <option value="Rajasthan">Rajasthan</option>
                                                                                        <option value="Sikkim">Sikkim</option>
                                                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                                                        <option value="Telangana">Telangana</option>
                                                                                        <option value="Tripura">Tripura</option>
                                                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                                                        <option value="West Bengal">West Bengal</option>
                                                                                    </select> -->
                                                                                </div>
                                                                            </div>
                                                                                <!-- <div class="col-xl-3">
                                                                                <label>PIN/ZIP Code&nbsp;<span class="text-danger"></span></label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insAddressPinzip" disabled>
                                                                                </div>
                                                                            </div> -->
                                                                            <div class="col-xl-4" v-if="form.scholarshipType=='Nursing'"><label>Whether recognized by Indian Nursing Council&nbsp;<span class="text-danger"><strong>*</strong></span><br></label>
                                                                                <div class="form-group">
                                                                                    <select class="form-control form-control-sm" v-model="form.recognizedByINC" :disabled="inputDisabled" required>
                                                                                        <option value="" disabled >--Select--</option>
                                                                                        <option value="YES">YES</option>
                                                                                        <option value="NO">NO</option>
                                                                                        <option value="Don't know">Don't know</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="card mt-2 det-sec">
                                                                    <div class="card-header">
                                                                        <h6 class="mb-0 color-mg">Miscellaneous Details</h6>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-12 mb-2">
                                                                                <span style="color:#000;" class="font-sm">Kindly mention the details of your siblings who have received S-ILF Scholarships in the past.<br>(If no, leave it blank).<br></span>
                                                                                <div class="table-responsive font-md">
                                                                                    <table class="table table-sm mb-0">
                                                                                        <thead class="color-mg">
                                                                                            <tr>
                                                                                                <th>Name</th>
                                                                                                <th>Relationship</th>
                                                                                                <th>Course</th>
                                                                                                <th>Selection year</th>
                                                                                                <th class="text-center">Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <input type="hidden" v-model="form.ms1" />
                                                                                                    <div class="form-group mb-0">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.miscName1" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.mRelationship1" :disabled="globalDisable" >
                                                                                                            <option value="" disabled>--Select--</option>
                                                                                                            <option value="Brother">Brother</option>
                                                                                                            <option value="Sister">Sister</option>
                                                                                                            
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.miscCourse1" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.miscYear1" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td class="text-center">
                                                                                                    <!-- <a v-if="globalDisable == false" class="act-link" @click="deleteMis(1)">
                                                                                                        <i class="fa fa-trash"></i>
                                                                                                    </a> -->
                                                                                                    <a v-if="globalDisable == false"  @click="deleteMis(1)"><i class="fa fa-trash color-mg font-l"></i></a>
                                                                                                    <a class="act-link" style="color:#808080;" v-else>
                                                                                                        <i class="fa fa-trash"></i>
                                                                                                    </a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <input type="hidden" v-model="form.ms2" />
                                                                                                    <div class="form-group mb-0">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.miscName2" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.mRelationship2" :disabled="globalDisable" >
                                                                                                            <option value="" disabled>--Select--</option>
                                                                                                            <option value="Brother">Brother</option>
                                                                                                            <option value="Sister">Sister</option>
                                                                                                            
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.miscCourse2" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.miscYear2" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td class="text-center">
                                                                                                    <!-- <a v-if="globalDisable == false" class="act-link" @click="deleteMis(2)">
                                                                                                        <i class="fa fa-trash"></i>
                                                                                                    </a> -->

                                                                                                        <a v-if="globalDisable == false"  @click="deleteMis(2)"><i class="fa fa-trash color-mg font-l"></i></a>
                                                                                                    <a class="act-link" style="color:#808080;" v-else>
                                                                                                        <i class="fa fa-trash"></i>
                                                                                                    </a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <input type="hidden" v-model="form.ms3" />
                                                                                                    <div class="form-group mb-0">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.miscName3" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.mRelationship3" :disabled="globalDisable" >
                                                                                                            <option value="" disabled>--Select--</option>
                                                                                                            <option value="Brother">Brother</option>
                                                                                                            <option value="Sister">Sister</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.miscCourse3" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <div class="form-group mb-0">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.miscYear3" :disabled="globalDisable">
                                                                                                    </div>
                                                                                                </td>

                                                                                                <td class="text-center">
                                                                                                    <!-- <a v-if="globalDisable == false" class="act-link" @click="deleteMis(3)">
                                                                                                        <i class="fa fa-trash"></i>
                                                                                                    </a> -->

                                                                                                        <a v-if="globalDisable == false" @click="deleteMis(3)"><i class="fa fa-trash color-mg font-l"></i></a>
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
                                    </div>
                                </div>
                            </div>
                           
                            <!-- <div class="col-xl-2 offset-xl-0 my-2">
                                <router-link class="btn btn-danger btn-block btn-sm" type="button" to="/admin/manage-application-details"><strong>Back</strong></router-link>
                            </div> -->
                           
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
export default {
    data () {
        return {
            inputDisabled: true,
            globalDisable: true,
            // csrf:   document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            userId2    : document.querySelector("meta[name='userId']").getAttribute('content'),
            firstname  : document.querySelector("meta[name='firstname']").getAttribute('content'),
            middlename : document.querySelector("meta[name='middlename']").getAttribute('content'),
            lastname   : document.querySelector("meta[name='lastname']").getAttribute('content'),

            userId: '',
            applicantDisablitySelfShow : true,
            applicantDisablityMotherShow: true,
            applicantDisablityFatherShow: true,
            getExaminationLevel: {},
            getExaminationLevel10 : '',
            getExaminationLevel12 : '',
            getExaminationLevel13 : '',
            examinationPassedValues: {},
            examinationPassedValues10:{},
            examinationPassedValues12:{},
            examinationPassedValues13:{},
            universityBoardCouncilValues:{},
            universityBoardCouncilValues10:{},
            universityBoardCouncilValues12:{},
            universityBoardCouncilValues13:{},
            universityCourseLevel: {},
            universityCourseName: {},
            domainForm: {
                domianLevel : '',
                domainName : '',
                dValue : '',
                dDesc : '',
            },
            form: {
                // csrf:   document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                applicationId:'',
                scholarshipType: '',
                applicantNameF:'',
                applicantNameM:'',
                applicantNameL:'',
                applicantFatherName:'',
                applicantMotherName:'',
                applicantDOB:'',
                applicantGender:'',
                applicantLeprosyAffectedSelf: false,
                applicantLeprosyAffectedFather: false,
                applicantLeprosyAffectedMother: false,
                applicantDisablitySelf: false,
                applicantDisablityFather: false,
                applicantDisablityMother: false,
                applicantHasBPLCard:'',
                applicantDomicileState:'',
                applicantColonyName:'',
                applicantColonyleaderName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
                applicantContactNoSelf:'',
                applicantContactNoGuardian:'',
                applicantEmailId:'',
                applicantContactNoColonyLeader:'',
                financialYear : '',
                //education level 10
                education1ExaminationLevel:'',
                education1ExaminationPassed: '',
                education1University: '',
                education1MainSubjects: '',
                education1YearOfPassing: '',
                education1Percentage: '',
                education1Division: '',
                //education level 12
                education2ExaminationLevel:'',
                education2ExaminationPassed: '',
                education2University: '',
                education2MainSubjects: '',
                education2YearOfPassing: '',
                education2Percentage: '',
                education2Division: '',
                //education level graduate for HHDLS only (13)
                education3ExaminationLevel:'',
                education3ExaminationPassed: '',
                education3University: '',
                education3MainSubjects: '',
                education3YearOfPassing: '',
                education3Percentage: '',
                education3Division: '',
                
                //end Education
                //additional qualification
                additional1ExaminationLevel:'10',
                additional1ExaminationPassed: '',
                additional1University: '',
                additional1MainSubjects: '',
                additional1YearOfPassing: '',
                additional1Percentage: '',
                additional1Division: '',
                additional2ExaminationLevel:'12',
                additional2ExaminationPassed: '',
                additional2University: '',
                additional2MainSubjects: '',
                additional2YearOfPassing: '',
                additional2Percentage: '',
                additional2Division: '',
                //end of qualification
                
                hasAdmissionLetter:'YES',
                courseLevelValueId: '',
                courseNameValueId: '',
                instituteId:'',
                // insCourse:'',
                // insName:'',
                insAddressAddln1:'',
                insAddressAddln2:'',
                insAddressCity:'',
                insAddressDistprov:'',
                insAddressState:'',
                insAddressPinzip:'',
                recognizedByINC:'',
                miscName1:'',
                miscCourse1:'',
                miscYear1:'',
                miscName2:'',
                miscCourse2:'',
                miscYear2:'',
                miscName3:'',
                miscCourse3:'',
                miscYear3:'',
                mRelationship1:"",
                mRelationship2:"",
                mRelationship3:"",
                ms1: "",
                ms2: "",
                ms3: "",
                appIdShow: '',
            },
            getdata: {},
            errors :'',
            error:[],
            //institute
            insData:{},
            insId: '',
            insForm: {
                insName:'',
                insType:'',
                insAddressAddln1:'',
                insAddressAddln2:'',
                insAddressCity:'',
                insAddressDistprov:'',
                insAddressState:'',
                insAddressPinzip:'',
            },
        }
    },
    methods: {
         
            async readApplicationForm() 
            {
                let applicationId = window.location.pathname.split('/').reverse()[0];
                
                axios.get(`/admin/admin-api/get-application-form-data/${applicationId}`)
                .then(response => {
                    if(response.data['return'])
                    {
                        this.$router.push({ 
                            path:`/manage-my-application`,
                        });
                        this.$fire({
                            position: 'top',
                            icon: 'Error',
                            title: "New application no allowed as You already have an application for this schloarship type",
                            showConfirmButton: false,
                            timer: 3500
                        })
                    }
                    if (response.data['success']) {
                        this.form.applicationId=response.data['data'][0][0].schApplicationId;
                        this.form.scholarshipType=response.data['data'][0][0].scholarshipType;
                        this.form.applicantNameF=response.data['data'][0][0].applicantNameF;
                        this.form.applicantNameM=response.data['data'][0][0].applicantNameM;
                        this.form.applicantNameL=response.data['data'][0][0].applicantNameL;
                        this.form.applicantFatherName=response.data['data'][0][0].applicantFatherName;
                        this.form.applicantMotherName=response.data['data'][0][0].applicantMotherName;
                        this.form.applicantDOB=response.data['data'][0][0].applicantDOB;
                        this.form.applicantGender=response.data['data'][0][0].applicantGender,
                        this.form.applicantLeprosyAffectedSelf=response.data['data'][0][0].applicantLeprosyAffectedSelf;
                        this.form.applicantLeprosyAffectedFather=response.data['data'][0][0].applicantLeprosyAffectedFather;
                        this.form.applicantLeprosyAffectedMother=response.data['data'][0][0].applicantLeprosyAffectedMother;
                        this.form.applicantDisablityMother         = response.data['data'][0][0].applicantDisablityMother; 
                        this.form.applicantDisablityFather         = response.data['data'][0][0].applicantDisablityFather; 
                        this.form.applicantDisablitySelf           = response.data['data'][0][0].applicantDisablitySelf;
                        this.form.applicantHasBPLCard=response.data['data'][0][0].applicantHasBPLCard;
                        this.form.applicantDomicileState=response.data['data'][0][0].applicantDomicileState;
                        this.form.addressAddln1=response.data['data'][0][0].get_address.addressAddln1;
                        this.form.addressAddln2=response.data['data'][0][0].get_address.addressAddln2;
                        this.form.addressCity=response.data['data'][0][0].get_address.addressCity;
                        this.form.addressDistprov=response.data['data'][0][0].get_address.addressDistprov;
                        this.form.addressState=response.data['data'][0][0].get_address.addressState;
                        this.form.addressPinzip=response.data['data'][0][0].get_address.addressPinzip;
                        this.form.applicantContactNoSelf=response.data['data'][0][0].applicantContactNoSelf;
                        this.form.applicantContactNoGuardian=response.data['data'][0][0].applicantContactNoGuardian;
                        this.form.applicantEmailId=response.data['data'][0][0].applicantEmailId;
                        this.form.applicantContactNoColonyLeader=response.data['data'][0][0].applicantContactNoColonyLeader;
                        this.form.financialYear = response.data['data'][0][0].financialYear;  
                        this.form.hasAdmissionLetter = response.data['data'][0][0].hasAdmissionLetter;
                        this.form.appStatus = response.data['data'][0][0].appStatus;
                        this.form.applicantColonyleaderName = response.data['data'][0][0].applicantColonyLeaderName;
                        this.insForm.insType = response.data['data'][0][0].scholarshipType;
                        this.form.appIdShow = response.data['data'][0][0].appIdShow;
                        this.readInsValue(this.form.scholarshipType);
                        this.readDomainValues(this.form.scholarshipType);
                        
                        
                        if(this.form.hasAdmissionLetter == 'YES') {
                            this.inputDisabled = false; 
                            // this.form.insCourse=response.data['data'][0][0].get_institute.,
                            this.form.instituteId=response.data['data'][0][0].instituteId,
                            this.dataIns(response.data['data'][0][0].instituteId),
                            this.form.courseLevelValueId = response.data['data'][0][0].courseLevelValueId,
                            this.form.courseNameValueId = response.data['data'][0][0].courseNameValueId,
                            // this.form.insAddressAddln1=response.data['data'][0][0].courseNameValue,
                            // this.form.insAddressAddln2=response.data['data'][0][0].get_institute.addressAddln2,
                            // this.form.insAddressCity=response.data['data'][0][0].get_institute.addressCity,
                            // this.form.insAddressDistprov=response.data['data'][0][0].get_institute.addressDistprov,
                            // this.form.insAddressState=response.data['data'][0][0].get_institute.addressState,
                            // this.form.insAddressPinzip=response.data['data'][0][0].get_institute.addressPinzip,
                            this.getHHDLSData2(this.form.courseLevelValueId);
                            this.form.recognizedByINC=response.data['data'][0][0].recognizedByINC;
                        } else {
                            this.inputDisabled = true;
                        };
                        
                        //education level 10
                        if(response.data['data'][1][0].get_exam_level_domain_values.id == 1){
                                // this.form.education1ExaminationLevel='10',
                                this.form.education1ExaminationPassed= response.data['data'][1][0].get_exam_passed_domain_values.id,
                                this.form.education1University= response.data['data'][1][0].get_exam_board_domain_values.id,
                                this.form.education1MainSubjects= response.data['data'][1][0].mainSubjects,
                                this.form.education1YearOfPassing= response.data['data'][1][0].yearOfPassing,
                                this.form.education1Percentage= response.data['data'][1][0].percentage,
                                this.form.education1Division= response.data['data'][1][0].division;
                        };
                        //education level 12
                        if(response.data['data'][1][1].get_exam_level_domain_values.id == 2){
                               // this.form.education2ExaminationLevel='12',
                                this.form.education2ExaminationPassed= response.data['data'][1][1].get_exam_passed_domain_values.id,
                                this.form.education2University= response.data['data'][1][1].get_exam_board_domain_values.id,
                                this.form.education2MainSubjects= response.data['data'][1][1].mainSubjects,
                                this.form.education2YearOfPassing= response.data['data'][1][1].yearOfPassing,
                                this.form.education2Percentage= response.data['data'][1][1].percentage,
                                this.form.education2Division= response.data['data'][1][1].division;
                        };
                        //education level graduate for HHDLS only (13)
                        if(this.form.scholarshipType == 'HHDLS')
                        {
                            if(response.data['data'][1][2].get_exam_level_domain_values.id == 3){
                                // this.form.education3ExaminationLevel='13',
                                    this.form.education3ExaminationPassed= response.data['data'][1][2].get_exam_passed_domain_values.id,
                                    this.form.education3University= response.data['data'][1][2].get_exam_board_domain_values.id,
                                    this.form.education3MainSubjects= response.data['data'][1][2].mainSubjects,
                                    this.form.education3YearOfPassing= response.data['data'][1][2].yearOfPassing,
                                    this.form.education3Percentage= response.data['data'][1][2].percentage,
                                    this.form.education3Division= response.data['data'][1][2].division;
                            };
                        }
                  
                    } 
                    
                })
                axios.get(`/admin/admin-api/get-application-form-data/${applicationId}`)
                .then(response => {
                    if (response.data['success']) {
                        
                        this.form.miscName1= response.data['data'][2][0].name;
                        this.form.mRelationship1 = response.data['data'][2][0].relationship; 
                        this.form.miscCourse1= response.data['data'][2][0].course;
                        this.form.miscYear1= response.data['data'][2][0].year;
                        this.form.ms1 = response.data['data'][2][0].id;

                        this.form.miscName2= response.data['data'][2][1].name;
                        this.form.mRelationship2 = response.data['data'][2][1].relationship;
                        this.form.miscCourse2= response.data['data'][2][1].course;
                        this.form.miscYear2= response.data['data'][2][1].year;
                        this.form.ms2 = response.data['data'][2][1].id;
                        

                        this.form.miscName3= response.data['data'][2][2].name;
                        this.form.mRelationship3 = response.data['data'][2][2].relationship;
                        this.form.miscCourse3= response.data['data'][2][2].course;
                        this.form.miscYear3= response.data['data'][2][2].year;
                        this.form.ms3 = response.data['data'][2][2].id; 
                    } 
                    else {
                        console.log(response.data['msg'])
                    }
                })
            },
            
           
            readInitialDomainValues()
            {
                axios.get('/admin/admin-api/domain/examinationLevel')
                    .then(response => {
                        this.getExaminationLevel= response.data;
                        // this.form.education1ExaminationLevel = response.data[0].id;
                    });
                axios.get('/admin/admin-api/domain/examinationLevel10')
                    .then(response => {
                        this.getExaminationLevel10= response.data[0].description;
                        this.form.education1ExaminationLevel = response.data[0].id;
                    });
                axios.get('/admin/admin-api/domain/examinationLevel12')
                    .then(response => {
                        this.getExaminationLevel12= response.data[0].description;
                        this.form.education2ExaminationLevel = response.data.id;
                    });
                axios.get('/admin/admin-api/domain/examinationLevel13')
                    .then(response => {
                        this.getExaminationLevel13= response.data[0].description;
                        this.form.education3ExaminationLevel = response.data[0].id;
                    });
                
                 //Examination Passed
                axios.get('/admin/admin-api/domain/examinationPassed10')
                    .then(response => {
                        this.examinationPassedValues10= response.data;
                    });
                axios.get('/admin/admin-api/domain/examinationPassed12')
                    .then(response => {
                        this.examinationPassedValues12= response.data;
                    });
                axios.get('/admin/admin-api/domain/examinationPassed13')
                    .then(response => {
                        this.examinationPassedValues13= response.data;
                    });
                 //Board and council
                axios.get('/admin/admin-api/domain/universityBoardCouncil')
                    .then(response => {
                        this.universityBoardCouncilValues= response.data;
                    });
                axios.get('/admin/admin-api/domain/universityBoardCouncil10')
                    .then(response => {
                        this.universityBoardCouncilValues10= response.data;
                    });
                axios.get('/admin/admin-api/domain/universityBoardCouncil12')
                    .then(response => {
                        this.universityBoardCouncilValues12= response.data;
                    });
                axios.get('/admin/admin-api/domain/universityBoardCouncil13')
                    .then(response => {
                        this.universityBoardCouncilValues13= response.data;
                    });
                //Course Level
                // console.log(this.form.scholarshipType)
                // if(this.form.scholarshipType == 'HHDLS')
                // {
                //     console.log("test")
                    
                    
                // }else 
                // {
                   
                // };
            },
            readDomainValues(type)
            {
                
                if(type == 'HHDLS')
                {
                    // axios.get('/api/domain/course-name/hhdls')
                    //     .then(response => {
                    //         this.universityCourseName = response.data;
                    //     });   
                    axios.get('/admin/admin-api/domain/course-level/hhdls')
                        .then(response => {
                            this.universityCourseLevel= response.data;
                        });
                }else 
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
           
                addName(data)
                {
                    this.domainForm.domainName = data;
                },
            //institute
                readInsValue(type)
                {
                    axios.get('/admin/admin-api/institute/get-data/'+type)
                        .then(response => {
                            this.insData = response.data;
                        });
                },
          
            onChangeIns(event)
            {
                this.insId = event.target.value;
                console.log(this.insId);
                if(this.insId != 'Others'){
                   axios.get('/admin/admin-api/institute/get-details/'+this.insId)
                        .then(response => {
                            if (response.data['success']) {
                                this.form.insAddressAddln1 = response.data['data'][0].get_address.addressAddln1;
                                this.form.insAddressAddln2 = response.data['data'][0].get_address.addressAddln2;
                                this.form.insAddressCity = response.data['data'][0].get_address.addressCity;
                                this.form.insAddressDistprov = response.data['data'][0].get_address.addressDistprov;
                                this.form.insAddressState = response.data['data'][0].get_address.addressState;
                                this.form.insAddressPinzip = response.data['data'][0].get_address.addressPinzip;
                            } else {
                                console.log(response.data['msg'])
                            }
                        }).catch(error => this.errorMsg(error.response.status))
                    
                }
            },
            dataIns(id)
            {
                
                if(this.insId != 'Others'){
                    
                    if(id == '')
                    {
                        this.form.insAddressAddln1 = '';
                        this.form.insAddressAddln2 = '';
                        this.form.insAddressCity = '';
                        this.form.insAddressDistprov = '';
                        this.form.insAddressState = '';
                        this.form.insAddressPinzip = '';
                    }else{
                        axios.get('/admin/admin-api/institute/get-details/'+id)
                        .then(response => {
                            if (response.data['success']) {
                                this.form.insAddressAddln1 = response.data['data'][0].get_address.addressAddln1;
                                this.form.insAddressAddln2 = response.data['data'][0].get_address.addressAddln2;
                                this.form.insAddressCity = response.data['data'][0].get_address.addressCity;
                                this.form.insAddressDistprov = response.data['data'][0].get_address.addressDistprov;
                                this.form.insAddressState = response.data['data'][0].get_address.addressState;
                                this.form.insAddressPinzip = response.data['data'][0].get_address.addressPinzip;
                            } else {
                                console.log(response.data['msg'])
                            }
                        }).catch(error => this.errorMsg(error.response.status))
                    }
                }
            },
            check1(event)
            {
                 
                if(event.target.value == 'on')
                {
                    this.applicantDisablitySelfShow = false;
                  
                }
                    this.applicantDisablitySelfShow = this.form.applicantLeprosyAffectedSelf;
                    this.form.applicantDisablitySelf = false;
                
               
            },
            check2(event)
            {
                if(event.target.value == 'on')
                {
                    this.applicantDisablityFatherShow = false;
                   
                }
                    this.applicantDisablityFatherShow = this.form.applicantLeprosyAffectedFather;
                    this.form.applicantDisablityFather = false;
                
            },
            check3(event)
            {
                if(event.target.value == 'on')
                {
                    this.applicantDisablityMotherShow = false;
                  
                }
                    this.applicantDisablityMotherShow = this.form.applicantLeprosyAffectedMother;
                    this.form.applicantDisablityMother = false;
            },
            getHHDLSData(event)
            {
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
            deleteFile()
            {
                this.form.education3ExaminationLevel='',
                this.form.education3ExaminationPassed= '',
                this.form.education3University= '',
                this.form.education3MainSubjects= '',
                this.form.education3YearOfPassing= '',
                this.form.education3Percentage='',
                this.form.education3Division= '';
            },
            chcekUpDisable()
            {
                this.applicantDisablityFatherShow = !this.form.applicantLeprosyAffectedFather;
                this.applicantDisablityMotherShow = !this.form.applicantLeprosyAffectedMother;
                this.applicantDisablitySelfShow = !this.form.applicantLeprosyAffectedSelf;
            },
            deleteMis(index)
            {
                switch(index)
                {
                    case 1:
                        this.form.miscName1='';
                        this.form.miscCourse1='';
                        this.form.miscYear1='';
                        this.form.mRelationship1="";
                    break;

                    case 2:
                        this.form.miscName2='';
                        this.form.miscCourse2='';
                        this.form.miscYear2='';
                        this.form.mRelationship2="";
                    break;

                    case 3:
                        this.form.miscName3='';
                        this.form.miscCourse3='';
                        this.form.miscYear3='';
                        this.form.mRelationship3="";
                    break;
                }
                
            },
            logout()
            {
                axios.get('/admin/logout').then(function(){
                    document.location.href = "/admin/login";
                })
            },

         },
         computed:{
             
             
         },
         created()
         {
            this.readApplicationForm();
            // this.checkNewScholarshipType();
            this.readInitialDomainValues();
            // this.chcekUpDisable();
         }
}
 </script>