<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LettingHQ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Loading Bootstrap -->
        <link href="{{ asset('dist/css/vendor/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Loading Flat UI Pro -->
        <link href="{{ asset('dist/css/flat-ui-pro.css') }}" rel="stylesheet">

        <!-- Custom Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">


        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="{{ asset('js/vendor/html5shiv.js') }}"></script>
        <script src="{{ asset('js/vendor/respond.min.js') }}"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="{{{ action('HQController@getIndex') }}}">LettingHQ</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav">
                        <li class="{{ ($active == 'HQ') ? 'active' : '' }}"><a href="{{{ action('HQController@getIndex') }}}">Home</a></li>
                        <li class="{{ ($active == 'LC') ? 'active' : '' }}"><a href="{{{ action('LCController@getIndex') }}}">Check</a></li>
                        <li class="{{ ($active == 'LF') ? 'active' : '' }}"><a href="{{{ action('LFController@getIndex') }}}">Fix</a></li>
                        <li class="{{ ($active == 'Photy') ? 'active' : '' }}"><a href="{{{ action('PhotyController@getIndex') }}}">Photy</a></li>
                        <li class="{{ ($active == 'Pricing') ? 'active' : '' }}"><a href="{{{ action('HQController@getPricing') }}}">Pricing</a>
                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <button class="btn btn-default navbar-btn" type="button">Sign Up Now</button>
                        <ul class="nav navbar-nav">
                        <li class="{{ ($active == 'Contact') ? 'active' : '' }}"><a href="{{{ action('HQController@getContact') }}}">Help</a></li>
                        </ul>
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
                                <li><a href="{{{ action('HQController@getIndex') }}}">Home</a></li>
                                <li><a href="#fakelink">Pricing</a></li>
                                <li><a href="#fakelink">Help</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h5 class="title">LettingCheck</h5>
                            <ul class="bottom-menu-list">
                                <li><a href="{{{ action('LCController@getIndex') }}}">Home</a></li>
                                <li><a href="#fakelink">Tour</a></li>
                                <li><a href="#fakelink">Case Studies</a></li>
                                <li><a href="#fakelink">Features</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h5 class="title">LettingFix</h5>
                            <ul class="bottom-menu-list">
                                <li><a href="{{{ action('LFController@getIndex') }}}">Home</a></li>
                                <li><a href="#fakelink">Tour</a></li>
                                <li><a href="#fakelink">Case Studies</a></li>
                                <li><a href="#fakelink">Features</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h5 class="title">Photy</h5>
                            <ul class="bottom-menu-list">
                                <li><a href="{{{ action('PhotyController@getIndex') }}}">Home</a></li>
                                <li><a href="#fakelink">Tour</a></li>
                                <li><a href="#fakelink">Case Studies</a></li>
                                <li><a href="#fakelink">Features</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <h5 class="title">About Us</h5>
                            <ul class="bottom-menu-list">
                                <li><a href="#fakelink">Team</a></li>
                                <li><a href="#fakelink">Press</a></li>
                                <li><a href="#fakelink">Twitter</a></li>
                                <li><a href="#fakelink">Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
        <script src="{{ asset('dist/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('dist/js/vendor/video.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('dist/js/flat-ui-pro.js') }}"></script>
    </body>
</html>