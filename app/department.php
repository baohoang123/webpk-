<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    //
     protected $table = 'departments';
     public $timestamps = false;
     protected $fillable = [
         'depart_name',
         'depart_code'
     ];
}
