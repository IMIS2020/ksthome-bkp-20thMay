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
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-form/'"><strong>Application Form</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-1'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-2'"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/upload-documents'"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/review-submit'"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                                  <div class="tab-pane active" role="tabpanel" id="tab-4">
                                    <div class="ub-reg-form">
                                        <div class="div-inner-filed">
                                            <div class="form-row">
                                                <div class="col-xl-12">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header">
                                                            <h6 class="mb-0 color-mg">Upload latest certificates and proofs - (PDF,png,jpeg or jpg files - Max 1 MB each)<br></h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-xl-12">
                                                                    <div class="table-responsive font-md upd-doc">
                                                                        <table class="table table-sm mb-0">
                                                                            <thead class="color-mg">
                                                                                <tr class="color-mg">
                                                                                    <th colspan="2">Required Document</th>
                                                                                    <th>Choose file</th>
                                                                                    <th>Uploaded</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Proof of admission in a recognized&nbsp;institute/ admission call letter issued by the institute</strong><br></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file"></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                    <td class="text-center"><a class="act-link" href="#"><i class="fa fa-eye"></i></a><a class="act-link" href="#"><i class="fa fa-trash"></i></a></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td colspan="2"><strong>Annexure-II Signed letter from colony leader stating the candidate is residing in the colony</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file"></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                    <td class="text-center"><a class="act-link" href="#"><i class="fa fa-eye"></i></a><a class="act-link" href="#"><i class="fa fa-trash"></i></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Passport size photograph</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file"></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">No</span></td>
                                                                                    <td class="text-center"><a class="act-link" href="#"><i class="fa fa-eye"></i></a><a class="act-link" href="#"><i class="fa fa-trash"></i></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Birth certificate/ proof of age</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file"></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                    <td class="text-center"><a class="act-link" href="#"><i class="fa fa-eye"></i></a><a class="act-link" href="#"><i class="fa fa-trash"></i></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Mark Sheet for 10th</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file"></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                    <td class="text-center"><a class="act-link" href="#"><i class="fa fa-eye"></i></a><a class="act-link" href="#"><i class="fa fa-trash"></i></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Mark Sheet for 12th</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file"></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                    <td class="text-center"><a class="act-link" href="#"><i class="fa fa-eye"></i></a><a class="act-link" href="#"><i class="fa fa-trash"></i></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Leprosy Certificate of Mother</strong><br></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file"></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                    <td class="text-center"><a class="act-link" href="#"><i class="fa fa-eye"></i></a><a class="act-link" href="#"><i class="fa fa-trash"></i></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Leprosy Certificate of Father</strong><br></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file"></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                    <td class="text-center"><a class="act-link" href="#"><i class="fa fa-eye"></i></a><a class="act-link" href="#"><i class="fa fa-trash"></i></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Leprosy Certificate of Self</strong><br></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file"></div>
                                                                                    </td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">Yes</span></td>
                                                                                    <td class="text-center"><a class="act-link" href="#"><i class="fa fa-eye"></i></a><a class="act-link" href="#"><i class="fa fa-trash"></i></a></td>
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
                    <div class="col-xl-2 offset-xl-4 my-2"><button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Save</strong></button></div>
                    <div class="col-xl-2 offset-xl-0 my-2"><router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link>
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
            userId: document.querySelector("meta[name='userId']").getAttribute('content'),
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
        saveForm(){
            // if (this.getFiles.admissionLetter === '#') {
            //     axios.post('/api/upload-documents/'+this.getdata.applicationId,this.uploadFiles)
            //     .then(response => {
            //             if (response.data['success']){
            //                 this.$fire({
            //                     position: 'top',
            //                     icon: 'success',
            //                     title: "Documents Uploaded Successfully",
            //                     showConfirmButton: false,
            //                     timer: 3000
            //                 })
            //             } else {
            //                 console.log(response.data['msg'])
            //             }
            //         })
            //     .catch(error => this.errorMsg(error.response.status))
            //    } else {
                   axios.post('/api/update-documents/'+this.getdata.applicationId,this.uploadFiles)
                     .then(response => {
                        if (response.data['success']){
                            this.$fire({
                                position: 'top',
                                icon: 'success',
                                title: "Documents Uploaded Successfully",
                                showConfirmButton: false,
                                timer: 3000
                            })
                            this.getdataNursing();
                        } else {
                            console.log(response.data['msg'])
                        }
                    })
                    .catch(error => this.errorMsg(error.response.status))
                // }
              },
                errorMsg (status) {
                switch (status) {
                case 422:{
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Something went wrong!",
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
        selectFile(ref){
            let file = this.$refs[ref].files[0];
            let fileReader = new FileReader()
            fileReader.readAsDataURL(file)
            fileReader.onload = (e) => {
                console.log(ref, e);
                this.uploadFiles[ref] = e.target.result;
            }
        },
       
        getdataNursing(){
            axios.get(`/api/application-form/${this.userId}`)
            .then(response => {
                if (response.data['success']) {
                    const data = response.data['data']
                    this.getdata.hasAdmissionLetter  = data.hasAdmissionLetter;
                    this.getdata.applicationId = data.applicationId;
                    this.getdata.financialYear = data.financialYear;
                    this.getFileData();
                }
            })
        },

        // delete files
          deleteFile(documentType)
        {
            if (confirm("Are you sure want to delete this file ?")) {
              axios.post('/api/delete-documents/'+this.getdata.applicationId,{documentType})
                .then(response => {
                    if (response.data['success']){
                        this.$fire({
                            position: 'top',
                            icon: 'success',
                            title: "Documents Deleted Successfully",
                            showConfirmButton: false,
                            timer: 3000
                        })
                        this.getdataNursing();
                    } else {
                        console.log(response.data['msg'])
                    }
                })
                .catch(error => this.errorMsg(error.response.status))
            }
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
    created(){
     this.getdataNursing();
    }
 }
</script>
