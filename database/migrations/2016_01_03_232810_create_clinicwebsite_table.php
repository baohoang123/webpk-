<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicwebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicwebsites', function (Blueprint $table) {
            $table->increments('id_web');
            $table->string('titlename');
            $table->integer('sizetitle');
            $table->string('fonttitle');
            $table->string('colortitle');
            $table->string('tagline');
            $table->string('coverimage');
            $table->string('background');
            $table->string('fontpage');
            $table->integer('sizecharacter');
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
        Schema::drop('clinicwebsite');
    }
}
