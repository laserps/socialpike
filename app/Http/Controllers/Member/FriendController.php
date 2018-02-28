<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use App\Models\User;
use App\Models\UserFriend;

class FriendController extends Controller
{
    public function getFriend(){
        //return Auth::user()->id;
        $return['friends'] = User::where( 'id','<>',Auth::user()->id )->get();
        return View::make('Member.friend',$return);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $return['user'] = User::where('id',Auth::user()->id)->first();
        $friendid = json_decode(UserFriend::where('user_id',Auth::user()->id)->first()->friend_id);
        $return['friends'] = User::whereIn('id',$friendid)->get();
        return View::make('Member.friend',$return);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $str = str_replace("."," ",$id);
        $return['user'] = User::where('name',$str)->first();
        $realid = $return['user']->id;
        $friendid = json_decode(UserFriend::where('user_id',$realid)->first()->friend_id);
        $return['friends'] = User::whereIn('id',$friendid)->get();
        return View::make('Member.friend',$return);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
