<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mem;

class MemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Mem::ReverseOrder()->get();
    }

    
    public function viewMem($id)
    {
        return Mem::find($id);
    }
   
}
