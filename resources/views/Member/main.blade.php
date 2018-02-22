@extends('Member.layouts.app')

@section('cssbottom')
@endsection

@section('content')
    <div class="col-12 col-md-8">


<!-- ##################### BOX POST ############################ -->
<div class="card mb-4">
							<!-- Header Card / Display and Name Section  -->
							<div class="card-header-lg ">
						    	<div class="m-1">
						    		<a href="#">
						    			<img src="assets/images/girl.jpg" class="img-fluid rounded-circle image-post-box" alt="Profile image">
						    		</a>
						    	</div>
						  	</div>
						  	<!-- Body Card / Content Section  -->
						  	<div class="card-body-lg">
						  		<div class="post-content">
									<div class="px-2">
										<div class="form-group">
										    <textarea class="form-control post-box" id="addPost" placeholder="Add a comment"></textarea>
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
								<div class="m-1 btn-coment" >
						    		<input type="submit" name="post" class="btn btn-post" value="POST">
						    	</div>
						  	</div>
						  	<!-- Footer Card / Comment section -->
<!-- 						  	<div class="card-footer-lg">


							</div> -->
						</div>

<!-- ##################### BOX POST ############################ -->
						<!-- Start Post -->
<!-- ##################### FIRST POST ############################ -->
						<div class="card mb-4">
							<!-- Header Card / Display and Name Section  -->
							<div class="card-header-lg ">
						    	<div class="m-1">
						    		<a href="#">
						    			<img src="assets/images/girl.jpg" class="img-fluid rounded-circle image-post" alt="Profile image">
						    		</a>
						    	</div>
						    	<div class="m-2 profile-header-name">
						    		<div class="row">
						    			<div class="header-name-post">
							    			<a href="#">
								    			<label class="font-header-name-post">Allison Clayborne</label>
								    		</a>
						    			</div>
							    		<div class="action-more ml-auto">
											<div class="dropdown option-action-more">
												<span class="dropdown-toggle dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

												</span>
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
					    				<label class="">30 Jan 2017 </label>
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
						  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
						  			<div class="image-post-content">
						  				<a href="#">
						  					<img src="assets/images/post-test.jpg" class="img-fluid" alt="Profile image">
						  				</a>
						  			</div>
						  		</div>
						  		<div class="m-2 social-action">
									<div class="p-2">
										<a href="#" class="icon-like">
											<span class="icon-action">20</span>
										</a>
									</div>
									<div class="p-2">
										<a href="#" class="icon-comment">
											<span class="icon-action"></span>
										</a>
									</div>
									<div class="p-2">
										<a href="#" class="icon-share" data-toggle="modal" data-target="#shareModal">
											<span class="icon-action">1</span>
										</a>

									</div>

						  		</div>
						  	</div>
						  	<!-- Footer Card / Comment section -->
						  	<div class="card-footer-lg">
						    	<div class="m-0">
						    		<a href="#">
						    			<img src="assets/images/girl.jpg" class="img-fluid rounded-circle image-comment" alt="Profile image">
						    		</a>
						    	</div>
						    	<div class="m-1 input-comment">
						    		<div class="input-group">
							    		<input type="text" class="form-control input-rounded" placeholder="Add a comment" aria-label="Add a comment" aria-describedby="">
							    			<span class="input-group-btn">
							    				<span class="btn btn-file camera-color">
									    			<span class="fa fa-picture-o"></span>
						         				 		<input type="file" accept="image/png, image/jpeg, image/gif"/>
					         				 	</span>
				         				 	</span>
							    			<span class="input-group-btn">
							    				<span class="btn btn-file last-button">
							    					<span class="fa fa-smile-o"></span>
				         				 				<input type="file" accept="image/png, image/jpeg, image/gif"/>
				         				 		</span>
				         				 	</span>
							    	</div>
						    	</div>
						    	<div class="m-1 btn-coment" >
						    		<input type="submit" name="post" class="btn btn-post" value="POST">
						    	</div>
							</div>
						</div>
