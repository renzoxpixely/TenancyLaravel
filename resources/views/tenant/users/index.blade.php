@extends('tenant.layouts.layout_home.base')

@section('content')
    <section class="container container-fluid">
        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Usuarios</h2>
                </div>
            </div>
        </div> --}}

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-box">
                        <h4>Usuarios</h4>
                        {{-- @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif --}}
                        {{-- <div class="pull-right mb-2">
                            <a class="btn btn-success" href="{{ route('tenant.users.create') }}"> Crear Usuario</a>
                        </div> --}}
                        <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-truncate">{{ $user->id }}</td>
                                        <td class="text-truncate">{{ $user->name }}</td>
                                        <td class="text-truncate">{{ $user->email }}</td>
                                        <td class="text-truncate">
                                            <form action="{{ route('tenant.users.destroy', $user->id) }}" method="Post">
                                                <a class="btn btn-primary"
                                                    href="{{ route('tenant.users.edit', $user->id) }}"><i
                                                        class="fa fa-pencil-square-o fa-lg text-success"
                                                        aria-hidden="true"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa fa-times-circle fa-lg text-warning"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#example').dataTable({
                "pageLength": 20
            });
        });
    </script>



    <!--
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
        <script type="text/javascript">
            var route = "{{ url('branches.inventories') }}";
            $('#searchItem').typeahead({
                source: function(query, process) {
                    return $.get(route, {
                        query: query
                    }, function(data) {
                        return process(data);
                    });
                }
            });
        </script> -->
@endsection
