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
            $table->unsignedBigInteger('docMasterId')->nullable();
            $table->unsignedBigInteger('applicationId')->nullable();
            $table->string('docFileDesc')->nullable();
            $table->string('docFileName')->nullable();
            $table->string('docFilePath')->nullable();
            $table->string('docFormat')->nullable();
            $table->string('uploadStatus')->default('NO');
            $table->string('reviewStatus')->nullable();
            $table->string('reviewComments')->nullable();
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
