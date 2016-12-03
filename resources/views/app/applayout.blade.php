<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l3" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HaberAll App | Dashboard</title>

    <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
    <!-- <link href="css/vendor/all.css" rel="stylesheet"> -->



    <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->

    <link href="css/vendor/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app/jquery.bxslider.css">
    <link href="css/vendor/font-awesome.css" rel="stylesheet">
    <link href="css/vendor/picto.css" rel="stylesheet">
    <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet">
    <link href="css/vendor/datepicker3.css" rel="stylesheet">
    <link href="css/vendor/jquery.minicolors.css" rel="stylesheet">
    <link href="css/vendor/railscasts.css" rel="stylesheet">
    <link href="css/vendor/owl.carousel.css" rel="stylesheet">
    <link href="css/vendor/slick.css" rel="stylesheet">
    <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet">
    <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="css/vendor/select2.css" rel="stylesheet">
    <link href="css/vendor/jquery.countdown.css" rel="stylesheet">


    <!-- APP CSS BUNDLE [css/app/app.css]
    INCLUDES:
        - The APP CSS CORE styling required by the "html" module, also available with main.css - see below;
        - The APP CSS STANDALONE modules required by the "html" module;
    NOTE:
        - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
          It was optimised to load only what is actually used by the "html" module;
          Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
          See src/less/themes/html/app.less
    TIP:
        - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
    <!-- <link href="css/app/app.css" rel="stylesheet"> -->


    <!-- App CSS CORE
    This variant is to be used when loading the separate styling modules -->

    <link href="css/app/main.css" rel="stylesheet">


    <!-- App CSS Standalone Modules
        As a convenience, we provide the entire UI framework broke down in separate modules
        Some of the standalone modules may have not been used with the current theme/module
        but ALL modules are 100% compatible -->

    <link href="css/app/essentials.css" rel="stylesheet" />
    <link href="css/app/material.css" rel="stylesheet" />
    <link href="css/app/layout.css" rel="stylesheet" />
    <link href="css/app/sidebar.css" rel="stylesheet" />
    <link href="css/app/sidebar-skins.css" rel="stylesheet" />
    <link href="css/app/navbar.css" rel="stylesheet" />
    <link href="css/app/messages.css" rel="stylesheet" />
    <link href="css/app/media.css" rel="stylesheet" />
    <link href="css/app/charts.css" rel="stylesheet" />
    <link href="css/app/maps.css" rel="stylesheet" />
    <link href="css/app/colors-alerts.css" rel="stylesheet" />
    <link href="css/app/colors-background.css" rel="stylesheet" />
    <link href="css/app/colors-buttons.css" rel="stylesheet" />
    <link href="css/app/colors-text.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app/admin.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
    WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Wrapper required for sidebar transitions -->
