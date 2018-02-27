@extends('Member.layouts.app')

@section('cssbottom')
<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/bootstrap-daterangepicker-master/daterangepicker.css')}}">
@endsection

@section('content')
    <div class="col-12 col-md-8">
		<div class="card mb-4">
			<h3 class="my-3 mx-3">
				<i class="fa fa-cog fa-lg mt-4 profilesetting-icon-color"></i> Edit Profile
			</h3>
			<!-- theme -->
			<h4 class="profilesetting-text-darkgray mx-3">Themes</h4>
			<form id='profile'>
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
								<input type="radio" name="theme" value="1" {{($user->theme==1) ? 'checked' : ''}}>
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
								<input type="radio" name="theme" value="2" {{($user->theme==2) ? 'checked' : ''}}>
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
								<input type="radio" name="theme" value="3" {{($user->theme==3) ? 'checked' : ''}}>
							</label>
						</div>
					</div>
				</div>
			<!-- end.theme -->

			<!-- input -->
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row mx-3">
					<!-- first name -->
					<div class="col-md-12">
						<div class="form-group profilesetting-text-input">
						    <label for="firstname">First name</label>
						    <input type="text" class="profilesetting-form-control-input-frome" id="firstname" name='firstname' value="{{$user->firstname}}">
						</div>
					</div>
					<!-- end.first name -->

					<!-- last name -->
					<div class="col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="lastname">Last name</label>
							<input type="text" class="profilesetting-form-control-input-frome" id="lastname" name='lastname' value="{{$user->lastname}}">
						</div>
					</div>
					<!-- end.last name -->

					<!-- birthday -->
					<div class="col-md-12">
						<div class="form-group profilesetting-text-input">
						<div class="row">
							<div class="col-8"><label>Birthday</label></div>
							<divl class="col-4"><labe>SEX</label></div>
						</div>
							<div class="row">
								<div class="col-4 col-md-2">
									<div class="form-group">
										<select class="profilesetting-form-control-select birthday" id="day" name='day'>
											@for($i=1;$i<=31;$i++)
												<option value='{{$i}}' {{($i==$user->day) ? 'selected' : ''}}>{{$i}}</option>
											@endfor
										</select>
									</div>
								</div>
								<div class="col-4 col-md-3">
									<div class="form-group">
										<select class="profilesetting-form-control-select birthday" id="month" name='month'>
											@for($i=1;$i<=12;$i++)
												<option value='{{$i}}' {{($i==$user->month) ? 'selected' : ''}}>{{date("F",mktime(0,0,0,$i,1,date("Y")))}}</option>
											} ?>
											@endfor
										</select>
									</div>
								</div>
								<div class="col-4 col-md-3">
									<div class="form-group">
										<select class="profilesetting-form-control-select birthday" id="year" name='year'>
											@for($x=2018;$x>=1950;$x--)
												<option value='{{$x}}' {{($x==$user->year) ? 'selected' : ''}}>{{$x}}</option>
											@endfor
										</select>
									</div>
						    	</div>
						    	<div class="col-4 col-md-3">
									<div class="form-group">
										<select class="profilesetting-form-control-input-frome birthday" id="sex" name='sex'>
											<option value=''>please select</option>
											<option value='1' {{($user->sex==1) ? 'selected' : ''}}>male</option>
											<option value='2' {{($user->sex==2) ? 'selected' : ''}}>female</option>
											<option value='3' {{($user->sex==3) ? 'selected' : ''}}>unknown</option>
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
							<input type="text" class="profilesetting-form-control-input-frome" id="mobile" name='mobile' value='{{$user->mobile}}'>
						</div>
					</div>
					<!-- end.mobile -->

					<!-- marital status -->
					<div class="col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="marital_status_id">Marital status</label>
							<select class="profilesetting-form-control-select" id="marital_status_id" name='marital_status_id'>
								<option value=''>please select</option>
								<option value='1' {{($user->marital_status_id==1) ? 'selected' : ''}}>single</option>
								<option value='2' {{($user->marital_status_id==2) ? 'selected' : ''}}>married</option>
							</select>
						</div>
					</div>
					<!-- end.marital status -->

					<!-- user place -->
					<div class="col-12 col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="text">School</label>
							<a href="" class='pull-right' id='add_school'>+ เพิ่ม</a>
							<div class='school_div'>
								@foreach($school as $val)
									<input type="hidden" name="place_type_id[]" value="1">
									<input type="hidden" name="id[]" value="{{$val->id}}">
									<input type="hidden" name="position[]">
									<input type="hidden" name="duration[]">
									<input type="text" class="profilesetting-form-control-input-frome school mt-3" name='main_google[]' value='{{$val->main_google}}'>
								@endforeach
							</div>
						</div>
					</div>

					<div class="col-12 col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="text">University</label>
							<a href="" class='pull-right' id='add_university'>+ เพิ่ม</a>
							<div class="university_div">
								@foreach($university as $val)
									<div class='input_div'>
										<input type="hidden" name="place_type_id[]" value="2">
										<input type="hidden" name="id[]" value="{{$val->id}}">
										<input type="text" class="profilesetting-input-work-place mt-3 university" value="{{$val->main_google}}" name="main_google[]" style="width: 60%">&nbsp;&nbsp;&nbsp;
								    	<input type="text" class="profilesetting-input-work-place mt-3" value="{{$val->position}}" name="position[]" style="width: 30%">
									</div>
									<div class='duration_div'>
								    	<input type="text" class="profilesetting-input-work-place mt-3 date_duration" value="{{$val->duration}}" name="duration[]" style="width: 30%">
									</div>
						    	@endforeach
							</div>
						</div>
					</div>

					<div class="col-12 col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="text">Work place</label>
							<a href="" class='pull-right' id='add_workplace'>+ เพิ่ม</a>
							<div class="workplace_div">
								@foreach($workplace as $val)
									<div class='input_div'>
										<input type="hidden" name="place_type_id[]" value="3">
										<input type="hidden" name="id[]" value="{{$val->id}}">
										<input type="text" class="profilesetting-input-work-place mt-3 workplace" value="{{$val->main_google}}" name="main_google[]" style="width: 60%">&nbsp;&nbsp;&nbsp;	
								    	<input type="text" class="profilesetting-input-work-place mt-3" value="{{$val->position}}" name="position[]" style="width: 30%">
									</div>
									<div class='duration_div'>
										<input type="text" class="profilesetting-input-work-place mt-3 date_duration" value="{{$val->duration}}" name="duration[]" style="width: 30%">
									</div>
						    	@endforeach
							</div>
						</div>
					</div>

					<div class="col-12 col-md-12">
						<div class="form-group profilesetting-text-input">
							<label for="text">City</label>
							<a href="" class='pull-right' id='add_city'>+ เพิ่ม</a>
							<div class="city_div">
								@foreach($city as $val)
									<div class='input_div'>
										<input type="hidden" name="place_type_id[]" value="0">
										<input type="hidden" name="id[]" value="{{$val->id}}">
										<input type="text" class="profilesetting-input-work-place mt-3 city" value="{{$val->main_google}}" name="main_google[]" style="width: 60%">&nbsp;&nbsp;&nbsp;	
								    	<input type="text" class="profilesetting-input-work-place mt-3" value="{{$val->position}}" name="position[]" style="width: 30%">
									</div>
									<div class='duration_div'>
										<input type="text" class="profilesetting-input-work-place mt-3 date_duration" value="{{$val->duration}}" name="duration[]" style="width: 30%">
									</div>
						    	@endforeach
							</div>
						</div>
					</div>

					<!-- address -->
					<!-- <div class="col-3 col-md-3">
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
					</div> -->
					<!-- end.address -->


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
						<input type="text" name="country" id="autocomplete"/>
						<button type='submit' class="btn profilesetting-bnt-save btn-sm"> Save </button>
					</div>
				</div>
			</form>
			<!-- end. input -->
		</div>
	</div>
