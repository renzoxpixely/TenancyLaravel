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
        <button data-dismiss="modal" data-toggle="modal" data-target="#addModal" type="button" class="btn btn-primary btn-lg btn-block">Nuevo</button>
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



    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="chart-box">
              <h4>Ventas</h4>
              
              
              <div id="example_filter" class="dataTables_filter pull-right">

                
        <!-- <div class="pull-right mb-2">
            <a href="{{ route("tenant.branches.sales.create", $branch_id) }}">Nueva Transacción</a>
        </div> -->

              </div>




              <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
        <thead>
            <tr>
            <th>Doc.</th>
                <th>Número</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
                 @foreach ($providers as $provider)
                <tr>          {{-- protected $fillable = ['national_identity_document','document_number','names_surnames','display_name','address','location_code','email','mobile_phone','landline_phone','branch_id']; --}}
                  <td>{{ $provider->national_identity_document }}</td>
                  <td><a href="#"></a>{{ $provider->document_number }}</td>
                  <td>{{ $provider->names_surnames }}</td>
                  <td><span class="lable-tag tag-success">{{ $provider->address }}</span></td>
                  <td>{{ $provider->mobile_phone }}</td>
                  <td>{{ $provider->email }}</td>                
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
            <th>Doc.</th>
                <th>Número</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
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

  <!-- modal agregar providers -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  @include('tenant.purchases.providers.create_provider_modal')
</div>

@endsection
@section('script')
<script>
$(document).ready(function () {
  $('#example').dataTable( {
    "pageLength": 20,
    "order": [[0, "desc"]]
  } );
});
</script>

@endsection