<div class="st-container">

    <!-- Fixed navbar -->
    <div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="app-instructor-dashboard.html#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-primary navbar-brand-logo navbar-nav-padding-left">
                    <img src="images/logobeyaz.png" alt="">
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="app-instructor-dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">Forum <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="app-forum.html">Forum Home</a></li>
                            <li><a href="app-forum-category.html">Forum Category</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="app-instructor-dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="app-directory-grid.html">Courses Grid</a></li>
                            <li><a href="app-directory-list.html">Courses List</a></li>
                            <li><a href="app-student-course.html">Course Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="app-instructor-dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">Student <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="app-student-dashboard.html">Dashboard</a></li>
                            <li><a href="app-student-courses.html">My Courses</a></li>
                            <li><a href="app-take-course.html">Take Course</a></li>
                            <li><a href="app-course-forums.html">Course Forums</a></li>
                            <li><a href="app-take-quiz.html">Take Quiz</a></li>
                            <li><a href="app-student-profile.html">Edit Profile</a></li>
                            <li><a href="app-student-billing.html">Edit Billing</a></li>
                            <li><a href="app-student-messages.html">Messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="app-instructor-dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">Instructor <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="app-instructor-dashboard.html">Kontrol Paneli</a></li>
                            <li><a href="app-instructor-courses.html">Profilim</a></li>
                            <li><a href="app-instructor-course-edit-course.html">Ayarlar</a></li>
                            <li><a href="app-instructor-earnings.html">Earnings</a></li>
                            <li><a href="app-instructor-statement.html">Statement</a></li>
                            <li><a href="app-instructor-profile.html">Edit Profile</a></li>
                            <li><a href="app-instructor-billing.html">Edit Billing</a></li>
                            <li><a href="app-instructor-messages.html">Messages</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-nav-bordered navbar-right">
                    <!-- notifications -->
                    <li class="dropdown notifications updates">
                        <a href="app-instructor-dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-primary">4</span>
                        </a>
                        <ul class="dropdown-menu" role="notification">
                            <li class="dropdown-header">Notifications</li>
                            <li class="media">
                                <div class="pull-right">
                                    <span class="label label-success">New</span>
                                </div>
                                <div class="media-left">
                                    <img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" width="30">
                                </div>
                                <div class="media-body">
                                    <a href="app-instructor-dashboard.html#">Adrian D.</a> posted <a href="app-instructor-dashboard.html#">a photo</a> on his timeline. <br/>
                                    <span class="text-caption text-muted">5 mins ago</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-right">
                                    <span class="label label-success">New</span>
                                </div>
                                <div class="media-left">
                                    <img src="images/people/50/guy-6.jpg" alt="people" class="img-circle" width="30">
                                </div>
                                <div class="media-body">
                                    <a href="app-instructor-dashboard.html#">Bill</a> posted <a href="app-instructor-dashboard.html#">a comment</a> on Adrian's recent <a href="app-instructor-dashboard.html#">post</a>. <br/>
                                    <span class="text-caption text-muted">3 hrs ago</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                                </div>
                                <div class="media-body">
                                    <a href="app-instructor-dashboard.html#">Mary D.</a> and <a href="app-instructor-dashboard.html#">Michelle</a> are now friends.
                                    <p>
                                        <span class="text-caption text-muted">1 day ago</span>
                                    </p>
                                    <a href="app-instructor-dashboard.html"><img class="width-30 img-circle" src="images/people/50/woman-6.jpg" alt="people"></a>
                                    <a href="app-instructor-dashboard.html"><img class="width-30 img-circle" src="images/people/50/woman-3.jpg" alt="people"></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- // END notifications -->
                    <!-- User -->
                    <li class="dropdown">
                        <a href="app-instructor-dashboard.html#" class="dropdown-toggle user" data-toggle="dropdown">
                            <img src="images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="40"/>
                            Bill <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="app-student-profile.html">Account</a></li>
                            <li><a href="app-student-billing.html">Billing</a></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

        </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <div class="sidebar left sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
        <div data-scrollable>


            <div class="sidebar-block">
                <div class="profile">
                    <a href="app-instructor-dashboard.html#">
                        <img src="images/people/110/guy-6.jpg" alt="people" class="img-circle width-80"/>
                    </a>
                    <h4 class="text-display-1 margin-none">Memedov</h4>
                </div>
            </div>


            <ul class="sidebar-menu">
                <li  class="active"><a href="app-instructor-dashboard.html"><i class="fa fa-home"></i><span>Kontrol Paneli</span></a></li>
                <li ><a href="app-instructor-messages.html"><i class="fa fa-paper-plane"></i><span>Profilim</span></a></li>
                <li ><a href="app-instructor-courses.html"><i class="fa fa-mortar-board"></i><span>Ayarlar</span></a></li>

                <li><a href="app-instructor-dashboard.html#"><i class="fa fa-sign-out"></i><span>Çıkış</span></a></li>
            </ul>
        </div>
    </div>

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher" id="content" >

        <!-- sidebar effects INSIDE of st-pusher: -->
        <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

        <!-- this is the wrapper for the content -->
        <div class="st-content">

            <!-- extra div for emulating position:fixed of the menu -->
            <div class="st-content-inner padding-none">

                <div class="container-fluid">




                    <div class="row" data-toggle="isotope" style="margin-top: 20px">
                        <div class="item col-xs-12 col-lg-8">
                            <!-- manset haberler -->
                            <ul id="anasayfa_slider">
                                <li><img style="width: 100%" src="http://i.hurimg.com/i/hurriyet/90/892x220/5839de990f25441860510312.jpg" /></li>
                                <li><img style="width: 100%"src="http://i.hurimg.com/i/hurriyet/90/892x220/5839de990f25441860510312.jpg" /></li>
                                <li><img style="width: 100%"src="http://i.hurimg.com/i/hurriyet/90/892x220/5839de990f25441860510312.jpg" /></li>
                                <li><img style="width: 100%"src="http://i.hurimg.com/i/hurriyet/90/892x220/5839de990f25441860510312.jpg" /></li>
                            </ul>
                            <!-- manset haberler bitiş-->



                            <!-- kişisel haber listele -->
                            <div class="row" style="margin-top: 20px">
                                <div class="col-md-4 jasgrid">
                                    <div class="box-item">
                                        <div class="box-post">
                    <span class="label label-success">
                        <a href="#" rel="tag">Travel</a>
                    </span>
                                            <h1 class="post-title">
                                                <a href="#">
                                                    City in the sky: world's biggest hotel to open in Mecca
                                                </a>
                                            </h1>
                                            <span class="meta">
                        <span><i class="glyphicon glyphicon-comment"></i> <a href="http://wordpress.thebebel.com/showcase/newsbook/2015/01/19/meet-asias-best-destinations-for-the-summer/#respond">No Comments</a></span>
                        <span><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span>
                    </span>
                                        </div>
                                        <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/5/22/1432299215355/baff131f-a335-44eb-ad66-03c52c5c2213-620x372.jpeg?w=700&q=85&auto=format&sharp=10&s=31a22f00a85840740c2a8af5604abfb0" alt="City in the sky: world's biggest hotel to open in Mecca"
                                             class="">
                                    </div>
                                </div>
                                <div class="col-md-4 jasgrid">
                                    <div class="box-item">
                                        <div class="box-post">
                    <span class="label label-success">
                        <a href="#" rel="tag">Travel</a>
                    </span>
                                            <h1 class="post-title">
                                                <a href="#">
                                                    City in the sky: world's biggest hotel to open in Mecca
                                                </a>
                                            </h1>
                                            <span class="meta">
                        <span><i class="glyphicon glyphicon-comment"></i> <a href="http://wordpress.thebebel.com/showcase/newsbook/2015/01/19/meet-asias-best-destinations-for-the-summer/#respond">No Comments</a></span>
                        <span><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span>
                    </span>
                                        </div>
                                        <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/5/22/1432299215355/baff131f-a335-44eb-ad66-03c52c5c2213-620x372.jpeg?w=700&q=85&auto=format&sharp=10&s=31a22f00a85840740c2a8af5604abfb0" alt="City in the sky: world's biggest hotel to open in Mecca"
                                             class="">
                                    </div>
                                </div>
                                <div class="col-md-4 jasgrid">
                                    <div class="box-item">
                                        <div class="box-post">
                    <span class="label label-success">
                        <a href="#" rel="tag">Travel</a>
                    </span>
                                            <h1 class="post-title">
                                                <a href="#">
                                                    City in the sky: world's biggest hotel to open in Mecca
                                                </a>
                                            </h1>
                                            <span class="meta">
                        <span><i class="glyphicon glyphicon-comment"></i> <a href="http://wordpress.thebebel.com/showcase/newsbook/2015/01/19/meet-asias-best-destinations-for-the-summer/#respond">No Comments</a></span>
                        <span><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span>
                    </span>
                                        </div>
                                        <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/5/22/1432299215355/baff131f-a335-44eb-ad66-03c52c5c2213-620x372.jpeg?w=700&q=85&auto=format&sharp=10&s=31a22f00a85840740c2a8af5604abfb0" alt="City in the sky: world's biggest hotel to open in Mecca"
                                             class="">
                                    </div>
                                </div>



                            </div>
                            <!-- kişisel haber listele bitiş-->
                        </div>
                        <div class="item col-xs-12 col-lg-4">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <div class="media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-headline margin-none">Para Durumu</h4>
                                            <p class="text-subhead text-light">This Month</p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-white btn-flat" href="app-instructor-earnings.html">Reports</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="para-durum">
                                        <div class="box">

                                            <table>
                                                <tr>
                                                    <td style="width: 35px"><i class="fa fa-usd fa-2x"> </i></td>
                                                    <td>
                                                        <span class="text-default">  DOLAR</span>
                                                        3.42347
                                                        <span class="text-default">%0.5454 <i class="fa fa-caret-down fa-lg text-danger"></i></span>

                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="box">

                                            <table>
                                                <tr>
                                                    <td style="width: 35px"><i class="fa fa-euro fa-2x"> </i></td>
                                                    <td>
                                                        <span class="text-default">  Euro</span>
                                                        3.42347
                                                        <span class="text-default">%0.5454 <i class="fa fa-caret-up fa-lg text-success"></i></span>

                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="box">
                                            <table>
                                                <tr>
                                                    <td style="width: 35px"><i class="fa fa-thermometer-full"> </i></td>
                                                    <td>
                                                        <span class="text-default">  Elazığ</span>

                                                        <span class="text-default">%0.5454 <i class="fa fa-caret-up fa-lg text-success"></i></span>

                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="panel-body">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <h4 class="margin-none">Gross Revenue</h4>
                                            <p class="text-display-1 text-warning margin-none">102.4k</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="margin-none">Net Revenue</h4>
                                            <p class="text-display-1 text-success margin-none">55k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-8">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">My Courses</h4>
                                    <p class="text-subhead text-light">Your recent courses</p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Basics of HTML</a>
                                        </div>
                                        <div class="media-right">
                                            <div class="progress progress-mini width-100 margin-none">
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Angular in Steps</a>
                                        </div>
                                        <div class="media-right">
                                            <div class="progress progress-mini width-100 margin-none">
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Bootstrap Foundations</a>
                                        </div>
                                        <div class="media-right">
                                            <div class="progress progress-mini width-100 margin-none">
                                                <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="panel-footer text-right">
                                    <a href="app-instructor-courses.html" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>View all</a>
                                    <a href="app-instructor-course-edit-course.html" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>CREATE COURSE <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-4">
                            <div class="s-container">
                                <h4 class="text-headline margin-none">Comments</h4>
                                <p class="text-subhead text-light">Latest student comments </p>
                            </div>
                            <div class="panel panel-default">
                                <ul class="list-group">
                                    <li class="list-group-item"><div class="media v-middle margin-v-0-10">
                                            <div class="media-body">
                                                <p class="text-subhead">
                                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-1.jpg" alt="person" class="width-30 img-circle"/></a> &nbsp;
                                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                                    <span class="text-caption text-light">59 min ago</span>
                                                </p>
                                            </div>
                                            <div class="media-right">
                                                <div class="width-50 text-right">
                                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p></li>
                                    <li class="list-group-item"><div class="media v-middle margin-v-0-10">
                                            <div class="media-body">
                                                <p class="text-subhead">
                                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-3.jpg" alt="person" class="width-30 img-circle"/></a> &nbsp;
                                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                                    <span class="text-caption text-light">34 min ago</span>
                                                </p>
                                            </div>
                                            <div class="media-right">
                                                <div class="width-50 text-right">
                                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p></li>
                                    <li class="list-group-item"><div class="media v-middle margin-v-0-10">
                                            <div class="media-body">
                                                <p class="text-subhead">
                                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-4.jpg" alt="person" class="width-30 img-circle"/></a> &nbsp;
                                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                                    <span class="text-caption text-light">54 min ago</span>
                                                </p>
                                            </div>
                                            <div class="media-right">
                                                <div class="width-50 text-right">
                                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p></li>
                                    <li class="list-group-item"><div class="media v-middle margin-v-0-10">
                                            <div class="media-body">
                                                <p class="text-subhead">
                                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-4.jpg" alt="person" class="width-30 img-circle"/></a> &nbsp;
                                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                                    <span class="text-caption text-light">37 min ago</span>
                                                </p>
                                            </div>
                                            <div class="media-right">
                                                <div class="width-50 text-right">
                                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p></li>
                                    <li class="list-group-item"><div class="media v-middle margin-v-0-10">
                                            <div class="media-body">
                                                <p class="text-subhead">
                                                    <a href="app-instructor-dashboard.html#"><img src="images/people/110/guy-5.jpg" alt="person" class="width-30 img-circle"/></a> &nbsp;
                                                    <a href="app-instructor-dashboard.html#">mosaicpro</a>
                                                    <span class="text-caption text-light">41 min ago</span>
                                                </p>
                                            </div>
                                            <div class="media-right">
                                                <div class="width-50 text-right">
                                                    <a href="app-instructor-dashboard.html#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis
                                            eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p></li>
                                </ul>

                            </div>
                        </div>

                    </div>


                </div>

            </div><!-- /st-content-inner -->

        </div><!-- /st-content -->

    </div><!-- /st-pusher -->

    <!-- Footer -->
    <footer class="footer">
        <strong>Learning</strong> v1.1.0 &copy; Copyright 2015
    </footer>
    <!-- // Footer -->

