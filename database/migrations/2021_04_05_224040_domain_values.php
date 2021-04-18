<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DomainValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domainValues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nameId');  // Examination level FK for 10 12 graduate , nusing , HDDLS
            $table->string('value');
            $table->unsignedBigInteger('domainTypeId')->nullable(); // Examination Passed domain in domain Type
            $table->string('valueDescription')->nullable();
            $table->timestamps();
        });

        Schema::table('domainValues', function (Blueprint $table) {
            $table->unique(["nameId", "value"], 'domain_name_value_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domainValues');
        Schema::table('domainValues', function (Blueprint $table) {
            $table->dropUnique('domain_name_value_index');
          });
    }
}
