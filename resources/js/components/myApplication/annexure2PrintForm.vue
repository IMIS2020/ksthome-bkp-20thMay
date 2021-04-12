<template>
   <section class="page-main mt-4">
        <div class="container-fluid mt-4 text-center">
        <p class="text-uppercase text-center text-black font-xl font-weight-bold"><span style="text-decoration: underline;">to whom it may concern</span></p>
        <p class="lead mb-0 text-black font-l font-weight-bold">I<strong>&nbsp;</strong><span><strong><em>{{Nform.applicantColonyLeaderName}}</em></strong></span><strong><em>&nbsp;</em></strong>hereby certify that the applicant&nbsp;<span><strong><em>{{form.fullName}}</em></strong></span>&nbsp;has been residing in this colony&nbsp;<span><strong><em>{{form.addressAddln1}}</em></strong></span>&nbsp;and the applicant's parent/parents&nbsp;<span><strong><em>{{form.applicantFatherName}}</em></strong></span> &amp;&nbsp;<span><strong><em>{{form.applicantMotherName}}</em></strong></span><em> </em> is/are affected by leprosy.&nbsp;<br><br>I certify that, to best of my knowledge, the information provided by the candidate is true. I recommended the applicant for&nbsp;<span><strong><em>{{form.scholarshipType}} Scholarship Programme</em></strong></span>.<br><br><br><br>Signature of Colony Leader: __________________________________, Date: ____________________</p><div>
         <button class="btn btn-lg btn-mg mt-4 d-print-none" onclick = "window.print();">
          <strong>Print </strong>
        </button>
         <router-link class="btn btn-lg btn-danger mt-4 d-print-none" type="button" :to="'/annexure-2/'+form.applicationId"><strong>Cancel</strong></router-link>
      </div>
    </div>
    </section>
</template>

<script>
export default{
    data(){
       return{
         
        
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
       
            }
         },

   methods:{
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
                  
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
        },
  },
  created(){
    this.readApplicationForm();
  }
 }
</script>