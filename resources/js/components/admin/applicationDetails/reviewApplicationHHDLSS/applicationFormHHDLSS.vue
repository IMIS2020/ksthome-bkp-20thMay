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
                                    <h4 class="mb-0 p-head">View&nbsp;<span>HHDLSS</span> Scholarship Application&nbsp;<span>2021-22</span> (<span>IMIS-HHDLSCH00001</span>)</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div>
                                       <!-- <ul role="tablist" class="nav nav-tabs font-sm">
                                          <li class="nav-item" role="presentation"><router-link class="nav-link  active" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-application-form/'+getdata.applicationId"><strong>Application Form</strong></router-link></li>
                                          <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-annexure-1/'+getdata.applicationId"><strong>Annexure-I</strong></router-link></li>
                                          <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                          <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-annexure-2/'+getdata.applicationId"><strong>Annexure-II</strong></router-link></li>
                                          <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-upload-documents/'+getdata.applicationId"><strong>Upload Documents</strong></router-link></li>
                                          <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-HHDLSS-review-submit/'+getdata.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                       </ul> -->
                                        <div class="tab-content">
                                            <div class="tab-pane active adm-tab" role="tabpanel" id="tab-1">
                                                <form>
                                                    <div class="div-inner-filed com-bg">
                                                        <div class="form-row">
                                                            <div class="col-xl-12">
                                                                <div class="card mt-2 det-sec">
                                                                    <div class="card-header p-1">
                                                                        <h6 class="mb-0 color-mg font-sm">Personal Details</h6>
                                                                    </div>
                                                                    <div class="card-body p-2">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-2"><label>applicant's First name:</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-2"><label>applicant's Middle name:</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-2"><label>applicant's Last name:</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>father's name:</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>mother's name:</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-2"><label>DOB:</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="date" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-2"><label>Gender</label>
                                                                                <div class="form-group"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                        <option value="">Gender</option>
                                                                                        <option value="" selected="">Male</option>
                                                                                        <option value="1">Female</option>
                                                                                    </select></div>
                                                                            </div>
                                                                            <div class="col-xl-3 align-self-center"><label>Who is affected by leprosy:&nbsp;</label>
                                                                                <div class="form-group">
                                                                                    <div class="form-check form-check-inline disabled"><input class="form-check-input" type="checkbox" id="formCheck-4" disabled=""><label class="form-check-label font-md" for="formCheck-1">Mother</label></div>
                                                                                    <div class="form-check form-check-inline disabled"><input class="form-check-input" type="checkbox" id="formCheck-2" disabled=""><label class="form-check-label font-md" for="formCheck-2">Father</label></div>
                                                                                    <div class="form-check form-check-inline disabled"><input class="form-check-input" type="checkbox" id="formCheck-3" disabled=""><label class="form-check-label font-md" for="formCheck-3">Self</label></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>whether family has a BPL card:&nbsp;</label>
                                                                                <div class="form-group"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                        <option value="14" selected="">NO</option>
                                                                                        <option value="14">YES</option>
                                                                                    </select></div>
                                                                            </div>
                                                                            <div class="col-xl-2"><label>domicile state</label>
                                                                                <div class="form-group"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                        <option value="" selected="">State</option>
                                                                                        <option value="12">West Bengal</option>
                                                                                        <option value="13">Uttar Pradesh</option>
                                                                                        <option value="14">Bihar</option>
                                                                                    </select></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="card mt-2 det-sec">
                                                                    <div class="card-header p-1">
                                                                        <h6 class="mb-0 color-mg font-sm">Contact Details</h6>
                                                                    </div>
                                                                    <div class="card-body p-2">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-4"><label>Colony Name</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-4"><label>Address Line 1</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-4"><label>Address Line 2</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>District</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>City</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>PIN/ZIP Code:</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>state</label>
                                                                                <div class="form-group"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                        <option value="" selected="">State</option>
                                                                                        <option value="12">West Bengal</option>
                                                                                        <option value="13">Uttar Pradesh</option>
                                                                                        <option value="14">Bihar</option>
                                                                                    </select></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>contact no. (Self)&nbsp;<span class="text-danger">*</span></label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>contact no. (father)&nbsp;<span class="text-danger">*</span></label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>email iD:</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="email" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>contact no. (colony leader)&nbsp;<span class="text-danger">*</span></label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="card mt-2 det-sec">
                                                                    <div class="card-header p-1">
                                                                        <h6 class="mb-0 color-mg font-sm">Education Details</h6>
                                                                    </div>
                                                                    <div class="card-body p-2">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-12 mb-2"><label>Details of educational qualification: Matriculation/ SSLC/ SSC/ Graduation:<br></label>
                                                                                <div class="table-responsive font-md">
                                                                                    <table class="table table-sm mb-0">
                                                                                        <thead class="font-sm color-mg">
                                                                                            <tr>
                                                                                                <th>Examination Level</th>
                                                                                                <th>Examination Passed</th>
                                                                                                <th>University/ Board/ Council</th>
                                                                                                <th>Main Subjects</th>
                                                                                                <th>Year of Passing</th>
                                                                                                <th>Percentage(%)</th>
                                                                                                <th>Division</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">10th</option>
                                                                                                            <option value="1">12th</option>
                                                                                                            <option value="">Graduation</option>
                                                                                                            <option value="">Others</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">Madhyamik</option>
                                                                                                            <option value="">Higher Secondary</option>
                                                                                                            <option value="">B.Com</option>
                                                                                                            <option value="">Others</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">WBBSE</option>
                                                                                                            <option value="">WBCHSE</option>
                                                                                                            <option value="">WBSCTVE&amp;D</option>
                                                                                                            <option value="">Others</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm" placeholder="Type separated by comma" disabled="" readonly=""></textarea></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">2021</option>
                                                                                                            <option value="">2020</option>
                                                                                                            <option value="">2019</option>
                                                                                                            <option value="">2018</option>
                                                                                                            <option value="">2017</option>
                                                                                                            <option value="">2016</option>
                                                                                                            <option value="">2015</option>
                                                                                                            <option value="">2014</option>
                                                                                                            <option value="">2013</option>
                                                                                                            <option value="">2012</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><input class="form-control form-control-sm" type="number" min="1" disabled="" readonly=""></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">1st</option>
                                                                                                            <option value="">2nd</option>
                                                                                                            <option value="">3rd</option>
                                                                                                            <option value="">N/A</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">10th</option>
                                                                                                            <option value="1">12th</option>
                                                                                                            <option value="">Graduation</option>
                                                                                                            <option value="">Others</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">Madhyamik</option>
                                                                                                            <option value="">Higher Secondary</option>
                                                                                                            <option value="">B.Com</option>
                                                                                                            <option value="">Others</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">WBBSE</option>
                                                                                                            <option value="">WBCHSE</option>
                                                                                                            <option value="">WBSCTVE&amp;D</option>
                                                                                                            <option value="">Others</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm" placeholder="Type separated by comma" disabled="" readonly=""></textarea></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">2021</option>
                                                                                                            <option value="">2020</option>
                                                                                                            <option value="">2019</option>
                                                                                                            <option value="">2018</option>
                                                                                                            <option value="">2017</option>
                                                                                                            <option value="">2016</option>
                                                                                                            <option value="">2015</option>
                                                                                                            <option value="">2014</option>
                                                                                                            <option value="">2013</option>
                                                                                                            <option value="">2012</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><input class="form-control form-control-sm" type="number" min="1" disabled="" readonly=""></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">1st</option>
                                                                                                            <option value="">2nd</option>
                                                                                                            <option value="">3rd</option>
                                                                                                            <option value="">N/A</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">10th</option>
                                                                                                            <option value="1">12th</option>
                                                                                                            <option value="">Graduation</option>
                                                                                                            <option value="">Others</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">Madhyamik</option>
                                                                                                            <option value="">Higher Secondary</option>
                                                                                                            <option value="">B.Com</option>
                                                                                                            <option value="">Others</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">WBBSE</option>
                                                                                                            <option value="">WBCHSE</option>
                                                                                                            <option value="">WBSCTVE&amp;D</option>
                                                                                                            <option value="">Others</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm" placeholder="Type separated by comma" disabled="" readonly=""></textarea></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">2021</option>
                                                                                                            <option value="">2020</option>
                                                                                                            <option value="">2019</option>
                                                                                                            <option value="">2018</option>
                                                                                                            <option value="">2017</option>
                                                                                                            <option value="">2016</option>
                                                                                                            <option value="">2015</option>
                                                                                                            <option value="">2014</option>
                                                                                                            <option value="">2013</option>
                                                                                                            <option value="">2012</option>
                                                                                                        </select></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><input class="form-control form-control-sm" type="number" min="1" disabled="" readonly=""></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                                            <option value="" selected="">-- select --</option>
                                                                                                            <option value="">1st</option>
                                                                                                            <option value="">2nd</option>
                                                                                                            <option value="">3rd</option>
                                                                                                            <option value="">N/A</option>
                                                                                                        </select></div>
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
                                                                    <div class="card-header p-1">
                                                                        <h6 class="mb-0 color-mg font-sm">Admission Details</h6>
                                                                    </div>
                                                                    <div class="card-body p-2">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-4 align-self-center mb-2">
                                                                                <p class="color-mg font-md mb-0"><strong>Do you have Admission letter / Call letter:&nbsp;</strong><br></p>
                                                                            </div>
                                                                            <div class="col-xl-2 align-self-center mb-2">
                                                                                <div class="form-group mb-0"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                        <option value="14" selected="">YES</option>
                                                                                        <option value="14">NO</option>
                                                                                    </select></div>
                                                                            </div>
                                                                            <div class="col-xl-12 mb-2"><label class="col-form-label">Name of the course you have been selected for:<br></label></div>
                                                                            <div class="col-xl-6"><label>Name of the course</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-6"><label>Name of the institute</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-4"><label>Address Line 1</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-4"><label>Address Line 2</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-2"><label>District</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-2"><label>City</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>PIN/ZIP Code:</label>
                                                                                <div class="form-group"><input class="form-control form-control-sm" type="text" disabled="" readonly=""></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>state</label>
                                                                                <div class="form-group"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                        <option value="" selected="">State</option>
                                                                                        <option value="12">West Bengal</option>
                                                                                        <option value="13">Uttar Pradesh</option>
                                                                                        <option value="14">Bihar</option>
                                                                                    </select></div>
                                                                            </div>
                                                                            <div class="col-xl-3"><label>Whether recognized by Government of India<br></label>
                                                                                <div class="form-group"><select class="form-control form-control-sm" disabled="" readonly="">
                                                                                        <option value="12" selected="">N/A</option>
                                                                                        <option value="13">YES</option>
                                                                                        <option value="14">NO</option>
                                                                                    </select></div>
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
                </div>
            </div>
        </div>
     </div>
     <div>
    </div>
</body>
</template>

<script>
export default {
   
}
</script>
