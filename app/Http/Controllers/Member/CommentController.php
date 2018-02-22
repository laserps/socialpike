<?php

    namespace App\Http\Controllers\Member;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Models\Comment;

    class CommentController extends Controller
    {
        public function store(Request $request){
            return $request->all();
            $comment = $request->all();
            $comment['detail'] = json_encode($request->detail);
            unset($comment['_token']);
            $comment['member_id'] = Auth::user()->id;
            $comment['created_at'] = date('Y-m-d H:i:s');
            $comment['deleted_at'] = null;
            \DB::beginTransaction();
            try {
                Comment::insert($comment);
                \DB::commit();
            } catch (Exception $e){
                \DB::rollBack();
            }
        }
    }
?>