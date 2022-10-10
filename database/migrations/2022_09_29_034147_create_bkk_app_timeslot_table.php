<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBkkAppTimeslotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bkk_app_timeslot', function (Blueprint $table) {
            $table->bigIncrements('appointmentID');
            $table->date('availableDate');
            $table->dateTime('availableTime'); 
            $table->tinyInteger('doctor_availability')->default('0'); // doctor's availability
            $table->String('status', 15);
            $table->string('doctorName', 50);
 
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bkk_app_timeslot');
    }
}
