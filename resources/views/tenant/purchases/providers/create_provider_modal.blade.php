<style>
#value_ruc, #value_dni, #value_otro, #value_carn, #value_pass, #value_cedu {
  display: none;
}

select {
  padding: 5px;
  border-radius: 4px;
  font-size: 16px;
}

.dropdown-options {
  font-family: Arial;
}
</style>


<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Agregar Cliente</h4>
      </div>

      <div class="modal-body">
        <!-- <h3>Cliente</h3> -->
      <!-- Main content -->
      <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">



            <div class="d-flex justify-content-between">
              
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                <h3>Proveedores</h3>
                <p>Seleccionar su tipo documento y agrege al formulario</p>
                </div>
              </div>
              <!-- <div class="col-md-4">
                <div class="form-group">
                  <fieldset class="form-group">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </fieldset>
                </div>
              </div> -->


<!-- 
  <h3>Producto</h3>
  <div class="d-flex">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div> -->
</div>

</div>






  
<form id="consulta-form" method="post">
		          @csrf
            <div class="row" id="hockey">
              <div class="col-md-4">
              <fieldset class="form-group">
              <label for="identificacion">Tipo de identificación:</label>
                  <select class="form-control" id="identificacion" name="national_identity_document" onchange="showHide(this)">
                    <option >SELECIONAR</option>
                    <option value="value_ruc">RUC</option>
                    <option value="value_dni">DNI</option>
                    <option value="value_carn">Carnet de Extranjería</option>
                    <option value="value_pass">Pasaporte</option>
                    <option value="value_cedu">Cédula Diplomática</option>
                    <option value="value_otro">Otro</option>
                  </select>
                  </fieldset>
              </div>

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


              <form id="consulta-form-dni" method="post">
		          @csrf
              <div class="show-hide" id="value_dni">
              <div class="col-md-4">
              <fieldset class="form-group">
                  <label class="text-danger">Ingresar DNI<span id="asterisk" class="text-danger">*</span></label>
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

              
     
            
              <form id="consulta-form-otro" method="post">
	@csrf
	<div class="show-hide" id="value_otro">
		<div class="col-md-4">
			<fieldset class="form-group">
				<label class="text-danger">Ingresar Otro Número<span id="asterisk" class="text-danger">*</span></label>
				<input type="text" class="dni form-control" id="dni" name="dni">
			</fieldset>
		</div>
		<div class="col-md-4">
			<fieldset class="form-group">
				<label class="text-danger">Asignar Valores<span id="asterisk" class="text-danger">*</span></label>
				<button type="submit" class="botoncito btn btn-primary"><i class="fa fa-check"></i> Agregar al Formulario</button>
			</fieldset>
		</div>
	</div>
</form>           
                             <form id="consulta-form-carn" method="post">
	@csrf
	<div class="show-hide" id="value_carn">
		<div class="col-md-4">
			<fieldset class="form-group">
				<label class="text-danger">Ingresar Carnet de Extranjería<span id="asterisk" class="text-danger">*</span></label>
				<input type="text" class="dni form-control" id="car" name="car">
			</fieldset>
		</div>
		<div class="col-md-4">
			<fieldset class="form-group">
				<label class="text-danger">Asignar Valores<span id="asterisk" class="text-danger">*</span></label>
				<button type="submit" class="botoncito btn btn-primary"><i class="fa fa-check"></i> Agregar al Formulario</button>
			</fieldset>
		</div>
	</div>
</form>           
                             <form id="consulta-form-pass" method="post">
	@csrf
	<div class="show-hide" id="value_pass">
		<div class="col-md-4">
			<fieldset class="form-group">
				<label class="text-danger">Ingresar Pasaporte<span id="asterisk" class="text-danger">*</span></label>
				<input type="text" class="dni form-control" id="pas" name="pas">
			</fieldset>
		</div>
		<div class="col-md-4">
			<fieldset class="form-group">
				<label class="text-danger">Asignar Valores<span id="asterisk" class="text-danger">*</span></label>
				<button type="submit" class="botoncito btn btn-primary"><i class="fa fa-check"></i> Agregar al Formulario</button>
			</fieldset>
		</div>
	</div>
</form>           
                           <form id="consulta-form-cedu" method="post">
	@csrf
	<div class="show-hide" id="value_cedu">
		<div class="col-md-4">
			<fieldset class="form-group">
				<label class="text-danger">Ingresar Cédula Diplomática<span id="asterisk" class="text-danger">*</span></label>
				<input type="text" class="dni form-control" id="ced" name="ced">
			</fieldset>
		</div>
		<div class="col-md-4">
			<fieldset class="form-group">
				<label class="text-danger">Asignar Valores<span id="asterisk" class="text-danger">*</span></label>
				<button type="submit" class="botoncito btn btn-primary"><i class="fa fa-check"></i> Agregar al Formulario</button>
			</fieldset>
		</div>
	</div>
