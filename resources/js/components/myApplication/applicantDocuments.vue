<template>
    <section class="page-main">
        <div class="container">
            <form @submit.prevent="saveForm">
                <div class="form-row">
                    <div class="col-xl-12 text-center mb-3" >
                         <h5 class="text-capitalize text-center color-mg" >
                             <strong>Application form ({{form.financialYear}})</strong>
                        </h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <ul class="nav nav-tabs font-sm" role="tablist">
                                <li class="nav-item" role="presentation"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/application-form/'+form.applicationId"><strong>Applicant Details</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.hasAdmissionLetter === 'NO' && form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-1/'+form.applicationId"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-I</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/annexure-2/'+form.applicationId"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Annexure-II</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link  active" role="tab" data-toggle="tab" :to="'/application-documents/'+form.applicationId"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Upload Documents</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-if="form.applicationId != ''"><router-link class="nav-link" role="tab" data-toggle="tab" :to="'/review-submit/'+form.applicationId"><strong>Review &amp; Submit</strong></router-link></li>
                                <li class="nav-item" role="presentation" v-else><router-link class="nav-link text-secondary" :to="'#'"><strong>Review &amp; Submit</strong></router-link></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-4">
                                    <div class="ub-reg-form">
                                        <div class="div-inner-filed">
                                            <div class="form-row">
                                                <div class="col-xl-12">
                                                    <div class="card mt-2 det-sec">
                                                        <div class="card-header">
                                                            <h6 class="mb-0 color-mg">Upload latest certificates and proofs - (PDF,png,jpeg or jpg files - Max 1 MB each)<br></h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-xl-12">
                                                                    <div class="table-responsive font-md upd-doc">
                                                                        <table class="table table-sm mb-0">
                                                                            <thead class="color-mg">
                                                                                <tr class="color-mg">
                                                                                    <th colspan="2">Required Document</th>
                                                                                    <th>Choose file</th>
                                                                                    <th>Document Name</th>
                                                                                    <th>Uploaded</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr v-for="(row,index) in docRows" :key="index">
                                                                                    <td colspan="2">
                                                                                        <strong>{{row.docFileDesc}}</strong><br>
                                                                                    </td>

                                                                                    <td>
                                                                                        <!-- <input type="hidden" v-model="row.idDoc"/> -->
                                                                                        <input  type="hidden" v-model="row.id"/>
                                                                                        <div class="form-group">
                                                                                            <input class="form-control-file font-sm" type="file" :ref="index" multiple v-on:change="selectFile(index)" >
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>{{row._docFileName}}</td>
                                                                                    <td class="text-center"><span class="badge badge-pill badge-primary cs-badge">{{row.uploadStatus}}</span></td>
                                                                                    <td class="text-center"  v-if="row.uploadStatus == 'YES'"> 
                                                                                        <router-link target="_blank" class="act-link" :to="''+row.fileURL">
                                                                                            <i class="fa fa-eye"></i>
                                                                                        </router-link>
                                                                                        <a class="act-link" href="#" @click.prevent="deleteFile(row.id)">
                                                                                            <i class="fa fa-trash"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td class="text-center" v-else>
                                                                                        <span class="act-link"  style="color:#808080;"><i class="fa fa-eye"></i></span><span class="act-link" style="color:#808080;"><i class="fa fa-trash"></i></span>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-4 my-2"><button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Save</strong></button></div>
                    <div class="col-xl-2 offset-xl-0 my-2"><router-link class="btn btn-danger btn-block btn-sm" type="button" to="/manage-scholarship"><strong>Cancel</strong></router-link>
                    </div>
                </div>
             </form>
        </div>
    </section>
</template>

<script>
export default{
    data(){
        return {
            userId: document.querySelector("meta[name='userId']").getAttribute('content'),
            // docRows1:{},
            // update: false,
            docRows:[
                {
                    id: '',
                    docFileName: '',
                }
            ],
           
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
            },
            errors:[]
        }
    },
    methods:{

        saveForm(){
            axios.post('/api/add-documents/'+this.form.applicationId,this.docRows)
                .then(response => {
                if (response.data['success']){
                    this.readApplicationForm();
                    this.$fire({
                        position: 'top',
                        icon: 'success',
                        title: "Documents Uploaded Successfully",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    
                } else {
                    console.log(response.data['msg'])
                }
            })
            .catch(error => this.errorMsg(error.response.status))
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
                    if(this.form.applicantGender=response.data['data'][0][0].applicantGender == "Male")
                    {
                        this.getData.genderType = "son";
                    }else{
                        this.getData.genderType = "daughter";
                    }
                } 
                else {
                    console.log(response.data['msg'])
                }
            })
            this.getMasterDoc();
        },
      
        getMasterDoc(){
           
            let applicationId = window.location.pathname.split('/').reverse()[0];
            axios.get('/api/get-documents/'+applicationId)
                .then(response => {
                    this.docRows = response.data;
                    if(response.data.length != 0)
                    this.docRows = response.data
                    this.docRows=this.docRows.map((row)=>{
                        let fname = row.docFileName.split('-');
                        fname.shift()
                        row._docFileName= fname.join('-');
                        return row
                    })
                })
        },

        selectFile(index){
            let file = this.$refs[index][0].files[0];
            let fileName = file.name;
            let fileReader = new FileReader()
            fileReader.readAsDataURL(file)
            fileReader.onload = (e) => {
                this.docRows[index].docFileNameFile=e.target.result;
            }
            this.docRows[index].fileName = fileName;
        },

       deleteFile(applicationDocId)
       {
           axios.get(`/api/del-documents/${applicationDocId}`)
            .then(response => {
                   if (response.data==1){
                    this.readApplicationForm();
                    this.$fire({
                        position: 'top',
                        icon: 'success',
                        title: "Document Deleted Successfully",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    
                }
            })
       }
    },
    created(){
     this.readApplicationForm() ;
     
    }
 }
</script>
