<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeyRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applicationEducationDetails', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('applicationMiscellaneousDetails', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('applicationDocs', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('annexureI', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('stepOutcome', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('applicationDocs', function (Blueprint $table) {
            $table->foreign('docMasterId')->references('id')->on('docMaster')->onDelete('cascade');
        });

        Schema::table('documentComments', function (Blueprint $table) {
            $table->foreign('applicationDocsId')->references('id')->on('applicationDocs')->onDelete('cascade');
        });

        Schema::table('documentComments', function (Blueprint $table) {
            $table->foreign('stepOutcomeId')->references('id')->on('stepOutcome')->onDelete('cascade');
        });

        Schema::table('applicantionDetails', function (Blueprint $table) {
            $table->foreign('applicantAddressId')->references('id')->on('address')->onDelete('cascade');
        });

        Schema::table('applicantionDetails', function (Blueprint $table) {
            $table->foreign('appSchduleId')->references('id')->on('applicationScheduleTable')->onDelete('cascade');
        });

        // Schema::table('applicantionDetails', function (Blueprint $table) {
        //     $table->foreign('appSchduleId')->references('id')->on('applicationScheduleTable')->onDelete('cascade');
        // });

        Schema::table('applicantionDetails', function (Blueprint $table) {
            $table->foreign('sessionId')->references('id')->on('userSession')->onDelete('cascade');
        });

        Schema::table('applicantionDetails', function (Blueprint $table) {
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('applicantionDetails', function (Blueprint $table) {
            $table->foreign('instituteId')->references('id')->on('institute')->onDelete('cascade');
        });

        Schema::table('applicantionDetails', function (Blueprint $table) {
            $table->foreign('courseLevelValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });

        Schema::table('applicantionDetails', function (Blueprint $table) {
            $table->foreign('courseNameValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });

        Schema::table('applicationEducationDetails', function (Blueprint $table) {
            $table->foreign('examLevelValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });

        Schema::table('applicationEducationDetails', function (Blueprint $table) {
            $table->foreign('examBoardValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });

        Schema::table('applicationEducationDetails', function (Blueprint $table) {
            $table->foreign('examPassedValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });

        Schema::table('applicationScheduleTable', function (Blueprint $table) {
            $table->foreign('sessionId')->references('id')->on('userSession')->onDelete('cascade');
        });

        Schema::table('domainValues', function (Blueprint $table) {
            $table->foreign('nameId')->references('id')->on('domainName')->onDelete('cascade');
        });

        Schema::table('annexureI', function (Blueprint $table) {
            $table->foreign('institueId')->references('id')->on('institute')->onDelete('cascade');
        });

        Schema::table('stepOutcome', function (Blueprint $table) {
            $table->foreign('processStepId')->references('id')->on('processStep')->onDelete('cascade');
        });

        Schema::table('stepOutcome', function (Blueprint $table) {
            $table->foreign('outcomeId')->references('id')->on('outcome')->onDelete('cascade');
        });

        Schema::table('applicationScheduleTable', function (Blueprint $table) {
            $table->foreign('scholarshipTypeValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });

        Schema::table('annexureI', function (Blueprint $table) {
            $table->foreign('courseNameValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });

        Schema::table('annexureI', function (Blueprint $table) {
            $table->foreign('courseLevelValueId')->references('id')->on('domainValues')->onDelete('cascade');
        });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