</form>           
              </div>   
            </div>






            </div>


            <form action="{{ route('tenant.branches.providers.store', $branch_id) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-12">
          <div class="chart-box">








            <div class="d-flex justify-content-between">


            <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Documento<span id="asterisk" class="text-danger">*</span></label>
                  <input disabled id="national_identity_document" class="form-control" name="national_identity_document" type="text">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Número<span id="asterisk" class="text-danger">*</span></label>
                  <input disabled id="document_number" class="form-control" name="document_number" type="text">
                </fieldset>
              </div>







              <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Nombres y Apellidos<span id="asterisk" class="text-danger">*</span></label>
                  <input id="names_surnames" class="form-control" name="names_surnames" type="text">
                </fieldset>
              </div>
              <div class="col-md-6">
              <fieldset class="form-group">
                 <label class="text-danger">Mostrar Nombre como (Alias)<span id="asterisk" class="text-danger">*</span></label>
                  <input id="display_name" class="form-control" name="display_name" type="text">
                </fieldset>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Dirección<span id="asterisk" class="text-danger">*</span></label>
                  <input id="address" class="form-control" name="address" type="text">
                </fieldset>
              </div>
              <div class="col-md-6">
              <fieldset class="form-group">
                 <label>Ubigeo (Distrito)</label>
                  <input  id="location_code" class="form-control" name="location_code" type="text">
                </fieldset>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label>Email</label>
                  <input class="form-control" name="email" type="email">
                </fieldset>
              </div>
              <div class="col-md-4">
              <fieldset class="form-group">
                 <label>Teléfono Móvil</label>
                  <input class="form-control" name="mobile_phone" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
              <fieldset class="form-group">
                 <label>Teléfono Fijo</label>
                  <input class="form-control" name="landline_phone" type="text">
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

  </div>    

  

  </div>
 
  



      
 </section>
 <!-- content --> 



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
          $('#national_identity_document').val('RUC');
          $('#document_number').val(datos.ruc);          
					// $('span[name=numero_ruc]').text(datos.ruc);
          $('#address').val(datos.direccion);
          // $('#location_code').val(datos.ubigeo);
          $('#names_surnames').val(datos.nombre_o_razon_social);
          $('#display_name').val(datos.nombre_o_razon_social);          
          $('#location_code').val(datos.ubigeo);
          var ubicacion = datos.departamento + ' ' + datos.provincia + ' ' + datos.distrito;
          $('#location_code').val(ubicacion);
    //       "departamento": "LIMA",
    // "provincia": "LIMA",
    // "distrito": "COMAS",
				}		
			}
		});
		return false;
	});
});
</script>

<script>
$(function(){
	$('#consulta-form-dni').on('submit', function(e){
		e.preventDefault();
		var ruc = $('#ruc').val();
		var url = '{{ route("tenant.consultarDni") }}';
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
          $('#national_identity_document').val('DNI');
          $('#document_number').val(datos.dni);           
					// $('span[name=numero_ruc]').text(datos.ruc);
          $('#address').val(datos.direccion);
          // $('#location_code').val(datos.ubigeo);
          $('#names_surnames').val(datos.nombre_completo);
          $('#display_name').val(datos.nombre_completo);          
          // $('#location_code').val(datos.ubigeo);
          // var ubicacion = datos.departamento + ' ' + datos.provincia + ' ' + datos.distrito;
          // $('#location_code').val(ubicacion);
    //       "departamento": "LIMA",
    // "provincia": "LIMA",
    // "distrito": "COMAS",
				}		
			}
		});
		return false;
	});
});
</script>

<script>
$(function(){
	$('#consulta-form-otro').on('submit', function(e){
		e.preventDefault();
		var dni = $('#dni').val();
		
		// Asignar los valores a los campos correspondientes
		$('#national_identity_document').val('Otro');
		$('#document_number').val(dni);

		
		// Mostrar un mensaje de éxito
		// alert('Valores asignados correctamente');
		
		return false;
	});
});
</script>


<script>
$(function(){
	$('#consulta-form-carn').on('submit', function(e){
		e.preventDefault();
		var dni = $('#car').val();
		
		// Asignar los valores a los campos correspondientes
		$('#national_identity_document').val('Carnet de Extranjería');
		$('#document_number').val(dni);

		
		// Mostrar un mensaje de éxito
		// alert('Valores asignados correctamente');
		
		return false;
	});
});
</script>


<script>
$(function(){
	$('#consulta-form-pass').on('submit', function(e){
		e.preventDefault();
		var dni = $('#pas').val();
		
		// Asignar los valores a los campos correspondientes
		$('#national_identity_document').val('Pasaporte');
		$('#document_number').val(dni);

		
		// Mostrar un mensaje de éxito
		// alert('Valores asignados correctamente');
		
		return false;
	});
});
</script>



<script>
$(function(){
	$('#consulta-form-cedu').on('submit', function(e){
		e.preventDefault();
		var dni = $('#ced').val();
		
		// Asignar los valores a los campos correspondientes
		$('#national_identity_document').val('Cédula Diplomática');
		$('#document_number').val(dni);

		
		// Mostrar un mensaje de éxito
		// alert('Valores asignados correctamente');
		
		return false;
	});
});
</script>


<script>
   function showHide(elem) {
    if(elem.selectedIndex !== 0) {
         //hide the divs
         for(var i=0; i < divsO.length; i++) {
             divsO[i].style.display = 'none';
        }
        //unhide the selected div
        document.getElementById(elem.value).style.display = 'block';
    }
}
 
window.onload=function() {
    //get the divs to show/hide
    divsO = document.getElementById("hockey").getElementsByClassName('show-hide');
};
</script>
@endsection




















