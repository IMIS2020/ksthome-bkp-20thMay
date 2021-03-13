<template>

<section class="page-main">
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                       <h5 class="text-capitalize text-center color-mg"><strong>Application form (Nursing scholarship   {{getdata.financialYear}})</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-form/'"><strong>Application Form</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-1'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-2'"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/upload-documents'"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/review-submit'"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                              

                                <div class="tab-pane active" role="tabpanel" id="tab-5">
                                    <form>
                                        <div class="div-inner-filed">
                                            <div class="form-row">
                                                <div class="col-xl-12 mb-2">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header">
                                                            <h6 class="mb-0 color-mg">Review Application Form</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive table-bordered font-sm rev-tbl">
                                                                <table class="table table-bordered table-sm mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Details</th>
                                                                            <th class="text-center">Download</th>
                                                                            <th class="text-center">View</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>My nursing application </strong>{{getdata.applicationId}}<strong>,&nbsp; for {{getdata.financialYear}}</strong></td>
                                                                            <td class="text-center"><router-link class="act-link" :to="'#'" ><i class="fa fa-download"></i></router-link></td>
                                                                            <td class="text-center"><router-link class="act-link" to="/print-view-nursing"><i class="fa fa-eye"></i></router-link></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-2">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header">
                                                            <h6 class="mb-0 color-mg">Review Attachments</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive table-bordered font-sm rev-tbl">
                                                                <table class="table table-bordered table-sm mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Details</th>
                                                                            <th class="text-center">Download</th>
                                                                            <th class="text-center">View</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>Proof of admission letter/call letter issued by the institute</strong><br></td>
                                                                                <td class="text-center" v-if="getFiles.admissionLetter !== '#'">
                                                                                    <router-link target="_blank" class="act-link" :to="''+getFiles.admissionLetter">
                                                                                    <i class="fa fa-download"></i>
                                                                                    </router-link>
                                                                                </td>
                                                                                    <td class="text-center" v-else>
                                                                                        <span class="act-link" style="color:#808080;">
                                                                                        <i class="fa fa-download"></i>
                                                                                        </span>
                                                                                    </td>
                                                                                <td class="text-center" v-if="getFiles.admissionLetter !== '#'">
                                                                                    <router-link class="act-link" to ="" data-toggle="modal" data-target="#vw-apo-form1">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </router-link>
                                                                                </td>
                                                                                <td class="text-center" v-else>
                                                                                    <span class="act-link" style="color:#808080;">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </span>
                                                                                </td>
                                                                           </tr>
                                                                        <tr>
                                                                            <td><strong>Annexure-II letter from colony leader stating the candidate is residing in the colony</strong><br></td>
                                                                            <td class="text-center" v-if="getFiles.annexureII !== '#'">
                                                                               <router-link target="_blank" class="act-link" :to="''+getFiles.annexureII">
                                                                                 <i class="fa fa-download"></i>
                                                                              </router-link>
                                                                            </td>
                                                                            <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-download"></i>
                                                                                </span>
                                                                            </td>
                                                                            <td class="text-center" v-if="getFiles.annexureII !== '#'">
                                                                                <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form2">
                                                                                <i class="fa fa-eye"></i>
                                                                               </router-link>
                                                                            </td>
                                                                            <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-eye"></i>
                                                                                </span>
                                                                           </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Passport size photograph</strong><br></td>
                                                                            <td class="text-center" v-if="getFiles.photograph !== '#'">
                                                                                <router-link target="_blank" class="act-link" :to="''+getFiles.photograph">
                                                                                 <i class="fa fa-download"></i>
                                                                              </router-link>
                                                                            </td>
                                                                               <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-download"></i>
                                                                                </span>
                                                                            </td>


                                                                            <td class="text-center" v-if="getFiles.photograph !== '#'">
                                                                                <router-link class="act-link" data-toggle="modal" to="" data-target="#vw-apo-form3">
                                                                                 <i class="fa fa-eye"></i>
                                                                               </router-link>
                                                                            </td>
                                                                            <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-eye"></i>
                                                                                </span>
                                                                           </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Self attested Birth certificate/ proof of age</strong><br></td>
                                                                            <td class="text-center" v-if="getFiles.proofOfAge !== '#'">
                                                                                 <router-link target="_blank" class="act-link" :to="''+getFiles.proofOfAge">
                                                                                 <i class="fa fa-download"></i>
                                                                              </router-link>
                                                                             </td>

                                                                              <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-download"></i>
                                                                                </span>
                                                                           </td>

                                                                            <td class="text-center" v-if="getFiles.proofOfAge !== '#'">
                                                                                <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form4">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </router-link>
                                                                            </td>

                                                                               <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-eye"></i>
                                                                                </span>
                                                                           </td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td><strong>Self attested marksheet for 10th</strong><br></td>
                                                                            <td class="text-center" v-if="getFiles.markSheets10 !== '#'">
                                                                                <router-link target="_blank" class="act-link" :to="''+getFiles.markSheets10">
                                                                                 <i class="fa fa-download"></i>
                                                                             </router-link>
                                                                             </td>

                                                                              <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-download"></i>
                                                                                </span>
                                                                            </td>

                                                                            <td class="text-center" v-if="getFiles.markSheets10 !== '#'">
                                                                                <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form5">
                                                                                  <i class="fa fa-eye"></i>
                                                                                </router-link>
                                                                            </td>

                                                                            <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-eye"></i>
                                                                                </span>
                                                                            </td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td><strong>Self attested marksheet for 12th</strong><br></td>
                                                                            <td class="text-center" v-if="getFiles.markSheets12 !== '#'">
                                                                             <router-link target="_blank" class="act-link" :to="''+getFiles.markSheets12">
                                                                                 <i class="fa fa-download"></i>
                                                                             </router-link>
                                                                             </td>
                                                                            
                                                                             <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-download"></i>
                                                                                </span>
                                                                            </td>

                                                                                <td class="text-center" v-if="getFiles.markSheets12 !== '#'">
                                                                                    <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form6">
                                                                                    <i class="fa fa-eye"></i>
                                                                                    </router-link>
                                                                                </td>
                                                                          
                                                                             <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-eye"></i>
                                                                                </span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td><strong>Self attested Leprosy Certificate (Self)</strong><br></td>
                                                                            <td class="text-center" v-if="getFiles.leprosyCertificateSelf !== '#'">
                                                                              <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateSelf">
                                                                                 <i class="fa fa-download"></i>
                                                                             </router-link>
                                                                            </td>

                                                                             <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-download"></i>
                                                                                </span>
                                                                            </td>

                                                                            <td class="text-center" v-if="getFiles.leprosyCertificateSelf !== '#'">
                                                                                <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form7">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </router-link>
                                                                            </td>
                                                                          
                                                                           <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-eye"></i>
                                                                                </span>
                                                                            </td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td><strong>Self attested Leprosy Certificate of (Mother)</strong><br></td>
                                                                            <td class="text-center" v-if="getFiles.leprosyCertificateMother !== '#'">
                                                                              <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateMother">
                                                                                 <i class="fa fa-download"></i>
                                                                             </router-link>
                                                                            </td>

                                                                             <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-download"></i>
                                                                                </span>
                                                                            </td>

                                                                            <td class="text-center" v-if="getFiles.leprosyCertificateMother !== '#'">
                                                                                <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form8">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </router-link>
                                                                            </td>
                                                                          
                                                                           <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-eye"></i>
                                                                                </span>
                                                                            </td>
                                                                        </tr>



                                                                         <tr>
                                                                            <td><strong>Self attested Leprosy Certificate of (Father)</strong><br></td>
                                                                            <td class="text-center" v-if="getFiles.leprosyCertificateFather !== '#'">
                                                                              <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateFather">
                                                                                 <i class="fa fa-download"></i>
                                                                             </router-link>
                                                                            </td>

                                                                             <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-download"></i>
                                                                                </span>
                                                                            </td>

                                                                            <td class="text-center" v-if="getFiles.leprosyCertificateFather !== '#'">
                                                                                <router-link class="act-link" to="" data-toggle="modal" data-target="#vw-apo-form9">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </router-link>
                                                                            </td>
                                                                          
                                                                           <td class="text-center" v-else>
                                                                                <span class="act-link" style="color:#808080;">
                                                                                <i class="fa fa-eye"></i>
                                                                                </span>
                                                                            </td>
                                                                        </tr>


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-2">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header">
                                                            <h6 class="mb-0 color-mg">Self Declaration</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="t-c-text">I {{getdata.fullName}} hereby declare that to the best of my knowledge the above information furnished by me is true and I understand that if at any stage, it is found that the information provided by me is false/ not true, all the benefits given to me under “Nursing Scholarship” could be withdrawn.</p>
                                                            <div class="form-group mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="formCheck-1" v-model='terms'>
                                                                    <label class="form-check-label" for="formCheck-1">I accept the terms &amp; conditions</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn btn-sm btn-mg" type="button" :disabled='isDisabled'>Submit Application Form</button>
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
                    <div class="col-xl-2 offset-xl-4 my-2"><button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Save</strong></button></div>
                    <div class="col-xl-2 offset-xl-0 my-2"><router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link></div>
                </div>
            </form>
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

    </section>
