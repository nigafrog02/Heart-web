<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeartDiseaseRstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heart_disease_rst', function (Blueprint $table) {
            $table->bigIncrements('heart_restID', 20);
            $table->dateTime('patient_visitTime');
            $table->date('patient_visitDate');
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
        Schema::dropIfExists('heart_disease_rst');
    }
}
