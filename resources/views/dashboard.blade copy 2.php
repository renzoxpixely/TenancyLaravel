
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="{{ asset('assetsAdmin/assets/images/logo.png') }}">
	<title>Infinity - Bootstrap Admin Template</title>
	
	<link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css') }}">
	<!-- build:css ../assets/css/app.min.css -->
	<link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/animate.css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/fullcalendar/dist/fullcalendar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/perfect-scrollbar/css/perfect-scrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/core.css') }}">
	<link rel="stylesheet" href="{{ asset('assetsAdmin/assets/css/app.css') }}">
	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<script src="{{ asset('assetsAdmin/libs/bower/breakpoints.js/dist/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assetsAdmin/assets/js/jquery.waypoints.min.js') }}"></script>
<!-- <link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/font-awesome/css/font-awesome.min.css') }}"> --> 
	<script>
		Breakpoints();
	</script>
</head>
	
<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">
  
  <!-- navbar header -->
  <div class="navbar-header">
    <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-more"></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-search"></span>
    </button>

    <a href="{{ asset('assetsAdmin/index.html') }}" class="navbar-brand">
      <span class="brand-icon"><i class="fa fa-gg"></i></span>
      <span class="brand-name">Infinity</span>
    </a>
  </div><!-- .navbar-header -->
  
  <div class="navbar-container container-fluid">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
        <li class="hidden-float hidden-menubar-top">
          <a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
          </a>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float">Dashboard</h5>
        </li>
      </ul>

      <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
        <li class="nav-item dropdown hidden-float">
          <a href="javascript:void(0)" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
            <i class="zmdi zmdi-hc-lg zmdi-search"></i>
          </a>
        </li>
