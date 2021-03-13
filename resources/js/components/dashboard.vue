<template>
     <section class="mt-12">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 text-center mb-3">
                    <h3 class="text-break text-uppercase color-mg"><strong>Online Application for financial year : {{ new Date().getFullYear() }}-{{parseInt((new Date().getFullYear()+1).toString().substr(2,2))}}</strong></h3>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2 mb-3">
                    <router-link to="/application-form">
                        <div class="home-icon">
                            <h3 class="text-break text-uppercase"><strong>nursing</strong><br><strong>scholarship</strong></h3>
                        </div>
                    </router-link>
                  </div>
                <div class="col-sm-6 col-md-6 col-lg-5 col-xl-4 offset-xl-0 mb-3">
                    <router-link to="/application-form-HHDLSS">
                        <div class="home-icon">
                            <h3 class="text-break text-uppercase"><strong>HHDLSS</strong><br><strong>scholarship</strong></h3>
                        </div>
                    </router-link>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data(){
      return {
         userId: document.querySelector("meta[name='userId']").getAttribute('content'),
         csrf:   document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
         getdata:{
          financialYear:'',
         },
         errors:[]
         }
   },
   created() {
      axios.get(`/api/application-form/${this.userId}`)
      .then(response => {
         if (response.data['success']) {
            const data = response.data['data']
            this.getdata.financialYear = data.financialYear;
         }
      })
   }
}
</script>