<template>
   <section class="page-main mt-4">
     <br>
       <br>
       <br>
       <br>
       <br>
       <br>
      <div class="container mt-4 text-center">
        <p class="text-uppercase text-center text-black font-xl font-weight-bold"><span style="text-decoration: underline;">to whom it may concern</span></p>
        <p class="lead mb-0 text-left text-black font-l font-weight-bold">I<strong>&nbsp;______________________________<em>&nbsp;</em></strong>hereby certify that the applicant __________________________ has been residing in this colony _____________________ and the applicant's parent/parents ________________________ &amp; ______________________<em> </em>is/are affected by leprosy.&nbsp;<br><br>I certify that, to best of my knowledge, the information provided by the candidate is true. I recommend the applicant for _____________________________________<br><br><br><br>Signature of Colony Leader: __________________________________, Date: ____________________</p><div>
        <button class="btn btn-lg btn-mg mt-4 d-print-none" onclick = "window.print();">
          <strong>Print Blank Form</strong>
        </button>&nbsp;
            <router-link class="btn btn-lg btn-danger mt-4 d-print-none" type="button" :to="'/annexure-2/'+applicationId"><strong>Cancel</strong></router-link>
      </div>
    </div>
    </section>
</template>

<script>
export default{
    data(){
       return{
         applicationId :'',
       }
    },
    methods:{
        getId()
        {
            this.applicationId = window.location.pathname.split('/').reverse()[0];
            console.log(this.applicationId);
        }
    },
     created(){
       this.getId();
     }
 }
</script>