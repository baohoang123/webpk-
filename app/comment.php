<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
     protected $table = 'comments';
     public $timestamps = false;
     protected $fillable = [
		
		
		'fullname',
		'email',
		'date_comment',
		'content',
		'ip_author',
		'id_article',
		'comment_parent',
		'id_user',
		'comment_approved',
		'comment_disapproved'
	];
}
