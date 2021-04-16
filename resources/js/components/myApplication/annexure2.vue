<template>

<section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                         <h5 class="text-capitalize text-center color-mg"><strong>Application form ({{this.form.scholarshipType}} scholarship  {{getdata.financialYear}})</strong></h5>
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
                                                                <p class="text-uppercase text-center text-black font-xl font-weight-bold">
                                                                    <span style="text-decoration: underline;">to whom it may concern</span></p>
                                                                <p class="lead mb-0 text-left text-black font-l font-weight-bold">I<strong>&nbsp;</strong><span>
                                                                <strong>{{this.Nform.applicantColonyLeaderName}}</strong></span><strong>
                                                                <em>&nbsp;</em></strong>hereby certify that the applicant&nbsp;<span>
                                                                <strong>{{form.fullName}}</strong></span>&nbsp;has been residing in the colony ,&nbsp;
                                                                <span><strong>{{form.addressAddln1}}</strong></span> , and
                                                                <span v-if="form.applicantLeprosyAffectedFather == true"><strong>{{form.applicantFatherName}} ,</strong></span> 
                                                                  <!-- <span v-if="form.applicantLeprosyAffectedSelf == true && form.applicantLeprosyAffectedFather == true && form.applicantLeprosyAffectedMother == true">&amp;&nbsp;</span> -->
                                                                  <!-- <span v-else>,</span> -->
                                                                <span v-if="form.applicantLeprosyAffectedMother == true"><strong> {{form.applicantMotherName}}</strong></span>
                                                                <span v-if="form.applicantLeprosyAffectedSelf == true"><strong>and {{form.fullName}}</strong></span>
                                                                    , from the family
                                                                    <span v-if="countLeprosy > 1">are</span>
                                                                    <span v-if="countLeprosy == 1">is</span> 
                                                                    affected by leprosy.&nbsp;
                                                                <br><br>I certify that, to best of my knowledge, the information provided by the candidate is true. 
                                                                <br> I recommended the applicant for&nbsp;<span><strong>{{form.scholarshipType}} Scholarship Programme</strong></span>.</p>
                                                                <!-- <br><br><br><br>Signature of Colony Leader: __________________________________, Date: ____________________</p> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 offset-xl-3" v-if="globalDisable == false"><button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Save</strong></button></div>
                                                <div class="col-xl-3 offset-xl-0" v-if="globalDisable == false"><router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-my-application"><strong>Cancel</strong></router-link></div>
                                                <div class="col-xl-3 offset-xl-5" v-else><router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-my-application"><strong>Cancel</strong></router-link></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-4 my-2">
                        <router-link class="btn btn-block btn-sm btn-mg" :to="'/annexure-2-print-form/'+form.applicationId"><strong>Print/Download PDF</strong></router-link>
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
                globalDisable: false,
                countLeprosy : 0,
                form:
                {
                    // courseLevel:'',
                    applicantLeprosyAffectedSelf: false,
                    applicantLeprosyAffectedFather: false,
                    applicantLeprosyAffectedMother: false,
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
            axios.post('/api/save-annexure2/'+this.form.applicationId,this.Nform)
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
                    this.Nform.applicantColonyLeaderName = response.data['data'][0][0].applicantColonyLeaderName;
                     this.form.applicantLeprosyAffectedSelf=response.data['data'][0][0].applicantLeprosyAffectedSelf;
                        this.form.applicantLeprosyAffectedFather=response.data['data'][0][0].applicantLeprosyAffectedFather;
                        this.form.applicantLeprosyAffectedMother=response.data['data'][0][0].applicantLeprosyAffectedMother;
                        this.check();
                    // if(this.form.applicantGender=response.data['data'][0][0].applicantGender == "Male")
                    // {
                    //     this.getData.genderType = "son";
                    // }else{
                    //     this.getData.genderType = "daughter";
                    // };
                    this.form.appStatus = response.data['data'][0][0].appStatus;
                    if(this.form.appStatus == 'Submit')
                    {
                        this.globalDisable = true;
                    };
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
        },

        check(){

            if(this.form.applicantLeprosyAffectedSelf == true)
            {
                this.countLeprosy = this.countLeprosy + 1;
            }

            if(this.form.applicantLeprosyAffectedFather == true)
            {
                this.countLeprosy = this.countLeprosy + 1;
            }

            if(this.form.applicantLeprosyAffectedMother == true)
            {
                this.countLeprosy = this.countLeprosy + 1;
            }

        }
  },
    created(){
     this.readApplicationForm() ;
     this.readAnnexureII();
     
    }
 }
</script>
