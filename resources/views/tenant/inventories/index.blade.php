@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">

    @foreach ($branches as $branch)
        <h1>{{ ucfirst($branch->description) }} - Inventario</h1>
    @endforeach  
    <!-- <a class="btn btn-success" href="{{ route('tenant.branches.shoppings.index', $branch->id) }}"> Ingrsardashhs</a> -->
    
    <div class="row">
        <div class="pull-right m-2">
          <button type="button" class="btn btn-primary btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nuevo <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a  href="{{ route("tenant.branches.sales.create", $branch_id) }}">Ventas</a></li>
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



    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="chart-box">
              <h4>Ventas</h4>
              <div id="example_filter" class="dataTables_filter pull-right">

                
        <div class="pull-right mb-2">
            <!-- <a href="{{ route("tenant.branches.sales.create", $branch_id) }}">Nueva Transacción</a> -->
        </div>
                <input class="form-control" id="placeholderInput" placeholder="Buscar" type="email">
                
              </div>
              <table class="table table-responsive">
                <thead>
                  <tr>
                    <th class="sortable">Fecha</th>
                    <th class="sortable">Documento</th>
                    <th class="sortable">Cliente</th>
                    <th class="sortable">Total</th>
                    <th class="sortable">Saldo</th>
                    <th class="sortable">Acciones</th>
                    <th>Estado</th>
                  </tr>
                </thead>

              </table>
              <ul class="pagination m-bot-0">
                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- content -->         

      </section>
      <!-- content --> 




  </div>
  <!-- content-wrapper --> 


@endsection
