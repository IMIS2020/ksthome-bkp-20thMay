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
                    <li class="nav-item">
                        <div class="nav-item dropdown shadow-lg nav-dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-money-bill-wave"></i><span>Dropdown Menu</span></a>
                            <div class="dropdown-menu dr-cs"><a class="dropdown-item" href="#"><i class="fas fa-money-bill-wave"></i>&nbsp;Dropdown Menu</a></div>
                        </div>
                    </li>
                     <!-- <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-domains"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-application-schedule"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li> -->

                     <li class="nav-item shadow-lg"><router-link class="nav-link" to="#"><i class="fas fa-wrench"></i><span>Manage Domains</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="#"><i class="fas fa-calendar-alt"></i><span>Manage Application Schedule</span></router-link></li>
                    <li class="nav-item shadow-lg"><router-link class="nav-link" to="/admin/manage-application-details"><i class="fas fa-sticky-note"></i><span>Manage Applications</span></router-link></li>
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
                            </li> -->
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow dr-not"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="assets/img/avatar_2x.png"><span class="d-none d-lg-inline ml-2 text-white-600 small"><strong>{{userName}}</strong></span></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                                        <a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
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
                                    <h4 class="mb-0 p-head">Manage Scholarship Applications</h4>
                                </div>
                            </div>
                            <div class="com-bg">
                                <div>
                                    <!-- <div class="form-group pull-right col-xl-12 mb-2 mt-2">
                                        <div class="row">
                                            <div class="col-xl-12" style="padding: 0px 5px;">
                                                <form>
                                                    <div class="form-group mb-0">
                                                        <div class="form-row">
                                                            <div class="col-xl-2"><select class="form-control form-control-sm mb-2 font-sm">
                                                                    <option value="">-- Session --</option>
                                                                    <option value="1">2020 - 2021</option>
                                                                    <option value="1">2021 - 2022</option>
                                                                </select><select class="form-control form-control-sm font-sm">
                                                                    <option value="">-- Contact No. --</option>
                                                                    <option value="1">9876543210</option>
                                                                    <option value="1">9632587410</option>
                                                                </select></div>
                                                            <div class="col-xl-2"><select class="form-control form-control-sm mb-2 font-sm">
                                                                    <option value="">-- Scholarship Type --</option>
                                                                    <option value="1">2020 - 2021</option>
                                                                    <option value="1">2021 - 2022</option>
                                                                </select><select class="form-control form-control-sm font-sm">
                                                                    <option value="">-- Email ID --</option>
                                                                    <option value="1">user@email.com</option>
                                                                    <option value="1">user2@email.com</option>
                                                                </select></div>
                                                            <div class="col-xl-2"><select class="form-control form-control-sm mb-2 font-sm">
                                                                    <option value="">-- First Name --</option>
                                                                    <option value="1">Amit</option>
                                                                    <option value="1">Sudhakar</option>
                                                                </select><select class="form-control form-control-sm font-sm">
                                                                    <option value="">-- State --</option>
                                                                    <option value="1">West Bengal</option>
                                                                    <option value="1">Uttar Pradesh</option>
                                                                </select></div>
                                                            <div class="col-xl-2"><select class="form-control form-control-sm mb-2 font-sm">
                                                                    <option value="">-- Last Name --</option>
                                                                    <option value="1">Gupta</option>
                                                                    <option value="1">Mishra</option>
                                                                </select><select class="form-control form-control-sm font-sm">
                                                                    <option value="">-- District --</option>
                                                                    <option value="1">Hooghly</option>
                                                                    <option value="1">North 24 PGS</option>
                                                                </select></div>
                                                            <div class="col-xl-1 align-self-center"><a class="btn btn-sm btn-mg font-sm" role="button" href="#"><i class="fa fa-search"></i></a></div>
                                                            <div class="col-xl-3 offset-xl-0 align-self-center pr-0"><input class="form-control form-control-sm" type="text" placeholder="Search by typing here..."></div>
                                                            <div class="col-xl-4 offset-xl-8 align-self-center and-col mt-2">
                                                                <div class="form-row">
                                                                    <div class="col-sm-4 col-xl-3 offset-xl-0 align-self-center">
                                                                        <p class="text-right mb-0 mt-0 font-sm color-mg"><strong>Add Offline</strong></p>
                                                                    </div>
                                                                    <div class="col-sm-4 col-xl-6 offset-xl-0 align-self-center"><select class="form-control form-control-sm font-sm color-mg">
                                                                            <option value="12" selected="">-- Select --</option>
                                                                            <option value="13">Nursing Scholarship</option>
                                                                            <option value="14">HHDL Scholarship</option>
                                                                        </select></div>
                                                                    <div class="col-sm-4 col-xl-3 offset-xl-0 text-right align-self-center">
                                                                        <p class="text-left mb-0 font-sm"><strong>&nbsp;</strong><a href="#"><strong>Click here</strong></a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="table-responsive text-break table results mb-0 donor-list tmd">
                                        <table class="table table-sm">
                                            <thead class="cs-tbl-hd">
                                                <tr>
                                                    <th class="w-20x">Application Details</th>
                                                    <th>Applicant's Details</th>
                                                    <th class="w-25x">Contact Details</th>
                                                    <th>Applicant's Address</th>
                                                    <th class="w-15x">Submission</th>
                                                    <th class="text-center w-10x">Status</th>
                                                    <th class="text-center w-5x">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody style="color:#000;" class="h-35x font-sm">
                                                <tr  v-for="(eachData,i) in getAllData" :key="i">
                                                    <td class="w-20x">Application No: {{eachData.schApplicationId}}<br>Session: {{eachData.financialYear}}<br>Type: {{eachData.scholarshipType}}</td>
                                                    <td>Name : {{eachData.applicantNameF}} {{(eachData.applicantNameM)?" "+eachData.applicantNameM:''}} {{eachData.applicantNameL}} ,<br>Gender: {{eachData.applicantGender}},<br> Date of Birth : {{eachData.applicantDOB.split('-').reverse().join('/')}} <br>Age: <span v-if="calAge(eachData.applicantDOB) !== null">({{calAge(eachData.applicantDOB).years}} Years {{calAge(eachData.applicantDOB).months}} Months &amp; {{calAge(eachData.applicantDOB).days}} Days)</span></td>
                                                    <td class="w-25x">Applicant phone No :{{eachData.applicantContactNoSelf}}, <br> Alternate no : {{eachData.applicantContactNoGuardian}}<br>Email : {{eachData.applicantEmailId}}</td>
                                                    <td>{{eachData.get_address.addressAddln1}},{{(eachData.get_address.addressAddln2)?" "+eachData.get_address.addressAddln2:''}} ,City: {{(eachData.get_address.addressCity)?" "+eachData.get_address.addressCity:''}} <br>Dist : {{(eachData.get_address.addressDistprov)?" "+eachData.get_address.addressDistprov:''}}<br>{{eachData.get_address.addressState}} - {{eachData.get_address.addressPinzip}}</td>
                                                    <td class="w-15x">Date: {{(eachData.dateLastSubmitted)?" "+eachData.dateLastSubmitted.split('T')[0].split('-').reverse().join('/'):''}}<br>Type: {{eachData.applicationType}}</td>
                                                    <td class="text-center w-10x">
                                                        <span class="badge badge-pill badge-warning font-sm mt-2" v-if ="eachData.appStatus == 'Saved' ">Saved</span> 
                                                        <span class="badge badge-pill badge-success font-sm mt-2" v-if ="eachData.appStatus == 'Submit' ">Submitted</span></td>
                                                    <td class="text-center w-5x">
                                                        <div class="dropdown no-arrow dr-all">
                                                            <a class="btn btn-sm" aria-expanded="false" data-toggle="dropdown" role="button" href="#"><i class="fas fa-bars color-mg"></i></a>
                                                            <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                                                <!-- <a class="dropdown-item" href="#"><strong>Review Application</strong></a> -->
                                                                    <router-link class="dropdown-item" :to="'/admin/review-application-form/'+eachData.schApplicationId"><strong>View Application</strong></router-link>
                                                                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#view-application-comments"><strong>View Comments</strong></a> -->
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td class="w-20x">AP-HHDLSCH-2021-22-0010<br>Session: 2020 - 2021<br>Type: HHDL</td>
                                                    <td>Rahul Kr. Pandit<br>Gender: Male, <br>Age: 24 Yrs. 7 mo 20 days</td>
                                                    <td class="w-15x"><em>7278491931,</em><br><em>rahul@gmail.com</em></td>
                                                    <td>22/61/04, Sundia Saratpally, Bhatpara(M), West Bengal - 743126<br></td>
                                                    <td class="w-15x">Date: 05-03-2021,<br>Type: Offline</td>
                                                    <td class="text-center w-10x">Submitted,<br>dd/mm/yyyy<span class="badge badge-success"></span></td>
                                                    <td class="text-center w-5x">
                                                        <div class="dropdown no-arrow dr-all"><a class="btn btn-sm" aria-expanded="false" data-toggle="dropdown" role="button" href="#"><i class="fas fa-bars color-mg"></i></a>
                                                            <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"><a class="dropdown-item" href="#"><strong>Edit Application</strong></a><a class="dropdown-item" href="admin-view-hhdl-application.html"><strong>View Application</strong></a><a class="dropdown-item" href="#"><strong>Review Application</strong></a><a class="dropdown-item" href="#" data-toggle="modal" data-target="#view-application-comments"><strong>View Comments</strong></a></div>
                                                        </div>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="view-application-comments">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header py-2">
                                                    <h6 class="modal-title color-mg font-md"><strong>View Application Comments</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body p-2">
                                                    <div class="table-responsive text-break table results mb-0 donor-list tmd">
                                                        <table class="table table-sm">
                                                            <thead class="cs-tbl-hd">
                                                                <tr>
                                                                    <th class="w-10x">Date</th>
                                                                    <th>Status</th>
                                                                    <th class="text-center w-7x">Action</th>
                                                                    <th>User</th>
                                                                    <th class="text-center">View Communication</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="h-38x font-sm">
                                                                <tr>
                                                                    <td class="w-10x">dd/mm/yyyy</td>
                                                                    <td>Returned with comments</td>
                                                                    <td class="text-center w-7x">Return</td>
                                                                    <td>IMIS-USER-005</td>
                                                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#detailed-comment-view"><i class="fa fa-eye color-mg fa-2x"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="w-10x">dd/mm/yyyy</td>
                                                                    <td>Provisionally Accepted</td>
                                                                    <td class="text-center w-7x">Accept</td>
                                                                    <td>IMIS-USER-005</td>
                                                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#detailed-comment-view"><i class="fa fa-eye color-mg fa-2x"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="w-10x">dd/mm/yyyy</td>
                                                                    <td>Accepted</td>
                                                                    <td class="text-center w-7x">Accept</td>
                                                                    <td>IMIS-USER-005</td>
                                                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#detailed-comment-view"><i class="fa fa-eye color-mg fa-2x"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer py-1"><button class="btn btn-cancel font-md" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="detailed-comment-view" style="z-index: 1051;">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header py-2">
                                                    <h6 class="modal-title color-mg font-md"><strong>Detailed Comments</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body cs-modal-body">
                                                    <div class="row mx-0">
                                                        <div class="col-xl-1 align-self-center mb-2">
                                                            <p class="mb-0 color-mg font-sm font-weight-bold">TO:&nbsp;</p>
                                                        </div>
                                                        <div class="col-xl-11 mb-2">
                                                            <p class="mb-0 color-mg font-sm font-weight-bold">souvikkundu931@gmail.com</p>
                                                        </div>
                                                        <div class="col-xl-1 align-self-center mb-2">
                                                            <p class="mb-0 color-mg font-sm font-weight-bold">CC:</p>
                                                        </div>
                                                        <div class="col-xl-11 mb-2">
                                                            <p class="mb-0 color-mg font-sm font-weight-bold">ritaban.me@gmail.com, biswanath.srkp@gmail.com</p>
                                                        </div>
                                                        <div class="col-xl-1 align-self-center mb-4">
                                                            <p class="mb-0 color-mg font-sm font-weight-bold">Subject:</p>
                                                        </div>
                                                        <div class="col-xl-11 mb-4">
                                                            <p class="mb-0 color-mg font-sm font-weight-bold">Provisional Acceptance</p>
                                                        </div>
                                                        <div class="col-xl-12 mb-2">
                                                            <p class="mb-1 color-mg font-sm font-weight-bold">To,&nbsp;<span>Souvik Kundu</span></p>
                                                            <p class="mb-3 color-mg font-sm font-weight-bold pl-4">Address Line 1, Address Line 2,<br>City/Town/Dist,<br>State, ZIP, Country</p>
                                                            <p class="mb-2 color-mg font-sm font-weight-bold pl-4">Dear Applicant,<br></p>
                                                            <p class="mb-1 text-black font-sm pl-4">We have received your application for No.&nbsp;<span>APLNUSCH00058</span> for&nbsp;<span>Nursing</span> scholarship. We are&nbsp;<span>Provisionally Accepting</span>&nbsp;your application.<br></p>
                                                            <p class="mb-2 text-black font-sm pl-4">Kindly check our comments on the documents submitted and re-submit as required.<br></p>
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
                                                                            <td>Application No. IMIS-HHDLSCH00058 for HHDL Scholarship<br></td>
                                                                            <td>Application Form<br></td>
                                                                            <td class="text-center">N/A<br></td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Not OK</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Annexure-I letter<br></td>
                                                                            <td>Attachment</td>
                                                                            <td class="text-center">N/A</td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Not Signed By Colony Leader</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Proof of admission in a recognized&nbsp;institute/ admission call letter issued by the institute<br></td>
                                                                            <td>Attachment<br></td>
                                                                            <td class="text-center text-danger">NO<br></td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Wrong Document Uploaded</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Annexure-II letter from colony leader stating the candidate is residing in the colony<br></td>
                                                                            <td>Attachment<br></td>
                                                                            <td class="text-center">Yes<br></td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Wrong Document Uploaded</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Passport size photograph<br></td>
                                                                            <td>Attachment<br></td>
                                                                            <td class="text-center">Yes<br></td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Wrong Document Uploaded</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Self attested Birth certificate/ proof of age<br></td>
                                                                            <td>Attachment<br></td>
                                                                            <td class="text-center">Yes<br></td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Wrong Document Uploaded</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Self attested marksheet for 10th<br></td>
                                                                            <td>Attachment<br></td>
                                                                            <td class="text-center">Yes<br></td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Wrong Document Uploaded</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Self attested marksheet for 12th/ Graduation<br></td>
                                                                            <td>Attachment<br></td>
                                                                            <td class="text-center">Yes<br></td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Wrong Document Uploaded</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Self attested Leprosy Certificate of Mother<br></td>
                                                                            <td>Attachment<br></td>
                                                                            <td class="text-center">Yes<br></td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Wrong Document Uploaded</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Self attested Leprosy Certificate of Father<br></td>
                                                                            <td>Attachment<br></td>
                                                                            <td class="text-center">Yes</td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Wrong Document Uploaded</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Self attested Leprosy Certificate of Self<br></td>
                                                                            <td>Attachment<br></td>
                                                                            <td class="text-center">Yes<br></td>
                                                                            <td class="text-center">OK</td>
                                                                            <td class="text-center">Wrong Document Uploaded</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-9 mb-2">
                                                            <p class="mb-0 color-mg font-sm font-weight-bold pl-4">This is a demo of additional comments..</p>
                                                        </div>
                                                        <div class="col-xl-11 offset-xl-0 align-self-center">
                                                            <p class="mb-0 text-black font-sm pl-4">You are required to check your application based on the comments and resubmit by: dd/mm/yyyy</p>
                                                        </div>
                                                        <div class="col-xl-11 offset-xl-0 align-self-center mb-4">
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
            userName: document.querySelector("meta[name='userName']").getAttribute('content'),
           getAllData:{}, 
          }
    },
    methods:{

        calAge:  function (dob) {
            if (dob === null || dob === '') { return null; }
            dob = new Date(dob);
            const dobYear = dob.getYear();
            const dobMonth = dob.getMonth();
            const dobDate = dob.getDate();
            const now = new Date();
            const currentYear = now.getYear();  
            const currentMonth = now.getMonth();  
            const currentDate = now.getDate();
            let yearAge = currentYear - dobYear; 
            let monthAge = (currentMonth >= dobMonth)?(currentMonth - dobMonth):((yearAge--),(12 + currentMonth - dobMonth));
            let dateAge = (currentDate >= dobDate)?(currentDate - dobDate):((monthAge--),(31 + currentDate - dobDate),(monthAge < 0)?((monthAge = 11),(yearAge--)):(''));
            
            return { years: yearAge, months: monthAge, days: dateAge };
        },//end of calc age

        getData(){
             axios.get('/admin/admin-api/get-application-details')
             .then(response => {
                   this.getAllData = response.data
             });
        },
            logout()
            {
                axios.get('/admin/logout').then(function(){
                    document.location.href = "/admin/login";
                })
            },
    },

    created()
         {
           this.getData();
         }
}
</script>