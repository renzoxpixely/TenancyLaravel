@extends('system.layout.base')

@section('content')





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Usuarios Registrados</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-envelope-o"></i> Tables</li>
        <li class="active"><i class="fa fa-table"></i> Data Tables</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">
            <h4>Inquilinos</h4>
            <div id="example_filter" class="dataTables_filter pull-right">
              <input class="form-control" id="placeholderInput" placeholder="Search" type="email">
            </div>
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th class="sortable">ID</th>
                  <th class="sortable">Nombre</th>
                  <th class="sortable">Correo</th>
                  <th class="sortable">Dominio</th>
                  <th class="sortable">Empresa</th>
                  <th class="sortable">Ingresar</th>
                  <th>Base de Datos</th>
                </tr>
              </thead>
              @foreach($tenants as $tenant)
              <tr>
                <td class="text-truncate">{{ $tenant->id }}</td>
                <td class="text-truncate">{{ $tenant->name }}</td>
                <td class="text-truncate">{{ $tenant->email }}</td>
                
                 <td class="text-truncate"><a href="">{{ $tenant->domain }}:8000</a></td> 
                <td class="text-truncate"><span class="lable-tag tag-success">{{ $tenant->company }}</span></td>
                <td class="text-truncate"><a href="{{ route('tenant.branches.index', ['uuid' => $tenant->tenancy_db_name, 'domain' => $tenant->domain]) }}">{{ $tenant->domain }}:8000/{{ $tenant->tenancy_db_name }}</a></td>

                <td class="text-truncate">{{ $tenant->tenancy_db_name }}</td>
              </tr>
              @endforeach
            </table> 
          </div>
        </div>
      </div>
    </section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 


@endsection
