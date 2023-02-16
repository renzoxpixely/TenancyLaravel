@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')


<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Company</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('tenant.companies.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <form action="{{ route('tenant.branches.providers.store', $branch_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h1>{{$branch_id}}</h1>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Company Name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Company Email">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Address:</strong>
                        <input type="text" name="address" class="form-control" placeholder="Company Address">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Address:</strong>
                        <input type="text" name="phone" class="form-control" placeholder="Company Address">
                        @error('phone')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Address:</strong>
                        <input type="text" name="ruc_number" class="form-control" placeholder="Company Address">
                        @error('ruc_number')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>                                
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>



@endsection
