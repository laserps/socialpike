@extends('Member.layouts.app')

@section('cssbottom')
@endsection

@section('content')
    <div class="col-12 col-md-8">
        <!-- input -->
        <div class="card mb-4">
            <form class='post_form'>
                <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                <textarea class='form-control' name='detail'></textarea>
                <div class="col-md-2 pull-right">
                    <div class="dropdown option-action-more">
                        <span class="dropdown-toggle dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <div class="row">
                                <a href='' data-id='{{Emoji::findByName("sunglasses")}}' class='emoji'>{{Emoji::findByName("sunglasses")}}</a>
                                <a href='' data-id='{{Emoji::findByName("sunglasses")}}' class='emoji'>{{Emoji::findByName("sunglasses")}}</a>
                                <a href='' data-id='{{Emoji::findByName("sunglasses")}}' class='emoji'>{{Emoji::findByName("sunglasses")}}</a>
                                <a href='' data-id='{{Emoji::findByName("sunglasses")}}' class='emoji'>{{Emoji::findByName("sunglasses")}}</a>
                                <a href='' data-id='{{Emoji::findByName("sunglasses")}}' class='emoji'>{{Emoji::findByName("sunglasses")}}</a>
                                <a href='' data-id='{{Emoji::findByName("sunglasses")}}' class='emoji'>{{Emoji::findByName("sunglasses")}}</a>
                            </div>
                        </div>
                    </div>
                    <button type='submit' class='btn btn-success'>post</button>
                </div>
            </form>
        </div>
        <!-- end.input -->

        <!-- wall -->
        @foreach($result as $key=>$val)
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
                            </div>
                            <div class="action-more ml-auto">
                                <div class="dropdown option-action-more">
                                    <span class="dropdown-toggle dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Save post</a>
                                        <a class="dropdown-item" href="#">Copy link</a>
                                        <a class="dropdown-item" href="#">Delete post</a>
                                        <a class="dropdown-item dropdown-item-last report_post" data-id='{{$val->id}}'>Report post</a>
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
                        <p>{{json_decode($val->detail)}}</p>
                    </div>
                    <div class="m-2 social-action">
                        <div class="p-2">
                            <a href="#" class="icon-like">
                                <span class="icon-action">{{$val->liked}}</span>
                            </a>                                        
                        </div>
                        <div class="p-2">
                            <a href="#" class="icon-comment">
                                <span class="icon-action">{{count($val->getComment)}}</span>
                            </a>
                        </div>
                        <div class="p-2">
                            <a href="#" class="icon-share">
                                <span class="icon-action">{{$val->shared}}</span>
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
                                <div class="dropdown show font-header-date-comment">
                                    <label class="date-comment">{{$comment->created_at}}</label>
                                        <a class="" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i>{{$val->getUser->name}}
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Public</a>
                                            <a class="dropdown-item" href="#">Friends</a>
                                            <a class="dropdown-item" href="#">Spacific friends</a>
                                            <a class="dropdown-item" href="#">Only me</a>
                                        </div>
                                </div>
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
                            </div>
                        </div>

                        <!-- reply -->
                        <div class="mx-2 post-comment">
                            <p>{{json_decode($comment->detail)}}</p>
                            <div class="comment-reply">
                                <a href="#" class="text-reply">reply</a>
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

                                                <!-- Start comment option -->
                                                <div class="comment-action-more ml-auto">
                                                    <div class="dropdown option-action-more">
                                                        <span class="dropdown-toggle reply-dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End comment option -->
                                                <!-- Start post comment -->
                                                <div class="mx-2 post-comment-reply">
                                                    <p class="mb-0">{{json_decode($reply->message)}}</p>
                                                </div>
                                                <!-- End post comment -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <form method='post' class='reply_form'>
                                    <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                                    <input type="hidden" name="post_id" value="{{$val->id}}">
                                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                    <input type="hidden" name="partner_id" value="{{$comment->member_id}}">
                                    <div class="m-1 input-comment">
                                        <input type="text" class="form-control input-rounded detail_report" name='message' placeholder="Add a reply" aria-label="Search" aria-describedby="">
                                    </div>
                                    <div class="m-1 btn-coment">
                                        <input type="submit" class="btn btn-post send_reply" value="reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="card-footer-lg">
                    <div class="m-0">
                        <a href="#">
                            <img src="http://localhost/socialpike/public/assets/member/assets/images/girl.jpg" class="img-fluid rounded-circle image-comment" alt="Profile image">
                        </a>
                    </div>
                    <form method='post' class='comment_form'>
                        <div class="m-1 input-comment">
                            <input type="hidden" name="post_id" value='{{$val->id}}'>
                            <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                            <input type="text" name='detail' class="form-control input-rounded detail_comment" placeholder="Add a comment" aria-label="Search" aria-describedby="">
                        </div>
                        <div class="m-1 btn-coment">
                            <input type="submit" class="btn btn-post send_comment" value="comment">
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
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
                            <input type="radio" name="report_type_id" id='type{{$row->report_type_id}}' value='{{$row->report_type_id}}'><label for='type{{$row->report_type_id}}'>&nbsp;{{$row->report_type_name}}</label><br>
                        @endforeach
                        <hr>
                        <div class="input-group input-search">
                            <input type="text" name='detail' class="form-control input-rounded" placeholder="เหตุผล" aria-label="Search" aria-describedby="basic-addon2">
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

    <div class="modal fade" id="report1Modal" tabindex="-1" role="dialog" aria-labelledby="directMessageModalTitle" aria-hidden="true">
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
                            <input type="radio" name="report_type_id" id='type{{$row->report_type_id}}' value='{{$row->report_type_id}}'><label for='type{{$row->report_type_id}}'>&nbsp;{{$row->report_type_name}}</label><br>
                        @endforeach
                        <hr>
                        <div class="input-group input-search">
                            <input type="text" name='detail' class="form-control input-rounded" placeholder="เหตุผล" aria-label="Search" aria-describedby="basic-addon2">
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

@endsection

@section('jsbottom')
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
            var id = $(this).data('id');
            $('#post_id_for_report').val(id);
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
                $("#report1Modal").modal('show');
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
