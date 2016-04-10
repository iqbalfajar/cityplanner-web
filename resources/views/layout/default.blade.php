<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>City Plan</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="{{ URL::asset('assets/flat-ui/images/favicon.ico') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/flat-ui/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/flat-ui/css/flat-ui.css') }}">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="{{ URL::asset('assets/common-files/css/icon-font.css') }}">
        <!-- end -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

        @yield('stylesheet')
    </head>

    <body>
        <div class="page-wrapper">
            <!-- header-11 -->
            <header class="header-11">
                <div class="container">
                    <div class="row">
                        <div class="navbar col-sm-12" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle"></button>
                                <a class="brand" href="#"><img src="{{ URL::asset('assets/img/logo@2x.png') }}" width="50" height="50" alt=""> City Plan</a>
                            </div>
                            <div class="collapse navbar-collapse pull-right">
                                <ul class="nav pull-left">
                                    <li class="active"><a href="#home">HOME</a></li>
                                    <li><a href="#features">FEATURES</a></li>
                                    <li><a href="#download">DOWNLOAD</a></li>
                                </ul>
                                <form class="navbar-form pull-left">
                                    <a class="btn btn-primary" href="{{URL::route('app')}}">Go to App</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content-center')

            <!-- footer-2 -->
            <footer class="footer-2 bg-midnight-blue">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li class="active">
                                <a href="#home">Home</a>
                            </li>
                            <li>
                                <a href="#features">Features</a>
                            </li>
                            <li>
                                <a href="#download">Download</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-btns pull-right">
                        <a href="#"><div class="fui-facebook"></div><div class="fui-facebook"></div></a>
                        <a href="#"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
                        <a href="#"><div class="fui-youtube"></div><div class="fui-youtube"></div></a>
                    </div>
                    <div class="additional-links">
                        &copy; 2016 - City Plan
                    </div>
                </div>
            </footer>
        </div>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ URL::asset('assets/common-files/js/jquery-1.10.2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/flat-ui/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/common-files/js/modernizr.custom.js') }}"></script>
        <script src="{{ URL::asset('assets/common-files/js/startup-kit.js') }}"></script>
        <script src="js/script.js') }}"></script>

        @yield('javascript')
    </body>
</html>