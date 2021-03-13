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
            $table->string('applicationScheduleId')->nullable();
            $table->string('financialYear');	
            $table->string('scholarshipType');
            $table->string('startDate');	
            $table->string('lastDate');	
            $table->string('applicationNoPrefixFormat');
            $table->string('contactPersonEmailId')->nullable();	
            $table->string('contactPersonContactNo');
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
