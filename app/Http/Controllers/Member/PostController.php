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

}