<template>
   <section class="page-main mt-4">
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
        <div class="container mt-4 text-center">
            <p class="text-uppercase text-center text-black font-xl font-weight-bold">
                <span style="text-decoration: underline;">to whom it may concern</span></p>
            <p class="lead mb-0 text-left text-black font-m font-weight-bold">I<strong>&nbsp;</strong><span>
            <strong>{{this.Nform.applicantColonyLeaderName}}</strong></span><strong>
            <em>&nbsp;</em></strong>hereby certify that the applicant&nbsp;<span>
            <strong>{{form.fullName}}</strong></span>&nbsp;has been residing in the colony ,&nbsp;
            <span><strong>{{form.addressAddln1}}</strong></span>.<br><span v-if="form.applicantLeprosyAffectedFather == true"><strong> {{form.applicantFatherName}}</strong>
            <span v-if="countLeprosy == 2">and</span>
            <span v-if="countLeprosy == 3">,</span>
            <span v-if="countLeprosy == 1"></span>
            </span>
            <span v-if="form.applicantLeprosyAffectedMother == true"><strong>{{form.applicantMotherName}}</strong></span>
            <!-- <span v-if="countLeprosy == 2"></span>
            <span v-if="countLeprosy == 3">,</span> -->
            <!-- <span v-if="countLeprosy == 1">and</span> -->
            <span v-if="countLeprosy == 3">and</span>
            <span v-if="form.applicantLeprosyAffectedMother == true && form.applicantLeprosyAffectedSelf == true" >and</span>
            <span v-if="form.applicantLeprosyAffectedSelf == true"><strong>{{form.fullName}}</strong></span>
                    from the family
                <span v-if="countLeprosy > 1">are</span>
                <span v-if="countLeprosy == 1">is</span> 
                affected by leprosy.&nbsp;</p>
                <br>
            <!-- <br><br>I certify that, to best of my knowledge, the information provided by the candidate is true.  -->
                <p class="lead mb-0 text-left text-black font-l font-weight-bold"> I recommend the applicant for&nbsp;<span><strong>{{form.scholarshipType}} Scholarship Programme</strong></span>.
            <br><br><br><br>Signature of Colony Leader: __________________________________, Date: ____________________</p>
        <div>
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
               applicantLeprosyAffectedSelf: false,
                    applicantLeprosyAffectedFather: false,
                    applicantLeprosyAffectedMother: false,
          },
          Nform:{
              applicantColonyLeaderName:'',
          },

          countLeprosy : 0,
       
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
                    this.form.applicantLeprosyAffectedSelf=response.data['data'][0][0].applicantLeprosyAffectedSelf;
                        this.form.applicantLeprosyAffectedFather=response.data['data'][0][0].applicantLeprosyAffectedFather;
                        this.form.applicantLeprosyAffectedMother=response.data['data'][0][0].applicantLeprosyAffectedMother;
                        this.check();
                  
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
    this.readApplicationForm();
  }
 }
</script>