<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>404 dinosaur | UKIE WEB</title>
    <meta name="author" content="ukieweb" />
    <meta name="keywords" content="404 page, dinosaur, css3, template, html5 template, ukieweb" />
    <meta name="description" content="404 - Page Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Libs CSS -->
    <link type="text/css" media="all" href="https://envato.ukiedev.com/pack404/dinosaur/assets/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template CSS -->
    <link type="text/css" media="all" href="https://envato.ukiedev.com/pack404/dinosaur/assets/css/style.css" rel="stylesheet" />
    <!-- Responsive CSS -->
    <link type="text/css" media="all" href="https://envato.ukiedev.com/pack404/dinosaur/assets/css/respons.css" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/favicon144x144.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/favicon114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/favicon72x72.png" />
    <link rel="apple-touch-icon" href="assets/img/favicons/favicon57x57.png" />
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png" />

    <script src="https://envato.ukiedev.com/pack404/dinosaur/assets/js/createjs.min.js"></script>
    <script src="https://envato.ukiedev.com/pack404/dinosaur/assets/js/dinosaur.js"></script>
    <script>
        var canvas, stage, exportRoot;
        function init() {
            canvas = document.getElementById("canvas");
            handleComplete();
        }
        function handleComplete() {
            //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
            exportRoot = new lib.dinosaur();
            stage = new createjs.Stage(canvas);
            stage.addChild(exportRoot);
            //Registers the "tick" event listener.
            createjs.Ticker.setFPS(lib.properties.fps);
            createjs.Ticker.addEventListener("tick", stage);
            //Code to support hidpi screens and responsive scaling.
            (function(isResp, respDim, isScale, scaleType) {
                var lastW, lastH, lastS=1;
                window.addEventListener('resize', resizeCanvas);
                resizeCanvas();
                function resizeCanvas() {
                    var w = lib.properties.width, h = lib.properties.height;
                    var iw = window.innerWidth, ih=window.innerHeight;
                    var pRatio = window.devicePixelRatio, xRatio=iw/w, yRatio=ih/h, sRatio=1;
                    if(isResp) {
                        if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
                            sRatio = lastS;
                        }
                        else if(!isScale) {
                            if(iw<w || ih<h)
                                sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==1) {
                            sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==2) {
                            sRatio = Math.max(xRatio, yRatio);
                        }
                    }
                    canvas.width = w*pRatio*sRatio;
                    canvas.height = h*pRatio*sRatio;
                    canvas.style.width = w*sRatio-15+'px';
                    canvas.style.height = h*sRatio-15+'px';
                    stage.scaleX = pRatio*sRatio;
                    stage.scaleY = pRatio*sRatio;
                    lastW = iw; lastH = ih; lastS = sRatio;
                }
            })(true,'both',false,1);
        }
    </script>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300' rel='stylesheet' type='text/css' />

</head>
<body onload="init();">

    <!-- Load page -->
    <div class="animationload">
        <div class="loader">
        </div>
    </div>
    <!-- End load page -->


    <!-- Content Wrapper -->
    <div id="wrapper">
        <div class="container">

            <!-- Dinosaur -->
            <div class="dinosaur">
                <canvas id="canvas" width="700" height="310" style="display: block;"></canvas>
            </div>
            <!-- end Dinosaur -->

            <!-- Info -->
            <div class="info">
                <h2>You have some problems</h2>
                <p>The page you are looking for was moved, removed, renamed or might<br>
                    never existed.</p>
                <a href="#" class="btn">Go Home</a>
            </div>
            <!-- end Info -->

        </div>
        <!-- end container -->
    </div>
    <!-- end Content Wrapper -->

    <!-- Scripts -->
    <script src="https://envato.ukiedev.com/pack404/dinosaur/assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="https://envato.ukiedev.com/pack404/dinosaur/assets/boostrap-files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://envato.ukiedev.com/pack404/dinosaur/assets/js/modernizr.custom.js" type="text/javascript"></script>
    <script src="https://envato.ukiedev.com/pack404/dinosaur/assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>