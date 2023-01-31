@extends('tenant.layouts.layout_home.base')

@section('content')
    <!-- Main content -->
    <section class="content container bk-ctn">
        <!-- <div class="row">
                                                                        <div class="col-lg-12 margin-tb">
                                                                            <div class="pull-left">
                                                                                <h2>Sucursales</h2>
                                                                            </div>
                                                                            <div class="pull-right mb-2">
                                                                                <a class="btn btn-success" href="{{ route('tenant.branches.create') }}"> Create Sucursal</a>
                                                                            </div>
                                                                        </div>
                                                        </div> -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content">
                <div class="ds-b mb-15">
                    <h1 class="text-center">Seleccione un Local para ingresar</h1>
                    <p class="pr-inx text-center">Listado de empresas y locales a las que estas asignado</p>
                </div>
            <!-- Main content -->
            <section class="content container-fluid mt-5">

                <div class="row">
                    @if (count($companies) === 0)
                        <!--                         <div class="pull-right mb-2">
                                                                             <img src="https://app.nubefa.com/assets/images/welcome.png" class="img-responsive" alt="User Image">
                                                                                <a class="btn btn-success" href="{{ route('tenant.companies.create') }}"> Registrar Empresa</a>
                                                                            </div> -->
                        <div class="form-body">
                            <div class="form-group has-feedback">
                                <img src="https://app.nubefa.com/assets/images/welcome.png" class="img-responsive"
                                    alt="User Image">
                            </div>
                            <div class="form-group has-feedback">
                                <a class="btn btn-primary" href="{{ route('tenant.companies.create') }}"> Registrar
                                    Empresa</a>
                            </div>
                        </div>
                </div>
            @elseif(count($branches) === 0)
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('tenant.branches.create') }}"> Registrar Sucursal</a>
                </div>
            @else
                <!-- Main content -->

                <div class="row">
                    {{-- @foreach ($branches as $branch)       ITERAR TODO EL CONTENEDOR --}}
                    <div class="col-md-4 col-sm-6">
                        <div class="chart-box">
                            <div class="panel">
                                <div class="panel-box"> <img
                                        src="https://api.nubefa.com/storage/131/AfypFkZIQzfSYYXXugD8ODsowI7akiFywgoxtGb1.png"
                                        class="img-responsive img-rounded">
                                </div>
                                <h4 class="text-center pr-chx">GLOMERAN CORP S.A</h4>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    @foreach ($branches as $branch)
                                        <div role="tabpanel" class="tab-pane active" id="home">

                                            <div class="message-widget emp-emp">

                                                <div class="mail-contnet row">
                                                    <div class="col-md-8 col-xs-9">
                                                        <h4 class="pull-left">{{ $branch->description }}</h4>
                                                        <span class="badge badge-badge">{{ $branch->description }}</span>
                                                    </div>
                                                    <div class="pull-right col-md-4 col-xs-3">
                                                        <a class="btn btn-azul"
                                                            href="{{ route('tenant.branches.dashboard.index', $branch->id) }}">ENTRAR</a>
                                                        {{-- <div class=""> --}}
                                                        <!-- <button type="button"  class="btn btn-primary"><a class="" href="{{ route('tenant.branches.dashboard.index', $branch->id) }}">Ingresar</a></button> -->
                                                        {{-- </div> --}}
                                                    </div>


                                                </div>
                                                <!-- <a class="btn btn-success" href="{{ route('tenant.branches.shoppings.index', $branch->id) }}"> Ingrsardashhs</a>
                                                                      <a class="btn btn-success" href="{{ route('tenant.branches.sales.index', $branch->id) }}"> Ventas</a> -->
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach    FINDE LA ITERACIÓN DEL CONTENEDOR --}}

                </div>
                <!-- content -->
        </div>
        @endif

    </section>
    <!-- content -->

    </div>
    <!-- content-wrapper -->

@endsection
