@extends('tenant.layouts.layout_home.base')

@section('content')

    <!-- Main content -->
    <section class="content container-fluid">
    <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Sucursales</h2>
                        </div>
                        <div class="pull-right mb-2">
                            <a class="btn btn-success" href="{{ route('tenant.branches.create') }}"> Create Sucursal</a>
                        </div>
                    </div>
    </div>
        @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
        @endif


  <!-- Content Wrapper. Contains page content -->
  <div class="content">



    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
      @foreach ($branches as $branch)
        <div class="col-md-4">
          <div class="chart-box">
            <div class="row">
              <div class="col-md-3">
                <div class="user-img pull-left"><img src="https://api.nubefa.com/storage/131/AfypFkZIQzfSYYXXugD8ODsowI7akiFywgoxtGb1.png" class="img-circle img-responsive" alt="User Image"> </div>
              </div>
              <div class="col-md-9">
                <div class="mail-contnet">
                  <h4><span class="desig">Descripción: </span>{{ $branch->description }}</h4>
                  <h4 class="desig"><span class="desig">Dirección: </span>{{ $branch->direction }}</h4>
                  <h4><span class="desig">Compañia id: </span>{{ $branch->company_id }} </h4>
                   <a class="btn btn-primary" href="{{ route('tenant.dashboard') }}">Ingresar</a>
                  <ul class="social-icons">
                            <form action="{{ route('tenant.branches.destroy',$branch->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('tenant.branches.edit',$branch->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                  </ul>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        @endforeach
    </div>

    </section>
    <!-- content -->

  </div>
  <!-- content-wrapper -->




@endsection


