<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('adminID', 20); //big increments act as pk and increments the id itself
            $table->string('adminName', 50);
            $table->string('adminPw', 14);
            $table->char('adminGender', 2);
            $table->string('adminHP', 14);
            $table->string('adminEmail', 50);
            $table->string('adminAdd', 50); 
            $table->string('adminIcNo', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
