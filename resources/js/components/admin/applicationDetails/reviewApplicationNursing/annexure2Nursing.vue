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
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-application-form/'+getdata.applicationId"><strong>Application Form</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-1/'+getdata.applicationId"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-2/'+getdata.applicationId"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-upload-documents/'+getdata.applicationId"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-review-submit/'+getdata.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active adm-tab" id="tab-3">
                                    <div class="div-inner-filed py-1 px-2">
                                        <form class="ub-reg-form">
                                            <div class="form-row">
                                                <div class="col-xl-12 mb-2">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header p-1">
                                                            <h6 class="mb-0 color-mg font-sm">Declaration Form (To be signed by colony leader)</h6>
                                                        </div>
                                                        <div class="card-body p-2">
                                                            <div class="form-row">
                                                                <div class="col-xl-12 text-center align-self-center mb-4">
                                                                    <p class="text-uppercase mb-0 color-mg"><strong><span style="text-decoration: underline;">to whom it may concern</span></strong></p>
                                                                </div>
                                                                <div class="col-xl-5 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>I </strong></p><span class="d-block color-mg" style="overflow: hidden;"><input type="text" class="form-control form-control-sm" placeholder="Name of colony leader" readonly /></span>
                                                                </div>
                                                                <div class="col-xl-7 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>hereby certify that Mr./ Miss. </strong></p><span class="d-block color-mg" style="overflow: hidden;"><input type="text" class="form-control form-control-sm" placeholder="Name of the candidate" readonly /></span>
                                                                </div>
                                                                <div class="col-xl-6 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>has been residing in this colony </strong></p><span class="d-block color-mg" style="overflow: hidden;"><input type="text" class="form-control form-control-sm" placeholder="Colony name" readonly /></span>
                                                                </div>
                                                                <div class="col-xl-6 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>and his/her parent / parents </strong></p><span class="d-block color-mg" style="overflow: hidden;"><input type="text" class="form-control form-control-sm" placeholder="Mother name" readonly /></span>
                                                                </div>
                                                                <div class="col-xl-4 text-center align-self-center mb-2"><input type="text" class="form-control form-control-sm" placeholder="Father name" readonly /></div>
                                                                <div class="col-xl-8 text-center align-self-center mb-2">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>is / are affected by leprosy.</strong></p>
                                                                </div>
                                                                <div class="col-xl-12 align-self-center mt-3">
                                                                    <p class="float-left mb-0 color-mg font-md"><strong>I certify that, to the best of my knowledge, the information provided by the candidate is true. I recommend her for Nursing Scholarship for HHDL Scholarship Programme.</strong><br /></p>
                                                                    <p class="float-left mb-0 color-mg font-md mt-4"><strong>Signature of Colony Leader: ____________________________________,  Date: ____/____/___________</strong><br /></p>
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
                    <div class="col-xl-2 offset-xl-4 my-2">
                        <router-link class="btn btn-block btn-sm btn-mg d-none" to="/annexure-2-print-form"><strong>Print/Download PDF</strong></router-link>
                    </div>
                    <div class="col-xl-2 offset-xl-0 my-2">
                        <!-- <a class="btn btn-block btn-sm btn-mg" onclick="javascipt:window.open('/assets/annexure-II/DeclarationForm.pdf');"><strong>Print Blank Form</strong></a> -->
                         <router-link class="btn btn-block btn-sm btn-mg d-none" to="/annexure-2-blank-form"><strong>Print Blank Form</strong></router-link>
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
        
         fullName:{},
         form:{
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
       logout(){
         axios.get('/admin/logout').then(function(){
            document.location.href = "/admin/login";
         })
      },

   
        async readAnnexureII() {
            const  currentUrl = window.location.pathname.split('/').reverse()[0];
            axios.get('/admin/admin-api/review-nursing-annexure-2/'+currentUrl)
            .then(response => {
                if (response.data['success']) {
                    this.form =  response.data['data'];
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
            .catch(error => this.error.response.status)
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
      }
  },
    created(){
     this.getdataNursing();
     this.readAnnexureII();
    }
 }
</script>
