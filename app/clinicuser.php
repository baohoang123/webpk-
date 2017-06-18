<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicuser extends Model
{
    //
     protected $table = 'clinicusers';
     public $timestamps = false;
     protected $fillable = [
            'fullname',
            'email',
            'password',
            'idnumber',
            'datecreateacc',
            'birthday',
            'tel',
            'image',
            'street',
            'district',
            'city',
            'status',
            'id_clinic',
            'id_doctor',
       ];
}
