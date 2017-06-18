<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {          
            $table->increments('id');
            $table->string('titlename');
            $table->date('date_post');
            $table->string('content');
            $table->string('id_clinic');
            $table->integer('id_user');
            $table->integer('static_post');
            $table->integer('static_comment');
            $table->string('url_post');
            $table->string('posttype');
            $table->integer('comment_count');
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
        Schema::drop('articles');
    }
}
