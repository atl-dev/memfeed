<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Input;
use Auth;
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
     * Change status of mem to approved.
     *
     * @param
     **/
    public function approve()
    {
        $this->approved = 'yes';
        $this->save();
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
     * @param  
     **/
    
    public function rateUp()
    {
        $rates = new Rate();
        if(Auth::check() and !$rates->userHasRatedMem($this->id)) {
           $this->plus = intval($mam->plus,10);
           $this->plus += 1;
           $this->save();
           $rate = Rate::create([
                'user_id' => Auth::user()->id,
                'mem_id' => $this->id,
            ]);
        }
    }

    /**
     * Increments negative rate
     *
     * @return void
     * @param  
     **/
    
    public function rateDown()
    {
        $rates = new Rate();
        if(Auth::check() and !$rates->userHasRatedMem($this->id)) {
           $this->minus = intval($mam->minus,10);
           $this->minus += 1;
           $this->save();
           $rate = Rate::create([
                'user_id' => Auth::user()->id,
                'mem_id' => $this->id,
            ]);
       }
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

    /**
     * Relation to comments 
     *
     * @return void
     *  
     **/
    public function comments()
    {
        return $this->hasMany('App\Comment','mem_id');
    }
}
