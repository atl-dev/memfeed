<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Input;

class Mem extends Model
{
    protected $table = 'mems';

    public function scopeReverseOrder($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function approve($id)
    {
    	\DB::update("UPDATE mems SET approved='yes' WHERE id = ?",[$id]);
    }
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
                \DB::insert('INSERT INTO mems (title,img_path) VALUES(?,?)', [ $data['title'],'/images/'.$name]);
            }
        }
    }
}
