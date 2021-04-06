<template>
<section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                        <h5 class="text-capitalize text-center color-mg"><strong>Application From for {{this.form.applicationType}} ({{getdata.financialYear}})</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                                <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/application-form'"><strong>Applicant Details</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO' && form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-1'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/review-submit/'+form.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Review &amp; Submit</strong></router-link></li>
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
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.applicantNameF" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <label>Applicant's Middle name:</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.applicantNameM">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <label>Applicant's Last name:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.applicantNameL" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <label>Father's name:</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.applicantFatherName">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <label>Mother's name:</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.applicantMotherName">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <label>DOB:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="date" v-model="form.applicantDOB" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <label>Gender&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control form-control-sm" v-model="form.applicantGender" required>
                                                                            <option value="" disabled>--Select--</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                        </select>
                                                                        </div>
                                                                </div>
                                                                <div class="col-xl-3 align-self-center">
                                                                    <label>Who is affected by leprosy:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedMother" id="formCheck-4"><label class="form-check-label font-md" for="formCheck-1">Mother</label></div>
                                                                        <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedFather" id="formCheck-2"><label class="form-check-label font-md" for="formCheck-2">Father</label></div>
                                                                        <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedSelf"   id="formCheck-3"><label class="form-check-label font-md" for="formCheck-3">Self</label></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <label>whether family has a BPL card:&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control form-control-sm" v-model="form.applicantHasBPLCard"  required>
                                                                            <option value="" disabled>--Select--</option>
                                                                            <option value="Yes">YES</option>
                                                                            <option value="No">NO</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <label>Domicile state&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control form-control-sm" v-model="form.applicantDomicileState" required>
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
                                                                <div class="col-xl-5">
                                                                    <label>House No and Colony Name / Address Line 1&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.addressAddln1"  required>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-xl-5">
                                                                    <label>Address Line 2</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.addressAddln2">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <label>City</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.addressCity">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <label>District</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.addressDistprov">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-xl-3">
                                                                    <label>State&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group"> 
                                                                        <select class="form-control form-control-sm" v-model="form.addressState" required>
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
                                                                        <label>PIN/ZIP Code&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="number"  v-model="form.addressPinzip"  required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <label>Contact no. (Self)&nbsp;<span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="number"  v-model="form.applicantContactNoSelf" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <label>Contact no. (father)&nbsp;<span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                    <input class="form-control form-control-sm" type="number"  v-model="form.applicantContactNoGuardian" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <label>Email ID&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="email" v-model="form.applicantEmailId" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <label>Contact no. (colony leader)&nbsp;<span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="number"  v-model="form.applicantContactNoColonyLeader" required>
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
                                                                <div class="col-xl-12 mb-2"><label>Details of educational qualification: Matriculation/Higher Secondary/ Graduation:<br></label>
                                                                    <div class="table-responsive font-md">
                                                                        <table class="table table-sm mb-0">
                                                                            <thead class="font-sm color-mg">
                                                                                <tr>
                                                                                    <th>Examination Level&nbsp;<span class="text-danger">*</span></th>
                                                                                    <th>Examination Passed&nbsp;<span class="text-danger">*</span></th>
                                                                                    <th>University/ Board/ Council&nbsp;<span class="text-danger">*</span></th>
                                                                                    <th>Main Subjects&nbsp;<span class="text-danger">*</span></th>
                                                                                    <th>Year of Passing&nbsp;<span class="text-danger">*</span></th>
                                                                                    <th>Percentage(%)&nbsp;<span class="text-danger">*</span></th>
                                                                                    <th>Division&nbsp;<span class="text-danger">*</span></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education1ExaminationLevel">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="10">10th</option>
                                                                                                <option value="12">12th</option>
                                                                                                <option value="11">Graduation</option>
                                                                                                <option value="Others">Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education1ExaminationPassed">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="3">Madhyamik</option>
                                                                                                <option value="2">Higher Secondary</option>
                                                                                                <option value="1">B.Com</option>
                                                                                                <option value="Others">Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education1University">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="3">WBBSE</option>
                                                                                                <option value="2">WBCHSE</option>
                                                                                                <option value="1">WBSCTVE&amp;D</option>
                                                                                                <option value="Others">Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <textarea class="form-control form-control-sm" placeholder="Type separated by comma" v-model="form.education1MainSubjects"></textarea>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education1YearOfPassing">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="2021">2021</option>
                                                                                                <option value="2020">2020</option>
                                                                                                <option value="2019">2019</option>
                                                                                                <option value="2018">2018</option>
                                                                                                <option value="2017">2017</option>
                                                                                                <option value="2016">2016</option>
                                                                                                <option value="2015">2015</option>
                                                                                                <option value="3">2014</option>
                                                                                                <option value="2">2013</option>
                                                                                                <option value="1">2012</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education1Percentage">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education1Division">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="1st">1st</option>
                                                                                                <option value="2nd">2nd</option>
                                                                                                <option value="3rd">3rd</option>
                                                                                                <option value="N/A">N/A</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education2ExaminationLevel">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="10">10th</option>
                                                                                                <option value="12">12th</option>
                                                                                                <option value="11">Graduation</option>
                                                                                                <option value="Others">Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education2ExaminationPassed">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="3">Madhyamik</option>
                                                                                                <option value="2">Higher Secondary</option>
                                                                                                <option value="1">B.Com</option>
                                                                                                <option value="Others">Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education2University">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="3">WBBSE</option>
                                                                                                <option value="2">WBCHSE</option>
                                                                                                <option value="1">WBSCTVE&amp;D</option>
                                                                                                <option value="Others">Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <textarea class="form-control form-control-sm" placeholder="Type separated by comma" v-model="form.education2MainSubjects"></textarea>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education2YearOfPassing">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="2021">2021</option>
                                                                                                <option value="2020">2020</option>
                                                                                                <option value="2019">2019</option>
                                                                                                <option value="2018">2018</option>
                                                                                                <option value="2017">2017</option>
                                                                                                <option value="2016">2016</option>
                                                                                                <option value="2015">2015</option>
                                                                                                <option value="3">2014</option>
                                                                                                <option value="2">2013</option>
                                                                                                <option value="1">2012</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education2Percentage">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education2Division">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="1st">1st</option>
                                                                                                <option value="2nd">2nd</option>
                                                                                                <option value="3rd">3rd</option>
                                                                                                <option value="N/A">N/A</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr v-if="form.applicationType == 'hddlss'">
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education3ExaminationLevel">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="10th">10th</option>
                                                                                                <option value="12th">12th</option>
                                                                                                <option value="Graduation">Graduation</option>
                                                                                                <option value="Others">Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education3ExaminationPassed">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="Madhyamik">Madhyamik</option>
                                                                                                <option value="Higher Secondary">Higher Secondary</option>
                                                                                                <option value="B.Com">B.Com</option>
                                                                                                <option value="Others">Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education3University">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="WBBSE">WBBSE</option>
                                                                                                <option value="WBCHSE">WBCHSE</option>
                                                                                                <option value="WBSCTVE&D">WBSCTVE&amp;D</option>
                                                                                                <option value="Others">Others</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <textarea class="form-control form-control-sm" placeholder="Type separated by comma" v-model="form.education3MainSubjects"></textarea>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education3YearOfPassing">
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
                                                                                            <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education3Percentage">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                            <select class="form-control form-control-sm" v-model="form.education3Division">
                                                                                                <option value="" disabled>-- select --</option>
                                                                                                <option value="1st">1st</option>
                                                                                                <option value="2nd">2nd</option>
                                                                                                <option value="3rd">3rd</option>
                                                                                                <option value="N/A">N/A</option>
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
                                                                        <strong>Do you have Admission letter / Call letter:&nbsp;<span class="text-danger"><strong>*</strong></span></strong><br></p>
                                                                </div>
                                                                <div class="col-xl-2 align-self-center mb-2">
                                                                    <div class="form-group mb-0">
                                                                        <select class="form-control form-control-sm" v-model="form.hasAdmissionLetter" required @change="onSelect($event)">
                                                                            <option value="" disabled>--Select--</option>
                                                                            <option value="YES">YES</option>
                                                                            <option value="NO">NO</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12 mb-2">
                                                                    <label class="col-form-label">Name of the course you have been selected for:&nbsp;<span class="text-danger"><strong>*</strong></span><br></label>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label>Name of the course&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.insCourse" :disabled="inputDisabled" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label>Name of the institute</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.insName" :disabled="inputDisabled" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <label>Address Line 1&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.insAddressAddln1" :disabled="inputDisabled" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <label>Address Line 2</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.insAddressAddln2" :disabled="inputDisabled" >
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
                                                                    <label>State&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control form-control-sm" v-model="form.insAddressState" :disabled="inputDisabled" required>
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
                                                                    <label>PIN/ZIP Code&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control form-control-sm" type="text" v-model="form.insAddressPinzip" :disabled="inputDisabled" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3"><label>Whether recognized by Indian Nursing Council&nbsp;<span class="text-danger"><strong>*</strong></span><br></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control form-control-sm" v-model="form.recognizedByINC" :disabled="inputDisabled" required>
                                                                            <option value="" disabled >--Select--</option>
                                                                            <option value="N/A">N/A</option>
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
                                                                    <label>Kindly Mention The Name Of Your Sibling's Who Has Got Scholarship In The Past.<br>(If No, Leave It Blank).<br></label>
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
                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscName1">
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscCourse1">
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscYear1">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscName2">
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscCourse2">
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscYear2">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscName3">
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscCourse3">
                                                                                        </div>
                                                                                    </td>

                                                                                    <td>
                                                                                        <div class="form-group mb-0">
                                                                                        <input class="form-control form-control-sm" type="text" v-model="form.miscYear3">
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
                        <button class="btn btn-block btn-sm btn-mg" type="submit">
                            <strong>Save</strong>
                        </button>
                    </div>
                    <div class="col-xl-2 offset-xl-0 my-2">
                        <router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link>
                    </div>
                </div>
           </form>
        </div>
