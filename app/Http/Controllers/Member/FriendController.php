<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use App\Models\User;

class FriendController extends Controller
{
    public function getFriend(){
        //return Auth::user()->id;
        $return['friends'] = User::where( 'id','<>',Auth::user()->id )->get();
        return View::make('Member.friend',$return);
    }
}
