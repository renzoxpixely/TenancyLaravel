@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Ventas</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">



                



<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar Usuario</h2>
                </div>
                <div class="pull-right">
                <a href="{{ route("tenant.branches.sales.index", $branch_id) }}">atrs</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route("tenant.branches.sales.store", $branch_id) }}" method="POST">        
        <!-- <form action="{{ route('tenant.users.store') }}" method="POST" enctype="multipart/form-data"> -->
        <!-- protected $fillable = ['customer','product','amount','price','total']; -->
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>customer:</strong>
                        <input type="text" name="customer" class="form-control" placeholder="customer">
                        @error('customer')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>product:</strong>
                        <input type="text" name="product" class="form-control" placeholder="product">
                        @error('product')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>amount:</strong>
                        <input type="text" name="amount" class="form-control" placeholder="amount">
                        @error('amount')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>price:</strong>
                        <input type="text" name="price" class="form-control" placeholder="price">
                        @error('price')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>total:</strong>
                        <input type="text" name="total" class="form-control" placeholder="total">
                        @error('total')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>     
                                                
                <button type="submit" class="btn btn-primary ml-3">Agregar</button>
            </div>
        </form>
    </div>




    </section>
    <!-- content --> 

  </div>
  <!-- content-wrapper --> 

@endsection
