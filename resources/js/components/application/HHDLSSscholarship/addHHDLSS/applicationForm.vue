<template>
       <section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                        <h5 class="text-capitalize text-center color-mg"><strong>Application form (HHDLSS Scholarship {{getdata.financialYear}})</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                                <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/application-form-HHDLSS/'"><strong>Application Form</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-1-HHDLSS'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-2-HHDLSS'"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/upload-documents-HHDLSS'"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/review-submit-HHDLSS'"><strong>Review &amp; Submit</strong></router-link></li>
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
                                                                    <label>Applicant's First name:&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.applicantNameF" required> 
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-2">
                                                                        <label>Applicant's Middle name:</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.applicantNameM">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-2">
                                                                        <label>Applicant's Last name:&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                          <input class="form-control form-control-sm" type="text"  v-model="form.applicantNameL" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>Father's name:&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.applicantFatherName">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>Mother's name:&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.applicantMotherName">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-2">
                                                                        <label>DOB:&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="date" v-model="form.applicantDOB" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-2">
                                                                        <label>Gender&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <select class="form-control form-control-sm" v-model="form.applicantGender" required>
                                                                                <option value=""  disabled>--Select--</option>
                                                                                <option value="Male">Male</option>
                                                                                <option value="Female">Female</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>Who is affected by leprosy:&nbsp;<span class="text-danger">*</span></label>
                                                                          <div class="form-group">
                                                                            <ul class="list-inline mb-0 text-black-50">
                                                                                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedMother" id="formCheck-4"><label class="form-check-label font-md" for="formCheck-1">Mother</label></div>
                                                                                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedFather" id="formCheck-2"><label class="form-check-label font-md" for="formCheck-2">Father</label></div>
                                                                                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" v-model="form.applicantLeprosyAffectedSelf"   id="formCheck-3"><label class="form-check-label font-md" for="formCheck-3">Self</label></div>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>Whether family has a BPL card:&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <select class="form-control form-control-sm"   v-model="form.applicantHasBPLCard" required>
                                                                                <option value=""  disabled>--Select--</option>
                                                                                <option value="YES">YES</option>
                                                                                <option value="NO">NO</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-2">
                                                                        <label>Domicile state&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <select class="form-control form-control-sm"  v-model="form.applicantDomicileState" required>
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
                                                                        <label>Colony Name and House No &nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                          <input class="form-control form-control-sm" type="text" v-model="form.addressAddln1" required> 
                                                                        </div>
                                                                    </div>

                                                                    <!-- <div class="col-xl-4">
                                                                        <label>Address Line 1</label>
                                                                        <div class="form-group">
                                                                          <input class="form-control form-control-sm" type="text"  required>
                                                                        </div>
                                                                    </div> -->

                                                                    <div class="col-xl-4">
                                                                        <label>Address Line 2</label>
                                                                        <div class="form-group">
                                                                         <input class="form-control form-control-sm" type="text"  v-model="form.addressAddln2">
                                                                         </div>
                                                                    </div>

                                                                    <div class="col-xl-4">
                                                                        <label>City</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.addressCity">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>District</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.addressDistprov">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>State&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group"><select class="form-control form-control-sm"  v-model="form.addressState" required>
                                                                                <option value=""  disabled>--Select--</option>
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
                                                                        <label>PIN/ZIP Code:&nbsp;<span class="text-danger">*</span></label>
                                                                         <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.addressPinzip" maxlength="6" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>Contact no. (Self)&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.applicantContactNoSelf" maxlength="10" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>Contact no. (father)&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.applicantContactNoGuardian" maxlength="10" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>Email ID &nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="email"  v-model="form.applicantEmailId" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-3">
                                                                        <label>Contact no. (colony leader)&nbsp;<span class="text-danger">*</span></label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.applicantContactNoColonyLeader" required maxlength="10">
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
                                                                        
                                                                        <label>Details of educational qualification: Matriculation/SSLC/SSC/Graduation:&nbsp;<span class="text-danger">*</span><br></label>
                                                                        <div class="table-responsive font-md">
                                                                            <table class="table table-sm mb-0">
                                                                                <thead class="font-sm color-mg">
                                                                                    <tr>
                                                                                        <th>Examination Passed</th>
                                                                                        <th>University/ Board/ Council</th>
                                                                                        <th>Main Subjects</th>
                                                                                        <th>Year of Passing</th>
                                                                                        <th>Percentage</th>
                                                                                        <th>Division</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education1ExaminationPassed">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education1University">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education1MainSubjects">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education1YearOfPassing" maxlength="4">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education1Percentage">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education1Division">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education2ExaminationPassed">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education2University">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education2MainSubjects">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education2YearOfPassing" maxlength="4">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education2Percentage">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education2Division">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education3ExaminationPassed">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education3University">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education3MainSubjects">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education3YearOfPassing" maxlength="4">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education3Percentage">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education3Division">
                                                                                            </div>
                                                                                        </td>

                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education4ExaminationPassed">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education4University">
                                                                                            </div>
                                                                                        </td>
                                                                                        
                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education4MainSubjects">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education4YearOfPassing" maxlength="4">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="number" min="0" max="100" step="0.01" v-model="form.education4Percentage">
                                                                                            </div>
                                                                                        </td>

                                                                                        <td>
                                                                                            <div class="form-group mb-0">
                                                                                                <input class="form-control form-control-sm" type="text" v-model="form.education4Division">
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
                                                                        <p class="color-mg font-md mb-0"><strong>Do you have Admission letter / Call letter:&nbsp;</strong><br></p>
                                                                    </div>
                                                                    <div class="col-xl-2 align-self-center mb-2">
                                                                        <div class="form-group mb-0">
                                                                            <select class="form-control form-control-sm" v-model="form.hasAdmissionLetter" required  @change="onSelect($event)">
                                                                                <option value="" disabled>--Select--</option>
                                                                                <option value="YES" >YES</option>
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
                                                                                <input class="form-control form-control-sm" type="text" v-model="form.insCourse" :disabled="inputDisabled">
                                                                            </div>
                                                                        </div>

                                                                    <div class="col-xl-6">
                                                                        <label>Name of the institute</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text" v-model="form.insName" :disabled="inputDisabled" >
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
                                                                            <input class="form-control form-control-sm" type="text" v-model="form.insAddressAddln2 " :disabled="inputDisabled">
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
                                                                            <input class="form-control form-control-sm" type="text" v-model="form.insAddressDistprov" :disabled="inputDisabled">
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
                                                                            <input class="form-control form-control-sm" type="text" v-model="form.insAddressPinzip" maxlength="6" :disabled="inputDisabled" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <label>Whether recognized by Government of India<br></label>
                                                                        <div class="form-group">
                                                                            <select class="form-control form-control-sm" v-model="form.recognizedByGI" :disabled="inputDisabled">
                                                                                <option value=""  disabled>--Select--</option>
                                                                                <option value="N/A" >N/A</option>
                                                                                <option value="YES">YES</option>
                                                                                <option value="NO">NO</option>
                                                                            </select>
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
                        <button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Save</strong></button>
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
export default{
    data (){
        return{
            inputDisabled: false,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            userId: document.querySelector("meta[name='userId']").getAttribute('content'),
            form:{
                
                applicationId:'',
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
                
                hasAdmissionLetter:'YES',
                insCourse:'',
                insName:'',
                insAddressAddln1:'',
                insAddressAddln2:'',
                insAddressCity:'',
                insAddressDistprov:'',
                insAddressState:'',
                insAddressPinzip:'',
                recognizedByGI:'',
             //Education Details
                education1ExaminationPassed:'',
                education1University:'',
                education1MainSubjects:'',
                education1YearOfPassing:'',
                education1Percentage:'',
                education1Division:'',
              
                education2ExaminationPassed:'',
                education2University:'',
                education2MainSubjects:'',
                education2YearOfPassing:'',
                education2Percentage:'',
                education2Division:'',

                education3ExaminationPassed:'',
                education3University:'',
                education3MainSubjects:'',
                education3YearOfPassing:'',
                education3Percentage:'',
                education3Division:'',

                education4ExaminationPassed:'',
                education4University:'',
                education4MainSubjects:'',
                education4YearOfPassing:'',
                education4Percentage:'',
                education4Division:'',
            },
            getdata: {
             financialYear:'',
            },
            errors :'',
            error:[],
        }
    },
    methods:
    {
      saveForm() 
        {
            if (this.form.applicationId == '') {
                axios.post('/api/add-application-form-HHDLSS/'+this.userId,this.form)
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
                       
                axios.post('/api/edit-application-form-HHDLSS/'+this.form.applicationId,this.form)
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
            axios.get(`/api/application-form-HHDLSS/${this.userId}`)
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
            }else{
                this.inputDisabled = true;
            }
        }

    },
     created () {
        this.readApplicationForm();
    }
}
</script>