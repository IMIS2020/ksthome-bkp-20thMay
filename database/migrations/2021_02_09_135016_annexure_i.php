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
            $table->unsignedBigInteger('choice1');
            $table->unsignedBigInteger('choice2')->nullable();
            $table->unsignedBigInteger('choice3')->nullable();
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
        Schema::dropIfExists('annexureI');
    }
}
