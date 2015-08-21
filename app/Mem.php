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

    public function getUnApproved()
    {
        return Mem::where('approved','no')->orderBy('id','desc')->get();
    }
    public function getFeed()
    {
        return Mem::where('approved','yes')->orderBy('id','desc')->get();
    }
    public function getTop()
    {

        return Mem::orderBy('plus','desc')->Approved()->get();
    }

    public function rateUp($id)
    {
       $mem = Mem::find($id);
       $mem->plus = intval($mem->plus,10);
       $mem->plus += 1;
       $mem->save();
    }

    public function rateDown($id)
    {
       $mem = Mem::find($id);
       $mem->minus = intval($mem->minus,10);
       $mem->minus += 1;
       $mem->save();
    }

    /**
     * undocumented function
     *
     * @return void
     * @author
     **/
    public function remove($id)
    {
        $mem = Mem::find($id);
        $mem->delete();
    }
}
