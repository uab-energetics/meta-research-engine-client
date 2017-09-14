<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Research Study Encoding System">
    <meta name="author" content="Chris Rocco">
    <title>Conflict Resolution | Big Data UAB</title>
    <link rel="apple-touch-icon" href="..\assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="..\assets/images/favicon.ico?v=2">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="..\assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="..\assets/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="..\assets/css/site.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="..\assets/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="..\assets/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="..\assets/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="..\assets/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="..\assets/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="..\assets/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="..\assets/vendor/bootstrap-sweetalert/sweetalert.css">
    <link rel="stylesheet" href="..\assets/examples/css/conflict-resolution.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="..\assets/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="..\assets/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <!--[if lt IE 9]>
    <script src="..\assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="..\assets/vendor/media-match/media.match.min.js"></script>
    <script src="..\assets/vendor/respond/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script src="..\assets/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="site-navbar navbar navbar-default navbar-inverse navbar-fixed-top navbar-mega"
     role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="..\assets/images/logo.png" title="Remark">
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>
    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                    <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="nav-item hidden-float">
                    <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                       role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->
            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:ApplicationService.joinStudy()" title="Join Research Project"
                       role="button">
                        Join Project &nbsp;
                        <i class="icon wb-plus" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="..\assets/avatars/6.png" alt="...">
                <i></i>
              </span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user"
                                                                                              aria-hidden="true"></i>
                            Profile</a>
                        <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="javascript:AuthService.logout(); window.location='login.html'"
                           role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                    </div>
                </li>
                <!--<li class="nav-item dropdown">
                              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                                 aria-expanded="false" data-animation="scale-up" role="button">
                                  <i class="icon wb-bell" aria-hidden="true"></i>
                                  <span class="badge badge-pill badge-danger up">5</span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                                  <div class="dropdown-menu-header">
                                      <h5>NOTIFICATIONS</h5>
                                      <span class="badge badge-round badge-danger">New 5</span>
                                  </div>

                                  <div class="list-group">
                                      <div data-role="container">
                                          <div data-role="content">
                                              <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                                  <div class="media">
                                                      <div class="pr-10">
                                                          <i class="icon wb-order bg-red-600 white icon-circle"
                                                             aria-hidden="true"></i>
                                                      </div>
                                                      <div class="media-body">
                                                          <h6 class="media-heading">You have a new assignment</h6>
                                                          <time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours
                                                              ago
                                                          </time>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                                  <div class="media">
                                                      <div class="pr-10">
                                                          <i class="icon wb-user bg-green-600 white icon-circle"
                                                             aria-hidden="true"></i>
                                                      </div>
                                                      <div class="media-body">
                                                          <h6 class="media-heading">Your assignment was merged without
                                                              conflict</h6>
                                                          <time class="media-meta" datetime="2017-06-11T18:29:20+08:00">2 days
                                                              ago
                                                          </time>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                                  <div class="media">
                                                      <div class="pr-10">
                                                          <i class="icon wb-settings bg-red-600 white icon-circle"
                                                             aria-hidden="true"></i>
                                                      </div>
                                                      <div class="media-body">
                                                          <h6 class="media-heading">Settings updated</h6>
                                                          <time class="media-meta" datetime="2017-06-11T14:05:00+08:00">2 days
                                                              ago
                                                          </time>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                                  <div class="media">
                                                      <div class="pr-10">
                                                          <i class="icon wb-calendar bg-blue-600 white icon-circle"
                                                             aria-hidden="true"></i>
                                                      </div>
                                                      <div class="media-body">
                                                          <h6 class="media-heading">Paper Completed</h6>
                                                          <time class="media-meta" datetime="2017-06-10T13:50:18+08:00">3 days
                                                              ago
                                                          </time>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                                  <div class="media">
                                                      <div class="pr-10">
                                                          <i class="icon wb-chat bg-orange-600 white icon-circle"
                                                             aria-hidden="true"></i>
                                                      </div>
                                                      <div class="media-body">
                                                          <h6 class="media-heading">New Conflict</h6>
                                                          <time class="media-meta" datetime="2017-06-10T12:34:48+08:00">3 days
                                                              ago
                                                          </time>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="dropdown-menu-footer">
                                      <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                          <i class="icon md-settings" aria-hidden="true"></i>
                                      </a>
                                      <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                          All notifications
                                      </a>
                                  </div>
                              </div>
                          </li>-->
            </ul>
            <!-- End Navbar Toolbar Right -->
            <div class="navbar-brand navbar-brand-center">
                <a href="index.html">
                    <img class="navbar-brand-logo" src="..\assets/images/UAB-logo-white.png" title="Remark">
                </a>
            </div>
        </div>
        <!-- End Navbar Collapse -->
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>
<div class="site-menubar">
    <div class="site-menubar-header">
        <div class="cover overlay">
            <img class="cover-image" src="..\assets//examples/images/dashboard-header.jpg"
                 alt="...">
            <div class="overlay-panel vertical-align overlay-background">
                <div class="vertical-align-middle">
                    <a class="avatar avatar-lg" href="javascript:void(0)">
                        <img src="..\assets/avatars/6.png" alt="">
                    </a>
                    <div class="site-menubar-info">
                        <h5 class="site-menubar-user">
                            <span class="bdFirstName"></span> &nbsp;
                            <span class="bdLastName"></span>
                        </h5>
                        <p class="bdEmail" class="site-menubar-email">chris@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="bdManagerOnly site-menu-item ">
                        <a href="project-center.html">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title"> Project Center </span>
                        </a>
                    </li>
                    <li class="site-menu-item ">
                        <a href="codebook.html">
                            <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                            <span class="site-menu-title">Code Book</span>
                        </a>
                    </li>
                    <li class="site-menu-item ">
                        <a href="assignments.html">
                            <i class="site-menu-icon wb-pencil" aria-hidden="true"></i>
                            <span class="site-menu-title">My Assignments</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page -->
