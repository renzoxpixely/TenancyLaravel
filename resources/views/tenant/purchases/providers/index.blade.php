@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">

    @foreach ($branches as $branch)
        <h1>{{ ucfirst($branch->description) }} - Proveedores</h1>
    @endforeach  
    
  
    <div class="row">
        <div class="pull-right m-2">
          <button type="button" class="btn btn-primary btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nueva Transacción <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a  href="{{ route('tenant.branches.providers.create', $branch_id) }}">Ventas</a></li>
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



    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="chart-box">
              <h4>Ventas</h4>
              
              <a href="{{ route('tenant.branches.providers.create', $branch_id) }}">Botton agregar provveeodr</a>
              <div id="example_filter" class="dataTables_filter pull-right">

                
        <!-- <div class="pull-right mb-2">
            <a href="{{ route("tenant.branches.sales.create", $branch_id) }}">Nueva Transacción</a>
        </div> -->

              </div>




      <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
        <thead>
            <tr>
            <th>Nombre</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>RUC</th>
                <th>Direccion</th>
                <th>Celular</th>
                <th>Sucursal</th>
            </tr>
        </thead>
        <tbody>
               @foreach ($providers as $provider)
                <tr>          {{-- protected $fillable = ['name','email','ruc_number','address','phone','branch_id']; --}}
                  <td>{{ $provider->name }}</td>
                  <td><a href="#"></a>{{ $provider->name }}</td>
                  <td>{{ $provider->email }}</td>
                  <td><span class="lable-tag tag-success">{{ $provider->ruc_number }}</span></td>
                  <td>{{ $provider->address }}</td>
                  <td>{{ $provider->phone }}</td>
                  <td>{{ $provider->branch_id }}</td>                  
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Fecha</th>
                <th>Documento</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

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
@section('script')
<script>
$(document).ready(function () {
    $('#example').dataTable( {
  "pageLength": 20
} );
});
</script>

@endsection