<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ScholarshipApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarshipApplication', function (Blueprint $table) {
            $table->id();
            $table->string('applicationId');
            $table->string('hasAdmissionLetter');
            $table->unsignedBigInteger('instituteId')->nullable();
            $table->string('instituteCourse')->nullable();
            $table->string('recognizedByINC')->nullable();
            $table->string('financialYear');
            $table->string('status')->default('Saved');
            $table->string('scholarshipType');
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
        Schema::dropIfExists('scholarshipApplication');
    }
}
