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
                        <ul role="tablist" class="nav nav-tabs font-sm">
                            <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link active" href="#tab-1"><strong>Application Form</strong></a></li>
                            <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-2"><strong>Annexure-I</strong></a></li>
                            <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-3"><strong>Annexure-II</strong></a></li>
                            <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-4"><strong>Uploaded Documents</strong></a></li>
                            <li role="presentation" class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-5"><strong>Review</strong></a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active adm-tab" id="tab-1">
                                <form>
                                    <div class="div-inner-filed com-bg">
                                        <div>
                                            <div class="form-row">
                                                <div class="col-xl-12">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header p-1">
                                                            <h6 class="mb-0 color-mg font-sm">Personal Details</h6>
                                                        </div>
                                                        <div class="card-body p-2">
                                                            <div class="form-row">
                                                                <div class="col-xl-2"><label>applicant&#39;s First name:</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-2"><label>applicant&#39;s Middle name:</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-2"><label>applicant&#39;s Last name:</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>father&#39;s name:</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>mother&#39;s name:</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-2"><label>DOB:</label>
                                                                    <div class="form-group"><input class="form-control form-control-sm" type="date" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-2"><label>Gender</label>
                                                                    <div class="form-group"><select class="form-control form-control-sm" readonly>
                                                                            <option value>Gender</option>
                                                                            <option value selected>Male</option>
                                                                            <option value="1">Female</option>
                                                                        </select></div>
                                                                </div>
                                                                <div class="col-xl-3 align-self-center"><label>Who is affected by leprosy: </label>
                                                                    <div class="form-group">
                                                                        <div class="form-check form-check-inline disabled"><input type="checkbox" class="form-check-input" id="formCheck-4" /><label class="form-check-label font-md" for="formCheck-1">Mother</label></div>
                                                                        <div class="form-check form-check-inline disabled"><input type="checkbox" class="form-check-input" id="formCheck-2" /><label class="form-check-label font-md" for="formCheck-2">Father</label></div>
                                                                        <div class="form-check form-check-inline disabled"><input type="checkbox" class="form-check-input" id="formCheck-3" /><label class="form-check-label font-md" for="formCheck-3">Self</label></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3"><label>whether family has a BPL card: </label>
                                                                    <div class="form-group"><select class="form-control form-control-sm" readonly>
                                                                            <option value="14" selected>NO</option>
                                                                            <option value="14">YES</option>
                                                                        </select></div>
                                                                </div>
                                                                <div class="col-xl-2"><label>domicile state</label>
                                                                    <div class="form-group"><select class="form-control form-control-sm" readonly>
                                                                            <option value selected>State</option>
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
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-4"><label>Address Line 1</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-4"><label>Address Line 2</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>District</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>City</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>PIN/ZIP Code:</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>state</label>
                                                                    <div class="form-group"><select class="form-control form-control-sm" readonly>
                                                                            <option value selected>State</option>
                                                                            <option value="12">West Bengal</option>
                                                                            <option value="13">Uttar Pradesh</option>
                                                                            <option value="14">Bihar</option>
                                                                        </select></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>contact no. (Self) <span class="text-danger">*</span></label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>contact no. (father) <span class="text-danger">*</span></label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>email iD:</label>
                                                                    <div class="form-group"><input type="email" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>contact no. (colony leader) <span class="text-danger">*</span></label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
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
                                                                <div class="col-xl-12 mb-2"><label>Details of educational qualification: Matriculation/ SSLC/ SSC/ Graduation:<br /></label>
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
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>10th</option>
                                                                                                <option value="1">12th</option>
                                                                                                <option value>Graduation</option>
                                                                                                <option value>Others</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>Madhyamik</option>
                                                                                                <option value>Higher Secondary</option>
                                                                                                <option value>B.Com</option>
                                                                                                <option value>Others</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>WBBSE</option>
                                                                                                <option value>WBCHSE</option>
                                                                                                <option value>WBSCTVE&amp;D</option>
                                                                                                <option value>Others</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" placeholder="Type separated by comma" readonly></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>2021</option>
                                                                                                <option value>2020</option>
                                                                                                <option value>2019</option>
                                                                                                <option value>2018</option>
                                                                                                <option value>2017</option>
                                                                                                <option value>2016</option>
                                                                                                <option value>2015</option>
                                                                                                <option value>2014</option>
                                                                                                <option value>2013</option>
                                                                                                <option value>2012</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><input type="number" class="form-control form-control-sm" min="1" readonly /></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>1st</option>
                                                                                                <option value>2nd</option>
                                                                                                <option value>3rd</option>
                                                                                                <option value>N/A</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>10th</option>
                                                                                                <option value="1">12th</option>
                                                                                                <option value>Graduation</option>
                                                                                                <option value>Others</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>Madhyamik</option>
                                                                                                <option value>Higher Secondary</option>
                                                                                                <option value>B.Com</option>
                                                                                                <option value>Others</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>WBBSE</option>
                                                                                                <option value>WBCHSE</option>
                                                                                                <option value>WBSCTVE&amp;D</option>
                                                                                                <option value>Others</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" placeholder="Type separated by comma" readonly></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>2021</option>
                                                                                                <option value>2020</option>
                                                                                                <option value>2019</option>
                                                                                                <option value>2018</option>
                                                                                                <option value>2017</option>
                                                                                                <option value>2016</option>
                                                                                                <option value>2015</option>
                                                                                                <option value>2014</option>
                                                                                                <option value>2013</option>
                                                                                                <option value>2012</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><input type="number" class="form-control form-control-sm" min="1" readonly /></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>1st</option>
                                                                                                <option value>2nd</option>
                                                                                                <option value>3rd</option>
                                                                                                <option value>N/A</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>10th</option>
                                                                                                <option value="1">12th</option>
                                                                                                <option value>Graduation</option>
                                                                                                <option value>Others</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>Madhyamik</option>
                                                                                                <option value>Higher Secondary</option>
                                                                                                <option value>B.Com</option>
                                                                                                <option value>Others</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>WBBSE</option>
                                                                                                <option value>WBCHSE</option>
                                                                                                <option value>WBSCTVE&amp;D</option>
                                                                                                <option value>Others</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" placeholder="Type separated by comma" readonly></textarea></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>2021</option>
                                                                                                <option value>2020</option>
                                                                                                <option value>2019</option>
                                                                                                <option value>2018</option>
                                                                                                <option value>2017</option>
                                                                                                <option value>2016</option>
                                                                                                <option value>2015</option>
                                                                                                <option value>2014</option>
                                                                                                <option value>2013</option>
                                                                                                <option value>2012</option>
                                                                                            </select></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><input type="number" class="form-control form-control-sm" min="1" readonly /></div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                                <option value selected>-- select --</option>
                                                                                                <option value>1st</option>
                                                                                                <option value>2nd</option>
                                                                                                <option value>3rd</option>
                                                                                                <option value>N/A</option>
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
                                                                    <p class="color-mg font-md mb-0"><strong>Do you have Admission letter / Call letter: </strong><br /></p>
                                                                </div>
                                                                <div class="col-xl-2 align-self-center mb-2">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                            <option value="14" selected>YES</option>
                                                                            <option value="14">NO</option>
                                                                        </select></div>
                                                                </div>
                                                                <div class="col-xl-12 mb-2"><label class="col-form-label">Name of the course you have been selected for:<br /></label></div>
                                                                <div class="col-xl-6"><label>Name of the course</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-6"><label>Name of the institute</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-4"><label>Address Line 1</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-4"><label>Address Line 2</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-2"><label>District</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-2"><label>City</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>PIN/ZIP Code:</label>
                                                                    <div class="form-group"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>state</label>
                                                                    <div class="form-group"><select class="form-control form-control-sm" readonly>
                                                                            <option value selected>State</option>
                                                                            <option value="12">West Bengal</option>
                                                                            <option value="13">Uttar Pradesh</option>
                                                                            <option value="14">Bihar</option>
                                                                        </select></div>
                                                                </div>
                                                                <div class="col-xl-3"><label>Whether recognized by Government of India<br /></label>
                                                                    <div class="form-group"><select class="form-control form-control-sm" readonly>
                                                                            <option value="12" selected>N/A</option>
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
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane adm-tab" id="tab-2">
                                <div class="div-inner-filed py-1 px-2">
                                    <form class="ub-reg-form">
                                        <div class="form-row">
                                            <div class="col-xl-12 align-self-center mb-2">
                                                <p class="float-left color-mg font-md mb-1">I Rahul Kr. Pandit son/daughter of Manoj Kr. Pandit residing in Khatir Bajar colony, want to pursue higher studies in academic Year 2020-2021. I will be taking the following Entrance Examination for admission into: <br /></p>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="com-bg-1">
                                                    <div class="form-row mb-1">
                                                        <div class="col-xl-2 offset-xl-8 text-right align-self-center">
                                                            <p class="mb-0 color-mg font-md">Course Level:</p>
                                                        </div>
                                                        <div class="col-xl-2 offset-xl-0">
                                                            <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                    <option value>Course Level</option>
                                                                    <option value="12" selected>Bachelors</option>
                                                                    <option value="13">Masters</option>
                                                                </select></div>
                                                        </div>
                                                        <div class="col-md-2 col-xl-1 offset-md-3 offset-xl-0 d-none align-self-center"><button class="btn btn-block btn-sm font-xs btn-mg add-anex-i-row" type="button"><i class="fa fa-plus"></i><strong> Add row</strong></button></div>
                                                    </div>
                                                    <div class="table-responsive table results mb-0 donor-list tmd anex-i-table">
                                                        <table class="table table-sm mb-2">
                                                            <thead class="font-md">
                                                                <tr class="color-mg font-sm">
                                                                    <th>Institute Name</th>
                                                                    <th>Course Name</th>
                                                                    <th>Address Line-1</th>
                                                                    <th>Address Line-2</th>
                                                                    <th>District</th>
                                                                    <th>City</th>
                                                                    <th>Pin/ZIP Code</th>
                                                                    <th>State</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="h-25x">
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                <option value selected>State</option>
                                                                                <option value="12">West Bengal</option>
                                                                                <option value="13">Uttar Pradesh</option>
                                                                                <option value="14">Bihar</option>
                                                                            </select></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                <option value selected>State</option>
                                                                                <option value="12">West Bengal</option>
                                                                                <option value="13">Uttar Pradesh</option>
                                                                                <option value="14">Bihar</option>
                                                                            </select></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                <option value selected>State</option>
                                                                                <option value="12">West Bengal</option>
                                                                                <option value="13">Uttar Pradesh</option>
                                                                                <option value="14">Bihar</option>
                                                                            </select></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                <option value selected>State</option>
                                                                                <option value="12">West Bengal</option>
                                                                                <option value="13">Uttar Pradesh</option>
                                                                                <option value="14">Bihar</option>
                                                                            </select></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                <option value selected>State</option>
                                                                                <option value="12">West Bengal</option>
                                                                                <option value="13">Uttar Pradesh</option>
                                                                                <option value="14">Bihar</option>
                                                                            </select></div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane adm-tab" id="tab-3">
                                <div class="div-inner-filed py-1 px-2">
                                    <form class="ub-reg-form">
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-2">
                                                <div class="card mt-2 det-sec">
                                                    <div class="card-header p-1">
                                                        <h6 class="mb-0 color-mg font-sm">Declaration Form (To be signed by colony leader)</h6>
                                                    </div>
                                                    <div class="card-body p-2">
                                                        <div class="form-row">
                                                            <div class="col-xl-12 text-center align-self-center mb-4">
                                                                <p class="text-uppercase mb-0 color-mg"><strong><span style="text-decoration: underline;">to whom it may concern</span></strong></p>
                                                            </div>
                                                            <div class="col-xl-5 text-center align-self-center mb-2">
                                                                <p class="float-left mb-0 color-mg font-md"><strong>I     </strong></p><span class="d-block color-mg" style="overflow: hidden;"><input type="text" class="form-control form-control-sm" placeholder="Name of colony leader" readonly /></span>
                                                            </div>
                                                            <div class="col-xl-7 text-center align-self-center mb-2">
                                                                <p class="float-left mb-0 color-mg font-md"><strong>hereby certify that Mr./ Miss. </strong></p><span class="d-block color-mg" style="overflow: hidden;"><input type="text" class="form-control form-control-sm" placeholder="Name of the candidate" readonly /></span>
                                                            </div>
                                                            <div class="col-xl-6 text-center align-self-center mb-2">
                                                                <p class="float-left mb-0 color-mg font-md"><strong>has been residing in this colony </strong></p><span class="d-block color-mg" style="overflow: hidden;"><input type="text" class="form-control form-control-sm" placeholder="Colony name" readonly /></span>
                                                            </div>
                                                            <div class="col-xl-6 text-center align-self-center mb-2">
                                                                <p class="float-left mb-0 color-mg font-md"><strong>and his/her parent / parents </strong></p><span class="d-block color-mg" style="overflow: hidden;"><input type="text" class="form-control form-control-sm" placeholder="Mother name" readonly /></span>
                                                            </div>
                                                            <div class="col-xl-4 text-center align-self-center mb-2"><input type="text" class="form-control form-control-sm" placeholder="Father name" readonly /></div>
                                                            <div class="col-xl-8 text-center align-self-center mb-2">
                                                                <p class="float-left mb-0 color-mg font-md"><strong>is / are affected by leprosy.</strong></p>
                                                            </div>
                                                            <div class="col-xl-12 align-self-center mt-3">
                                                                <p class="float-left mb-0 color-mg font-md"><strong>I certify that, to the best of my knowledge, the information provided by the candidate is true. I recommend her for Nursing Scholarship for HHDL Scholarship Programme.</strong><br /></p>
                                                                <p class="float-left mb-0 color-mg font-md mt-4"><strong>Signature of Colony Leader: ____________________________________,  Date: ____/____/___________</strong><br /></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane adm-tab" id="tab-4">
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
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Annexure-I Signed letter from colony leader stating the candidate is residing in the colony</td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file d-none font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Annexure-II Signed letter from colony leader stating the candidate is residing in the colony</td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file d-none font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Passport size photograph</td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">No</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Self attested Birth certificate/ proof of age</td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file d-none font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Self attested Mark Sheet for 10th</td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Self attested Mark Sheet for 12th</td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Self attested Mark Sheet for Graduation</td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Self attested Leprosy Certificate of Mother<br /></td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Self attested Leprosy Certificate of Father<br /></td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Self attested Leprosy Certificate of Self<br /></td>
                                                                                <td class="d-none">
                                                                                    <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                </td>
                                                                                <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
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
                            <div role="tabpanel" class="tab-pane adm-tab" id="tab-5">
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
                                                                <td>Application No. IMIS-HHDLSCH00058 for HHDL Scholarship<br /></td>
                                                                <td>Application Form<br /></td>
                                                                <td class="text-center">N/A<br /></td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Annexure-I letter<br /></td>
                                                                <td>Attachment</td>
                                                                <td class="text-center">N/A</td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Proof of admission in a recognized institute/ admission call letter issued by the institute<br /></td>
                                                                <td>Attachment<br /></td>
                                                                <td class="text-center text-danger">NO<br /></td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Annexure-II letter from colony leader stating the candidate is residing in the colony<br /></td>
                                                                <td>Attachment<br /></td>
                                                                <td class="text-center">Yes<br /></td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Passport size photograph<br /></td>
                                                                <td>Attachment<br /></td>
                                                                <td class="text-center">Yes<br /></td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Self attested Birth certificate/ proof of age<br /></td>
                                                                <td>Attachment<br /></td>
                                                                <td class="text-center">Yes<br /></td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Self attested marksheet for 10th<br /></td>
                                                                <td>Attachment<br /></td>
                                                                <td class="text-center">Yes<br /></td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Self attested marksheet for 12th/ Graduation<br /></td>
                                                                <td>Attachment<br /></td>
                                                                <td class="text-center">Yes<br /></td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Self attested Leprosy Certificate of Mother<br /></td>
                                                                <td>Attachment<br /></td>
                                                                <td class="text-center">Yes<br /></td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Self attested Leprosy Certificate of Father<br /></td>
                                                                <td>Attachment<br /></td>
                                                                <td class="text-center">Yes</td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Self attested Leprosy Certificate of Self<br /></td>
                                                                <td>Attachment<br /></td>
                                                                <td class="text-center">Yes<br /></td>
                                                                <td class="text-center pt-2"><a class="act-link ml-2" href="#"><i class="fa fa-download"></i></a><a class="act-link" href="#" data-toggle="modal" data-target="#vw-apo-form"><i class="fa fa-eye"></i></a></td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><select class="form-control form-control-sm font-s">
                                                                            <option value selected>-- select --</option>
                                                                            <option value="14">Not OK</option>
                                                                            <option value="14">OK</option>
                                                                            <option value="14">Not Required</option>
                                                                            <option value="14">Required &amp; Missing</option>
                                                                        </select></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group mb-0"><textarea class="form-control form-control-sm font-s" rows="2" style="line-height: 1;"></textarea></div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 offset-xl-0 font-sm"><button class="btn btn-block btn-sm btn-mg font-sm" type="button"><strong>Save</strong></button></div>
                                            <div class="col-xl-2 offset-xl-0 font-sm"><button class="btn btn-block btn-sm btn-cancel font-sm" type="button"><strong>Cancel</strong></button></div>
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
                                                                        <div class="form-group mb-0"><input type="email" class="form-control form-control-sm" placeholder="Email of Applicant" /></div>
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
                                                                                <option value="12" selected>-- select --</option>
                                                                                <option value="13">Acceptance of Application</option>
                                                                                <option value="13">Provisional Acceptance of Application</option>
                                                                            </select></div>
                                                                    </div>
                                                                    <div class="col-xl-12 mb-2">
                                                                        <p class="mb-1 color-mg font-sm font-weight-bold">To, <span>Souvik Kundu</span></p>
                                                                        <p class="mb-3 color-mg font-sm font-weight-bold pl-4">Address Line 1, Address Line 2,<br />City/Town/Dist,<br />State, ZIP, Country</p>
                                                                        <p class="mb-2 color-mg font-sm font-weight-bold pl-4">Dear Applicant,<br /></p>
                                                                        <p class="mb-1 text-black font-sm pl-4">We have received your application for No. <span>APLNUSCH00058</span> for <span>Nursing</span> scholarship. We are <span>Provisionally Accepting</span> your application.<br /></p>
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
                                                                                        <td>Application No. IMIS-HHDLSCH00058 for HHDL Scholarship<br /></td>
                                                                                        <td>Application Form<br /></td>
                                                                                        <td class="text-center">N/A<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Not OK</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Annexure-I letter<br /></td>
                                                                                        <td>Attachment</td>
                                                                                        <td class="text-center">N/A</td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Not Signed By Colony Leader</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Proof of admission in a recognized institute/ admission call letter issued by the institute<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center text-danger">NO<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Annexure-II letter from colony leader stating the candidate is residing in the colony<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Passport size photograph<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested Birth certificate/ proof of age<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested marksheet for 10th<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested marksheet for 12th/ Graduation<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested Leprosy Certificate of Mother<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested Leprosy Certificate of Father<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes</td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested Leprosy Certificate of Self<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
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
                                                                        <div class="form-group mb-0"><input type="email" class="form-control form-control-sm" placeholder="Email of Applicant" /></div>
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
                                                                        <p class="mb-1 color-mg font-sm font-weight-bold">To, <span>Souvik Kundu</span></p>
                                                                        <p class="mb-3 color-mg font-sm font-weight-bold pl-4">Address Line 1, Address Line 2,<br />City/Town/Dist,<br />State, ZIP, Country</p>
                                                                        <p class="mb-2 color-mg font-sm font-weight-bold pl-4">Dear Applicant,<br /></p>
                                                                        <p class="mb-1 text-black font-sm pl-4">We have received your application for No. <span>APLNUSCH00058</span> for <span>Nursing</span> scholarship. We are unable to <span>accept the application due to discrepancies</span>.</p>
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
                                                                                        <td>Application No. IMIS-HHDLSCH00058 for HHDL Scholarship<br /></td>
                                                                                        <td>Application Form<br /></td>
                                                                                        <td class="text-center">N/A<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Not OK</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Annexure-I letter<br /></td>
                                                                                        <td>Attachment</td>
                                                                                        <td class="text-center">N/A</td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Not Signed By Colony Leader</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Proof of admission in a recognized institute/ admission call letter issued by the institute<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center text-danger">NO<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Annexure-II letter from colony leader stating the candidate is residing in the colony<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Passport size photograph<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested Birth certificate/ proof of age<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested marksheet for 10th<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested marksheet for 12th/ Graduation<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested Leprosy Certificate of Mother<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested Leprosy Certificate of Father<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes</td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Self attested Leprosy Certificate of Self<br /></td>
                                                                                        <td>Attachment<br /></td>
                                                                                        <td class="text-center">Yes<br /></td>
                                                                                        <td class="text-center">OK</td>
                                                                                        <td class="text-center">Wrong Document Uploaded</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>