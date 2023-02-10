@extends('tenant.layouts.layout_dashboard.layout.base_only_style')
@section('css')


@endsection

@section('content')

<body class="sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header dark-bg">

  
  <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">


    <div class="page-header">
        <h3 class="page-title">
            Compras
        </h3>
        @if ($message = Session::get('success'))
            <!-- <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div> -->
            <!-- <script>
            swal("Listo!", "Click al boton!", "success");
            </script> -->
        @endif
        <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="#">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de compra</li>
            </ol>
        </nav> -->
    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
            <form action="{{ route('tenant.purchases.store') }}" method="POST" enctype="multipart/form-data">
                
                @csrf
                <div class="card-body">
                    @include('tenant.purchases._form')
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" id="guardar" class="btn btn-primary float-right">Registrar</button>
                    <a href="{{ URL::previous() }}" class="btn btn-light">
                        Cancelar
                    </a>
                </div>
        </form>
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




@section('script')
<script>
            @if ($message = Session::get('success'))
            swal("Listo!", "Click en OK!", "success");
        @endif
</script>


<script>
    $(document).ready(function () {
        $("#agregar").click(function () {
            agregar();
        });
    });
    
    var cont = 0;
    total = 0;
    subtotal = [];
    
    $("#guardar").hide();


    var product_id1 = $('#product_id1');
    product_id1.change(function(){
        $.ajax({
            url: "{{route('get_products_by_id')}}",
            method: 'GET',
            data:{
                product_id: product_id1.val(),
            },
            success: function(data){
                $("#code").val(data.code);
            }
        });
    });
    $(obtener_registro());
    function obtener_registro(code){
        $.ajax({
            url: "{{route('get_products_by_barcode')}}",
            type: 'GET',
            data:{
                code: code
            },
            dataType: 'json',
            success:function(data){
                console.log(data);
                $("#product_id1").val(data.id);
            }
        });
    }
    $(document).on('keyup', '#code', function(){
        var valorResultado = $(this).val();
        if(valorResultado!=""){
            obtener_registro(valorResultado);
        }else{
            obtener_registro();
        }
    })

    
    function agregar() {
    
        product_id = $("#product_id1").val();
        producto = $("#product_id1 option:selected").text();
        quantity = $("#quantity").val();
        price = $("#price").val();
        impuesto = $("#tax").val();
    
        if (product_id != "" && quantity != "" && quantity > 0 && price != "") {
            subtotal[cont] = quantity * price;
            total = total + subtotal[cont];
            var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="product_id[]" value="'+product_id+'">'+producto+'</td> <td> <input type="hidden" id="price[]" name="price[]" value="' + price + '"> <input class="form-control" type="number" id="price[]" value="' + price + '" disabled> </td>  <td> <input type="hidden" name="quantity[]" value="' + quantity + '"> <input class="form-control" type="number" value="' + quantity + '" disabled> </td> <td align="right">s/' + subtotal[cont] + ' </td></tr>';
            cont++;
            limpiar();
            totales();
            evaluar();
            $('#detalles').append(fila);
        } else {
            Swal.fire({
                type: 'error',
                text: 'Rellene todos los campos del detalle de la compras',
    
            })
        }
    }
    
    function limpiar() {
        $("#quantity").val("");
        $("#price").val("");
    }
    
    function totales() {
        $("#total").html("PEN " + total.toFixed(2));
        total_impuesto = total * impuesto / 100;
        total_pagar = total + total_impuesto;
        $("#total_impuesto").html("PEN " + total_impuesto.toFixed(2));
        $("#total_pagar_html").html("PEN " + total_pagar.toFixed(2));
        $("#total_pagar").val(total_pagar.toFixed(2));
    }
    
    function evaluar() {
        if (total > 0) {
            $("#guardar").show();
        } else {
            $("#guardar").hide();
        }
    }
    
    function eliminar(index) {
        total = total - subtotal[index];
        total_impuesto = total * impuesto / 100;
        total_pagar_html = total + total_impuesto;
        $("#total").html("PEN" + total);
        $("#total_impuesto").html("PEN" + total_impuesto);
        $("#total_pagar_html").html("PEN" + total_pagar_html);
        $("#total_pagar").val(total_pagar_html.toFixed(2));
        $("#fila" + index).remove();
        evaluar();
    }
    
</script>
@endsection
