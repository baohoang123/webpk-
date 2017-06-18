<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    //
    protected $table = 'schedules';
     public $timestamps = false;
     protected $fillable = [
         
		'id_schedule',
		'id_staff',
		'weekday',
		'timestart',
		'timeend',
		'shift'
       ];
}
