@extends('Member.layouts.app')

@section('cssbottom')
@endsection

@section('content')
    <div class="col-12 col-md-8">

								<!-- Start Post -->
<!-- ##################### FIRST POST ############################ -->
<div class="card mb-4">

<div class="row">
	<div class="col-12 col-md-6">
		<h3 class="my-3 mx-3 friends-text-head"><i class="fa fa-users fa-lg mt-4 profilesetting-icon-color"></i></i> Friends  <b class="friends-nub">300</b></h3>
	</div>
	<div class="col-12 col-md-6">
		<div class="input-group my-3 friends-from-group">
				<input type="text" id="input1-group2" name="input1-group2" class="form-control frinds-input-group" placeholder="Search">
				<span class="input-group-prepend">
					<button type="button" class="friends-bnt-shared"><i class="fa fa-search frinde-shared-icon"></i></button>
				</span>
		</div>
	</div>
</div>


<div class="row mx-1 my-5">

@foreach($friends as $friend)
	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item btn-unfriend" data-friend-id="{{$friend->id}}" data-user-id="{{AUTH::user()->id}}" href="#">Unfriend</a>
					<a class="dropdown-item btn-message"  data-friend-id="{{$friend->id}}" data-user-id="{{AUTH::user()->id}}" href="#">Direct Message</a>
					<!-- <a class="dropdown-item" href="#">Follow</a> -->
					<hr>
					<a class="dropdown-item btn-block"  data-friend-id="{{$friend->id}}" data-user-id="{{AUTH::user()->id}}" href="#">Block</a>
					<a class="dropdown-item btn-unblock"  data-friend-id="{{$friend->id}}" data-user-id="{{AUTH::user()->id}}" href="#">UnBlock</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="{{asset($friend->avatar)}}">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>{{$friend->name}}</b></div>
				<!-- <div class="frinde-fex-text-comment"><p> is simply dummy text of thetext of thetext of the</p></div> -->
			</div>
		</div>
	</div>
@endforeach

</div>

</div>
<!-- End Post -->

	</div>
@endsection

@section('jsbottom')
@endsection
