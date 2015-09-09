<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ModeratorController extends AdminController
{
    public function __construct()
    {
        $this->middleware('auth');
        if(Auth::user()->moderator != true) {
            abort(503);
        }
    }


    
}
