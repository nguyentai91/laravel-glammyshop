<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- page level plugin styles -->
    <link rel="stylesheet" href="{!! url('assets/admin/vendor/datatables/media/css/jquery.dataTables.css') !!}">
    <!-- /page level plugin styles -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="{!! url('assets/admin/vendor/bootstrap/dist/css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/admin/vendor/perfect-scrollbar/css/perfect-scrollbar.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/admin/styles/roboto.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/admin/styles/font-awesome.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/admin/styles/panel.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/admin/styles/feather.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/admin/styles/animate.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/admin/styles/urban.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/admin/styles/urban.skins.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/admin/styles/select2.css') !!}">
    <!-- endbuild -->

</head>

<body>

<!-- quick launch panel -->
<div class="quick-launch-panel">
    <div class="container">
        <div class="quick-launcher-inner">
            <a href="javascript:;" class="close" data-toggle="quick-launch-panel">×</a>
            <div class="css-table-xs">
                <div class="col">
                    <a href="app-calendar.html">
                        <i class="icon-marquee"></i>
                        <span>Calendar</span>
                    </a>
                </div>
                <div class="col">
                    <a href="app-gallery.html">
                        <i class="icon-drop"></i>
                        <span>Gallery</span>
                    </a>
                </div>
                <div class="col">
                    <a href="app-messages.html">
                        <i class="icon-mail"></i>
                        <span>Messages</span>
                    </a>
                </div>
                <div class="col">
                    <a href="app-social.html">
                        <i class="icon-speech-bubble"></i>
                        <span>Social</span>
                    </a>
                </div>
                <div class="col">
                    <a href="charts-flot.html">
                        <i class="icon-pie-graph"></i>
                        <span>Analytics</span>
                    </a>
                </div>
                <div class="col">
                    <a href="javascript:;">
                        <i class="icon-esc"></i>
                        <span>Documentation</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /quick launch panel -->

<div class="app layout-fixed-header">

    <!-- sidebar panel -->
    <div class="sidebar-panel offscreen-left">
