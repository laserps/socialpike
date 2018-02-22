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

	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Nikor McRiver</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of thetext of thetext of the</p></div>
			</div>
		</div>
	</div>

	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl2.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Jordan Nicky</b></div>
				<div class="frinde-fex-text-comment"><p> simply dummysimply dummysimply dummysimply dummysimply dummy</p></div>
			</div>
		</div>
	</div>

	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl3.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Mick Piromphone</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of the is simply dummy text of the is simply dummy text of the</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl4.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Jordan Handerson</b></div>
				<div class="frinde-fex-text-comment"><p>  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make </p></div>
			</div>
		</div>
	</div>



	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl5.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Bodyslam</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of the haritleksopee parkjeesong</p></div>
			</div>
		</div>
	</div>



	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/men1.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Jordan Haaa</b></div>
				<div class="frinde-fex-text-comment"><p> park harit leksopee kmutnb work shop </p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/men2.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Nonlen Vernon</b></div>
				<div class="frinde-fex-text-comment"><p> i'm Nonlen Verno fuck hilp hot shop fuck dit.</p></div>
			</div>
		</div>
	</div>

	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/men3.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Karee Sampanbaht</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of the watkdfsdf fuck eieiei</p></div>
			</div>
		</div>
	</div>

	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Mongpen Kuyarai</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of the thethethethethethe</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl2.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>AJ DVD</b></div>
				<div class="frinde-fex-text-comment"><p>Free</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl3.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Manni Himan</b></div>
				<div class="frinde-fex-text-comment"><p> hallo world eiei</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl4.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Harry Potter</b></div>
				<div class="frinde-fex-text-comment"><p> Harry Harry Harry Harry</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl5.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Mina Mana</b></div>
				<div class="frinde-fex-text-comment"><p> Pen arai kun. Bar a paow. mai roo.</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/men1.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>May AV</b></div>
				<div class="frinde-fex-text-comment"><p> dook</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/men2.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>My Loveyou</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of the is simply dummy text is simply dummy text </p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/men3.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Painai Paikun</b></div>
				<div class="frinde-fex-text-comment"><p> is simply PaikunPaikunPaikunPaikunPaikun</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Mana Phasoon</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of the</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>If Loopfor</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of theis simply dummy text of theis simply dummy text of the</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl2.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Prayud Junocha</b></div>
				<div class="frinde-fex-text-comment"><p> Phahan</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl3.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>JBanrai Chihay</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy is simply dummyis simply dummyis simply dummyis simply dummy</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl4.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Leo Chang</b></div>
				<div class="frinde-fex-text-comment"><p> Beer </p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl5.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Unfriend Follow</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of the</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/men1.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Pantib Hiha</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummy text of thes simply dummy text of thes simply dummy text of the</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/men2.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Kudtummuy Lee</b></div>
				<div class="frinde-fex-text-comment"><p> sdbsdfbsdfbafwefqrwgffaqfasdfwefwef</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/men3.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Mai Mee</b></div>
				<div class="frinde-fex-text-comment"><p> kkkiioootiudjaosdfoasd</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>BNK 69</b></div>
				<div class="frinde-fex-text-comment"><p> Chob 69</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl2.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Jebs Maimii</b></div>
				<div class="frinde-fex-text-comment"><p> is simply dummyis simply dummyis simply dummyis simply dummy text of the</p></div>
			</div>
		</div>
	</div>


	<div class="col-6 col-md-3 friend-col-3 my-3">
		<div class="frinds-border-img col-12 text-center">
			<div class="dropdown">
				<a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog frinde-icon-cog" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu frinde-deopdow-setting" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
					<a class="dropdown-item" href="#">Unfriend</a>
					<a class="dropdown-item" href="#">Direct Meesage</a>
					<a class="dropdown-item" href="#">Follow</a>
					<hr>
					<a class="dropdown-item" href="#">Block</a>
				</div>
			</div>
			<div>
				<img class="frinde-img-size" src="assets/images/girl3.jpg">
			</div>
			<div>
				<div class="frinde-fex-name-size"><b>Yaa Mado</b></div>
				<div class="frinde-fex-text-comment"><p>  the</p></div>
			</div>
		</div>
	</div>












</div>

</div>
<!-- End Post -->

	</div>
@endsection

@section('jsbottom')
@endsection
