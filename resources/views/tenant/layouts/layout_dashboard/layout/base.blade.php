
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


<!-- ruta public/tenancy/assets -->

<!-- Template style -->
<link rel="stylesheet" href="{{ asset('assetsAdmin/dist/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assetsAdmin/dist/et-line-font/et-line-font.css') }}">
<link rel="stylesheet" href="{{ asset('assetsAdmin/dist/font-awesome/css/font-awesome.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assetsAdmin/dist/weather/weather-icons.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assetsAdmin/dist/weather/weather-icons-wind.min.css') }}">

<!-- datatables style -->
<link rel="stylesheet" href="{{ asset('assetsAdmin/dist/css/dataTables.bootstrap4.min.css') }}">

@yield('css')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="{{ asset('assetsAdmin/plugins/charts/code/highcharts.js') }}"></script>
</head>

 <!-- partial -->
 @include('tenant.layouts.layout_dashboard.partials.header')

<!-- jQuery -->
<script src="{{ asset('assetsAdmin/dist/js/jquery.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/dist/js/ovio.js') }}"></script>

<!-- Sweet alert -->
<script src="{{ asset('assetsAdmin/dist/js/sweetalert.min.js') }}"></script>

<!-- datatables -->
<script src="{{ asset('assetsAdmin/dist/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/dist/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- charts -->
<script src="{{ asset('assetsAdmin/plugins/charts/code/modules/exporting.js') }}"></script>
<script src="{{ asset('assetsAdmin/plugins/charts/chart-functions.js') }}"></script>


@yield('script')

</script>

</body>
</html>