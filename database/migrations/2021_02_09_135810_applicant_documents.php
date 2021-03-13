<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicantDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicantDocuments', function (Blueprint $table) {
            $table->id();
            $table->string('admissionLetter')->nullable();
            $table->string('annexureII')->nullable();
            $table->string('photograph')->nullable();
            $table->string('proofOfAge')->nullable();
            $table->string('markSheets10')->nullable();
            $table->string('markSheets12')->nullable();
            
            $table->string('leprosyCertificateSelf')->nullable();
            $table->string('leprosyCertificateMother')->nullable();
            $table->string('leprosyCertificateFather')->nullable();

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
        Schema::dropIfExists('applicantDocuments');
    }
}
