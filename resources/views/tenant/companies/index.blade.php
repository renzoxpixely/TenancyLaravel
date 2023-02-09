@extends('tenant.layouts.layout_home.base')

@section('css')
<style>
    .btn {
        padding: 8px 15px;
        font-size: 14px;
    }
    .btn-success {
        background-color: #9591f2;
        border-color: transparent;
    }
    .btn-success:hover {
        background-color: #5a48a7;
    }
</style>
@endsection


@section('content')

    <div class="container mt-2">
             <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h1>Mis Empresas y Locales</h1>



    <!-- <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                <div class="row">

                    <div class="col-lg-12 margin-tb">

                        <div class="pull-right mb-2">
                            <a class="btn btn-success" href="{{ route('tenant.companies.create') }}"> Registro Empresa</a>
                        </div>
                    </div>
                 </div>
                </div>

            </div>
        </div>

    </div> -->


    <p class="pr-inx">Listado de empresas y locales a las que estas asignado</p>

    <div class="pull-left mb-2" style="margin-bottom: 5px;">
        <a class="btn btn-success" href="{{ route('tenant.users.create') }}"> Crear Nueva Empresa</a>
    </div>
                        </div>
                    </div>
                </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <!-- <th width="280px">Action</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <!-- <td>
                            <form action="{{ route('tenant.companies.destroy',$company->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('tenant.companies.edit',$company->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td> -->
                    </tr>
                    @endforeach
            </tbody>
        </table>

    </div>
@endsection
