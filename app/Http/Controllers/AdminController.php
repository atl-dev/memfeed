<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Redirect;
/**
 * Controller which handle administrative actions
 *
 * @package AdminController
 * @author Adrian Cybulski @Xeonid
 **/
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if(!Auth::user()->admin) {
          exit;
        }
    }

    public function index()
    {

    }


    /**
     * Returns View with list of unapproved mems
     *
     * @return View
     * @param
     **/
    public function manageMems()
    {
        $mems = App\Mem::all()->where('approved', 'no');

        return view('Admin.manage_mems', ['mems' => $mems]);
    }
    /**
     * Returns View with list of unapproved comments
     *
     * @return View
     * @param
     **/
    public function manageComments()
    {
        $comments = Comment::all()->where('approved', 'no');

        return view('Admin.manage_comments', ['comments' => $comments]);
    }

    /**
     * approve comment and redirect to management
     *
     * @return Redirect
     * @param  Integer
     **/
    public function approveComment($id)
    {
        $comment = new App\Comment();
        $comment->approve($id);
        return Redirect::to('/manage/comments');
    }


    /**
     * approves mem and redirect to management
     *
     * @return Rediret
     * @param Integer
     **/
    public function approveMem($id)
    {
        $mem = new App\Mem();
        $mem->approve($id);
        return Redirect::to('/manage/mems');
    }
}
