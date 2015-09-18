<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Redirect;
use App;
use Auth;
use Input;
use Request;
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
          //exit;
        }
    }

    public function index()
    {
        return view('Admin.index');
    }

    /**
     * Upload mem
     *
     * @return void
     * @param 
     **/
    public function addMem ()
    {
       // dd($_POST);

        
        if (Input::hasFile('image')) {
            $data = [
                'title' => Input::get('title'),
               
            ];

            if (Input::file('image')->isValid()) {
               
                $name = Input::file('image')->getClientOriginalName();
                $ext = Input::file('image')->getClientOriginalExtension();
                $name = md5($name).'.'.$ext;
                Input::file('image')->move(__DIR__.'/../../../public/images/', $name);
               
                $mem = App\Mem::create([
                        'title' => $data['title'],
                        'img_path' => '/images/'.$name,
                        'user_id' => Auth::user()->id,
                        'plus' => 0,
                        'minus' => 0,
                        'approved' => 'no',
                    ]);
               
                return Redirect::to('/view/mem/'.$mem->id);
            } else {
                return Redirect::back()->withErrors([
                        "Input file is not valid",
                    ]);
            }
        } else {
            return Redirect::back()->withErrors([
                        "Input file does not exits",
                    ]);
        }
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
        if(! is_int($id) ) {
            throw new \InvalidArgumentException("ID has to be integer!");
        }

        $comment =App\Comment::find($id);
        $comment->approve();
        return Redirect::to('/admin/manage/comments');
    }


    /**
     * approves mem and redirect to management
     *
     * @return Redirect
     * @param Integer
     **/
    public function approveMem($id)
    {
        if(! is_int($id) ) {
            throw new \InvalidArgumentException("ID has to be integer!");
        }


        $mem = App\Mem::find($id);
        $mem->approve();
        return Redirect::to('/admin/manage/mems');
    }

    /**
     * Delete mem
     *
     * @return HTTP Redirect
     * @param Int
     **/
    public function deleteMem ($id)
    {
        $mem = App\Mem::findOrFail($id);
        $mem->delete();
        return Redirect::back();
    }

    /**
     * Delete user
     *
     * @return HTTP Redirect
     * @param Int
     **/
    public function deleteUser($id)
    {
        $user = App\User::findOrFail($id);
        $user->delete();
        return Redirect::back();
    }
}