<div class="page" ng-app="conflict-resolution" ng-controller="ConflictResolutionController">
    <div class="page-header">
        <h1 class="page-title"> Resolving Conflicts </h1>
        <div class="page-header-actions">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Assignments</a></li>
                <li class="breadcrumb-item active">Resolve Conflicts</li>
            </ol>
        </div>
    </div>
    <div class="page-content">
        <div class="panel is-collapse">
            <div class="panel-heading">
                <h3 class="panel-title" style="padding-right: 20%"> {[{paper.title}]}</h3>
                <div class="panel-actions">
                    <div class="dropdown">
                        <a class="panel-action" data-toggle="dropdown" href="#" aria-expanded="false"><i
                                    class="icon wb-settings" aria-hidden="true"></i></a>
                        <div class="dropdown-menu dropdown-menu-bullet" role="menu">
                            <a ng-click="popOut( paper )" class="dropdown-item" href="javascript:void(0)"
                               role="menuitem"><i class="icon wb-flag" aria-hidden="true"></i> Pop Out</a>
                        </div>
                    </div>
                    <a class="panel-action icon wb-minus" data-toggle="panel-collapse" aria-expanded="true"
                       aria-hidden="true"></a>
                    <a class="panel-action icon wb-expand" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                </div>
            </div>
            <div class="panel-body">
                {[{paper.description}]}
                <iframe ng-src="{[{paper.url}]}" width="100%" height="700px"></iframe>
            </div>
        </div>
        <div class="row">
            <bd-record ng-repeat="record in paper.masterEncoding" record="record" asUser="assignment._key"
                       editable="true" ng-if="record.responses.length > 1"></bd-record>
            <!--<div ng-repeat="masterRecord in paper.masterEncoding"
                     ng-if="masterRecord.responses.length > 1"
                     class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Responses to <span ng-bind="masterRecord.question.name"></span>:
                                <span class="panel-desc"><span ng-bind="masterRecord.question.question"></span></span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="table-responsive">
                                        <table class="table table-hover" data-role="content">
                                            <thead class="bg-blue-grey-100">
                                            <tr>
                                                <th>
                                                    Data
                                                </th>
                                                <th>
                                                    Responders
                                                </th>
                                                <th> Agree</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="response in masterRecord.responses"
                                                ng-class="{ 'me': isMyResponse( response ) }">
                                                <td>
                                                    <span ng-bind="response.data.value"></span>
                                                </td>
                                                <td>
                                                    <img ng-repeat="assignmentKey in response.users"
                                                         class="mr-10 avatar avatar-sm" src="../assets/avatars/7.png"
                                                         data-toggle="tooltip"
                                                         data-original-title="{[{assignmentKey}]}" data-container="body"
                                                         title="">
                                                </td>
                                                <td>
                                                    <button ng-click="iAgree( masterRecord.question, response )"
                                                            ng-if="( ! isMyResponse( response ) )"
                                                            type="button"
                                                            class="btn btn-animate btn-animate-side btn-success">
                                                        <span><i class="icon wb-thumb-up"
                                                                 aria-hidden="true"></i>Agree</span>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
        </div>
    </div>
