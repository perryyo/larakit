<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="/assets/welcome/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="/assets/welcome/images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="/assets/welcome/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/welcome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/welcome/css/norwester.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="/assets/welcome/css/normalize.css">
    <link rel="stylesheet" href="/assets/welcome/css/space.css">
    <link rel="stylesheet" href="/assets/welcome/css/overright.css">
    <link rel="stylesheet" href="/assets/welcome/style.css">
    <link rel="stylesheet" href="/assets/welcome/css/responsive.css">
    <script src="/assets/welcome/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .links > a {
            color: #ffffff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .btn-x{
            border: 1px solid #ffffff;
            border-bottom: 1px solid #ffffff;
        }
    </style>
</head>

<body>
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<div class="section-bg black">
    <div class="section-bg header-bg"></div>
</div>

<nav class="navbar mainmenu-area">
    <div class="container">
        {{--<div class="navbar-header">--}}
            {{--<div class="navbar-brand"><img src="/assets/welcome/images/logo.png" alt=""></div>--}}
        {{--</div>--}}
        <ul class="nav navbar-right">
            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>

            @if (Route::has('login'))

                    @auth
                    <li> <a href="{{ url('/admin/dashboard') }}" style="border-bottom: 1px solid #31aeff;color:#31aeff;border: 1px solid #31aeff;">Dashboard</a></li>
                    @else
                    <li> <a href="{{ route('login') }}" style="border-bottom: 1px solid #31aeff;color:#31aeff;border: 1px solid #31aeff;">Login</a></li>

                        @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}" style="border-bottom: 1px solid #31aeff;color:#31aeff;border: 1px solid #31aeff;">Register</a></li>
                        @endif
                    @endauth

            @endif


        </ul>
    </div>
</nav>
<header class="tab-content">
    <div class="vcenter tab-pane fade in active" id="home">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
                    <h1 class="headline">coming <span>soon</span></h1>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                    <div class="countdown">
                        <ul class="color_white list-inline list-unstyled" id="countdown"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 xs-center">
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 text-right xs-center">
                <ul class="list-unstyled list-inline social-list">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--Vendor-JS-->
<script src="/assets/welcome/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/welcome/js/vendor/bootstrap.min.js"></script>
<!--Plugin-JS-->
<script src="/assets/welcome/js/contact-form.js"></script>
<script src="/assets/welcome/js/ajaxchimp.js"></script>
<script>
    // -----------------------------------------------------------------------------------------------------
    // COUNTDOWN
    // -----------------------------------------------------------------------------------------------------

    var ctd = document.getElementById('countdown');

    countdown();

    function countdown() {
        // ATTENTION - Ianuary is 0, February is 1 ......
        var launch_date = new Date(Date.UTC(2019, 3, 1, 0, 0));
        var days;
        var hours;
        var minutes;
        var seconds;
        var rest;
        var now = new Date();

        seconds = rest = Math.floor(((launch_date.getTime() - now.getTime()) / 1000));

        days = zero(Math.floor(seconds / 86400));
        seconds -= days * 86400;

        hours = zero(Math.floor(seconds / 3600));
        seconds -= hours * 3600;

        minutes = zero(Math.floor(seconds / 60));
        seconds -= minutes * 60;

        seconds = zero(Math.floor(seconds));

        function zero(n) {
            return (n < 10 ? '0' : false) + n;
        }

        rest <= 0 ? days = hours = minutes = seconds = '00' : setTimeout(countdown, 1000);

        ctd.innerHTML =
            '<li><div><span class="heading_24">' + days + '</span><br> day' + (days > 1 ? 's' : '') + '</div></li>' +
            '<li><div><span class="heading_24 font_bold">' + hours + '</span><div class="pull-right"> hour' + (hours > 1 ? 's' : '') + '</div></div></li>' +
            '<li><div><span class="heading_24 font_bold">' + minutes + '</span><div class="pull-right"> minute' + (minutes > 1 ? 's' : '') + '</div></div></li>' +
            '<li><div><span class="heading_24 font_bold">' + seconds + '</span><div class="pull-right"> second' + (seconds > 1 ? 's' : '') + '</div></div></li>';
    }

</script>
<script src="/assets/welcome/js/jquery.ripples.js"></script>
<!--Main-active-JS-->
<script src="/assets/welcome/js/main.js"></script>
</body>


 </html>
