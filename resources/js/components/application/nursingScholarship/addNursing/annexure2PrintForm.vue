<template>
   <section class="page-main mt-4">
        <div class="container-fluid mt-4 text-black">
            <div class="row">
                <div class="col-xl-12 text-center mb-3 d-print-none">
                    <h4 class="color-mg"><strong>View Annexure-2</strong></h4>
                </div>
            </div>
            <div class="pre-sub-form f-fm-arbs">
                <div class="col-xl-12 mb-3 f-fm-arbs">
                    <div class="table-responsive">
                        <div class="container-fluid mt-4">
                            <p class="text-uppercase text-center text-black font-xl font-weight-bold"><strong><span style="text-decoration: underline;">to whom it may concern</span></strong></p>
                            <p class="lead mb-0 text-black font-l font-weight-bold">I<strong>&nbsp;</strong><span><strong><em>{{ readAnnexure2.applicantColonyLeaderName}}</em></strong></span>&nbsp;hereby certify that Mr./Miss.&nbsp;<span><strong><em>{{getdata.fullName}}</em></strong></span>&nbsp;has been residing in this colony&nbsp;<span><strong><em>{{getdata.addressAddln1}}</em></strong></span>&nbsp;and his/her parent/parents&nbsp;<span><strong><em>{{getdata.applicantFatherName}}</em></strong></span>&nbsp;&amp;&nbsp;<span><strong><em>{{getdata.applicantMotherName}}</em></strong></span>&nbsp;is/are affected by leprosy.&nbsp;<br><br>I certify that, to best of my knowledge, the information provided by the candidate is true. I recommended his/her for&nbsp;<span><strong><em>Nursing Scholarship Programme</em></strong></span>.&nbsp;<br><br><br><br>Signature of Colony Leader: ______________________________________, Date: _________________</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 d-print-none">
                <div class="col-xl-4 offset-xl-4 text-center">
                 <button class="btn btn-sm btn-mg mr-2" type="button" onclick="window.print()" >Print/Download Application Form</button></div>
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