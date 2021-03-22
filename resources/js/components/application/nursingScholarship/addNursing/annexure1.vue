<template>
 <section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                        <h5 class="text-capitalize text-center color-mg"><strong>Application form (Nursing scholarship  {{getdata.financialYear}})</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                               <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-form/'"><strong>Application Form</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/annexure-1'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-2'"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/upload-documents'"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/review-submit'"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane active" role="tabpanel" id="tab-2">
                                    <div class="div-inner-filed">
                                        <div lang="" class="ub-reg-form">
                                            <div class="form-row">
                                                <div class="col-xl-12 align-self-center mb-2">
                                                    <p class="float-left color-mg font-md mb-1">I {{getdata.fullName}} son/daughter of {{getdata.applicantFatherName}} {{getdata.applicantMotherName}} residing in {{getdata.addressAddln1}}, want to pursue higher studies in academic Year {{getdata.financialYear}}. I will be taking the following Entrance Examination for admission into:&nbsp;<br></p>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="com-bg-1">
                                                        <div class="form-row mb-1">
                                                            <div class="col-xl-2 offset-xl-9">
                                                                <div class="form-group mb-0">
                                                                    <select class="form-control form-control-sm" v-model="form.courseLevel" required>
                                                                        <option value="" disabled>--Course Level--</option>
                                                                        <option value="Bachelors">Bachelors</option>
                                                                        <option value="Masters">Masters</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-xl-1 offset-md-3 offset-xl-0 align-self-center">
                                                                <button class="btn btn-block btn-sm font-xs btn-mg add-anex-i-row" type="button" @click="addNewData">
                                                                    <i class="fa fa-plus"></i><strong>&nbsp;Add row</strong>
                                                                 </button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive table results mb-0 donor-list tmd anex-i-table">
                                                            <table class="table table-sm mb-2">
                                                                <thead class="font-md">
                                                                    <tr class="color-mg font-sm">
                                                                        <th>Institute Name</th>
                                                                        <th>Course Name</th>
                                                                        <th>Address Line-1</th>
                                                                        <th>Address Line-2</th>
                                                                        <th>City</th>
                                                                        <th>District</th>
                                                                         <th>State</th>
                                                                        <th>Pin/ZIP Code</th>
                                                                        <th class="text-center w-5x"><strong>Action</strong></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="h-25x">
                                                                    <tr v-for="(row, index) in rows" :key="index">
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.instituteName" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.courseName" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.addressAddln1" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.addressAddln2" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.addressCity" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.addressDistprov" required />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                               <select class="form-control form-control-sm" v-model="row.addressState" required>
                                                                                <option value="" disabled>--Select--</option>
                                                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                                <option value="Assam">Assam</option>
                                                                                <option value="Bihar">Bihar</option>
                                                                                <option value="Chandigarh">Chandigarh</option>
                                                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                                                <option value="Daman and Diu">Daman and Diu</option>
                                                                                <option value="Delhi">Delhi</option>
                                                                                <option value="Lakshadweep">Lakshadweep</option>
                                                                                <option value="Puducherry">Puducherry</option>
                                                                                <option value="Goa">Goa</option>
                                                                                <option value="Gujarat">Gujarat</option>
                                                                                <option value="Haryana">Haryana</option>
                                                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                                <option value="Jharkhand">Jharkhand</option>
                                                                                <option value="Karnataka">Karnataka</option>
                                                                                <option value="Kerala">Kerala</option>
                                                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                                <option value="Maharashtra">Maharashtra</option>
                                                                                <option value="Manipur">Manipur</option>
                                                                                <option value="Meghalaya">Meghalaya</option>
                                                                                <option value="Mizoram">Mizoram</option>
                                                                                <option value="Nagaland">Nagaland</option>
                                                                                <option value="Odisha">Odisha</option>
                                                                                <option value="Punjab">Punjab</option>
                                                                                <option value="Rajasthan">Rajasthan</option>
                                                                                <option value="Sikkim">Sikkim</option>
                                                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                                                <option value="Telangana">Telangana</option>
                                                                                <option value="Tripura">Tripura</option>
                                                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                                <option value="Uttarakhand">Uttarakhand</option>
                                                                                <option value="West Bengal">West Bengal</option>
                                                                            </select>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                            <input class="form-control form-control-sm" type="number"  v-model="row.addressPinzip" required></div>
                                                                        </td>
                                                                        <td class="text-center w-5x pt-2">
                                                                            <a href="#" @click="deleteRow(index)"><i class="fa fa-trash color-mg font-l"></i></a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-4 my-2">
                         <button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Save</strong></button>
                    </div>
                    <div class="col-xl-2 offset-xl-0 my-2">
                        <router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
export default{
    data(){
        return{
            userId: document.querySelector("meta[name='userId']").getAttribute('content'),
            update: false,
            form:
            {
             courseLevel:'',
            },
            getdata:
            {
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
            errors:[],
            rows: 
            [
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              },
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              },
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              },
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              },
              {  
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
              }
            ],
          }
    },
    methods: {
        addNewData()
        {
            this.rows.push({
                instituteName:'',
                courseName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
            })
        },
        deleteRow(index){
            this.rows.splice(index, 1);
        },

        saveForm() {
            if (this.getdata.hasAdmissionLetter === 'NO'){
                if (!this.update) {
                    axios.post('/api/add-annexurei/'+this.getdata.applicationId,this.rows)
                    .then(response => {
                        if (response.data['success']) {
                            this.$fire({
                                position: 'top',
                                icon: 'success',
                                title: "Annexure-I Saved",
                                showConfirmButton: false,
                                timer: 3000
                            })
                        } else {
                            console.log(response.data['msg'])
                        }
                    })
                    .catch(error => this.errorMsg(error.response.status))
                } else {
                    axios.post('/api/edit-annexurei/'+this.getdata.applicationId,this.rows)
                    .then(response => {
                        if (response.data['success']) {
                            this.$fire({
                                position: 'top',
                                icon: 'success',
                                title: "Annexure-I Updated",
                                showConfirmButton: false,
                                timer: 3000
                            })
                        } else {
                            console.log(response.data['msg'])
                        }
                    })
                    .catch(error => this.errorMsg(error.response.status))
                }
                this.getdataNursing();
            }
        },
        errorMsg (status) {
            switch (status) {
                case 422:{
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Something went wrong! 1",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    break;
                }
                case 405:{
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Something went wrong! 2",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    break;
                }
                case 500:{
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Something went wrong! 3",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    break;
                }
                default: {
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Something went wrong! 4",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    break;
                }
            }
        },
        // getannexurei() {
        //     axios.get(`/api/get-annexurei/${this.getdata.applicationId}`)
        //     .then(response => {
        //         if (response.data['success']) {
        //             this.form =  response.data['data']
        //             this.update = true;
        //         } else {
        //             console.log(response.data['msg'])
        //             this.update = false;
        //         }
        //     })
        // },
        getdataNursing() {
            axios.get(`/api/application-form/${this.userId}`)
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
                    // this.getannexurei();
                }
            })
        }
    },
    created(){
        this.getdataNursing();
    }
 }
</script>
