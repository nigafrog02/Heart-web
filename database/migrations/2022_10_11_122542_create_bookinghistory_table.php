<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookinghistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookinghistory', function (Blueprint $table) {
            $table->bigIncrements('bookinghistID', 20);
            $table->string('patientName',50);
            $table->string('patientEmail',50);
            $table->string('patientPhone');
            $table->string('patientGender');
            $table->string('doctorName', 50);
            $table->string('specialist', 50);
            $table->date('bookingDate');
            $table->string('bookingTime'); 
            $table->String('venue', 15);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookinghistory');
    }
}
