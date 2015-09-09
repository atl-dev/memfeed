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
	$mem = new App\Mem();
    return view('index',[
    		"active" => 'home',
    		"mems" => $mem->getFeed(),
    	]);
});
Route::get('/top',function(){
    $mems = new App\Mem();
    return view('index',['active' => 'top','mems' => $mems->getTop()]);
});

Route::get('/anterroom',function(){
	$mems = new App\Mem();
	return view('index',['active' => 'anteroom','mems' => $mems->getUnApproved()]);
});



Route::get('/view/profile/{id}','UserController@viewProfile');


Route::get('/view/mem/{id}', function ($id) {

    $mems = App\Mem::findOrFail($id);

    return view('index')->with('mem', $mems);
});

Route::get('/mem/positive/{id}',function($id) {

        return Redirect::to("/view/mem/".$id);
});
Route::get('/mem/negative/{id}',function($id) {

    return Redirect::to("/view/mem/".$id);
});




Route::get('/admin','AdminController@index');

Route::get('/admin/manage/comments','AdminController@manageComments');
Route::get('/admin/manage/mems','AdminController@manageMems');
Route::get('/admin/manage/users','AdminController@manageUsers');
Route::get('/admin/manage/mems/approve/mem/{id}','AdminController@approveMem');
Route::get('/admin/manage/comments/approve/comment/{id}','AdminController@approveComment');
Route::post('/admin/add/mem','AdminController@addMem');
Route::get('/admin/form/{name}','AdminController@form');
