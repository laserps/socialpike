<?php

    namespace App\Http\Controllers\Member;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Models\User;
    use App\Models\UserPlace;

    class UserController extends Controller
    {
        public function index(){
            $data['user'] = User::where('id',Auth::user()->id)->first();
            return view('Member.backup_edit_profile',$data);
        }

        public function store(Request $request){
            $user_id = Auth::user()->id;
            $school = $request->school;
            for($i=0;$i<count($request->school);$i++){
                if($school[$i]!=null){
                    $insert_userplace[] = [
                        'user_id' => $user_id,
                        'place_type_id' => 1,
                        'id_google' => $school[$i]
                    ];
                }
            }
            $university = $request->university;
            for($i=0;$i<count($request->university);$i++){
                if($university[$i]!=null){
                    $insert_userplace[] = [
                        'user_id' => $user_id,
                        'place_type_id' => 2,
                        'id_google' => $university[$i]
                    ];
                }
            }
            $workplace = $request->workplace;
            for($i=0;$i<count($request->workplace);$i++){
                if($workplace[$i]!=null){
                    $insert_userplace[] = [
                        'user_id' => $user_id,
                        'place_type_id' => 3,
                        'id_google' => $workplace[$i]
                    ];
                }
            }
            $insert['birthday'] = $request->year.'-'.$request->month.'-'.$request->day;
            $insert['name'] = $request->firstname.' '.$request->lastname;
            $insert['mobile'] = $request->mobile;
            \DB::beginTransaction();
            try {
                UserPlace::insert($insert_userplace);
                \DB::commit();
                $result['status'] = 1;
            } catch (Exception $e){
                \DB::rollBack();
                $result['status'] = 0;
            }
            return $result;
        }
    }
?>