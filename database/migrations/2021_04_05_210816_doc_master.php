<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DocMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docMaster', function (Blueprint $table) {
            $table->id();
            $table->string('docShortName');
            $table->unsignedBigInteger('processStepId')->nullable();
            $table->string('docDesc');
            $table->string('docType');
            $table->unsignedBigInteger('requiredFor')->nullable();
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
        Schema::dropIfExists('docMaster');
    }
}
