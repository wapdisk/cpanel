<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin Section | Admin Panel</title>
    <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
    <meta name="viewport" content="width=device-width">
    {{ HTML::style('packages/stevemo/cpanel/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('packages/stevemo/cpanel/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('packages/stevemo/cpanel/select2-3.3.1/select2.css') }}
    {{ HTML::style('packages/stevemo/cpanel/css/theme.css') }}
    @yield('style')

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
    <!-- #wrap -->
    <div id="wrap">
        <!-- #top -->
        <div id="top">
            <!-- .navbar -->
            <div class="navbar navbar-inverse navbar-static-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="{{URL::to('/')}}">My Site</a> <!-- .topnav -->
                        @if (Sentry::check())
                            <div class="btn-toolbar topnav">
                                <div class="btn-group">
                                    <a href="#helpModal" class="btn btn-inverse" rel="tooltip" data-placement="bottom"
                                       data-original-title="Help" data-toggle="modal">
                                        <i class="icon-question-sign"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-inverse" data-placement="bottom" data-original-title="Logout" rel="tooltip"
                                       href="{{ route('admin.logout') }}"><i class="icon-off"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- /.topnav -->
                            <div class="nav-collapse collapse">
                                <!-- .nav -->
                                <ul class="nav">
                                    <li><a href="">Dashboard</a></li>
                                    <li class="dropdown ">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="blank.html#">
                                           Users <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /.navbar -->
        </div>
        <!-- /#top -->
        <!-- .head -->
        <header class="head">
            <!-- ."main-bar -->
            <div class="main-bar">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            @yield('header')
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.main-bar -->
        </header>
        <!-- /.head -->

        <!-- #content -->
        <div id="content">

            <div class="container">
                @include('cpanel::partials.alert')
                @yield('content')
            </div>
            <!-- /.outer -->
        </div>
        <!-- /#content -->
        <!-- #push do not remove -->
        <div id="push"></div>
        <!-- /#push -->
    </div>
    <!-- /#wrap -->

    <div class="clearfix"></div>
    <div id="footer">
        <p>2013 © Admin Panel </p>
    </div>

        {{ HTML::script('packages/stevemo/cpanel/js/vendor/jquery.1.10.0.min.js') }}
        {{ HTML::script('packages/stevemo/cpanel/bootstrap/js/bootstrap.min.js') }}
        {{ HTML::script('packages/stevemo/cpanel/select2-3.3.1/select2.min.js') }}
        {{ HTML::script('packages/stevemo/cpanel/js/vendor/bootbox.min.js') }}
        {{ HTML::script('packages/stevemo/cpanel/js/admin.js') }}
        @yield('script')
</body>
</html>