</section>
</template>

<script>
export default {
    data () {
        return {
            inputDisabled: false,
            csrf:   document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            userId: document.querySelector("meta[name='userId']").getAttribute('content'),
            form: {
                applicationId:'',
                applicationType: '',
                applicantNameF:document.querySelector("meta[name='firstname']").getAttribute('content'),
                applicantNameM:document.querySelector("meta[name='middlename']").getAttribute('content'),
                applicantNameL:document.querySelector("meta[name='lastname']").getAttribute('content'),
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
                applicantContactNoSelf: document.querySelector("meta[name='contactno']").getAttribute('content'),
                applicantContactNoGuardian:'',
                applicantEmailId:document.querySelector("meta[name='email']").getAttribute('content'),
                applicantContactNoColonyLeader:'',
                
                examinationLevel10:'',
                examinationPassed10:'',
                universityBoardCouncil10:'',
                mainSubjects10:'',
                yearOfPassing10:'',
                percentage10:'',
                division10:'',
                
                examinationLevel12:'',
                examinationPassed12:'',
                universityBoardCouncil12:'',
                mainSubjects12:'',
                yearOfPassing12:'',
                percentage12:'',
                division12:'',
                
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
        saveForm() 
        {
            if (this.form.applicationId == '') 
            {
                axios.post('/api/add-application-form/'+this.userId,this.form)
                .then(response => {
                    if (response.data['success']) {
                        this.readApplicationForm();
                        this.$fire({
                            position: 'top',
                            icon: 'success',
                            title: "Application Saved",
                            showConfirmButton: false,
                            timer: 3000
                        })
                    } else {
                        console.log(response.data['msg'])
                    }
                }).catch(error => this.errorMsg(error.response.status))
            } else { 
                axios.post('/api/edit-application-form/'+this.form.applicationId,this.form)
                .then(response => {
                    this.readApplicationForm();
                    if (response.data['success']) {
                        this.$fire({
                            position: 'top',
                            icon: 'success',
                            title: "Application Updated",
                            showConfirmButton: false,
                            timer: 3000
                        })
                    } else {
                        console.log(response.data['msg'])
                    }
                }).catch(error => this.errorMsg(error.response.status))
              }
           },
            async readApplicationForm() 
            {
                axios.get(`/api/application-form/${userId}`)
                .then(response => {
                    if (response.data['success']) {
                        this.form =  response.data['data'];
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
                }else
                {
                    this.inputDisabled = true;
                
                }  
            },
            checkNewApplicationType()
            {
                if(this.form.applicationId == ''){
                   this.form.applicationType =  window.location.pathname.split('/').reverse()[0];
                }
            },
            readDomainValues()
            {
                axios.get('/api/domain/examinationLevel')
                    .then(response => {
                        this.examinationLevelValues = response.data;
                    });
                axios.get('/api/domain/examinationPassed')
                    .then(response => {
                        this.examinationPassedValues= response.data;
                    });
                axios.get('/api/domain/universityBoardCouncil')
                    .then(response => {
                        this.universityBoardCouncilValues = response.data;
                    });
                
            }
         },
         created()
         {
           this.readDomainValues();
           this.readApplicationForm();
           this.checkNewApplicationType();
         }
}
 </script>