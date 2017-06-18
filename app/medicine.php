<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    //
    protected $table = 'medicines';
     public $timestamps = false;
     protected $fillable = [
        'id_medicine',
		'medicinename',
		'notemedicine',
		'introduction'
       ];
}
