<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Stigma2</title>

        <link rel="stylesheet" href="css/app.css" />

        <script data-main="scripts/main" src="bower_components/requirejs/require.js"></script>
    </head>
    <body ng-controller="IndexCtrl">
        <header>
            <top-bar>
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="#">My Site</a></h1>
                    </li>
                </ul>
                <top-bar-section>
                <section class="top-bar-section">
                    <ul class="left">
                        <li><a ng-click=""><i class="fi-list"></i></a></li>
                        <li><a href="#">Left Nav Button</a></li>
                    </ul>
                    <ul class="right">
                        <li class="active"><a href="#">Right Button Active</a></li>
                        <li has-dropdown>
                            <a href="#">Right Button Dropdown</a>
                            <ul class="dropdown">
                                <li><a href="#">First link in dropdown</a></li>
                                <li class="active"><a href="#">Active link in dropdown</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fi-widget"></i></a></li>
                        <li><a href="#"><i class="fi-lock"></i></a></li>
                    </ul>
                </section>
                </top-bar-section>
            </nav>
            </top-bar>
        </header>
        <div class="row">
            <aside class="large-2 columns">
                <ul class="side-nav">
                    <li class="heading">Dashboard</li>
                    <li><a ui-sref="dashboard.overview">Overview</a></li>
                    <li class="heading">Server</li>
                    <li><a ui-sref="">Host</a></li>
                    <li><a ui-sref="">Service</a></li>
                    <li class="heading">Configuration</li>
                    <li><a ui-sref="configurationHostList">Host</a></li>
                    <li><a ui-sref="">Service</a></li>
                    <li><a ui-sref="configurationCommandList">Command</a></li>
                    <li class="heading">History</li>
                    <li><a ui-sref="">Problem</a></li>
                    <li><a ui-sref="historyReport">Report</a></li>
                    <li><a ui-sref="">Event</a></li>
                    <li class="heading">Setting</li>
                    <li><a ui-sref="">Dashboard</a></li>
                    <li><a ui-sref="">User / Role</a></li>
                    <li><a ui-sref="">PreConfig</a></li>
                    <li class="heading">System</li>
                    <li><a ui-sref="">Start / Stop</a></li>
                </ul>
            </aside>
            <section class="large-10 columns">
                <article>
                    <div ui-view></div>
                </article>
            </section>
        </div>
        <footer>
            <hr></hr>
            <span>© Copyright 2015 All Rights Reserved.</span>
        </footer>
    </body>
</html>