</template>

<script>
export default{
    data(){
       return{
         userId: document.querySelector("meta[name='userId']").getAttribute('content'),
         csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
         terms: false,
         getdata:{
            hasAdmissionLetter:'',
            financialYear:'',
        },
        getFiles:{
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
        errors:[]
        }
    },

 
   methods:{
      getdataNursing(){
       axios.get(`/api/application-form/${this.userId}`)
        .then(response => {
          if (response.data['success']) {
            const data = response.data['data']
            console.log(data)
            this.getdata.hasAdmissionLetter  = data.hasAdmissionLetter;
            this.getdata.financialYear       = data.financialYear ;
            this.getdata.applicationId       = data.applicationId;
            this.getdata.applicantNameF      = data.applicantNameF;
            this.getdata.applicantNameM      = data.applicantNameM;
            this.getdata.applicantNameL      = data.applicantNameL;
            this.getdata.financialYear       = data.financialYear;
            this.getdata.fullName = `${this.getdata.applicantNameF}${(this.getdata.applicantNameM)?" "+this.getdata.applicantNameM:''} ${this.getdata.applicantNameL}`;
            this.getFileData();
         }
      })
    },

         getFileData(){
            axios.get('/api/get-upload-documents/'+this.getdata.applicationId)
            .then(response => {
                if (response.data['success']) {
                    this.getFiles = response.data['data']
                }
            })
        }
  },

  computed: {
  	  isDisabled: function(){
    	return !this.terms;
        }
      },
    created(){
     this.getdataNursing();
    }
 }
</script>
