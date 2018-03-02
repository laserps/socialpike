<!doctype html>
<html lang="en">
    <title>Social</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="สื่อสังคมออนไลน์">
        <meta name="description" content="สื่อสังคมออนไลน์">
        <meta name="robots" content="index, follow, all">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/member/SocialPikeHTML/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/member/SocialPikeHTML/node_modules/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/member/SocialPikeHTML/assets/css/live-chat.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/member/SocialPikeHTML/assets/css/main.css')}}">
    </head>
    <body>
        <div class="full-width-div">
            <div class="login-page-height">
                <div class="d-none d-sm-block login-left-side">
                    <div class="col-12 d-flex align-items-start">
                        <div class="login-logo" >
                            <img src="{{asset('assets/member/SocialPikeHTML/assets/images/SampleLogo.png')}}" class="img-fluid" alt="Logo image">
                        </div>
                    </div>
                    <div class="d-flex align-items-center logo-text-1" >
                        <div style="text-align:center;" >
                            <label class="login-logo-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </label>
                        </div>
                    </div>
                    <div class="d-flex align-items-center logo-text-2" >
                        <div style="text-align:center;" >
                            <label class="login-logo-text">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 login-right-side pl-lg-5">
                    <div class="row pt-3" >
                        <div class="d-block d-xl-none d-md-none" style="margin:auto;">
                            <div class="login-logo" >
                                <img src="{{asset('assets/member/SocialPikeHTML/assets/images/SampleLogo.png')}}" class="img-fluid" alt="Logo image">
                            </div>
                        </div>
                        <form class="form-inline" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group col-12 col-lg-5 col-md-5 login-email-colform-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id='email' type="email" name='email' class="form-control login-input input-rounded login-email-resize" value="{{ old('email') }}" required placeholder="E-mail">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-12 col-lg-5 col-md-5 login-password-col form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control input-rounded login-email-resize" id="password" name='password' placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <a class="login-forgot-password" href="{{ route('password.request') }}"> Forgot Password? </a>
                            </div>
                            <div class="col-12 col-lg-2 col-md-2 login-btn-col" >
                                <button type="submit" class="btn login-page-btn login-button">LOGIN</button>
                            </div>
                        </form>
                    </div>
                    <div class="d-block d-sm-none" >
                        <hr>
                    </div>
                    <div class="row" >
                        <div class="col-12 mt-lg-5 login-register-text">
                            <h1>Register</h1>
                        </div>
                        <div class="col-12" >
                            <form class="register-input" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <input id="firstname" type="text" class="form-control input-rounded" name="firstname" value="{{ old('firstname') }}" placeholder="First Name">
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <input id="lastname" type="text" class="form-control input-rounded" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name">
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="text" class="form-control input-rounded" name="email" value="{{ old('email') }}" placeholder="E-mail">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control input-rounded" name="password" value="{{ old('password') }}" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password-confirm" type="password" class="form-control input-rounded" name="password_confirmation" placeholder="Retype password">
                                </div>
                                
                                <div class="form-group">
                                    <label class="login-birthday-text">Birthday</label>
                                    <div class="row login-birthday-row">
                                        <select class="form-control register-date register-brithday-picker" id="day" name='day'>
                                            @for($i=1;$i<=31;$i++)
                                                <option value='{{$i}}'>{{$i}}</option>
                                            @endfor
                                        </select>
                                        <select class="form-control register-month register-brithday-picker" id="month" name='month'>
                                            @for($i=1;$i<=12;$i++)
                                                <option value='{{$i}}'>{{date("F",mktime(0,0,0,$i,1,date("Y")))}}</option>
                                            } ?>
                                            @endfor
                                        </select>
                                        <select class="form-control register-year register-brithday-picker" id="year" name='year'>
                                            @for($x=2018;$x>=1950;$x--)
                                                <option value='{{$x}}'>{{$x}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row login-gender-row">
                                        <div class="form-check form-check-inline ml-3 mr-5">
                                            <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="sex" value="1"> Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline ml-3 mr-5">
                                            <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="sex" value="2"> Female
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline ml-3 mr-5">
                                            <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="sex" value="3"> Unknown
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="create-account mt-5">
                                    <button type="submit" class="btn login-page-btn createaccount-button">Create Account</button>
                                </div>
                            </form>
                            <div class="login-or mt-5">
                                <!-- OR -->
                                <div class="row">
                                    <div class="col-2 col-lg-2 col-xl-1 col-md-1">
                                    </div>
                                    <div class="col-3 col-lg-3 col-xl-3 col-md-4">
                                        <hr>
                                    </div>
                                    <div class="col-2 col-lg-2 col-xl-2 col-md-2" style="text-align:center;">
                                        <label>OR</label>
                                    </div>
                                    <div class="col-3 col-lg-3 col-xl-3 col-md-4">
                                        <hr>
                                    </div>
                                    <div class="col-2 col-lg-2 col-xl-3 col-md-1">
                                    </div>
                                </div>
                            </div>
                            <div class="facebook-login">
                                <a href="#">
                                    <div class="col-md-8 col-md-offset-4">
                                        <a href="{{url('/redirect')}}">
                                            <img src="{{asset('assets/member/SocialPikeHTML/assets/images/facebook-login.png')}}" class="img-fluid" alt="Logo imagesge">
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('assets/member/SocialPikeHTML/node_modules/jquery/dist/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/member/SocialPikeHTML/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/member/SocialPikeHTML/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript"></script>
    </body>
</html>