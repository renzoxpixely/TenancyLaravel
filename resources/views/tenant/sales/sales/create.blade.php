@extends('tenant.layouts.layout_dashboard.layout.base_only_style')
@section('css')


@endsection

@section('content')

<body class="sidebar-mini">
<div class="wrapper">


  
  <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">


    <div class="page-header">
        <h3 class="page-title">
            Ventas
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
                <li class="breadcrumb-item"><a href="#">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de compra</li>
            </ol>
        </nav> -->
    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
              <form action="{{ route('tenant.branches.purchases.store', $branch_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @include('tenant.sales.sales._form')
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
    var product_id1 = $('#product_id1');
	
    product_id1.change(function(){
            $.ajax({
                url: "{{route('tenant.get_products_by_id')}}",
                method: 'GET',
                data:{
                    product_id: product_id1.val(),
                },
                success: function(data){
                    $("#price").val(data.sell_price);
                    $("#stock").val(data.stock);
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
                $("#price").val(data.sell_price);
                $("#stock").val(data.stock);
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
    $(document).ready(function () {
        $("#agregar").click(function () {
            agregar();
        });
    });
    var cont = 1;
    total = 0;
    subtotal = [];
    $("#guardar").hide();
    function agregar() {
    
        product_id = $("#product_id1").val();
        producto = $("#product_id1 option:selected").text();
        quantity = $("#quantity").val();
        discount = $("#discount").val();
        price = $("#price").val();
        stock = $("#stock").val();
        impuesto = $("#tax").val();
        if (product_id != "" && quantity != "" && quantity > 0 && discount != "" && price != "") {
            if (parseInt(stock) >= parseInt(quantity)) {
                subtotal[cont] = (quantity * price) - (quantity * price * discount / 100);
                total = total + subtotal[cont];
                var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont + ');"><i class="fa fa-times fa-2x"></i></button></td> <td><input type="hidden" name="product_id[]" value="' + product_id + '">' + producto + '</td> <td> <input type="hidden" name="price[]" value="' + parseFloat(price).toFixed(2) + '"> <input class="form-control" type="number" value="' + parseFloat(price).toFixed(2) + '" disabled> </td> <td> <input type="hidden" name="discount[]" value="' + parseFloat(discount) + '"> <input class="form-control" type="number" value="' + parseFloat(discount) + '" disabled> </td> <td> <input type="hidden" name="quantity[]" value="' + quantity + '"> <input type="number" value="' + quantity + '" class="form-control" disabled> </td> <td align="right">s/' + parseFloat(subtotal[cont]).toFixed(2) + '</td></tr>';
                cont++;
                limpiar();
                totales();
                evaluar();
                $('#detalles').append(fila);
            } else {
                Swal.fire({
                    type: 'error',
                    text: 'La cantidad a vender supera el stock.',
                })
            }
        } else {
            Swal.fire({
                type: 'error',
                text: 'Rellene todos los campos del detalle de la venta.',
            })
        }
    }
    function limpiar() {
        $("#quantity").val("");
        $("#discount").val("0");
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
