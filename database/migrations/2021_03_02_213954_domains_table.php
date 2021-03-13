<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domainsTable', function (Blueprint $table) {
            $table->id();
            $table->string('domainsId')->nullable();
            $table->string('domainsName');
            $table->string('domainsDescription')->nullable();
            $table->string('domainsValue')->nullable();
            
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
        Schema::dropIfExists('domainsTable');
    }
}
