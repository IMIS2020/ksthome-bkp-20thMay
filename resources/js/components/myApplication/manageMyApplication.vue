<template>
   <section class="page-main mt-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-xl-12 text-center mb-3">
                  <h4 class="color-mg"><strong>Manage Your Applications</strong></h4>
              </div>
              <div class="col-xl-12">
                  <div class="com-bg">
                      <div>
                          <div class="form-group pull-right col-xl-12 mb-2 mt-2">
                              <form>
                                  <div class="form-group mb-0">
                                      <div class="form-row">
                                          <div class="col-xl-4 offset-xl-8 align-self-center and-col pr-0">
                                              <form>
                                                  <div class="form-group mb-0">
                                                      <div class="form-row">
                                                          <div class="col-sm-4 col-xl-3 offset-xl-0 align-self-center">
                                                              <p class="text-right mb-0 mt-0 font-sm"><strong>Apply for</strong></p>
                                                          </div>
                                                          <div class="col-sm-4 col-xl-6 offset-xl-0">
                                                             <select class="form-control form-control-sm font-sm color-mg" v-model="scholarshipType2">
                                                                  <option value="" disabled>-- Select --</option>
                                                                  <option value="Nursing">Nursing Scholarship</option>
                                                                  <option value="HHDLSS">HHDLSS Scholarship</option>
                                                              </select>
                                                            </div>
                                                          <div class="col-sm-4 col-xl-3 offset-xl-0 text-right align-self-center">
                                                              <p class="text-left mb-0 font-sm" v-if="scholarshipType2 == 'Nursing'">
                                                                 <router-link to="/application-form/Nursing"><strong>Click here</strong></router-link>
                                                               </p>

                                                               <p class="text-left mb-0 font-sm" v-else>
                                                                 <router-link to="/application-form/Hddlss"><strong>Click here</strong></router-link>
                                                               </p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="table-responsive table results mb-0 donor-list tmd">
                              <table class="table table-sm mb-0">
                                  <thead class="cs-tbl-hd">
                                      <tr>
                                          <th>Financial Year</th>
                                          <th>Scholarship Type</th>
                                          <th>Last Date of Application</th>
                                          <th>Application No.</th>
                                          <th>Submission Date</th>
                                          <th class="text-center">Status</th>
                                          <th class="text-center w-5x">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody class="h-41x">
                                      <tr class="font-md text-black" v-if="getdata.applicationId != 'N/A' ">
                                          <td><em>{{getdata.financialYear}}</em></td>
                                          <td class="text-break"><em>Nursing Scholarship</em></td>
                                          <td class="text-break"><em>N/A</em></td>
                                          <td><em>{{getdata.applicationId}}</em></td>
                                          <td class="text-nowrap"><em>{{getdata.submissionDate}}</em></td>
                                          <td class="text-center"><em>{{getdata.status}}</em><span class="badge badge-success"></span></td>
                                          <td class="text-center w-5x">
                                              <div class="dropdown no-arrow dr-all"><a class="btn btn-sm" aria-expanded="false" data-toggle="dropdown" role="button" href="#"><i class="fas fa-bars color-mg"></i></a>
                                                  <div class="dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in">
                                                      <router-link class="dropdown-item" to="/application-form"><strong>Edit Application</strong></router-link>
                                                      <router-link class="dropdown-item" to="/view-nursing"><strong>View Application</strong></router-link>
                                                      <router-link class="dropdown-item" to="/print-view-nursing"><strong>Download Application</strong></router-link>
                                                    </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr v-if="getdataHHDLSS.applicationId != 'N/A' " class="font-md text-black">
                                          <td><em>{{getdataHHDLSS.financialYear}}</em></td>
                                          <td class="text-break"><em>HHDLSS Scholarship</em></td>
                                          <td class="text-break"><em>N/A</em></td>
                                          <td><em>{{getdataHHDLSS.applicationId}}</em></td>
                                          <td class="text-nowrap"><em>{{getdataHHDLSS.submissionDate}}</em></td>
                                          <td class="text-center"><em>{{getdataHHDLSS.status}}</em><span class="badge badge-success"></span></td>
                                          <td class="text-center w-5x">
                                              <div class="dropdown no-arrow dr-all"><a class="btn btn-sm" aria-expanded="false" data-toggle="dropdown" role="button" href="#"><i class="fas fa-bars color-mg"></i></a>
                                                  <div class="dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in">
                                                      <router-link class="dropdown-item" to="/application-form-HHDLSS"><strong>Edit Application</strong></router-link>
                                                      <router-link class="dropdown-item" to="/view-HHDLSS"><strong>View Application</strong></router-link>
                                                      <router-link class="dropdown-item" to="/print-view-HHDLSS"><strong>Download Application</strong></router-link>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
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
         scholarshipType2:"Nursing",
         getdata:{
            applicationId:'N/A',	
            status:'Not Applied',	
            submissionDate:'N/A',
            financialYear:'N/A',
         },
         getdataHHDLSS:{
            applicationId:'N/A',	
            status:'Not Applied',	
            submissionDate:'N/A',
            financialYear:'N/A',
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