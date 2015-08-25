<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
    /**
     * Middleware requires auth except view profile
     *
     * @return void
     *  
     **/
    public function __construct()
	{
		$this->middleware('auth',['except' => 'viewProfile']);
	}


	/**
	 * Return view with profile page
	 *
	 * @return HTML View
	 * @param Int
	 **/
	public function viewProfile($id)
	{
		$user = App\User::findOrFail($id);
		return view('profile',['user' => $user]);
	}

	


}
