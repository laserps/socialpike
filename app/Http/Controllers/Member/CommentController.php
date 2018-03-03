<?php

    namespace App\Http\Controllers\Member;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Models\Comment;

    class CommentController extends Controller
    {
        public function store(Request $request){
            $comment = $request->all();
            $comment['detail'] = json_encode($request->detail);
            unset($comment['_token']);
            $comment['member_id'] = Auth::user()->id;
            $comment['created_at'] = date('Y-m-d H:i:s');
            $comment['deleted_at'] = null;
            \DB::beginTransaction();
            try {
                $id = Comment::insertGetId($comment);
                \DB::commit();
            } catch (Exception $e){
                \DB::rollBack();
            }
            $result = Comment::where('id',$id)->orderBy('id','desc')->first();
            //$result['detail'] = json_decode($result['detail']);
            return $result;
        }
    }
?>