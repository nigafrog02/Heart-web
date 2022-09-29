<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_his', function (Blueprint $table) {
            $table->bigIncrements('patientHisID', 20); 
            $table->string('predictResult', 50);
            $table->datetime('prevBookingTime');
            $table->date('prevBookingDate');
            $table->text('doctordescription');
            $table->bigInteger('id')->unsigned()->index();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_his');
    }
}