<!-- ##################### Second POST ############################ -->
						<div class="card mb-4">
							<!-- Header Card / Display and Name Section  -->
							<div class="card-header-lg ">
						    	<div class="m-1">
						    		<a href="#">
						    			<img src="assets/images/girl.jpg" class="img-fluid rounded-circle image-post" alt="Profile image">
						    		</a>
						    	</div>
						    	<div class="m-2 profile-header-name">
						    		<div class="row">
						    			<div class="header-name-post">
							    			<a href="#">
								    			<label class="font-header-name-post">Allison Clayborne</label>
								    		</a>
						    			</div>
							    		<div class="action-more ml-auto">
											<div class="dropdown option-action-more">
												<span class="dropdown-toggle dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

												</span>
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
					    				<label class="">30 Jan 2017 </label>
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
						  			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  <a href="#" class="hashtag">#image</a></p>
						  		</div>
						  		<div class="m-2 social-action">
									<div class="p-2">
										<a href="#" class="icon-like">
											<span class="icon-action">20</span>
										</a>
									</div>
									<div class="p-2">
										<a href="#" class="icon-comment">
											<span class="icon-action"></span>
										</a>
									</div>
									<div class="p-2">
										<a href="#" class="icon-share">
											<span class="icon-action">1</span>
										</a>
									</div>
						  		</div>
						  	</div>

						  	<!-- Friends Comment -->
						  	<div class="card-body-comment-lg">
						  		<div class="m-2">
						  			<a href="#">
						    			<img src="assets/images/girl5.jpg" class="img-fluid rounded-circle image-friend-comment" alt="Profile image">
						    		</a>
						  		</div>
						  		<div class="mx-2 profile-header-name-comment">
						    		<div class="row">
						    			<div class="header-name-comment">
							    			<a href="#">
								    			<label class="font-header-friend-comment">Penny Huston</label>
								    		</a>
						    			</div>
							    		<!-- Date friend comment -->
						    			<div class="dropdown show font-header-date-comment">
						    				<label class="date-comment">30 Jan 2017 </label>
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
						    <!-- Reply Comment -->
						  		<div class="mx-2 post-comment">
						  			<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  <a href="#" class="hashtag">#image</a></p>
						  			<div class="comment-reply">
						  				<a href="#" class="text-reply">reply</a>
						  				<div class="mb-4 mt-2 reply-box">
					                        <div class="m-0">
					                          <a href="#">
					                            <img src="assets/images/girl.jpg" class="img-fluid rounded-circle image-comment" alt="Profile image">
					                          </a>
					                        </div>
					                        <div class="m-1 input-comment">
					                          <input type="text" class="form-control input-rounded" placeholder="Reply a comment" aria-label="Search" aria-describedby="">
					                        </div>
					                        <div class="m-1 btn-reply-cmt">
					                          <input type="submit" name="post" class="btn btn-post reply-btn" value="REPLY">
					                        </div>
					                    </div>
						  				<div class="box-reply">
						  					<!-- <div class="row"> -->
										  		<div class="m-2">
										  			<a href="#">
										    			<img src="assets/images/men1.jpg" class="img-fluid rounded-circle image-friend-comment" alt="Profile image">
										    		</a>
										  		</div>
										  		<div class="mx-2 profile-header-name-comment">
										    		<div class="row">
										    			<div class="header-name-comment-reply">
											    			<a href="#">
												    			<label class="font-header-friend-comment">Adam Huston</label>
												    		</a>
										    			</div>
											    		<!-- Date friend comment -->
										    			<div class="font-header-date-comment-reply">
										    				<label class="date-comment">30 Jan 2017 </label>
														</div>
														<!-- End date friend comment -->

														<!-- Strat commemt option -->
											    		<div class="comment-action-more ml-auto">
															<div class="dropdown option-action-more">
																<span class="dropdown-toggle reply-dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

																</span>
																<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
																    <a class="dropdown-item" href="#">Edit </a>
																    <a class="dropdown-item" href="#">Delete </a>
																 </div>
															</div>
														</div>
														<!-- End comment option -->

										    		</div>
										    																<!-- Start post comment -->
														<div class="mx-2 post-comment-reply">
						  									<p class="mb-0">It is a long established It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layo <a href="#" class="hashtag">#image</a></p>
						  									<a href="#" class="text-reply">reply</a>
						  								</div>
						  								<!-- End post comment -->
										    	</div>
						  					<!-- </div> -->
						  				</div>
						  			</div>
						  		</div>
						  	</div>

						  	<!-- Footer Card / Comment section -->
						  	<div class="card-footer-lg">
						    	<div class="m-0">
						    		<a href="#">
						    			<img src="assets/images/girl.jpg" class="img-fluid rounded-circle image-comment" alt="Profile image">
						    		</a>
						    	</div>
						    	<div class="m-1 input-comment">
						    		<input type="text" class="form-control input-rounded" placeholder="Add a comment" aria-label="Search" aria-describedby="">
						    	</div>
						    	<div class="m-1 btn-coment" >
						    		<input type="submit" name="post" class="btn btn-post" value="POST">
						    	</div>
							</div>
						</div>

