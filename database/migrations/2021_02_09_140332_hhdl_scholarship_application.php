<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HhdlScholarshipApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hhdlScholarshipApplication', function (Blueprint $table) {
            $table->id();
            $table->string('applicationId');
            $table->string('hasAdmissionLetter');
            $table->unsignedBigInteger('instituteId')->nullable();
            $table->string('instituteCourse')->nullable();
            $table->string('recognizedByGI')->nullable();
            $table->string('financialYear');
            $table->string('status')->default('Applied');
            $table->unsignedBigInteger('applicantId');
            $table->unsignedBigInteger('userId');
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
        Schema::dropIfExists('hhdlScholarshipApplication');
    }
}
