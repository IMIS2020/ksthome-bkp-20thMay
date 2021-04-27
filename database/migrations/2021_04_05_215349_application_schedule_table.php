<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationScheduleTable', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sessionId');
            // $table->string('applicationScheduleId')->nullable();
            // $table->string('financialYear')->nullable();
            $table->unsignedBigInteger('scholarshipTypeValueId')->nullable();
            $table->date('startDate')->nullable();
            $table->date('lastDate')->nullable();
            $table->string('applicationNoPrefixFormat')->nullable();
            $table->string('contactPersonEmailId')->nullable();
            $table->string('contactPersonContactNo')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('applicationScheduleTable');
    }
}
