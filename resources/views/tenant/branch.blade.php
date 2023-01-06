
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Locales</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <!-- <section class="content container-fluid">
      <div class="row">
      <div class="col-lg-4">
          <div class="chart-box">
            <h4>Local principal</h4>
            <div class="message-widget">

            <div class="row">
                        <div class="col-lg-4 col-xs-4 m-bot-2"><img src="{{ asset('assetsAdmin/dist/img/img5.jpg') }}" alt="user" class="img-responsive img-rounded"></div>
                </div>



                <div class="mail-contnet">
                    <h5>Local principal</h5>

                    <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-rounded">Entrar</button>
                    </div>

                </div>

                <div class="mail-contnet">
                    <h5>Local principal</h5>
                    <div class="col-md-2">
                     <button type="button" class="btn btn-primary btn-rounded">Entrar</button>
                     </div>
             </div>
          </div>
        </div> -->

      @yield('content')


        </div>

      </div>


    </section>
    <!-- content -->
  </div>
  <!-- content-wrapper -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer dark-bg">
    <div class="pull-right hidden-xs"> Version 1.0</div>
    Copyright &copy; 2017 Yourdomian. All rights reserved. </footer>
</div> -->
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
