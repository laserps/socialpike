@extends('Member.layouts.app')
@section('cssbottom')
@endsection
@section('content')
<div class="col-12 col-md-8">
    <div class="card mb-4">
        <!-- Overview Card -->
        <div class="card-header-lg">
            <!-- Head Text -->
            <label class="info-page-headertext">OVERVIEW</label>
            <div class="row">
                <div class="col-5 info-page-header-hr">
                    <hr>
                </div>
                <div class="col-7">
                </div>
            </div>
        </div>
        <div class="card-body-lg ">
            <div class="row">
                <div class="col-6">
                    <!-- left side-->
                    <div class="row">
                        <div class="col-12">
                            <!-- Content w/ icon 1 -->
                            <div class="row">
                                <div class="col-2 p-2 pl-4">
                                    <div class="info-image">
                                        <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-10 py-3 info-overide-col">
                                    <label class="info-content-text">Born on {{date('F, Y', strtotime($user->birthday))}}</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Content w/ icon 1 -->
                        <div class="col-12">
                            <!-- Content w/ icon 2 -->
                            <div class="row">
                                <div class="col-2 p-2 pl-4">
                                    <div class="info-image">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-10 py-3 info-overide-col">
                                    <label class="info-content-text">Joined {{date('F, Y', strtotime($user->created_at))}}</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Content w/ icon 2 -->
                        <div class="col-12">
                            <!-- Content w/ icon 3 -->
                            <div class="row">
                                <div class="col-2 p-2 pl-4">
                                    <div class="info-image">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-10 py-3 info-overide-col">
                                    <label class="info-content-text">
                                        @if($user->marital_status_id==1)
                                            Single
                                        @elseif($user->marital_status_id==2)
                                            Married
                                        @endif
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- END Content w/ icon 3 -->
                        <div class="col-12">
                            <!-- Content w/ icon 4 -->
                            <div class="row">
                                <div class="col-2 p-2 pl-4">
                                    <div class="info-image">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-10 py-3 info-overide-col">
                                    <label class="info-content-text">7 family members</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Content w/ icon 4 -->
                    </div>
                </div>
                <div class="col-6">
                    <!-- Right side-->
                    <div class="col-12">
                        <!-- Content w/ picture 1 -->
                        <div class="row">
                            <div class="col-2 p-2">
                                <div class="info-image">
                                    <img src="{{ asset('assets/member/assets/images/building-1.jpg') }}" class="info-place-image rounded-circle" alt="info image">
                                </div>
                            </div>
                            <div class="col-10 py-3 info-overide-col">
                                <label class="info-content-text"> Work at : {{$workplace[0]->main_google}}</label>
                            </div>
                        </div>
                    </div>
                    <!-- END Content w/ picture 1 -->
                    <div class="col-12">
                        <!-- Content w/ picture 2 -->
                        <div class="row">
                            <div class="col-2 p-2">
                                <div class="info-image">
                                    <img src="{{ asset('assets/member/assets/images/building-2.png') }}" class="info-place-image rounded-circle" alt="info image">
                                </div>
                            </div>
                            <div class="col-10 py-3 info-overide-col">
                                <label class="info-content-text"> Studies {{$university[0]->position}} : {{$university[0]->main_google}}</label>
                            </div>
                        </div>
                    </div>
                    <!-- END Content w/ picture 2 -->
                    <div class="col-12">
                        <!-- Content w/ picture 3 -->
                        <div class="row">
                            <div class="col-2 p-2">
                                <div class="info-image">
                                    <img src="{{ asset('assets/member/assets/images/building-3.jpg') }}" class="info-place-image rounded-circle" alt="info image">
                                </div>
                            </div>
                            <div class="col-10 py-3 info-overide-col">
                                <label class="info-content-text"> Lives in : Workbythai</label>
                            </div>
                        </div>
                    </div>
                    <!-- END Content w/ picture 3 -->
                </div>
                <!-- END Right side-->
            </div>
        </div>
    </div>
    <!-- END Overview Card -->
    <div class="card mb-4">
        <!-- Work and Education Card -->
        <div class="card-header-lg">
            <!-- Work Head Text -->
            <label class="info-page-headertext">WORK</label>
            <div class="row">
                <div class="col-5 info-page-header-hr">
                    <hr>
                </div>
                <div class="col-7">
                </div>
            </div>
        </div>
        <div class="card-body-lg ">
            <!-- Work body-->
            <div class="row">
                @foreach($workplace as $row)
                    @php
                        $duration = explode(' ',$row->duration);
                    @endphp
                    <div class="col-12">
                        <!-- Content w/ picture 1 -->
                        <div class="row">
                            <div class="col-2 p-2 pl-4 info-overide-col12-pic">
                                <div class="info-image">
                                    <img src="{{ asset('assets/member/assets/images/building-3.jpg') }}" class="info-place-image rounded-circle" alt="info image">
                                </div>
                            </div>
                            <div class="col-10 py-3">
                                <p class="info-content-p">Work at : {{$row->main_google}}</p>
                                <label class="info-content-text"> {{date('F, Y', strtotime($duration[0]))}} - {{date('F, Y', strtotime($duration[2]))}} </label>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- END Content w/ picture 1 -->
            </div>
        </div>
        <!-- END Work body-->
        <div class="card-header-lg">
            <!-- Education Head Text -->
            <label class="info-page-headertext">EDUCATION</label>
            <div class="row">
                <div class="col-5 info-page-header-hr">
                    <hr>
                </div>
                <div class="col-7">
                </div>
            </div>
        </div>
        <div class="card-body-lg ">
            <!-- Education body-->
            <div class="row">
                @foreach($university as $row)
                    <div class="col-12">
                        <!-- Content w/ picture 2 -->
                        <div class="row">
                            <div class="col-2 p-2 pl-4 info-overide-col12-pic">
                                <div class="info-image">
                                    <img src="{{ asset('assets/member/assets/images/building-2.png') }}" class="info-place-image rounded-circle" alt="info image">
                                </div>
                            </div>
                            <div class="col-10 py-3">
                                <p class="info-content-p">{{$row->main_google}}</p>
                                <label class="info-content-text"> Class of 2015 ' Visual Communication Design ' Bangkok Thailand</label>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- END Content w/ picture 2 -->
            </div>
        </div>
        <!-- END Education body-->
    </div>
    <!-- END Work and Education Card -->
    <div class="card mb-4">
        <!-- Current City Card -->
        <div class="card-header-lg">
            <!-- City Head Text -->
            <label class="info-page-headertext">CITY</label>
            <div class="row">
                <div class="col-5 info-page-header-hr">
                    <hr>
                </div>
                <div class="col-7">
                </div>
            </div>
        </div>
        <div class="card-body-lg ">
            <!-- City body-->
            <div class="row">
                @foreach($city as $row)
                    <div class="col-12">
                        <!-- Content w/ picture 1 -->
                        <div class="row">
                            <div class="col-2 p-2 pl-4 info-overide-col12-pic">
                                <div class="info-image">
                                    <img src="{{ asset('assets/member/assets/images/building-2.png') }}" class="info-place-image rounded-circle" alt="info image">
                                </div>
                            </div>
                            <div class="col-10 py-3">
                                <p class="info-content-p">{{$row->main_google}}</p>
                                <label class="info-content-text"> Current city </label>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- END Content w/ picture 1 -->
                <!-- <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-2 pl-4 info-overide-col12-pic">
                            <div class="info-image">
                                <img src="{{ asset('assets/member/assets/images/building-3.jpg') }}" class="info-place-image rounded-circle" alt="info image">
                            </div>
                        </div>
                        <div class="col-10 py-3">
                            <p class="info-content-p">Bangkok, Thailand</p>
                            <label class="info-content-text"> Hometown </label>
                        </div>
                    </div>
                </div> -->
                <!-- END Content w/ picture 2 -->
            </div>
        </div>
        <!-- END City body-->
        <!-- <div class="card-header-lg">
            <label class="info-page-headertext">RESIDENCES</label>
            <div class="row">
                <div class="col-5 info-page-header-hr">
                    <hr>
                </div>
                <div class="col-7">
                </div>
            </div>
        </div>
        <div class="card-body-lg ">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-2 pl-4 info-overide-col12-pic">
                            <div class="info-image">
                                <img src="{{ asset('assets/member/assets/images/building-1.jpg') }}" class="info-place-image rounded-circle" alt="info image">
                            </div>
                        </div>
                        <div class="col-10 py-3">
                            <p class="info-content-p"> Allison's Home</p>
                            <label class="info-content-text"> Bangkok Thailand</label>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="card mb-4">
        <!-- Contact Info Card -->
        <div class="card-header-lg">
            <!-- Contact Info Head Text -->
            <label class="info-page-headertext">CONTACT INFORMATION</label>
            <div class="row">
                <div class="col-5 info-page-header-hr">
                    <hr>
                </div>
                <div class="col-7">
                </div>
            </div>
        </div>
        <div class="card-body-lg ">
            <!-- Contact Info body-->
            <div class="row">
                <div class="col-12">
                    <!-- Content w/ picture col12 1 -->
                    <div class="row">
                        <div class="col-2 p-2 pl-4 info-overide-col12-pic">
                            <div class="info-image">
                                <img src="{{ asset('assets/member/assets/images/building-1.jpg') }}" class="info-place-image rounded-circle" alt="info image">
                            </div>
                        </div>
                        <div class="col-10 py-3">
                            <p class="info-content-p info-p-col12"> 497 R.Bangsue Bansue Bangkok, Thailand </p>
                        </div>
                    </div>
                </div>
                <!-- END Content w/ picture col 12 1 -->
                <div class="col-12">
                    <!-- Content w/ icon col 12 1 -->
                    <div class="row">
                        <div class="col-2 p-2 info-overide-col12-fa">
                            <div class="info-image mobile-margin">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-10 py-3">
                            <p class="info-content-p info-p-col12">{{substr_replace($user->mobile, '-', 3, 0)}}</p>
                        </div>
                    </div>
                </div>
                <!-- END Content w/ icon col 12 1 -->
            </div>
        </div>
        <!-- END Contact Info body-->
        <div class="card-header-lg">
            <!-- Education Head Text -->
            <label class="info-page-headertext">BASIC INFORMATION</label>
            <div class="row">
                <div class="col-5 info-page-header-hr">
                    <hr>
                </div>
                <div class="col-7">
                </div>
            </div>
        </div>
        <div class="card-body-lg ">
            <!-- Education body-->
            <div class="row">
                <div class="col-12">
                    <!-- Content w/ icon 1 -->
                    <div class="row">
                        <div class="col-2 p-2 info-overide-col12-fa">
                            <div class="info-image">
                                <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-10 py-3">
                            <p class="info-content-p info-p-col12"> Born on {{date('F, Y', strtotime($user->birthday))}}</p>
                        </div>
                    </div>
                </div>
                <!-- END Content w/ icon 1 -->
                <div class="col-12">
                    <!-- Content w/ icon 2 -->
                    <div class="row">
                        <div class="col-2 p-2 info-overide-col12-fa">
                            <div class="info-image">
                                <i class="fa fa-venus-mars" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-10 py-3">
                            <p class="info-content-p info-p-col12">
                            	@if($user->sex==1)
                            		Male
                            	@elseif($user->sex==2)
                            		Female
                            	@elseif($user->sex==3)
                            		Unknown
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END Content w/ icon 2 -->
                <div class="col-12">
                    <!-- Content w/ icon 3 -->
                    <div class="row">
                        <div class="col-2 p-2 info-overide-col12-fa">
                            <div class="info-image">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-10 py-3">
                            <p class="info-content-p info-p-col12">
                                @if($user->marital_status_id==1)
                                    Single
                                @elseif($user->marital_status_id==2)
                                    Married
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END Content w/ icon 3 -->
            </div>
        </div>
        <!-- END Education body-->
    </div>
    <!-- END Contact Info Card -->
</div>
@endsection
@section('jsbottom')
@endsection