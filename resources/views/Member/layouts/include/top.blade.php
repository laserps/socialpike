        <!-- start main nav -->
        <nav class="bg-pink">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-2">
                            <a class="navbar-brand" href="#" style="color: #ffffff">LOGO</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="nav-top-right justify-content-end">
                            <form class="form-inline my-2 my-lg-0">
                                <div class="input-group">
                                    <input type="text" class="form-control input-rounded" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-rounded" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="p-2">
                                <div class="nav-top-image">
                                    <img src="{{$profile->avatar}}" class="img-fluid rounded-circle " alt="Profile image">
                                </div>
                            </div>
                            <div class="py-2">
                                <a class="nav-link px-0" href="#">
                                    <h5 class="my-1">{{$profile->name}}</h5>
                                </a>
                            </div>

                            <div class="p-2">
                                <a class="nav-link badge1" data-badge="27" href="#" ><i class="fa fa-bell fa-lg" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="p-2">
                                <a class="nav-link badge1" data-badge="27" href="#"><i class="fa fa-comment fa-lg" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="p-2">
                                <a class="nav-link" href="#"><i class="fa fa-ellipsis-h fa-lg" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end main nav -->
        <!-- start header -->
        <section class="" id="section-top">
	  		<div class="jumbotron master">
	  			<div class="cover-jumbotron">
	  				<div class="container">
	  					<div class="row">
	  						<div class="col-md-8 ml-auto displayTitle">
	  							<div class="displayName">
	  								<h2>{{$user->name}}</h2>
	  							</div>
	  							<div class="displayOption ml-auto d-flex flex-row">
	  								<div class="btn-header-direct-msg">
							    		<button class="btn btn-directMsg"  data-toggle="modal" data-target="#directMessageModal"> <i class="fa fa-comment-o" aria-hidden="true"></i> </button>
							    	</div>
	  								<div class="btn-header-rec-friend-title ">
							    		<button class="btn btn-normal btn-sm"> Follow </button>
							    	</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="container" style="position: relative;">
	  				<div class="image">
						<img src="{{$user->avatar}}" alt="Circle Image" class="rounded-circle img-fluid">
					</div>
	  			</div>
			</div>  			
  		</section>
        <!-- end hearder -->

        <section class="section" id="section-menu">
  			<div class="container">
  				<div class="row">
  					<div class="col-12 col-md-8 ml-auto">
  						<div class="menu-bar">
			  				<ul class="nav nav-tabs mr-0">
                                <li class="nav-item">
                                    <a class="nav-link {{$topbar=='post'?'active':''}}" href="{{url('/')}}">Post</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{$topbar=='info'?'active':''}}" href ="{{url('/info')}}">Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{$topbar=='friend'?'active':''}}" href="{{url('/friend')}}">Friend</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{$topbar=='album'?'active':''}}" href="{{url('/album')}}">Photo</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                                <li class="nav-item btn-nav ml-auto">
                                    @if( Auth::guard('web')->check() && Auth::guard('web')->user()->id==$user->id && $topbar!=='profile')
                                        <a class="btn btn-ghost" href="{{url('/profile')}}">Edit Profile</a>
                                    @elseif( Auth::guard('web')->check() && Auth::guard('web')->user()->id!==$user->id && \App\Http\Controllers\Member\FriendController::checkFriend(Auth::guard('web')->user()->id,$user->id)=='F' )
                                        <a class="btn btn-ghost btn-add-friend af{{$user->id}}" href="#" data-friend-id="{{$user->id}}">Add Friend</a>
                                    @endif
                                </li>
							</ul>
			  			</div>
  					</div>
  				</div>
  			</div>
  		</section>