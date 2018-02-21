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
        unset($post['_token']);
        $post['created_at'] = date('Y-m-d H:i:s');
        $post['posted_by'] = Auth::user()->id;
        \DB::beginTransaction();
        try {
            Post::insert($post);
            \DB::commit();
            $return['type'] = 'success';
            $return['text'] = 'สำเร็จ';
        } catch (Exception $e){
            \DB::rollBack();
            $return['type'] = 'error';
            $return['text'] = 'ไม่สำเร็จ'.$e->getMessage();
        }
        $return['title'] = 'เพิ่มข้อมูล';
        return $return;
    }

}