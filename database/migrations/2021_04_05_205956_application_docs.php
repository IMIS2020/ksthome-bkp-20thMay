<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationDocs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationDocs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docMasterId');
            $table->unsignedBigInteger('applicationId');
            $table->string('docFileName');
            $table->string('docFilePath');
            $table->string('docFormat');
            $table->string('uploadStatus');
            $table->string('reviewStatus');
            $table->string('reviewComments');
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
        Schema::dropIfExists('applicationDocs');
    }
}
