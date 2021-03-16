<template>
  <section class="page-main mt-4">
        <div class="container-fluid mt-4 text-black">
            <div class="row">
                <div class="col-xl-12 text-center mb-3 d-print-none">
                    <h4 class="color-mg"><strong>View Application Details</strong></h4>
                </div>
                <div class="col-xl-12 mb-3 f-fm-arbs">
                    <div class="table-responsive table-bordered font-l ofc-only">
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
                                    <td class="text-center">Yes</td>
                                    <td><br></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="pre-sub-form f-fm-arbs">
                <div class="row">
                    <div class="col-xl-12 text-center mb-4">
                        <h3 class="text-uppercase"><strong>application form</strong></h3>
                        <h6 class="text-uppercase"><strong>nursing scholarship  - {{getdata.financialYear}}</strong></h6>
                    </div>
                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 px-0">
                        <div class="row mx-2">
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-5 mt-3">
                                <p class="mb-0 font-xl"><strong>1. Applicant's Name:&nbsp;</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-7 col-lg-6 col-xl-5 mt-3 pl-3">
                                <p class="mb-0 font-xl">{{getdata.fullName}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-5 mt-3">
                                <p class="mb-0 font-xl"><strong>2. Father's Name:&nbsp;</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-xl-0 mt-3 pl-3">
                                <p class="mb-0 font-xl">{{getdata.applicantFatherName}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-5 mt-3">
                                <p class="mb-0 font-xl"><strong>3. Mother's Name:&nbsp;</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-7 col-lg-6 col-xl-5 mt-3 pl-3">
                                <p class="mb-0 font-xl">{{getdata.applicantMotherName}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-6 col-xl-5 mt-3">
                                <p class="mb-0 font-xl"><strong>4. Domicile&nbsp;State:&nbsp;</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-7 col-lg-6 col-xl-5 offset-xl-0 mt-3 pl-3">
                                <p class="mb-0 font-xl">{{getdata.applicantDomicileState}}<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                       <img class="img-thumbnail img-fluid" :src="getFiles.photograph" width="180" height="230" style="border: 2px solid black;" />
                        </div>
                    <div class="col-lg-12 col-xl-12 px-0">
                        <div class="row mx-2">
                            <div class="col-sm-5 col-md-4 col-lg-4 col-xl-4 mt-3 pr-0">
                                <p class="mb-0 font-xl"><strong>5. Applicant's Address:&nbsp;</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-8 col-lg-8 col-xl-8 mt-3 pl-0">
                                <p class="mb-0 font-xl">{{getdata.fullAddress}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-4 col-lg-4 col-xl-4 mt-4">
                                <p class="mb-0 font-xl"><strong>5.1. Contact No.(Self):</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-8 col-lg-2 col-xl-8 mt-4 pl-0">
                                <p class="mb-0 font-xl">{{getdata.applicantContactNoSelf}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-4 col-lg-4 col-xl-4 mt-4">
                                <p class="mb-0 font-xl"><strong>5.2. Contact No.(Guardian):</strong><br></p>
                            </div>
                            <div class="col-sm-6 col-md-8 col-lg-2 col-xl-8 mt-4 pl-0">
                                <p class="mb-0 font-xl">{{getdata.applicantContactNoGuardian}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-4 col-lg-4 col-xl-4 mt-4 pr-0">
                                <p class="mb-0 font-xl"><strong>5.3. Contact No.(Col. Ldr.):</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-8 col-lg-2 col-xl-8 mt-4 pl-0">
                                <p class="mb-0 font-xl">{{getdata.applicantContactNoColonyLeader}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-4 col-lg-2 col-xl-4 mt-4">
                                <p class="mb-0 font-xl"><strong>6. Email Address:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-8 col-lg-4 col-xl-8 mt-4 pl-0">
                                <p class="mb-0 font-xl">{{getdata.applicantEmailId}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-4 col-lg-4 col-xl-4 mt-4">
                                <p class="mb-0 font-xl"><strong>7. Date of Birth:</strong><br></p>
                            </div>
                            <div class="col-sm-7 col-md-8 col-lg-2 col-xl-8 mt-4 pl-0">
                                <p class="mb-0 font-xl">{{getdata.applicantDOB.split('-').reverse().join('/')}}<br></p>
                            </div>
                            <div class="col-sm-5 col-md-4 col-lg-4 col-xl-4 mt-4">
                                <p class="mb-0 font-xl"><strong>8. Affected by leprosy:&nbsp;</strong></p>
                            </div>
                            <div class="col-sm-2 col-lg-2 col-xl-2 mt-4 pl-0">
                                <p class="mb-0 font-xl"><strong>Self :</strong> {{(getdata.applicantLeprosyAffectedSelf === true)?'Yes':'No'}}, <strong>Mother: </strong> {{(getdata.applicantLeprosyAffectedMother === true)?'Yes':'No'}}, <strong>Father:</strong>  {{(getdata.applicantLeprosyAffectedFather=== true)?'Yes':'No'}}. <br></p>
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-4 col-xl-4 mt-4">
                                <p class="mb-0 font-xl"><strong>9. BPL Card Holder:</strong><br></p>
                            </div>
                            <div class="col-sm-1 col-md-3 col-lg-1 col-xl-2 mt-4">
                                <p class="mb-0 font-xl">Yes<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 mt-4">
                        <p class="mb-2 font-xl"><strong>10. Details of Educational Qualification 10th &amp; 12th:</strong><br></p>
                    </div>
                    <div class="col-xl-12">
                        <div class="table-responsive table-bordered rev-tbl font-md ofc-only">
                            <table class="table table-bordered table-sm mb-0">
                                <thead>
                                    <tr>
                                        <!-- <th><strong>Examination Passed</strong></th> -->
                                        <th><strong>University/ Board/ Council</strong></th>
                                        <th><strong>Main Subjects</strong></th>
                                        <th><strong>Year of Passing</strong></th>
                                        <th><strong>Percentage</strong></th>
                                        <th><strong>Division</strong></th>
                                        <th><strong>Type of Institute</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="fw-600">
                                      
                                        <td>{{getdata.universityBoardCouncil10}}</td>
                                        <td>{{getdata.mainSubjects10}}</td>
                                        <td>{{getdata.yearOfPassing10}}</td>
                                        <td>{{getdata.percentage10}}%</td>
                                        <td>{{getdata.division10}}</td>
                                        <td>{{getdata.type10}}</td>
                                    </tr>
                                    <tr class="fw-600">
                                        <td>{{getdata.universityBoardCouncil12}}</td>
                                        <td>{{getdata.mainSubjects12}}</td>
                                        <td>{{getdata.yearOfPassing12}}</td>
                                        <td>{{getdata.percentage12}}%</td>
                                        <td>{{getdata.division12}}</td>
                                        <td>{{getdata.type12}}</td>
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
                                <td class="fw-600">{{getdata.insCourse}}</td>
                            </tr>
                            <tr>
                                <td><strong>Name of the institute</strong></td>
                                <td class="fw-600">{{getdata.insName}}</td>
                            </tr>
                            <tr>
                                <td><strong>Address&nbsp;of the institute</strong></td>
                                <td class="fw-600">{{getdata.fullInstituteAddress}}</td>
                            </tr>
                            <tr>
                                <td><strong>Whether recognized by Indian Nursing Council</strong></td>
                                <td class="fw-600">{{getdata.recognizedByINC}}<br></td>
                            </tr>
                        </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xl-2 mt-3 pr-1">
                        <p class="text-white mb-2 font-xl txt-blk-bg">&nbsp;Annexure I<br></p>
                    </div>
                    <div class="col-xl-12 mt-3">
                       

                        <p class="font-md"><strong>I {{getdata.fullName}}, daughter {{getdata.applicantFatherName}} {{getdata.applicantMotherName}} of residing in {{getdata.addressAddln1}},want to pursue B.Sc. in Nursing In academic year {{getdata.financialYear}}. I will be taking the following Entrance Examination for admission into B.Sc. in Nursing.</strong><br /></p>
                    </div>
                    <div class="col-sm-4 col-xl-12">
                        <h5><strong>Institutes Selected:&nbsp;</strong></h5>
                    </div>
                    <div class="col-xl-12">
                        <div class="table-responsive table-bordered rev-tbl font-md ofc-only">
                            <table class="table table-bordered table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th><strong>Institute Name</strong></th>
                                        <th><strong>Address</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="fw-600">
                                        <td><strong>1.{{getannexureIdata.choice1instituteName}}</strong><br /></td>
                                        <td><strong>{{getannexureIdata.choice1instituteAddress}}</strong><br /></td>
                                    </tr>
                                    <tr class="fw-600">
                                        <td><strong>2. {{getannexureIdata.choice2instituteName}}</strong><br /></td>
                                        <td><strong>{{getannexureIdata.choice2instituteAddress}}</strong><br /></td>
                                    </tr>
                                    <tr class="fw-600">
                                        <td><strong>3. {{getannexureIdata.choice3instituteName}}</strong><br /></td>
                                        <td><strong>{{getannexureIdata.choice3instituteAddress}}</strong><br /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pre-sub-form f-fm-arbs">
                <div class="row">
                    <div class="col-sm-3 col-xl-2 mt-3 pr-1">
                        <p class="text-white mb-2 font-xl txt-blk-bg">&nbsp;Annexure II<br></p>
                    </div>
                    <div class="col-xl-12 mt-3">
                        <p class="text-center font-l mb-2">Declaration Form<br></p>
                    </div>
                    <div class="col-xl-12 mt-1">
                         <p class="font-md"><strong>I ({{getdata.applicantColonyLeaderName}}) hereby certify that Miss {{getdata.fullName}} has been residing in this colony and her parent/parents ({{getdata.applicantFatherName}}/{{getdata.applicantMotherName}}) is/are affected by leprosy. </strong><br /><br /><strong>I certify that, to the best of my knowledge, the information provided by the candidate is true. I recommend her for Nursing Scholarship for girls Programme.</strong><br /></p>
                    </div>
                    <div class="col-sm-4 col-xl-4 mt-3 pr-1">
                        <p class="text-white mb-2 font-xl txt-blk-bg">&nbsp;Documents attached<br></p>
                    </div>
                    <div class="col-xl-12 mt-1">
                        <div class="table-responsive table-bordered rev-tbl font-md ofc-only">
                            <table class="table table-bordered table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th><strong>Details</strong></th>
                                        <th class="text-center"><strong>Uploaded</strong></th>
                                    </tr>
                                </thead>
                                 <tbody>
                        <tr>
                            <td>Proof of admission letter/call letter issued by the institute<br /></td>
                            <td class="text-center">{{(getFiles.admissionLetter !== '#')?'Yes':'No'}}</td>
                        </tr>
                        <tr>
                            <td>Annexure-II letter from colony leader stating the candidate is residing in the colony<br /></td>
                            <td class="text-center">{{(getFiles.annexureII !== '#')?'Yes':'No'}}</td>
                        </tr>
                        <tr>
                            <td>Passport size photograph<br /></td>
                            <td class="text-center">{{(getFiles.photograph !== '#')?'Yes':'No'}}</td>
                        </tr>
                        <tr>
                            <td>Self attested Birth certificate/ proof of age<br /></td>
                            <td class="text-center">{{(getFiles.proofOfAge !== '#')?'Yes':'No'}}</td>
                        </tr>
                        <tr>
                            <td>Self attested marksheet for 10th<br /></td>
                            <td class="text-center">{{(getFiles.markSheets10 !== '#')?'Yes':'No'}}</td>
                        </tr>
                        <tr>
                            <td>Self attested marksheet for 12th<br /></td>
                            <td class="text-center">{{(getFiles.markSheets12 !== '#')?'Yes':'No'}}</td>
                        </tr>
                        <tr>
                            <td>Self attested Leprosy Certificate of self/ mother / father<br /></td>
                            <td class="text-center">{{(getFiles.leprosyCertificate !== '#')?'Yes':'No'}}</td>
                        </tr>
                    </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-3 mt-3 pr-1">
                        <p class="text-white mb-2 font-xl txt-blk-bg">&nbsp;Self Declaration</p>
                    </div>
                    <div class="col-xl-12 mt-1">
                        <p class="font-md"><span><input type="checkbox"></span>&nbsp;I {{getdata.fullName}} hereby declare that to the best of my knowledge the above information furnished by me is true and I understand that if at any stage, it is found that the information provided by me is false/ not true, all the benefits given to me under "Nursing Scholarship" could be withdrawn.<br></p>
                    </div>
                </div>
            </div>
            <div class="row mb-4 d-print-none">
                <div class="col-xl-4 offset-xl-4 text-center">
                 <button class="btn btn-sm btn-mg mr-2" type="button" onclick="window.print()" >Print/Download Application Form</button></div>
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
            applicantLeprosyAffectedSelf: '',
            applicantLeprosyAffectedFather:'',
            applicantLeprosyAffectedMother:'',
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
            universityBoardCouncil10:'',
            mainSubjects10:'',
            yearOfPassing10:'',
            percentage10:'',
            division10:'',
            type10:'',
            universityBoardCouncil12:'',
            mainSubjects12:'',
            yearOfPassing12:'',
            percentage12:'',
            division12:'',
            type12:'',
            insCourse:'',
            insName:'',
            insAddressAddln1:'',
            insAddressAddln2:'',
            insAddressCity:'',
            insAddressDistprov:'',
            insAddressState:'',
            insAddressPinzip:'',
            recognizedByINC:'',
            applicantColonyLeaderName:'',  
        },

         getannexureIdata:{
            choice1instituteName:'',
            choice1instituteAddress:'',
            choice2instituteName:'',
            choice2instituteAddress:'',
            choice3instituteName:'',
            choice3instituteAddress:'',
        },
            getFiles: {
                admissionLetter:'#',
                annexureII:'#',
                photograph:'#',
                proofOfAge:'#',
                markSheets10:'#',
                markSheets12:'#',
                leprosyCertificate:'#',
            },
        errors:[]
        }
    },
   methods:{
      getdataNursing(){
       axios.get(`/api/application-form/${this.userId}`)
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
                this.getdata.applicantLeprosyAffectedSelf        = data.applicantLeprosyAffectedSelf;
                this.getdata.applicantLeprosyAffectedFather      = data.applicantLeprosyAffectedFather;
                this.getdata.applicantLeprosyAffectedMother      = data.applicantLeprosyAffectedMother;

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

                this.getdata.universityBoardCouncil10            = data.universityBoardCouncil10;
                this.getdata.mainSubjects10                      = data.mainSubjects10;
                this.getdata.yearOfPassing10                     = data.yearOfPassing10;
                this.getdata.percentage10                        = data.percentage10;
                this.getdata.division10                          = data.division10;
                this.getdata.type10                              = data.type10;

                this.getdata.universityBoardCouncil12            = data.universityBoardCouncil12;
                this.getdata.mainSubjects12                      = data.mainSubjects12;
                this.getdata.yearOfPassing12                     = data.yearOfPassing12;
                this.getdata.percentage12                        = data.percentage12;
                this.getdata.division12                          = data.division12;
                this.getdata.type12                              = data.type12;
                this.getdata.insCourse                           = data.insCourse;
                this.getdata.insName                             = data.insName;
                this.getdata.insAddressAddln1                    = data.insAddressAddln1;
                this.getdata.insAddressAddln2                    = data.insAddressAddln2;
                this.getdata.insAddressCity                      = data.insAddressCity;
                this.getdata.insAddressDistprov                  = data.insAddressDistprov;
                this.getdata.insAddressState                     = data.insAddressState;
                this.getdata.insAddressPinzip                    = data.insAddressPinzip;
                this.getdata.recognizedByINC                     = data.recognizedByINC;
                this.getdata.addressCountry                      = data.addressCountry;
                this.getdata.applicantColonyLeaderName           = data.applicantColonyLeaderName;
                this.getdata.fullName = `${this.getdata.applicantNameF}${(this.getdata.applicantNameM)?" "+this.getdata.applicantNameM:''} ${this.getdata.applicantNameL}`;
                this.getdata.fullAddress = `${this.getdata.addressAddln1}, ${this.getdata.addressAddln2}, ${this.getdata.addressCity}, Dist: ${this.getdata.addressDistprov}, ${this.getdata.addressState} - ${this.getdata.addressPinzip}, ${this.getdata.addressCountry}.`;
                this.getdata.fullInstituteAddress = `${this.getdata.insAddressAddln1} ${this.getdata.insAddressAddln2} ${this.getdata.insAddressCity} ${this.getdata.insAddressDistprov} ${this.getdata.insAddressState} ${this.getdata.insAddressPinzip}`;
                this.getannexurei();
                this.getFileData();
             }
         })
       }, 

       print()
       {
          window.print();
       },
       
        getFileData(){
        axios.get('/api/get-upload-documents/'+this.getdata.applicationId)
        .then(response => {
            if (response.data['success']) {
                this.getFiles = response.data['data'],
                
                this.getFiles.admissionLetter    = data.admissionLetter;
                this.getFiles.annexureII         = data.annexureII;
                this.getFiles.photograph         = data.photograph;
                this.getFiles.proofOfAge         = data.proofOfAge;
                this.getFiles.markSheets10       = data.markSheets10;
                this.getFiles.markSheets12       = data.markSheets12;
                this.getFiles.leprosyCertificate = data.leprosyCertificate;
            }
        })
    },
     getannexurei(){
        axios.get(`/api/get-annexurei/${this.getdata.applicationId}`)
        .then(response => {
            if (response.data['success']) {
                let data = response.data['data'];
                this.getannexureIdata.choice1instituteName =  data.choice1instituteName
                this.getannexureIdata.choice2instituteName =  data.choice2instituteName
                this.getannexureIdata.choice3instituteName =  data.choice3instituteName
                this.getannexureIdata.choice1instituteAddress = `${data.choice1addressAddln1} ${data.choice1addressAddln2} ${data.choice1addressCity} ${data.choice1addressDistprov} ${data.choice1addressState} ${data.choice1addressPinzip}`
                this.getannexureIdata.choice2instituteAddress = `${data.choice2addressAddln2} ${data.choice2addressAddln2} ${data.choice2addressCity} ${data.choice2addressDistprov} ${data.choice2addressState} ${data.choice2addressPinzip}`
                this.getannexureIdata.choice3instituteAddress = `${data.choice3addressAddln3} ${data.choice3addressAddln2} ${data.choice3addressCity} ${data.choice3addressDistprov} ${data.choice3addressState} ${data.choice3addressPinzip}`
            } 
        })
    },
  },
    created(){
     this.getdataNursing();
    }
 }
</script>
