<template>
<section class="page-main">
      <div class="container">
         <div class="row">

               <div class="col-xl-12 text-center mb-3">
                  <h4 class="color-mg"><strong>Manage Applications</strong></h4>
               </div>
             <div class="ml-auto mb-3">
              <router-link class="btn btn-sm btn-mg mr-2 font-sm" role="button" to="/dashboard">
              <strong>New Application</strong></router-link>
            </div>

               <div class="col-xl-12">
                  <div class="table-responsive table-bordered rev-tbl font-sm">
                     <table class="table table-bordered table-sm mb-0 color-mg">
                           <thead>
                              <tr>
                                 <th>Financial Year</th>
                                 <th>Scholarship Type</th>
                                 <th>Last Date of Application</th>
                                 <th>Application No.</th>
                                 <th>Status</th>
                                 <th>Submission Date</th>
                                 <th class="text-center">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr  class="fw-600">
                                 <td>{{getdata.financialYear}}</td>
                                 <td>Nursing Scholarship</td>
                                 <td>N/A</td>
                                 <td>{{getdata.applicationId}}</td>
                                 <td>{{getdata.status}}</td>
                                 <td>{{getdata.submissionDate}}</td>
                                 <td class="text-center">
                                       <router-link class="btn btn-sm btn-mg mr-2 font-sm" role="button" to="/application-form"><strong>Edit</strong></router-link>
                                       <router-link class="btn btn-sm btn-mg mr-2 font-sm" role="button" to="/view-nursing"><strong>View/Download</strong></router-link>
                                 </td>
                              </tr>
                            
                              <tr v-if="getdataHHDLSS.applicationId ==='N/A' " class="fw-600" style="display:none">
                                 <td>{{getdataHHDLSS.financialYear}}</td>
                                 <td>HHDLSS Scholarship</td>
                                 <td>N/A</td>
                                 <td>{{getdataHHDLSS.applicationId}}</td>
                                 <td>{{getdataHHDLSS.status}}</td>
                                 <td>{{getdataHHDLSS.submissionDate}}</td>
                                 <td class="text-center">
                                    <router-link class="btn btn-sm btn-mg mr-2 font-sm" role="button" to="/application-form-HHDLSS"><strong>Edit</strong></router-link>
                                    <router-link class="btn btn-sm btn-mg mr-2 font-sm" role="button" to="/view-HHDLSS"><strong>View/Download</strong></router-link>
                                    </td>
                              </tr>

                               <tr v-else class="fw-600">
                                 <td>{{getdataHHDLSS.financialYear}}</td>
                                 <td>HHDLSS Scholarship</td>
                                 <td>N/A</td>
                                 <td>{{getdataHHDLSS.applicationId}}</td>
                                 <td>{{getdataHHDLSS.status}}</td>
                                 <td>{{getdataHHDLSS.submissionDate}}</td>
                                 <td class="text-center">
                                    <router-link class="btn btn-sm btn-mg mr-2 font-sm" role="button" to="/application-form-HHDLSS"><strong>Edit</strong></router-link>
                                    <router-link class="btn btn-sm btn-mg mr-2 font-sm" role="button" to="/view-HHDLSS"><strong>View/Download</strong></router-link>
                                    </td>
                              </tr>
                              
                           </tbody>
                     </table>
                  </div>
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
         getdata:{
            applicationId:'N/A',	
            status:'Not Applied',	
            submissionDate:'N/A',
            financialYear:'',
         },
         getdataHHDLSS:{
            applicationId:'N/A',	
            status:'Not Applied',	
            submissionDate:'N/A',
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
            this.getdata.applicationId = data.applicationId;
            this.getdata.status = data.status;
            this.getdata.submissionDate = data.created_at.split('T')[0].split('-').reverse().join('/');
         }
      });
      axios.get(`/api/application-form-HHDLSS/${this.userId}`)
      .then(response => {
         if (response.data['success']) {
            const data = response.data['data']
            this.getdataHHDLSS.financialYear = data.financialYear;
            this.getdataHHDLSS.applicationId = data.applicationId;
            this.getdataHHDLSS.status = data.status;
            this.getdataHHDLSS.submissionDate = data.created_at.split('T')[0].split('-').reverse().join('/');
         }
      })
   }
}
</script>