<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnexureI extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annexureI', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('insId');
            $table->unsignedBigInteger('courseLevelValueId')->nullable();
            $table->unsignedBigInteger('courseNameValueId')->nullable();
            $table->string('courseLevelValue')->nullable();
            $table->string('courseNameValue')->nullable();
            $table->string('addressAddln1')->nullable();
            $table->string('addressAddln2')->nullable();
            $table->string('addressCity')->nullable();
            $table->string('addressDistprov')->nullable();
            $table->string('addressState')->nullable();
            $table->string('addressPinzip')->nullable();
            // $table->unsignedBigInteger('choice');
            $table->unsignedBigInteger('applicationId');
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
        Schema::dropIfExists('annexureI');
    }
}
