<template>
    <section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3" >
                         <h5 class="text-capitalize text-center color-mg" >
                             <strong>Application form ({{getdata.financialYear}})</strong>
                        </h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/applicant-form'"><strong>Application Form</strong></router-link></li>
                                <!-- <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-1'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li> -->
                                <!-- <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-2'"><strong>Annexure-II</strong></router-link></li> -->
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/applicant-documents'"><strong>Upload Documents</strong></router-link></li>
                               <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/choose-scholarship'"><strong>Choose Schloarship</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-4">
                                    <div class="ub-reg-form">
                                        <div class="div-inner-filed">
                                            <div class="form-row">
                                                <div class="col-xl-12">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header">
                                                            <h6 class="mb-0 color-mg">Choose Schloarship you want to apply<br></h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <section class="mt-12">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-xl-12 text-center mb-3">
                                                                                <h3 class="text-break text-uppercase color-mg"><strong>Online Application for financial year : {{ new Date().getFullYear() }}-{{parseInt((new Date().getFullYear()+1).toString().substr(2,2))}}</strong></h3>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2 mb-3">
                                                                                <router-link to="/annexure-1">
                                                                                    <div class="home-icon">
                                                                                        <h3 class="text-break text-uppercase"><strong>nursing</strong><br><strong>scholarship</strong></h3>
                                                                                    </div>
                                                                                </router-link>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-6 col-lg-5 col-xl-4 offset-xl-0 mb-3">
                                                                                <router-link to="/annexure-1">
                                                                                    <div class="home-icon">
                                                                                        <h3 class="text-break text-uppercase"><strong>HHDLSS</strong><br><strong>scholarship</strong></h3>
                                                                                    </div>
                                                                                </router-link>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
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