<!-- <link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/font-awesome/css/font-awesome.min.css') }}"> --> 
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-notifications"></i></a>
          <div class="media-group dropdown-menu animated flipInY">
            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="{{ asset('assetsAdmin/assets/images/221.jpg') }}" alt="">
                    <i class="status status-online"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">John Doe</h5>
                  <small class="media-meta">Active now</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="{{ asset('assetsAdmin/assets/images/205.jpg') }}" alt="">
                    <i class="status status-offline"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">John Doe</h5>
                  <small class="media-meta">2 hours ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="{{ asset('assetsAdmin/assets/images/207.jpg') }}" alt="">
                    <i class="status status-away"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Sara Smith</h5>
                  <small class="media-meta">idle 5 min ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="{{ asset('assetsAdmin/assets/images/211.jpg') }}" alt="">
                    <i class="status status-away"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Donia Dyab</h5>
                  <small class="media-meta">idle 5 min ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->
          </div>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
          <ul class="dropdown-menu animated flipInY">
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My Profile</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span class="label label-primary">3</span></a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class" data-target="#side-panel" data-class="open" role="button"><i class="zmdi zmdi-hc-lg zmdi-apps"></i></a>
        </li>
      </ul>
    </div>
  </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
            <!-- <link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/font-awesome/css/font-awesome.min.css') }}"> --> 
          <a href="javascript:void(0)"><img class="img-responsive" src="{{ asset('assetsAdmin/assets/images/221.jpg') }}" alt="avatar"/></a>
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username">John Doe</a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>Web Developer</small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="/index.html">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Home</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="profile.html">
                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                    <span>Profile</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="settings.html">
                    <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                    <span>Settings</span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="logout.html">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Home</span>
                  </a>
                </li>
                <li>
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('tenant.logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('tenant.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
            <span class="menu-text">Dashboards</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="index.html"><span class="menu-text">Dashboard 1</span></a></li>
            <li><a href="dashboard.2.html"><span class="menu-text">Dashboard 2</span></a></li>
            <li><a href="dashboard.3.html"><span class="menu-text">Dashboard 3</span></a></li>
          </ul>
        </li>
        
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i>
            <span class="menu-text">Layouts</span>
            <span class="label label-warning menu-label">2</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{ asset('assetsAdmin/default/index.html') }}"><span class="menu-text">Default</span></a></li>
            <li><a href="{{ asset('assetsAdmin/topbar/index.html') }}"><span class="menu-text">Topbar</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i>
            <span class="menu-text">UI Kit</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="buttons.html"><span class="menu-text">Buttons</span></a></li>
            <li><a href="alerts.html"><span class="menu-text">Alerts</span></a></li>
            <li><a href="panels.html"><span class="menu-text">Panels</span></a></li>
            <li><a href="lists.html"><span class="menu-text">Lists</span></a></li>
            <li><a href="icons.html"><span class="menu-text">Icons</span></a></li>
            <li><a href="media.html"><span class="menu-text">Media</span></a></li>
            <li><a href="widgets.html"><span class="menu-text">Widgets</span></a></li>
            <li><a href="tabs.html"><span class="menu-text">Tabs &amp; Accordions</span></a></li>
            <li><a href="progress.html"><span class="menu-text">Progress</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-inbox zmdi-hc-lg"></i>
            <span class="menu-text">Mail Box</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li>
              <a href="inbox.html">
                <span class="menu-text">Inbox</span>
                <span class="label label-primary menu-label">12</span>
              </a>
            </li>
            <li><a href="compose.html"><span class="menu-text">Compose</span></a></li>
          </ul>
        </li>
        
        <li>
          <a href="search.web.html">
            <i class="menu-icon zmdi zmdi-search zmdi-hc-lg"></i>
            <span class="menu-text">Search</span>
          </a>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-pages zmdi-hc-lg"></i>
            <span class="menu-text">Pages</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="profile.html"><span class="menu-text">Profile</span></a></li>
            <li><a href="price.html"><span class="menu-text">Prices</span></a></li>
            <li><a href="invoice.html"><span class="menu-text">Invoice</span></a></li>
            <li><a href="gallery.1.html"><span class="menu-text">Gallery</span></a></li>
            <li><a href="gallery.2.html"><span class="menu-text">Gallery 2</span></a></li>
            <li><a href="support.html"><span class="menu-text">FAQ</span></a></li>
            <li class="has-submenu">
              <a href="javascript:void(0)" class="submenu-toggle">
                <i class="menu-icon zmdi zmdi-plus zmdi-hc-lg"></i>
                <span class="menu-text">Misc Pages</span>
                <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
              </a>
              <ul class="submenu">
                <li><a href="login.html"><span class="menu-text">Login</span></a></li>
                <li><a href="signup.html"><span class="menu-text">Sign Up</span></a></li>
                <li><a href="password-forget.html"><span class="menu-text">Reset Password</span></a></li>
                <li><a href="unlock.html"><span class="menu-text">Unlock Screen</span></a></li>
                <li><a href="404.html"><span class="menu-text">404 Error</span></a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
            <span class="menu-text">Forms</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="form.layouts.html"><span class="menu-text">Form Layouts</span></a></li>
            <li><a href="form.elements.html"><span class="menu-text">Form Elements</span></a></li>
            <li><a href="form.custom.html"><span class="menu-text">Customized Elements</span></a></li>
            <li><a href="form.plugins.html"><span class="menu-text">Form Plugins</span></a></li>
            <li><a href="file-upload.html"><span class="menu-text">File Upload</span></a></li>
            <li><a href="form.datetime.html"><span class="menu-text">DateTime Pickers</span></a></li>
            <li><a href="editors.html"><span class="menu-text">Editors</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-storage zmdi-hc-lg"></i>
            <span class="menu-text">Tables</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="tables.basic.html"><span class="menu-text">Basic Tables</span></a></li>
            <li><a href="datatables.html"><span class="menu-text">DataTables</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-chart zmdi-hc-lg"></i>
            <span class="menu-text">Charts</span>
            <span class="label label-success menu-label">7</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="charts.flot.html"><span class="menu-text">Flot Charts</span></a></li>
            <li><a href="echarts.bar.html"><span class="menu-text">Bar echarts</span></a></li>
            <li><a href="echarts.pie.html"><span class="menu-text">Pie echarts</span></a></li>
            <li><a href="echarts.line.html"><span class="menu-text">Line echarts</span></a></li>
            <li><a href="echarts.map.html"><span class="menu-text">Map echarts</span></a></li>
            <li><a href="echarts.scatter.html"><span class="menu-text">Scatter echarts</span></a></li>
            <li><a href="echarts.custom.html"><span class="menu-text">Custom echarts</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
            <span class="menu-text">Maps</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="map-google.html"><span class="menu-text">Google Maps</span></a></li>
            <li><a href="map-vector.html"><span class="menu-text">Vector Maps</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-apps zmdi-hc-lg"></i>
            <span class="menu-text">Apps</span>
            <span class="label label-info menu-label">2</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="calendar.html"><span class="menu-text">Calendar</span></a></li>
            <li><a href="contacts.html"><span class="menu-text">Contacts</span></a></li>
          </ul>
        </li>

        <li class="menu-separator"><hr></li>

        <li>
          <a href="documentation.html">
            <i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i>
            <span class="menu-text">Documentation</span>
          </a>
        </li>

        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
            <span class="menu-text">Settings</span>
          </a>
        </li>
        
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
            <span class="menu-text">Angular Version</span>
          </a>
        </li>
      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->

