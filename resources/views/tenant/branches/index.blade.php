@extends('tenant.layouts.layout_home.base')

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
            @if(count($companies) === 0)
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
                              <a class="btn btn-primary" href="{{ route('tenant.companies.create') }}">Registrar Empresa</a>
                          </div>
                      </div>



            @elseif(count($branches) === 0)
            <div class="form-body d-flex align-items-center flex-column">
                          <div class="form-group has-feedback">
                          <img src="{{ asset('/assetsAdmin/dist/img/company.jpg') }}"  class="img-responsive" alt="User Image" style="width: 100%;">
                              <!-- <img src="https://app.nubefa.com/assets/images/company.jpg" class="img-responsive" alt="User Image" style="width: 100%;"> -->
                              <h2 style="margin-top: 20px; white-space: nowrap; text-align: center;">Registra tu local</h2>
                          </div>
                          <div class="form-group has-feedback text-center">
                              <a class="btn btn-success" href="{{ route('tenant.branches.create') }}">Registrar Sucursal</a>
                          </div>
                      </div>
                        
            @else

    <!-- Main content -->

      <div class="row">
        <div class="col-lg-3">
          <div class="chart-box">
                <div class="panel">
                @foreach ($companies as $company)
                <div class="panel-box">
                    <img src="{{ asset('logo/' . $company->logo) }}" alt="{{ $company->name }} logo" style="max-width: 200px; max-height: 200px;">
                </div>
                  <!-- <div class="panel-box"> <img src="https://api.nubefa.com/storage/131/AfypFkZIQzfSYYXXugD8ODsowI7akiFywgoxtGb1.png" class="img-responsive img-rounded"> -->
                  @endforeach 
            <!-- Tab panes -->
            <div class="tab-content">
            @foreach ($branches as $branch)
              <div role="tabpanel" class="tab-pane active" id="home">

                <div class="message-widget">
               
                              
                    <div class="mail-contnet">
                      <h4 class="pull-left">{{ $branch->description }}</h4>
                      <div class="pull-right">
                      <a class="btn btn-primary" href="{{ route('tenant.branches.dashboard.index', $branch->id) }}">Ingresar</a>
                      <div class="col-md-2">
          <!-- <button type="button"  class="btn btn-primary"><a class="" href="{{ route('tenant.branches.dashboard.index', $branch->id) }}">Ingresar</a></button> -->
        </div>
                    </div>
                  
                 
                  </div>
<!--                   <a class="btn btn-success" href="{{ route('tenant.branches.shoppings.index', $branch->id) }}"> Ingrsardashhs</a>
                  <a class="btn btn-success" href="{{ route('tenant.branches.sales.index', $branch->id) }}"> Ventas</a> -->
                  @endforeach  
                  </div>
                  </div>

                </div>
          </div>
        </div>
      </div>

    <!-- content --> 

            @endif
    </div>

    </section>
    <!-- content -->

  </div>
  <!-- content-wrapper -->

@endsection


