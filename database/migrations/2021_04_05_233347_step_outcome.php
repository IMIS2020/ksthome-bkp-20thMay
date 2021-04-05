<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StepOutcome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stepOutcome', function (Blueprint $table) {
            $table->id();
            $table->string('documentName');
            $table->string('stepCompDate');
            $table->string('status');
            $table->string('stepComm');
            $table->unsignedBigInteger('outcomeId');
            $table->unsignedBigInteger('processStepId');
            $table->unsignedBigInteger('applicationId');
            $table->string('offlineAppMatch');
            $table->string('offlineAppAnnMatch');
            $table->float('keySubjMarks');
            $table->unsignedBigInteger('appEduDetailsId');
            $table->string('status');
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
        Schema::dropIfExists('stepOutcome');
    }
}
