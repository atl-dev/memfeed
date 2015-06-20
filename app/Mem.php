<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mem extends Model
{
    protected $table = "mems";

    public function scopeReverseOrder($query)
    {
        return $query->orderBy('id','desc');
    }
    
    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
}
