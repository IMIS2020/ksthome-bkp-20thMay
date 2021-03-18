<template>
 <section class="page-main">
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3">
                        <h5 class="text-capitalize text-center color-mg"><strong>Application form (Nursing scholarship   {{getdata.financialYear}})</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                              <li class="nav-item" role="presentation"><router-link class="nav-link " role="tab" data-toggle="tab" :to="'/admin/review-nursing-application-form/'+getdata.applicationId"><strong>Application Form</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="getdata.hasAdmissionLetter === 'NO'"><router-link class="nav-link  active" role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-1/'+getdata.applicationId"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item " role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-annexure-2/'+getdata.applicationId"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-upload-documents/'+getdata.applicationId"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/admin/review-nursing-review-submit/'+getdata.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active adm-tab" id="tab-2">
                                    <div class="div-inner-filed py-1 px-2">
                                        <form class="ub-reg-form">
                                            <div class="form-row">
                                                <div class="col-xl-12 align-self-center mb-2">
                                                    <p class="float-left color-mg font-md mb-1">I Rahul Kr. Pandit son/daughter of Manoj Kr. Pandit residing in Khatir Bajar colony, want to pursue higher studies in academic Year 2020-2021. I will be taking the following Entrance Examination for admission into: <br /></p>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="com-bg-1">
                                                        <div class="form-row mb-1">
                                                            <div class="col-xl-2 offset-xl-8 text-right align-self-center">
                                                                <p class="mb-0 color-mg font-md">Course Level:</p>
                                                            </div>
                                                            <div class="col-xl-2 offset-xl-0">
                                                                <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                        <option value>Course Level</option>
                                                                        <option value="12" selected>Bachelors</option>
                                                                        <option value="13">Masters</option>
                                                                    </select></div>
                                                            </div>
                                                            <div class="col-md-2 col-xl-1 offset-md-3 offset-xl-0 d-none align-self-center"><button class="btn btn-block btn-sm font-xs btn-mg add-anex-i-row" type="button"><i class="fa fa-plus"></i><strong> Add row</strong></button></div>
                                                        </div>
                                                        <div class="table-responsive table results mb-0 donor-list tmd anex-i-table">
                                                            <table class="table table-sm mb-2">
                                                                <thead class="font-md">
                                                                    <tr class="color-mg font-sm">
                                                                        <th>Institute Name</th>
                                                                        <th>Course Name</th>
                                                                        <th>Address Line-1</th>
                                                                        <th>Address Line-2</th>
                                                                        <th>District</th>
                                                                        <th>City</th>
                                                                        <th>Pin/ZIP Code</th>
                                                                        <th>State</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="h-25x">
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                    <option value selected>State</option>
                                                                                    <option value="12">West Bengal</option>
                                                                                    <option value="13">Uttar Pradesh</option>
                                                                                    <option value="14">Bihar</option>
                                                                                </select></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                    <option value selected>State</option>
                                                                                    <option value="12">West Bengal</option>
                                                                                    <option value="13">Uttar Pradesh</option>
                                                                                    <option value="14">Bihar</option>
                                                                                </select></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                    <option value selected>State</option>
                                                                                    <option value="12">West Bengal</option>
                                                                                    <option value="13">Uttar Pradesh</option>
                                                                                    <option value="14">Bihar</option>
                                                                                </select></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                    <option value selected>State</option>
                                                                                    <option value="12">West Bengal</option>
                                                                                    <option value="13">Uttar Pradesh</option>
                                                                                    <option value="14">Bihar</option>
                                                                                </select></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><textarea class="form-control form-control-sm" rows="1" readonly></textarea></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><input type="text" class="form-control form-control-sm" readonly /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group mb-0"><select class="form-control form-control-sm" readonly>
                                                                                    <option value selected>State</option>
                                                                                    <option value="12">West Bengal</option>
                                                                                    <option value="13">Uttar Pradesh</option>
                                                                                    <option value="14">Bihar</option>
                                                                                </select></div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
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
                         <button class="btn btn-block btn-sm btn-mg d-none" type="submit"><strong>Save</strong></button>
                    </div>
                    <div class="col-xl-2 offset-xl-0 my-2">
                        <router-link class="btn btn-danger btn-block btn-sm d-none" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link>
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
        logout(){
         axios.get('/admin/logout').then(function(){
            document.location.href = "/admin/login";
         })
      },
        
        getannexurei() {
            const  currentUrl = window.location.pathname.split('/').reverse()[0];
            axios.get('/admin/admin-api/review-nursing-annexure-1/'+currentUrl)
            .then(response => {
                if (response.data['success']) {
                    this.form =  response.data['data']
                  }
            })
        },
        getdataNursing() {
            const  currentUrl = window.location.pathname.split('/').reverse()[0];
            axios.get('/admin/admin-api/review-nursing-application-form/'+currentUrl)
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
