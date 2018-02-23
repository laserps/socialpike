@extends('Member.layouts.app')

@section('cssbottom')
@endsection

@section('content')
    <div class="col-12 col-md-8">
		<div class="card mb-4">
			<h3 class="my-3 mx-3">
				<i class="fa fa-cog fa-lg mt-4 profilesetting-icon-color"></i> Edit Profile
			</h3>
			<!-- theme -->
			<h4 class="profilesetting-text-darkgray mx-3">Themes</h4>
			<div class="row mx-3">
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
			<!-- end.theme -->

			<!-- input -->
			<form id='profile'>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row mx-3">
					<!-- first name -->
					<div class="col-md-12">
						<div class="form-group profilesetting-text-input">
						    <label for="firstname">First name</label>
						    <input type="text" class="profilesetting-form-control-input-frome" id="firstname" name='firstname'>
						</div>
					</div>
					<!-- end.first name -->

					<!-- last name -->
					<div class="col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="lastname">Last name</label>
							<input type="text" class="profilesetting-form-control-input-frome" id="lastname" name='lastname'>
						</div>
					</div>
					<!-- end.last name -->

					<!-- birthday -->
					<div class="col-md-12">
						<div class="form-group profilesetting-text-input">
							<label>Birthday</label>
							<div class="row">
								<div class="col-4 col-md-2">
									<div class="form-group">
										<select class="profilesetting-form-control-select birthday" id="day" name='day'>
											<?php for ($i=1; $i <=31 ; $i++) {
												echo "<option value='".$i."'>$i</option>";
											} ?>
										</select>
									</div>
								</div>
								<div class="col-4 col-md-3">
									<div class="form-group">
										<select class="profilesetting-form-control-select birthday" id="month" name='month'>
											<?php for($i = 1 ; $i <= 12; $i++){
												echo "<option value='".$i."'>".date("F",mktime(0,0,0,$i,1,date("Y")))."</option>";
											} ?>
										</select>
									</div>
								</div>
								<div class="col-4 col-md-3">
									<div class="form-group">
										<select class="profilesetting-form-control-select birthday" id="year" name='year'>
											<?php for ($x=2018; $x >=1950 ; $x--) {
												echo "<option value='".$x."'>$x</option>";
											} ?>
										</select>
									</div>
						    	</div>
							</div>
						</div>
					</div>
					<!-- end.birthday -->

					<!-- mobile -->
					<div class="col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="mobile">Phone</label>
							<input type="text" class="profilesetting-form-control-input-frome" id="mobile" name='mobile'>
						</div>
					</div>
					<!-- end.mobile -->

					<!-- user place -->
					<div class="col-12 col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="text">School</label>
							<a href="" class='pull-right' id='add_school'>+ เพิ่ม</a>
							<div class='school_div'>
								<input type="text" class="profilesetting-form-control-input-frome school" name='school[]'>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="text">University</label>
							<a href="" class='pull-right' id='add_university'>+ เพิ่ม</a>
							<div class='university_div'>
								<input type="text" class="profilesetting-form-control-input-frome university" name="university[]">
							</div>
						</div>
					</div>


					<div class="col-8 col-md-8">
						<div class="form-group profilesetting-text-input">
							<label for="text">Work place</label>
							<div class='workplace_div'>
								<input type="text" class="profilesetting-form-control-input-frome" name="workplace[]">
							</div>
						</div>
					</div>

					<div class="col-4 col-md-4">
						<div class="form-group profilesetting-text-input">
							<label for="text">&nbsp;</label>
							<a href="" class='pull-right' id='add_workplace'>+ เพิ่ม</a>
							<div class='position_div'>
						    	<input type="text" class="profilesetting-form-control-input-frome" name="position[]" placeholder="position">
						    </div>
						</div>
					</div>
					<!-- address -->
					<div class="col-3 col-md-3">
						<form action="/action_page.php">
							<div class="form-group profilesetting-text-input">
						    	<label for="text">Address</label>
							</div>
						</form>
					</div>
					<div class="col-9 col-md-9">
						<button type="button" class="profilesetting-btn-address" id='add_address'><i class="fa fa-plus" aria-hidden="true"></i></button>
					</div>

					<div class='row address_div'>
						<div class="col-12 col-md-12">
							<div class="form-group profilesetting-text-input">
							    <label for="text">number</label>
							    <input type="text" class="profilesetting-form-control-input-frome" name="number[]">
							</div>
						</div>

						<div class="col-4 col-md-4">
							<div class="form-group profilesetting-text-input">
							    <label for="text">Sub district</label>
							    <input type="text" class="profilesetting-form-control-input-frome" name="sub_district[]">
							</div>
						</div>
						
						<div class="col-4 col-md-4">
							<div class="form-group profilesetting-text-input">
							    <label for="text">District</label>
							    <input type="text" class="profilesetting-form-control-input-frome" name="district[]">
							</div>
						</div>

						<div class="col-4 col-md-4">
							<div class="form-group profilesetting-text-input">
							    <label for="text">Province</label>
							    <input type="text" class="profilesetting-form-control-input-frome" name="province[]">
							</div>
						</div>
					</div>


					<!-- <div class="col-md-12 mx-5 profilesetting-mx-5">
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
					</div> -->
					<!-- end.user place -->

					<div class="col-md-12 my-3">
						<button type='submit' class="btn profilesetting-bnt-save btn-sm"> Save </button>
					</div>
				</div>
			</form>
			<!-- end. input -->
		</div>
	</div>
