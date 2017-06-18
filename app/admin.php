<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
    protected $fillable = [
		'hovaten',
		'email',
		'username',
		'password',
		'image'

	];
}
