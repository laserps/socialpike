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

}