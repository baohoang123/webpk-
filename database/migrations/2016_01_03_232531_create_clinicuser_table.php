<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicusers', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('fullname');
            $table->string('email');
            $table->string('password');
            $table->integer('idnumber');
            $table->date('datecreateacc');
            $table->date('birthday');
            $table->integer('tel');
            $table->string('image');
            $table->string('street');
            $table->string('district');
            $table->string('city');
            $table->string('status');
            $table->string('id_clinic');
            $table->string('id_doctor');
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
        Schema::drop('clinicusers');
    }
}
