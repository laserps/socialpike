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
            $result['user'] = User::where('id',Auth::user()->id)->first();
            $result['result'] = Post::with(['getComment.getUser','getUser','getComment.getReply','getComment.getReply.getUser'])
            ->where('posted_at',Auth::user()->id)
            ->get();
            $result['report_type'] = \App\Models\ReportType::get();
            return view('Member.backup_main',$result);
        }
    }
?>