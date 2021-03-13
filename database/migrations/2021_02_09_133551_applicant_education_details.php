<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicantEducationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicantEducationDetails', function (Blueprint $table) {
            $table->id();
            $table->string('examinationPassed');
            $table->string('universityBoardCouncil');
            $table->string('mainSubjects');
            $table->string('yearOfPassing');
            $table->string('percentage');
            $table->string('division');
            $table->string('type')->nullable();
            $table->unsignedBigInteger('applicantId');
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
        Schema::dropIfExists('applicantEducationDetails');
    }
}
