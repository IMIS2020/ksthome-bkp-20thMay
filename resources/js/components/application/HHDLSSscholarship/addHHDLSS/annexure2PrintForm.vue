<template>
   <section class="page-main mt-4">
        <div class="container-fluid mt-4 text-center">
        <p class="text-uppercase text-center text-black font-xl font-weight-bold"><span style="text-decoration: underline;">to whom it may concern</span></p>
        <p class="lead mb-0 text-black font-l font-weight-bold">I<strong>&nbsp;</strong><span><strong><em>{{getdata.applicantColonyLeaderName}}</em></strong></span><strong><em>&nbsp;</em></strong>hereby certify that the applicant&nbsp;<span><strong><em>{{getdata.fullName}}</em></strong></span>&nbsp;has been residing in this colony&nbsp;<span><strong><em>{{getdata.addressAddln1}}</em></strong></span>&nbsp;and the applicant's parent/parents&nbsp;<span><strong><em>{{getdata.applicantFatherName}}</em></strong></span> &amp;&nbsp;<span><strong><em>{{getdata.applicantMotherName}}</em></strong></span><em> </em> is/are affected by leprosy.&nbsp;<br><br>I certify that, to best of my knowledge, the information provided by the candidate is true. I recommended the applicant for&nbsp;<span><strong><em>HHDL Scholarship Programme</em></strong></span>.<br><br><br><br>Signature of Colony Leader: __________________________________, Date: ____________________</p><div>
         <button class="btn btn-lg btn-mg mt-4 d-print-none" onclick = "window.print();">
          <strong>Print </strong>
        </button>

         <router-link class="btn btn-lg btn-danger mt-4 d-print-none" type="button" to="/annexure-2-HHDLSS"><strong>Cancel</strong></router-link>
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
         form:{
           applicantColonyLeaderName:'',
        },
         getdata:{
                applicantNameF:'',
                applicantNameM:'',
                applicantNameL:'',
                applicantFatherName:'',
                applicantMotherName:'',
                applicantColonyName:'',
                hasAdmissionLetter:'',
                applicationId:'',
                financialYear:'',
             },
              errors:[]
            }
         },

   methods:{

     saveForm(){
            axios.post('/api/save-annexureii-HHDLSS/'+this.getdata.applicationId,this.form)
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
            axios.get(`/api/application-form-HHDLSS/${this.userId}`)
            .then(response => {
                if (response.data['success']) {
                    this.form =  response.data['data'];
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
            .catch(error => this.errorMsg(error.response.status))
        },

     getdataHHDLSS() {
            axios.get(`/api/application-form-HHDLSS/${this.userId}`)
                .then(response => {
                if (response.data['success']) {
                    const data = response.data['data']
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
     this.getdataHHDLSS();
     this.readAnnexureII();
    }
 }
</script>