<!-- navbar search -->
<div id="navbar-search" class="navbar-search collapse">
  <div class="navbar-search-inner">
    <form action="#">
      <span class="search-icon"><i class="fa fa-search"></i></span>
      <input class="search-field" type="search" placeholder="search..."/>
    </form>
    <button type="button" class="search-close" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <i class="fa fa-close"></i>
    </button>
  </div>
  <div class="navbar-search-backdrop" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false"></div>
</div><!-- .navbar-search -->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-4">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title pull-left">Sales before taxes</h4>
						<small class="pull-right text-muted">10-30-2016</small>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="text-color m-t-xs m-b-md fw-600 fz-lg">$ <span data-plugin="counterUp">1,002.79</span></h3>
							<div class="text-primary">
								<i class="fa fa-long-arrow-up m-r-xs"></i>
								<sapn>33% from the last week</sapn>
							</div>
						</div>
						<div class="pull-right">
							<div class="m-t-md" data-plugin="sparkline" data-options="[8,12,4,12,10,13,16], { type: 'bar', chartRangeMin:0, height: 45, barColor: '#188ae2', barWidth: 8, barSpacing: 5 }"></div>
						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END cloumn -->
			<div class="col-md-4">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title pull-left">Your balance</h4>
						<small class="pull-right text-muted">10-30-2016</small>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="text-color m-t-xs m-b-md fw-600 fz-lg">$ <span data-plugin="counterUp">9,542.20</span></h3>
							<div class="text-danger">
								<i class="fa fa-long-arrow-down m-r-xs"></i>
								<sapn>43% from the last week</sapn>
							</div>
						</div>
						<div class="pull-right">
							<div class="m-t-md" data-plugin="sparkline" data-options="[3,8,10,12,4,12,8], { type: 'bar', chartRangeMin:0, height: 45, barColor: '#188ae2', barWidth: 8, barSpacing: 5 }"></div>
						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END cloumn -->
			<div class="col-md-4">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title pull-left">Total value</h4>
						<small class="pull-right text-muted">10-30-2016</small>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="text-color m-t-xs m-b-md fw-600 fz-lg">$<span data-plugin="counterUp">11,002.79</span></h3>
							<div class="text-primary">
								<i class="fa fa-long-arrow-up m-r-xs"></i>
								<sapn>33% from the last week</sapn>
							</div>
						</div>
						<div class="pull-right">
							<div class="m-t-md" data-plugin="sparkline" data-options="[8,6,3,11,10,9,7], { type: 'bar', chartRangeMin:0, height: 45, barColor: '#188ae2', barWidth: 8, barSpacing: 5 }"></div>
						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END cloumn -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-8">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title pull-left">Sales</h4>
						<div class="pull-right">
							<a href="#" class="text-info">All time</a> /
							<a href="#" class="text-muted">2016</a> /
							<a href="#" class="text-info">June</a>
						</div>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
					  <div data-plugin="chart" data-options="{
					      tooltip : {
					          trigger: 'axis'
					      },
					      legend: {
					          data:['Preorder','Sale','Deal']
					      },
					      calculable : true,
					      xAxis : [
					          {
					              type : 'category',
					              boundaryGap : false,
					              data : ['Mon','Tue','Wed','Thu','Fri','Sat','Sun']
					          }
					      ],
					      yAxis : [
					          {
					              type : 'value'
					          }
					      ],
					      series : [
					          {
					              name:'Deal',
					              type:'line',
					              smooth:true,
					              itemStyle: {normal: {areaStyle: {type: 'default'}}},
					              data:[10, 12, 21, 54, 260, 830, 710]
					          },
					          {
					              name:'Sale',
					              type:'line',
					              smooth:true,
					              itemStyle: {normal: {areaStyle: {type: 'default'}}},
					              data:[30, 182, 434, 791, 390, 30, 10]
					          },
					          {
					              name:'Preorder',
					              type:'line',
					              smooth:true,
					              itemStyle: {normal: {areaStyle: {type: 'default'}}},
					              data:[1320, 1132, 601, 234, 120, 90, 20]
					          }
					      ]
					  }" style="height: 350px;">
					  </div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
			<div class="col-md-4">
				<div class="widget countries-widget">
				  <header class="widget-header">
				    <h4 class="widget-title">Top countries</h4>
				  </header><!-- .widget-header -->
				  <hr class="widget-separator">
				  <div class="widget-body">
						<div class="list-group m-0">
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="{{ asset('assetsAdmin/assets/images/flags/Egypt.png') }}" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Egypt</span>
								<div class="pull-right">$<span data-plugin="counterUp">64258</span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="{{ asset('assetsAdmin/assets/images/flags/Italy.png') }}" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Italy</span>
								<div class="pull-right">$<span data-plugin="counterUp">55825</span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="{{ asset('assetsAdmin/assets/images/flags/United-States-of-America.png') }}" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">USA</span>
								<div class="pull-right">$<span data-plugin="counterUp">4587</span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="{{ asset('assetsAdmin/assets/images/flags/China.png') }}" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">China</span>
								<div class="pull-right">$<span data-plugin="counterUp">4465</span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="{{ asset('assetsAdmin/assets/images/flags/Russia.png') }}" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Russia</span>
								<div class="pull-right">$<span data-plugin="counterUp">3300</span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="{{ asset('assetsAdmin/assets/images/flags/France.png') }}" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">France</span>
								<div class="pull-right">$<span data-plugin="counterUp">350</span></div>
							</a><!-- .list-group-item -->
				  	</div><!-- .list-group -->
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
				  <header class="widget-header">
				    <h4 class="widget-title">Items sales this month</h4>
				  </header><!-- .widget-header -->
				  <hr class="widget-separator">
				  <div class="widget-body">
				  	<table class="table table-striped">
				  		<tr><th>Date</th><th>Items sales count</th><th>Earnings</th></tr>
							<tr>
								<td>03-26-2016</td>
								<td>262</td>
								<td>$691</td>
							</tr>
							<tr>
								<td>06-25-2016</td>
								<td>500</td>
								<td>$1765</td>
							</tr>
							<tr>
								<td>06-25-2016</td>
								<td>214</td>
								<td>$6258</td>
							</tr>
							<tr>
								<td>05-14-2016</td>
								<td>258</td>
								<td>$1400</td>
							</tr>
							<tr>
								<td>03-25-2016</td>
								<td>158</td>
								<td>$8457</td>
							</tr>
							<tr>
								<td>08-14-2016</td>
								<td>741</td>
								<td>$2543</td>
							</tr>
							<tr>
								<td>07-25-2016</td>
								<td>158</td>
								<td>$5869</td>
							</tr>
				  	</table>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-12">
				<div class="widget products-widget">
				  <header class="widget-header">
				    <h4 class="widget-title">Top items this month</h4>
				  </header><!-- .widget-header -->
				  <hr class="widget-separator">
				  <div class="widget-body">
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<a href="javascript:void(0)" class="product">
									<img class="img-responsive" src="{{ asset('assetsAdmin/assets/images/product-1.jpg') }}" alt="oroduct image">
									<div class="product-caption clearfix">
										<span>147 Sales</span>
										<span class="pull-right">$450</span>
									</div><!-- .product-caption -->
								</a><!-- .product -->
							</div><!-- END column -->
							<div class="col-sm-6 col-md-3">
								<a href="javascript:void(0)" class="product">
									<img class="img-responsive" src="{{ asset('assetsAdmin/assets/images/product-2.jpg') }}" alt="oroduct image">
									<div class="product-caption clearfix">
										<span>147 Sales</span>
										<span class="pull-right">$450</span>
									</div><!-- .product-caption -->
								</a><!-- .product -->
							</div><!-- END column -->
							<div class="col-sm-6 col-md-3">
								<a href="javascript:void(0)" class="product">
									<img class="img-responsive" src="{{ asset('assetsAdmin/assets/images/product-3.jpg') }}" alt="oroduct image">
									<div class="product-caption clearfix">
										<span>147 Sales</span>
										<span class="pull-right">$450</span>
									</div><!-- .product-caption -->
								</a><!-- .product -->
							</div><!-- END column -->
							<div class="col-sm-6 col-md-3">
								<a href="javascript:void(0)" class="product">
									<img class="img-responsive" src="{{ asset('assetsAdmin/assets/images/product-4.jpg') }}" alt="oroduct image">
									<div class="product-caption clearfix">
										<span>147 Sales</span>
										<span class="pull-right">$450</span>
									</div><!-- .product-caption -->
								</a><!-- .product -->
							</div><!-- END column -->
						</div><!-- .row -->
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
		</div><!-- .row -->
	</section><!-- .app-content -->
