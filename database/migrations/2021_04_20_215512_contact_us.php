<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msgContactUs', function (Blueprint $table) {
            $table->id();
            $table->string('msgTicketId')->nullable();
            $table->string('msgCategory')->nullable();
            $table->string('msgSubject');
            $table->string('msgBody');
            $table->string('msgCurrentSession')->nullable();
            $table->datetime('msgSendDateTime')->nullable();           
            $table->unsignedBigInteger('userId');// FK user-id
            $table->unsignedBigInteger('applicationId')->nullable();// FK application id
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
        Schema::dropIfExists('contactUs');
    }
}
