<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <title>Glammy | Modern eCommerce html Template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{!! url('assets/frontend/images/favicon.ico') !!}">

    <!-- CSS -->
    <link href="{!! url('assets/frontend/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! url('assets/frontend/css/flexslider.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! url('assets/frontend/css/fancySelect.css') !!}" rel="stylesheet" media="screen, projection" />
    <link href="{!! url('assets/frontend/css/animate.css') !!}" rel="stylesheet" type="text/css" media="all" />
    <link href="{!! url('assets/frontend/css/style.css') !!}" rel="stylesheet" type="text/css" />

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body>

<!-- PRELOADER -->
<div id="preloader"><img src="{!! url('assets/frontend/images/preloader.gif') !!}" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

    <!-- PAGE -->
    <div id="page">

        @include('frontend.navigation')

        @yield('content')

        @include('frontend.footer')

    </div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
    <div id="tovar_content"></div>
    <div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->

<!-- SCRIPTS -->
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE]><html class="ie" lang="en"> <![endif]-->

<script src="{!! url('assets/frontend/js/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/frontend/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/frontend/js/superfish.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/frontend/js/jquery.sticky.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/frontend/js/parallax.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/frontend/js/jquery.flexslider-min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/frontend/js/jquery.jcarousel.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/frontend/js/fancySelect.js') !!}"></script>
<script src="{!! url('assets/frontend/js/animate.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/frontend/js/myscript.js') !!}" type="text/javascript"></script>
<script>
    if (top != self) top.location.replace(self.location.href);
</script>
@yield('script')
</body>
</html>