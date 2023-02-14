<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Editar Producto</h4>
      </div>

      <div class="modal-body">
        <!-- <h3>Cliente</h3> -->
      <!-- Main content -->
      <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">


          <form>
      <label for="ruc">RUC:</label>
      <input type="text" id="ruc" name="ruc" required>
      <br>
      <label for="nombre">Nombre o razón social:</label>
      <input type="text" id="nombre" name="nombre" required>
      <br>
      <label for="estado">Estado del contribuyente:</label>
      <input type="text" id="estado" name="estado" required>
      <br>
      <label for="condicion">Condición de domicilio:</label>
      <input type="text" id="condicion" name="condicion" required>
      <br>
      <button type="submit" id="buscar">Buscar</button>
    </form>








      <form action="{{ route('tenant.branches.clients.store', $branch_id) }}"  method="POST" enctype="multipart/form-data">
            @csrf

            <div class="d-flex justify-content-between">
              
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                <h3>Cliente</h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <fieldset class="form-group">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </fieldset>
                </div>
              </div>


<!-- 
  <h3>Producto</h3>
  <div class="d-flex">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div> -->
</div>

</div>

     
  

            <div class="row">
              <div class="col-md-4">
              <fieldset class="form-group">
              <label for="identificacion">Tipo de identificación:</label>
                  <select class="form-control" id="identificacion" name="national_identity_document">
                    <option value="RUC">RUC</option>
                    <option value="DNI">DNI</option>
                    <option value="CE">Carnet de Extranjería</option>
                    <option value="PASAPORTE">Pasaporte</option>
                    <option value="CEDULA">Cédula Diplomática</option>
                    <option value="OTRO">Otro</option>
                  </select>
                  </fieldset>
              </div>
              <div class="col-md-4">
                <fieldset class="form-group">
                  <label class="text-danger">Número de Documento<span id="asterisk" class="text-danger">*</span></label>
                  <input class="form-control" name="document_number" type="text">
                </fieldset>
              </div>
              <div class="col-md-4">
              <fieldset class="form-group">
                  <label>Sunat</label>
                  <button data-dismiss="modal" data-toggle="modal"  type="button" class="btn btn-primary btn-lg btn-block">Buscar en Sunat</button>
                </fieldset>
              </div>
            </div>
      
            <div class="row">
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Nombres y Apellidos<span id="asterisk" class="text-danger">*</span></label>
                  <input class="form-control" name="names_surnames" type="text">
                </fieldset>
              </div>
              <div class="col-md-6">
              <fieldset class="form-group">
                 <label class="text-danger">Mostrar Nombre como (Alias)<span id="asterisk" class="text-danger">*</span></label>
                  <input class="form-control" name="display_name" type="text">
                </fieldset>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label class="text-danger">Dirección<span id="asterisk" class="text-danger">*</span></label>
                  <input class="form-control" name="address" type="text">
                </fieldset>
              </div>
              <div class="col-md-6">
              <fieldset class="form-group">
                 <label>Ubigeo (Distrito)</label>
                  <input class="form-control" name="location_code" type="text">
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

  @section('script')
  <script>
const form = document.querySelector('form');
const rucInput = document.querySelector('#ruc');
const nombreInput = document.querySelector('#nombre');
const estadoInput = document.querySelector('#estado');
const condicionInput = document.querySelector('#condicion');
const buscarButton = document.querySelector('#buscar');

buscarButton.addEventListener('click', (event) => {
  event.preventDefault();

  const ruc = rucInput.value;
  const apiUrl = `http://y.localhost:8000/https://ruc.com.pe/api/v1/consultas?ruc=${ruc}`;

  fetch(apiUrl, {
    method: 'GET',
    headers: {
      'Authorization': 'f050c3ab-d85a-4083-91e9-e5b068ad9c50-64a32f1c-3c31-4d35-ae13-702ee3239485',
      'Content-Type': 'application/json'
    }
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Error al buscar el RUC');
    }
    return response.json();
  })
  .then(data => {
    nombreInput.value = data.nombre_o_razon_social;
    estadoInput.value = data.estado_del_contribuyente;
    condicionInput.value = data.condicion_de_domicilio;
  })
  .catch(error => {
    console.error(error);
    alert('Error al buscar el RUC');
  });
});
  </script>

@endsection





















  

      </div>
 
  



      
    </section>
    <!-- content --> 


