<template>
 <section class="page-main mt-4">
        <div class="container-fluid mt-4 text-black">
            <div class="pre-sub-form f-fm-arbs">
                <div class="row print-1-sec">
                    
                    <div class="col-sm-12 col-md-12 col-xl-12 text-center mt-3 pr-1">
                        <h3><strong>DOCUMENTS ATTACHED</strong></h3>
                        <h6 class="text-uppercase text-center"><strong>Applicant Name. : {{form.fullName}}</strong></h6>
                        <h6 class="text-uppercase"><strong>Application No. : {{form.applicationId}}, (submitted online)</strong></h6>
                        
                    </div>
                    <div class="col-xl-12 mb-2">
                        <div class="table-responsive table-bordered rev-tbl font-xl ofc-only">
                            <table class="table table-bordered table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th><strong>Details</strong></th>
                                        <th class="text-center"><strong>Submitted</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(row,index) in docRows" :key="index">
                                        <td>{{row.docFileDesc}}<br></td>
                                        <td class="text-center">{{row.uploadStatus}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pre-sub-form f-fm-arbs">
                <div class="col-xl-12 mb-3 px-0">
                    <div class="table-responsive table-bordered font-xl ofc-only">
                        <table class="table table-bordered table-sm mb-0">
                            <tbody>
                                <tr>
                                    <td colspan="3"><strong>For Office Use Only</strong></td>
                                </tr>
                                <tr>
                                    <td class="pt-3" rowspan="2"><strong>Whether application is recommended by State Leader</strong></td>
                                    <td class="text-center"><strong>Yes/No</strong></td>
                                    <td><strong>Signature of State Leader</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center"></td>
                                    <td><br></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center mb-1">
                        <h3 class="text-uppercase"><strong>application form</strong></h3>
                    </div>
                    <div class="col-xl-12 text-center mb-1">
                        <h6 class="text-uppercase"><strong>{{form.scholarshipType}} scholarship PROGRAMME - {{form.financialYear}}</strong></h6>
                        <h6 class="text-uppercase"><strong>Application No. : {{form.applicationId}} (submitted online)</strong></h6>
                    </div>
                    <div class="col-md-8 col-xl-10 offset-md-2 offset-xl-1 text-center mb-1">
                        <hr class="cs-hr">
                    </div>
                    <div class="col-sm-9 col-md-10 col-lg-9 col-xl-10 px-0">
                        <div class="row mx-2">
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>1. Applicant's Name</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-5 col-lg-6 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{form.fullName}}</p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>2. Father's Name</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-6 col-xl-7 offset-xl-0 mt-2">
                                <p class="mb-0 font-xl">{{form.applicantFatherName}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>3. Mother's Name</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-6 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{form.applicantMotherName}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>4. Domicile&nbsp;State</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-6 col-xl-7 offset-xl-0 mt-2">
                                <p class="mb-0 font-xl">{{form.applicantDomicileState}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>5. Applicant's Address</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-8 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{form.addressAddln1}},{{(form.addressAddln2==null)?'':form.addressAddln2}},City: {{(form.addressCity==null)?'':form.addressCity}}, Dist :{{(form.addressDistprov==null)?'':form.addressDistprov}}, {{form.addressState}} - {{form.addressPinzip}}</p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 mt-2 pl-4">
                                <p class="mb-0 font-xl"><strong>5.1. Contact No. (Self)</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-2 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{form.applicantContactNoSelf}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 offset-xl-0 mt-2 pl-4">
                                <p class="mb-0 font-xl"><strong>5.2. Contact No (Father)</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-2 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{form.applicantContactNoGuardian}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 mt-2 pl-4">
                                <p class="mb-0 font-xl"><strong>5.3. Contact No. (Colony Leader)</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-2 col-xl-7 mt-2">
                                <p class="mb-0 font-xl"> {{form.applicantContactNoColonyLeader}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-2 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>6. Email Address</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-4 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{form.applicantEmailId}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 offset-xl-0 mt-2">
                                <p class="mb-0 font-xl"><strong>7. Date of Birth</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-2 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{form.applicantDOB.split('-').reverse().join('/')}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>8. Affected by leprosy</strong></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-2 col-md-6 col-lg-2 col-xl-2 mt-2">
                                <span class="mb-0 font-xl" v-if="form.applicantLeprosyAffectedSelf   == true">Self,</span>
                                <span class="mb-0 font-xl" v-if="form.applicantLeprosyAffectedFather == true">Father,</span>
                                <span class="mb-0 font-xl" v-if="form.applicantLeprosyAffectedMother == true">Mother</span>
                            </div>
                            <div class="col-sm-4 col-md-5 col-lg-4 col-xl-3 offset-xl-0 mt-2">
                                <p class="mb-0 font-xl"><strong>9. BPL card holder</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-1 col-md-6 col-lg-1 col-xl-1 mt-2">
                                <p class="mb-0 font-xl">{{form.applicantHasBPLCard}}<br></p>
                            </div>
                        </div>
                    </div>
                      <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2 text-center">
                        <img class="img-thumbnail img-fluid applicant-img" :src="(getFiles.photograph == '#')?'https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg':getFiles.photograph" width="180" height="230" style="border: 2px solid black;">
                    </div>
                    <div class="col-xl-12 mt-4">
                        <p class="mb-2 font-xl"><strong>10. Details of Educational Qualification:&nbsp;</strong>Matriculation / Higher Secondary<br></p>
                    </div>
                    <div class="col-xl-12">
                        <div class="table-responsive table-bordered rev-tbl font-md ofc-only">
                            <table class="table table-bordered table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th><strong>Examination Level</strong></th>
                                        <th><strong>Examination Passed</strong></th>
                                        <th><strong>University/ Board/ Council</strong></th>
                                        <th><strong>Main Subjects</strong></th>
                                        <th><strong>Year of Passing</strong></th>
                                        <th><strong>Percentage</strong></th>
                                        <th><strong>Division</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="fw-600">
                                        <td>{{form.education1ExaminationLevel}}th</td>
                                        <td>{{(form.education1ExaminationLevel== '10')?'Madhyamik':''}}</td>
                                        <td>{{form.education1University}}</td>
                                        <td>{{form.education1MainSubjects}}</td>
                                        <td>{{form.education1YearOfPassing}}</td>
                                        <td>{{form.education1Percentage}}%</td>
                                        <td>{{form.education1Division}}</td>
                                       
                                    </tr>
                                    <tr class="fw-600">
                                       <td>{{form.education2ExaminationLevel}}th</td>
                                        <td>{{(form.education2ExaminationLevel == '12')?'Higher Secondary':''}}</td>
                                        <td>{{form.education2University}}</td>
                                        <td>{{form.education2MainSubjects}}</td>
                                        <td>{{form.education2YearOfPassing}}</td>
                                        <td>{{form.education2Percentage}}%</td>
                                        <td>{{form.education2Division}}</td>
                                    </tr>
                                     <tr class="fw-600" v-if="form.scholarshipType == 'Hddlss'">
                                       <td>{{form.education3ExaminationLevel}}</td>
                                        <td>{{(form.education3ExaminationLevel == '13')?'Graduate':''}}</td>
                                        <td>{{form.education3University}}</td>
                                        <td>{{form.education3MainSubjects}}</td>
                                        <td>{{form.education3YearOfPassing}}</td>
                                        <td>{{form.education3Percentage}}%</td>
                                        <td>{{form.education3Division}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-12 mt-3">
                        <p class="mb-2 font-xl"><strong>11. Name of the courses you have selected:</strong><br></p>
                    </div>
                    <div class="col-xl-12">
                        <div class="table-responsive table-bordered rev-tbl font-md ofc-only">
                            <table class="table table-bordered table-sm mb-0">
                                <tbody>
                                    <tr>
                                        <td><strong>Name of the Course</strong></td>
                                        <td class="fw-600">{{(form.courseNameValueId == null)?'N/A':form.insCourse}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Name of the institute</strong></td>
                                        <td class="fw-600">{{(form.insName == '')?'N/A':form.insName}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Address&nbsp;of the institute</strong></td>
                                        <td class="fw-600">{{form.insAddressAddln1}}, 
                                                            {{form.insAddressAddln2}}, 
                                                            {{form.insAddressCity}}, 
                                                            {{form.insAddressDistprov}}, 
                                                            {{form.insAddressState}},
                                                            {{form.insAddressPinzip}} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Whether recognized by Indian Nursing Council</strong></td>
                                        <td class="fw-600">{{(form.recognizedByINC == null)?'N/A':form.recognizedByINC}}<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-3 mt-3 pr-1">
                        <p class="text-white mb-2 font-xl txt-blk-bg">&nbsp;Self Declaration</p>
                    </div>
                    <div class="col-xl-12 mt-1">
                        <p class="font-md"><span><input type="checkbox" v-model='terms'></span>&nbsp;I {{form.fullName}} hereby declare that to the best of my knowledge the above information furnished by me is true and I understand that if at any stage, it is found that the information provided by me is false/ not true, all the benefits given to me under "Nursing Scholarship" could be withdrawn.<br></p>
                         <p class="color-mg text-center">This is an electronically generated document and does not require a signature</p>
                    </div>
                </div>
            </div>
            <div class="row mb-4 d-print-none">
                <div class="col-xl-4 offset-xl-4 text-center">
                <button class="btn btn-sm btn-mg mr-2" role="button" :disabled='isDisabled' onclick="window.print()">Print/Download Application Form</button></div>
            </div>
        </div>
    </section>
</template>

<script>
export default{
    data(){
       return{
         userId: document.querySelector("meta[name='userId']").getAttribute('content'),
         csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          terms: false,
           docRows:[
                {
                    id: '',
                    docFileName: '',
                }
            ],
        form: {
                applicationId:'',
                scholarshipType: '',
                applicantNameF:'',
                applicantNameM:'',
                applicantNameL:'',
                applicantFatherName:'',
                applicantMotherName:'',
                applicantDOB:'',
                applicantGender:'',
                applicantLeprosyAffectedSelf: false,
                applicantLeprosyAffectedFather: false,
                applicantLeprosyAffectedMother: false,
                applicantDisablitySelf: false,
                applicantDisablityFather: false,
                applicantDisablityMother: false,
                applicantHasBPLCard:'',
                applicantDomicileState:'',
                applicantColonyName:'',
                addressAddln1:'',
                addressAddln2:'',
                addressCity:'',
                addressDistprov:'',
                addressState:'',
                addressPinzip:'',
                applicantContactNoSelf: '',
                applicantContactNoGuardian:'',
                applicantEmailId:'',
                applicantContactNoColonyLeader:'',
                financialYear : '',
                //education level 10
                education1ExaminationLevel:'10',
                education1ExaminationPassed: '',
                education1University: '',
                education1UniversityValue: '',
                education1MainSubjects: '',
                education1YearOfPassing: '',
                education1Percentage: '',
                education1Division: '',

                //education level 12
                education2ExaminationLevel:'12',
                education2ExaminationPassed: '',
                education2University: '',
                 education2UniversityValue: '',
                education2MainSubjects: '',
                education2YearOfPassing: '',
                education2Percentage: '',
                education2Division: '',

                //education level graduate for hddlss only (13)
                education3ExaminationLevel:'13',
                education3ExaminationPassed: '',
                education3University: '',
                 education3UniversityValue: '',
                education3MainSubjects: '',
                education3YearOfPassing: '',
                education3Percentage: '',
                education3Division: '',
                
                //end Education

                //additional qualification
                additional1ExaminationLevel:'10',
                additional1ExaminationPassed: '',
                additional1University: '',
                additional1MainSubjects: '',
                additional1YearOfPassing: '',
                additional1Percentage: '',
                additional1Division: '',

                additional2ExaminationLevel:'12',
                additional2ExaminationPassed: '',
                additional2University: '',
                additional2MainSubjects: '',
                additional2YearOfPassing: '',
                additional2Percentage: '',
                additional2Division: '',

                //end of qualification
                
                hasAdmissionLetter:'YES',
                courseLevelValueId: 'N',
                courseNameValueId: '',
                instituteId:'',
                insCourse:'',
                insName:'',
                insAddressAddln1:'',
                insAddressAddln2:'',
                insAddressCity:'',
                insAddressDistprov:'',
                insAddressState:'',
                insAddressPinzip:'',
                recognizedByINC:'',
                miscName1:'',
                miscCourse1:'',
                miscYear1:'',
                miscName2:'',
                miscCourse2:'',
                miscYear2:'',
                miscName3:'',
                miscCourse3:'',
                miscYear3:'',

                fullName: '',
            },
            getFiles: {
                admissionLetter:'#',
                annexureII:'#',
                photograph:'#',
                proofOfAge:'#',
                markSheets10:'#',
                markSheets12:'#',
                leprosyCertificateMother:'#',
                leprosyCertificateFather:'#',
                leprosyCertificateSelf:'#',
                
            },
            insData:{},
        errors:[]
        }
    },
   methods:{
       async readApplicationForm() 
            {
                let applicationId = window.location.pathname.split('/').reverse()[0];
                
                axios.get(`/api/get-application-form-data/${applicationId}`)
                .then(response => {
                    if (response.data['success']) {
                        this.form.applicationId=response.data['data'][0][0].schApplicationId;
                        this.form.scholarshipType=response.data['data'][0][0].scholarshipType;
                        this.form.applicantNameF=response.data['data'][0][0].applicantNameF;
                        this.form.applicantNameM=response.data['data'][0][0].applicantNameM;
                        this.form.applicantNameL=response.data['data'][0][0].applicantNameL;
                        this.form.applicantFatherName=response.data['data'][0][0].applicantFatherName;
                        this.form.applicantMotherName=response.data['data'][0][0].applicantMotherName;
                        this.form.applicantDOB=response.data['data'][0][0].applicantDOB;
                        this.form.applicantGender=response.data['data'][0][0].applicantGender,
                        this.form.applicantLeprosyAffectedSelf=response.data['data'][0][0].applicantLeprosyAffectedSelf;
                        this.form.applicantLeprosyAffectedFather=response.data['data'][0][0].applicantLeprosyAffectedFather;
                        this.form.applicantLeprosyAffectedMother=response.data['data'][0][0].applicantLeprosyAffectedMother;
                        this.form.applicantDisablityMother         = response.data['data'][0][0].applicantDisablityMother; 
                        this.form.applicantDisablityFather         = response.data['data'][0][0].applicantDisablityFather; 
                        this.form.applicantDisablitySelf           = response.data['data'][0][0].applicantDisablitySelf;
                        this.form.applicantHasBPLCard=response.data['data'][0][0].applicantHasBPLCard;
                        this.form.applicantDomicileState=response.data['data'][0][0].applicantDomicileState;
                        this.form.addressAddln1=response.data['data'][0][0].get_address.addressAddln1;
                        this.form.addressAddln2=response.data['data'][0][0].get_address.addressAddln2;
                        this.form.addressCity=response.data['data'][0][0].get_address.addressCity;
                        this.form.addressDistprov=response.data['data'][0][0].get_address.addressDistprov;
                        this.form.addressState=response.data['data'][0][0].get_address.addressState;
                        this.form.addressPinzip=response.data['data'][0][0].get_address.addressPinzip;
                        this.form.applicantContactNoSelf=response.data['data'][0][0].applicantContactNoSelf;
                        this.form.applicantContactNoGuardian=response.data['data'][0][0].applicantContactNoGuardian;
                        this.form.applicantEmailId=response.data['data'][0][0].applicantEmailId;
                        this.form.applicantContactNoColonyLeader=response.data['data'][0][0].applicantContactNoColonyLeader;
                        this.form.financialYear = response.data['data'][0][0].financialYear;  
                        this.form.hasAdmissionLetter = response.data['data'][0][0].hasAdmissionLetter;
                        this.form.fullName = response.data['data'][0][0].applicantNameF+' '+ (response.data['data'][0][0].applicantNameM == null ? ' ' : response.data['data'][0][0].applicantNameM )+' '+response.data['data'][0][0].applicantNameL;
                        if(this.form.hasAdmissionLetter == 'YES') {
                            // this.inputDisabled = false; 
                            // this.form.insCourse=response.data['data'][0][0].get_institute.,
                            this.form.instituteId=response.data['data'][0][0].instituteId,
                            this.dataIns(response.data['data'][0][0].instituteId),
                            this.form.courseNameValueId = response.data['data'][0][0].courseNameValueId,
                            // this.form.insAddressAddln1=response.data['data'][0][0].courseNameValue,
                            // this.form.insAddressAddln2=response.data['data'][0][0].get_institute.addressAddln2,
                            // this.form.insAddressCity=response.data['data'][0][0].get_institute.addressCity,
                            // this.form.insAddressDistprov=response.data['data'][0][0].get_institute.addressDistprov,
                            // this.form.insAddressState=response.data['data'][0][0].get_institute.addressState,
                            // this.form.insAddressPinzip=response.data['data'][0][0].get_institute.addressPinzip,
                            this.form.recognizedByINC=response.data['data'][0][0].recognizedByINC;
                        } ;
                        
                        //education level 10
                        if(response.data['data'][1][0].get_exam_level_domain_values.value == 10){
                                this.form.education1ExaminationLevel='10',
                                this.form.education1ExaminationPassed= response.data['data'][1][0].get_exam_passed_domain_values.id,
                                this.form.education1University= response.data['data'][1][0].get_exam_board_domain_values.value,
                                this.form.education1MainSubjects= response.data['data'][1][0].mainSubjects,
                                this.form.education1YearOfPassing= response.data['data'][1][0].yearOfPassing,
                                this.form.education1Percentage= response.data['data'][1][0].percentage,
                                this.form.education1Division= response.data['data'][1][0].division;
                        };

                        //education level 12
                        if(response.data['data'][1][1].get_exam_level_domain_values.value == 12){
                                this.form.education2ExaminationLevel='12',
                                this.form.education2ExaminationPassed= response.data['data'][1][1].get_exam_passed_domain_values.id,
                                this.form.education2University= response.data['data'][1][1].get_exam_board_domain_values.value,
                                this.form.education2MainSubjects= response.data['data'][1][1].mainSubjects,
                                this.form.education2YearOfPassing= response.data['data'][1][1].yearOfPassing,
                                this.form.education2Percentage= response.data['data'][1][1].percentage,
                                this.form.education2Division= response.data['data'][1][1].division;
                        };

                        //education level graduate for hddlss only (13)
                        if(response.data['data'][1][2].get_exam_level_domain_values.value == 13){
                                this.form.education3ExaminationLevel='13',
                                this.form.education3ExaminationPassed= response.data['data'][1][2].get_exam_passed_domain_values.id,
                                this.form.education3University= response.data['data'][1][2].get_exam_board_domain_values.value,
                                this.form.education3MainSubjects= response.data['data'][1][2].mainSubjects,
                                this.form.education3YearOfPassing= response.data['data'][1][2].yearOfPassing,
                                this.form.education3Percentage= response.data['data'][1][2].percentage,
                                this.form.education3Division= response.data['data'][1][2].division;
                        };

                    } 
                    else {
                        console.log(response.data['msg'])
                    }
                })
                axios.get(`/api/get-application-form-data/${applicationId}`)
                .then(response => {
                    if (response.data['success']) {

                        this.form.miscName1= response.data['data'][2][0].name;
                        this.form.miscCourse1= response.data['data'][2][0].course;
                        this.form.miscYear1= response.data['data'][2][0].year;
                        this.form.miscName2= response.data['data'][2][1].name;
                        this.form.miscCourse2= response.data['data'][2][1].course;
                        this.form.miscYear2= response.data['data'][2][1].year;
                        this.form.miscName3= response.data['data'][2][2].name;
                        this.form.miscCourse3= response.data['data'][2][2].course;
                        this.form.miscYear3= response.data['data'][2][2].year;

                    } 
                    else {
                        console.log(response.data['msg'])
                    }
                })
            },

          dataIns(id)
            {
                
                if(this.insId != 'Others'){
                    axios.get('/api/institute/get-details/'+id)
                    .then(response => {
                        if (response.data['success']) {
                            this.form.insName = response.data['data'][0].instituteName;
                            this.form.insAddressAddln1 = response.data['data'][0].get_address.addressAddln1;
                            this.form.insAddressAddln2 = response.data['data'][0].get_address.addressAddln2;
                            this.form.insAddressCity = response.data['data'][0].get_address.addressCity;
                            this.form.insAddressDistprov = response.data['data'][0].get_address.addressDistprov;
                            this.form.insAddressState = response.data['data'][0].get_address.addressState;
                            this.form.insAddressPinzip = response.data['data'][0].get_address.addressPinzip;
                        } else {
                            console.log(response.data['msg'])
                        }
                    }).catch(error => this.errorMsg(error.response.status))
                }
            },
       
    //     getFileData(){
    //     axios.get('/api/get-upload-documents/'+this.form.applicationId)
    //     .then(response => {
    //         if (response.data['success']) {
    //             this.getFiles = response.data['data'],
                
    //             this.getFiles.admissionLetter    = data.admissionLetter;
    //             this.getFiles.annexureII         = data.annexureII;
    //             this.getFiles.photograph         = data.photograph;
    //             this.getFiles.proofOfAge         = data.proofOfAge;
    //             this.getFiles.markSheets10       = data.markSheets10;
    //             this.getFiles.markSheets12       = data.markSheets12;
    //             this.getFiles.leprosyCertificateMother = data.leprosyCertificateMother;
    //             this.getFiles.leprosyCertificateFather = data.leprosyCertificateFather;
    //             this.getFiles.leprosyCertificateSelf   = data.leprosyCertificateSelf;
    //         }
    //     })
    // },

    getMasterDoc(){
           
            let applicationId = window.location.pathname.split('/').reverse()[0];
            axios.get('/api/get-documents/'+applicationId)
                .then(response => {
                    this.docRows = response.data;
                    // if(response.data.length != 0)
                    // this.docRows = response.data
                    // this.docRows=this.docRows.map((row)=>{
                    //     let fname = row.docFileName.split('-');
                    //     fname.shift()
                    //     row._docFileName= fname.join('-');
                    //     return row
                    // })
                })
        },

  },
  computed: {
  	  isDisabled: function(){
    	return !this.terms;
        }
      },
    created(){
     this.readApplicationForm();
     this.getMasterDoc();
    }
 }
</script>
