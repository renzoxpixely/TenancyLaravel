@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Bienvenido</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
<div class="row">
<div class="form-body">
    <div class="form-group has-feedback">
        <img src="https://app.nubefa.com/assets/images/welcome.png" class="img-responsive" alt="User Image">            
    </div>
    <div class="form-group has-feedback">
        <a class="btn btn-primary" href="{{ route('tenant.branches.index') }}"> Ir a inicio</a> </div>
      </div>
  </div>
</div>

    </section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 

@endsection
