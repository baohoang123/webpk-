<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id_comment');
            $table->string('fullname');
            $table->string('email');
            $table->date('date_comment');
            $table->string('content');
            $table->string('ip_author');
            $table->string('id_article');
            $table->string('comment_parent');
            $table->integer('id_user');
            $table->integer('comment_approved');
            $table->integer('comment_disapproved');
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
        Schema::drop('comments');
    }
}
