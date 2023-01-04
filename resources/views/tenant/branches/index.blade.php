

@extends('tenant.branch')

@section('content')

    <div class="container mt-2">
             <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Sucursales</h2>
                        </div>
                        <div class="pull-right mb-2">
                            <a class="btn btn-success" href="{{ route('tenant.branches.create') }}"> Create Company</a>
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
                    <th>S.No</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branches as $branch)
                    <tr>
                        <td>{{ $branch->id }}</td>
                        <td>{{ $branch->description }}</td>
                        <td>{{ $branch->direction }}</td>
                        <td>{{ $branch->company_id }}</td>
                        <td>{{ $branch->ubigeo_id }}</td>                        
                        <td>
                            <form action="{{ route('tenant.branches.destroy',$branch->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('tenant.branches.edit',$branch->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $branches->links() !!}
    </div>
<




@endsection


