@extends('Member.layouts.app')

@section('cssbottom')
@endsection

@section('content')
    <div class="col-12 col-md-8">

	<div class="card mb-4">

<h3 class="my-3 mx-5"><i class="fa fa-picture-o fa-lg mt-4 profilesetting-icon-color"></i></i> Photos</h3>
<nav class="navbar navbar-expand-sm">
	  <!-- Links -->
	  <ul class="photopage-navbar-nav photopage-nav-center">
		<li class="photopage-nav-right">
		  <a class="photopage-nav-link" href="#">Profile photos</a>
		</li>
		<li class="photopage-nav-right">
		  <a class="photopage-nav-link" href="#">Cover photos</a>
		</li>
		<li class="photopage-nav-right">
		  <a class="photopage-nav-link" href="#">Timeline photos</a>
		</li>
		<li class="photopage-nav-right">
		  <a class="photopage-nav-link active" href="#">Album</a>
		</li>
	  </ul>
</nav>

<div class="row">

	 <div class="col-12 col-lg-4 album-margin">
<!-- Cards-->
<div class="album-card card--big">
<div class="card__image" style="background-image: url(assets/images/girl2.jpg);"></div>
<span class="card__title">333</span>
<span class="card__subtitle">Album 1</span>
<p class="card__text">Located two hours south of Sydney in</p>
</div>
<!-- END Cards-->
	 </div>

<div class="col-12 col-lg-4 album-margin">
<!-- Cards-->
<div class="album-card card--big">
<div class="card__image" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
<span class="card__title">123</span>
<span class="card__subtitle">Album 2</span>
<p class="card__text">Located two hours south of Sydney in</p>
</div>
<!-- END Cards-->
</div>

<div class="col-12 col-lg-4 album-margin">
<!-- Cards-->
<div class="album-card card--big">
<div class="card__image" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
<span class="card__title">154</span>
<span class="card__subtitle">Album 3</span>
<p class="card__text">Located two hours south of Sydney in</p>
</div>
<!-- END Cards-->
</div>

<div class="col-12 col-lg-4 album-margin">
<!-- Cards-->
<div class="album-card card--big">
<div class="card__image" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
<span class="card__title">751</span>
<span class="card__subtitle">Album 4</span>
<p class="card__text">Located two hours south of Sydney in</p>
</div>
<!-- END Cards-->
</div>

<div class="col-12 col-lg-4 album-margin">
<!-- Cards-->
<div class="album-card card--big">
<div class="card__image" style="background-image: url(https://placeimg.com/640/480/nature);"></div>
<span class="card__title">3</span>
<span class="card__subtitle">Album 5</span>
<p class="card__text">Located two hours south of Sydney in</p>
</div>
<!-- END Cards-->
</div>

</div>

	</div>
@endsection

@section('jsbottom')
@endsection