<!-- ##################### Third POST ############################ -->
						<div class="card mb-4">
							<!-- Header Card / Display and Name Section  -->
							<div class="card-header-lg ">
						    	<div class="m-1">
						    		<a href="#">
						    			<img src="assets/images/girl.jpg" class="img-fluid rounded-circle image-post" alt="Profile image">
						    		</a>
						    	</div>
						    	<div class="m-2 profile-header-name">
						    		<div class="row">
						    			<div class="header-name-post">
							    			<a href="#">
								    			<label class="font-header-name-post">Allison Clayborne</label>
								    		</a>
						    			</div>
							    		<div class="action-more ml-auto">
											<div class="dropdown option-action-more">
												<span class="dropdown-toggle dropdown-action-more" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

												</span>
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
					    				<label class="">30 Jan 2017 </label>
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
						  			<p>You can have your video start playing automatically when a user visits that page by adding a simple parameter to your YouTube URL. <a href="#" class="hashtag">#image</a> <a href="#" class="hashtag">#chicken</a> </p>
						  			<div class="image-post-content">
						  				<iframe width="100%" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0"></iframe>
						  			</div>
						  		</div>
						  		<div class="m-2 social-action">
									<div class="p-2">
										<a href="#" class="icon-like">
											<span class="icon-action">20</span>
										</a>
									</div>
									<div class="p-2">
										<a href="#" class="icon-comment">
											<span class="icon-action"></span>
										</a>
									</div>
									<div class="p-2">
										<a href="#" class="icon-share">
											<span class="icon-action">1</span>
										</a>

									</div>

						  		</div>
						  	</div>
						  	<!-- Footer Card / Comment section -->
						  	<div class="card-footer-lg">
						    	<div class="m-0">
						    		<a href="#">
						    			<img src="assets/images/girl.jpg" class="img-fluid rounded-circle image-comment" alt="Profile image">
						    		</a>
						    	</div>
						    	<div class="m-1 input-comment">
						    		<input type="text" class="form-control input-rounded" placeholder="Add a comment" aria-label="Search" aria-describedby="">
						    	</div>
						    	<div class="m-1 btn-coment" >
						    		<input type="submit" name="post" class="btn btn-post" value="POST">
						    	</div>
							</div>
						</div>


    </div>

    <!-- ############################### Modal ######################################-->
	<!-- Modal Direct MSG -->
    <div class="modal fade" id="directMessageModal" tabindex="-1" role="dialog" aria-labelledby="directMessageModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-msg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Direct Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-menu">
                <div class="nav nav-tabs menu-bar" id="nav-tab" role="tablist">
                    <ul class="nav nav-tabs mr-0" id="nav-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-message-tab" data-toggle="tab" href="#nav-message" role="tab" aria-controls="nav-message" aria-selected="true">Message</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-online-tab" data-toggle="tab" href="#nav-online" role="tab" aria-controls="nav-online" aria-selected="false">Online</a>
                        </li>
                    </ul>
                </div>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane show active" id="nav-message" role="tabpanel" aria-labelledby="nav-message-tab">
                        <div class="modal-body">
                            <div class=""> <!-- Search Chat-->
                                <form class="form-inline my-2 my-lg-0">
                                    <div class="input-group input-search">
                                        <input type="text" class="form-control input-rounded" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-rounded" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- End Search Chat-->
                            <!-- First Chat -->
                            <div class="all-chat">
                                <div class="nf-item d-flex flex-row">
                                    <div class="py-3 px-4">
                                        <a href="#">
                                            <img src="{{asset('assets/member/assets/images/girl2.jpg')}}" class="img-fluid rounded-circle image-friend-comment" alt="Profile image">
                                        </a>
                                    </div>
                                    <div class="p-3 pl-5">
                                        <a href="#">
                                            <label class="">Penny Huston</label>
                                        </a>
                                            <p>Hello</p>
                                    </div>
                                    <div class="p-3 ml-auto">
                                        <p style="margin-bottom: 0rem;"> 3 m</p>
                                        <a href="#">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- End First Chat-->
                            <!-- Second Chat -->
                            <div class="all-chat">
                                <div class="nf-item d-flex flex-row">
                                    <div class="py-3 px-4">
                                        <a href="#">
                                            <img src="{{asset('assets/member/assets/images/girl2.jpg')}}" class="img-fluid rounded-circle image-friend-comment" alt="Profile image">
                                        </a>
                                    </div>
                                    <div class="p-3 pl-5">
                                        <a href="#">
                                            <label class="">Penny Huston</label>
                                        </a>
                                            <p>Hello</p>
                                    </div>
                                    <div class="p-3 ml-auto">
                                        <p style="margin-bottom: 0rem;"> 3 m</p>
                                        <a href="#">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- End Second Chat -->
                        </div>
                    </div>
                    <!-- Tab Online -->
                    <div class="tab-pane " id="nav-online" role="tabpanel" aria-labelledby="nav-online-tab">
                        <div class="modal-body">
                            <div class="">
                                <form class="form-inline my-2 my-lg-0">
                                    <div class="input-group input-search">
                                        <input type="text" class="form-control input-rounded" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-rounded" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="all-chat">
                                <div class="nf-item d-flex flex-row">
                                    <div class="py-3 pr-4">
                                        <a href="#">
                                            <img src="{{asset('assets/member/assets/images/girl4.jpg')}}" class="img-fluid rounded-circle image-friend-comment" alt="Profile image">
                                        </a>
                                    </div>
                                    <div class="py-4 px-5">
                                        <a href="#">
                                            <label class="">Allison Clayborne</label>
                                        </a>
                                    </div>
                                    <div class="py-4 ml-auto">
                                        <button type="button" class="btn btn-post" data-toggle="modal" data-target="#chatModal">Chat</button>
                                    </div>
                                </div>
                            </div>
                            <div class="all-chat">
                                <div class="nf-item d-flex flex-row">
                                    <div class="py-3 pr-4">
                                        <a href="#">
                                            <img src="{{asset('assets/member/assets/images/girl3.jpg')}}" class="img-fluid rounded-circle image-friend-comment" alt="Profile image">
                                        </a>
                                    </div>
                                    <div class="py-4 px-5">
                                        <a href="#">
                                            <label class="">Allison Clayborne</label>
                                        </a>
                                    </div>
                                    <div class="py-4 ml-auto">
                                        <button type="button" class="btn btn-post" data-toggle="modal" data-target="#chatModal">Chat</button>
                                    </div>
                                </div>
                            </div>
                            <div class="all-chat">
                                <div class="nf-item d-flex flex-row">
                                    <div class="py-3 pr-4">
                                        <a href="#">
                                            <img src="{{asset('assets/member/assets/images/men2.jpg')}}" class="img-fluid rounded-circle image-friend-comment" alt="Profile image">
                                        </a>
                                    </div>
                                    <div class="py-4 px-5">
                                        <a href="#">
                                            <label class="">John Clayborne</label>
                                        </a>
                                    </div>
                                    <div class="py-4 ml-auto">
                                        <button type="button" class="btn btn-post" data-toggle="modal" data-target="#chatModal">Chat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="tab-pane " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">..CCC.</div>
                </div>
            </div>
        </div>
    </div>

	<!-- Modal Share -->
    <div class="modal fade " id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-content-msg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Share post now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="px-4 pt-4" style="border-top: 1px solid #ddd;">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add a comment"></textarea>
                        </div>
                    </div>
                    <!-- <div class="card mb-4"> -->
                        <!-- Header Card / Display and Name Section  -->
                        <div class="card-header-lg ">
                            <div class="m-1">
                                <a href="#">
                                    <img src="{{asset('assets/member/assets/images/girl.jpg')}}" class="img-fluid rounded-circle image-post" alt="Profile image">
                                </a>
                            </div>
                            <div class="m-2 profile-header-name">
                                <div class="row">
                                    <div class="header-name-post">
                                        <a href="#">
                                            <label class="font-header-name-post">Allison Clayborne</label>
                                        </a>
                                    </div>
                                </div>

                                <div class="dropdown show font-header-date-post">
                                    <label class="">30 Jan 2017 </label>
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
                                <p>You can have your video start playing automatically when a user visits that page by adding a simple parameter to your YouTube URL. <a href="#" class="hashtag">#image</a> <a href="#" class="hashtag">#chicken</a> </p>
                                <div class="image-post-content">
                                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0"></iframe>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-post">Share</button>
            </div>
            </div>
        </div>
    </div>

	<!-- Modal -->
	<div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="chatModalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content modal-content-msg">
			<div class="modal-header text-center">

				<h5 class="modal-title" id="exampleModalLongTitle">Sheldon Cupper</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="chatBox">
					
				</div>
			</div>
				<div class="card-footer-lg">
					<div class="m-0">
						<a href="#">
							<img src="{{asset('assets/member/assets/images/girl.jpg')}}" class="img-fluid rounded-circle image-comment" alt="Profile image">
						</a>
					</div>
					<div class="m-1 input-comment">
						<div class="input-group">
							<input type="text" class="form-control input-rounded" placeholder="Write something" aria-label="Search" aria-describedby="">
								<span class="input-group-btn">
									<span class="btn btn-file camera-color">
										<span class="fa fa-camera"></span>
											<input type="file" accept="image/png, image/jpeg, image/gif"/>
									</span>
								</span>
								<span class="input-group-btn">
									<span class="btn btn-file last-button">
										<span class="fa fa-smile-o"></span>
											<input type="file" accept="image/png, image/jpeg, image/gif"/>
									</span>
								</span>
						</div>
					</div>
					<div class="m-1 btn-coment" >
						<input type="submit" name="post" class="btn btn-post" value="POST">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('jsbottom')
@endsection
