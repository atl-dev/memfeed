<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Input;

class Mem extends Model
{
    /**
     * Fields that are fillable in database
     *
     * @var Array
     **/
    protected $fillable = ['plus','title','img_path','plus','minus','approved'];
    
    /**
     * Table name in database
     *
     * @var string
     **/
    protected $table = 'mems';
    
   

    /**
     * Creates relation.
     *
     * @return Relation
     **/
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    /**
     * Change status of mem to approved.
     *
     * @param Integer
     **/
    public function approve($id)
    {
        $mem = Mem::find($id);
        $mem->approved = 'yes';
        $mem->save();
    }

    
    /**
     * Returns inapproved mems for anteroom
     *
     * @return void
     *  
     **/
    public function getUnApproved()
    {
        return Mem::where('approved','no')->orderBy('id','desc')->paginate(15);
    }

    /**
     * Returns main feed with approved and newest mems
     *
     * @return Object
     * 
     **/
    public function getFeed()
    {
        return Mem::where('approved','yes')->orderBy('id','desc')->paginate(15);
    }

    /**
     * Returns approved and most popular Mems
     *
     * @return Object
     *  
     **/
    
    public function getTop()
    {
        
        return Mem::where('approved','yes')->orderBy('plus','desc')->paginate(15);
    }

    /**
     * Increese positive rate
     *
     * @return void
     * @param Int 
     **/
    
    public function rateUp($id)
    {
       $mem = Mem::find($id);
       $mem->plus = intval($mam->plus,10);
       $mem->plus += 1;
       $mem->save();
    }

    /**
     * Increments negative rate
     *
     * @return void
     * @param Int 
     **/
    
    public function rateDown($id)
    {
       $mem = Mem::find($id);
       $mem->minus = intval($mam->minus,10);
       $mem->minus += 1;
       $mem->save();
    }

    /**
     * Delete Mem 
     *
     * @return void
     * @param  Int 
     **/
    public function remove($id)
    {
        $mem = Mem::find($id);
        $mem->delete();
    }

    /**
     * Relation to users table
     *
     * @return Query Object
     * @param  
     **/
    public function  author()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