@endsection

@section('jsbottom')
<script type="text/javascript" src="{{asset('assets/global/plugins/bootstrap-daterangepicker-master/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/global/plugins/bootstrap-daterangepicker-master/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/member/jQuery-Autocomplete-master/src/jquery.autocomplete.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDykbjLvRQk0S54PcHHBFpANU5385S-hYA&libraries=places"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrLKKEeiPzHT-H9iu1JtIEju_FbH9Bz4M&callback=initMap" async defer></script> -->
<script>

    $('.date_duration').daterangepicker();
	
	$('body').on('click','#add_school',function(event){
		event.preventDefault();
		var school = 
			'<input type="hidden" name="place_type_id[]" value="1">\
			<input type="hidden" name="id[]" value="0">\
			<input type="text" class="profilesetting-form-control-input-frome school mt-3" name="main_google[]">\
			<input type="hidden" name="duration[]">\
			<input type="hidden" name="position[]">';
		$('.school_div').prepend(school);
	});

	$('body').on('click','#add_university',function(event){
		event.preventDefault();
		var university = 
			'<div class="input_div">\
				<input type="hidden" name="place_type_id[]" value="2">\
				<input type="hidden" name="id[]" value="0">\
				<input type="text" class="profilesetting-input-work-place mt-3 university" name="main_google[]" style="width: 60%">&nbsp;&nbsp;&nbsp;\
		    	<input type="text" class="profilesetting-input-work-place mt-3" name="position[]" style="width: 30%">\
			</div>\
			<div class="duration_div">\
		    	<input type="text" class="profilesetting-input-work-place mt-3 date_duration" name="duration[]" style="width: 30%">\
			</div>';
		$('.university_div').prepend(university);
		$('.date_duration').daterangepicker();
	});
	
	$('body').on('click','#add_workplace',function(event){
		event.preventDefault();
		var workplace = 
			'<div class="input_div">\
				<input type="hidden" name="place_type_id[]" value="3">\
				<input type="hidden" name="id[]" value="0">\
				<input type="text" class="profilesetting-input-work-place mt-3 workplace" name="main_google[]" style="width: 60%">&nbsp;&nbsp;&nbsp;\
		    	<input type="text" class="profilesetting-input-work-place mt-3" name="position[]" style="width: 30%">\
			</div>\
			<div class="duration_div">\
		    	<input type="text" class="profilesetting-input-work-place mt-3 date_duration" name="duration[]" style="width: 30%">\
			</div>';
		$('.workplace_div').prepend(workplace);
		$('.date_duration').daterangepicker();
	});

	$('body').on('click','#add_city',function(event){
		event.preventDefault();
		var city = 
			'<div class="input_div">\
				<input type="hidden" name="place_type_id[]" value="0">\
				<input type="hidden" name="id[]" value="0">\
				<input type="text" class="profilesetting-input-work-place mt-3 city" name="main_google[]" style="width: 60%">&nbsp;&nbsp;&nbsp;\
		    	<input type="text" class="profilesetting-input-work-place mt-3" name="position[]" style="width: 30%">\
			</div>\
			<div class="duration_div">\
		    	<input type="text" class="profilesetting-input-work-place mt-3 date_duration" name="duration[]" style="width: 30%">\
			</div>';
		$('.city_div').prepend(city);
		$('.date_duration').daterangepicker();
	});

	/*$('body').on('click','#add_address',function(event){
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
	});*/

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

    var timer;

    $('body').on('keyup','.school',function(){
    	clearTimeout(timer);
    	var data = {keyword:$(this).val()};
    	// var data['keyword'] = $(this).val();
    	timer=setTimeout(function(){
    		$.ajax({
	            method : "get",
	            url : url+"/search_place",
	            dataType : 'json',
	            data: data,
	        }).done(function(rec){
	        	// var appendTo = $( ".school" ).autocomplete( "option", "appendTo" );
	        });
    	},1500);
    });

    var countries = [
   { value: 'Andorra', data: 'AD' },
   { value: 'Zimbabwe', data: 'ZZ' }
   ];

$('#autocomplete').autocomplete({
    lookup: countries,
    onSelect: function (suggestion) {
    	console.log(countries);
        // alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
    }
});

</script>
@endsection
