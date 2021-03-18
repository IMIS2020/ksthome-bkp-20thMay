<template>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
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
    }
 }
</script>
