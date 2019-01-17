
<!DOCTYPE html>
{{--<html lang="fa" dir="rtl">--}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="/assets/login/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/assets/login/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
    <link href="/assets/login/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="/assets/login/css/atlas.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/login/css/custom.css" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @include('dashboard.extends.js-notif')

</head>
<body>



<div class="loader-bg"></div>
<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-teal lighten-1">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">
        <nav class="cyan darken-1">
            <div class="nav-wrapper row">

                <div class="header-title col s3">
                    <span class="chapter-title">
                        <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
                          {{ config('app.name', 'Laravel') }}
                        </a>
                    </span>

                </div>
                <form class="left search col s6 hide-on-small-and-down">
                    <div class="input-field">
                       @include('dashboard.extends.search-form')
                    </div>
                    <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                </form>
                <ul class="right col s9 m3 nav-right-menu">
                    <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                    <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1000-notif" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                    <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                </ul>

                <ul id="dropdown1000-notif" class="dropdown-content notifications-dropdown">
                    @include('dashboard.extends.notifications')
                </ul>
                @include('dashboard.extends.chat-menu')

            </div>
        </nav>
    </header>

    @include('dashboard.extends.search-results')
    @include('dashboard.extends.chat-sidebar')
    @include('dashboard.extends.chat-messages')
    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                @include('dashboard.extends.account-profile')
            </div>
            <div class="sidebar-account-settings">
               @include('dashboard.extends.account-settings')
            </div>
            @include('dashboard.extends.side-menu')

            <div class="footer">
            @include('dashboard.extends.footer')
            </div>
        </div>
    </aside>

   @yield('content')
</div>
<div class="left-sidebar-hover"></div>


<!-- Javascripts -->
@include('dashboard.extends.footer-js')

</body>
</html>
