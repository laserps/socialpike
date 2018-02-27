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

Route::get('/friend','Member\FriendController@getFriend');

Route::get('/album', function(){
    return view('Member.album');
});
Route::get('/album_edit', function(){
    return view('Member.album_edit');
});
Route::get('/photo', function(){
    return view('Member.photo');
});
Route::get('/edit_profile', function(){
    return view('Member.edit_profile');
});

Route::get('/wall','Member\FetchController@wall');
Route::post('/post', 'Member\PostController@store');
Route::post('/reply', 'Member\ReplyController@store');
Route::post('/comment', 'Member\CommentController@store');
Route::post('/report', 'Member\ReportController@store');
Route::get('/find_report/{post_id}', 'Member\ReportController@find');
Route::get('/profile', 'Member\UserController@index');
Route::post('/profile', 'Member\UserController@store');
Route::get('/info', 'Member\UserController@info');

Route::group(['middleware' => 'member'], function(){
    Route::get('/first', function(){
        return view('Member.main');
    });
});

// Route::get('/countstr',function(){
//     $str ="https://scontent.xx.fbcdn.net/v/t1.0-1/p200x200/20108240_1613406825336653_8344623303259921044_n.jpg?oh=6f22318a227432fdc7068aa8a23270b6&oe=5B0C2239";
//     return strlen($str);
// });