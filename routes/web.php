<?php

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
Route::get('/redirect', 'FacebookAuthController@redirect');
Route::get('/callback', 'FacebookAuthController@callback');

Route::get('/logout',function(){
    return \Auth::logout();
});

Route::get('/', function(){
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', function(){
    return view('Member.main');
});
Route::get('/wall','Member\FetchController@wall');
Route::post('/post', 'Member\PostController@store');
Route::post('/reply', 'Member\ReplyController@store');
Route::post('/comment', 'Member\CommentController@store');

Route::group(['middleware' => 'member'], function(){
    Route::get('/first', function(){
        return view('Member.main');
    });
});