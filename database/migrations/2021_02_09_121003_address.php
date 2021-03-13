<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('addressAddln1');
            $table->string('addressAddln2')->nullable();
            $table->string('addressCity')->nullable();
            $table->string('addressDistprov')->nullable();
            $table->string('addressState')->nullable();
            $table->string('addressPinzip')->nullable();
            $table->string('addressCountry')->nullable();
            $table->unsignedInteger('addressStatus')->default(1);
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
        Schema::dropIfExists('address');
    }
}
