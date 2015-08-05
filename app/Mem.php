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
    protected $fillable = ['plus','name','img_path'];
    
    /**
     * Table name in database
     *
     * @var string
     **/
    protected $table = 'mems';
    
    /**
     * Scope for reversed fetching data by id.Whoops
     *
     * @return Query object
     *
     * @param Query
     **/
    public function scopeReverseOrder($query)
    {
        return $query->orderBy('id', 'desc');
    }

    /**
     * Scope for popular objects
     *
     * @return Query object
     *
     * @param Query
     **/
    public function scopePopular($query)
    {
        return $query->orderBy('plus','desc');
    }

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
        \DB::update("UPDATE mems SET approved='yes' WHERE id = ?", [$id]);
    }

    /**
     * Uploads mem image file , and insert record whith mem details into a table.
     **/
    public function addMem()
    {
        if (Input::hasFile('image')) {
            $data = [
                'title' => Input::get('title'),
                'file' => Input::file('image'),
            ];

            if (Input::file('image')->isValid()) {
                $name = Input::file('image')->getClientOriginalName();
                $ext = Input::file('image')->getClientOriginalExtension();
                $name = md5($name).'.'.$ext;
                Input::file('image')->move(__DIR__.'/../public/images/', $name);
                \DB::insert('INSERT INTO mems (title,img_path) VALUES(?,?)', [$data['title'], '/images/'.$name]);
            }
        }
    }


    public function getTop()
    {
        
        return Mem::popular()->get();
    }

    public function rateUp($id)
    {
       $mem = Mem::find($id);
       $mem->plus = intval($mam->plus,10);
       $mem->plus += 1;
       $mem->save();
    }

    public function rateDown($id)
    {
       $mem = Mem::find($id);
       $mem->minus = intval($mam->minus,10);
       $mem->minus += 1;
       $mem->save();
    }
}
