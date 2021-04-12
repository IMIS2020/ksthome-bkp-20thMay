<template>

<section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                         <h5 class="text-capitalize text-center color-mg"><strong>Application form (Nursing scholarship  {{getdata.financialYear}})</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-form/'+form.applicationId"><strong>Applicant Details</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.hasAdmissionLetter === 'NO' && form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-1/'+form.applicationId"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link  active" role="tab" data-toggle="tab" :to="'/annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/review-submit/'+form.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                                  <div class="tab-pane active" role="tabpanel" id="tab-3">
                                    <div class="div-inner-filed">
                                        <div class="ub-reg-form">
                                            <div class="form-row">
                                                <div class="col-xl-12 mb-2">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header">
                                                            <h6 class="mb-0 color-mg">Declaration Form (To be signed by colony leader)</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-xl-12 text-center align-self-center mb-4">
                                                                    <p class="text-uppercase mb-0 color-mg"><strong><span style="text-decoration: underline;">to whom it may concern</span></strong></p>
                                                                </div>
                                                                <div class="col-xl-5 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>I&nbsp; &nbsp; &nbsp;</strong></p><span class="d-block color-mg" style="overflow: hidden;"><input class="form-control form-control-sm" type="text" placeholder="Name of colony leader" v-model="Nform.applicantColonyLeaderName"></span>
                                                                </div>
                                                                <div class="col-xl-7 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>hereby certify that Mr./ Miss.&nbsp;</strong></p><span class="d-block color-mg" style="overflow: hidden;"><input class="form-control form-control-sm" type="text" placeholder="Name of the candidate" v-model="form.fullName"></span>
                                                                </div>
                                                                <div class="col-xl-6 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>has been residing in this colony&nbsp;</strong></p><span class="d-block color-mg" style="overflow: hidden;"><input class="form-control form-control-sm" type="text" placeholder="Colony name" v-model="form.addressAddln1"></span>
                                                                </div>
                                                                <div class="col-xl-6 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>and his/her parent / parents&nbsp;</strong></p><span class="d-block color-mg" style="overflow: hidden;"><input class="form-control form-control-sm" type="text" placeholder="Mother name" v-model="form.applicantMotherName"></span>
                                                                </div>
                                                                <div class="col-xl-4 text-center align-self-center mb-2"><input class="form-control form-control-sm" type="text" placeholder="Father name" v-model="form.applicantFatherName"></div>
                                                                <div class="col-xl-8 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>is / are affected by leprosy.</strong></p>
                                                                </div>
                                                                <div class="col-xl-12 align-self-center mt-3">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>I certify that, to the best of my knowledge, the information provided by the candidate is true. I recommend her for Nursing Scholarship.</strong><br></p>
                                                                    <p class="float-left mb-0 color-mg font-md mt-4"><strong>Signature of Colony Leader: ____________________________________,&nbsp; Date: ____/____/___________</strong><br></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 offset-xl-3"><button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Save</strong></button></div>
                                                <div class="col-xl-3 offset-xl-0"><router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-4 my-2">
                        <router-link class="btn btn-block btn-sm btn-mg" to="/annexure-2-print-form"><strong>Print/Download PDF</strong></router-link>
                    </div>
                    <div class="col-xl-2 offset-xl-0 my-2">
                        <!-- <a class="btn btn-block btn-sm btn-mg" onclick="javascipt:window.open('/assets/annexure-II/DeclarationForm.pdf');"><strong>Print Blank Form</strong></a> -->
                         <router-link class="btn btn-block btn-sm btn-mg" :to="'/annexure-2-blank-form/'+form.applicationId"><strong>Print Blank Form</strong></router-link>
                     </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
export default{
    data(){
       return{
                userId: document.querySelector("meta[name='userId']").getAttribute('content'),
                fullName:{},
                form:
                {
                    // courseLevel:'',
                    hasAdmissionLetter:'',
                    applicationId:'',
                    scholarshipType: '',
                    financialYear:'',
                    applicantNameF:'',
                    applicantNameM:'',
                    applicantNameL:'',
                    applicantFatherName:'',
                    applicantMotherName:'',
                    addressAddln1:'',
                    fullName:'',
                },
                Nform:{
                    applicantColonyLeaderName:'',
                },
                getdata:{
                    applicantNameF:'',
                    applicantNameM:'',
                    applicantNameL:'',
                    applicantFatherName:'',
                    applicantMotherName:'',
                    addressAddln1:'',
                    hasAdmissionLetter:'',
                    applicationId:'',
                    financialYear:'',
                },
                errors:[]
            }
         },

   methods:{

     saveForm(){
            axios.post('/api/save-annexureii/'+this.getdata.applicationId,this.form)
            .then(response => {
                    if (response.data['success']){
                        this.$fire({
                            position: 'top',
                            icon: 'success',
                            title: "Annexure-II Saved",
                            showConfirmButton: false,
                            timer: 3000
                        })
                    } else {
                        console.log(response.data['msg'])
                    }
                })
            .catch(error => this.errorMsg(error.response.status))
    
     },
    errorMsg (status) {
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
        async readAnnexureII() {
            axios.get(`/api/application-form/${this.userId}`)
            .then(response => {
                if (response.data['success']) {
                    this.form =  response.data['data'];
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
            
        },

      async readApplicationForm() 
        {
            let applicationId = window.location.pathname.split('/').reverse()[0];
            axios.get(`/api/get-application-form-data/${applicationId}`)
            .then(response => {
                if (response.data['success']) 
                {
                    this.form.applicationId=response.data['data'][0][0].schApplicationId;
                    this.form.scholarshipType=response.data['data'][0][0].scholarshipType;
                    this.form.applicantNameF=response.data['data'][0][0].applicantNameF;
                    this.form.fullName = response.data['data'][0][0].applicantNameF+' '+ (response.data['data'][0][0].applicantNameM == null ? ' ' : response.data['data'][0][0].applicantNameM )+' '+response.data['data'][0][0].applicantNameL;
                    this.form.applicantNameM=response.data['data'][0][0].applicantNameM;
                    this.form.applicantNameL=response.data['data'][0][0].applicantNameL;
                    this.form.applicantFatherName=response.data['data'][0][0].applicantFatherName;
                    this.form.applicantMotherName=response.data['data'][0][0].applicantMotherName;
                    this.form.financialYear = response.data['data'][0][0].financialYear;  
                    this.form.hasAdmissionLetter = response.data['data'][0][0].hasAdmissionLetter;
                    this.form.addressAddln1=response.data['data'][0][0].get_address.addressAddln1;
                    if(this.form.applicantGender=response.data['data'][0][0].applicantGender == "Male")
                    {
                        this.getData.genderType = "son";
                    }else{
                        this.getData.genderType = "daughter";
                    }
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
        },
  },
    created(){
     this.readApplicationForm() ;
     this.readAnnexureII();
    }
 }
</script>
