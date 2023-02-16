@extends('tenant.layouts.layout_dashboard.layout.base')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">

    @foreach ($branches as $branch)
        <h1>{{ ucfirst($branch->description) }} - Ventas</h1>
    @endforeach  
    <!-- <a class="btn btn-success" href="{{ route('tenant.branches.shoppings.index', $branch->id) }}"> Ingrsardashhs</a> -->
    
    <div class="row">
        <div class="pull-right m-2">
          <button type="button" class="btn btn-primary btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nueva Transacción <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a  href="{{ route("tenant.branches.sales.create", $branch_id) }}">Ventas</a></li>
            <li><a href="#">Cotización</a></li>
            <li><a href="#">Guía de Remisión</a></li>
          </ul>
        </div>
      </div>




      <section class="contenedor">
	<h1>Consulta Sunat en tu Web</h1>
	<form id="consulta-form" method="post">
		@csrf
		<input type="text" class="ruc" id="ruc" name="ruc">
		<button type="submit" class="botoncito"><i class="fa fa-search"></i> Buscar</button>
		<img src="ajax.gif" class="ajaxgif hide">
	</form>
	<div>RUC: <span id="numero_ruc" name="numero_ruc"></span></div>
	<div>RAZON SOCIAL: <span id="razon_social" name="razon_social"></span></div>
	<div>INICIO DE ACTIVIDAD: <span id="fecha_actividad" name="fecha_actividad"></span></div>
	<div>CONDICION: <span id="condicion" name="condicion"></span></div>
	<div>TIPO DE CONTRIBUYENTE: <span id="tipo" name="tipo"></span></div>
	<div>ESTADO DE CONTRIBUYENTE: <span id="estado" name="estado"></span></div>
	<div>FECHA DE INSCRIPCION: <span id="fecha_inscripcion" name="fecha_inscripcion"></span></div>
	<div>DOMICILIO: <span id="domicilio" name="domicilio"></span></div>
	<div>EMISION ELECTRONICA: <span id="emision" name="emision"></span></div>
</section>











       
      <form method="POST" action="{{ route('tenant.consultarRuc') }}">
    @csrf
    <button id="consultarRucBtn">Consultar RUC</button>
    <input id="rucInput" type="text" name="ruc" placeholder="Ingrese el RUC">
</form>
<div id="resultado"></div> 
<div class="form-group">
            <label for="email" class="col-md-3 control-label">Razon Social:</label>
            <div class="col-md-9">
                <textarea  class="form-control" placeholder="Razon social" readonly=""></textarea>
            </div>
        </div>
        <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Email</label>
                  <input class="form-control" name="email" id="txtrazon" type="email">
                </fieldset>
              </div>


      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <div class="media-box">
              <div class="media-icon pull-left"><i class="icon-bargraph"></i> </div>
              <div class="media-info">
                <h5>Total Leads</h5>
                <h3>1530</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="media-box bg-sea">
              <div class="media-icon pull-left"><i class="icon-wallet"></i> </div>
              <div class="media-info">
                <h5>Total Payment</h5>
                <h3>$8,530</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="media-box bg-blue">
              <div class="media-icon pull-left"><i class="icon-basket"></i> </div>
              <div class="media-info">
                <h5>Total Sales</h5>
                <h3>935</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="media-box bg-green">
              <div class="media-icon pull-left"><i class="icon-layers"></i> </div>
              <div class="media-info">
                <h5>New Orders</h5>
                <h3>5324</h3>
              </div>
            </div>
          </div>
        </div>



    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="chart-box">
              <h4>Ventas</h4>
              <div id="example_filter" class="dataTables_filter pull-right">

                
        <!-- <div class="pull-right mb-2">
            <a href="{{ route("tenant.branches.sales.create", $branch_id) }}">Nueva Transacción</a>
        </div> -->

              </div>




      <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
        <thead>
            <tr>
            <th>Fecha</th>
                <th>Fecha</th>
                <th>Documento</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                 @foreach ($sales as $sale)
                <tr>          {{-- protected $fillable = ['customer','product','amount','price','total','branch_id']; --}}
                  <td>{{ $sale->id }}</td>
                  <td><a href="#"></a>{{ $sale->price }}</td>
                  <td>{{ $sale->product }}</td>
                  <td><span class="lable-tag tag-success">{{ $sale->total }}</span></td>
                  <td>{{ $sale->branch_id }}</td>
                  <td>{{ $sale->product }}</td>
                  <td>{{ $sale->branch_id }}</td>                  
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Fecha</th>
                <th>Documento</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

            </div>
          </div>
        </div>
      </section>
      <!-- content -->         

      </section>
      <!-- content --> 



  </div>
  <!-- content-wrapper --> 


@endsection
@section('script')
<script>
$(document).ready(function () {
    $('#example').dataTable( {
  "pageLength": 20
} );
});
</script>







<script>
    $(document).ready(function() {
        $('#consultarRucBtn').click(function() {
            var ruc = $('#rucInput').val();
            $.ajax({
                url: "{{ route('tenant.consultarRuc') }}",
                type: "POST",
                headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
                data: {
                    ruc: ruc
                },
                success: function(response) {
                    console.log(response);
                    $('#resultado').html('Nombre: ' + response['nombre']);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    $('#resultado').html('Ha ocurrido un error al consultar el RUC.');
                }
            });
        });
    });
</script>


<script>
$(function(){
	$('#consulta-form').on('submit', function(e){
		e.preventDefault();
		var ruc = $('#ruc').val();
		var url = '{{ route("tenant.consultarRuc") }}';
		$('.ajaxgif').removeClass('hide');
		$.ajax({
			type:'POST',
			url:url,
			data:$(this).serialize(),
			success: function(datos_dni){
				$('.ajaxgif').addClass('hide');
				var datos = eval(datos_dni);
				var nada ='nada';
				if(datos[0]==nada){
					alert('DNI o RUC no válido o no registrado');
				}else{
					$('span[name=numero_ruc]').text(datos.ruc);
					$('span[name=razon_social]').text(datos.nombre_o_razon_social);
					$('span[name=fecha_actividad]').text(datos.fecha_de_inicio_de_actividades);
					$('span[name=condicion]').text(datos.estado_del_contribuyente);
					$('span[name=tipo]').text(datos.tipo_de_contribuyente);
					$('span[name=estado]').text(datos.condicion_de_domicilio);
					$('span[name=fecha_inscripcion]').text(datos.fecha_de_inscripcion);
					$('span[name=domicilio]').text(datos.direccion);
					$('span[name=emision]').text(datos.sistema_de_emision_de_comprobante);
          $('#txtrazon').val(datos.nombre_o_razon_social);
				}		
			}
		});
		return false;
	});
});
</script>
@endsection