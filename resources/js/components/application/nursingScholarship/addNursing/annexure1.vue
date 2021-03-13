<template>
<section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                        <h5 class="text-capitalize text-center color-mg"><strong>Application form (Nursing scholarship   {{getdata.financialYear}})</strong></h5>
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
                                        <form class="ub-reg-form">
                                            <div class="form-row">
                                                <div class="col-xl-12">
                                                    <p class="t-c-text">I&nbsp;<span>{{getdata.applicantNameF}} {{getdata.applicantNameM}} {{getdata.applicantNameL}}</span>&nbsp;daughter&nbsp;<span></span> of {{getdata.applicantFatherName}} & {{getdata.applicantMotherName}} residing in&nbsp;<span>{{getdata.addressAddln1}}</span> colony, want to pursue B.Sc. in Nursing In academic year&nbsp;<span>{{getdata.financialYear}}</span>. I will be taking the following Entrance Examination for admission into B.Sc. in Nursing.<br></p>
                                                    <input class="form-control form-control-sm" type="text">
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header">
                                                            <h6 class="mb-0 color-mg">Institute Details</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="color-mg"><strong>Choice 1:</strong></h6>
                                                             <div class="px-2" style="border: 1px solid #c1c1c1;">
                                                                <div class="form-row">
                                                                    <div class="col-xl-4">
                                                                        <label>Institute Name</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text" required v-model="form.choice1instituteName">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <label>Address Line 1</label>
                                                                          <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text" v-model="form.choice1addressAddln1"  required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 offset-xl-0">
                                                                        <label>Address Line 2</label>
                                                                         <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text" required v-model="form.choice1addressAddln2">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-xl-3">
                                                                        <label>City</label>
                                                                        <div class="form-group">
                                                                          <input class="form-control form-control-sm" type="text" required v-model="form.choice1addressCity">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 offset-xl-0">
                                                                        <label>District</label>
                                                                        <div class="form-group">
                                                                          <input class="form-control form-control-sm" type="text" required v-model="form.choice1addressDistprov">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <label>State</label>
                                                                        <div class="form-group">
                                                                            <select class="form-control form-control-sm" required v-model="form.choice1addressState">
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
                                                                    </div>
                                                                      <div class="col-xl-3">
                                                                        <label>PIN/ZIP Code:</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text" required v-model="form.choice1addressPinzip" maxlength="6">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6 class="color-mg mt-2">
                                                            <strong>Choice 2:</strong></h6>
                                                                <div class="px-2" style="border: 1px solid #c1c1c1;">
                                                                <div class="form-row">
                                                                    <div class="col-xl-4">
                                                                        <label>Institute Name</label>
                                                                        <div class="form-group">
                                                                         <input class="form-control form-control-sm" type="text" required v-model="form.choice2instituteName">
                                                                         </div>
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <label>Address Line 1</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text" required  v-model="form.choice2addressAddln1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 offset-xl-0">
                                                                        <label>Address Line 2</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text" required v-model="form.choice2addressAddln2">
                                                                        </div>
                                                                    </div>
                                                                     <div class="col-xl-3">
                                                                        <label>City</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text" required v-model="form.choice2addressCity">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 offset-xl-0">
                                                                        <label>District</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  required v-model="form.choice2addressDistprov">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <label>State</label>
                                                                        <div class="form-group">
                                                                            <select class="form-control form-control-sm" required  v-model="form.choice2addressState">
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
                                                                    </div>
                                                                     <div class="col-xl-3">
                                                                        <label>PIN/ZIP Code:</label>
                                                                          <div class="form-group">
                                                                           <input class="form-control form-control-sm" type="text" required v-model="form.choice2addressPinzip" maxlength="6">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <h6 class="color-mg mt-2">
                                                                <strong>Choice 3:</strong></h6>
                                                                 <div class="px-2" style="border: 1px solid #c1c1c1;">
                                                                 <div class="form-row">
                                                                    <div class="col-xl-4">
                                                                        <label>Institute Name</label>
                                                                         <div class="form-group">
                                                                          <input class="form-control form-control-sm" type="text" required v-model="form.choice3instituteName">
                                                                         </div>
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <label>Address Line 1</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text" required v-model="form.choice3addressAddln1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 offset-xl-0">
                                                                        <label>Address Line 2</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.choice3addressAddln2">
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <div class="col-xl-3">
                                                                        <label>City</label>
                                                                         <div class="form-group">
                                                                          <input class="form-control form-control-sm" type="text"  v-model="form.choice3addressCity">
                                                                        </div>
                                                                    </div>    

                                                                     <div class="col-xl-3 offset-xl-0">
                                                                        <label>District</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control form-control-sm" type="text"  v-model="form.choice3addressDistprov">
                                                                        </div>
                                                                    </div>                                                           
                                                                    <div class="col-xl-3">
                                                                        <label>State</label>
                                                                        <div class="form-group">
                                                                            <select class="form-control form-control-sm" required v-model="form.choice3addressState">
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
                                                                    </div>
                                                                     <div class="col-xl-3">
                                                                        <label>PIN/ZIP Code:</label>
                                                                         <div class="form-group">
                                                                          <input class="form-control form-control-sm" type="text" required v-model="form.choice3addressPinzip" maxlength="6">
                                                                       </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
            form:{
                
                choice1instituteName:'',
                choice1addressAddln1:'',
                choice1addressAddln2:'',
                choice1addressCity:'',
                choice1addressDistprov:'',
                choice1addressState:'',
                choice1addressPinzip:'',

                choice2instituteName:'',
                choice2addressAddln1:'',
                choice2addressAddln2:'',
                choice2addressCity:'',
                choice2addressDistprov:'',
                choice2addressState:'',
                choice2addressPinzip:'',

                choice3instituteName:'',
                choice3addressAddln1:'',
                choice3addressAddln2:'',
                choice3addressCity:'',
                choice3addressDistprov:'',
                choice3addressState:'',
                choice3addressPinzip:'',
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
                insCourse:'',
            },
            errors:[]
        }
    },
    methods: {
        saveForm() {
            if (this.getdata.hasAdmissionLetter === 'NO'){
                if (!this.update) {
                    axios.post('/api/add-annexurei/'+this.getdata.applicationId,this.form)
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
                    axios.post('/api/edit-annexurei/'+this.getdata.applicationId,this.form)
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
                        title: "Something went wrong!",
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
        getannexurei() {
            axios.get(`/api/get-annexurei/${this.getdata.applicationId}`)
            .then(response => {
                if (response.data['success']) {
                    this.form =  response.data['data']
                    this.update = true;
                } else {
                    console.log(response.data['msg'])
                    this.update = false;
                }
            })
        },
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
                    this.getdata.insCourse           = data.insCourse;
                    
                    this.getannexurei();
                }
            })
        }
    },
    created(){
        this.getdataNursing();
    }
 }
</script>
