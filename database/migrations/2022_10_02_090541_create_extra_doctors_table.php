<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_doctors', function (Blueprint $table) {
            $table->bigIncrements('exDoctorID', 20);
            $table->string('gender');
            $table->string('phone');
            $table->string('doctorName', 50);
            $table->string('doctordescription', 255);
            $table->string('certificate', 50);
            $table->string('Specialist', 50);
            $table->string('image_profile', 50);
            $table->date('availableDate');
            $table->string('availableTime'); 
            $table->tinyInteger('doctor_availability')->default('0'); // doctor's availability
            $table->String('venues', 15);

         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_doctors');
    }
}
