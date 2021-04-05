<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewTable', function (Blueprint $table) {
            $table->id();
            $table->string('documentName');
            $table->string('status');
            $table->string('comments');
            $table->unsignedBigInteger('nursApplicationId')->nullable();
            // $table->unsignedBigInteger('hhdlssApplicationId')->nullable();
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
        Schema::dropIfExists('reviewTable');
    }
}