@endsection

@section('jsbottom')
<script>
	
	$('body').on('click','#add_school',function(event){
		event.preventDefault();
		var school = '<input type="text" class="profilesetting-form-control-input-frome school" name="school[]"><br>';
		$('.school_div').prepend(school);
	});

	$('body').on('click','#add_university',function(event){
		event.preventDefault();
		var university = '<input type="text" class="profilesetting-form-control-input-frome university" name="university[]"><br>';
		$('.university_div').prepend(university);
	});
	
	$('body').on('click','#add_workplace',function(event){
		event.preventDefault();
		var workplace = '<input type="text" class="profilesetting-form-control-input-frome workplace" name="workplace[]"><br>';
		$('.workplace_div').prepend(workplace);
		var position = '<input type="text" class="profilesetting-form-control-input-frome" name="position[]" placeholder="position"><br>';
		$('.position_div').prepend(position);
	});

	$('body').on('click','#add_address',function(event){
		console.log(123);
		var address = '<div class="col-12 col-md-12">\
							<div class="form-group profilesetting-text-input">\
							    <label for="text">number</label>\
							    <input type="text" class="profilesetting-form-control-input-frome" name="number[]">\
							</div>\
						</div>\
						<div class="col-4 col-md-4">\
							<div class="form-group profilesetting-text-input">\
							    <label for="text">Sub district</label>\
							    <input type="text" class="profilesetting-form-control-input-frome" name="sub_district[]">\
							</div>\
						</div>\
						<div class="col-4 col-md-4">\
							<div class="form-group profilesetting-text-input">\
							    <label for="text">District</label>\
							    <input type="text" class="profilesetting-form-control-input-frome" name="district[]">\
							</div>\
						</div>\
						<div class="col-4 col-md-4">\
							<div class="form-group profilesetting-text-input">\
							    <label for="text">Province</label>\
							    <input type="text" class="profilesetting-form-control-input-frome" name="province[]">\
							</div>\
						</div>';
		$('.address_div').prepend(address);
	});

	$('#profile').submit(function(event){
        event.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            method : "POST",
            url : url+"/profile",
            dataType : 'json',
            data: data,
        }).done(function(rec){
            // prepend
        });
    });

    $('body').on('keyup','.school',function(){
    	var keyword = $(this).val();
    	$.ajax({
            method : "get",
            url : "https://maps.googleapis.com/maps/api/place/queryautocomplete/json?&key=AIzaSyAc4s29rY6q5beC-iF_RVn_4K9vmu-DZlk&language=th&input="+keyword,
            dataType : 'json',
        }).done(function(rec){
        	console.log(keyword);
        });
    });

</script>
@endsection
