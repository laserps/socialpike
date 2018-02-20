<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($title_page)? $title_page.' |':'' }} WorkByThai</title>
    <link href="{{asset('assets/admin/css/application.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/global/plugins/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/global/plugins/bootstrap-daterangepicker-master/daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/global/plugins/orakuploader/orakuploader.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/global/css/modal.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/css/custom.css')}}" />
    <link rel="shortcut icon" href="{{asset('assets/admin/img/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="WorkByThai.Co.Ltd.">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css_bottom')
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body>
    <div class="logo">
        <h4><a href="{{url('admin')}}">Work <strong>By Thai</strong></a></h4>
    </div>
        @include('Admin.layouts.sidebar')
    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="Messages" id="messages"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-comment"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="{{asset('assets/admin/img/1.png')}}" alt="">
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="{{asset('assets/admin/img/2.png')}}" alt="">
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="{{asset('assets/admin/img/3.png')}}" alt="">
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all messages <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="8 support tickets"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-globe"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="fa fa-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all tickets <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="glyphicon glyphicon-cog"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="{{asset('assets/admin/img/2.png')}}" alt="">
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs">
                        <a href="{{url('admin/logout')}}"><i class="glyphicon glyphicon-off"></i></a>
                    </li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="form-control search-query" placeholder="Search...">
                </form>
                <div class="notifications pull-right">
                    <div class="alert pull-right">
                        <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
                        <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link" href="#">settings</a> on the right!
                    </div>
                </div>
            </div>
        </header>
        <div class="content container">
            @yield('body')
            <footer class="content-footer">
                <div class="pull-right float-right">
                    Develope By <a href="https://www.workbythai.com/" target="_blank">WorkByThai Internet And Marketing</a>
                </div>
            </footer>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>
<!-- common libraries. required for every page-->
<script>
    var url_gb = '{{url('')}}';
    var asset_gb = '{{asset('')}}';
</script>
<script src="{{asset('assets/admin/lib/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/orakuploader/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/bootstrap-daterangepicker-master/moment.js')}}"></script>
<script src="{{asset('assets/admin/lib/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('assets/admin/lib/bootstrap-sass/assets/javascripts/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/widgster/widgster.js')}}"></script>
<script src="{{asset('assets/admin/lib/underscore/underscore.js')}}"></script>

<!-- common application js -->
<script src="{{asset('assets/admin/js/app.js')}}"></script>
<script src="{{asset('assets/admin/js/settings.js')}}"></script>

<script src="{{asset('assets/admin/lib/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/global/js/modal.js')}}"></script>
<script src="{{asset('assets/global/js/validate.js')}}"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.js')}}"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('assets/global/plugins/bootstrap-daterangepicker-master/daterangepicker.js')}}"></script>
<script src="{{asset('assets/global/plugins/Jquery-Price-Format/jquery.priceformat.js')}}"></script>
<script src="{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/global/plugins/ckeditor/config.js')}}"></script>
<script src="{{asset('assets/admin/js/function.js')}}"></script>
<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Dark Version</div>
        <div>
            <a href="../dark/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
        <!-- page libs -->
        @yield('js_bottom')

        <!-- page template -->
        <script type="text/template" id="message-template">
            <div class="sender pull-left">
                <div class="icon">
                    <img src="{{asset('assets/admin/img/2.png')}}" class="img-circle" alt="">
                </div>
                <div class="time">
                    just now
                </div>
            </div>
            <div class="chat-message-body">
                <span class="arrow"></span>
                <div class="sender"><a href="#">Tikhon Laninga</a></div>
                <div class="text">
                    <%- text %>
                </div>
            </div>
        </script>


<script>
    $('body').on('click','.btn-tooltip', function () {
        $(this).tooltip('hide');
    });
</script>
</body>
</html>