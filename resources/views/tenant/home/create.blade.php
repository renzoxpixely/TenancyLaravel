@extends('tenant.layouts.layout_home.base')

@section('content')

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar Usuario</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('tenant.users.index') }}"> Atrás</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('tenant.users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Nombre">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Correo:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Correo">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contraseña:</strong>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        @error('password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirmar Contraseña:</strong>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña">
                        @error('password_confirmation')
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>                
                <button type="submit" class="btn btn-primary ml-3">Agregar</button>
            </div>
        </form>
    </div>

@endsection
