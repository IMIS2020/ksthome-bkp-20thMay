<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeyRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applicationEducationDetails', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('applicationMiscellaneousDetails', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('applicationDocs', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('annexureI', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('stepOutcome', function (Blueprint $table) {
            $table->foreign('applicationId')->references('id')->on('applicantionDetails')->onDelete('cascade');
        });

        Schema::table('applicationDocs', function (Blueprint $table) {
            $table->foreign('docMasterId')->references('id')->on('docMaster')->onDelete('cascade');
        });

        Schema::table('documentComments', function (Blueprint $table) {
            $table->foreign('applicationDocsId')->references('id')->on('applicationDocs')->onDelete('cascade');
        });

        Schema::table('documentComments', function (Blueprint $table) {
            $table->foreign('stepOutcomeId')->references('id')->on('stepOutcome')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
