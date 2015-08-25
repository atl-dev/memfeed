<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = ['email','body','mem_id','user_id','approved'];

    public function mem()
    {
    	return $this->belongsTo('App\Mem','mem_id');
    }

    public function author()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function approve($id)
    {
    	$comment = App\Comment::findOrFail($id);
    	$comment->approved = "yes";
    	$comment->save();
    }
}
