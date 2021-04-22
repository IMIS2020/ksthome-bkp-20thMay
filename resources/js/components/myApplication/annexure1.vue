<template>
 <section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                        <h5 class="text-capitalize text-center color-mg"><strong>Application for {{form.scholarshipType}} scholarship {{form.financialYear}} {{form.appIdShow == '' ? '' : '( APP NO: '+form.appIdShow+')'}}</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-form/'+form.applicationId"><strong>Applicant Details</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.hasAdmissionLetter === 'NO' && form.applicationId != ''"><router-link class="nav-link active" role="tab" data-toggle="tab" :to="'/annexure-1/'+form.applicationId"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/review-submit/'+form.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                               <div class="tab-pane active" role="tabpanel" id="tab-2">
                                    <div class="div-inner-filed">
                                        <div lang="" class="ub-reg-form">
                                            <div class="form-row">
                                                <div class="col-xl-12 align-self-center mb-2">
                                                    <p class="float-left color-mg font-md mb-1">I {{form.applicantNameF}} {{form.applicantNameM}} {{form.applicantNameL}} {{getData.genderType}} of {{form.applicantFatherName}}  residing in {{form.addressAddln1}}, want to pursue higher studies in academic Year {{form.financialYear}}. I will be taking the following Entrance Examination for admission into:&nbsp;<br></p>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="com-bg-1">
                                                        <div class="form-row mb-1">
                                                            <div class="col-xl-2">
                                                                <div class="form-group mb-0 align-self-center">
                                                                    <div class="form-group mb-0">
                                                                        <label  style="color:#702E2E" class="mb-0"><strong>Degree/Cerificate<span class="text-danger"><strong>*</strong></span></strong></label>
                                                                        <select class="form-control form-control-sm" v-model="courseLevelValueId2" :disabled="inputDisabled" @click="getHHDLSData($event)">
                                                                            <option value="" disabled>-- select --</option>
                                                                            <option v-for="(ucl,index) in universityCourseLevel" :key="index" :value="ucl.id" selected>{{ucl.description}}</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <label  style="color:#702E2E" class="mb-0"><strong>Course Name<span class="text-danger"><strong>*</strong></span></strong></label><a data-toggle="modal" href="#" class="font-sm"  data-target="#others-course-name" v-if="form.scholarshipType=='HHDLS'" @click="addName('CourseName')"><strong> +Add New</strong></a>
                                                                <div class="form-group mb-0" v-if="form.scholarshipType=='HHDLS'">
                                                                    <select class="form-control form-control-sm" v-model="courseNameValueId2" :disabled="inputDisabled" @click="clearRow">
                                                                        <option value="" disabled>-- select --</option>
                                                                        <option v-for="(ucn,index) in universityCourseName" :key="index" :value="ucn.id">{{ucn.value}}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group mb-0" v-if="form.scholarshipType=='Nursing'">
                                                                    <select class="form-control form-control-sm" v-model="courseNameValueId2" :disabled="inputDisabled" @click="clearRow">
                                                                        <option value="" disabled>-- select --</option>
                                                                        <option v-for="(ucn,index) in universityCourseName" :key="index" :value="ucn.id">{{ucn.value}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-xl-1 offset-md-3 offset-xl-6">
                                                                <br>
                                                                <button class="btn btn-block btn-sm font-xs btn-mg add-anex-i-row" type="button" @click="addNewData">
                                                                    <i class="fa fa-plus"></i><strong>&nbsp;Add row</strong>
                                                                 </button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive table results mb-0 donor-list tmd anex-i-table">
                                                            <table class="table table-sm mb-2">
                                                                <thead class="font-md">
                                                                    <tr class="color-mg font-sm">
                                                                        <!-- <th>Course </th> -->
                                                                        <th>Institute<span class="text-danger"><strong>*</strong></span> <a data-toggle="modal" href="#" data-target="#others-add-institute">+ Add New Institute</a></th>
                                                                        <!-- <th>Address Line-1</th>
                                                                        <th>Address Line-2</th> -->
                                                                        <th class="w-20x">City/Town</th>
                                                                        <th class="w-20x">District</th>
                                                                        <th class="w-20x">State</th>
                                                                        <!-- <th>Pin/ZIP Code</th> -->
                                                                        <th class="text-center w-5x"><strong>Action</strong></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="h-25x">
                                                                    <tr v-for="(row, index) in rows" :key="index">
                                                                        <!-- <td>
                                                                            
                                                                        </td> -->
                                                                        <td>
                                                                            <input type="hidden" v-model="row.id" :disabled="globalDisable"/>
                                                                            <input type="hidden" v-model="row.courseLevelValueId" :disabled="globalDisable" />
                                                                            <input type="hidden" v-model="row.courseNameValueId" :disabled="globalDisable" />
                                                                            <div class="form-group mb-0">
                                                                                <select class="form-control form-control-sm" @change="onChange($event,index)" v-model="row.insId" :disabled="globalDisable">
                                                                                    <option v-for="(i,index) in insData" :key="index" :value="i.id">{{i.instituteName}} - {{i.get_address.addressCity}}, {{i.get_address.addressState}}</option>
                                                                                </select>
                                                                            </div>
                                                                        </td>
                                                                        
                                                                        <!-- <td>
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.addressAddln1" disabled  />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.addressAddln2" disabled  />
                                                                            </div>
                                                                        </td> -->
                                                                        <td class="w-20x">
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.addressCity" disabled  />
                                                                            </div>
                                                                        </td>
                                                                        <td class="w-20x">
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" rows="1"  v-model="row.addressDistprov" disabled  />
                                                                            </div>
                                                                        </td>
                                                                        <td class="w-20x">
                                                                            <div class="form-group mb-0">
                                                                               <input class="form-control form-control-sm" rows="1"  v-model="row.addressState" disabled  />
                                                                            </div>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <div class="form-group mb-0">
                                                                                <input class="form-control form-control-sm" type="number"  v-model="row.addressPinzip" disabled  />
                                                                            </div>
                                                                        </td> -->
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
                    <div class="col-xl-2 offset-xl-4 my-2" v-if="globalDisable == false">
                        <button class="btn btn-block btn-sm btn-mg" type="submit">
                            <strong>Save</strong>
                        </button>
                    </div>
                    <div class="col-xl-2 offset-xl-0 my-2" v-if="globalDisable == false">
                        <router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-my-application"><strong>Cancel</strong></router-link>
                    </div>
                    <div class="col-xl-2 offset-xl-5 my-2" v-else>
                        <router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-my-application"><strong>Cancel</strong></router-link>
                    </div>
                </div>
            </form>
            
            <!-- Star Course Level modal -->
            <!-- <div role="dialog" tabindex="-1" class="modal fade" id="others-course-level">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header py-1">
                            <h6 class="modal-title color-mg font-md"><strong>Add Other Course Level</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body cs-modal-body">
                            <div class="form-row">
                                <div class="col-xl-12 mb-2">
                                    <input type="hidden" class="form-control form-control-sm" v-model="domainForm.domainName" />
                                    <div class="form-group mb-0"><label class="mb-0">Course Level</label>
                                        <input type="text" class="form-control form-control-sm" v-model="domainForm.dValue"/>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <div class="form-group mb-0"><label class="mb-0">Course Level Desc</label>
                                        <input type="text" class="form-control form-control-sm" v-model="domainForm.dDesc" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="button" @click="saveDomainValues"><strong>Submit</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
                    </div>
                </div>
            </div> -->
            <!-- End course level modal -->

            <!-- Star Course name modal -->
           <div role="dialog" tabindex="-1" class="modal fade" id="others-course-name">
                <div class="modal-dialog modal-sm" role="document">
                    <form @submit.prevent="saveDomainValues">
                    <div class="modal-content">
                        <div class="modal-header py-1">
                            <h6 class="modal-title color-mg font-md"><strong>Add Other Course Name</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body cs-modal-body">
                            <div class="form-row">
                                    <div class="col-xl-12 mb-2">
                                <div class="form-group mb-0">
                                    <label class="mb-0">Degree/Cerificate<span class="text-danger"><strong>*</strong></span></label>
                                    <input type="hidden" v-model="domainForm.domainName" />
                                    
                                    <select class="form-control form-control-sm" v-model="domainForm.domainLevel2" :disabled="inputDisabled" required>
                                        <option value="" disabled>-- select --</option>
                                        <option v-for="(ucl,index) in universityCourseLevel" :key="index" :value="ucl.id" selected>{{ucl.description}}</option>
                                    </select>
                                </div>
                                    </div>
                                <div class="col-xl-12 mb-2">
                                    <input type="hidden" class="form-control form-control-sm" v-model="domainForm.domainName" :disabled="globalDisable" required/>
                                    <div class="form-group mb-0"><label class="mb-0">Course Name</label>
                                        <input type="text" class="form-control form-control-sm" v-model="domainForm.dValue" :disabled="globalDisable" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="submit" ><strong>Add</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- End course name modal -->

            <!--Institute Details modal -->
                <div role="dialog" tabindex="-1" class="modal fade" id="others-add-institute">
                    <div class="modal-dialog modal-lg" role="document">
                        <form @submit.prevent="saveInstitute">
                            <div class="modal-content">
                                <div class="modal-header py-1">
                                    <h6 class="modal-title color-mg font-md"><strong>Add New Institute</strong></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body cs-modal-body">
                                    <div class="form-row">
                                        <div class="col-xl-12 mb-2">
                                            <label>Institute Name&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" v-model="insForm.insName" required>
                                            </div>
                                        </div>
                                        <input type="hidden" v-model="insForm.insType" />
                                        <!-- <div class="col-xl-6 mb-2">
                                            <label>Address Line 1</label>
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" v-model="insForm.insAddressAddln1">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-2">
                                            <label>Address Line 2</label>
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" v-model="insForm.insAddressAddln2" >
                                            </div>
                                        </div> -->
                                        <div class="col-xl-6 mb-2">
                                            <label>City/Town&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" v-model="insForm.insAddressCity" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-2">
                                            <label>District</label>
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" v-model="insForm.insAddressDistprov" >
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-2">
                                            <label>State&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                            <div class="form-group"> 
                                                <select class="form-control form-control-sm" v-model="insForm.insAddressState" required>
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
                                        <!-- <div class="col-xl-6 mb-2">
                                                <label>PIN/ZIP Code&nbsp;<span class="text-danger"><strong>*</strong></span></label>
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="number" v-model="insForm.insAddressPinzip" >
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="modal-footer py-1"><button class="btn btn-sm btn-mg" type="submit" ><strong>Submit</strong></button><button class="btn btn-sm btn-cancel" type="button" data-dismiss="modal"><strong>Close</strong></button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End of Institute modal -->
        </div>
    </section>
</template>

<script>
export default{
    data(){
        return{
            userId: document.querySelector("meta[name='userId']").getAttribute('content'),
            // update: false,
            globalDisable: false,
            universityCourseLevel:{},
            universityCourseName: {},
            insData:{},
            insDataDetails:{
                address1: '',
            },
           
            courseLevelValueId2: '',
            courseNameValueId2: '',

            domainForm: {
                domainName : 'CourseName',
                dValue : '',
                dDesc : '',
            },
            insId: '',
            insForm: {
                
                insType:'',
                insName:'',
                insAddressAddln1:'',
                insAddressAddln2:'',
                insAddressCity:'',
                insAddressDistprov:'',
                insAddressState:'',
                insAddressPinzip:'',
            },
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
                applicantGender:'',
                appIdShow:'',
            },

            getData :{
                genderType : '',
            },
            
            errors:[],
            rows: 
            [
              {  
                insId : '',
                courseLevelValueId: '',
                courseNameValueId: '',
                addressAddln1 : '',
                addressAddln2 :'',
                addressCity : '',
                addressDistprov : '',
                addressState : '',
                addressPinzip : '',
              },
            ],
          }
    },
    methods: {
        
        addNewData()
        {
            this.rows.push({
                id: '',
                insId : '',
                courseLevelValueId: this.courseLevelValueId2,
                courseNameValueId: this.courseNameValueId2,
                addressAddln1 : '',
                addressAddln2 :'',
                addressCity : '',
                addressDistprov : '',
                addressState : '',
                addressPinzip : '',
            })
        },
        deleteRow(index){
            this.rows.splice(index, 1);
        },

        saveForm() {
            console.log(this.update);
            if (this.form.hasAdmissionLetter === 'NO'){
                // this.rows.courseLevelValueId = this.cLform.courseLevelValueId,
                axios.post('/api/add-annexure1/'+this.form.applicationId,this.rows)
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

        getannexurei() {
            let applicationId = window.location.pathname.split('/').reverse()[0];
            axios.get(`/api/get-annexure1/${applicationId}`)
            .then(response => {
                if (response.data['success']) {
                    this.rows = response.data['data'];
                    this.courseLevelValueId2 = response.data['data'][0].courseLevelValueId;
                    this.courseNameValueId2  = response.data['data'][0].courseNameValueId;
                    this.getHHDLSData2(this.courseLevelValueId2);
                    this.update = true;
                } else {
                    console.log(response.data['msg'])
                    this.update = false;
                }
            })
        },
       
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
                    this.form.applicantNameM=response.data['data'][0][0].applicantNameM;
                    this.form.applicantNameL=response.data['data'][0][0].applicantNameL;
                    this.form.applicantFatherName=response.data['data'][0][0].applicantFatherName;
                    this.form.applicantMotherName=response.data['data'][0][0].applicantMotherName;
                    this.form.financialYear = response.data['data'][0][0].financialYear;  
                    this.form.hasAdmissionLetter = response.data['data'][0][0].hasAdmissionLetter;
                    this.form.addressAddln1=response.data['data'][0][0].get_address.addressAddln1;
                    this.insForm.insType = response.data['data'][0][0].scholarshipType;
                    this.form.appIdShow = response.data['data'][0][0].appIdShow;
                    this.readDomainValues(this.form.scholarshipType);
                    this.readInsValue(this.form.scholarshipType);
                    if(this.form.applicantGender=response.data['data'][0][0].applicantGender == "Male")
                    {
                        this.getData.genderType = "son";
                    }else{
                        this.getData.genderType = "daughter";
                    };
                    this.form.appStatus = response.data['data'][0][0].appStatus;
                    if(this.form.appStatus == 'Submit')
                    {
                        this.globalDisable = true;
                    };
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
        },
       

        readDomainValues(type)
        {
            
            if(type == 'HHDLS')
            {
                // axios.get('/api/domain/course-name/hhdls')
                //     .then(response => {
                //         this.universityCourseName = response.data;
                //     });   
                axios.get('/api/domain/course-level/hhdls')
                    .then(response => {
                        this.universityCourseLevel= response.data;
                    });
            }else if(type == 'Nursing')
            {
                axios.get('/api/domain/course-name/nursing')
                    .then(response => {
                        this.universityCourseName = response.data;
                    }); 
                    axios.get('/api/domain/course-level/nursing')
                    .then(response => {
                        this.universityCourseLevel= response.data;
                    });

            }
            
            
        },

        readInsValue(type)
        {
            axios.get('/api/institute/get-data/'+type)
                .then(response => {
                    this.insData = response.data;
                });
        },

        saveDomainValues()
        {
            axios.post('/api/domain/add',this.domainForm)
            .then(response => {
                if (response.data['success']) {
                     this.readDomainValues();
                        let showMsg = '';
                        if(this.domainForm.domainName == 'CourseLevel')
                        {
                            showMsg = 'Course Level'
                        }else if(this.domainForm.domainName == 'CourseName')
                        {
                            showMsg = 'Course Name'
                        }
                        this.$fire({
                            position: 'top',
                            icon: 'success',
                            title: "Added new "+showMsg,
                            showConfirmButton: false,
                            timer: 3000
                        });
                    
                } else {
                    this.$fire({
                        position: 'top',
                        icon: 'error',
                        title: "Value exsists could not add",
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            })
        },

        saveInstitute()
        {
            axios.post('/api/institute/add',this.insForm)
            .then(response => {
                if (response.data['success']) {
                    this.readInsValue(this.form.scholarshipType);
                    
                    this.$fire({
                        position: 'top',
                        icon: 'success',
                        title: "Added new Institute",
                        showConfirmButton: false,
                        timer: 3000
                    });
                    
                } else {
                    console.log(response.data['msg'])
                }
            }).catch(error => this.errorMsg(error.response.status))
        },

        addName(data)
        {
            this.domainForm.domainName = data;
          //  this.rows.courseLevelValueId = data;
        },

        getData(insId,index)
        {
            console.lof(insId);
            axios.get('/api/institute/get-details/'+insId)
            .then(response => {
                if (response.data['success']) {
                    this.rows[index].addressAddln1 = response.data['data'][0].get_address.addressAddln1;
                    this.rows[index].addressAddln2 = response.data['data'][0].get_address.addressAddln2;
                    this.rows[index].addressCity = response.data['data'][0].get_address.addressCity;
                    this.rows[index].addressDistprov = response.data['data'][0].get_address.addressDistprov;
                    this.rows[index].addressState = response.data['data'][0].get_address.addressState;
                    this.rows[index].addressPinzip = response.data['data'][0].get_address.addressPinzip;
                } else {
                    console.log(response.data['msg'])
                }
            }).catch(error => this.errorMsg(error.response.status))
        },

        onChange(event,index)
        {
            this.insId = event.target.value;
            console.log(this.insId);
            axios.get('/api/institute/get-details/'+this.insId)
            .then(response => {
                if (response.data['success']) {
                    this.rows[index].addressAddln1 = response.data['data'][0].get_address.addressAddln1;
                    this.rows[index].addressAddln2 = response.data['data'][0].get_address.addressAddln2;
                    this.rows[index].addressCity = response.data['data'][0].get_address.addressCity;
                    this.rows[index].addressDistprov = response.data['data'][0].get_address.addressDistprov;
                    this.rows[index].addressState = response.data['data'][0].get_address.addressState;
                    this.rows[index].addressPinzip = response.data['data'][0].get_address.addressPinzip;
                } else {
                    console.log(response.data['msg'])
                }
            }).catch(error => this.errorMsg(error.response.status))
        },
        getHHDLSData(event)
        {
            this.clearRow();
            let id = event.target.value;
            axios.get('/api/domain/course-name/hhdls/'+id)
                .then(response => {
                    this.universityCourseName = response.data;
                });  
        },
        getHHDLSData2(id)
        {
            
            axios.get('/api/domain/course-name/hhdls/'+id)
                .then(response => {
                    this.universityCourseName = response.data;
                });  
        },
        clearRow()
        {
            let l =this.rows.length;
            for(let i=0;i<l;i++)
            {
                this.rows[i].courseLevelValueId = this.courseLevelValueId2;
                this.rows[i].courseNameValueId = this.courseNameValueId2;
            }
        }
    },
    created(){
        // this.readInsValue();
        this.readDomainValues();
        this.readApplicationForm();
        this.getannexurei();
    }
 }
</script>
