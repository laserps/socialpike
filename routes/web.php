<?php

use function GuzzleHttp\json_decode;

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
    \Auth::logout();
    return redirect('/');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'member'], function(){
    // Route::get('/first', function(){
    //     return view('Member.main');
    // });

    Route::get('/editprofile',function(){
        $data['user'] = \App\Models\User::where('id', \AUTH::user()->id )->first();
        $data['topbar'] = 'profile';
        return view('Member.edit_profile',$data);
    });

    Route::post('/friend/block','Member\FriendController@storeBlockFriend');
    Route::post('/friend/unblock','Member\FriendController@updateUnblockFriend');
    Route::post('/friend/remove','Member\FriendController@updateRemoveFriend');
    Route::resource('/friend','Member\FriendController');

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

    Route::get('/main','Member\FetchController@main');

    Route::get('/','Member\FetchController@wall');
    Route::post('/comment', 'Member\CommentController@store');
    Route::get('/wall','Member\FetchController@wall');
    Route::post('/post', 'Member\PostController@store');
    Route::get('/like/{post_id}/{user_id}', 'Member\PostController@like');
    Route::post('/share', 'Member\PostController@share');
    Route::get('/find_friend', 'Member\PostController@find_friend');
    Route::post('/share_to_friend', 'Member\PostController@share_to_friend');
    Route::get('/share/{id}/{count}', 'Member\PostController@share_now');
    Route::post('/reply', 'Member\ReplyController@store');
    
    Route::post('/report', 'Member\ReportController@store');
    Route::get('/find_report/{post_id}', 'Member\ReportController@find');
    Route::get('/profile', 'Member\UserController@index');
    Route::post('/profile', 'Member\UserController@store');

    Route::get('/info', 'Member\UserController@info');
    //Route::get('/{name}/info','Member\UserController@search_friend');
    //Route::get('/search_place', 'Member\UserController@search_place');

    //Route::get('search',array('as'=>'search','uses'=>'SearchController@search'));
    Route::get('/search_place/{keyword}',array('as'=>'autocomplete','uses'=>'Member\UserController@search_place'));
    Route::get('/{name}','Member\UserController@search_friend');
    Route::get('/{name}/info','Member\FriendController@finfo');
    Route::get('/{name}/friend','Member\FriendController@ffriend');
});

Route::get('/checkFriend/{aid}/{bid}','Member\FriendController@checkFriend');