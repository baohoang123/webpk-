<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
     protected $table = 'payments';
     public $timestamps = false;
     protected $fillable = [
         
		'id_payment',
		'id_book',
		'title_pay',
		'cost',
		'bank',
		'dayhourpayment',
		'paymentmethod'
       ];
}
