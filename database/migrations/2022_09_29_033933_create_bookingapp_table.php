<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingapp', function (Blueprint $table) {
       
            
            $table->bigIncrements('bookingslotID', 20); //booking slot id for patient / doctor to retrieve
            $table->string('venue', 14);
            $table->dateTime('bookingTime');
            $table->date('bookingDate');
            $table->string('doctorID', 50); //which doctor reffered to  
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookingapp');
    }
}
