<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";


    public function mem()
    {
    	return $this->belongsTo('App\Mem');
    }


    public function approve($id)
    {
    	\DB::update("UPDATE comments SET approved='yes' WHERE id = ?",[$id]);
    }
}