@include('admin.include.sidebar_admin')
    <!-- /sidebar panel -->

    <!-- content panel -->
    <div class="main-panel">

        <!-- top header -->
        <header class="header navbar">

            <div class="brand visible-xs">
                <!-- toggle offscreen menu -->
                <div class="toggle-offscreen">
                   sdhfvshd <a href="#" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- /toggle offscreen menu -->

                <!-- toggle chat sidebar small screen-->
                <div class="toggle-chat">
                    <a href="javascript:;" class="hamburger-icon v2 visible-xs" data-toggle="layout-chat-open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- /toggle chat sidebar small screen-->
            </div>

            <ul class="nav navbar-nav hidden-xs">
                <li>
                    <p class="navbar-text">
                        @yield('frontpage')
                    </p>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li>
                    <a href="javascript:;" data-toggle="quick-launch-panel">
                        <i class="fa fa-circle-thin"></i>
                    </a>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <div class="status bg-danger border-danger animated bounce"></div>
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li class="notifications-header">
                            <p class="text-muted small">You have 3 new messages</p>
                        </li>
                        <li>
                            <ul class="notifications-list">
                                <li>
                                    <a href="javascript:;">
                      <span class="pull-left mt2 mr15">
                                                <img src="{!! url('assets/admin/images/avatar.jpg') !!}" class="avatar avatar-xs img-circle" alt="">
                                            </span>
                                        <div class="overflow-hidden">
                                            <span>Sean launched a new application</span>
                                            <span class="time">2 seconds ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="pull-left mt2 mr15">
                                            <div class="circle-icon bg-danger">
                                                <i class="fa fa-chain-broken"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden">
                                            <span>Removed chrome from app list</span>
                                            <span class="time">4 Hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                      <span class="pull-left mt2 mr15">
                                                <img src="{!! url('assets/admin/images/face3.jpg') !!}" class="avatar avatar-xs img-circle" alt="">
                                            </span>
                                        <div class="overflow-hidden">
                                            <span class="text-muted">Jack Hunt has registered</span>
                                            <span class="time">9 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="notifications-footer">
                            <a href="javascript:;">See all messages</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="dropdown">
                        <img src="{!! url('assets/admin/images/avatar.jpg') !!}" class="header-avatar img-circle ml10" alt="user" title="user">
                        <span class="pull-left">Samuel Perkins</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:;">Settings</a>
                        </li>
                        <li>
                            <a href="javascript:;">Upgrade</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="label bg-danger pull-right">34</span>
                                <span>Notifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">Help</a>
                        </li>
                        <li>
                            <a href="signin.html">Logout</a>
                        </li>
                    </ul>

                </li>

                <li>
                    <a href="javascript:;" class="hamburger-icon v2" data-toggle="layout-chat-open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </li>
            </ul>
        </header>
        <!-- /top header -->

        <!-- main area -->

        <div class="main-content col-sm-12">
            @yield('content')


        </div>
        <!-- /main area -->
    </div>
    <!-- /content panel -->

    <!-- bottom footer -->
    <footer class="content-footer">

        <nav class="footer-right">
            <ul class="nav">
                <li>
                    <a href="javascript:;">Feedback</a>
                </li>
                <li>
                    <a href="javascript:;" class="scroll-up">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="footer-left">
            <ul class="nav">
                <li>
                    <a href="javascript:;">Copyright <i class="fa fa-copyright"></i> <span>Urban</span> 2015. All rights reserved</a>
                </li>
                <li>
                    <a href="javascript:;">Careers</a>
                </li>
                <li>
                    <a href="javascript:;">
                        Privacy Policy
                    </a>
                </li>
            </ul>
        </nav>

    </footer>
    <!-- /bottom footer -->

    <!-- chat -->
    <div class="chat-panel">
        <div class="chat-inner">
            <div class="chat-users">
                <div class="nav-justified-xs">

                    <ul class="nav nav-tabs nav-justified ">
                        <li class="active">
                            <a href="#chat-list" data-toggle="tab">Chat</a>
                        </li>
                        <li>
                            <a href="#market" data-toggle="tab">Favourites</a>
                        </li>
                        <li>
                            <a href="#activity" data-toggle="tab">Activity</a>
                        </li>
                    </ul>
                </div>



            </div>
            <div class="chat-conversation">

                <div class="chat-header">
                    <a class="chat-back" href="javascript:;">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <div class="chat-header-title">
                        Charles Wilson
                    </div>
                    <a class="chat-right" href="javascript:;">
                        <i class="fa fa-circle-thin"></i>
                    </a>
                </div>

                <div class="chat-conversation-content">

                    <p class="text-center text-muted small text-uppercase bold pb15">
                        Yesterday
                    </p>

                    <div class="chat-conversation-user them">
                        <div class="chat-conversation-message">
                            <p>Hey.</p>
                        </div>
                    </div>

                    <div class="chat-conversation-user them">
                        <div class="chat-conversation-message">
                            <p>How are the wife and kids, Taylor?</p>
                        </div>
                    </div>

                    <div class="chat-conversation-user me">
                        <div class="chat-conversation-message">
                            <p>Pretty good, Samuel.</p>
                        </div>
                    </div>

                    <p class="text-center text-muted small text-uppercase bold pb15">
                        Today
                    </p>

                    <div class="chat-conversation-user them">
                        <div class="chat-conversation-message">
                            <p>Curabitur blandit tempus porttitor.</p>
                        </div>
                    </div>

                    <div class="chat-conversation-user me">
                        <div class="chat-conversation-message">
                            <p>Goodnight!</p>
                        </div>
                    </div>

                    <div class="chat-conversation-user them">
                        <div class="chat-conversation-message">
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                        </div>
                    </div>

                </div>

                <div class="chat-conversation-footer">
                    <button class="chat-input-tool">
                        <i class="fa fa-camera"></i>
                    </button>
                    <div class="chat-input" contenteditable=""></div>
                    <button class="chat-send">
                        <i class="fa fa-paper-plane"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!-- /chat -->
</div>
<!-- build:js({.tmp,app}) scripts/app.min.js -->
<script src="{!! url('assets/admin/scripts/extentions/modernizr.js') !!}"></script>
<script src="{!! url('assets/admin/vendor/jquery/dist/jquery.js') !!}"></script>
<script src="{!! url('assets/admin/vendor/bootstrap/dist/js/bootstrap.js') !!}"></script>
<script src="{!! url('assets/admin/vendor/jquery.easing/jquery.easing.js') !!}"></script>
<script src="{!! url('assets/admin/vendor/fastclick/lib/fastclick.js') !!}"></script>
<script src="{!! url('assets/admin/vendor/onScreen/jquery.onscreen.js') !!}"></script>
{{--<script src="{!! url('assets/admin/vendor/onScreen/jquery.onscreen.js') !!}}"></script>--}}
<script src="{!! url('assets/admin/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/ui/accordion.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/ui/animate.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/ui/link-transition.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/ui/panel-controls.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/ui/preloader.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/ui/toggle.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/urban-constants.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/extentions/lib.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/dropzone.js') !!}"></script>
<script  charset="UTF-8" src="{!! url('assets/admin/scripts/main.js') !!}"></script>
<!-- endbuild -->

<!-- page level scripts -->
<script src="{!! url('assets/admin/vendor/datatables/media/js/jquery.dataTables.js') !!}"></script>
<!-- /page level scripts -->

<!-- initialize page scripts -->
<script src="{!! url('assets/admin/scripts/extentions/bootstrap-datatables.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/pages/datatables.js') !!}"></script>
<script src="{!! url('assets/admin/scripts/select2.js') !!}"></script>
<!-- /initialize page scripts -->
@yield('script')

</body>

</html>
