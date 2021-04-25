<template>
   <section class="page-main mt-4">
      <div class="container">
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
                                                                 <router-link to="/application-form/HHDLS"><strong>Click here</strong></router-link>
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
                                          <th class="w-5x">Sl No.</th>
                                          <th class="w-10x">Financial Year</th>
                                          <th>Scholarship Type</th>
                                          <th>Last Date of Application</th>
                                          <th>Application No.</th>
                                          <th>Submission Date</th>
                                          <th class="text-center">Status</th>
                                          <th class="text-center w-5x">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody class="h-41x">
                                      <tr class="font-md text-black" v-for="(row,index) in getdata" :key="index">
                                          <td class="w-5x">{{index+1}}</td>
                                          <td class="w-10x" >{{row.financialYear}}</td>
                                          <td class="text-break">{{row.scholarshipType}}</td>
                                          <td class="text-break">N/A</td>
                                          <td>{{row.appIdShow}}</td>
                                          <td class="text-nowrap">N/A</td>
                                          <td class="text-center">
                                              
                                                  <span class="badge badge-warning" v-if="row.appStatus == 'Submit'">Submitted</span>
                                                  <span class="badge badge-success" v-else>{{row.appStatus}}</span>
                                              
                                          </td>
                                          <td class="text-center w-5x">
                                              <div class="dropdown no-arrow dr-all"><a class="btn btn-sm" aria-expanded="false" data-toggle="dropdown" role="button" href="#"><i class="fas fa-bars color-mg"></i></a>
                                                  <div class="dropdown-menu dropdown-menu-left shadow dropdown-menu-right animated--fade-in">
                                                      <router-link class="dropdown-item" :to="'/application-form/'+row.schApplicationId"  v-if="row.appStatus == 'Saved'"><strong>Edit Application</strong></router-link>
                                                      <router-link class="dropdown-item" :to="'/application-form/'+row.schApplicationId" v-if="row.appStatus == 'Submit'"><strong>View Application</strong></router-link>
                                                      <router-link class="dropdown-item" :to="'/print-view-application/'+row.schApplicationId"><strong>Download Application</strong></router-link>
                                                    </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <!-- <tr v-if="getdataHHDLSS.applicationId != 'N/A' " class="font-md text-black">
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
                                      </tr> -->
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- <router-link class="btn btn-mg m-auto btn-sm"  to="/"><strong>Cancel</strong></router-link> -->
      </div>
  </section>
</template>

<script>
export default {
    data(){
      return {
         userId: document.querySelector("meta[name='userId']").getAttribute('content'),
         scholarshipType2:"Nursing",
         getdata:{},
         errors:[]
         }
    },

    methods:
    {
        getApplicationData()
        {
         axios.get('/api/manage-my-application')
              .then(response=>{
                 this.getdata = response.data;
              });
        },

    },
   created() {
       this.getApplicationData();
    //   axios.get(`/api/application-form/${this.userId}`)
    //   .then(response => {
    //      if (response.data['success']) {
    //         const data = response.data['data']
    //         this.getdata.financialYear = data.financialYear;
    //         this.getdata.applicationId = data.applicationId;
    //         this.getdata.status = data.status;
    //         this.getdata.submissionDate = data.created_at.split('T')[0].split('-').reverse().join('/');
    //      }
    //   });
    //   axios.get(`/api/application-form-HHDLSS/${this.userId}`)
    //   .then(response => {
    //      if (response.data['success']) {
    //         const data = response.data['data']
    //         this.getdataHHDLSS.financialYear = data.financialYear;
    //         this.getdataHHDLSS.applicationId = data.applicationId;
    //         this.getdataHHDLSS.status = data.status;
    //         this.getdataHHDLSS.submissionDate = data.created_at.split('T')[0].split('-').reverse().join('/');
    //      }
    //   })
   }
}
</script>