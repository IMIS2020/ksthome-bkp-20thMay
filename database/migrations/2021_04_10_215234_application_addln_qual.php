<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationAddlnQual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationAddlnQual', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('examLevelValueId');// FK DomainValues 
            $table->unsignedBigInteger('examBoardValueId');// FK DomainValues
            $table->unsignedBigInteger('examPassedValueId');// FK DomainValues
            $table->string('examLevelValue')->nullable();
            $table->string('examBoardValue')->nullable();
            $table->string('examPassedValue')->nullable();
            $table->string('mainSubjects');
            $table->string('yearOfPassing');
            $table->float('percentage');
            $table->float('percentageKeySub')->nullable();
            $table->string('division');
            $table->unsignedBigInteger('applicationId');// FK ApplicationDetails
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
        Schema::dropIfExists('applicationAddlnQual');
    }
}
