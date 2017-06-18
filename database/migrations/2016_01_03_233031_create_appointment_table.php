<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_book');
            $table->date('datebook');
            $table->string('status');
            $table->integer('numberorder');
            $table->date('appointeddate');
            $table->time('appointedhour');
            $table->string('appointedmonth');
            $table->string('describesymptom');
            $table->string('id_doctor');
            $table->string('id_clinic');
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
        Schema::drop('appointments');
    }
}
