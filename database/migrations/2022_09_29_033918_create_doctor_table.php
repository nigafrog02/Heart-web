<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {

            $table->bigIncrements('doctorID', 20); //big increments act as pk and increments the id itself
            $table->string('doctorName', 50);
            $table->string('doctorPw', 14);
            $table->char('doctorGender', 2);
            $table->string('doctorHP', 14);
            $table->string('doctorEmail', 50);
            $table->string('doctorAdd', 50); 
            $table->string('doctorIcNo', 50);
            $table->string('doctorImg', 255);
            $table->string('certificateImg', 255);
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor');
    }
}
