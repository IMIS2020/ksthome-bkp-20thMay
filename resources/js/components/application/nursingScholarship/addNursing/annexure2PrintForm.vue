<template>
   <section class="page-main mt-4">
        <div class="container-fluid mt-4 text-center">
        <p class="text-uppercase text-center text-black font-xl font-weight-bold"><span style="text-decoration: underline;">to whom it may concern</span></p>
        <p class="lead mb-0 text-black font-l font-weight-bold">I<strong>&nbsp;</strong><span><strong><em>Souvik Kundu</em></strong></span><strong><em>&nbsp;</em></strong>hereby certify that the applicant&nbsp;<span><strong><em>Subhajit Biswas</em></strong></span>&nbsp;has been residing in this colony&nbsp;<span><strong><em>Sundiapara, Saratpally</em></strong></span>&nbsp;and the applicant's parent/parents&nbsp;<span><strong><em>Fname</em></strong></span> &amp;&nbsp;<span><strong><em>Mname</em></strong></span><em> </em> is/are affected by leprosy.&nbsp;<br><br>I certify that, to best of my knowledge, the information provided by the candidate is true. I recommended the applicant for&nbsp;<span><strong><em>Nursing Scholarship Programme</em></strong></span>.<br><br><br><br>Signature of Colony Leader: __________________________________, Date: ____________________</p><div>
         <button class="btn btn-lg btn-mg mt-4 d-print-none" onclick = "window.print();">
          <strong>Print </strong>
        </button>

         <router-link class="btn btn-lg btn-danger mt-4 d-print-none" type="button" to="/annexure-2"><strong>Cancel</strong></router-link>
      </div>
    </div>
    </section>
</template>

<script>
export default{
    data(){
       return{
         userId: document.querySelector("meta[name='userId']").getAttribute('content'),
         fullName:{},
         readAnnexure2:{
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

        async readAnnexureII() {
            axios.get(`/api/application-form/${this.userId}`)
            .then(response => {
                if (response.data['success']) {
                    this.readAnnexure2 =  response.data['data'];
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
            .catch(error => this.errorMsg(error.response.status))
        },

      getdataNursing(){
       axios.get(`/api/application-form/${this.userId}`)
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