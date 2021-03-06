
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 NotFound</title>
    <meta name="author" content="SaadatRent">

    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
    <!-- EXTERNAL STYLESHEETS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v4.2.4/css/all.css" integrity="sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh" crossorigin="anonymous">



    <!-- ANIMATION -->
    <link href="http://www.ncodeart.com/themeforest/travel-error-page/nc/version-2/css/animation.css" rel="stylesheet" type="text/css" />
    <!-- MAIN STYLESHEETS -->
    <link rel="stylesheet" href="http://www.ncodeart.com/themeforest/travel-error-page/nc/version-2/css/main.css">
    <!-- Favicons -->
    <link rel="icon" href="images/nc-fav.ico">
</head>
<body>
<!-- ANIMATION -->
<div class="fix-wrp">
    <div class="animate-wrp">
        <div class="sky">
            <div class="car-wheels"></div>
            <div class="car">
                <div class="msg"><b><span>Oops!</span>May be I am on wrong way.</b></div>
            </div>
            <div class="car-wheels c1"></div>
            <div class="car1 c1"></div>
            <div class="cloud"></div>
            <div class="cloud2"></div>
            <div class="cloud1"></div>
            <div class="grass1"></div>
            <div class="grass"></div>
            <div class="grass2"></div>
            <div class="mountain"></div>
            <div class="mountain1"></div>
            <div class="tree"></div>
            <div class="tree-front"></div>
            <div class="road"></div>
            <div class="road-front"></div>
        </div>
    </div>
</div>
<!--/animate-wrp -->

<!-- MAIN WRAPPER -->
<div class="main-wrapper">
    <!-- CONTAINER -->
    <div class="container">

        <!-- CLOUD MESSAGE -->
        <div class="cloud-message">
            <div class="message-wrp">
                <div class="message">
                    <strong class="t1">OOPS!</strong>
                    <strong class="t2">Error 404 : Page Not Found.</strong>
                    <p class="t3">Looks like something went completely wrong!</p>
                </div>
            </div>
            <img src="assets/images/cloud-large1.png" alt="cloud" />
        </div>
        <!--/cloud message -->

        <!-- NAVIGATION LINKS -->
        <div class="nav-wrapper">
            <a href="http://themeforest.net/item/travel-error-page/8657221?ref=NCodeart">Home</a>
            <a href="http://themeforest.net/item/travel-error-page/8657221?ref=NCodeart">Service</a>
            <a href="http://themeforest.net/item/travel-error-page/8657221?ref=NCodeart">Contact us</a>
            <a href="http://themeforest.net/item/travel-error-page/8657221?ref=NCodeart">Purchase</a>
        </div>
        <!--/nav-wrapper -->

        <!-- SOCIAL LINKS -->
        <!--<div class="social-links">-->
        <!--<a href="https://www.facebook.com/NCodeArt-1775773679337303/"><i class="fa fa-facebook"></i></a>-->
        <!--<a href="https://twitter.com/NCodeArt"><i class="fa fa-twitter"></i></a>-->
        <!--<a href="https://plus.google.com/u/0/116375781171317760169"><i class="fa fa-google-plus"></i></a>-->
        <!--<a href="http://themeforest.net/item/travel-error-page/8657221?ref=NCodeart"><i class="fa fa-linkedin"></i></a>-->
        <!--<a href="http://themeforest.net/item/travel-error-page/8657221?ref=NCodeart"><i class="fa fa-youtube-play"></i></a>-->
        <!--<a href="http://themeforest.net/item/travel-error-page/8657221?ref=NCodeart"><i class="fa fa-vimeo-square"></i></a>-->
        <!--<a href="https://dribbble.com/NCodeArt"><i class="fa fa-dribbble"></i></a>-->
        <!--<a href="http://themeforest.net/item/travel-error-page/8657221?ref=NCodeart"><i class="fa fa-skype"></i></a>-->
        <!--<a href="http://themeforest.net/item/travel-error-page/8657221?ref=NCodeart"><i class="fa fa-rss"></i></a>-->
        <!--</div>-->
        <!--/social-links -->
        <p class="copyrights">Copyright © 2019 SaadatRent All Right Reserved</p>
    </div>
    <!--/container -->
</div>
<!--/main-wrapper -->

<!-- COMMON SCRIPT -->
<script src="http://www.ncodeart.com/themeforest/travel-error-page/nc/version-1/js/jquery-1.11.1.min.js"></script>
<script>
    function mainWindow(){
        $(".main-wrapper").css({
            width: $('html').width(),
            height: $('html').height() > $(window).height() ? $('html').height() : $(window).height()
        });
    }
    function animateWindow(){
        $(".animate-wrp").css({
            width: $(window).width(),
            height: $('.main-wrapper').height()
        });
    }
    $(document).ready(function() {
        mainWindow();
        animateWindow();
    });
    $(window).resize(function(event) {
        mainWindow();
        animateWindow();
    });
</script>
</body>
</html>
