
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Ovio -  Bootstrap Based Responsive Dashboard &amp; Admin Template</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('assetsAdmin/bootstrap/css/bootstrap.min.css') }}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- <link rel="stylesheet" href="{{ asset('assetsAdmin/dist/css/style.css') }}"> -->

<!-- Template style -->
<link rel="stylesheet" href="{{ asset('assetsAdmin/dist/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assetsAdmin/dist/et-line-font/et-line-font.css') }}">
<link rel="stylesheet" href="{{ asset('assetsAdmin/dist/font-awesome/css/font-awesome.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assetsAdmin/dist/weather/weather-icons.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assetsAdmin/dist/weather/weather-icons-wind.min.css') }}">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="{{ asset('assetsAdmin/plugins/charts/code/highcharts.js') }}"></script>
</head>

<body class="sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header dark-bg">

    <!-- Logo -->
    <a href="index.html" class="logo dark-bg">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{{ asset('assetsAdmin/dist/img/logo.png') }}" alt="Ovio"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{{ asset('assetsAdmin/dist/img/logo-lg.png') }}" alt="Ovio"></span> </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
      <div class="pull-left search-box">
        <form action="#" method="get" class="search-form">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
            </span></div>
        </form>
        <!-- search form --> </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-envelope"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <ul class="menu">
                  <li><a href="#">
                    <div class="pull-left"><img src="{{ asset('assetsAdmin/dist/img/img1.jpg') }}" class="img-circle" alt="User Image"></div>
                    <h4>Florence Douglas</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p><small><i class="fa fa-clock-o"></i> 2 mins</small></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="{{ asset('assetsAdmin/dist/img/img2.jpg') }}" class="img-circle" alt="User Image"></div>
                    <h4>Douglas Smith</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p><small><i class="fa fa-clock-o"></i> 15 mins</small></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="{{ asset('assetsAdmin/dist/img/img3.jpg') }}" class="img-circle" alt="User Image"></div>
                    <h4>Lorence Deo</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p><small><i class="fa fa-clock-o"></i> 35 mins</small></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="{{ asset('assetsAdmin/dist/img/img1.jpg') }}" class="img-circle" alt="User Image"></div>
                    <h4>Florence Douglas</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p><small><i class="fa fa-clock-o"></i> 2 mins</small></p>
                    </a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">Check all notifications</a></li>
            </ul>
          </li>
          <!-- messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-megaphone"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li>
                <ul class="menu">
                  <li><a href="#"><i class="icon-lightbulb"></i> Lorem ipsum dolor sit amet </a> </li>
                  <li><a href="#"><i class="icon-map-pin blue"></i> Lorem ipsum dolor sit amet </a> </li>
                  <li><a href="#"><i class="icon-refresh orange"></i> Lorem ipsum dolor sit amet </a> </li>
                  <li><a href="#"><i class="icon-map-pin blue"></i> Lorem ipsum dolor sit amet </a> </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{ asset('assetsAdmin/dist/img/img1.jpg') }}" class="user-image" alt="User Image"> <span class="hidden-xs">Florence Douglas</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="{{ asset('assetsAdmin/dist/img/img1.jpg') }}" class="img-responsive" alt="User"></div>
                <p class="text-left">Florence Douglas <small>florence@gmail.com</small> </p>
                <div class="view-link text-left"><a href="#">View Profile</a> </div>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>


                                                      <!-- Authentication -->
                                                      <form method="POST" action="{{ route('tenant.logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('tenant.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>


            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar dark-bg">
    <section class="sidebar">
      <div class="user-panel black-bg">
        <div class="pull-left image"> <img src="{{ asset('assetsAdmin/dist/img/img1.jpg') }}" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">
          <p>Florence Douglas</p>
          <a href="#"><i class="fa fa-circle"></i> Online</a> </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header dark-bg">Menu</li>
        <li class="treeview active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-angle-right"></i> Dashboard 1</a></li>
            <li class="active"><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
            <li><a href="dashboard-3.html"><i class="fa fa-angle-right"></i> Dashboard 3</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-desktop"></i> <span>Templates</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-angle-right"></i> Default</a></li>
            <li><a href="index-light.html"><i class="fa fa-angle-right"></i> Light</a></li>
            <li><a href="index-dark.html"><i class="fa fa-angle-right"></i> Dark</a></li>
            <li><a href="index-collapsed-sidebar.html"><i class="fa fa-angle-right"></i> Collapsed Sidebar</a></li>
            <li><a href="index-boxed.html"><i class="fa fa-angle-right"></i> Boxed</a></li>
            <li><a href="index-top-nav.html"><i class="fa fa-angle-right"></i> Top Navigation</a></li>
            <li><a href="index-rtl.html"><i class="fa fa-angle-right"></i> RTL</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-bullseye"></i> <span>Apps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="app/project-summary.html"><i class="fa fa-angle-right"></i> Project Summary</a></li>
            <li><a href="app/invoice.html"><i class="fa fa-angle-right"></i> Invoice</a></li>
            <li><a href="app/calendar.html"><i class="fa fa-angle-right"></i> Calendar</a></li>
            <li><a href="app/gallery.html"><i class="fa fa-angle-right"></i> Gallery</a></li>
            <li><a href="app/timeline.html"><i class="fa fa-angle-right"></i> Timeline</a></li>
            <li><a href="app/contacts.html"><i class="fa fa-angle-right"></i> Contacts</a></li>

          </ul>
        </li>
        <li> <a href="widgets.html"> <i class="fa fa-th"></i> <span>Widgets</span></a> </li>
        <li class="header dark-bg">Components</li>
        <li class="treeview"> <a href="#"><i class="fa fa-briefcase"></i> <span>UI Components</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="component/alerts.html"><i class="fa fa-angle-right"></i> Alerts</a></li>
            <li><a href="component/buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
            <li><a href="component/carousel.html"><i class="fa fa-angle-right"></i> Carousel</a></li>
            <li><a href="component/collapse.html"><i class="fa fa-angle-right"></i> Collapse</a></li>
            <li><a href="component/listgroup.html"><i class="fa fa-angle-right"></i> List Group</a></li>
            <li><a href="component/pagination.html"><i class="fa fa-angle-right"></i> Pagination</a></li>
            <li><a href="component/tabs.html"><i class="fa fa-angle-right"></i> Tabs</a></li>
            <li><a href="component/tooltips.html"><i class="fa fa-angle-right"></i> Tooltips</a></li>
            <li><a href="component/popovers.html"><i class="fa fa-angle-right"></i> Popovers</a></li>
            <li><a href="component/progress.html"><i class="fa fa-angle-right"></i> Progress</a></li>
            <li><a href="component/mediaobjects.html"><i class="fa fa-angle-right"></i> Media Objects</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-pencil-square-o"></i> <span>Forms</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="forms/general-elements.html"><i class="fa fa-angle-right"></i> General Elements</a></li>
            <li><a href="forms/layouts.html"><i class="fa fa-angle-right"></i> Form Layouts</a></li>
            <li><a href="forms/validation.html"><i class="fa fa-angle-right"></i> Form Validation</a></li>
            <li><a href="forms/wizard.html"><i class="fa fa-angle-right"></i> Form Wizard</a></li>

          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="tables/basic.html"><i class="fa fa-angle-right"></i> Basic Tables</a></li>
            <li><a href="tables/data.html"><i class="fa fa-angle-right"></i> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-bar-chart"></i> <span>Charts</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="charts/line.html"><i class="fa fa-angle-right"></i> Line Charts</a></li>
            <li><a href="charts/area.html"><i class="fa fa-angle-right"></i> Area Charts</a></li>
            <li><a href="charts/bar.html"><i class="fa fa-angle-right"></i> Bar Charts</a></li>
            <li><a href="charts/pie.html"><i class="fa fa-angle-right"></i> Pie Charts</a></li>
            <li><a href="charts/bubble.html"><i class="fa fa-angle-right"></i> Bubble Charts</a></li>
            <li><a href="charts/combinations.html"><i class="fa fa-angle-right"></i> Combinations</a></li>
            <li><a href="charts/3d.html"><i class="fa fa-angle-right"></i> 3D Charts</a></li>

          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="maps/google-maps.html"><i class="fa fa-angle-right"></i> Google Maps</a></li>
            <li><a href="maps/vector-map.html"><i class="fa fa-angle-right"></i> Vector Map</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-files-o"></i> <span>Pages</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="pages/login.html"><i class="fa fa-angle-right"></i> Login</a></li>
            <li><a href="pages/register.html"><i class="fa fa-angle-right"></i> Register</a></li>
            <li><a href="pages/forgot-password.html"><i class="fa fa-angle-right"></i> Forgot password</a></li>
            <li><a href="pages/coming-soon.html"><i class="fa fa-angle-right"></i> Coming Soon</a></li>

          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-align-left"></i> <span>Multilevel</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
            <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i> Level One <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="#"><i class="fa fa-angle-right"></i> Level Two</a></li>
                <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i> Level Two <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                  <ul class="treeview-menu" style="display: none;">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
          </ul>
        </li>
      </ul>
      <!-- sidebar-menu -->
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard 2</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard 2</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="media-box plain">
            <div class="media-icon pull-left"><i class="icon-bargraph"></i> </div>
            <div class="media-info">
              <h3>1530</h3>
              <h5>Total Leads</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="media-box plain">
            <div class="media-icon bg-sea pull-left"><i class="icon-wallet"></i> </div>
            <div class="media-info">
              <h3>$8,530</h3>
              <h5>Total Payment</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="media-box plain">
            <div class="media-icon bg-blue pull-left"><i class="icon-basket"></i> </div>
            <div class="media-info">
              <h3>935</h3>
              <h5>Total Sales</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="media-box plain">
            <div class="media-icon bg-green pull-left"><i class="icon-layers"></i> </div>
            <div class="media-info">
              <h3>5324</h3>
              <h5>New Orders</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="chart-box">
            <h4>Product Calculation</h4>
            <div class="chart">
              <div id="container2"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="chart-box">
            <h4 class="m-bot-3">Recent Activities</h4>
            <div class="sl-item sl-primary">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 5 mins ago</small>
                <p>Lorem Ipsum has been the printing and type setting sed eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="sl-item sl-danger">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 8 mins ago</small>
                <p>Lorem Ipsum has been the printing and type setting sed eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="sl-item sl-success">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 10 mins ago</small>
                <p>Lorem Ipsum has been the printing and type setting sed eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="sl-item sl-warning">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 12 mins ago</small>
                <p>Lorem Ipsum has been the printing and type setting sed eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="sl-item sl-success">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 15 mins ago</small>
                <p>Lorem Ipsum has been the printing and type setting sed eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="chart-box">
            <h4>Recent Messages</h4>
            <div class="message-widget"> <a href="#">
              <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img1.jpg') }}" class="img-circle img-responsive" alt="User Image"> <span class="profile-status online pull-right"></span> </div>
              <div class="mail-contnet">
                <h5>Florence Douglas</h5>
                <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">9:30 AM</span> </div>
              </a> <a href="#">
              <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img3.jpg') }}" class="img-circle img-responsive" alt="User Image"> <span class="profile-status invisable pull-right"></span> </div>
              <div class="mail-contnet">
                <h5>Florence Douglas</h5>
                <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">10:30 AM</span> </div>
              </a> <a href="#">
              <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img4.jpg') }}" class="img-circle img-responsive" alt="User Image"> <span class="profile-status offline pull-right"></span> </div>
              <div class="mail-contnet">
                <h5>Florence Douglas</h5>
                <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">12:30 AM</span> </div>
              </a> <a href="#">
              <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img3.jpg') }}" class="img-circle img-responsive" alt="User Image"> <span class="profile-status invisable pull-right"></span> </div>
              <div class="mail-contnet">
                <h5>Florence Douglas</h5>
                <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">10:30 AM</span> </div>
              </a> <a href="#">
              <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img1.jpg') }}" class="img-circle img-responsive" alt="User Image"> <span class="profile-status online pull-right"></span> </div>
              <div class="mail-contnet">
                <h5>Florence Douglas</h5>
                <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">9:30 AM</span> </div>
              </a></div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="twitter-box sty1 m-bot-3">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner text-center" role="listbox">
                <div class="item active">
                  <div> <i class="fa fa-twitter"></i> </div>
                  <p>Puns, humor, and quotes are great content on <span class="text-danger">#Twitter</span>. Find some related to your business.
                  <p class="text-italic pt-1">- John Doe</p>
                  </p>
                </div>
                <div class="item">
                  <div> <i class="fa fa-twitter"></i> </div>
                  <p>Puns, humor, and quotes are great content on <span class="text-danger">#Twitter</span>. Find some related to your business.
                  <p class="text-italic pt-1">- John Doe</p>
                  </p>
                </div>
                <div class="item">
                  <div> <i class="fa fa-twitter"></i> </div>
                  <p>Puns, humor, and quotes are great content on <span class="text-danger">#Twitter</span>. Find some related to your business.
                  <p class="text-italic pt-1">- John Doe</p>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="facebook-box sty1 m-bot-3">
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner text-center" role="listbox">
                <div class="item active">
                  <div> <i class="fa fa-facebook"></i> </div>
                  <p>Puns, humor, and quotes are great content on
                    Find some related to your business.
                  <p class="text-italic pt-1">- John Doe</p>
                  </p>
                </div>
                <div class="item">
                  <div> <i class="fa fa-facebook"></i> </div>
                  <p>Puns, humor, and quotes are great content on
                    Find some related to your business.
                  <p class="text-italic pt-1">- John Doe</p>
                  </p>
                </div>
                <div class="item">
                  <div> <i class="fa fa-facebook"></i> </div>
                  <p>Puns, humor, and quotes are great content on
                    Find some related to your business.
                  <p class="text-italic pt-1">- John Doe</p>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- content -->
  </div>
  <!-- content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer dark-bg">
    <div class="pull-right hidden-xs"> Version 1.0</div>
    Copyright &copy; 2017 Yourdomian. All rights reserved. </footer>
