@extends('tenant.layouts.layout_home.base')

@section('content')

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
                @foreach ($shoppings as $shopping)
                    <tr>
                        <td>{{ $shopping->id }}</td>
                        <td>{{ $shopping->user_id }}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        
    </div>


@endsection
