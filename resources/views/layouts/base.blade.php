<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LettingHQ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Loading Bootstrap -->
        <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

        <!-- Loading Flat UI Pro -->
        <link href="dist/css/flat-ui-pro.css" rel="stylesheet">

        <!-- Custom Stylesheet -->
        <link href="css/style.css" rel="stylesheet">


        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="#">LettingHQ</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#fakelink">Check</a></li>
                        <li><a href="#fakelink">Fix</a></li>
                        <li><a href="#fakelink">Photy</a></li>
                        <li><a href="#">Pricing</a>
                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <button class="btn btn-default navbar-btn" type="button">Sign Up Now</button>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav><!-- /navbar -->

        @yield('content')

        <footer class="footer">
            <div class="bottom-menu bottom-menu-large bottom-menu-inverse">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <a href="#fakelink" class="bottom-menu-brand">LettingHQ</a>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h5 class="title">LettingHQ</h5>
                            <ul class="bottom-menu-list">
                                <li><a href="#fakelink">Dashboard</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h5 class="title">Check</h5>
                            <ul class="bottom-menu-list">
                                <li><a href="#fakelink">Design</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h5 class="title">Fix</h5>
                            <ul class="bottom-menu-list">
                                <li><a href="#fakelink">Insight</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h5 class="title">Photy</h5>
                            <ul class="bottom-menu-list">
                                <li><a href="#fakelink">Register / Login</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h5 class="title">About Us</h5>
                            <ul class="bottom-menu-list">
                                <li><a href="#fakelink">Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
        <script src="dist/js/vendor/jquery.min.js"></script>
        <script src="dist/js/vendor/video.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="dist/js/flat-ui-pro.js"></script>
    </body>
</html>