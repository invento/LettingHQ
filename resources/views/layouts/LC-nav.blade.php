        <nav class="navbar navbar-fixed-top second-nav bg-lc-secondary" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-02">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-02">
                    <ul class="nav navbar-nav">
                        <li class="{{ ($subactive == 'LC-Home') ? 'active' : '' }}"><a href="">LettingCheck</a></li>
                        <li class="{{ ($subactive == 'LC-Tour') ? 'active' : '' }}"><a href="">Tour</a></li>
                        <li class="{{ ($subactive == 'LC-CaseStudies') ? 'active' : '' }}"><a href="">Case Studies</a></li>
                        <li class="{{ ($subactive == 'LC-Features') ? 'active' : '' }}"><a href="">Features</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav><!-- /navbar -->