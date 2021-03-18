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
                                <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-nursing-upload-documents/'+getdata.applicationId"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-review-submit/'+getdata.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active adm-tab" id="tab-4">
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
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.admissionLetter !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.admissionLetter"><i class="fa fa-eye"></i></router-link></td>
                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Annexure-I Signed letter from colony leader stating the candidate is residing in the colony</td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file d-none font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">System Generated</span></td>
                                                                                    <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Annexure-II Signed letter from colony leader stating the candidate is residing in the colony</td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file d-none font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center" ><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.annexureII === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center"  v-if="getFiles.annexureII !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.annexureII"><i class="fa fa-eye"></i></router-link></td>
                                                                                    <td class="text-center"  v-else><router-link class="act-link mr-0" to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Passport size photograph</td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.photograph === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center"  v-if="getFiles.photograph !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.photograph"><i class="fa fa-eye"></i></router-link></td>
                                                                                    <td class="text-center"  v-else><router-link class="act-link mr-0" to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Self attested Birth certificate/ proof of age</td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file d-none font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.proofOfAge === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center"  v-if="getFiles.proofOfAge !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.proofOfAge"><i class="fa fa-eye"></i></router-link></td>
                                                                                    <td class="text-center"  v-else><router-link class="act-link mr-0" to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Self attested Mark Sheet for 10th</td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets10 === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.markSheets10 !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.markSheets10"><i class="fa fa-eye"></i></router-link></td>
                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Self attested Mark Sheet for 12th</td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets12 === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.markSheets12 !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.markSheets12"><i class="fa fa-eye"></i></router-link></td>
                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                </tr>
                                                                                <!-- <tr>
                                                                                    <td>Self attested Mark Sheet for Graduation</td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                    <td class="text-center"><a class="act-link mr-0" href="#"><i class="fa fa-eye"></i></a></td>
                                                                                </tr> -->
                                                                                <tr>
                                                                                    <td>Self attested Leprosy Certificate of Mother<br /></td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateMother === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateMother !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.leprosyCertificateMother"><i class="fa fa-eye"></i></router-link></td>
                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Self attested Leprosy Certificate of Father<br /></td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateFather === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateFather !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.leprosyCertificateFather"><i class="fa fa-eye"></i></router-link></td>
                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Self attested Leprosy Certificate of Self<br /></td>
                                                                                    <td class="d-none">
                                                                                        <div class="form-group"><input type="file" class="form-control-file font-sm" /></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateSelf === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateSelf !== '#'"><router-link target="_blank" class="act-link mr-0" :to="''+getFiles.leprosyCertificateSelf"><i class="fa fa-eye"></i></router-link></td>
                                                                                    <td class="text-center" v-else><router-link class="act-link mr-0" :to="'#'"><i class="fa fa-eye"></i></router-link></td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                leprosyCertificateMother :'',
                leprosyCertificateFather :'',
                leprosyCertificateSelf :'',
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

                    this.getdata.leprosyCertificateMother = data.leprosyCertificateMother;
                    this.getdata.leprosyCertificateFather = data.leprosyCertificateFather;
                    this.getdata.leprosyCertificateSelf = data.leprosyCertificateSelf;

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
     this.getFileData();
    }
 }
</script>
