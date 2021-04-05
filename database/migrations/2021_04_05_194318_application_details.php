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
            $table->string('applicationId');
            $table->string('applicationType');
            $table->unsignedBigInteger('scholarshipTypeValueId');
            $table->string('scholarshipType');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('sessionId');
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
            $table->string('applicantHasBPLCard');
            $table->string('applicantDomicileState');
            $table->string('applicantContactNoSelf');
            $table->string('applicantContactNoGuardian');
            $table->string('applicantEmailId');
            $table->string('applicantColonyLeaderName')->nullable();
            $table->string('applicantContactNoColonyLeader');
            $table->unsignedBigInteger('applicantAddressId');
            $table->unsignedBigInteger('appSchduleId');
            $table->string('hasAdmissionLetter');
            $table->unsignedBigInteger('instituteId')->nullable();
            $table->unsignedBigInteger('instituteCourseLevelId')->nullable();
            $table->unsignedBigInteger('instituteCourseValueId')->nullable();
            $table->string('instituteCourseLevel')->nullable();
            $table->string('instituteCourseValue')->nullable();
            $table->string('recognizedByINC')->nullable();
            $table->string('financialYear');
            $table->string('appStatus')->default('Saved');
            $table->string('appSpecificLastDt')->nullable();
            $table->string('offlineAppMatch')->nullable();
            $table->string('offlineAppAnnMatch')->nullable();
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
