<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Research Study Encoding System">
  <meta name="author" content="Chris Rocco">
  <title> | Big Data UAB</title>
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
  <link rel="stylesheet" href="..\assets/vendor/bootstrap-sweetalert/sweetalert.css">
  <link rel="stylesheet" href="..\assets/vendor/toastr/toastr.css">
  <link rel="stylesheet" href="..\assets/vendor/bootstrap-treeview/bootstrap-treeview.css">
  <link rel="stylesheet" href="..\assets/vendor/jstree/jstree.min.css">
  <link rel="stylesheet" href="..\assets/vendor/fontIconPicker-2.0.0/css/jquery.fonticonpicker.css">
  <link rel="stylesheet" href="..\assets/vendor/bootstrap-select/bootstrap-select.css">
  <link rel="stylesheet" href="..\assets/vendor/multi-select/multi-select.css">
  <link rel="stylesheet" href="..\assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="..\assets/fonts/font-awesome/font-awesome.css">
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
  <div class="page" ng-app="project-builder" ng-controller="ProjectBuilderController">
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Edit Projects</li>
      </ol>
      <h1 class="page-title">You are editing:
        <a href="javascript:void(0)"> {[{project.name}]} </a></h1>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-inverse btn-round" href="#" target="_blank">
          <i class="icon wb-link" aria-hidden="true"></i>
          <span class="hidden-sm-down"></span>
        </a>
      </div>
    </div>
    <div class="page-content">
      <div class="row">
        <!-- Structure Tree Column -->
        <div class="col-lg-5 col-md-6">
          <div class="col">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Current Structure</h3>
              </div>
              <div class="panel-body container-fluid">
                <div id="projectStructure"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Structure Tree Column -->
        <!-- Forms Column -->
        <div class="col-lg-7">
          <div class="nav-tabs-horizontal nav-tabs-inverse" data-plugin="tabs">
            <ul class="nav nav-tabs nav-tabs-solid" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" data-toggle="tab" href="#exampleIconifiedTabsOne" aria-controls="exampleIconifiedTabsOne"
                role="tab">
                  <i class="icon fa-folder" aria-hidden="true"></i>
                  <strong>DOMAINS</strong>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#exampleIconifiedTabsTwo" aria-controls="exampleIconifiedTabsTwo"
                role="tab">
                  <i class="icon fa-question" aria-hidden="true"></i>
                  <strong>QUESTIONS</strong>
                </a>
              </li>
            </ul>
            <div class="tab-content pt-15">
              <div class="tab-pane active" id="exampleIconifiedTabsOne" role="tabpanel">
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Add New Domain</h3>
                  </div>
                  <div class="panel-body container-fluid">
                    <form name="domainForm" autocomplete="off" ng-submit="handleCreateDomain()">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <h5 class="example-title">Parent Domain</h5>
                          <select name="parent" class="form-control">
                            <option value="#"> -- none --</option>
                            <option ng-repeat="domain in domains track by domain.id" value="{[{domain.id}]}">{[{domain.name}]}
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input name="name" type="text" class="form-control" required/>
                        <label class="floating-label">Name</label>
                      </div>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input name="description" type="text" class="form-control" required/>
                        <label class="floating-label">Description</label>
                      </div>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input name="tooltip" type="text" class="form-control" required/>
                        <label class="floating-label">Tool Tip</label>
                      </div>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <label class="control-label">icon</label>
                        <input name="icon" type="text" id="domain-icon-picker" required/>
                      </div>
                      <!-- INPUT element -->
                      <button type="submit" class="btn btn-block btn-primary"> Add to Project</button>
                    </form>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Domains</h3>
                  </div>
                  <div class="panel-body container-fluid">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Domain</th>
                          <th>Description</th>
                          <th class="text-nowrap">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="domain in domains track by domain.id">
                          <td> {[{domain.name}]}</td>
                          <td> {[{domain.description.substring(0, 25)}]}...</td>
                          <td class="text-nowrap">
                            <button ng-click="handleEditDomain( domain )" type="button" class="btn btn-sm btn-icon btn-flat btn-default"
                            data-toggle="tooltip" data-original-title="Edit">
                              <i class="icon wb-wrench" aria-hidden="true"></i>
                            </button>
                            <button ng-click="handleDeleteDomain( domain )" type="button" class="btn btn-sm btn-icon btn-flat btn-default"
                            data-toggle="tooltip" data-original-title="Delete">
                              <i class="icon wb-close" aria-hidden="true"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="exampleIconifiedTabsTwo" role="tabpanel">
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Add New Question</h3>
                    <!--<h4 class="example-title">Active</h4>-->
                    <!--<p></p>-->
                  </div>
                  <div class="panel-body container-fluid">
                    <form name="questionForm" autocomplete="off" ng-submit="handleCreateQuestion()">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <h5 class="example-title">Parent Domain</h5>
                          <select name="parent" class="form-control">
                            <option ng-repeat="domain in domains track by domain.id" value="{[{domain.id}]}">{[{domain.name}]}
                            </option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <h5 class="example-title"> Type </h5>
                          <select ng-model="selectedQuestionType" ng-options="type.id as type.name for type in questionTypes"
                          name="type" class="form-control">
                          </select>
                        </div>
                      </div>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input name="name" type="text" class="form-control" required/>
                        <label class="floating-label">Name</label>
                      </div>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input name="question" type="text" class="form-control" required/>
                        <label class="floating-label">The Question</label>
                      </div>
                      <!-- Type Conditionals -->
                      <div ng-if="selectedQuestionType === 'number'" class="row">
                        <div class="form-group col-md-4">
                          <label class="floating-label">Min</label>
                          <input name="min" type="number" class="form-control" placeholder="Lower Bound"
                          />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="floating-label">Max</label>
                          <input name="max" type="number" class="form-control" placeholder="Upper Bound"
                          />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="floating-label">Unit</label>
                          <input name="unit" type="text" class="form-control" placeholder="grams, celsius, meters"
                          />
                        </div>
                      </div>
                      <div ng-if="selectedQuestionType === 'boolean'" class="row">
                        <div class="form-group col-md-6">
                          <label class="floating-label">True Option</label>
                          <input name="trueOption" type="text" class="form-control" placeholder="Yes" />
                        </div>
                        <div class="form-group col-md-6">
                          <label class="floating-label">False Option</label>
                          <input name="falseOption" type="text" class="form-control" placeholder="No" />
                        </div>
                      </div>
                      <div ng-if="selectedQuestionType === 'text'" class="form-group form-material floating"
                      data-plugin="formMaterial">
                        <input name="placeholder" type="text" class="form-control" />
                        <label class="floating-label">Placeholder</label>
                      </div>
                      <div ng-if="selectedQuestionType === 'range'" class="row">
                        <div class="form-group col-md-4">
                          <label class="floating-label">Min</label>
                          <input name="rangeMin" type="number" class="form-control" placeholder="Lower Bound"
                          />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="floating-label">Max</label>
                          <input name="rangeMax" type="number" class="form-control" placeholder="Upper Bound"
                          />
                        </div>
                        <div class="form-group col-md-4">
                          <label class="floating-label">Unit</label>
                          <input name="rangeUnit" type="text" class="form-control" placeholder="degrees"
                          />
                        </div>
                      </div>
                      <div ng-show="selectedQuestionType === 'select'" class="form-group">
                        <div class="example">
                          <input id="multipleChoiceInput" type="text" class="form-control" data-plugin="tokenfield"
                          value="" />
                        </div>
                      </div>
                      <div ng-show="selectedQuestionType === 'multiselect'" class="form-group">
                        <div class="example">
                          <input id="multiselectInput" type="text" class="form-control" data-plugin="tokenfield"
                          value="" />
                        </div>
                      </div>
                      <!-- End Type Conditionals -->
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input name="tooltip" type="text" class="form-control" required/>
                        <label class="floating-label">Tool Tip</label>
                      </div>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <label class="control-label">icon</label>
                        <input name="icon" type="text" id="variable-icon-picker" required/>
                      </div>
                      <button type="submit" class="btn btn-block btn-primary"> Add to Project</button>
                    </form>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Questions</h3>
                  </div>
                  <div class="panel-body container-fluid">
                    <div class="example table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Question</th>
                            <th>Description</th>
                            <th class="text-nowrap">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr ng-repeat="question in questions track by question.id">
                            <td> {[{question.name}]}</td>
                            <td> {[{question.question.substring(0, 25)}]}...</td>
                            <td class="text-nowrap">
                              <button ng-click="handleEditQuestion( question )" type="button" class="btn btn-sm btn-icon btn-flat btn-default"
                              data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon wb-wrench" aria-hidden="true"></i>
                              </button>
                              <button ng-click="handleDeleteQuestion( question )" type="button" class="btn btn-sm btn-icon btn-flat btn-default"
                              data-toggle="tooltip" data-original-title="Delete">
                                <i class="icon wb-close" aria-hidden="true"></i>
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
          </div>
        </div>
        <!-- End Forms Column -->
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editDomainModal" aria-hidden="false" aria-labelledby="editDomainModalLabel"
    role="dialog" tabindex="-1">
      <div class="modal-dialog modal-simple">
        <form class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="editDomainModalLabel">Edit Domain</h4>
          </div>
          <div class="modal-body">
            <div class="panel-body container-fluid">
              <form name="domainForm" autocomplete="off" ng-submit="handleCreateDomain()">
                <h5 class="example-title">Parent Domain</h5>
                <div class="form-group">
                  <select ng-model="modalDomain.parent" class="form-control">
                    <option value="#">-- none --</option>
                    <option ng-repeat="domain in domains track by domain.id" ng-if="modalDomain.id !== domain.id && modalDomain.id !== domain.parent"
                    value="{[{domain.id}]}">{[{domain.name}]}
                    </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input ng-model="modalDomain.name" type="text" class="form-control" placeholder="placeholder">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input ng-model="modalDomain.description" type="text" class="form-control" placeholder="placeholder">
                </div>
                <div class="form-group">
                  <label>Tool Tip</label>
                  <input ng-model="modalDomain.tooltip" type="text" class="form-control" placeholder="placeholder">
                </div>
                <div class="form-group form-material floating" data-plugin="formMaterial">
                  <label class="control-label">icon</label>
                  <input ng-model="modalDomain.icon" type="text" name="icon" id="modal-icon-picker"
                  required/>
                </div>
                <!-- INPUT element -->
                <button data-dismiss="modal" type="submit" class="btn btn-block btn-primary"> Update
                </button>
              </form>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal fade" id="editQuestionModal" aria-hidden="false" aria-labelledby="editQuestionModalLabel"
    role="dialog" tabindex="-1">
      <div class="modal-dialog modal-simple">
        <form class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="editQuestionModalLabel">Edit Question</h4>
          </div>
          <div class="modal-body">
            <div class="panel-body container-fluid">
              <form name="questionForm" autocomplete="off">
                <div class="row">
                  <div class="form-group col-md-6">
                    <h5 class="example-title">Parent Domain</h5>
                    <select ng-model="modalQuestion.parent" name="parent" class="form-control">
                      <option ng-repeat="domain in domains track by domain.id" value="{[{domain.id}]}">{[{domain.name}]}
                      </option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <h5 class="example-title"> Type </h5>
                    <select ng-model="modalQuestion.type" ng-options="type.id as type.name for type in questionTypes"
                    class="form-control">
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input ng-model="modalQuestion.name" name="name" type="text" class="form-control"
                  required/>
                </div>
                <div class="form-group">
                  <label class="floating-label">The Question</label>
                  <input ng-model="modalQuestion.question" name="question" type="text" class="form-control"
                  required/>
                </div>
                <!-- Type Conditionals -->
                <div ng-if="modalQuestion.type === 'number'" class="row">
                  <div class="form-group col-md-4">
                    <label class="floating-label">Min</label>
                    <input ng-model="modalQuestion.min" name="min" type="number" class="form-control"
                    placeholder="Lower Bound" />
                  </div>
                  <div class="form-group col-md-4">
                    <label class="floating-label">Max</label>
                    <input ng-model="modalQuestion.max" name="max" type="number" class="form-control"
                    placeholder="Upper Bound" />
                  </div>
                  <div class="form-group col-md-4">
                    <label class="floating-label">Unit</label>
                    <input ng-model="modalQuestion.unit" name="unit" type="text" class="form-control"
                    placeholder="grams, celsius, meters" />
                  </div>
                </div>
                <div ng-if="modalQuestion.type === 'boolean'" class="row">
                  <div class="form-group col-md-6">
                    <label class="floating-label">True Option</label>
                    <input ng-model="modalQuestion.trueOption" name="trueOption" type="text" class="form-control"
                    placeholder="Yes" />
                  </div>
                  <div class="form-group col-md-6">
                    <label class="floating-label">False Option</label>
                    <input ng-model="modalQuestion.falseOption" name="falseOption" type="text" class="form-control"
                    placeholder="No" />
                  </div>
                </div>
                <div ng-if="modalQuestion.type === 'text'" class="form-group">
                  <label class="floating-label">Placeholder</label>
                  <input ng-model="modalQuestion.placeholder" name="placeholder" type="text" class="form-control"
                  required/>
                </div>
                <div ng-if="modalQuestion.type === 'range'" class="row">
                  <div class="form-group col-md-4">
                    <label class="floating-label">Min</label>
                    <input ng-model="modalQuestion.rangeMin" name="rangeMin" type="number" class="form-control"
                    placeholder="Lower Bound" />
                  </div>
                  <div class="form-group col-md-4">
                    <label class="floating-label">Max</label>
                    <input ng-model="modalQuestion.rangeMax" name="rangeMax" type="number" class="form-control"
                    placeholder="Upper Bound" />
                  </div>
                  <div class="form-group col-md-4">
                    <label class="floating-label">Unit</label>
                    <input ng-model="modalQuestion.rangeUnit" name="rangeUnit" type="text" class="form-control"
                    placeholder="degrees" />
                  </div>
                </div>
                <div ng-show="modalQuestion.type === 'select'" class="form-group">
                  <div class="example">
                    <label class="floating-label">Options</label>
                    <input id="editMultipleChoiceInput" onchange="updateMultipleChoice()" type="text"
                    class="form-control" data-plugin="tokenfield" value="" />
                  </div>
                </div>
                <div ng-show="modalQuestion.type === 'multiselect'" class="form-group">
                  <div class="example">
                    <label class="floating-label">Options</label>
                    <input id="editMultiselectInput" onchange="updateMultiselect()" type="text" class="form-control"
                    data-plugin="tokenfield" value="" />
                  </div>
                </div>
                <!-- End Type Conditionals -->
                <div class="form-group">
                  <label class="floating-label">Tool Tip</label>
                  <input ng-model="modalQuestion.tooltip" name="tooltip" type="text" class="form-control"
                  required/>
                </div>
                <div class="form-group">
                  <label class="control-label">icon</label>
                  <input ng-model="modalQuestion.icon" name="icon" type="text" id="variable-editor-icon-picker"
                  required/>
                </div>
                <button data-dismiss="modal" type="submit" class="btn btn-block btn-primary"> Update
                </button>
              </form>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Modal -->
  </div>
  <!-- End Page -->
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
  <script src="..\assets/vendor/bootstrap-sweetalert/sweetalert.js"></script>
  <script src="..\assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
  <script src="..\assets/vendor/toastr/toastr.js"></script>
  <script src="..\assets/vendor/bootstrap-treeview/bootstrap-treeview.min.js"></script>
  <script src="..\assets/vendor/jstree/jstree.min.js"></script>
  <script src="..\assets/vendor/fontIconPicker-2.0.0/jquery.fonticonpicker.js"></script>
  <script src="..\assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
  <script src="..\assets/vendor/bootstrap-select/bootstrap-select.js"></script>
  <script src="..\assets/vendor/multi-select/jquery.multi-select.js"></script>
  <script src="../node_modules/angular/angular.min.js"></script>
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
  <script src="../app/project-builder/project-builder.module.js"></script>
  <script src=../app/project-builder/project-builder.controller.js "></script>
    
    <script src="..\assets/js/Plugin/responsive-tabs.js "></script>
    <script src="..\assets/js/Plugin/closeable-tabs.js "></script>
    <script src="..\assets/js/Plugin/tabs.js "></script>
    <script src="..\assets/js/Plugin/jquery-placeholder.js "></script>
    <script src="..\assets/js/Plugin/material.js "></script>
    <script src="..\assets/js/Plugin/toastr.js "></script>
    <script src="..\assets/js/Plugin/bootstrap-treeview.js "></script>
    <script src="..\assets/js/Plugin/jstree.js "></script>
    <script src="..\assets/js/Plugin/bootstrap-tokenfield.js "></script>
    <script src="..\assets/js/Plugin/bootstrap-select.js "></script>
    <script src="..\assets/js/Plugin/multi-select.js "></script>
    
    <script src="..\assets/examples/js/define-study.js "></script>
    
    <script>
        (function(document, window, $){
            $(document).ready(function(){
                ApplicationService.renderSession();
            });
        })(document, window, jQuery);
    </script>  </body>
</html>