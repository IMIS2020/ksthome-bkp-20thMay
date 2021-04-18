<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicantionDetails', function (Blueprint $table) {
            $table->id();
            $table->string('schApplicationId');
            $table->string('appIdShow')->nullable();
            $table->string('applicationType');
            $table->unsignedBigInteger('scholarshipTypeValueId'); // FK domainValues
            $table->string('scholarshipType');
            $table->unsignedBigInteger('userId'); // FK user
            $table->unsignedBigInteger('sessionId')->nullable();// FK userSession
            $table->string('applicantNameF');
            $table->string('applicantNameM')->nullable();
            $table->string('applicantNameL');
            $table->string('applicantFatherName')->nullable();
            $table->string('applicantMotherName')->nullable();
            $table->date('applicantDOB');
            $table->string('applicantGender');
            $table->boolean('applicantLeprosyAffectedSelf')->default(0);
            $table->boolean('applicantLeprosyAffectedFather')->default(0);
            $table->boolean('applicantLeprosyAffectedMother')->default(0);
            $table->boolean('applicantDisablitySelf')->default(0);
            $table->boolean('applicantDisablityFather')->default(0);
            $table->boolean('applicantDisablityMother')->default(0);
            $table->string('applicantHasBPLCard');
            $table->string('applicantDomicileState');
            $table->string('applicantContactNoSelf');
            $table->string('applicantContactNoGuardian');
            $table->string('applicantEmailId');
            $table->string('applicantColonyLeaderName')->nullable();
            $table->string('applicantContactNoColonyLeader');
            $table->unsignedBigInteger('applicantAddressId'); // FK Address
            $table->unsignedBigInteger('appSchduleId')->nullable(); // FK ApplicationSchdule
            $table->string('hasAdmissionLetter');
            $table->unsignedBigInteger('instituteId')->nullable(); // FK Institute
            $table->unsignedBigInteger('courseLevelValueId')->nullable(); // FK domainValues
            $table->unsignedBigInteger('courseNameValueId')->nullable(); // FK domainName
            $table->string('courseLevelValue')->nullable();
            $table->string('courseNameValue')->nullable();
            $table->string('recognizedByINC')->nullable();
            $table->string('financialYear');
            $table->string('appStatus')->default('Saved');
            $table->string('appSpecificLastDt')->nullable();
            $table->string('offlineAppMatch')->nullable();
            $table->string('offlineAppAnnMatch')->nullable();
            $table->date('dateLastSubmitted')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicantionDetails');
    }
}
