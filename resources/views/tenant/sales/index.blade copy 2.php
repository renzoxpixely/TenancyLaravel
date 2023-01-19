@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">

    @foreach ($branches as $branch)
        <h1>{{ ucfirst($branch->description) }}</h1>
    @endforeach  

  
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">

    <div class="pull-right mb-2">
                   
                    <a href="{{ route("tenant.branches.sales.create", $branch_id) }}">Agregar Venta</a>
                  </div>

                
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Usuarios</h2>
                </div>
                <div class="pull-right mb-2">
                    <!-- <a class="btn btn-success" href="{{ route('tenant.users.create') }}"> Crear Usuario</a> -->
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->branch_id }}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
            </tbody>
         
           
        
        </table>
        
    </div>


    </section>
    <!-- content --> 

  </div>
  <!-- content-wrapper --> 


@endsection