</div><!-- /st-container -->

<!-- Inline Script for colors and config objects; used by various external scripts; -->
<script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {"default":{"primary-color":"#42a5f5"}}
    };
</script>

<!-- Vendor Scripts Bundle
Includes all of the 3rd party JavaScript libraries above.
The bundle was generated using modern frontend development tools that are provided with the package
To learn more about the development process, please refer to the documentation.
Do not use it simultaneously with the separate bundles above. -->
<!-- <script src="js/vendor/all.js"></script> -->



<!-- Vendor Scripts Standalone Libraries -->
<!-- <script src="js/vendor/core/all.js"></script> -->
<script src="js/vendor/core/jquery.js"></script>
<script src="js/vendor/core/bootstrap.js"></script>
<script src="js/vendor/core/breakpoints.js"></script>
<script src="js/vendor/core/jquery.nicescroll.js"></script>
<script src="js/vendor/core/isotope.pkgd.js"></script>
<script src="js/vendor/core/packery-mode.pkgd.js"></script>
<script src="js/vendor/core/jquery.grid-a-licious.js"></script>
<script src="js/vendor/core/jquery.cookie.js"></script>
<script src="js/vendor/core/jquery-ui.custom.js"></script>
<script src="js/vendor/core/jquery.hotkeys.js"></script>
<script src="js/vendor/core/handlebars.js"></script>
<script src="js/vendor/core/jquery.hotkeys.js"></script>
<script src="js/vendor/core/load_image.js"></script>
<script src="js/vendor/core/jquery.debouncedresize.js"></script>
<script src="js/vendor/core/modernizr.js"></script>
<script src="js/vendor/core/velocity.js"></script>
<script src="js/vendor/tables/all.js"></script>
<script src="js/vendor/forms/all.js"></script>
<script src="js/vendor/media/slick.js"></script>
<script src="js/vendor/charts/flot/all.js"></script>
<script src="js/vendor/nestable/jquery.nestable.js"></script>
<script src="js/vendor/countdown/all.js"></script>
<!-- <script src="js/vendor/angular/all.js"></script> -->


<!-- App Scripts Bundle
Includes Custom Application JavaScript used for the current theme/module;
Do not use it simultaneously with the standalone modules below. -->
<!-- <script src="js/app/app.js"></script> -->


<!-- App Scripts Standalone Modules
As a convenience, we provide the entire UI framework broke down in separate modules
Some of the standalone modules may have not been used with the current theme/module
but ALL the modules are 100% compatible -->

<script src="js/app/essentials.js"></script>
<script src="js/app/material.js"></script>
<script src="js/app/layout.js"></script>
<script src="js/app/sidebar.js"></script>
<script src="js/app/media.js"></script>
<script src="js/app/messages.js"></script>
<script src="js/app/maps.js"></script>
<script src="js/app/charts.js"></script>


<!-- App Scripts CORE [html]:
    Includes the custom JavaScript for this theme/module;
    The file has to be loaded in addition to the UI modules above;
    app.js already includes main.js so this should be loaded
    ONLY when using the standalone modules; -->


<script src="js/app/main.js"></script>

<script src="js/app/jquery.bxslider.min.js"></script>

<script>
    $(document).ready(function(){
        $('#anasayfa_slider').bxSlider({
            pager: false
        });

    });
</script>



</body>
</html>