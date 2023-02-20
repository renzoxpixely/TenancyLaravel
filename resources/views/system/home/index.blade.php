@extends('system.layout.partials.base')


@section('content')

    <!-- Main content -->
    <section class="content container-fluid">
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



    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">

<!--                         <div class="pull-right mb-2">
                         <img src="https://app.nubefa.com/assets/images/welcome.png" class="img-responsive" alt="User Image">
                            <a class="btn btn-success" href="{{ route('tenant.companies.create') }}"> Registrar Empresa</a>
                        </div> -->
                        <div class="form-body d-flex align-items-center flex-column">
                          <div class="form-group has-feedback">
                          <img src="{{ asset('/assetsAdmin/dist/img/welcome.png') }}"  class="img-responsive" alt="User Image" style="width: 100%;">
                              <!-- <img src="https://app.nubefa.com/assets/images/welcome.png" class="img-responsive" alt="User Image" style="width: 100%;"> -->
                              <h2 style="margin-top: 20px; white-space: nowrap;">Hola! Bienvenido a Nubefa</h2>
                          </div>
                          <div class="form-group has-feedback text-center">
                              <a class="btn btn-primary" href="{{ route('companies.create') }}">Registrar Empresa</a>
                          </div>
                      </div>
        </div>                      
  </section>
</div>  
@endsection
