@extends('Member.layouts.app')

@section('cssbottom')
@endsection

@section('content')
    <div class="col-12 col-md-8">
        <!-- input -->
        <div class="card mb-4">
            <form id='post'>
                <textarea class='form-control' name='detail'></textarea>
                <div class="col-md-2 pull-right">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                        <a class="dropdown-item dropdown-item-last" href="#">Report post</a>
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
                        <p>{{$val->detail}}</p>
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
                            <p>{{$comment->detail}}</p>
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
                                                    <p class="mb-0">{{$reply->message}}</p>
                                                </div>
                                                <!-- End post comment -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <form method='post' name='comment' action="{{asset('/reply')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="post_id" value="{{$val->id}}">
                                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                    <input type="hidden" name="partner_id" value="{{$comment->member_id}}">
                                    <div class="m-1 input-comment">
                                        <input type="text" class="form-control input-rounded" name='message' placeholder="Add a reply" aria-label="Search" aria-describedby="">
                                    </div>
                                    <div class="m-1 btn-coment">
                                        <input type="submit" class="btn btn-post" value="reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Footer Card / Comment section -->

                <div class="card-footer-lg">
                    <div class="m-0">
                        <a href="#">
                            <img src="http://localhost/socialpike/public/assets/member/assets/images/girl.jpg" class="img-fluid rounded-circle image-comment" alt="Profile image">
                        </a>
                    </div>
                    <form method='post' name='comment' action="{{asset('/comment')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="post_id" value="{{$val->id}}">
                        <div class="m-1 input-comment">
                            <input type="text" class="form-control input-rounded" name='detail' placeholder="Add a comment" aria-label="Search" aria-describedby="">
                        </div>
                        <div class="m-1 btn-coment">
                            <input type="submit" class="btn btn-post" value="POST">
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <!-- end.wall -->
    </div>
@endsection

@section('jsbottom')
    <script>

        $('[name="comment"]').submit(function () {
            sendContactForm();
            return false;
        });

        $("#post").validate({
            rules: {
                /*num_doc: "required",
                date_doc: "required",
                department_id: "required",
                user_recorder: "required",
                user_recipient: "required",*/
            },
            messages: {
                /*num_doc: "กรุณาระบุเลขที่เอกสาร",
                date_doc: "กรุณาระบุวันที่เอกสาร",
                department_id: "กรุณาเลือกแผนก",
                user_recorder: "กรุณาเลือกผู้บันทึก",
                user_recipient: "กรุณาเลือกผู้รับสินค้า",*/
            },
            errorElement: "span",
            errorPlacement: function ( error, element ) {
                error.addClass( "help-block" );
                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
                } else {
                    error.insertAfter( element );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents('.form-group').addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).parents('.form-group').addClass( "has-success" ).removeClass( "has-error" );
            },
            submitHandler: function(form){
                var btn = $(form).find('[type="submit"]');
                $.ajax({
                    method : "POST",
                    url : url+"/post",
                    dataType : 'json',
                    data : $(form).serialize()
                }).done(function(rec){
                    /*if(rec.type == 'success'){
                        $('#infoModal').modal('hide');
                        swal({
                            confirmButtonText:'ตกลง',title: rec.title,text: rec.text,type: rec.type
                        }).then((rec) => {
                            if(rec) {
                                dataTableList.api().ajax.reload();
                                form.reset();
                                location.reload();
                            }
                        });
                    }else{
                        swal({
                            confirmButtonText:'ตกลง',title: rec.title,text: rec.text,type: rec.type
                        });
                    }*/
                });
            }
        });
    </script>
@endsection
