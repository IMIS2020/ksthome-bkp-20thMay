<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationEducationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationEducationDetails', function (Blueprint $table) {
            $table->id();
            $table->string('examinationLevel');
            $table->string('universityBoardCouncil');
            $table->string('mainSubjects');
            $table->string('yearOfPassing');
            $table->float('percentage');
            $table->float('percentageKeySub')->nullable();
            $table->string('division');
            $table->unsignedBigInteger('applicationId');
            $table->string('examinationPassed');
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
        Schema::dropIfExists('applicationEducationDetails');
    }
}
