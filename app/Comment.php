<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = ['email','body','mem_id','user_id','approved'];


    /**
     * Relation to mem
     *
     * @return Query Object
     *  
     **/
    public function mem()
    {
    	return $this->belongsTo('App\Mem','mem_id');
    }


    /**
     * Relation to user
     *
     * @return Query Object 
     **/
    public function author()
    {
        return $this->belongsTo('App\User','user_id');
    }

    /**
     * Approve comment
     *
     * @return void
     * @param Int 
     **/
    public function approve($id)
    {
    	$comment = App\Comment::findOrFail($id);
    	$comment->approved = "yes";
    	$comment->save();
    }
}
