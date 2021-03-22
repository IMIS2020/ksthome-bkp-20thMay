<template>
    <section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3" >
                         <h5 class="text-capitalize text-center color-mg" >
                             <strong>Application form (Nursing scholarship   {{getdata.financialYear}})</strong>
                        </h5>
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
                                                                                     <th>Document Name</th>
                                                                                    <th>Uploaded</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                <td colspan="2">
                                                                                    <strong>Proof of admission in a recognized&nbsp;institute/admission call letter issued by the institute</strong><br>
                                                                                </td>

                                                                                    <td>
                                                                                        <div class="form-group">
                                                                                            <input class="form-control-file font-sm" type="file" ref="admissionLetter" v-on:change="selectFile('admissionLetter')">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>{{(getFiles.admissionLetter === '#')?'Documents not uploaded':getFiles.admissionLetter.substr(-19)}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.admissionLetter !== '#'"> <router-link target="_blank" class="act-link" :to="''+getFiles.admissionLetter"><i class="fa fa-eye"></i></router-link><a class="act-link" href="#" @click.prevent="deleteFile('admissionLetter')"><i class="fa fa-trash"></i></a></td>
                                                                                    <td class="text-center" v-else><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span></td>
                                                                                 </tr>

                                                                                <tr>
                                                                                    <td colspan="2"><strong>Annexure-II Signed letter from colony leader stating the candidate is residing in the colony</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group">
                                                                                          <input class="form-control-file font-sm" type="file" ref="annexureII" v-on:change="selectFile('annexureII')">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>{{(getFiles.annexureII === '#')?'Documents not uploaded':getFiles.annexureII.substr(-15)}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.annexureII === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.annexureII !== '#'"> <router-link target="_blank" class="act-link" :to="''+getFiles.annexureII"><i class="fa fa-eye"></i></router-link><a class="act-link" href="#" @click.prevent="deleteFile('annexureII')"><i class="fa fa-trash"></i></a></td>
                                                                                    <td class="text-center" v-else><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Passport size photograph</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group">
                                                                                            <input class="form-control-file font-sm" type="file" ref="photograph" v-on:change="selectFile('photograph')" accept="image/*">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>{{(getFiles.photograph === '#')?'Documents not uploaded':getFiles.photograph.substr(-15)}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.photograph === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.photograph !== '#'"> <router-link target="_blank" class="act-link" :to="''+getFiles.photograph"><i class="fa fa-eye"></i></router-link><a class="act-link" href="#" @click.prevent="deleteFile('photograph')"><i class="fa fa-trash"></i></a></td>
                                                                                    <td class="text-center" v-else><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Birth certificate/ proof of age</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group">
                                                                                            <input class="form-control-file font-sm" type="file" ref="proofOfAge" v-on:change="selectFile('proofOfAge')">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>{{(getFiles.proofOfAge  === '#')?'Documents not uploaded':getFiles.proofOfAge.substr(-15)}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.proofOfAge === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.proofOfAge !== '#'"> <router-link target="_blank" class="act-link" :to="''+getFiles.proofOfAge"><i class="fa fa-eye"></i></router-link><a class="act-link" href="#" @click.prevent="deleteFile('proofOfAge')"><i class="fa fa-trash"></i></a></td>
                                                                                    <td class="text-center" v-else><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Mark Sheet for 10th</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group">
                                                                                            <input class="form-control-file font-sm" type="file" ref="markSheets10" v-on:change="selectFile('markSheets10')">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>{{(getFiles.markSheets10 === '#')?'Documents not uploaded':getFiles.markSheets10.substr(-17)}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets10 === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.markSheets10 !== '#'"> <router-link target="_blank" class="act-link" :to="''+getFiles.markSheets10"><i class="fa fa-eye"></i></router-link><a class="act-link" href="#" @click.prevent="deleteFile('markSheets10')"><i class="fa fa-trash"></i></a></td>
                                                                                    <td class="text-center" v-else><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2"><strong>Self attested Mark Sheet for 12th</strong></td>
                                                                                    <td>
                                                                                        <div class="form-group"><input class="form-control-file font-sm" type="file" ref="markSheets12" v-on:change="selectFile('markSheets12')"></div>
                                                                                    </td>
                                                                                    <td>{{(getFiles.markSheets12 === '#')?'Documents not uploaded':getFiles.markSheets12.substr(-17)}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.markSheets12 === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.markSheets12 !== '#'"> <router-link target="_blank" class="act-link" :to="''+getFiles.markSheets12"><i class="fa fa-eye"></i></router-link><a class="act-link" href="#" @click.prevent="deleteFile('markSheets12')"><i class="fa fa-trash"></i></a></td>
                                                                                    <td class="text-center" v-else><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span></td>
                                                                                </tr>

                                                                                <tr v-if="getdata.applicantLeprosyAffectedMother == true">
                                                                                    <td colspan="2"><strong>Self attested Leprosy Certificate of Mother</strong><br></td>
                                                                                    <td><div class="form-group"><input class="form-control-file font-sm" type="file" ref="leprosyCertificateMother" v-on:change="selectFile('leprosyCertificateMother')"></div></td>
                                                                                    <td>{{(getFiles.leprosyCertificateMother === '#')?'Documents not uploaded':getFiles.leprosyCertificateMother.substr(-29)}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateMother === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateMother !== '#'"> <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateMother"><i class="fa fa-eye"></i></router-link><a class="act-link" href="#" @click.prevent="deleteFile('leprosyCertificateMother')"><i class="fa fa-trash"></i></a></td>
                                                                                    <td class="text-center" v-else><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span></td>
                                                                                </tr>

                                                                                <tr v-if="getdata.applicantLeprosyAffectedFather == true">
                                                                                    <td colspan="2"><strong>Self attested Leprosy Certificate of Father</strong><br></td>
                                                                                    <td><div class="form-group"><input class="form-control-file font-sm" type="file" ref="leprosyCertificateFather" v-on:change="selectFile('leprosyCertificateFather')"></div></td>     
                                                                                    <td>{{(getFiles.leprosyCertificateFather === '#')?'Documents not uploaded':getFiles.leprosyCertificateFather.substr(-29)}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateFather === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateFather !== '#'"> <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateFather"><i class="fa fa-eye"></i></router-link><a class="act-link" href="#" @click.prevent="deleteFile('leprosyCertificateFather')"><i class="fa fa-trash"></i></a></td>
                                                                                    <td class="text-center" v-else><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span></td>
                                                                                </tr>
                                                                                <tr v-if="getdata.applicantLeprosyAffectedSelf== true">
                                                                                    <td colspan="2"><strong>Self attested Leprosy Certificate of Self</strong><br></td>
                                                                                    <td><div class="form-group"><input class="form-control-file font-sm" type="file"  ref="leprosyCertificateSelf" v-on:change="selectFile('leprosyCertificateSelf')"></div></td>
                                                                                    <td >{{(getFiles.leprosyCertificateSelf === '#')?'Documents not uploaded':getFiles.leprosyCertificateSelf.substr(-27)}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{(getFiles.leprosyCertificateSelf === '#')?'No':'Yes'}}</span></td>
                                                                                    <td class="text-center" v-if="getFiles.leprosyCertificateSelf !== '#'"> <router-link target="_blank" class="act-link" :to="''+getFiles.leprosyCertificateSelf"><i class="fa fa-eye"></i></router-link><a class="act-link" href="#" @click.prevent="deleteFile('leprosyCertificateSelf')"><i class="fa fa-trash"></i></a></td>
                                                                                    <td class="text-center" v-else><span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span></td>
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
                applicantLeprosyAffectedFather:'',
                applicantLeprosyAffectedMother:'',
                applicantLeprosyAffectedSelf:'',
            },
            errors:[]
        }
    },
    methods:{
        saveForm(){
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
             if (file.size > 1024 * 1024) 
             {
               this.$fire({
                    position: 'top',
                    icon: 'error',
                    title: "File size greater than 1 MB!",
                    showConfirmButton: false,
                    timer: 3000
                })
             }
            else{
            let fileReader = new FileReader()
            fileReader.readAsDataURL(file)
            fileReader.onload = (e) => {
            console.log(ref, e);
            this.uploadFiles[ref] = e.target.result;
              }
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
                    this.getdata.applicantLeprosyAffectedFather = data.applicantLeprosyAffectedFather;
                    this.getdata.applicantLeprosyAffectedMother = data.applicantLeprosyAffectedMother;
                    this.getdata.applicantLeprosyAffectedSelf   = data.applicantLeprosyAffectedSelf;
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
