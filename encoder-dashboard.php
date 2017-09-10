<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Research Study Encoding System">
  <meta name="author" content="Chris Rocco">
  <title>Encoder Dashboard | Big Data UAB</title>
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
  <link rel="stylesheet" href="..\assets/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="..\assets/vendor/chartist/chartist.css">
  <link rel="stylesheet" href="..\assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="..\assets/vendor/aspieprogress/asPieProgress.css">
  <link rel="stylesheet" href="..\assets/vendor/jquery-selective/jquery-selective.css">
  <link rel="stylesheet" href="..\assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
  <link rel="stylesheet" href="..\assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="..\assets/examples/css/encoder-dashboard.css">
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
<body class="animsition dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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
  <div class="page">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <!-- First Row -->
        <!-- Personal -->
        <div class="col-xxl-4 col-xl-6 col-lg-6">
          <div id="personalCompletedWidget" class="card card-shadow pb-20">
            <div class="card-header card-header-transparent cover overlay">
              <img class="cover-image" src="..\assets/photos/placeholder.png">
              <div class="overlay-panel overlay-background vertical-align">
                <div class="vertical-align-middle">
                  <a class="avatar" href="javascript:void(0)">
                    <img alt="" src="..\assets/avatars/1.png">
                  </a>
                  <div class="font-size-20 mt-10">
                    <span class="bdFirstName"></span>
                    <span class="bdLastName"></span>
                  </div>
                  <div class="font-size-14">
                    <span class="bdEmail"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-block">
              <div class="row text-center mb-20">
                <div class="col-6">
                  <div class="counter">
                    <div class="counter-label total-completed">TOTAL ENCODINGS</div>
                    <div class="counter-number red-600">[43]</div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="counter">
                    <div class="counter-label">TOTAL SESSIONS</div>
                    <div class="counter-number blue-600">[267]</div>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <!--<caption>TODAY STATISTIC</caption>-->
                  <tbody>
                    <tr>
                      <td>
                        Average Completion
                      </td>
                      <td>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar progress-bar-info bg-blue-600" role="progressbar" aria-valuenow="90"
                          aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                          </div>
                        </div>
                      </td>
                      <td>
                        [90]%
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Quality Rating
                      </td>
                      <td>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar progress-bar-info bg-green-600" role="progressbar" aria-valuenow="86"
                          aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                          </div>
                        </div>
                      </td>
                      <td>
                        [86]%
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Conflict Resolution
                      </td>
                      <td>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar progress-bar-info bg-red-600" role="progressbar" aria-valuenow="68"
                          aria-valuemin="0" aria-valuemax="100" style="width: 68%">
                          </div>
                        </div>
                      </td>
                      <td>
                        [68]%
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- End Personal -->
        <!-- To Do List -->
        <div class="col-xxl-4 col-xl-6 col-lg-6">
          <!-- Example Panel With Heading -->
          <div class="panel panel-bordered">
            <div class="panel-heading">
              <h3 class="panel-title">Projects I Contribute To</h3>
              <div class="panel-actions">
                <a class="panel-action icon wb-plus" href="javascript:ApplicationService.joinStudy()"
                aria-hidden="true"></a>
              </div>
            </div>
            <div class="panel-body">
              <ul class="list-group list-group-full">
                <li class="list-group-item">
                  <div class="media">
                    <div class="pr-20">
                      <a class="avatar" href="javascript:void(0)">
                        <img class="img-fluid" src="https://image.flaticon.com/icons/svg/164/164995.svg"
                        alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h5 class="mt-0 mb-5">[Murine Rigor]</h5>
                      <small>[short description here]</small>
                    </div>
                    <div class="pl-20">
                      <span class="status status-lg status-busy"></span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Example Panel With Heading -->
        </div>
        <!-- End To Do List -->
        <!-- Recent Activity -->
        <div class="col-xxl-4">
          <div id="recentActivityWidget" class="card card-shadow card-lg pb-20">
            <div class="card-header card-header-transparent pb-10">
              <div class="card-header-actions">
                <span class="badge badge-default badge-round">VIEW ALL</span>
              </div>
              <h5 class="card-title">
                RECENT ACTIVITY
              </h5>
            </div>
            <ul class="timeline timeline-icon">
              <li class="timeline-reverse timeline-item">
                <div class="timeline-content-wrap">
                  <div class="timeline-dot bg-green-600">
                    <i class="icon wb-file" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content">
                    <div class="title">
                      <span class="authors">[Andrew Brown]</span> assigned a paper
                    </div>
                    <div class="metas">
                      active 14 minutes ago
                    </div>
                    <ul class="members">
                      <li>
                        <img class="avatar avatar-sm" src="..\assets/avatars/7.png">
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="..\assets/avatars/6.png">
                      </li>
                      <li>
                        <img class="avatar avatar-sm" src="..\assets/avatars/8.png">
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="timeline-reverse timeline-item">
                <div class="timeline-content-wrap">
                  <div class="timeline-dot bg-orange-600">
                    <i class="icon wb-map" aria-hidden="true"></i>
                  </div>
                  <div class="timeline-content">
                    <div class="title">
                      <span class="authors">[Andrew Brown]</span>
                      invited you to join the [Murine Rigor] project
                    </div>
                    <div class="metas">
                      active 3 hours ago
                    </div>
                    <ul class="operates">
                      <li>
                        <button class="btn btn-outline btn-success btn-round">Accept</button>
                      </li>
                      <li>
                        <button class="btn btn-outline btn-danger btn-round">Refuse</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Recent Activity -->
        <!-- End First Row -->
        <!-- Second Row -->
        <!-- Completed Options Pie Widgets -->
        <div class="col-xxl-3">
          <div class="row h-full" data-plugin="matchHeight">
            <div class="col-xxl-12 col-lg-4 col-sm-4">
              <div class="card card-shadow card-completed-options">
                <div class="card-block p-30">
                  <div class="row">
                    <div class="col-6">
                      <div class="counter text-left blue-grey-700">
                        <div class="counter-label mt-10">Papers Encoded
                        </div>
                        <div class="counter-number font-size-40 mt-10">
                          [1,234]
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                      data-barcolor="#57c7d4" data-size="100" data-barsize="10"
                      data-goal="86" aria-valuenow="86" role="progressbar">
                        <span class="pie-progress-number blue-grey-700 font-size-20">
                          86%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-12 col-lg-4 col-sm-4">
              <div class="card card-shadow card-completed-options">
                <div class="card-block p-30">
                  <div class="row">
                    <div class="col-6">
                      <div class="counter text-left blue-grey-700">
                        <div class="counter-label mt-10">Questions Answered
                        </div>
                        <div class="counter-number font-size-40 mt-10">
                          698
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                      data-barcolor="#62a8ea" data-size="100" data-barsize="10"
                      data-goal="62" aria-valuenow="62" role="progressbar">
                        <span class="pie-progress-number blue-grey-700 font-size-20">
                          62%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-12 col-lg-4 col-sm-4">
              <div class="card card-shadow card-completed-options">
                <div class="card-block p-30">
                  <div class="row">
                    <div class="col-6">
                      <div class="counter text-left blue-grey-700">
                        <div class="counter-label mt-10">Cards Completed
                        </div>
                        <div class="counter-number font-size-40 mt-10">
                          1,358
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                      data-barcolor="#926dde" data-size="100" data-barsize="10"
                      data-goal="56" aria-valuenow="56" role="progressbar">
                        <span class="pie-progress-number blue-grey-700 font-size-20">
                          56%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Completed Options Pie Widgets -->
        <!-- Team Total Completed -->
        <div class="col-xxl-9">
          <div id="teamCompletedWidget" class="card card-shadow example-responsive">
            <div class="card-block p-20 pb-25">
              <div class="row pb-40" data-plugin="matchHeight">
                <div class="col-md-6 col-sm-12">
                  <div class="counter text-left pl-10">
                    <div class="counter-label">Total Data Collected</div>
                    <div class="counter-number-group text-truncate">
                      <span>1,439</span>
                      <span>86%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <ul class="list-inline mr-50">
                    <li class="list-inline-item">
                      Task Completed
                    </li>
                    <li class="list-inline-item">
                      Cards Completed
                    </li>
                  </ul>
                </div>
              </div>
              <div class="ct-chart"></div>
            </div>
          </div>
        </div>
        <!-- End Team Total Completed -->
        <!-- End Second Row -->
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Add Item Dialog -->
  <div id="addtodoItemForm" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="addtodoItemForm"
  aria-hidden="true">
    <div class="modal-dialog modal-simple">
      <form class="modal-content form-horizontal" role="form" action="#" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="moadl-title">Create New To Do Item</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="title">Title:</label>
            <div class="col-sm-10">
              <input id="title" class="form-control" type="text" name="title" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="dueDate">Due Date</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input id="dueDate" class="form-control" type="text" data-plugin="datepicker" data-container="#addtodoItemForm"
                />
                <span class="input-group-addon">
                  <i class="icon wb-calendar" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="people">People:</label>
            <div class="col-sm-10">
              <select id="people" multiple="multiple" class="plugin-selective">
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-actions">
            <button class="btn btn-primary" data-dismiss="modal" type="button">
              Add This Item
            </button>
            <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">
                        Cancel
                    </a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- End Add Item Dialog -->
  <!-- Edit Dialog -->
  <div class="modal fade" id="edittodoItemForm" aria-hidden="true" aria-labelledby="edittodoItemForm"
  role="dialog" tabindex="-1" data-show="false">
    <div class="modal-dialog modal-simple">
      <form class="modal-content form-horizontal" action="#" method="post" role="form">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Edit To Do Item</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="editTitle">Title:
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="editTitle" name="editTitle">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="editStarts">Due Date:
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" id="editDueDate" name="editDueDate" data-container="#edittodoItemForm"
                data-plugin="datepicker">
                <span class="input-group-addon">
                  <i class="icon wb-calendar" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="editPeople">People:
            </label>
            <div class="col-sm-10">
              <select id="editPeople" multiple="multiple" class="plugin-selective"></select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-actions">
            <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
            <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
            <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- End Edit Dialog -->
  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2017 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Big Data</a></div>
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
  <script src="..\assets/vendor/chartist/chartist.js"></script>
  <script src="..\assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js"></script>
  <script src="..\assets/vendor/aspieprogress/jquery-asPieProgress.js"></script>
  <script src="..\assets/vendor/matchheight/jquery.matchHeight-min.js"></script>
  <script src="..\assets/vendor/jquery-selective/jquery-selective.min.js"></script>
  <script src="..\assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
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
  <script src="..\assets/js/Plugin/matchheight.js"></script>
  <script src="..\assets/js/Plugin/aspieprogress.js"></script>
  <script src="..\assets/js/Plugin/bootstrap-datepicker.js"></script>
  <script src="..\assets/js/Plugin/asscrollable.js"></script>
  <script src="..\assets/examples/js/encoder-dashboard.js"></script>
  <script>
  (function(document, window, $) {
    $(document).ready(function() {
      ApplicationService.renderSession();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>