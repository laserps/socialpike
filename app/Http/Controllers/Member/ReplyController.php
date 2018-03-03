<?php

    namespace App\Http\Controllers\Member;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Models\Reply;

    class ReplyController extends Controller
    {
        public function store(Request $request){
            $reply = $request->all();
            $reply['message'] = json_encode($request->message);
            unset($reply['_token']);
            $reply['created_at'] = date('Y-m-d H:i:s');
            $reply['user_id'] = Auth::user()->id;
            \DB::beginTransaction();
            try {
                Reply::insert($reply);
                \DB::commit();
            } catch (Exception $e){
                \DB::rollBack();
            }
            $result = Reply::where('user_id',Auth::user()->id)->orderBy('reply_id','desc')->first();
            $result['message'] = json_decode($result['message']);
            return $result;
        }
    }
?>