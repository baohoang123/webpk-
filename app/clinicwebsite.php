<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicwebsite extends Model
{
    //
   protected $table = 'clinicwebsites';
     public $timestamps = false;
     protected $fillable = [
     
            'titlename',
            'sizetitle',
            'fonttitle',
            'colortitle',
            'tagline',
            'coverimage',
            'background',
            'fontpage',
            'sizecharacter',
            'id_clinic',
         ];
}
