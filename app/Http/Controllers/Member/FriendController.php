<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use App\Models\User;
use App\Models\UserFriend;
use App\Models\UserFriendBlock;

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
        $return['topbar']='friend';
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
        $id = $request->now_id; $friend_id = $request->friend_id;
        if(UserFriend::where('user_id',$id)->count()==0){
            $return['now'] = $this->insertAddFriend($id,$friend_id);
        }else{
            $return['now'] = $this->updateAddFriend($id,$friend_id);
        }
        if(UserFriend::where('user_id',$friend_id)->count()==0){
            $return['friend'] = $this->insertAddFriend($friend_id,$id);
        }else{
            $return['friend'] = $this->updateAddFriend($friend_id,$id);
        }
        return $return;
    }

    public function insertAddFriend($id,$friend_id){
        $fid[] = $friend_id;
        $result = UserFriend::insert([
            'user_id' => $id,
            'friend_id' => json_encode($fid),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        if($result){return '1';}else{return '0';}
    }

    public function updateAddFriend($id,$friend_id){
        $return['id']=$id;$return['friend_id']=$friend_id;
        $getFriend = json_decode( UserFriend::where('user_id',$id)->first()->friend_id );
        if(in_array($friend_id,$getFriend)){

        }else{
            $getFriend[] = $friend_id;

            $result = UserFriend::where('user_id',$id)->update([
                'user_id' => $id,
                'friend_id' => json_encode($getFriend),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            if($result){
                return '1';
            }else{
                return '0';
            }
        }
    }

    public function storeBlockFriend(Request $request)
    {
        $id = $request->now_id; $friend_id = $request->friend_id;
        if(UserFriendBlock::where('user_id',$id)->count()==0){
            $return['now'] = $this->insertBlockFriend($id,$friend_id);
        }else{
            $return['now'] = $this->updateBlockFriend($id,$friend_id);
        }

        if(UserFriendBlock::where('user_id',$friend_id)->count()==0){
            $return['friend'] = $this->insertBlockFriend($friend_id,$id);
        }else{
            $return['friend'] = $this->updateBlockFriend($friend_id,$id);
        }

        return $return;
    }

    public function insertBlockFriend($id,$friend_id){
        $fid[] = $friend_id;
        $result = UserFriendBlock::insert([
            'user_id' => $id,
            'friend_id' => json_encode($fid),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        if($result){return '1';}else{return '0';}
    }

    public function updateBlockFriend($id,$friend_id){
        $return['id']=$id;$return['friend_id']=$friend_id;
        $getFriend = json_decode( UserFriendBlock::where('user_id',$id)->first()->friend_id );
        if(in_array($friend_id,$getFriend)){

        }else{
            $getFriend[] = $friend_id;

            $result = UserFriendBlock::where('user_id',$id)->update([
                'user_id' => $id,
                'friend_id' => json_encode($getFriend),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            if($result){
                return '1';
            }else{
                return '0';
            }
        }
    }

    public function updateUnblockFriend(Request $request){
        //return $request->all();
        $id=$request->now_id;
        $nid[]=$request->now_id;

        $friend_id=$request->friend_id;
        $fid[]=$request->friend_id;

        $getNow = json_decode( UserFriendBlock::where('user_id',$id)->first()->friend_id );
        $result['now'] = json_encode( array_values(array_diff($getNow,$fid)) );
        $return['now'] = UserFriendBlock::where('user_id',$id)->update([
            'friend_id' => $result['now'],
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $getFriend = json_decode( UserFriendBlock::where('user_id',$friend_id)->first()->friend_id );
        $result['friend'] = json_encode( array_values(array_diff($getFriend,$nid)) );
        $return['friend'] = UserFriendBlock::where('user_id',$friend_id)->update([
            'friend_id' => $result['friend'],
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return $return;
    }

    public function updateRemoveFriend(Request $request){
        //return $request->all();
        $id=$request->now_id;
        $nid[]=$request->now_id;

        $friend_id=$request->friend_id;
        $fid[]=$request->friend_id;

        $getNow = json_decode( UserFriend::where('user_id',$id)->first()->friend_id );
        $result['now'] = json_encode( array_values(array_diff($getNow,$fid)) );
        $return['now'] = UserFriend::where('user_id',$id)->update([
            'friend_id' => $result['now'],
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $getFriend = json_decode( UserFriend::where('user_id',$friend_id)->first()->friend_id );
        $result['friend'] = json_encode( array_values(array_diff($getFriend,$nid)) );
        $return['friend'] = UserFriend::where('user_id',$friend_id)->update([
            'friend_id' => $result['friend'],
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return $return;
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

    public static function checkFriend($aid,$bid){
        $casea = UserFriend::where('user_id',$aid)->where('friend_id', 'like', '%"'.$bid.'"%') ->count();
        $caseb = UserFriend::where('user_id',$bid)->where('friend_id', 'like', '%"'.$aid.'"%') ->count();
        return ($casea+$caseb)==2?'T':'F';
    }
}
