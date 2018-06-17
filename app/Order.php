<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['client_id','estado','fecha_salida', 'fecha_entrada'];
    protected $dates = ['fecha_salida', 'fecha_entrada'];

    //pertenece al model Client
    public function client(){

    	return $this->belongsTo('App\Client');
    }

    public function books(){

    	return $this->belongsToMany('App\Book');
    }
}
