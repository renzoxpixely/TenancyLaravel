@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            @foreach ($branches as $branch)
                <h1>{{ ucfirst($branch->description) }} - Dashboard</h1>
            @endforeach

            <div class="row">
                <div class="pull-right m-2">
                    <ul class="dropdown-menu">

                        <li><a href="#">Cotización</a></li>
                        <li><a href="#">Guía de Remisión</a></li>
                    </ul>
                </div>
            </div>




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
                        <div class="media-info"></i>
                            <p><strong>Ventas Últimos 7 Días</strong></p>
                        </div>
                        <div class="media-info">
                            <span class="pull-left">S/ 36,048.14</span>
                            <span class="pull-right">Total 100000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="media-box bg-sea">
                        <div class="media-info"></i>
                            <p><strong>Ventas Últimos 7 Días</strong></p>
                        </div>
                        <div class="media-info">
                            <span class="pull-left">S/ 36,048.14</span>
                            <span class="pull-right">Total 100000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="media-box bg-blue">
                        <div class="media-info"></i>
                            <p><strong>Ventas Últimos 7 Días</strong></p>
                        </div>
                        <div class="media-info">
                            <span class="pull-left">S/ 36,048.14</span>
                            <span class="pull-right">Total 100000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="media-box bg-green">
                        <div class="media-info"></i>
                            <p><strong>Ventas Últimos 7 Días</strong></p>
                        </div>
                        <div class="media-info">
                            <span class="pull-left">S/ 36,048.14</span>
                            <span class="pull-right">Total 100000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="media-box">
                        <div class="media-info"></i>
                            <p><strong>Ventas Últimos 7 Días</strong></p>
                        </div>
                        <div class="media-info">
                            <span class="pull-left">S/ 36,048.14</span>
                            <span class="pull-right">Total 100000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="media-box">
                        <div class="media-info"></i>
                            <p><strong>Ventas Últimos 7 Días</strong></p>
                        </div>
                        <div class="media-info">
                            <span class="pull-left">S/ 36,048.14</span>
                            <span class="pull-right">Total 100000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="media-box">
                        <div class="media-info"></i>
                            <p><strong>Ventas Últimos 7 Días</strong></p>
                        </div>
                        <div class="media-info">
                            <span class="pull-left">S/ 36,048.14</span>
                            <span class="pull-right">Total 100000</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="media-box">
                        <div class="media-info"></i>
                            <p><strong>Ventas Últimos 7 Días</strong></p>
                        </div>
                        <div class="media-info">
                            <span class="pull-left">S/ 36,048.14</span>
                            <span class="pull-right">Total 100000</span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="chart-box">
                        <h4>Product Sales</h4>
                        <div class="chart">
                            <div id="container"></div>
                            <!--for values check "Product Sales" chart on char-function.js-->
                        </div>
                    </div>
                </div>

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <div class="col-md-2">
                    <button type="button" onclick="location.href='http://www.example.com'"
                        class="btn btn-primary">Tareas</button>
                </div>

        </section>

    </div>
    <!-- content-wrapper -->
@endsection