</div><!-- .wrap -->
  <!-- APP FOOTER -->
  <div class="wrap p-t-0">
    <footer class="app-footer">
      <div class="clearfix">
        <ul class="footer-menu pull-right">
          <li><a href="javascript:void(0)">Careers</a></li>
          <li><a href="javascript:void(0)">Privacy Policy</a></li>
          <li><a href="javascript:void(0)">Feedback <i class="fa fa-angle-up m-l-md"></i></a></li>
        </ul>
        <div class="copyright pull-left">Copyright RaThemes 2016 &copy;</div>
      </div>
    </footer>
  </div>
  <!-- /#app-footer -->
</main>
<!--========== END app main -->

	<!-- APP CUSTOMIZER -->
	<div id="app-customizer" class="app-customizer">
		<a href="javascript:void(0)" 
			class="app-customizer-toggle theme-color" 
			data-toggle="class" 
			data-class="open"
			data-active="false"
			data-target="#app-customizer">
			<i class="fa fa-gear"></i>
		</a>
		<div class="customizer-tabs">
			<!-- tabs list -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#menubar-customizer" aria-controls="menubar-customizer" role="tab" data-toggle="tab">Menubar</a></li>
				<li role="presentation"><a href="#navbar-customizer" aria-controls="navbar-customizer" role="tab" data-toggle="tab">Navbar</a></li>
			</ul><!-- .nav-tabs -->

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane in active fade" id="menubar-customizer">
					<div class="hidden-menubar-top hidden-float">
						<div class="m-b-0">
							<label for="menubar-fold-switch">Fold Menubar</label>
							<div class="pull-right">
								<input id="menubar-fold-switch" type="checkbox" data-switchery data-size="small" />
							</div>
						</div>
						<hr class="m-h-md">
					</div>
					<div class="radio radio-default m-b-md">
						<input type="radio" id="menubar-light-theme" name="menubar-theme" data-toggle="menubar-theme" data-theme="light">
						<label for="menubar-light-theme">Light</label>
					</div>

					<div class="radio radio-inverse m-b-md">
						<input type="radio" id="menubar-dark-theme" name="menubar-theme" data-toggle="menubar-theme" data-theme="dark">
						<label for="menubar-dark-theme">Dark</label>
					</div>
				</div><!-- .tab-pane -->
				<div role="tabpanel" class="tab-pane fade" id="navbar-customizer">
					<!-- This Section is populated Automatically By javascript -->
				</div><!-- .tab-pane -->
			</div>
		</div><!-- .customizer-taps -->
		<hr class="m-0">
		<div class="customizer-reset">
			<button id="customizer-reset-btn" class="btn btn-block btn-outline btn-primary">Reset</button>
			<a href="https://themeforest.net/item/infinity-responsive-web-app-kit/16230780" class="m-t-sm btn btn-block btn-danger">Buy Now</a>
		</div>
	</div><!-- #app-customizer -->
	
	<!-- SIDE PANEL -->
	<div id="side-panel" class="side-panel">
		<div class="panel-header">
			<h4 class="panel-title">Friends</h4>
		</div>
		<div class="scrollable-container">
			<div class="media-group">
				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/221.jpg') }}" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">John Doe</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/205.jpg') }}" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">John Doe</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/206.jpg') }}" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Adam Kiti</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/207.jpg') }}" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jane Doe</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/208.jpg') }}" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Sara Adams</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/209.jpg') }}" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Smith Doe</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/219.jpg') }}" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Dana Dyab</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/210.jpg') }}" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jeffry Way</h5>
							<small class="media-meta">2 hours ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/211.jpg') }}" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jane Doe</h5>
							<small class="media-meta">5 hours ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/212.jpg') }}" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Adam Khoury</h5>
							<small class="media-meta">22 minutes ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/207.jpg') }}" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Sara Smith</h5>
							<small class="media-meta">2 days ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="{{ asset('assetsAdmin/assets/images/211.jpg') }}" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Donia Dyab</h5>
							<small class="media-meta">3 days ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->
			</div>
		</div><!-- .scrollable-container -->
	</div><!-- /#side-panel -->
