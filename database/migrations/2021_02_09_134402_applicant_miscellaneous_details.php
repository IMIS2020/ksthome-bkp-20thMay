<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicantMiscellaneousDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicantMiscellaneousDetails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('course');
            $table->string('year');
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
        Schema::dropIfExists('applicantMiscellaneousDetails');
    }
}
