@extends('tenant.layouts.layout_dashboard.layout.base_only_style')


@section('content')

<body class="sidebar-mini">
<div class="wrapper">


  
  <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">



    <div class="page-header">
        <h3 class="page-title">
            Detalles de compra
        </h3>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   
                    <div class="form-group row">
                        <div class="col-md-4 text-center">
                            <label class="form-control-label" for="nombre"><strong>Proveedor</strong></label>
                            <p>{{$client->provider->names_surnames}}</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="form-control-label" for="num_compra"><strong>Número Compra</strong></label>
                            <p>{{$client->id}}</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="form-control-label" for="num_compra"><strong>Comprador</strong></label>
                         
                        </div>
                    </div>
                    <br /><br />
                    <div class="form-group row ">
                        <h4 class="card-title ml-3">Detalles de compra</h4>
                        <div class="table-responsive col-md-12">
                            <table id="detalles" class="table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio (PEN)</th>
                                        <th>Cantidad</th>
                                        <th>SubTotal (PEN)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">
                                            <p align="right">SUBTOTAL:</p>
                                        </th>
                                        <th>
                                            <p align="right">s/{{number_format($subtotal,2)}}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <p align="right">TOTAL IMPUESTO ({{$client->tax}}%):</p>
                                        </th>
                                        <th>
                                            <p align="right">s/{{number_format($subtotal*$client->tax/100,2)}}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <p align="right">TOTAL:</p>
                                        </th>
                                        <th>
                                            <p align="right">s/{{number_format($client->total,2)}}</p>
                                        </th>
                                    </tr>
                    
                                </tfoot>
                                <tbody>
                                    @foreach($clientDetails as $clientDetail)
                                    <tr>
                                        <td>{{$clientDetail->product->name }}</td>
                                        <td>s/{{$clientDetail->price}}</td>
                                        <td>{{$clientDetail->quantity}}</td>
                                        <td>s/{{number_format($clientDetail->quantity*$clientDetail->price,2)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ URL::previous() }}" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>
    </div>







</div>
    </div>
</div>



</div>
</body>
@endsection
@section('scripts')

@endsection
