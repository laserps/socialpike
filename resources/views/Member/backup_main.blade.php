@extends('Member.layouts.app')

@section('cssbottom')
<link rel="stylesheet" href="{{asset('assets/global/plugins/alertifyjs/css/themes/default.css')}}">
<link rel="stylesheet" href="{{asset('assets/global/plugins/alertifyjs/css/alertify.min.css')}}">
@endsection

@section('content')
    <div class="col-12 col-md-8">
        <!-- input -->
        <div class="card mb-4">
            <form class='post_form'>
                <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                <div class="card-header-lg">
                    <div class="m-1">
                        <a href="#">
                            <img src="{{Auth::user()->avatar}}" class="img-fluid rounded-circle image-post-box" alt="Profile image">
                        </a>
                    </div>
                </div>
                <div class="card-body-lg">
                    <div class="post-content">
                        <div class="px-2">
                            <div class="form-group">
                                <textarea class="form-control post-box" name='detail'></textarea>
                            </div>
                        </div>
                        <div class="m-1">
                            <span class="input-group-btn">
                                <span class="btn btn-file add-post-image">
                                    <span class="fa fa-picture-o"></span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif"/>
                                </span>
                            </span>
                            <span class="input-group-btn">
                                <span class="btn btn-file add-post-emotion">
                                    <span class="fa fa-smile-o"></span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif"/>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="m-1 btn-coment">
                        <input type="hidden" name="posted_at" value="{{$user->id}}">
                        <input type="submit" name="post" class="btn btn-post" value="POST">
                    </div>
                </div>
            </form>
        </div>
        <!-- end.input -->

        <!-- wall -->
        <div id='wall'>
            @foreach($result as $key=>$val)
                @if($val->liked!=null)
                    @if(in_array(intval(Auth::user()->id),json_decode($val->liked)))
                        @php $like_class = 'fa fa-heart'; $like_style='color : #ef8494;'; @endphp
                    @else
                        @php $like_class = 'fa fa-heart-o'; $like_style=''; @endphp
                    @endif
                @else
                    @php $like_class = 'fa fa-heart-o'; $like_style=''; @endphp
                @endif
                <div class="card mb-4">
                    <div class="card-header-lg ">
                        <div class="m-1">
                            <a href="#">
                                <img src="{{$val->getUser->avatar}}" class="img-fluid rounded-circle image-post" alt="Profile image">
                            </a>
                        </div>
                        <div class="m-2 profile-header-name">
                            <div class="row">
                                <div class="header-name-post">
                                    <a href="#">
                                        <label class="font-header-name-post">{{$val->getUser->name}}</label>
                                    </a>
                                    @if($val->getShare!=null)
                                        แชร์จาก
                                        <label class="font-header-name-post">{{$val->getShare->getUser->name}}</label>
                                    @endif
                                </div>
                                <div class="action-more ml-auto">
                                    <div class="dropdown option-action-more">
                                        <span class="dropdown-toggle dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Save post</a>
                                            <a class="dropdown-item" href="#">Copy link</a>
                                            <a class="dropdown-item" href="#">Delete post</a>
                                            <a class="dropdown-item dropdown-item-last report_post" data-id='{{$val->id}}' href="#">Report post</a>
                                         </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown show font-header-date-post">
                                <label class="">{{$val->created_at}}</label>
                                <a class="" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-caret-right" aria-hidden="true"></i> Public
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Public</a>
                                    <a class="dropdown-item" href="#">Friends</a>
                                    <a class="dropdown-item" href="#">Spacific friends</a>
                                    <a class="dropdown-item" href="#">Only me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Body Card / Content Section  -->
                    <div class="card-body-lg">
                        <div class="m-2 post-content">
                            <p id='detail{{$val->id}}'>{{json_decode($val->detail)}}</p>
                            @if($val->getShare!=null)
                                <div class="row">
                                    <div class='col-md-1'></div>
                                    <div class='col-md-10'>
                                        <p>{{json_decode($val->getShare->detail)}}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="m-2 social-action">
                            <div class="p-2">
                                <a href="#" data-id='{{$val->id}}' class="like">
                                    <i id='i_like{{$val->id}}' class='{{$like_class}} fa-1x' style="{{$like_style}}"></i>&nbsp;&nbsp;
                                    <label class='icon-action' id='count_like{{$val->id}}'>{{count(json_decode($val->liked))}}</label>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="#" class="icon-comment">
                                    <span class="icon-action">{{count($val->getComment)}}</span>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="" data-id='{{$val->id}}' class="share">
                                    <i id='i_share{{$val->id}}' class='fa fa-share-alt fa-1x'></i>&nbsp;&nbsp;
                                    <label class="icon-action" id="count_share{{$val->id}}">{{$val->shared}}</label>
                                </a>
                            </div>
                        </div>
                    </div>

                    @foreach($val->getComment as $comment)
                        <div class="card-body-comment-lg">
                            <div class="m-2">
                                <a href="#">
                                    <img src="{{$comment->getUser->avatar}}" class="img-fluid rounded-circle image-friend-comment" alt="Profile image">
                                </a>
                            </div>
                            <div class="mx-2 profile-header-name-comment">
                                <div class="row">
                                    <div class="header-name-comment">
                                        <a href="#">
                                            <label class="font-header-friend-comment">{{$comment->getUser->name}}</label>
                                        </a>
                                    </div>
                                    <!-- Date friend comment -->
                                    <div class="dropdown show font-header-date-comment">
                                        <label class="date-comment">{{$comment->created_at}}</label>
                                            <a class="" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{$val->getUser->name}}
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Public</a>
                                                <a class="dropdown-item" href="#">Friends</a>
                                                <a class="dropdown-item" href="#">Spacific friends</a>
                                                <a class="dropdown-item" href="#">Only me</a>
                                            </div>
                                    </div>
                                    <!-- End date friend comment -->

                                    <!-- Strat commemt option -->
                                    <div class="comment-action-more ml-auto">
                                        <div class="dropdown option-action-more">
                                            <span class="dropdown-toggle dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Edit </a>
                                                <a class="dropdown-item" href="#">Delete </a>
                                                <a class="dropdown-item dropdown-item-last" href="#">Report </a>
                                             </div>
                                        </div>
                                    </div>
                                    <!-- End comment option -->
                                </div>
                            </div>
                            <div class="mx-2 post-comment">
                                <p class="mb-0">{{json_decode($comment->detail)}}</p>
                                <div class="comment-reply">
                                    <a href="#" class="text-reply">reply</a>
                                    <div class="mb-4 mt-2 reply-box">
                                        <div class="m-0">
                                          <a href="#">
                                            <img src="{{Auth::user()->avatar}}" class="img-fluid rounded-circle image-comment" alt="Profile image">
                                          </a>
                                        </div>
                                        <form method='post' class='reply_form'>
                                            <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                                            <input type="hidden" name="post_id" value="{{$val->id}}">
                                            <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                            <input type="hidden" name="partner_id" value="{{$comment->member_id}}">
                                            <div class="m-1 input-comment">
                                                <input type="text" class="form-control input-rounded detail_report" name='message' placeholder="Add a reply" aria-label="Search" aria-describedby="">
                                            </div>
                                            <div class="m-1 btn-reply-cmt">
                                                <input type="submit" class="btn btn-post reply-btn send_reply" value="REPLY">
                                            </div>
                                        </form>
                                    </div>
                                    @foreach($comment->getReply as $reply)
                                        <div class="box-reply">
                                            <div class="m-2">
                                                <a href="#">
                                                    <img src="{{$reply->getUser->avatar}}" class="img-fluid rounded-circle image-friend-comment" alt="Profile image">
                                                </a>
                                            </div>
                                            <div class="mx-2 profile-header-name-comment">
                                                <div class="row">
                                                    <div class="header-name-comment-reply">
                                                        <a href="#">
                                                            <label class="font-header-friend-comment">{{$reply->getUser->name}}</label>
                                                        </a>
                                                    </div>
                                                    <!-- Date friend comment -->
                                                    <div class="font-header-date-comment-reply">
                                                        <label class="date-comment">{{$reply->created_at}}</label>
                                                    </div>
                                                    <!-- End date friend comment -->

                                                    <!-- Strat commemt option -->
                                                    <div class="comment-action-more ml-auto">
                                                        <div class="dropdown option-action-more">
                                                            <span class="dropdown-toggle reply-dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Edit </a>
                                                                <a class="dropdown-item" href="#">Delete </a>
                                                             </div>
                                                        </div>
                                                    </div>
                                                    <!-- End comment option -->

                                                </div>
                                                <div class="mx-2 post-comment-reply">
                                                    <p class="mb-0">{{json_decode($reply->message)}}</p>
                                                    <a href="#" class="text-reply">reply</a>
                                                </div>
                                                        <!-- End post comment -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Footer Card / Comment section -->
                    <div class="card-footer-lg">
                        <div class="m-0">
                            <a href="#">
                                <img src="{{Auth::user()->avatar}}" class="img-fluid rounded-circle image-comment" alt="Profile image">
                            </a>
                        </div>
                        <form method='post' class='comment_form'>
                            <div class="m-1 input-comment">
                                <input type="hidden" name="post_id" value='{{$val->id}}'>
                                <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                                <input type="text" name='detail' class="form-control input-rounded detail_comment" placeholder="Add a comment" aria-label="Search" aria-describedby="">
                            </div>
                            <div class="m-1 btn-coment">
                                <input type="submit" class="btn btn-post send_comment" value="POST">
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- end.wall -->
    </div>

    <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="directMessageModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-msg">
                <form class='report_form'>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">บอกเราหน่อยว่าเกิดอะไรขึ้น</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name='post_id' id='post_id_for_report'>
                        @foreach($report_type as $row)
                            <input type="radio" name="report_type_id" id='report_type{{$row->report_type_id}}' value='{{$row->report_type_id}}'><label for='report_type{{$row->report_type_id}}'>&nbsp;{{$row->report_type_name}}</label><br>
                        @endforeach
                        <hr>
                        <div class="input-group input-search">
                            <input type="text" name='detail' id='report_detail' class="form-control input-rounded" placeholder="เหตุผล" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                    <div class='modal-footer'>
                        <button type="button" class="btn" data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                        <button type="submit" class="btn btn-post btn-sendReport">ดำเนินการต่อ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="actionFriendModal" tabindex="-1" role="dialog" aria-labelledby="directMessageModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-msg">
                <form class='action_friend_form'>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">action</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- action -->
                    </div>
                    <div class='modal-footer'>
                        <button type="button" class="btn" data-dismiss="modal" aria-label="Close">ย้อนกลับ</button>
                        <button type="submit" class="btn btn-post btn-sendReport">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="directMessageModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-content-msg">
                <form class='shareForm'>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">share</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                        <input type="hidden" name="post_share_id">
                        <input type="hidden" name="shared">
                        <textarea class="form-control post-box" name='detail'></textarea>
                        <br><hr><br>
                        <div class="row">
                            <div class='col-md-1'></div>
                            <div class='col-md-10'>
                                <label id='shared_detail'></label>
                            </div>
                        </div>
                    </div>
                    <div class='modal-footer'>
                        <button type="button" class="btn" data-dismiss="modal" aria-label="Close">ย้อนกลับ</button>
                        <button type="submit" class="btn btn-post">แชร์</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('jsbottom')
    <script src="{{asset('assets/global/plugins/alertifyjs/alertify.min.js')}}"></script>
    <script>
        $('.post_form').submit(function(event){
            event.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                method : "POST",
                url : url+"/post",
                dataType : 'json',
                data: data,
            }).done(function(rec){
                // prepend
            });
        });

        $('.comment_form').submit(function(event){
            event.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                method : "POST",
                url : url+"/comment",
                dataType : 'json',
                data: data,
            }).done(function(rec){
                // prepend
            });
        });

        $('.reply_form').submit(function(event){
            event.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                method : "POST",
                url : url+"/reply",
                dataType : 'json',
                data: data,
            }).done(function(rec){
                // prepend
            });
        });

        $('body').on('click', '.report_post', function () {
            $('#report_detail').val("");
            $("input[name='report_type_id']").prop("checked", false);
            var id = $(this).data('id');
            $('#post_id_for_report').val(id);
            $.ajax({
                method : 'get',
                url    : url+"/find_report/"+id,
            }).done(function(rec){
                if(rec){
                    $('#report_detail').val(rec.detail);
                    $("#report_type"+rec.report_type_id).prop("checked", true);
                }
            });
            $("#reportModal").modal('show');
        });

        $('.report_form').submit(function(event){
            event.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                method : "POST",
                url : url+"/report",
                dataType : 'json',
                data: data,
            }).done(function(rec){
                $("#reportModal").modal('hide');
                $("#actionFriendModal").modal('show');
            });
        });

        $('body').on('click','.like',function(){
            var id = $(this).data('id');
            var user_id = {{Auth::user()->id}};
            $.ajax({
                method : 'get',
                url    : url+"/like/"+id+"/"+user_id,
            }).done(function(rec){

                $('#count_like'+id).text(rec.count);
                if(rec.status==1){
                    $('#i_like'+id).removeClass('fa fa-heart-o').addClass('fa fa-heart');
                    $('#i_like'+id).css("color","#ef8494");
                }else{
                    $('#i_like'+id).removeClass('fa fa-heart').addClass('fa fa-heart-o');
                    $('#i_like'+id).removeAttr("style");
                }
            });
            event.preventDefault();
        });

        $('body').on('click','.share',function(){
            var id = $(this).data('id');
            var count = parseInt($('#count_share'+id).text());
            $('#shared_detail').text($('#detail'+id).text());
            $('input[name="post_share_id"]').val(id);
            $('input[name="shared"]').val(count);
            $("#shareModal").modal('show');
            event.preventDefault();
            /*$.ajax({
                method : 'get',
                url    : url+"/share/"+id+"/"+count,
            }).done(function(rec){
                $('#count_share'+id).text(rec);
            });
            event.preventDefault();*/
        });

        $('.shareForm').submit(function(event){
            var id = $("input[name='post_share_id']").val();
            var data = $(this).serialize();
            $.ajax({
                method : "POST",
                url : url+"/share",
                dataType : 'json',
                data: data,
            }).done(function(rec){
                $('#count_share'+id).text(rec);
                $("#shareModal").modal('hide');
            });
            event.preventDefault();
        });

        $('body').on('click','.btn-add-friend',function(event){
            event.preventDefault();
            var friend_id = $(this).data('friend-id');
            var now_id = "{{AUTH::guard('web')->user()->id}}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method : "POST",
                url : url+"/friend",
                dataType : 'json',
                data:{
                    friend_id:friend_id,
                    now_id:now_id
                }
            }).done(function(rec){
                if(rec){
                    alertify.message('save done');
                    $('.af'+friend_id).remove();
                }
                
            });
        });

        // get cursor position
        /*var caretPos;
        var textAreaTxt;
        
        $(document).on("click keyup", function() {
            var $txt = $("#detail");
            caretPos = $txt[0].selectionStart;
            textAreaTxt = $txt.val();
        });

        $('body').on('click', '.emoji', function () {
            var id = $(this).data('id');
            var old_text = $('#detail').val();
            var new_text = old_text+id;
            $('#detail').val(new_text);
            return false;
        })*/
        // end.get cursor position

    </script>
@endsection