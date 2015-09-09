<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>New Start</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->

        <link rel="stylesheet" href="/site/css/style.css">
    </head>
    <body>
        <header>
            <nav class="navbar head-navbar navbar-default top-nav reset">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display-->
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target=".collapse.navbar-collapse" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling-->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">top images<span class="glyphicon glyphicon-triangle-bottom"></span><span class="sr-only">(current)</span></a></li>
                            <li><a href="#">categories <span class="glyphicon glyphicon-triangle-bottom"></span><span class="sr-only">(current)</span></a></li>
                            <li><a href="#">photographer <span class="glyphicon glyphicon-triangle-bottom"></span><span class="sr-only">(current)</span></a></li>
                            <li><a href="#">location <span class="glyphicon glyphicon-triangle-bottom"></span><span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Colors <span class="glyphicon glyphicon-tint"></span><span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Search<span class="glyphicon glyphicon-search"></span><span class="sr-only">(current)</span></a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="#" class="login"><span class="icon glyphicon glyphicon-lock"></span>login<span class="sr-only">(current)</span></a></li>
                            <li><a href="#" class="signup">/ sign up <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">bag <span class="sr-only">(current)</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-default large reset white">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display-->
                    <div class="navbar-header"></div>
                    <ul class="nav navbar-nav reset pull-left">
                        <li><a href="#"><span class="glyphicon glyphicon-option-vertical"></span><span class="sr-only">(current)</span></a></li>
                    </ul><a href="javascript:;" class="navbar-brand center">Brand</a>
                    <ul class="nav navbar-nav pull-right reset">
                        <li><a href="#" class="navbar-toggle reset"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="white">
            <div class="col-xs-12 col-sm-3">
                <p class="copy-right text-uppercase"><i class="fa fa-copyright icon-padding"></i>copyright 2015</p>
            </div>
            <div class="col-xs-12 col-sm-6 text-center">
                <ul class="list-inline social-media text-uppercase">
                    <li><a href="">free images</a></li>
                    <li><a href="">language</a></li>
                    <li><a href="">faq</a></li>
                    <li><a href="">blog</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3">
                <ul class="list-inline social-media pull-right text-uppercase">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </footer>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="/site/js/vendor.js"></script>
        <script src="/site/js/plugins.js"></script>
        <script src="/site/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    </body>
</html>