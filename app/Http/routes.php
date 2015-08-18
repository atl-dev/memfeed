<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
 'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
    return view('index')->with('active','home');
});
Route::get('/top',function(){
    $mems = new App\Mem();
    return view('index',['active' => 'top','mems' => $mems->getTop()]);
});

Route::get('/anteroom',function(){
	$mems = new App\Mem();
	return view('index',['active' => 'anteroom','mems' => $mems->getUnApproved()]);
});
Route::get('/view/mem/{id}', function ($id) {

    $mems = Mem::find($id);

    return view('mem')->with('mems', $mems);
});

Route::get('/mem/positive/{id}',function($id) {

        return Redirect::to("/view/mem/".$id);
});
Route::get('/mem/negative/{id}',function($id) {

    return Redirect::to("/view/mem/".$id);
});


Route::get('/admin','AdminController@index');

Route::get('/manage/comments','AdminController@manageComments');
Route::get('/manage/mems','AdminController@manageMems');
Route::get('/approve/mem/{id}','AdminController@approveMem');
Route::get('/approve/comment/{id}','AdminController@approveComment');

Route::get('/add/mem',function(){ 
	return view('add_mem_form');
});
