<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalrecords', function (Blueprint $table) {
            $table->increments('id_mer');
            $table->string('id_user');
            $table->string('id_doctor');
            $table->string('diagnostic');
            $table->string('remind');
            $table->date('appointmentagain');
            $table->string('testresult');
            $table->integer('id_medicine');
            $table->string('dosage');
            $table->integer('numberuse');
            $table->string('note');
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
        Schema::drop('medicalrecords');
    }
}
