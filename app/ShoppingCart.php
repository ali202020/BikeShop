<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    function user(){

    	return $this->belongsTo('App\User');
    }    
}
