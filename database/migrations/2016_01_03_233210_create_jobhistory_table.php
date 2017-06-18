<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobhistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobhistorys', function (Blueprint $table) {
            $table->increments('id');
             $table->string('id_doctor');
            $table->date('yearstart');
            $table->date('yearend');
            $table->string('workplace');
            $table->string('position');
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
        Schema::drop('jobhistorys');
    }
}
