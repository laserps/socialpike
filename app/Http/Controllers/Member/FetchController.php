<?php

    namespace App\Http\Controllers\Member;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Models\Post;
    use App\Models\User;

    class FetchController extends Controller
    {
        public function wall(){
            $friend = json_decode(\App\Models\UserFriend::where('user_id',Auth::user()->id)->first()->friend_id);
            $result['friend'] = User::whereIn('id',$friend)->get();
            $result['user'] = User::where('id',Auth::user()->id)->first();
            $result['result'] = Post::with(['getShare.getUser','getComment.getUser','getUser','getComment.getReply','getComment.getReply.getUser'])
            ->where('posted_at',Auth::user()->id)
            ->orderBy('created_at','DESC')
            ->get();
            $result['report_type'] = \App\Models\ReportType::get();
            return view('Member.backup_main',$result);
        }

        public function main(){
            $result['user'] = User::where('id',Auth::user()->id)->first();
            return view('Member.main',$result);
        }
    }
?>