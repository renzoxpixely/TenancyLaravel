
<!DOCTYPE html>
<html lang="es">
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
<link rel="stylesheet" href="{{ asset('assetsAdmin/dist/css/estilos.css') }}">
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

 <!-- partial -->
@include('tenant.layouts.layout_home.partials.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>Locales</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section> -->

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
    Copyright &copy; 2017 Yourdomian. All rights reserved. </footer> -->
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
