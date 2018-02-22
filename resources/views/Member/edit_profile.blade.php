@extends('Member.layouts.app')

@section('cssbottom')
@endsection

@section('content')
    <div class="col-12 col-md-8">
						<!-- Start Post -->
						<!-- ##################### FIRST POST ############################ -->
						<div class="card mb-4">


							<h3 class="my-3 mx-3">
								<i class="fa fa-cog fa-lg mt-4 profilesetting-icon-color"></i> Edit Profile</h3>
							<h4 class="profilesetting-text-darkgray mx-3">Themes</h4>



							<!-- ########################## Themmes ###################################### -->
							<div class="row mx-3">
								<!-- Themes1 -->
								<div class="col-6 col-md-4">
									<div class="col-12">
										<img src="{{asset('assets/member/assets/images/Theme-right.png')}}" class="profilesetting-theme-100 my-3">
									</div>
									<div class="col-12 text-center">
										Themes 1
									</div>
									<div class="col-12 text-center">
										<label class="radio">
											<input type="radio" name="optradio">
										</label>
									</div>
								</div>
								<!-- Themes2 -->
								<div class="col-6 col-md-4">
									<div class="col-12">
										<img src="{{asset('assets/member/assets/images/Theme-right.png')}}" class="profilesetting-theme-100 my-3">
									</div>
									<div class="col-12 text-center">
										Themes 2
									</div>
									<div class="col-12 text-center">
										<label class="radio">
											<input type="radio" name="optradio">
										</label>
									</div>
								</div>

								<!-- Themes3 -->
								<div class="col-6 col-md-4">
									<div class="col-12">
										<img src="{{asset('assets/member/assets/images/Theme-right.png')}}" class="profilesetting-theme-100 my-3">
									</div>
									<div class="col-12 text-center">
										Themes 3
									</div>
									<div class="col-12 text-center">
										<label class="radio">
											<input type="radio" name="optradio">
										</label>
									</div>
								</div>
							</div>





						<!-- ########################## Input ##################################################### -->


							<div class="row mx-3">
								<div class="col-md-12">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">First name</label>
									    <input type="text" class="profilesetting-form-control" id="text">
									  </div>
									</form>
								</div>

								<div class="col-md-12">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">Last name</label>
									    <input type="text" class="profilesetting-form-control" id="text">
									  </div>
									</form>
								</div>


								<div class="col-md-12">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">Birthday</label>
									    <div class="row">
									    	<div class="col-4 col-md-2">
									    		<div class="form-group">
												  <select class="profilesetting-form-control-select" id="sel1">
												  	<?php for ($i=1; $i <=31 ; $i++) {
												  		echo "<option>$i</option>";
												  	} ?>
												  </select>
												</div>
									    	</div>
									    	<div class="col-4 col-md-3">
									    		<div class="form-group">
												  <select class="profilesetting-form-control-select" id="sel1">
													<?php
														for($i = 1 ; $i <= 12; $i++)
														{
														 echo "<option>".date("F",mktime(0,0,0,$i,1,date("Y")))."</option>";
														}
													?>
												  </select>
												</div>
									    	</div>
									    	<div class="col-4 col-md-3">
									    		<div class="form-group">
												  <select class="profilesetting-form-control-select" id="sel1">
												  	<?php for ($x=2018; $x >=1950 ; $x--) {
												  		echo "<option>$x</option>";
												  	} ?>
												  </select>
												</div>
									    	</div>
										</div>
									  </div>
									</form>
								</div>

								<div class="col-md-12">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">Phone</label>
									    <input type="text" class="profilesetting-form-control" id="text">
									  </div>
									</form>
								</div>

								<div class="col-9 col-md-9">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">School</label>
									    <input type="text" class="profilesetting-form-control-input-frome" id="text">
									  </div>
									</form>
								</div>
								<div class="col-3 col-md-3">
									<button type="button" class="profilesetting-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
								</div>



								<div class="col-9 col-md-9">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">University</label>
									    <input type="text" class="profilesetting-form-control-input-frome" id="text">
									  </div>
									</form>
								</div>
								<div class="col-3 col-md-3">
									<button type="button" class="profilesetting-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
								</div>




								<div class="col-9 col-md-9">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">Work place</label>
									    <input type="text" class="profilesetting-form-control-input-frome" id="text">
									  </div>
									</form>
								</div>
								<div class="col-3 col-md-3">
									<button type="button" class="profilesetting-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
								</div>



								<div class="col-md-12">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">Position</label>
									    <input type="text" class="profilesetting-form-control" id="text">
									  </div>
									</form>
								</div>



								<div class="col-3 col-md-3">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">Address</label>
									  </div>
									</form>
								</div>
								<div class="col-9 col-md-9">
									<button type="button" class="profilesetting-btn-address"><i class="fa fa-plus" aria-hidden="true"></i></button>
								</div>



								<div class="col-md-12 mx-5 profilesetting-mx-5">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">number</label>
									    <input type="text" class="profilesetting-form-control" id="text">
									  </div>
									</form>
								</div>


								<div class="col-md-12 mx-5 profilesetting-mx-5">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">Province</label>
									    <input type="text" class="profilesetting-form-control" id="text">
									  </div>
									</form>
								</div>


								<div class="col-md-12 mx-5 profilesetting-mx-5">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">District</label>
									    <input type="text" class="profilesetting-form-control" id="text">
									  </div>
									</form>
								</div>


								<div class="col-md-12 mx-5 profilesetting-mx-5">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">Postcode</label>
									    <input type="text" class="profilesetting-form-control" id="text">
									  </div>
									</form>
								</div>



								<div class="col-md-12 mx-5 profilesetting-mx-5">
									<form action="/action_page.php">
									  <div class="form-group profilesetting-text-input">
									    <label for="text">Province</label>
									    <input type="text" class="profilesetting-form-control" id="text">
									  </div>
									</form>
								</div>



								<div class="col-md-12 my-3">
									<button class="btn profilesetting-bnt-save btn-sm"> Save </button>
								</div>


							</div>




						</div>

						<!-- End Post -->
	</div>
@endsection

@section('jsbottom')
@endsection
