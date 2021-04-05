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
            $table->string('courseName');
            $table->unsignedBigInteger('choice');
            $table->unsignedBigInteger('applicationId');
            $table->unsignedBigInteger('institueId');
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
