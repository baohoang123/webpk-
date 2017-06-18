<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    //
    protected $table = 'appointments';
     public $timestamps = false;
     protected $fillable = [
	    'id_book',
		'datebook',
		'status',
		'numberorder',
		'appointeddate',
		'appointedhour',
		'appointedmonth',
		'describesymptom',
		'id_doctor',
		'id_clinic'
	];
}
