<?php

use App\Post;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
// Group all routes that needs a logged in user
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'PostController@index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/post','PostController@store');

    Route::get('/my/profile',function(){
        $id = Auth::user()->id;
        $profile = User::findOrFail($id);

        return view('pages.my_profile',['profile_data'=>$profile]);
    });

    Route::post('/update_profile','UserController@update');

    Route::any('/add_comment/{id}','CommentsController@store');
});