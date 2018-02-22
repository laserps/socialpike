<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <!-- start header -->
    <title>Social</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="สื่อสังคมออนไลน์">
    <meta name="description" content="สื่อสังคมออนไลน์">
    <meta name="robots" content="index, follow, all">
    <meta name="author" content="">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/member/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/member/node_modules/font-awesome/css/font-awesome.min.css')}}">

    <!-- Plugin -->
    <!-- OFFICEDD CSS -->
    <link rel="stylesheet" type="text/css" href="assets/member/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/member/assets/css/live-chat.css">
    
    <!-- end header -->

    @yield('cssbottom')

    </head>
    <body>
        @include('Member.layouts.include.top')

        <section class="section" id="section-body">
			<div class="container">
				<div class="row">
                    <!-- Card left -->
                    @include('Member.layouts.include.cardleft')
                    <!-- Card left -->

					<!-- Card Right -->
                    @yield('content')
					<!-- End Card Right -->
				</div>
			</div>
		</section> <!-- End body section -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script type="text/javascript" src="{{asset('assets/member/node_modules/jquery/dist/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/member/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/member/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/global/js/validate.js')}}"></script>
        <script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
        <script type="text/javascript">
            $('textarea.post-box').focus(function () {
                $(this).animate({ height: "6em" }, 300);
                });
            $('textarea.post-box').focusout(function () {
                $(this).animate({ height: "2.8em" }, 300);
            });
        </script>
        <script>
            var url = "{{url('')}}";
            var asset = "{{asset('')}}";
        </script>
        @yield('jsbottom')
    </body>
</html>