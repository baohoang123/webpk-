<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //
    protected $table = 'articles';
     public $timestamps = false;
     protected $fillable = [    	
            'titlename',
            'date_post',
            'content',
            'id_clinic',
            'id_user',
            'static_post',
            'static_comment',
            'url_post',
            'posttype',
            'comment_count',
            ];
}
