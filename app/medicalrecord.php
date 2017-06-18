<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalrecord extends Model
{
    //
    protected $table = 'medicalrecords';
     public $timestamps = false;
     protected $fillable = [
         'id_user',
		'id_doctor',
		'diagnostic',
		'remind',
		'appointmentagain',
		'testresult',	
		'id_medicine',
		'dosage',
		'numberuse',
		'note'
       ];
}