</div>
<!-- wrapper -->

<!-- <link rel="stylesheet" href="{{ asset('assetsAdmin/dist/css/style.css') }}"> -->

<!-- jQuery -->
<script src="{{ asset('assetsAdmin/dist/js/jquery.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/dist/js/ovio.js') }}"></script>

<!--charts-->
<script src="{{ asset('assetsAdmin/plugins/charts/code/modules/exporting.js') }}"></script>
<script type="text/javascript">
(function($) {
  "use strict";
Highcharts.chart('container2', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Product Calculation'
    },
    xAxis: [{
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        title: {
            text: 'Mobiles',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
            text: 'No. Sales',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }
    }, { // Tertiary yAxis
        gridLineWidth: 0,
        title: {
            text: 'Products',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 80,
        verticalAlign: 'top',
        y: 55,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    series: [{
        name: 'Laptops',
        type: 'column',
        yAxis: 1,
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
        tooltip: {
        }
    }, {
        name: 'Desktops',
        type: 'spline',
        yAxis: 2,
        data: [1016, 1016, 1015.9, 1015.5, 1012.3, 1009.5, 1009.6, 1010.2, 1013.1, 1016.9, 1018.2, 1016.7],
        marker: {
            enabled: false
        },
        dashStyle: 'shortdot',
        tooltip: {
        }
    }, {
        name: 'Mobiles',
        type: 'spline',
        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
        tooltip: {
        }
    }]
});
})(jQuery);
</script>
</body>
</html>
