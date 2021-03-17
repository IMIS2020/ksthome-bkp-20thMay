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
                                    <h4 class="mb-0 p-head">Review Applications</h4>
                                </div>
                            </div>
                            <div class="com-bg">
                                <section class="page-main">
                                    <div class="container">
                                        <form @submit.prevent="saveForm">
                                            <div class="form-row">
                                                <div class="col-xl-12 text-center mb-3"><br>
                                                    <h5 class="text-capitalize text-center color-mg"><strong>Application form (Nursing scholarship   {{getdata.financialYear}}) <br> (Application No : {{getdata.applicationId}})</strong></h5>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="mb-3">
                                                        <ul class="nav nav-tabs font-sm" role="tablist">
                                                            <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-nursing-application-form/'+getdata.applicationId"><strong>Application Form</strong></router-link></li>
                                                            <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-1/'+getdata.applicationId"><strong>Annexure-I</strong></router-link></li>
                                                            <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                                            <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-2/'+getdata.applicationId"><strong>Annexure-II</strong></router-link></li>
                                                            <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-upload-documents/'+getdata.applicationId"><strong>Upload Documents</strong></router-link></li>
                                                            <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-review-submit/'+getdata.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                                        </ul>
                                                        <div class="tab-content">
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
                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.applicantNameF" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-2">
                                                                                                    <label>Applicant's Middle2 name:</label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.applicantNameM" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-2">
                                                                                                    <label>Applicant's Last name:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.applicantNameL" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-3"><label>Father's name:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.applicantFatherName" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-3">
                                                                                                    <label>Mother's name:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.applicantMotherName" disabled>
                                                                                                </div>
                                                                                                </div>

                                                                                                <div class="col-xl-2">
                                                                                                    <label>DOB:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="date" v-model="form.applicantDOB" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-2">
                                                                                                    <label>Gender&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <select class="form-control form-control-sm" v-model="form.applicantGender" disabled>
                                                                                                            <option value="" disabled>--Select--</option>
                                                                                                            <option value="Male">Male</option>
                                                                                                            <option value="Female">Female</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                            
                                                                                                <div class="col-xl-3 align-self-end"><label>Who is affected by leprosy:&nbsp; <span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedMother" id="formCheck-4" disabled><label class="form-check-label font-md" for="formCheck-1">Mother</label></div>
                                                                                                        <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedFather" id="formCheck-2" disabled><label class="form-check-label font-md" for="formCheck-2">Father</label></div>
                                                                                                        <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedSelf"   id="formCheck-3" disabled><label class="form-check-label font-md" for="formCheck-3">Self</label></div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-3"><label>whether family has a BPL card:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <select class="form-control form-control-sm" v-model="form.applicantHasBPLCard" disabled>
                                                                                                            <option value="" disabled>--Select--</option>
                                                                                                            <option value="Yes">YES</option>
                                                                                                            <option value="No">NO</option>
                                                                                                        </select>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                <div class="col-xl-2">
                                                                                                    <label>Domicile state &nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <select class="form-control form-control-sm" v-model="form.applicantDomicileState" disabled>
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
                                                                                            <h6 class="mb-0 color-mg">Contact Details</h6>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="form-row">
                                                                                                <div class="col-xl-4">
                                                                                                    <label>House No and Colony Name / Address Line 1 &nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text"  v-model="form.addressAddln1" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-4">
                                                                                                    <label>Address Line 2</label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.addressAddln2" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-4">
                                                                                                    <label>City</label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.addressCity" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-3">
                                                                                                    <label>District</label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.addressDistprov" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-3">
                                                                                                    <label>State&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <select class="form-control form-control-sm" v-model="form.addressState" disabled>
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
                                                                                                        </select>
                                                                                                </div>
                                                                                                </div>


                                                                                                <div class="col-xl-3">
                                                                                                    <label>PIN/ZIP Code:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" maxlength="6" v-model="form.addressPinzip" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                            
                                                                                                <div class="col-xl-3">
                                                                                                    <label>Contact no. (Self)&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" maxlength="10" v-model="form.applicantContactNoSelf" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-3">
                                                                                                    <label>Contact no. (guardian)&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" maxlength="10" v-model="form.applicantContactNoGuardian" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-3">
                                                                                                    <label>Email ID:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="email" v-model="form.applicantEmailId" disabled>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-3">
                                                                                                    <label>Contact no. (colony leader)&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" maxlength="10" v-model="form.applicantContactNoColonyLeader" disabled>
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
                                                                                                <div class="col-xl-12 mb-2">
                                                                                                    <label>Details of educational qualification: 10th &amp; 12th:&nbsp;<span class="text-danger"><strong>*</strong></span><br></label>
                                                                                                    <div class="table-responsive font-md">
                                                                                                        <table class="table table-sm mb-0">
                                                                                                            <thead class="font-sm color-mg">
                                                                                                                <tr>
                                                                                                                    <th>Examination Passed</th>
                                                                                                                    <th>University/ Board/ Council</th>
                                                                                                                    <th>Main Subjects</th>
                                                                                                                    <th>Year of Passing</th>
                                                                                                                    <th>Percentage (%)</th>
                                                                                                                    <th>Division</th>
                                                                                                                    <th>Type of Institute</th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td>10th </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.universityBoardCouncil10" disabled>
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.mainSubjects10" disabled>
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.yearOfPassing10" disabled maxlength="4">
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.percentage10" disabled>
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.division10" disabled>
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                            <select class="form-control form-control-sm" v-model="form.type10" disabled>
                                                                                                                                <option value="" disabled>-Select-</option>
                                                                                                                                <option value="Govt">Govt.</option>
                                                                                                                                <option value="Pvt">Pvt.</option>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>12th </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                            <input class="form-control form-control-sm" type="text" v-model="form.universityBoardCouncil12" disabled>
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                            <input class="form-control form-control-sm" type="text" v-model="form.mainSubjects12" disabled> 
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                            <input class="form-control form-control-sm" type="text" v-model="form.yearOfPassing12" disabled maxlength="4">
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                            <input class="form-control form-control-sm" type="text" v-model="form.percentage12" disabled>
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                            <input class="form-control form-control-sm" type="text" v-model="form.division12" disabled>
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                            <select class="form-control form-control-sm" v-model="form.type12" disabled>
                                                                                                                                <option value="" disabled>-Select-</option>
                                                                                                                                <option value="Govt">Govt.</option>
                                                                                                                                <option value="Pvt">Pvt.</option>
                                                                                                                            </select>
                                                                                                                        </div>
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

                                                                                <div class="col-xl-12">
                                                                                    <div class="card mt-2 det-sec">
                                                                                        <div class="card-header">
                                                                                            <h6 class="mb-0 color-mg">Admission Details</h6>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="form-row">
                                                                                                <div class="col-xl-4 align-self-center mb-2">
                                                                                                    <p class="color-mg font-md mb-0">
                                                                                                    <strong>Do you have Admission letter / Call letter:&nbsp;</strong><br>
                                                                                                    </p>
                                                                                                </div>

                                                                                                <div class="col-xl-2 align-self-center mb-2">
                                                                                                    <div class="form-group mb-0">
                                                                                                        <select class="form-control form-control-sm" v-model="form.hasAdmissionLetter"  @change="onSelect($event)" disabled>
                                                                                                            <option value="" disabled>--Select--</option>
                                                                                                            <option value="YES">YES</option>
                                                                                                            <option value="NO">NO</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-12 mb-2">
                                                                                                    <label class="col-form-label">Name of the course you have been selected for:<br></label>
                                                                                                </div>
                                                                                                <div class="col-xl-6">
                                                                                                    <label>Name of the course</label>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.insCourse"  :disabled="inputDisabled">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-6">
                                                                                                    <label>Name of the institute</label>
                                                                                                    <div class="form-group">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insName" :disabled="inputDisabled">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-4">
                                                                                                    <label>Address Line 1</label>
                                                                                                    <div class="form-group">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insAddressAddln1" :disabled="inputDisabled">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-4">
                                                                                                    <label>Address Line 2</label>
                                                                                                    <div class="form-group">
                                                                                                    <input class="form-control form-control-sm" type="text"  v-model="form.insAddressAddln2" :disabled="inputDisabled">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-2">
                                                                                                    <label>City</label>
                                                                                                    <div class="form-group">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insAddressCity" :disabled="inputDisabled" >
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xl-2">
                                                                                                    <label>District</label>
                                                                                                    <div class="form-group">
                                                                                                    <input class="form-control form-control-sm" type="text" v-model="form.insAddressDistprov" :disabled="inputDisabled" >
                                                                                                    </div>
                                                                                                </div>

                                                                                            <div class="col-xl-3">
                                                                                                <label>State</label>
                                                                                                    <div class="form-group">
                                                                                                        <select class="form-control form-control-sm" v-model="form.insAddressState" :disabled="inputDisabled">
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
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>


                                                                                                <div class="col-xl-3">
                                                                                                    <label>PIN/ZIP Code:</label>
                                                                                                    <div class="form-group">
                                                                                                    <input class="form-control form-control-sm" type="text" maxlength="6" v-model="form.insAddressPinzip" :disabled="inputDisabled">
                                                                                                    </div>
                                                                                                </div>

                                                                                                
                                                                                                <div class="col-xl-3">
                                                                                                    <label>Whether Recognized by Indian Nursing Council:<br></label>
                                                                                                    <div class="form-group">
                                                                                                        <select class="form-control form-control-sm" v-model="form.recognizedByINC" :disabled="inputDisabled">
                                                                                                            <option value="" disabled >--Select--</option>
                                                                                                            <option value="N/A" selected="">N/A</option>
                                                                                                            <option value="YES">YES</option>
                                                                                                            <option value="NO">NO</option>
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
                                                                                            <h6 class="mb-0 color-mg">Other Miscellaneous Details</h6>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="form-row">
                                                                                                <div class="col-xl-12 mb-2">
                                                                                                    <label>Kindly Mention The Name/S Of Your Sibling/S Who Has Got Scholarship In The Past.<br>(If No, Leave It Blank).<br></label>
                                                                                                    <div class="table-responsive font-md">
                                                                                                        <table class="table table-sm mb-0">
                                                                                                            <thead class="color-mg">
                                                                                                                <tr>
                                                                                                                    <th>Name</th>
                                                                                                                    <th>Course</th>
                                                                                                                    <th>Selection year</th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscName1" disabled>
                                                                                                                    </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscCourse1" disabled>
                                                                                                                    </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscYear1" disabled>
                                                                                                                    </div>
                                                                                                                    </td>

                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscName2" disabled>
                                                                                                                    </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscCourse2" disabled>
                                                                                                                    </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscYear2" disabled>
                                                                                                                    </div>
                                                                                                                    </td>

                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                    <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscName3" disabled>
                                                                                                                    </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                    <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscCourse3" disabled>
                                                                                                                    </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                    <div class="form-group mb-0">
                                                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscYear3" disabled>
                                                                                                                    </div>
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
                                                <div class="col-xl-2 offset-xl-4 my-2">
                                                    <button class="btn btn-block btn-sm btn-mg d-none" type="submit"><strong>Save</strong></button>
                                                </div>
                                                <div class="col-xl-2 offset-xl-0 my-2">
                                                    <router-link class="btn btn-danger btn-block btn-sm d-none" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link>
                                                </div>
                                            </div>
                                      </form>
                                    </div>
                                </section>
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
    data () {
        return {
            inputDisabled: false,
            form: {
                applicationId:'',
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
                applicantHasBPLCard:'',
                applicantDomicileState:'',
                applicantColonyName:'',
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
                universityBoardCouncil10:'',
                mainSubjects10:'',
                yearOfPassing10:'',
                percentage10:'',
                division10:'',
                type10:'',
                universityBoardCouncil12:'',
                mainSubjects12:'',
                yearOfPassing12:'',
                percentage12:'',
                division12:'',
                type12:'',
                hasAdmissionLetter:'YES',
                insCourse:'',
                insName:'',
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
            },
            getdata: {},
            errors :'',
            error:[],
        }
    },
    methods: {
        async readApplicationForm(currentUrl) 
        {
            axios.get('/admin/admin-api/review-nursing-application-form/'+currentUrl)
            .then(response => {
                if (response.data['success']) {
                    this.form =  response.data['data'];
                    this.getdata.applicationId = response.data['data'].applicationId;  
                    this.getdata.financialYear = response.data['data'].financialYear;   
                    this.getdata.hasAdmissionLetter = response.data['data'].hasAdmissionLetter;
                    if(this.getdata.hasAdmissionLetter == 'YES') {
                        this.inputDisabled = false; 
                    } else {
                        this.inputDisabled = true;
                    }
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
            .catch(error => this.errorMsg(error.response.status))
        },
        errorMsg (status) 
        {
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
        onSelect(event)
        {
            
            if(event.target.value == 'YES')
            {
                this.inputDisabled = false; 
            }else{
                this.inputDisabled = true;
              
            }
            
        }
    },
    created () {
        const  currentUrl = window.location.pathname.split('/').reverse()[0];
        console.log(currentUrl);
        this.readApplicationForm(currentUrl);
    }
}
</script>