<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllforeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instituteDetails', function (Blueprint $table) {
            $table->foreign('instituteAddressId')->references('id')->on('address')->onDelete('cascade');
        });

        Schema::table('applicantDetails', function (Blueprint $table) {
            $table->foreign('applicantAddressId')->references('id')->on('address')->onDelete('cascade');
        });

        Schema::table('applicantEducationDetails', function (Blueprint $table) {
            $table->foreign('applicantId')->references('id')->on('applicantDetails')->onDelete('cascade');
        });

        Schema::table('applicantMiscellaneousDetails', function (Blueprint $table) {
            $table->foreign('applicantId')->references('id')->on('applicantDetails')->onDelete('cascade');
        });

        Schema::table('annexureI', function (Blueprint $table) {
            $table->foreign('applicantId')->references('id')->on('applicantDetails')->onDelete('cascade');
        });

        Schema::table('applicantDocuments', function (Blueprint $table) {
            $table->foreign('applicantId')->references('id')->on('applicantDetails')->onDelete('cascade');
        });

        Schema::table('nursingScholarshipApplication', function (Blueprint $table) {
            $table->foreign('applicantId')->references('id')->on('applicantDetails')->onDelete('cascade');
        });

        Schema::table('hhdlScholarshipApplication', function (Blueprint $table) {
            $table->foreign('applicantId')->references('id')->on('applicantDetails')->onDelete('cascade');
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
