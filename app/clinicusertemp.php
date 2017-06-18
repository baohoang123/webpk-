<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicusertemp extends Model
{
     protected $table = 'clinicusertemps';
     public $timestamps = false;
     protected $fillable = [
       'emailtemp',
       'passwordtemp',
       'id_codecheck',
       ];
}
