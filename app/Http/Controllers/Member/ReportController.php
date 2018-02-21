<?php

    namespace App\Http\Controllers\Member;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Models\PostReport;

    class ReportController extends Controller
    {
        public function store(Request $request){
            $report = $request->all();
            unset($report['_token']);
            $report['created_at'] = date('Y-m-d H:i:s');
            $report['member_id'] = Auth::user()->id;
            \DB::beginTransaction();
            try {
                $check_report = PostReport::where(['post_id'=>$report['post_id'],'member_id'=>$report['member_id']])->first();
                if(count($check_report)==0){
                    PostReport::insert($report);
                    \DB::commit();
                }
            } catch (Exception $e){
                \DB::rollBack();
            }
        }
    }
?>