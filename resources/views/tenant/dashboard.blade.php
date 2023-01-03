
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
          <ul class="treeview-menu ">
            <li class="active"><a href="index.html"><i class="fa fa-angle-right"></i> Dashboard 1</a></li>
            <li><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
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
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="media-box">
            <div class="media-icon pull-left"><i class="icon-bargraph"></i> </div>
            <div class="media-info">
              <h5>Total Leads</h5>
              <h3>1530</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="media-box bg-sea">
            <div class="media-icon pull-left"><i class="icon-wallet"></i> </div>
            <div class="media-info">
              <h5>Total Payment</h5>
              <h3>$8,530</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="media-box bg-blue">
            <div class="media-icon pull-left"><i class="icon-basket"></i> </div>
            <div class="media-info">
              <h5>Total Sales</h5>
              <h3>935</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="media-box bg-green">
            <div class="media-icon pull-left"><i class="icon-layers"></i> </div>
            <div class="media-info">
              <h5>New Orders</h5>
              <h3>5324</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <div class="chart-box">
            <h4>Product Sales</h4>
            <div class="chart">
              <div id="container"></div>
              <!--for values check "Product Sales" chart on char-function.js-->
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="chart-box">
            <h4>Sales Overview</h4>
            <div class="chart">
              <div id="container1"></div>
              <!--for values check "Sales Overview" chart on char-function.js-->
            </div>
          </div>
        </div>
        <div class="col-lg-5">
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
              </a> </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="chart-box">
            <h4>Recent Orders</h4>
            <div class="table-block">
              <div class="info-block">
                <p>Total paid invoices 5340, unpaid 130. <span class="pull-right"><a href="app/invoice.html">Invoice Summary <i class="fa fa-long-arrow-right"></i></a></span> </p>
              </div>
              <div class="table-responsive">
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th>SKU</th>
                      <th>Invoice#</th>
                      <th>Customer Name</th>
                      <th>Status</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-truncate">OV-101777</td>
                      <td class="text-truncate"><a href="#">VIO-0035421</a></td>
                      <td class="text-truncate">Florence Douglas</td>
                      <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                      <td class="text-truncate">$ 653.00</td>
                    </tr>
                    <tr>
                      <td class="text-truncate">OV-101775</td>
                      <td class="text-truncate"><a href="#">VIO-0028954</a></td>
                      <td class="text-truncate">Dr. Douglas</td>
                      <td class="text-truncate"><span class="lable-tag tag-unpaid">Overdue</span></td>
                      <td class="text-truncate">$ 421.00</td>
                    </tr>
                    <tr>
                      <td class="text-truncate">OV-101687</td>
                      <td class="text-truncate"><a href="#">VIO-0025864</a></td>
                      <td class="text-truncate">Andrew Florence</td>
                      <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                      <td class="text-truncate">$ 632.00</td>
                    </tr>
                    <tr>
                      <td class="text-truncate">OV-101657</td>
                      <td class="text-truncate"><a href="#">VIO-0085815</a></td>
                      <td class="text-truncate">Florence Sr.</td>
                      <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                      <td class="text-truncate">$ 285.00</td>
                    </tr>
                    <tr>
                      <td class="text-truncate">OV-101625</td>
                      <td class="text-truncate"><a href="#">VIO-0053812</a></td>
                      <td class="text-truncate">Florence Douglas</td>
                      <td class="text-truncate"><span class="lable-tag tag-warning">Overdue</span></td>
                      <td class="text-truncate">$ 538.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="chart-box">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Activity</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Settings</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="message-widget">
                  <div>
                    <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img3.jpg') }}" class="img-circle img-responsive" alt="User Image"> </div>
                    <div class="mail-contnet">
                      <h5>Florence Douglas</h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the printing and type setting simply dummy text industry.</p>
                      <span class="time m-bot-2">10:30 AM</span>
                      <div class="row">
                        <div class="col-lg-4 col-xs-4 m-bot-2"><img src="{{ asset('assetsAdmin/dist/img/img5.jpg') }}" alt="user" class="img-responsive img-rounded"></div>
                        <div class="col-lg-4 col-xs-4 m-bot-2"><img src="{{ asset('assetsAdmin/dist/img/img6.jpg') }}" alt="user" class="img-responsive img-rounded"></div>
                        <div class="col-lg-4 col-xs-4 m-bot-2"><img src="{{ asset('assetsAdmin/dist/img/img7.jpg') }}" alt="user" class="img-responsive img-rounded"></div>
                        <div class="m-top-2"><a href="#" class="pull-left">2 comment</a> <a href="#" class="pull-left"><i class="fa fa-heart text-success"></i> 5 Love</a> </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img2.jpg') }}" class="img-circle img-responsive" alt="User Image"> </div>
                    <div class="mail-contnet">
                      <h5>Florence Douglas</h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the printing and type setting simply dummy text industry.</p>
                      <span class="time m-bot-2">10:30 AM</span> </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="profile">
                <div class="message-widget">
                  <div>
                    <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img2.jpg') }}" class="img-circle img-responsive" alt="User Image"> </div>
                    <div class="mail-contnet">
                      <h5>Florence Douglas</h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the printing and type setting simply dummy text industry.</p>
                      <span class="time m-bot-2">10:30 AM</span> </div>
                  </div>
                  <div>
                    <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img3.jpg') }}" class="img-circle img-responsive" alt="User Image"> </div>
                    <div class="mail-contnet">
                      <h5>Florence Douglas</h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the printing and type setting simply dummy text industry.</p>
                      <span class="time m-bot-2">10:30 AM</span>
                      <div class="row">
                        <div class="col-lg-4 col-xs-4 m-bot-2"><img src="{{ asset('assetsAdmin/dist/img/img5.jpg') }}" alt="user" class="img-responsive img-rounded"></div>
                        <div class="col-lg-4 col-xs-4 m-bot-2"><img src="{{ asset('assetsAdmin/dist/img/img6.jpg') }}" alt="user" class="img-responsive img-rounded"></div>
                        <div class="col-lg-4 col-xs-4 m-bot-2"><img src="{{ asset('assetsAdmin/dist/img/img7.jpg') }}" alt="user" class="img-responsive img-rounded"></div>
                        <div class="m-top-2"><a href="#" class="pull-left">2 comment</a> <a href="#" class="pull-left"><i class="fa fa-heart text-success"></i> 5 Love</a> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="messages">
                <div class="message-widget">
                  <div>
                    <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img2.jpg') }}" class="img-circle img-responsive" alt="User Image"> </div>
                    <div class="mail-contnet">
                      <h5>Florence Douglas</h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the printing and type setting simply dummy text industry.</p>
                      <span class="time m-bot-2">10:30 AM</span> </div>
                  </div>
                  <div>
                    <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img2.jpg') }}" class="img-circle img-responsive" alt="User Image"> </div>
                    <div class="mail-contnet">
                      <h5>Florence Douglas</h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the printing and type setting simply dummy text industry.</p>
                      <span class="time m-bot-2">10:30 AM</span> </div>
                  </div>
                  <div>
                    <div class="user-img pull-left"> <img src="{{ asset('assetsAdmin/dist/img/img2.jpg') }}" class="img-circle img-responsive" alt="User Image"> </div>
                    <div class="mail-contnet">
                      <h5>Florence Douglas</h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the printing and type setting simply dummy text industry.</p>
                      <span class="time m-bot-2">10:30 AM</span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <div class="twitter-box m-bot-3">
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
            </div>
            <div class="col-lg-6 col-xs-6">
              <div class="facebook-box m-bot-3">
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
            <div class="col-lg-12">
              <div> <img src="{{ asset('assetsAdmin/dist/img/img8.jpg') }}" class="img-responsive" alt="User Image">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-5">
                      <p class="text-bold text-uppercase">Today</p>
                      <div class="row-fluid">
                        <div class="col-md-3">
                          <div class="wi wi-day-snow font-25 text-warning"></div>
                        </div>
                        <div class="col-md-9">
                          <div class="weather-cent text-warning text-bold font-30"><span>25</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-2 col-xs-4">
                          <p class="text-uppercase ">Mon</p>
                          <div class="wi wi-day-snow font-18 text-indigo"></div>
                          <div class="wi-small weather-cent"><span>17</span></div>
                        </div>
                        <div class="col-md-2 col-xs-4">
                          <p class="text-uppercase">Tue</p>
                          <div class="wi wi-day-cloudy-windy font-18 text-lime"></div>
                          <div class="wi-small weather-cent"><span>22</span></div>
                        </div>
                        <div class="col-md-2 col-xs-4">
                          <p class="text-uppercase">Wed</p>
                          <div class="wi wi-day-lightning font-18 text-amber"></div>
                          <div class="wi-small weather-cent"><span>17</span></div>
                        </div>
                        <div class="col-md-2 col-xs-4">
                          <p class="text-uppercase">Thur</p>
                          <div class="wi wi-night-rain-mix font-18 text-blue"></div>
                          <div class="wi-small weather-cent"><span>24</span></div>
                        </div>
                        <div class="col-md-2 col-xs-4">
                          <p class="text-uppercase">Fri</p>
                          <div class="wi wi-night-rain font-18 text-slate"></div>
                          <div class="wi-small weather-cent"><span>20</span></div>
                        </div>
                        <div class="col-md-2 col-xs-4">
                          <p class="text-uppercase">Sat</p>
                          <div class="wi wi-sunrise font-18 text-success"></div>
                          <div class="wi-small weather-cent"><span>16</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
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

<!-- jQuery -->
<script src="{{ asset('assetsAdmin/dist/js/jquery.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/dist/js/ovio.js') }}"></script>

<!-- charts -->
<script src="{{ asset('assetsAdmin/plugins/charts/code/modules/exporting.js') }}"></script>
<script src="{{ asset('assetsAdmin/plugins/charts/chart-functions.js') }}"></script>
</body>
</html>
