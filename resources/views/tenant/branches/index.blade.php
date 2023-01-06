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


        <!-- Content Wrapper. Contains page content -->
        <div class="content">

            <h1>GOKUUUUUUUUUUUUUUUUUU</h1>

            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    @foreach ($branches as $branch)
                        <div class="col-md-4">
                            <div class="chart-box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="user-img pull-left"><img
                                                src="https://api.nubefa.com/storage/131/AfypFkZIQzfSYYXXugD8ODsowI7akiFywgoxtGb1.png"
                                                class="img-circle img-responsive" alt="User Image"> </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="mail-contnet">
                                            <h4>{{ $branch->description }}<span class="desig">- Web Designer</span></h4>
                                            <p class="m-bot-2">{{ $branch->direction }}</p>
                                            <h5>{{ $branch->company_id }} </h5>
                                            <ul class="social-icons">
                                                <form action="{{ route('tenant.branches.destroy', $branch->id) }}"
                                                    method="Post">
                                                    <a class="btn btn-primary"
                                                        href="{{ route('tenant.branches.edit', $branch->id) }}">Edit</a>
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
    </section>
@endsection
