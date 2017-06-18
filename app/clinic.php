<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinic extends Model
{
    //
    protected $table = 'clinics';
     public $timestamps = false;
     protected $fillable = [
            'clinic_id', 
            'clinicname',                   
            'opendate',
            'static',      
            'emailsign',
            'emailclinic',
            'themes',
            'typeclinic',
            'tel',
            'street',
            'district',
            'city',
            'image',
       ];
}
