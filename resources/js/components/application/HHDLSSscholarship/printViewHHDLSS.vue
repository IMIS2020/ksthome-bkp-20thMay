<template>
 <section class="page-main mt-4">
        <div class="container-fluid mt-4 text-black">
            <div class="pre-sub-form f-fm-arbs">
                <div class="row print-1-sec">
                    
                    <div class="col-sm-12 col-md-12 col-xl-12 text-center mt-3 pr-1">
                        <h3><strong>DOCUMENTS ATTACHED</strong></h3>
                        <h6 class="text-uppercase text-center"><strong>Applicant Name. : {{getdata.fullName}}</strong></h6>
                        <h6 class="text-uppercase"><strong>Application No. : {{getdata.applicationId}}, (submitted online)</strong></h6>
                        
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
                                    <tr>
                                        <td>Proof of admission in recognised institute/ admission call letter issued by the institute<br></td>
                                        <td class="text-center">{{(getFiles.admissionLetter === '#')?'No':'Yes'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Annexure-II letter from colony leader stating the candidate is residing in the colony<br></td>
                                        <td class="text-center">{{(getFiles.annexureII === '#')?'No':'Yes'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Passport size photograph<br></td>
                                        <td class="text-center">{{(getFiles.photograph === '#')?'No':'Yes'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Self attested Birth certificate/ proof of age<br></td>
                                        <td class="text-center">{{(getFiles.proofOfAge === '#')?'No':'Yes'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Self attested marksheet for 10th<br></td>
                                        <td class="text-center">{{(getFiles.markSheets10 === '#')?'No':'Yes'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Self attested marksheet for 12th<br></td>
                                        <td class="text-center">{{(getFiles.markSheets12 === '#')?'No':'Yes'}}</td>
                                    </tr>
                                    <tr v-if="getdata.applicantLeprosyAffectedMother === true">
                                        <td>Self attested Leprosy Certificate of Mother<br></td>
                                        <td class="text-center">{{(getFiles.leprosyCertificateMother === '#')?'No':'Yes'}}</td>
                                    </tr>
                                    <tr v-if="getdata.applicantLeprosyAffectedFather === true">
                                        <td>Self attested Leprosy Certificate of Father<br></td>
                                        <td class="text-center">{{(getFiles.leprosyCertificateFather === '#')?'No':'Yes'}}</td>
                                    </tr>
                                    <tr v-if="getdata.applicantLeprosyAffectedSelf === true">
                                        <td>Self attested Leprosy Certificate of Self<br></td>
                                        <td class="text-center">{{(getFiles.leprosyCertificateSelf === '#')?'No':'Yes'}}</td>
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
                        <h6 class="text-uppercase"><strong>HHDLSS scholarship PROGRAMME - {{getdata.financialYear}}</strong></h6>
                        <h6 class="text-uppercase"><strong>Application No. : {{getdata.applicationId}} (submitted online)</strong></h6>
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
                                <p class="mb-0 font-xl">{{getdata.fullName}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>2. Father's Name</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-6 col-xl-7 offset-xl-0 mt-2">
                                <p class="mb-0 font-xl">{{getdata.applicantFatherName}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>3. Mother's Name</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-6 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{getdata.applicantMotherName}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>4. Domicile&nbsp;State</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-6 col-xl-7 offset-xl-0 mt-2">
                                <p class="mb-0 font-xl">{{getdata.applicantDomicileState}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>5. Applicant's Address</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-8 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{getdata.addressAddln1}},{{(getdata.addressAddln2==null)?'':getdata.addressAddln2}},City: {{(getdata.addressCity==null)?'':getdata.addressCity}} <br>Dist :{{(getdata.addressDistprov==null)?'':getdata.addressDistprov}}, {{getdata.addressState}} - {{getdata.addressPinzip}}</p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 mt-2 pl-4">
                                <p class="mb-0 font-xl"><strong>5.1. Contact No. (Self)</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-2 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{getdata.applicantContactNoSelf}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 offset-xl-0 mt-2 pl-4">
                                <p class="mb-0 font-xl"><strong>5.2. Contact No (Father)</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-2 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{getdata.applicantContactNoGuardian}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 mt-2 pl-4">
                                <p class="mb-0 font-xl"><strong>5.3. Contact No. (Colony Leader)</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-2 col-xl-7 mt-2">
                                <p class="mb-0 font-xl"> {{getdata.applicantContactNoColonyLeader}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-2 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>6. Email Address</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-4 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{getdata.applicantEmailId}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 offset-xl-0 mt-2">
                                <p class="mb-0 font-xl"><strong>7. Date of Birth</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-2 col-xl-7 mt-2">
                                <p class="mb-0 font-xl">{{getdata.applicantDOB.split('-').reverse().join('/')}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 mt-2">
                                <p class="mb-0 font-xl"><strong>8. Affected by leprosy</strong></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-2 col-md-6 col-lg-2 col-xl-2 mt-2">
                                <span class="mb-0 font-xl" v-if="getdata.applicantLeprosyAffectedSelf   == true">Self,</span>
                                <span class="mb-0 font-xl" v-if="getdata.applicantLeprosyAffectedFather == true">Father,</span>
                                <span class="mb-0 font-xl" v-if="getdata.applicantLeprosyAffectedMother == true">Mother</span>
                            </div>
                            <div class="col-sm-4 col-md-5 col-lg-4 col-xl-3 offset-xl-0 mt-2">
                                <p class="mb-0 font-xl"><strong>9. BPL card holder</strong><br></p>
                            </div>
                            <div class="col-sm-5 col-md-1 col-lg-6 col-xl-1 mt-2">
                                <p class="mb-0 font-xl"><strong>:</strong><br></p>
                            </div>
                            <div class="col-sm-1 col-md-6 col-lg-1 col-xl-1 mt-2">
                                <p class="mb-0 font-xl">{{getdata.applicantHasBPLCard}}<br></p>
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
                                        <td>{{getdata.education1ExaminationLevel}}</td>
                                        <td>{{getdata.education1ExaminationPassed}}</td>
                                        <td>{{getdata.education1University}}</td>
                                        <td>{{getdata.education1MainSubjects}}</td>
                                        <td>{{getdata.education1YearOfPassing}}</td>
                                        <td>{{getdata.education1Percentage}}%</td>
                                        <td>{{getdata.education1Division}}</td>
                                       
                                    </tr>
                                    <tr class="fw-600">
                                        <td>{{getdata.education2ExaminationLevel}}</td>
                                        <td>{{getdata.education2ExaminationPassed}}</td>
                                        <td>{{getdata.education2University}}</td>
                                        <td>{{getdata.education2MainSubjects}}</td>
                                        <td>{{getdata.education2YearOfPassing}}</td>
                                        <td>{{getdata.education2Percentage}}%</td>
                                        <td>{{getdata.education2Division}}</td>
                                    </tr>

                                    <tr class="fw-600">
                                        <td>{{getdata.education3ExaminationLevel}}</td>
                                        <td>{{getdata.education3ExaminationPassed}}</td>
                                        <td>{{getdata.education3University}}</td>
                                        <td>{{getdata.education3MainSubjects}}</td>
                                        <td>{{getdata.education3YearOfPassing}}</td>
                                        <td>{{getdata.education3Percentage}}%</td>
                                        <td>{{getdata.education3Division}}</td>
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
                                        <td class="fw-600">{{(getdata.insCourse == null)?'N/A':getdata.insCourse}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Name of the institute</strong></td>
                                        <td class="fw-600">{{(getdata.insName == '')?'N/A':getdata.insName}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Address&nbsp;of the institute</strong></td>
                                        <td class="fw-600">{{getdata.fullInstituteAddress}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Whether recognized by Govt of India</strong></td>
                                        <td class="fw-600">{{(getdata.recognizedByGI == null)?'N/A':getdata.recognizedByGI}}<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-3 mt-3 pr-1">
                        <p class="text-white mb-2 font-xl txt-blk-bg">&nbsp;Self Declaration</p>
                    </div>
                    <div class="col-xl-12 mt-1">
                       <p class="font-md"><span><input type="checkbox" v-model='terms'></span>&nbsp;I {{getdata.fullName}} hereby declare that to the best of my knowledge the above information furnished by me is true and I understand that if at any stage, it is found that the information provided by me is false/ not true, all the benefits given to me under "HHDLSS Scholarship" could be withdrawn.<br></p>
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
         getdata:{
            hasAdmissionLetter:'',
            financialYear:'',
            fullName:'',
            fullAddress:'',
            fullInstituteAddress:'',
            applicationId:'',
            applicantNameF:'',
            applicantNameM:'',
            applicantNameL:'',
            applicantFatherName:'',
            applicantMotherName:'',
            applicantDOB:'',
            applicantGender:'',
            applicantLeprosyAffectedMember:'',
            applicantHasBPLCard:'',
            applicantDomicileState:'',
            applicantColonyName:'',
            addressAddln1:'',
            addressAddln2:'',
            addressCity:'',
            addressDistprov:'',
            addressState:'',
            addressPinzip:'',
            addressCountry:'',
            applicantContactNoSelf:'',
            applicantContactNoGuardian:'',
            applicantEmailId:'',
            applicantContactNoColonyLeader:'',
            
            education1ExaminationLevel:'',
            education1ExaminationPassed:'',
            education1University:'',
            education1MainSubjects:'',
            education1YearOfPassing:'',
            education1Percentage:'',
            education1Division:'',
            
            education2ExaminationLevel:'',
            education2ExaminationPassed:'',
            education2University:'',
            education2MainSubjects:'',
            education2YearOfPassing:'',
            education2Percentage:'',
            education2Division:'',

            education3ExaminationLevel:'',
            education3ExaminationPassed:'',
            education3University:'',
            education3MainSubjects:'',
            education3YearOfPassing:'',
            education3Percentage:'',
            education3Division:'',

            insCourse:'',
            insName:'',
            insAddressAddln1:'',
            insAddressAddln2:'',
            insAddressCity:'',
            insAddressDistprov:'',
            insAddressState:'',
            insAddressPinzip:'',
            recognizedByGI:'',
            applicantColonyLeaderName:'',  
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
        errors:[]
        }
    },
   methods:{
      getdataHHDLSS(){
       axios.get(`/api/application-form-HHDLSS/${this.userId}`)
        .then(response => {
          if (response.data['success']) {
            const data = response.data['data']
            console.log(data)
                this.getdata.hasAdmissionLetter                  = data.hasAdmissionLetter;
                this.getdata.financialYear                       = data.financialYear ;
                this.getdata.applicationId                       = data.applicationId;
                this.getdata.applicantNameF                      = data.applicantNameF;
                this.getdata.applicantNameM                      = data.applicantNameM;
                this.getdata.applicantNameL                      = data.applicantNameL;
                this.getdata.applicantFatherName                 = data.applicantFatherName;
                this.getdata.applicantMotherName                 = data.applicantMotherName;
                this.getdata.applicantDOB                        = data.applicantDOB;
                this.getdata.applicantGender                     = data.applicantGender;
                this.getdata.applicantLeprosyAffectedMember      = data.applicantLeprosyAffectedMember;
                this.getdata. applicantHasBPLCard                = data.applicantHasBPLCard;
                this.getdata.applicantDomicileState              = data.applicantDomicileState;
                this.getdata.applicantColonyName                 = data.applicantColonyName;
                this.getdata.addressAddln1                       = data.addressAddln1;
                this.getdata.addressAddln2                       = data.addressAddln2;
                this.getdata.addressCity                         = data.addressCity;
                this.getdata.addressDistprov                     = data.addressDistprov;
                this.getdata.addressState                        = data.addressState;
                this.getdata.addressPinzip                       = data.addressPinzip;
                this.getdata.applicantContactNoSelf              = data.applicantContactNoSelf;
                this.getdata.applicantContactNoGuardian          = data.applicantContactNoGuardian;
                this.getdata.applicantEmailId                    = data.applicantEmailId;
                this.getdata.applicantContactNoColonyLeader      = data.applicantContactNoColonyLeader;
                
                this.getdata.education1ExaminationLevel         = data.education1ExaminationLevel;
                this.getdata.education1ExaminationPassed         = data.education1ExaminationPassed;
                this.getdata.education1University                = data.education1University;
                this.getdata.education1MainSubjects              = data.education1MainSubjects;         
                this.getdata.education1YearOfPassing             = data.education1YearOfPassing;       
                this.getdata.education1Percentage                = data.education1Percentage; 
                this.getdata.education1Division                  = data.education1Division;

                this.getdata.education2ExaminationLevel         = data.education2ExaminationLevel;
                this.getdata.education2ExaminationPassed         = data.education2ExaminationPassed;
                this.getdata.education2University                = data.education2University;
                this.getdata.education2MainSubjects              = data.education2MainSubjects;         
                this.getdata.education2YearOfPassing             = data.education2YearOfPassing;       
                this.getdata.education2Percentage                = data.education2Percentage; 
                this.getdata.education2Division                  = data.education2Division;
                
                this.getdata.education3ExaminationLevel          = data.education3ExaminationLevel;
                this.getdata.education3ExaminationPassed         = data.education3ExaminationPassed;
                this.getdata.education3University                = data.education3University;
                this.getdata.education3MainSubjects              = data.education3MainSubjects;         
                this.getdata.education3YearOfPassing             = data.education3YearOfPassing;       
                this.getdata.education3Percentage                = data.education3Percentage; 
                this.getdata.education3Division                  = data.education3Division;

                this.getdata.insCourse                           = data.insCourse;
                this.getdata.insName                             = data.insName;
                this.getdata.insAddressAddln1                    = data.insAddressAddln1;
                this.getdata.insAddressAddln2                    = data.insAddressAddln2;
                this.getdata.insAddressCity                      = data.insAddressCity;
                this.getdata.insAddressDistprov                  = data.insAddressDistprov;
                this.getdata.insAddressState                     = data.insAddressState;
                this.getdata.insAddressPinzip                    = data.insAddressPinzip;
                this.getdata.recognizedByGI                    = data.recognizedByGI;
                this.getdata.addressCountry                      = data.addressCountry;
                this.getdata.applicantColonyLeaderName           = data.applicantColonyLeaderName;
                this.getdata.fullName = `${this.getdata.applicantNameF}${(this.getdata.applicantNameM)?" "+this.getdata.applicantNameM:''} ${this.getdata.applicantNameL}`;
                this.getdata.fullAddress = `${this.getdata.addressAddln1} ${this.getdata.addressAddln2} ${this.getdata.addressCity} ${this.getdata.addressDistprov} ${this.getdata.addressState} ${this.getdata.addressPinzip} ${this.getdata.addressCountry}`;
                this.getdata.fullInstituteAddress = `${this.getdata.insAddressAddln1} ${this.getdata.insAddressAddln2} ${this.getdata.insAddressCity} ${this.getdata.insAddressDistprov} ${this.getdata.insAddressState} ${this.getdata.insAddressPinzip}`;
                this.getFileData();
             }
         })
       }, 
       
        getFileData(){
        axios.get('/api/get-upload-documents-HHDLSS/'+this.getdata.applicationId)
        .then(response => {
            if (response.data['success']) {
                this.getFiles = response.data['data'],

                this.getFiles.admissionLetter    = data.admissionLetter;
                this.getFiles.annexureII         = data.annexureII;
                this.getFiles.photograph         = data.photograph;
                this.getFiles.proofOfAge         = data.proofOfAge;
                this.getFiles.markSheets10       = data.markSheets10;
                this.getFiles.markSheets12       = data.markSheets12;
                this.getFiles.leprosyCertificateMother = data.leprosyCertificateMother;
                this.getFiles.leprosyCertificateFather = data.leprosyCertificateFather;
                this.getFiles.leprosyCertificateSelf   = data.leprosyCertificateSelf;
            }
        })
    },

  },
  computed: {
  	  isDisabled: function(){
    	return !this.terms;
        }
      },
    created(){
     this.getdataHHDLSS();
    }
 }
</script>
