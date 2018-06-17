<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Autor extends Model
{
	use SoftDeletes;
	
	protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function books()
    {
        return $this->belongsToMany('App\Book');
    }
}
