<?php

    namespace App\Http\Controllers\Member;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Models\Post;

    class FetchController extends Controller
    {
        public function wall(){
            $result['result'] = Post::with(['getComment.getUser','getUser','getComment.getReply','getComment.getReply.getUser'])
            ->where('posted_by',Auth::user()->id)
            ->get();
            $result['report_type'] = \App\Models\ReportType::get();
            return view('Member.post',$result);
        }

    }
?>