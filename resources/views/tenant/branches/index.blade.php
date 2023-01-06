

@extends('tenant.branch')

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

        @foreach ($branches as $branch)
      <div class="row">
      <div class="col-lg-4">
          <div class="chart-box">
            <h4>Descripción: {{$branch->description}}</h4>
            <div class="message-widget">

            <div class="row">
                <div class="col-lg-4 col-xs-4 m-bot-2"><img src="{{ asset('assetsAdmin/dist/img/img5.jpg') }}" alt="user" class="img-responsive img-rounded"></div>
                </div>
                <div class="mail-contnet">
                    <h5>Dirección: {{ $branch->direction }}</h5>
                    <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-rounded">Entrar</button>
                    </div>
                </div>
                <div class="mail-contnet">
                    <h5>Empresa id: {{ $branch->company_id }}</h5>
                    <div class="col-md-2">
                     <button type="button" class="btn btn-primary btn-rounded">Entrar</button>
                    </div>
                </div>
                <td>
                            <form action="{{ route('tenant.branches.destroy',$branch->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('tenant.branches.edit',$branch->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                </td>
          </div>

        </div>
        @endforeach



@endsection


