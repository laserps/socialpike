<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request){
        $post = $request->all();
        $post['detail'] = json_encode($request->detail);
        $post['post_type_id'] = 0;
        unset($post['_token']);
        $post['created_at'] = date('Y-m-d H:i:s');
        $post['posted_by'] = Auth::user()->id;
        \DB::beginTransaction();
        try {
            Post::insert($post);
            \DB::commit();
        } catch (Exception $e){
            \DB::rollBack();
        }
        $result = Post::where('posted_by',Auth::user()->id)->orderBy('id','desc')->first();
        $result['detail'] = json_decode($result['detail']);
        return $result;
    }

    public function like($id,$user_id){
        $user_id = intval($user_id);
        $like = Post::where('id',$id)->select('liked')->first();
        if($like->liked!=null){
            $like = json_decode($like->liked);
            if(in_array($user_id, $like)){
                $like = array_diff($like,[$user_id]);
                $result['count'] = count($like);
            }else{
                array_push($like, $user_id);
                $result['count'] = count($like);
                $result['status'] = 1;
            }
            $data['liked'] = json_encode($like);
        }else{
            $data['liked'] = array();
            array_push($data['liked'], $user_id);
            $result['count'] = count($data['liked']);
            $result['status'] = 0;
            $data['liked'] = json_encode($data['liked']);
        }
        \DB::beginTransaction();
        try {
            Post::where('id',$id)->update($data);
            \DB::commit();
        } catch (Exception $e){
            \DB::rollBack();
        }
        return $result;
    }

    public function share(Request $request){
        $user_id = Auth::user()->id;
        $share = $request->all();
        $update['shared'] = intval($share['shared'])+1;
        $share['posted_at'] = $user_id;
        $share['posted_by'] = $user_id;
        $share['post_type_id'] = 1;
        $share['detail'] = json_encode($share['detail']);
        $share['created_at'] = date('Y-m-d H:i:s');
        unset($share['_token']);
        unset($share['shared']);
        \DB::beginTransaction();
        try {
            Post::insert($share);
            Post::where('id',$share['post_share_id'])->update($update);
            \DB::commit();
        } catch (Exception $e){
            \DB::rollBack();
        }
        $return['user_id'] = $user_id;
        $return['count'] = $update['shared'];
        $return['data'] = Post::with('getShare.getUser')->where('posted_by',$user_id)->orderBy('id','desc')->first();
        return $return;
    }

    public function share_now($id,$count){
        $user_id = Auth::user()->id;
        $count = intval($count)+1;
        $insert = array(
            'posted_at' => $user_id,
            'posted_by' => $user_id,
            'post_type_id' => 1,
            'post_share_id' => $id,
            'created_at' => date('Y-m-d H:i:s')
        );
        $update = array(
            'shared' => $count
        );
        \DB::beginTransaction();
        try {
            Post::insert($insert);
            Post::where('id',$id)->update($update);
            \DB::commit();
        } catch (Exception $e){
            \DB::rollBack();
        }
        $return['user_id'] = $user_id;
        $return['count'] = $count;
        $return['data'] = Post::with('getShare.getUser')->where('posted_by',$user_id)->orderBy('id','desc')->first();
        return $return;
    }

    public function share_to_friend(Request $request){
        $user_id = Auth::user()->id;
        $share = $request->all();
        $update['shared'] = intval($share['shared'])+1;
        $share['posted_by'] = $user_id;
        $share['post_type_id'] = 1;
        $share['detail'] = json_encode($share['detail']);
        $share['created_at'] = date('Y-m-d H:i:s');
        unset($share['_token']);
        unset($share['shared']);
        \DB::beginTransaction();
        try {
            Post::insert($share);
            Post::where('id',$share['post_share_id'])->update($update);
            \DB::commit();
        } catch (Exception $e){
            \DB::rollBack();
        }
        $return['user_id'] = $share['posted_at'];
        $return['count'] = $update['shared'];
        $return['data'] = Post::with('getShare.getUser')->where('posted_by',$user_id)->orderBy('id','desc')->first();
        return $return;
    }

    /*public function find_friend(){
        $friend = json_decode(\App\Models\UserFriend::where('user_id',Auth::user()->id)->first()->frind_id);
        return $result = \App\Models\User::whereIn('id',$result)->get();
    }*/

}