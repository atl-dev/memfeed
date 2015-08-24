<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";


    public function mem()
    {
    	return $this->belongsTo('App\Mem','mem_id');
    }


    public function approve($id)
    {
    	$comment = App\Comment::findOrFail($id);
    	$comment->approved = "yes";
    	$comment->save();
    }
}
