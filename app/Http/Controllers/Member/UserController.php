<?php

    namespace App\Http\Controllers\Member;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Auth;
    use App\Models\User;
    use App\Models\Post;
    use App\Models\UserPlace;
    use SKAgarwal\GoogleApi\PlacesApi;

    class UserController extends Controller
    {

        public function index(){
            $id = Auth::user()->id;
            $data['school'] = UserPlace::where(['user_id'=>$id,'place_type_id'=>1])->orderBy('id','DESC')->get();
            $data['city'] = UserPlace::where(['user_id'=>$id,'place_type_id'=>0])->orderBy('id','DESC')->get();
            $data['university'] = UserPlace::where(['user_id'=>$id,'place_type_id'=>2])->orderBy('id','DESC')->get();
            $data['workplace'] = UserPlace::where(['user_id'=>$id,'place_type_id'=>3])->orderBy('id','DESC')->get();
            $data['user'] = User::where('id',$id)->first();
            $name = explode(' ',$data['user']['name']);
            $data['user']['firstname'] = $name[0];
            $data['user']['lastname'] = $name[1];
            $birthday = explode('-', $data['user']['birthday']);
            $data['user']['day'] = $birthday[2];
            $data['user']['month'] = $birthday[1];
            $data['user']['year'] = $birthday[0];
            return view('Member.backup_edit_profile',$data);
        }

        public function info(){
            $id = Auth::user()->id;
            $data['user'] = User::where('id',$id)->first();
            $data['city'] = UserPlace::where(['user_id'=>$id,'place_type_id'=>0])->orderBy('id','DESC')->get();
            $data['university'] = UserPlace::where(['user_id'=>$id,'place_type_id'=>2])->orderBy('id','DESC')->get();
            $data['workplace'] = UserPlace::where(['user_id'=>$id,'place_type_id'=>3])->orderBy('id','DESC')->get();
            return view('Member.backup_info',$data);
        }

        public function store(Request $request){
            $id = $request->id;
            $place_type_id = $request->place_type_id;
            $main_google = $request->main_google;
            $position = $request->position;
            $duration = $request->duration;
            $user_id = Auth::user()->id;
            $update['birthday'] = $request->year.'-'.$request->month.'-'.$request->day;
            $update['name'] = $request->firstname.' '.$request->lastname;
            $update['mobile'] = $request->mobile;
            $update['sex'] = $request->sex;
            $update['theme'] = $request->theme;
            $update['marital_status_id'] = $request->marital_status_id;
            \DB::beginTransaction();
            try {
                User::where('id',$user_id)->update($update);
                for ($i=0; $i <count($id) ; $i++) {
                    $userplace = array(
                        'place_type_id' => $place_type_id[$i],
                        'user_id' => $user_id,
                        'main_google' => $main_google[$i],
                        'position' => $position[$i],
                        'duration' => $duration[$i]
                    );
                    if($id[$i]==0){
                        $userplace['created_at'] = date('Y-m-d H:i:s');
                        UserPlace::insert($userplace);
                    }else{
                        $userplace['updated_at'] = date('Y-m-d H:i:s');
                        UserPlace::where('id',$id[$i])->update($userplace);
                    }
                }
                \DB::commit();
                $result['status'] = 1;
            } catch (Exception $e){
                \DB::rollBack();
                $result['status'] = 0;
            }
            return $result;
        }

        function search_place($keyword){
            //$keyword = $request->keyword;
            $googlePlaces = new PlacesApi('AIzaSyDykbjLvRQk0S54PcHHBFpANU5385S-hYA');
            $response = $googlePlaces->placeAutocomplete($keyword);
            foreach($response['predictions'] as $row){
                $test[] = $row['description'];
                // $data[$row['place_id']] = $row['structured_formatting']['secondary_text'];
                //$data[] = $row['structured_formatting']['secondary_text'];
            }
            return $test;
        }

        function search_friend($name){
            $name = str_replace("."," ",$name);
            $result['user'] = User::where('name',$name)->first();
            $result['result'] = Post::with(['getComment.getUser','getUser','getComment.getReply','getComment.getReply.getUser'])
            ->where('posted_at',$result['user']->id)
            ->get();
            $result['report_type'] = \App\Models\ReportType::get();
            return view('Member.backup_main',$result);
        }
    }
?>