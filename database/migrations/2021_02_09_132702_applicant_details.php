<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicantDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicantDetails', function (Blueprint $table) {
            $table->id();
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
            $table->string('applicantContactNoSelf')->unique();
            $table->string('applicantContactNoGuardian');
            $table->string('applicantEmailId');
            $table->string('applicantColonyLeaderName')->nullable();
            // $table->string('applicantColonyName');
            $table->string('applicantContactNoColonyLeader');
            $table->unsignedBigInteger('applicantAddressId');
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
        Schema::dropIfExists('applicantDetails');
    }
}
