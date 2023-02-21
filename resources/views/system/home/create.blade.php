@extends('system.layout.partials.base')


@section('content')

<div class="container mt-2">
        <div class="row">
            
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Registrar Empresa</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('tenant.users.index') }}"> Atrás</a>
                </div>
                <div class="pull-center">



                <form id="consulta-form" method="post">
		          @csrf
            <div class="row" id="hockey">
            <div class="dropdown-options">
              <div class="show-hide" id="value_ruc">
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label class="text-danger">Ingresar RUC<span id="asterisk" class="text-danger">*</span></label>
                  <input type="text" class="ruc form-control" id="ruc" name="ruc">
                </fieldset>
              </div>
              <div class="col-md-4">
              <fieldset class="form-group">
              <label class="text-danger">Busqueda en SUNAT<span id="asterisk" class="text-danger">*</span></label>
		<button type="submit" class="botoncito btn btn-primary"><i class="fa fa-search"></i> Buscar en SUNAT</button>
                <button class="btn btn-default btn-lg ajaxgif hide"><i class="fa fa-spinner fa-spin"></i> Buscando</button>
        <div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div>
                </fieldset>
              </div>
              </form>


              </div>

                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-12">
          <div class="chart-box">








            <div class="d-flex justify-content-between">


            <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Documento<span id="asterisk" class="text-danger">*</span></label>
                  <input readonly id="national_identity_document" class="form-control" name="national_identity_document" type="text">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Número<span id="asterisk" class="text-danger">*</span></label>
                  <input  readonly id="document_number" class="form-control" name="document_number" type="text">
                </fieldset>
              </div>







              <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Nombres y Apellidos<span id="asterisk" class="text-danger">*</span></label>
                  <input readonly id="names_surnames" class="form-control" name="names_surnames" type="text">
                </fieldset>
              </div>
              <div class="col-md-6">
              <fieldset class="form-group">
                 <label class="text-danger">Mostrar Nombre como (Alias)<span id="asterisk" class="text-danger">*</span></label>
                  <input readonly id="display_name" class="form-control" name="display_name" type="text">
                </fieldset>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Dirección<span id="asterisk" class="text-danger">*</span></label>
                  <input readonly id="address" class="form-control" name="address" type="text">
                </fieldset>
              </div>
              <div class="col-md-6">
              <fieldset class="form-group">
                 <label>Ubigeo (Distrito)</label>
                  <input readonly id="location_code" class="form-control" name="location_code" type="text">
                </fieldset>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Email</label>
                  <input  readonly id="email" class="form-control" name="email" type="email">
                </fieldset>
              </div>
              <div class="col-md-4">
              <fieldset class="form-group">
                 <label>Teléfono Móvil</label>
                  <input readonly id="mobile_phone" class="form-control" name="mobile_phone" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
              <fieldset class="form-group">
                 <label>Teléfono Fijo</label>
                  <input readonly id="landline_phone" class="form-control" name="landline_phone" type="text">
                </fieldset>
              </div>  
              
              
              <div class="col-md-4">
                <div class="form-group">
                  <fieldset class="form-group">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </fieldset>
                </div>
              </div>
            </div>      








            
          </div>
            </div>
          </div>
        </div>

        </div>

    </div>
  </div>    

      </div>
 
  
    </section>




    </form>
    <!-- content --> 

    </div>










@endsection
@section('script')
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
          // Enable the fields
          $('#national_identity_document').prop('readonly', false);
          $('#document_number').prop('readonly', false);
          $('#names_surnames').prop('readonly', false);
          $('#display_name').prop('readonly', false);
          $('#location_code').prop('readonly', false);
          $('#address').prop('readonly', false);
          $('#email').prop('readonly', false);
          $('#mobile_phone').prop('readonly', false);
          $('#landline_phone').prop('readonly', false);


          // Assign values from the API
          $('#national_identity_document').val('RUC');
          $('#document_number').val(datos.ruc);          
          $('#address').val(datos.direccion);
          $('#names_surnames').val(datos.nombre_o_razon_social);
          $('#display_name').val(datos.nombre_o_razon_social);          
          var ubicacion = datos.departamento + ' ' + datos.provincia + ' ' + datos.distrito;
          $('#location_code').val(ubicacion);
          $('#email').val('');
          $('#mobile_phone').val('');       
          $('#landline_phone').val('');
          





				}		
			}
		});
		return false;
	});
});
</script> 
@endsection