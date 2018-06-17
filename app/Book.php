<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Book extends Model
{
	use SoftDeletes;
	
	protected $fillable = ['nombre', 'editorial', 'isbn','cantidad','fecha_publicacion'];
	protected $dates = ['fecha_publicacion', 'deleted_at'];
   
    public function autors()
    {
        return $this->belongsToMany('App\Autor');
    }

    public function orders(){

    	return $this->belongsToMany('App\Order');
    }
}
