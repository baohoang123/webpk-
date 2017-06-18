<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            
            $table->string('clinic_id', 10);
            $table->string('clinicname');                   
            $table->date('opendate');
            $table->string('static');        
            $table->string('emailsign');
            $table->string('emailclinic'); 
            $table->string('themes');
            $table->string('typeclinic');
            $table->integer('tel');
            $table->string('street');
            $table->string('district');
            $table->string('city');
            $table->string('image');          
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
        Schema::drop('clinics');
    }
}
