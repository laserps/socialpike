					<div class="col-md-4">
						
						<div class="row">
							<div class="col-12 mb-4">
								<div class="card">
								  	<div class="card-body-xs">
									    <h5>About Me</h5>
									    <div class="profile-header">
									    	<span class="profile-header-icon"><i class="fa fa-gift" aria-hidden="true"></i></span>
									    	<span class="profile-header-text">Born on {{date('F, Y', strtotime($user->birthday))}}</span>
									    </div>
									    <div class="profile-header">
									    	<span class="profile-header-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
									    	<span class="profile-header-text">Joined {{date('F, Y', strtotime($user->created_at))}}</span>
									    </div>
									    <div class="profile-header">
									    	<span class="profile-header-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
									    	<span class="profile-header-text">friends 300</span>
									    	<br><br><hr>
									  	</div>
									 </div>
								</div>
							</div> <!-- About Me -->
							<div class="col-12  mb-4">
								<div class="card">
								  <div class="card-body-xs">
								    <h5>People you should meet</h5>
									    <div class="nf-item">
									    	<a href="#">
										    	<img src="{{asset('assets/member/assets/images/girl4.jpg')}}" class="img-fluid rounded-circle image-rec-friend" alt="Profile image">
										    </a>
										    <a href="#">
										    	<label class="font-header-rec-friend">Allison Clayborne</label>
										    </a>
										    	<div class="btn-header-rec-friend">
										    		<button class="btn btn-normal btn-sm"> Follow </button>
										    	</div>
									    	
									    </div>
									    <div class="nf-item">
									    	<a href="#">
										    	<img src="{{asset('assets/member/assets/images/girl2.jpg')}}" class="img-fluid rounded-circle image-rec-friend" alt="Profile image">
										    </a>
										    <a href="#">
										    	<label class="font-header-rec-friend">Allison Clayborne</label>
										    </a>
										    	<div class="btn-header-rec-friend">
										    		<button class="btn btn-normal btn-sm"> Follow </button>
										    	</div>
									    </div>
									    <div class="nf-item">
									    	<a href="#">
										    	<img src="{{asset('assets/member/assets/images/girl3.jpg')}}" class="img-fluid rounded-circle image-rec-friend" alt="Profile image">
										    </a>
										    <a href="#">
										    	<label class="font-header-rec-friend">Allison Clayborne</label>
										    </a>
										    	<div class="btn-header-rec-friend">
										    		<button class="btn btn-normal btn-sm"> Follow </button>
										    	</div>
									    	
									    </div>
									    <div class="leftSide-viewAll">
									    	<label class="viewAll"><i class="fa fa-user" aria-hidden="true"></i> View all</label>
									    </div>
								  </div>
								</div>
							</div> <!-- Friends -->
							<div class="col-12  mb-4">
								<div class="card">
									<div class="card-body-xs">
										<h5>Top trend</h5>
										<div class="topTrend-item">
											<a href="#">#shoes</a>
										</div>
										<div class="topTrend-item">
											<a href="#" class="hashtag">#shoes</a>
										</div>
										<div class="topTrend-item">
											<a href="#" class="hashtag">#shoes</a>
										</div>
										<div class="topTrend-item">
											<a href="#" class="hashtag">#shoes</a>
										</div>
										<div class="topTrend-item">
											<a href="#" class="hashtag">#shoes</a>
										</div>
										<div class="topTrend-item">
											<a href="#" class="hashtag">#shoes</a>
										</div>
										<div class="topTrend-item">
											<a href="#" class="hashtag">#shoes</a>
										</div>
										<div class="topTrend-item">
											<a href="#" class="hashtag">#shoes</a>
										</div>
										<div class="topTrend-item">
											<a href="#" class="hashtag">#shoes</a>
										</div>
										<div class="topTrend-item">
											<a href="#" class="hashtag">#shoes</a>
										</div>
										<div class="leftSide-viewAll">
											<label class="viewAll">View all</label>
										</div>
									</div>
								</div>
							</div> <!-- Trend -->
						
						</div>
					</div>