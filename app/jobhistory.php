<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobhistory extends Model
{
    //
    protected $table = 'jobhistorys';
     public $timestamps = false;
     protected $fillable = [
        'id_doctor',
		'yearstart',
		'yearend',
		'workplace',
		'position'
       ];
}
