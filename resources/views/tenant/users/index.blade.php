@extends('tenant.layouts.layout_home.base')

@section('content')

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Usuarios</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('tenant.users.create') }}"> Crear Usuario</a>
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
                @foreach ($users as $user)
                    <tr>
                        <td class="text-truncate">{{ $user->id }}</td>
                        <td class="text-truncate">{{ $user->name }}</td>
                        <td class="text-truncate">{{ $user->email }}</td>
                        <td class="text-truncate">
                            <form action="{{ route('tenant.users.destroy',$user->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('tenant.users.edit',$user->id) }}"><i class="fa fa-pencil-square-o fa-lg text-success" aria-hidden="true"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle fa-lg text-warning" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $users->links() !!}
    </div>


@endsection
