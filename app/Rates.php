<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Rates extends Model
{
    protected $table = "user_mem";
    protected $fillable = ['user_id','mem_id'];


    public function userHasRatedMem($mem_id)
    {
    	$rates = App\Rates::where('mem_id',$mem_id);
    	foreach($rates as $rate) {
    		if($rate->user_id == Auth::user()->id) {
    			return true;
    		}
    	}

    	return false;
    }
}
