<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InstituteDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituteDetails', function (Blueprint $table) {
            $table->id();
            $table->string('instituteName');
            $table->string('courseName')->nullable();
            $table->unsignedBigInteger('instituteAddressId');
            $table->unsignedBigInteger('applicantId')->nullable();
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
        Schema::dropIfExists('instituteDetails');
    }
}
