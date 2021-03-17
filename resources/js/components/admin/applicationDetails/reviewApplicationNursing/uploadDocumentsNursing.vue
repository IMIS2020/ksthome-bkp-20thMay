<template>
    <section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                         <h5 class="text-capitalize text-center color-mg"><strong>Application form (Nursing scholarship   {{getdata.financialYear}})</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                                <li class="nav-item" role="presentation"><router-link class="nav-link " role="tab" data-toggle="tab" :to="'/admin/review-nursing-application-form/'+getdata.applicationId"><strong>Application Form</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-1/'+getdata.applicationId"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link " role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-2/'+getdata.applicationId"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-nursing-upload-documents/'+getdata.applicationId"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-review-submit/'+getdata.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-4">
                                    <div class="ub-reg-form">
                                        <div class="div-inner-filed">
                                            <div class="form-row">
                                                <div class="col-xl-12">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header">
                                                            <h6 class="mb-0 color-mg">Upload Documents Here(Max size 1 MB JPG,PNG,PDF format only)</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-xl-12">
                                                                    <div class="table-responsive font-md rev-tbl">
                                                                        <table class="table table-sm mb-0">
                                                                            <thead>
                                                                                <tr class="color-mg">
                                                                                    <th colspan="2">Required Document</th>
                                                                                    <!-- <th>Choose file</th> -->
                                                                                    <th class="text-center">Uploaded</th>
                                                                                    <th class="text-center">Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Proof of admission letter/call letter issued by the institute</strong></td>
                                                                                     <!-- <td> -->
                                                                                        <!-- <div class="form-group" >
                                                                                            <input style="display:none;" type="file" ref="admissionLetter" v-on:change="selectFile('admissionLetter')" class="font-sm">
                                                                                        </div> -->

                                                                                         <!-- <div class="form-group" >
                                                                                            <input type="file" ref="admissionLetter" v-on:change="selectFile('admissionLetter')" class="font-sm" >
                                                                                        </div> -->
                                                                                    <!-- </td>  -->
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}</span></td>

                                                                                    <td class="text-center" v-if="getFiles.admissionLetter !== '#'">
                                                                                      <router-link target="_blank" class="act-link" :to="''+getFiles.admissionLetter">
                                                                                        <i class="fa fa-eye"></i>
                                                                                      </router-link>
                                                                                         <!-- <button class="act-link" type="button" @click.prevent="deleteFile('admissionLetter')">
                                                                                            <i class="fa fa-trash"></i>
                                                                                         </button> -->
                                                                                    </td>

                                                                                        <td class="text-center" v-else>
                                                                                          <span class="act-link"  style="color:#808080;">
                                                                                           <i class="fa fa-eye"></i>
                                                                                          </span>
                                                                                            <!-- <span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span> -->
                                                                                       </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Annexure-II Signed letter from colony leader stating the candidate is residing in the colony</strong></td>
                                                                                    <!-- <td>
                                                                                        <div class="form-group">
                                                                                            <input type="file"  style="display:none;" class="font-sm" ref="annexureII" v-on:change="selectFile('annexureII')" ></div>
                                                                                    </td> -->
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.annexureII === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.annexureII !== '#'">
                                                                                        <router-link target="_blank" class="act-link" :to="''+getFiles.annexureII"><i class="fa fa-eye"></i></router-link>
                                                                                       <!-- <button class="act-link" type="button" @click.prevent="deleteFile('annexureII')">
                                                                                            <i class="fa fa-trash"></i>
                                                                                         </button> -->
                                                                                    </td>

                                                                                     <td class="text-center" v-else>
                                                                                          <span class="act-link"  style="color:#808080;">
                                                                                           <i class="fa fa-eye"></i>
                                                                                          </span>
                                                                                            <!-- <span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span> -->
                                                                                       </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Passport size photograph</strong></td>
                                                                                    <!-- <td>
                                                                                        <div class="form-group"> 
                                                                                            <input  style="display:none;" type="file" class="font-sm" ref="photograph" v-on:change="selectFile('photograph')" ></div>
                                                                                    </td> -->
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.photograph === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.photograph !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.photograph"><i class="fa fa-eye"></i></router-link>
                                                                                       <!-- <button class="act-link" type="button" @click.prevent="deleteFile('photograph')">
                                                                                            <i class="fa fa-trash"></i>
                                                                                         </button> -->
                                                                                    </td>

                                                                                     <td class="text-center" v-else>
                                                                                          <span class="act-link" style="color:#808080;">
                                                                                           <i class="fa fa-eye"></i>
                                                                                          </span>
                                                                                            <!-- <span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span> -->
                                                                                       </td>
                                                                                    </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Birth certificate/ proof of age</strong></td>
                                                                                    <!-- <td>
                                                                                        <div class="form-group">
                                                                                            <input type="file"  style="display:none;" class="font-sm" ref="proofOfAge" v-on:change="selectFile('proofOfAge')" ></div>
                                                                                    </td> -->
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.proofOfAge === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.proofOfAge !== '#'">
                                                                                       <router-link target="_blank" class="act-link" :to="''+getFiles.proofOfAge"><i class="fa fa-eye"></i></router-link>
                                                                                       <!-- <button class="act-link" type="button" @click.prevent="deleteFile('proofOfAge')">
                                                                                            <i class="fa fa-trash"></i>
                                                                                         </button> -->
                                                                                    </td>

                                                                                    <td class="text-center" v-else>
                                                                                          <span class="act-link" style="color:#808080;">
                                                                                           <i class="fa fa-eye"></i>
                                                                                          </span>
                                                                                            <!-- <span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span> -->
                                                                                       </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Mark Sheets for 10th</strong></td>
                                                                                    <!-- <td>
                                                                                        <div class="form-group">
                                                                                            <input type="file"  style="display:none;" class="font-sm" ref="markSheets10" v-on:change="selectFile('markSheets10')"  ></div>
                                                                                    </td> -->
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets10 === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.markSheets10 !== '#'">
                                                                                         <router-link target="_blank" class="act-link" :to="''+getFiles.markSheets10"><i class="fa fa-eye"></i></router-link>
                                                                                       <!-- <button class="act-link" type="button" @click.prevent="deleteFile('markSheets10')">
                                                                                            <i class="fa fa-trash"></i>
                                                                                         </button> -->
                                                                                    </td>

                                                                                     <td class="text-center" v-else>
                                                                                          <span class="act-link" style="color:#808080;">
                                                                                           <i class="fa fa-eye"></i>
                                                                                          </span>
                                                                                            <!-- <span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span> -->
                                                                                       </td>
                                                                                </tr>
                                                                                <tr>
                                                                        
                                                                                    <td colspan="2"><strong>Self attested Mark Sheets for 12th</strong></td>
                                                                                    <!-- <td>
                                                                                        <div class="form-group"><input  style="display:none;" type="file" class="font-sm" ref="markSheets12" v-on:change="selectFile('markSheets12')" ></div>
                                                                                    </td> -->
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets12 === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.markSheets12 !== '#'">
                                                                                          <router-link target="_blank" class="act-link" :to="''+getFiles.markSheets12"><i class="fa fa-eye"></i></router-link>
                                                                                       <!-- <button class="act-link" type="button" @click.prevent="deleteFile('markSheets12')">
                                                                                            <i class="fa fa-trash"></i>
                                                                                         </button> -->
                                                                                    </td>

                                                                                     <td class="text-center" v-else>
                                                                                          <span class="act-link" style="color:#808080;">
                                                                                            <i class="fa fa-eye"></i>
                                                                                          </span>
                                                                                        <!-- <span class="act-link" style="color:#808080;">
                                                                                            <i class="fa fa-trash"></i>
                                                                                        </span> -->
                                                                                    </td>
                                                                                </tr>
                                                                                    <tr>
                                                                                    <td><strong>Self attested Leprosy Certificate (Self) </strong><br></td>
                                                                                    <td class="justify-content-xl-center align-items-xl-center">
                                                                                        
                                                                                    </td>
                                                                                    <!-- <td>
                                                                                        <div class="form-group"><input  style="display:none;" type="file" class="font-sm" ref="leprosyCertificateSelf" v-on:change="selectFile('leprosyCertificateSelf')" ></div>
                                                                                    </td> -->
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateSelf === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateSelf !== '#'">
                                                                                        <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateSelf"><i class="fa fa-eye"></i></router-link>
                                                                                       <!-- <button class="act-link" type="button" @click.prevent="deleteFile('leprosyCertificateSelf')">
                                                                                            <i class="fa fa-trash"></i>
                                                                                         </button> -->
                                                                                    </td>

                                                                                     <td class="text-center" v-else>
                                                                                          <span class="act-link" style="color:#808080;">
                                                                                           <i class="fa fa-eye"></i>
                                                                                          </span>
                                                                                            <!-- <span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span> -->
                                                                                       </td>
                                                                                    </tr>


                                                                                   <tr>
                                                                                    <td><strong>Self attested Leprosy Certificate (Mother) </strong><br></td>
                                                                                    <td class="justify-content-xl-center align-items-xl-center">
                                                                                    </td>
                                                                                    <!-- <td>
                                                                                        <div class="form-group">
                                                                                            <input type="file"  style="display:none;" class="font-sm" ref="leprosyCertificateMother" v-on:change="selectFile('leprosyCertificateMother')" >
                                                                                        </div>
                                                                                    </td> -->
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateMother === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateMother !== '#'">
                                                                                        <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateMother"><i class="fa fa-eye"></i></router-link>
                                                                                       <!-- <button class="act-link" type="button" @click.prevent="deleteFile('leprosyCertificateMother')">
                                                                                            <i class="fa fa-trash"></i>
                                                                                         </button> -->
                                                                                    </td>

                                                                                     <td class="text-center" v-else>
                                                                                          <span class="act-link" style="color:#808080;">
                                                                                           <i class="fa fa-eye"></i>
                                                                                          </span>
                                                                                            <!-- <span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span> -->
                                                                                       </td>
                                                                                   </tr>

                                                                                    <tr>
                                                                                    <td><strong>Self attested Leprosy Certificate (Father) </strong><br></td>
                                                                                    <td class="justify-content-xl-center align-items-xl-center">
                                                                                    </td>
                                                                                    <!-- <td>
                                                                                        <div class="form-group">
                                                                                            <input type="file"  style="display:none;" class="font-sm" ref="leprosyCertificateFather" v-on:change="selectFile('leprosyCertificateFather')" >
                                                                                        </div>
                                                                                    </td> -->
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateFather === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateFather !== '#'">
                                                                                        <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateFather"><i class="fa fa-eye"></i></router-link>
                                                                                       <!-- <button class="act-link" type="button" @click.prevent="deleteFile('leprosyCertificateFather')">
                                                                                            <i class="fa fa-trash"></i>
                                                                                         </button> -->
                                                                                    </td>

                                                                                     <td class="text-center" v-else>
                                                                                          <span class="act-link" style="color:#808080;">
                                                                                           <i class="fa fa-eye"></i>
                                                                                          </span>
                                                                                            <!-- <span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span> -->
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
                    <div class="col-xl-2 offset-xl-4 my-2"><button class="btn btn-block btn-sm btn-mg d-none" type="submit"><strong>Save</strong></button></div>
                    <div class="col-xl-2 offset-xl-0 my-2"><router-link class="btn btn-danger btn-block btn-sm d-none" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link>
                    </div>
                </div>
            </form>
        </div>
         <div class="modal fade" role="dialog" tabindex="-1" id="vw-apo-form">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title color-mg"><strong>Review Attachments</strong></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12"></div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-sm btn-mg" type="button"><strong>Print Application Form</strong></button><button class="btn btn-sm btn-mg" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default{
    data(){
        return {
           
            uploadFiles: {
                admissionLetter: '',
                annexureII: '',
                photograph: '',
                proofOfAge: '',
                markSheets10: '',
                markSheets12: '',
                leprosyCertificateSelf: '',
                leprosyCertificateMother: '',
                leprosyCertificateFather: ''

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
            },
            errors:[]
        }
    },
    methods:{
    
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
            axios.get('/admin-api/review-nursing-review-submit/'+currentUrl)
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