</div>
<!-- End Page -->
<!-- Footer -->
<footer class="site-footer">
    <div class="site-footer-legal">© 2017 <a
                href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Big Data</a>
    </div>
    <div class="site-footer-right">
        Website by by <a href="http://themeforest.net/user/amazingSurge">Chris Rocco</a>
    </div>
</footer>
<!-- Core  -->
<script src="..\assets/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="..\assets/vendor/jquery/jquery.js"></script>
<script src="..\assets/vendor/tether/tether.js"></script>
<script src="..\assets/vendor/bootstrap/bootstrap.js"></script>
<script src="..\assets/vendor/animsition/animsition.js"></script>
<script src="..\assets/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="..\assets/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="..\assets/vendor/asscrollable/jquery-asScrollable.js"></script>
<!-- Plugins -->
<script src="..\assets/vendor/switchery/switchery.min.js"></script>
<script src="..\assets/vendor/intro-js/intro.js"></script>
<script src="..\assets/vendor/screenfull/screenfull.js"></script>
<script src="..\assets/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="..\assets/vendor/bootstrap-sweetalert/sweetalert.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="..\assets/vendor/peity/jquery.peity.min.js"></script>
<script src="..\assets/js/Plugin/panel.js"></script>
<!-- Scripts -->
<script src="..\assets/js/State.js"></script>
<script src="..\assets/js/Component.js"></script>
<script src="..\assets/js/Plugin.js"></script>
<script src="..\assets/js/Base.js"></script>
<script src="..\assets/js/Config.js"></script>
<script src="..\assets/js/URLs.js"></script>
<script src="..\assets/js/Section/Menubar.js"></script>
<script src="..\assets/js/Section/Sidebar.js"></script>
<script src="..\assets/js/Section/PageAside.js"></script>
<script src="..\assets/js/Plugin/menu.js"></script>
<!-- Providers -->
<script src="..\assets/js/AuthService.js"></script>
<script src="..\assets/js/DataService.js"></script>
<script src="..\assets/js/ApplicationService.js"></script>
<!-- Config -->
<script src="..\assets/js/config/colors.js"></script>
<script src="..\assets/js/config/tour.js"></script>
<script>
    Config.set('assets', '..\assets');
</script>
<!-- Page -->
<script src="..\assets/js/Site.js"></script>
<script src="..\assets/js/Plugin/asscrollable.js"></script>
<script src="..\assets/js/Plugin/slidepanel.js"></script>
<script src="..\assets/js/Plugin/switchery.js"></script>
<script src="..\assets/js/Plugin/panel.js"></script>
<script src="../app/conflict-resolution/conflict-resolution.module.js"></script>
<script src="../app/conflict-resolution/encoding.service.js"></script>
<script src="../app/conflict-resolution/transaction.service.js"></script>
<script src="../app/conflict-resolution/conflict-resolution.controller.js"></script>
<script src="../app/conflict-resolution/record/record.directive.js"></script>
<script src="..\assets/js/Plugin/peity.js"></script>
<script src="..\assets/js/Plugin/asselectable.js"></script>
<script src="..\assets/js/Plugin/selectable.js"></script>
<script src="..\assets/js/Plugin/table.js"></script>
<script src="..\assets/js/Plugin/asscrollable.js"></script>
<script src="..\assets/examples/js/charts/peity.js"></script>
<script>
    (function (document, window, $) {
        $(document).ready(function () {
            ApplicationService.renderSession();
        });
    })(document, window, jQuery);
</script>
</body>
</html>