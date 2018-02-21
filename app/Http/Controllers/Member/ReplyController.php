<?php

    namespace App\Http\Controllers\Member;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Models\Reply;

    class ReplyController extends Controller
    {
        public function store(Request $request){
            $post = $request->all();
            unset($post['_token']);
            $post['created_at'] = date('Y-m-d H:i:s');
            $post['user_id'] = Auth::user()->id;
            \DB::beginTransaction();
            try {
                Reply::insert($post);
                \DB::commit();
            } catch (Exception $e){
                \DB::rollBack();
            }
        }
    }
?>