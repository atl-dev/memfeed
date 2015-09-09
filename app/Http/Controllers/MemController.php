<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mem;
/**
 * undocumented class
 *
 * @package Controllers\MemController
 * @author Adrian Cybulski @Xeonid 
 **/
class MemController extends Controller
{
    /**
     * Return view with all Mems
     *
     * @return View
     */
    public function index()
    {
        return view("")->with('mems',Mem::ReverseOrder()->get());
    }

    
    /**
     * Return view with selected mem details
     *
     * @return View
     * @param Integer 
     **/
    public function viewMem($id)
    {
        return view('')->with('mem',Mem::find($id));
    }
  
	public function addComment(Request $request)
	{
		if(Auth::check()) {
			 
			$this->validate($request,['comment' => 'required']);
			$comment =  App\Comment::create([
				'email' => Auth::user()->email,
				'body' => $request->input('comment'),
				'mem_id' => $request->input('mem_id'),
				'user_id' => Auth::user()->id,
				'approved' => 'yes',

			]);
		}
	}
}