<!-- <link rel="stylesheet" href="{{ asset('assetsAdmin/libs/bower/font-awesome/css/font-awesome.min.css') }}"> --> 
	<!-- build:js ../assets/js/core.min.js -->
	<script src="{{ asset('assetsAdmin/libs/bower/jquery/dist/jquery.js') }}"></script>
	<script src="{{ asset('assetsAdmin/libs/bower/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assetsAdmin/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
	<script src="{{ asset('assetsAdmin/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js') }}"></script>
	<script src="{{ asset('assetsAdmin/libs/bower/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('assetsAdmin/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
	<script src="{{ asset('assetsAdmin/libs/bower/PACE/pace.min.js') }}"></script>
	<!-- endbuild -->

	<!-- build:js ../assets/js/app.min.js -->
	<script src="{{ asset('assetsAdmin/assets/js/library.js') }}"></script>
	<script src="{{ asset('assetsAdmin/assets/js/plugins.js') }}"></script>
	<script src="{{ asset('assetsAdmin/assets/js/app.js') }}"></script>
	<!-- endbuild -->
	<script src="{{ asset('assetsAdmin/libs/bower/moment/moment.js') }}"></script>
	<script src="{{ asset('assetsAdmin/libs/bower/fullcalendar/dist/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('assetsAdmin/assets/js/fullcalendar.js') }}"></script>

</body>
</html>